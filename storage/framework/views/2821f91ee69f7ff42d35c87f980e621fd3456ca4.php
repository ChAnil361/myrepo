
<?php $__env->startSection('header'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap.min.js"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<center> <h2>All Transaction Details </h2>
<div style="width:80%">
<!--<table id="example" class="table table-striped table-bordered" style="width:80%">-->
<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
<tr>
<th>S NO</th>
<?php echo e($count=1); ?>

 <th>Sender Account No</th>
 <th>Receiver Account No-Name</th>
 <th>Current Balance</th>
 <th>Credit</th>
 <th>Debit</th>
 <th>Available Balance</th>
 <th>Time</th>
 </thead>
 </tr>
 <?php $__currentLoopData = $tdetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <tr>
 <td><?php echo e($count++); ?></td>
 <td><?php echo e($row->id); ?></td>
 <td><?php echo e($row->Receiver_name); ?></td>
 <td><?php echo e($row->Bcurrent_bal); ?></td>
 <td><?php echo e($row->credit); ?></td>
 <td><?php echo e($row->transfer_money); ?></td>
 <td><?php echo e($row->Acurrent_bal); ?></td>
 <td><?php echo e($row->updated_at); ?></td>
 </tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </table>
 <button type="button" class="btn btn-success" onClick="window.print()">Print</button>
    </div>
</center>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('project.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/project/All_transactions.blade.php ENDPATH**/ ?>