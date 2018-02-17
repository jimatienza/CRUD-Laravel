<?php $__env->startSection('content'); ?>

<table class="table table-sm table-hover table-striped ">
  <thead style="background-color: #057091;color:white;">
    <tr>
      <th scope="col">Book ID</th>
      <th scope="col">Book Title</th>
      <th scope="col">Author</th>
      <th scope="col">Genre</th>
      <th scope="col">Library Section</th>
      <th scope="col">Borrowed</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach($catalogues as $catalogue): ?> 
    <tr>
      <td scope="row"><?php echo e($catalogue->id); ?></td>
      <td><?php echo e($catalogue->title); ?></td>
      <td><?php echo e($catalogue->author); ?></td>
      <td><?php echo e($catalogue->genre); ?></td>
      <td><?php echo e($catalogue->library_section); ?></td>
      <td> <div class="form-check  text-center">
      <?php if($catalogue->is_borrowed=="true"): ?>
        <input type="checkbox" class="form-check-input checkbox" id="exampleCheck1" value="<?php echo e($catalogue->id); ?>" checked>
        <label class="form-check-label" for="exampleCheck1"></label>
      <?php else: ?>
        <input type="checkbox" class="form-check-input checkbox" id="exampleCheck1" value="<?php echo e($catalogue->id); ?>">
        <label class="form-check-label" for="exampleCheck1"></label>
      <?php endif; ?>

  </div></td>
      <td><a href="catalogues/<?php echo e($catalogue->id); ?>/edit"><button type="button" class="btn btn-outline-primary" "><i class="far fa-edit"></i> Edit</button></a><button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteBook" data-idfield="<?php echo e($catalogue->id); ?>"><i class="far fa-trash-alt"></i> Delete</button></td>
    </tr>
    <?php endforeach; ?>

  </tbody>
</table>
<div style="">
  <a href="/search"><button type="button" class="btn btn-info" style="margin-bottom: 0.25em;color:white;padding-right: 0.25em"><i class="fas fa-search"></i> Search Book</button></a> 
<button type="button" class="btn btn-info" style="margin-bottom: 0.25em;" data-toggle="modal" data-target="#addBook"><i class="fas fa-plus"></i> Add Book </button>
</div>

<?php echo $__env->make('modal.deleteData', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>