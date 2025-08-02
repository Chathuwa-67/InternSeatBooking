

<?php $__env->startSection('title', 'Register'); ?>

<?php $__env->startSection('content'); ?>
<!-- Bootstrap Icons & Fonts -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />

<style>
    body {
        font-family: "Poppins", sans-serif;
        background-color: #f1f5f9;
    }
</style>

<div class="min-h-screen flex items-center justify-center">
    <div class="w-full max-w-5xl mx-4 bg-white shadow-xl rounded-2xl overflow-hidden grid grid-cols-1 md:grid-cols-2">

        <!-- Left Form Side -->
        <div class="p-8 md:p-10 bg-white/90">
            <div class="flex justify-center mb-4">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center">
                    <i class="bi bi-person-plus text-blue-600 text-2xl"></i>
                </div>
            </div>
            <h2 class="text-xl font-semibold text-center text-gray-800 mb-1">Intern Seat Reservation System</h2>
            <h4 class="text-lg text-center text-gray-600 mb-6">Register</h4>

            <form method="POST" action="<?php echo e(route('register')); ?>">
                <?php echo csrf_field(); ?>

                <div class="mb-4">
                    <label for="reg_no" class="block text-sm font-medium text-gray-600 mb-1">Registration Number</label>
                    <div class="relative">
                        <i class="bi bi-person-vcard absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <input type="text" name="reg_no" id="reg_no" value="<?php echo e(old('reg_no')); ?>" maxlength="4"
                            pattern="\d{4}"
                            placeholder="Enter Registration Number"
                            autofocus
                            required
                            class="w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg text-sm font-medium focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <?php $__errorArgs = ['reg_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-sm text-red-500 mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-600 mb-1">Full Name</label>
                    <div class="relative">
                        <i class="bi bi-person-fill absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <input type="text" name="name" id="name" value="<?php echo e(old('name')); ?>"
                            placeholder="Enter full name"
                            class="w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg text-sm font-medium focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required >
                    </div>
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-sm text-red-500 mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-600 mb-1">Email Address</label>
                    <div class="relative">
                        <i class="bi bi-envelope absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <input type="email" name="email" id="email" value="<?php echo e(old('email')); ?>"
                            placeholder="Enter email"
                            class="w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg text-sm font-medium focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                    </div>
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-sm text-red-500 mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-600 mb-1">Password</label>
                    <div class="relative">
                        <i class="bi bi-lock-fill absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <input type="password" name="password" id="password"
                            placeholder="Enter password"
                            class="w-full pl-10 pr-10 py-2.5 border border-gray-300 rounded-lg text-sm font-medium focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                        <button type="button" id="togglePassword"
                            class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-500">
                            <i id="eyePassword" class="bi bi-eye-slash"></i>
                        </button>
                    </div>
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-sm text-red-500 mt-1"><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <!-- Confirm Password -->
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-600 mb-1">Confirm Password</label>
                    <div class="relative">
                        <i class="bi bi-lock-fill-check absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            placeholder="Confirm password"
                            class="w-full pl-10 pr-10 py-2.5 border border-gray-300 rounded-lg text-sm font-medium focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
                        <button type="button" id="toggleConfirm"
                            class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-500">
                            <i id="eyeConfirm" class="bi bi-eye-slash"></i>
                        </button>
                    </div>
                </div>

                <button type="submit"
                    class="w-full bg-gradient-to-r from-blue-600 to-green-500 hover:from-blue-700 hover:to-green-600 text-white font-medium py-2.5 px-4 rounded-full transition-all duration-300 shadow-md hover:shadow-lg">
                    <i class="bi bi-person-check mr-2"></i> Register
                </button>
            </form>

            <div class="relative flex items-center my-6">
                <div class="flex-grow border-t border-gray-300"></div>
                <span class="flex-shrink mx-4 text-gray-500 text-sm">OR</span>
                <div class="flex-grow border-t border-gray-300"></div>
            </div>

            <!-- Google and Login Buttons -->
            <div class="flex flex-col sm:flex-row gap-3">
                <a href="<?php echo e(route('google.login')); ?>"
                    class="flex items-center justify-center gap-2 w-full sm:w-1/2 border border-gray-300 rounded-full py-2.5 px-4 font-medium text-gray-700 hover:bg-gray-50 transition-colors duration-300">
                    <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google"
                        class="w-5 h-5" />
                    Google
                </a>

                <a href="<?php echo e(route('login')); ?>"
                    class="flex items-center justify-center gap-2 w-full sm:w-1/2 border border-blue-500 text-blue-600 rounded-full py-2.5 px-4 font-medium hover:bg-blue-50 transition-colors duration-300">
                    <i class="bi bi-box-arrow-in-right"></i>
                    Login
                </a>
            </div>

            <div class="flex justify-center mt-6">
                <img src="https://i.postimg.cc/QCkgQS5p/SLTMobitel-Logo-svg.png" alt="SLTMobitel Logo"
                    class="h-10" />
            </div>
        </div>

        <!-- Right Image Side -->
        <div class="hidden md:block relative">
            <img src="https://img.freepik.com/premium-psd/3d-office-rooms-isometric-icon-illustration_1155620-2099.jpg"
                alt="Register Background"
                class="w-full h-full object-cover" />
        </div>
    </div>
</div>

<script>
    const togglePassword = document.getElementById("togglePassword");
    const passwordInput = document.getElementById("password");
    const eyePassword = document.getElementById("eyePassword");

    togglePassword.addEventListener("click", () => {
        const type = passwordInput.type === "password" ? "text" : "password";
        passwordInput.type = type;
        eyePassword.className = type === "password" ? "bi bi-eye-slash" : "bi bi-eye";
    });

    const toggleConfirm = document.getElementById("toggleConfirm");
    const confirmInput = document.getElementById("password_confirmation");
    const eyeConfirm = document.getElementById("eyeConfirm");

    toggleConfirm.addEventListener("click", () => {
        const type = confirmInput.type === "password" ? "text" : "password";
        confirmInput.type = type;
        eyeConfirm.className = type === "password" ? "bi bi-eye-slash" : "bi bi-eye";
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Administrator\Desktop\Seat\3\seat-reservation-system\resources\views/auth/register.blade.php ENDPATH**/ ?>