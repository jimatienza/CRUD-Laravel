<?php $__env->startSection('content'); ?>
<div style="">
<button type="button" class="btn float-right" style="background-color: #e6d30d;color:white;margin-bottom: 0.25em" data-toggle="modal" data-target="#addBook">Add Book <i class="fas fa-plus" style="font-size:1.25em"></i></button>
</div>
<table class="table ">
  <thead style="background-color: #190348;color:white;">
    <tr>
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
      <td scope="row"><?php echo e($catalogue->title); ?></td>
      <td><?php echo e($catalogue->author); ?></td>
      <td><?php echo e($catalogue->genre); ?></td>
      <td><?php echo e($catalogue->library_section); ?></td>
      <td></td>
      <td><button type="button" class="btn btn-outline-primary"><i class="far fa-edit"></i></button><button type="button" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></td>
    </tr>
    <?php endforeach; ?>

  </tbody>
</table>


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="addBook" tabindex="-1" role="dialog" aria-labelledby="addBookCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addBookLongTitle">Add Another Book</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form method="post" action="/catalogues">
       	<?php echo e(csrf_field()); ?>

         <div class="form-group">
           <label for="title">Book Title:</label>
           <input type="text" class="form-control" name="title" placeholder="Book Title" required>
           <?php echo e(csrf_field()); ?>

         </div>
         <div class="form-group">
           <label for="author">Author:</label>
           <input type="text" class="form-control" name="author" placeholder="Author" required>
         </div>
         <div class="form-group">
           <label for="genre">Genre:</label>
           <input type="text" class="form-control" name="genre" placeholder="Genre" required>
         </div>
         <div class="form-group">
           <label for="library_section">Library Section:</label>
           <input type="text" class="form-control" name="library_section" placeholder="Library Section" required>
         </div>
     
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit" >Save</button>
      </div>
       </form>
    </div>
  </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>