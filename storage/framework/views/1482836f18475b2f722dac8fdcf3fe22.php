<div class="mb-6">
    <label for="id_anak_perusahaan" class="block text-sm font-medium text-gray-700 mb-1">Anak Perusahaan</label>
    <select name="id_anak_perusahaan" id="id_anak_perusahaan" class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" required>
        <option value="">-- Pilih Anak Perusahaan --</option>
        <?php $__currentLoopData = \App\Models\AnakPerusahaan::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($company->id_anak_perusahaan); ?>" 
                <?php echo e((old('id_anak_perusahaan') ?? $item->id_anak_perusahaan ?? '') == $company->id_anak_perusahaan ? 'selected' : ''); ?>>
                <?php echo e($company->nama_perusahaan); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <?php $__errorArgs = ['id_anak_perusahaan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="mt-1 text-sm text-red-600"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="mb-6">
        <label for="nama_produk" class="block text-sm font-medium text-gray-700 mb-1">Nama Produk</label>
        <input type="text" name="nama_produk" id="nama_produk" 
               value="<?php echo e(old('nama_produk') ?? $item->nama_produk ?? ''); ?>" 
               class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500" required>
        <?php $__errorArgs = ['nama_produk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="mt-1 text-sm text-red-600"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
    
    <div class="mb-6">
        <label for="rating" class="block text-sm font-medium text-gray-700 mb-1">Rating (0-5)</label>
        <input type="number" name="rating" id="rating" min="0" max="5" step="0.1" 
               value="<?php echo e(old('rating') ?? $item->rating ?? '0.0'); ?>" 
               class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500">
        <p class="text-xs text-gray-500 mt-1">Rating produk dari 0.0 hingga 5.0</p>
        <?php $__errorArgs = ['rating'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="mt-1 text-sm text-red-600"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
</div>

<div class="mb-6">
    <label for="deskripsi_produk" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Produk</label>
    <textarea name="deskripsi_produk" id="deskripsi_produk" rows="4" 
              class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500"><?php echo e(old('deskripsi_produk') ?? $item->deskripsi_produk ?? ''); ?></textarea>
    <?php $__errorArgs = ['deskripsi_produk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="mt-1 text-sm text-red-600"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
    <div>
        <label for="foto" class="block text-sm font-medium text-gray-700 mb-1">Foto Produk</label>
        <?php if(isset($item) && $item->foto): ?>
            <div class="mb-2">
                <img src="<?php echo e(Storage::url($item->foto)); ?>" alt="Current Photo" class="w-20 h-20 object-cover rounded">
                <p class="text-xs text-gray-500">Foto saat ini</p>
            </div>
        <?php endif; ?>
        <input type="file" name="foto" id="foto" class="w-full border border-gray-300 rounded-md p-2">
        <p class="text-xs text-gray-500 mt-1">Format: JPEG, PNG, JPG, GIF (Maks. 2MB)</p>
        <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="mt-1 text-sm text-red-600"><?php echo e($message); ?></p>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
      <!-- Video field has been removed -->
    
</div>

<!-- Benefits Section -->
<div class="mb-6">
    <label class="block text-sm font-medium text-gray-700 mb-2">Benefits Produk</label>
    
    <?php if(isset($item) && $item->benefits && $item->benefits->count() > 0): ?>
        <div class="mb-4">
            <p class="text-sm text-gray-600 mb-2">Benefits saat ini:</p>
            <div class="grid grid-cols-2 gap-4 mb-4">
                <?php $__currentLoopData = $item->benefits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $benefit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="relative flex items-center p-2 bg-gray-50 rounded">
                        <span class="flex-grow"><?php echo e($benefit->nama_benefit); ?></span>
                        <div class="ml-2">
                            <label class="flex items-center text-xs">
                                <input type="checkbox" name="remove_benefits[]" 
                                       value="<?php echo e($benefit->id_benefit); ?>" 
                                       class="mr-1 text-red-600">
                                <span class="text-red-600">Hapus</span>
                            </label>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    <?php endif; ?>

    <div id="benefits-container">
        <div class="benefit-input mb-2 flex items-center">
            <input type="text" name="benefits[]" placeholder="Masukkan benefit" 
                   class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500">
        </div>
    </div>
    
    <button type="button" id="add-benefit" 
            class="mt-2 px-3 py-1 bg-blue-500 text-white text-sm rounded hover:bg-blue-600">
        + Tambah Benefit
    </button>
    <?php $__errorArgs = ['benefits.*'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="mt-1 text-sm text-red-600"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<!-- Multiple Detail Photos Section -->
<div class="mb-6">
    <label class="block text-sm font-medium text-gray-700 mb-2">Foto Detail Produk (Multiple)</label>
    
    <?php if(isset($item) && $item->detailFoto && $item->detailFoto->count() > 0): ?>
        <div class="mb-4">
            <p class="text-sm text-gray-600 mb-2">Foto detail saat ini:</p>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-4">
                <?php $__currentLoopData = $item->detailFoto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detailFoto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="relative">
                        <img src="<?php echo e(asset('storage/' . $detailFoto->foto)); ?>" 
                             alt="Detail foto" class="w-20 h-20 object-cover rounded-lg">
                        <div class="mt-1">
                            <label class="flex items-center text-xs">
                                <input type="checkbox" name="remove_detail_fotos[]" 
                                       value="<?php echo e($detailFoto->id_foto); ?>" 
                                       class="mr-1 text-red-600">
                                <span class="text-red-600">Hapus</span>
                            </label>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    <?php endif; ?>

    <div id="detail-fotos-container">
        <div class="detail-foto-input mb-2">
            <input type="file" name="detail_fotos[]" accept="image/*" 
                   class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500">
        </div>
    </div>
    
    <button type="button" id="add-detail-foto" 
            class="mt-2 px-3 py-1 bg-blue-500 text-white text-sm rounded hover:bg-blue-600">
        + Tambah Foto Detail
    </button>
    <p class="text-xs text-gray-500 mt-1">Format: JPG, PNG, GIF. Maksimal 2MB per foto</p>
    <?php $__errorArgs = ['detail_fotos.*'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p class="mt-1 text-sm text-red-600"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>
<?php /**PATH D:\kuliah\semester 4\Proyek Konsultasi\abhiraja\WebProfile-PT-Abiraja\resources\views/dashboard/products/form.blade.php ENDPATH**/ ?>