<?php

namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ImageHelper
{
    /**
     * Upload file to both storage and public directories
     * 
     * @param UploadedFile $file
     * @param string $path
     * @return string
     */
    public static function dualUpload(UploadedFile $file, string $path = 'uploads'): string
    {
        // Generate unique filename
        $filename = time() . '_' . Str::random(10) . '.' . $file->getClientOriginalExtension();
        $filePath = $path . '/' . $filename;
        
        // Upload to storage/app/public (accessible via Storage::url())
        $storagePath = $file->storeAs($path, $filename, 'public');
        
        // Upload to public/uploads (direct public access)
        $publicPath = public_path('uploads/' . $filePath);
        $publicDir = dirname($publicPath);
        
        // Create directory if it doesn't exist
        if (!File::exists($publicDir)) {
            File::makeDirectory($publicDir, 0755, true);
        }
        
        // Copy file to public directory
        File::copy($file->getPathname(), $publicPath);
        
        return $filePath;
    }
    
    /**
     * Get image URL with fallback mechanism
     * Try storage first, then public/uploads
     * 
     * @param string|null $imagePath
     * @param string $default
     * @return string
     */
    public static function getImageUrl(?string $imagePath, string $default = '/assets/img/default.jpg'): string
    {
        if (empty($imagePath)) {
            return asset($default);
        }
        
        // Try storage first
        if (Storage::disk('public')->exists($imagePath)) {
            return Storage::url($imagePath);
        }
        
        // Try public/uploads
        $publicPath = public_path('uploads/' . $imagePath);
        if (File::exists($publicPath)) {
            return asset('uploads/' . $imagePath);
        }
        
        // Return default if neither exists
        return asset($default);
    }
    
    /**
     * Delete image from both locations
     * 
     * @param string|null $imagePath
     * @return bool
     */
    public static function deleteImage(?string $imagePath): bool
    {
        if (empty($imagePath)) {
            return false;
        }
        
        $deleted = false;
        
        // Delete from storage
        if (Storage::disk('public')->exists($imagePath)) {
            Storage::disk('public')->delete($imagePath);
            $deleted = true;
        }
        
        // Delete from public/uploads
        $publicPath = public_path('uploads/' . $imagePath);
        if (File::exists($publicPath)) {
            File::delete($publicPath);
            $deleted = true;
        }
        
        return $deleted;
    }
    
    /**
     * Check if image exists in either location
     * 
     * @param string|null $imagePath
     * @return bool
     */
    public static function imageExists(?string $imagePath): bool
    {
        if (empty($imagePath)) {
            return false;
        }
        
        return Storage::disk('public')->exists($imagePath) || 
               File::exists(public_path('uploads/' . $imagePath));
    }
    
    /**
     * Get image size info
     * 
     * @param string|null $imagePath
     * @return array|null
     */
    public static function getImageInfo(?string $imagePath): ?array
    {
        if (empty($imagePath)) {
            return null;
        }
        
        $fullPath = null;
        
        // Try storage first
        if (Storage::disk('public')->exists($imagePath)) {
            $fullPath = Storage::disk('public')->path($imagePath);
        } 
        // Try public/uploads
        else {
            $publicPath = public_path('uploads/' . $imagePath);
            if (File::exists($publicPath)) {
                $fullPath = $publicPath;
            }
        }
        
        if ($fullPath && File::exists($fullPath)) {
            $imageInfo = getimagesize($fullPath);
            return [
                'width' => $imageInfo[0] ?? null,
                'height' => $imageInfo[1] ?? null,
                'mime' => $imageInfo['mime'] ?? null,
                'size' => File::size($fullPath)
            ];
        }
        
        return null;
    }
}
