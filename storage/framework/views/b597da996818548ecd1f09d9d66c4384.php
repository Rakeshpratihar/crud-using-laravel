<div>
    <h1>ENTER STUDENTS DETAILS</h1>

    <form action="/update/<?php echo e($inp->id); ?>" method="post">
        <?php echo csrf_field(); ?>
        <!-- <input type="hidden" name="_method" value="put"/> -->
<input type="text" name="Name"  value="<?php echo e($inp->name); ?>" placeholder="name">
<br><br>
<input type="text" name="Email" value="<?php echo e($inp->email); ?>" placeholder="email">
<br><br>
<input type="text" name="Phone" value="<?php echo e($inp->phone); ?>" placeholder="phone">
<br><br>
<input type="text" name="Address" value="<?php echo e($inp->address); ?>" placeholder="address">
<br><br>
<button>update</button>
<a href="/display" style=" margin-left:20px;">CANCEL</a>
   </form>
</div> 
<?php /**PATH C:\Users\Administrator\Herd\crud\resources\views/editview.blade.php ENDPATH**/ ?>