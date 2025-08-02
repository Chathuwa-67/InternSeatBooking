

<?php $__env->startSection('title', 'Manage Reservations'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4 py-6 m:px-6 lg:px-8">
    <!-- Header with green background -->
   <div class="bg-green-50 rounded-xl p-6 mb-8">
    <div class="flex flex-col items-center text-center">
        <div>
            <h1 class="text-2xl font-medium">Manage Reservations</h1>
           
        </div>
    </div>
</div>

    <!-- Filter Card -->
    <div class="bg-white shadow rounded-lg overflow-hidden mb-8">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-medium text-gray-900 flex items-center">
                
               Filter By
            </h3>
        </div>
        <div class="p-6">
            <form method="GET" action="<?php echo e(route('admin.reservations.index')); ?>">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label for="date" class="block text-m font-medium text-gray-700 mb-1">Date</label>
                        <input type="date" class="w-full rounded-md border-gray-300 shadow-m focus:border-blue-500 focus:ring-blue-500" 
                               id="date" name="date" value="<?php echo e(request('date')); ?>">
                    </div>
                    <div>
                        <label for="user" class="block text-m font-medium text-gray-700 mb-1">Intern</label>
                        <select class="w-full rounded-md border-gray-300 shadow-m focus:border-blue-500 focus:ring-blue-500" 
                                id="user" name="user">
                            <option value="">All Interns</option>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($user->id); ?>" <?php echo e(request('user') == $user->id ? 'selected' : ''); ?>>
                                    <?php echo e($user->name); ?> <!-- Full name now -->
                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="flex items-end space-x-2">
                        <button type="submit" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-md shadow-m flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                            Find  
                        </button>
                        <?php if(request()->has('date') || request()->has('user')): ?>
                            <a href="<?php echo e(route('admin.reservations.index')); ?>" class="px-4 py-2 border border-gray-300 rounded-md shadow-m text-gray-700 hover:bg-gray-50">
                                Reset
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Reservations Table -->
    <div class="bg-white shadow rounded-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-blue-200">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-m font-medium text-gray-500 uppercase tracking-wider">Date</th>
                        <th scope="col" class="px-6 py-3 text-left text-m font-medium text-gray-500 uppercase tracking-wider">Intern</th>
                        <th scope="col" class="px-6 py-3 text-left text-m font-medium text-gray-500 uppercase tracking-wider">Seat</th>
                        <th scope="col" class="px-6 py-3 text-left text-m font-medium text-gray-500 uppercase tracking-wider">Location</th>
                        <th scope="col" class="px-6 py-3 text-left text-m font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th scope="col" class="px-6 py-3 text-right text-m font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php $__empty_1 = true; $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr class="hover:bg-blue-100">
                        <td class="px-6 py-4 whitespace-nowrap text-m text-gray-900">
                            <?php echo e(\Carbon\Carbon::parse($reservation->reservation_date)->format('D, M j, Y')); ?>

                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-m text-gray-500">
                            <?php echo e($reservation->user->name); ?> <!-- Full name here -->
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-m text-gray-500">
                            <span class="px-2 py-1 inline-flex text-m leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                <?php echo e($reservation->seat->seat_number); ?>

                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-m text-gray-500">
                            <?php echo e($reservation->seat->location); ?>

                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <?php
                                $today = now()->format('Y-m-d');
                                $reservationDate = \Carbon\Carbon::parse($reservation->reservation_date)->format('Y-m-d');
                                
                                if ($reservationDate == $today) {
                                    $statusClass = 'bg-blue-100 text-blue-800';
                                    $statusText = 'Today';
                                } elseif ($reservationDate < $today) {
                                    $statusClass = 'bg-red-100 text-red-800';
                                    $statusText = 'Past';
                                } else {
                                    $statusClass = 'bg-green-100 text-green-800';
                                    $statusText = 'Upcoming';
                                }
                            ?>
                            <span class="px-3 py-1 inline-flex text-m leading-5 font-semibold rounded-full <?php echo e($statusClass); ?>">
                                <?php echo e($statusText); ?>

                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-m font-medium">
                            <form action="<?php echo e(route('admin.reservations.destroy', $reservation)); ?>" method="POST" class="inline-block" id="delete-form-<?php echo e($reservation->id); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="button" onclick="confirmDelete('<?php echo e($reservation->id); ?>')" class="text-red-600 hover:text-red-900 inline-flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="6" class="px-6 py-4 text-center text-m text-gray-500">
                            <div class="flex flex-col items-center justify-center py-6">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <p class="text-gray-600">No reservations found.</p>
                                <p class="text-m text-gray-500 mt-1">All seats are free... for now!</p>
                            </div>
                        </td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
        
        
    </div>
</div>
 <?php echo e($reservations->links('vendor.pagination.tailwind')); ?>

<!-- SweetAlert Script -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmDelete(reservationId) {
        Swal.fire({
            title: 'Delete this record?',
            text: "If it's Upcoming intern will need to find a new spot!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Delete it!',
            cancelButtonText: 'No!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(`delete-form-${reservationId}`).submit();
            }
        })
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Administrator\Desktop\Seat\3\seat-reservation-system\resources\views/admin/reservations/index.blade.php ENDPATH**/ ?>