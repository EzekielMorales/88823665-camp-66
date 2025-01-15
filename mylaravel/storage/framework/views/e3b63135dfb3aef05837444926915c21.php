<h1>My Controller</h1>
<h1>myinput: <?php echo e($myinput); ?></h1>
<h1>myvalue: <?php echo e($myvalue); ?></h1>
<form method ="post"
      action="<?php echo e(url('/mycontroller')); ?>">
    <?php echo csrf_field(); ?>
    <input type="text" name="myinput">
    <button type="submit">Submit</button>

</form>
<?php /**PATH C:\xampp\htdocs\88823665-camp-66\mylaravel\resources\views/myview.blade.php ENDPATH**/ ?>