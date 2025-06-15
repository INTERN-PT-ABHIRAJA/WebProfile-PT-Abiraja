<?php $__env->startSection('title', isset($item) ? 'Edit Media' : 'Upload Media'); ?>

<?php
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
?>

<?php $__env->startSection('content'); ?>
    <div class="bg-white shadow rounded-lg overflow-hidden">
        <div class="p-6 border-b">
            <h3 class="text-lg font-semibold text-gray-800"><?php echo e(isset($item) ? 'Edit Media' : 'Upload Media Baru'); ?></h3>
        </div>
        
        <form action="<?php echo e($formAction); ?>" method="POST" class="p-6" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php if($formMethod === 'PUT'): ?>
                <?php echo method_field('PUT'); ?>
            <?php endif; ?>
            
            <div class="mb-6">
                <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Judul</label>
                <input type="text" name="title" id="title" value="<?php echo e(old('title', $item?->title ?? '')); ?>" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" required>
                <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-1 text-sm text-red-600"><?php echo e($message ?? 'Invalid input'); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            
            <div class="mb-6">
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
                <textarea name="description" id="description" rows="5" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500"><?php echo e(old('description', $item?->description ?? '')); ?></textarea>
                <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-1 text-sm text-red-600"><?php echo e($message ?? 'Invalid input'); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            
            <?php if(!isset($item)): ?>
            <div class="mb-6">
                <label for="file_path" class="block text-sm font-medium text-gray-700 mb-1">File</label>
                <input type="file" name="file_path" id="file_path" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" required>
                <p class="mt-1 text-sm text-gray-500">Ukuran maksimum: 10MB. Format yang didukung: jpeg, png, jpg, gif, pdf, doc, docx, xls, xlsx, ppt, pptx, mp4, mp3</p>
                <?php $__errorArgs = ['file_path'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-1 text-sm text-red-600"><?php echo e($message ?? 'Invalid file'); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <?php else: ?>
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-1">File Saat Ini</label>
                <div class="mt-2">
                    <?php if(Str::startsWith($item->mime_type, 'image/')): ?>
                        <img src="<?php echo e(Storage::url($item->file_path)); ?>" alt="<?php echo e($item->title); ?>" class="max-h-40 rounded">
                    <?php elseif(Str::startsWith($item->mime_type, 'video/')): ?>
                        <video controls class="max-h-40 rounded">
                            <source src="<?php echo e(Storage::url($item->file_path)); ?>" type="<?php echo e($item->mime_type); ?>">
                            Browser Anda tidak mendukung tag video.
                        </video>
                    <?php else: ?>
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                            <a href="<?php echo e(Storage::url($item->file_path)); ?>" target="_blank" class="text-blue-500 hover:underline"><?php echo e($item->title); ?></a>
                        </div>
                    <?php endif; ?>
                </div>
                
                <div class="mt-4">
                    <label for="file_path" class="block text-sm font-medium text-gray-700">Ganti File (opsional)</label>
                    <input type="file" name="file_path" id="file_path" class="mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500">
                    <p class="mt-1 text-sm text-gray-500">Biarkan kosong jika tidak ingin mengganti file yang ada.</p>
                </div>
                <?php $__errorArgs = ['file_path'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-1 text-sm text-red-600"><?php echo e($message ?? 'Invalid file'); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <?php endif; ?>
              
            <div class="flex justify-end">
                <a href="<?php echo e(route('dashboard.media.index')); ?>" class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 mr-2">
                    Batal
                </a>
                <button type="submit" class="px-4 py-2 bg-primary-600 text-white rounded-md text-sm hover:bg-primary-700">
                    <?php echo e(isset($item) ? 'Simpan Perubahan' : 'Upload'); ?>

                </button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\kuliah\semester 4\Proyek Konsultasi\abhiraja\WebProfile-PT-Abiraja\resources\views/dashboard/media/form.blade.php ENDPATH**/ ?>