<!-- Modal -->
<div class="modal fade" id="editBook" tabindex="-1" role="dialog" aria-labelledby="editBookdCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addBookLongTitle">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form method="put" action="<?php echo e(route('catalogues.edit','2')); ?>">

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
            <input type="text" class="form-control rowid" name="title" value="">
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



<script type="text/javascript">

  $('#editBook').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var rowidData = button.data('idData') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
   var modal = $(this)
  // modal.find('.modal-title').text('New message to ' + recipient)
   modal.find('.modal-body rowid').val(rowidData)

});

 </script>
