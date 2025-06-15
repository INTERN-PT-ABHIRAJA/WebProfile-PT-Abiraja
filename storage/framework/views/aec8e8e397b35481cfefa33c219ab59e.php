<?php $__env->startSection('title', ucfirst($tableKey)); ?>

<?php $__env->startSection('content'); ?>
    <?php
        use App\Config\DashboardConfig;
        use Illuminate\Support\Str;
    ?>

    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold"><?php echo e(App::isLocale('id') ? (DashboardConfig::getTables()[$tableKey]['name_id'] ?? Str::title($tableKey)) : (DashboardConfig::getTables()[$tableKey]['name'] ?? Str::title($tableKey))); ?></h1>
        
        <a href="<?php echo e(route($routePrefix . '.create')); ?>" class="inline-flex items-center px-4 py-2 bg-primary-600 text-white rounded-lg text-sm font-medium hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            Add New
        </a>
    </div>
    
    <?php if(session('success')): ?>
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm"><?php echo e(session('success')); ?></p>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if(session('error')): ?>
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm"><?php echo e(session('error')); ?></p>
                </div>
            </div>
        </div>
    <?php endif; ?>
    
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="p-5 border-b border-gray-100 flex justify-between items-center">
            <h3 class="text-lg font-medium text-gray-800"><?php echo e($tableConfig['name'] ?? Str::title($tableKey)); ?> List</h3>
            
            <form method="GET" action="<?php echo e(route($routePrefix . '.index')); ?>" class="flex items-center">
                <div class="relative mr-2">
                    <input type="text" name="search" value="<?php echo e($searchTerm); ?>" 
                        placeholder="Search..." 
                        class="bg-gray-50 border border-gray-200 rounded-lg py-2 pl-3 pr-10 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500">
                    <button type="submit" class="absolute right-2 top-1/2 -translate-y-1/2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
        
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <?php $__currentLoopData = $tableConfig; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column => $config): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                <?php if(isset($config['sortable']) && $config['sortable']): ?>
                                    <a href="<?php echo e(route($routePrefix . '.index', ['sort' => $column, 'direction' => $sortColumn == $column && $sortDirection == 'asc' ? 'desc' : 'asc', 'search' => $searchTerm])); ?>" class="flex items-center">
                                        <?php echo e($config['label_id'] ?? $config['label'] ?? Str::title(str_replace('_', ' ', $column))); ?>

                                        
                                        <?php if($sortColumn == $column): ?>
                                            <?php if($sortDirection == 'asc'): ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
                                                </svg>
                                            <?php else: ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                                </svg>
                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </a>
                                <?php else: ?>
                                    <?php echo e($config['label_id'] ?? $config['label'] ?? Str::title(str_replace('_', ' ', $column))); ?>

                                <?php endif; ?>
                            </th>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php if($items->isEmpty()): ?>
                        <tr>
                            <td colspan="<?php echo e(count($tableConfig) + 1); ?>" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                No records found.
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="hover:bg-gray-50">
                                <?php $__currentLoopData = $tableConfig; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column => $config): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <?php if(isset($config['relation']) && isset($config['relation_column'])): ?>
                                            <?php
                                                $relationMethod = $config['relation'];
                                                $relationColumn = $config['relation_column'];
                                                $value = optional($item->$relationMethod)->$relationColumn;
                                            ?>
                                            <?php echo e($value); ?>

                                        <?php elseif(isset($config['format']) && $config['format'] == 'currency'): ?>
                                            Rp<?php echo e(number_format($item->$column, 0, ',', '.')); ?>

                                        <?php elseif(isset($config['thumbnail']) && $config['thumbnail'] && !empty($item->$column) && Str::contains($item->$column, ['jpg', 'jpeg', 'png', 'gif'])): ?>
                                            <img src="<?php echo e(asset('storage/' . $item->$column)); ?>" alt="Thumbnail" class="h-8 w-auto">
                                        <?php else: ?>
                                            <?php if(isset($config['truncate'])): ?>
                                                <?php echo e(Str::limit($item->$column, $config['truncate'])); ?>

                                            <?php else: ?>
                                                <?php echo e($item->$column); ?>

                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <div class="flex justify-end space-x-2">
                                        <a href="<?php echo e(route($routePrefix . '.edit', $item->{$primaryKey})); ?>" class="text-indigo-600 hover:text-indigo-900">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>
                                        
                                        <form action="<?php echo e(route($routePrefix . '.delete', $item->{$primaryKey})); ?>" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?')">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="text-red-600 hover:text-red-900">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        
        <div class="p-4 border-t border-gray-200">
            <?php echo e($items->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\kuliah\semester 4\Proyek Konsultasi\abhiraja\WebProfile-PT-Abiraja\resources\views/dashboard/partials/index.blade.php ENDPATH**/ ?>