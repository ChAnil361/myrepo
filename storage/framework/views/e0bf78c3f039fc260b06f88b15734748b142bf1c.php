
<?php $__env->startSection('header'); ?>
##parent-placeholder-594fd1615a341c77829e83ed988f137e1ba96231##
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap.min.js"></script>
<center>
<div style="background-color:white" class="responsive">
 
<h1>Customer List</h1>
<table id="example" class="table  table-striped table-bordered " style="width:100%">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">current_bal</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
<?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


    <tr>
     <th scope="row"><a href="<?php echo e(route('customer_page',['id'=>$row->id])); ?>"><?php echo e($row->id); ?></a></th>
      <td><?php echo e($row->name); ?></td>
      <td><?php echo e($row->email); ?></td>
      <td><?php echo e($row->current_bal); ?></td>
      <td><a href="<?php echo e(route('customer_page',['id'=>$row->id])); ?>"> <input type="submit" class="btn btn-success" value="View&Transfer " />
         </a></td>
    </tr>
    
  

 
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
<form action="<?php echo e(route('transaction_all')); ?>" method="post">
<?php echo csrf_field(); ?>
<input  type="hidden" value="112" name="hid">
<input type="submit" name="submit" class="btn btn-primary" value="Show All Transactions">
  </form>
</div></center>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<?php $__env->stopSection(); ?>
 
<?php echo $__env->make('project.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/project/ShowCustomerList.blade.php ENDPATH**/ ?>