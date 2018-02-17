<?php $__env->startSection('content'); ?>
<form>
  <div class="form-row">
    <div class="col-8">
        <input class="form-control search" type="text" id="search" placeholder="Search">
    </div>
    <div class="col-1">
       <label for="filter">Filter By:</label>
   </div>
   <div class="col-3">
           <select class="form-control filter " id="filter" name="filter">
             <option>None</option>
             <option>Book Title</option>
             <option>Author</option>
             <option>Genre</option>
             <option>Library Section</option>
           </select>

    </div>
  </div>
</form>
<table class="table table-sm table-hover table-striped ">
  <thead style="background-color: #057091;color:white;">
    <tr>
      <th scope="col">Book ID</th>
      <th scope="col">Book Title</th>
      <th scope="col">Author</th>
      <th scope="col">Genre</th>
      <th scope="col">Library Section</th>
       <!-- <th scope="col">Borrowed</th> -->
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
  	    <td><a href="catalogues/<?php echo e($catalogue->id); ?>/edit"><button type="button" class="btn btn-outline-primary" "><i class="far fa-edit"></i> Edit</button></a><button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteBook" data-idfield="<?php echo e($catalogue->id); ?>"><i class="far fa-trash-alt"></i> Delete</button></td>
  	  </tr>
  	  <?php endforeach; ?>

  </tbody>
</table>
<a href="/"><button type="submit" class="btn btn-info" name="submit" >Back to Home</button></a>



<?php echo $__env->make('modal.deleteData', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>