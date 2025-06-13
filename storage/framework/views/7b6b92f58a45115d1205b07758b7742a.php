<?php $__env->startSection('title', 'Tambah Produk'); ?>

<?php $__env->startSection('content'); ?>
    <div class="bg-white shadow rounded-lg overflow-hidden">
        <div class="p-6 border-b">
            <h3 class="text-lg font-semibold text-gray-800">Tambah Produk Baru</h3>
        </div>
        
        <form action="<?php echo e(route('dashboard.products.store')); ?>" method="POST" class="p-6" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            
            <?php echo $__env->make('dashboard.products.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
            <div class="flex justify-end">
                <a href="<?php echo e(route('dashboard.products.index')); ?>" class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 mr-2">
                    Batal
                </a>
                <button type="submit" class="px-4 py-2 bg-primary-600 text-white rounded-md text-sm hover:bg-primary-700">
                    Simpan
                </button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    let detailFotoCount = 1;
    
    // Add new detail foto input
    document.getElementById('add-detail-foto').addEventListener('click', function() {
        const container = document.getElementById('detail-fotos-container');
        const newInput = document.createElement('div');
        newInput.className = 'detail-foto-input mb-2 flex items-center';
        newInput.innerHTML = `
            <input type="file" name="detail_fotos[]" accept="image/*" 
                   class="w-full border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500">
            <button type="button" class="ml-2 px-2 py-1 bg-red-500 text-white text-sm rounded hover:bg-red-600 remove-detail-foto">
                Hapus
            </button>
        `;
        container.appendChild(newInput);
        detailFotoCount++;
    });
    
    // Remove detail foto input
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-detail-foto')) {
            e.target.parentElement.remove();
        }
    });
    
    // Preview main foto upload
    const fotoInput = document.getElementById('foto');
    if (fotoInput) {
        fotoInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    // Create or update preview
                    let preview = document.getElementById('foto-preview');
                    if (!preview) {
                        preview = document.createElement('div');
                        preview.id = 'foto-preview';
                        preview.className = 'mt-2';
                        fotoInput.parentNode.insertBefore(preview, fotoInput.nextSibling);
                    }
                    preview.innerHTML = '<img src="' + e.target.result + '" class="w-20 h-20 object-cover rounded-lg"><p class="text-xs text-gray-500 mt-1">Preview</p>';
                };
                reader.readAsDataURL(file);
            }
        });
    }
});
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\WebProfile-PT-Abiraja\resources\views/dashboard/products/create.blade.php ENDPATH**/ ?>