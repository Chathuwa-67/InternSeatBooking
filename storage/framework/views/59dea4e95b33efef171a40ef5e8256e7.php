<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seat Reservation System - <?php echo $__env->yieldContent('title'); ?></title>
    <link rel="icon" type="image/png" href="https://i.postimg.cc/MpkT4VNc/fav.png" sizes="32x32">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <script src="https://cdn.tailwindcss.com"></script>
    
    
    <style>
        
        .seat-card {
            transition: all 0.3s;
        }
        .seat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .seat-available {
            border-left: 5px solid #28a745;
        }
        .seat-booked {
            border-left: 5px solid #dc3545;
        }
    </style>
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body>
       <!-- ✅ Background Image -->
    <div class="fixed inset-0 z-0 bg-[url('https://cdn.jsdelivr.net/gh/OpenBristolData/SLTMobitel-Resource@main/4.png')] bg-cover bg-center"></div>

    <!-- ✅ Semi-transparent Blue Overlay -->
    <div class="fixed inset-0 z-0 bg-blue-200 opacity-30"></div>

    <!-- ✅ All Content sits above the background -->
    <div class="relative z-20">
    <?php echo $__env->make('partials.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        
        <div class="container py-4">
            <?php echo $__env->make('partials.alerts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>  
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html><?php /**PATH C:\Users\Administrator\Desktop\Seat\3\seat-reservation-system\resources\views/layouts/app.blade.php ENDPATH**/ ?>