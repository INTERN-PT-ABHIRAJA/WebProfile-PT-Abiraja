<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PT ABHIRAJA GIOVANNI TRYAMANDA</title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                            950: '#082f49',
                        },
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 font-sans">
    <div class="min-h-screen flex items-center justify-center p-6">
        <div class="w-full max-w-md">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-primary-600 mb-1">PT ABHIRAJA</h1>
                <p class="text-gray-600">Login to Dashboard</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="p-6">
                    <?php if($errors->any()): ?>
                        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6" role="alert">
                            <p class="font-medium">Error:</p>
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                        
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 text-sm font-medium mb-1">Email</label>
                            <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>" required autofocus
                                   class="block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-primary-200 focus:border-primary-500 outline-none transition">
                        </div>
                        
                        <div class="mb-6">
                            <label for="password" class="block text-gray-700 text-sm font-medium mb-1">Password</label>
                            <input type="password" id="password" name="password" required
                                   class="block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-primary-200 focus:border-primary-500 outline-none transition">
                        </div>
                        
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center">
                                <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-primary-600 focus:ring-primary-200 border-gray-300 rounded">
                                <label for="remember" class="ml-2 block text-sm text-gray-700">Remember me</label>
                            </div>
                        </div>
                        
                        <button type="submit" class="w-full bg-primary-600 hover:bg-primary-700 focus:bg-primary-700 text-white py-2 px-4 rounded-md font-medium transition">
                            Login
                        </button>
                    </form>
                </div>
            </div>
            
            <div class="text-center mt-6">
                <a href="<?php echo e(url('/')); ?>" class="text-primary-600 hover:text-primary-800 text-sm">
                    &larr; Back to Website
                </a>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH D:\kuliah\semester 4\Proyek Konsultasi\abhiraja\WebProfile-PT-Abiraja\resources\views/auth/login.blade.php ENDPATH**/ ?>