<div>
    <h1> all student data</sh1>
    <form action="datasearch" method="post" >
        <?php echo csrf_field(); ?>
        <input type="text" placeholder="search your name" name="datasearch" value="<?php echo e(@$search); ?>">
        <button>search</button>
    </form >

    <form action="deleteall" method="post" enctype="multipart/formdata">
        <?php echo csrf_field(); ?>
        <button>delete all</button>
    <table width="90%" border="1px">
        <tr>
            <th width="10%">selection</th>
            <th width="10%">id</th>
            <th width="10%">name</th>
            <th width="10%">email</th>
            <th width="10%">phone</th>
            <th width="20%">address</th>
            <th width="20%">operation</th>
    
</tr>
<?php $__currentLoopData = $da; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td><input type="checkbox" name="ids[]" value="<?php echo e($d->id); ?>"></td>
    <td><?php echo e($d->id); ?></td>
    <td><?php echo e($d->name); ?></td>
    <td><?php echo e($d->email); ?></td>
    <td><?php echo e($d->phone); ?></td>
    <td><?php echo e($d->address); ?></td>
    <td>
    <a href="<?php echo e('delete/'.$d->id); ?>" style="text-decoration:none; margin-right:8px; color:red;">Delete</a>
    <a href="<?php echo e('edit/'.$d->id); ?>" style="text-decoration:none; color:green; margin-left:40px;">Edit</a>
    </td>
<tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</form>
  <?php echo e($da->links()); ?>

</div>
<style>
    .w-5.h-5{
        width:20px;
    }
</style>
<?php /**PATH C:\Users\Administrator\Herd\crud\resources\views/display.blade.php ENDPATH**/ ?>