

<?php $__env->startSection('title', 'Add New Seat'); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">Add New Seat</div>
            <div class="card-body">
                <form method="POST" action="<?php echo e(route('admin.seats.store')); ?>">
                    <?php echo csrf_field(); ?>
                    
                    <div class="mb-3">
                        <label for="seat_number" class="form-label">Seat Number</label>
                        <input type="text" class="form-control" id="seat_number" name="seat_number" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control" id="location" name="location" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status" name="status" required>
                            <option value="available">Available</option>
                            <option value="unavailable">Unavailable</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Save Seat</button>
                    <a href="<?php echo e(route('admin.seats.index')); ?>" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Administrator\Desktop\Seat\3\seat-reservation-system\resources\views/admin/seats/create.blade.php ENDPATH**/ ?>