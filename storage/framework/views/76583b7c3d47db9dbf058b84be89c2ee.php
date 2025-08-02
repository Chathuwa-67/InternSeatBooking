

<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
<!-- Tailwind + Bootstrap Icons -->
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
        <!-- Left Image Side -->
        <div class="hidden md:block relative">
            <img src="https://cdn.jsdelivr.net/gh/OpenBristolData/SLTMobitel-Resource@main/LoginSeat.jpeg" alt="Login Background"
                class="w-full h-full object-cover" />
        </div>

        <!-- Right Form Side -->
        <div class="p-8 md:p-10 bg-white/90 w-full">
            <div class="flex justify-center mb-4">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center">
                    <i class="bi bi-shield-lock text-blue-600 text-2xl"></i>
                </div>
            </div>
            <h2 class="text-xl font-semibold text-center text-gray-800 mb-1">Intern Seat Reservation System</h2>
            <h4 class="text-lg text-center text-gray-600 mb-6">Log In</h4>

            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>

                <div class="mb-4">
                    <label for="login" class="block text-sm font-medium text-gray-600 mb-1">Email or Login ID</label>
                    <div class="relative">
                        <i class="bi bi-person absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <input type="text" name="login" id="login" value="<?php echo e(old('login')); ?>"
                            placeholder="Enter login ID"
                            class="w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg text-sm font-medium focus:outline-none focus:ring-2 focus:ring-blue-500" required autofocus>
                    </div>
                    <?php $__errorArgs = ['login'];
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
                    <div class="flex justify-between items-center text-sm font-medium text-gray-600 mb-1">
                        <label for="password">Password</label>
                        <span id="togglePassword"
                            class="flex items-center gap-1 text-gray-500 text-xs cursor-pointer">
                            <i class="bi bi-eye-slash" id="eyeIcon"></i>
                            <span id="toggleText">Hide</span>
                        </span>
                    </div>
                    <div class="relative">
                        <i class="bi bi-lock absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <input type="password" name="password" id="password"
                            placeholder="Enter password"
                            class="w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg text-sm font-medium focus:outline-none focus:ring-2 focus:ring-blue-500"
                            required>
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

                <div class="flex items-center gap-2 mb-4">
                    <input type="checkbox" id="remember" name="remember"
                        class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded"
                        <?php echo e(old('remember') ? 'checked' : ''); ?>>
                    <label for="remember" class="text-sm text-gray-700">Remember me</label>
                </div>

                <button type="submit"
                    class="w-full bg-gradient-to-r from-blue-600 to-green-500 hover:from-blue-700 hover:to-green-600 text-white font-medium py-2.5 px-4 rounded-full transition-all duration-300 shadow-md hover:shadow-lg">
                    <i class="bi bi-box-arrow-in-right mr-2"></i> Log In
                </button>
            </form>

            <div class="relative flex items-center my-6">
                <div class="flex-grow border-t border-gray-300"></div>
                <span class="flex-shrink mx-4 text-gray-500 text-sm">OR</span>
                <div class="flex-grow border-t border-gray-300"></div>
            </div>

            <div class="flex flex-col sm:flex-row gap-3">
                <a href="<?php echo e(route('google.login')); ?>"
                    class="flex items-center justify-center gap-2 w-full sm:w-1/2 border border-gray-300 rounded-full py-2.5 px-4 font-medium text-gray-700 hover:bg-gray-50 transition-colors duration-300">
                    <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google"
                        class="w-5 h-5" />
                    Google
                </a>

                <a href="<?php echo e(route('register')); ?>"
                    class="flex items-center justify-center gap-2 w-full sm:w-1/2 border border-blue-500 text-blue-600 rounded-full py-2.5 px-4 font-medium hover:bg-blue-50 transition-colors duration-300">
                    <i class="bi bi-person-plus"></i>
                    Register
                </a>
            </div>

            <div class="flex justify-center mt-6">
                <img src="https://cdn.jsdelivr.net/gh/OpenBristolData/SLTMobitel-Resource@main/Blue_SLTMobitel-Logo-.png" alt="SLTMobitel Logo"
                    class="h-10" />
            </div>
        </div>
    </div>
</div>

<script>
    const togglePassword = document.getElementById("togglePassword");
    const passwordInput = document.getElementById("password");
    const eyeIcon = document.getElementById("eyeIcon");
    const toggleText = document.getElementById("toggleText");

    togglePassword.addEventListener("click", function () {
        const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
        passwordInput.setAttribute("type", type);
        eyeIcon.className = type === "password" ? "bi bi-eye-slash" : "bi bi-eye";
        toggleText.textContent = type === "password" ? "Hide" : "Show";
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Administrator\Desktop\Seat\3\seat-reservation-system\resources\views/auth/login.blade.php ENDPATH**/ ?>