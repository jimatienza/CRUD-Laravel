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
           <label for="library_section">Library Section</label>
           <select class="form-control" id="library_section" name="library_section">
             <option>Circulation</option>
             <option>Periodical Section</option>
             <option>General Reference</option>
             <option>Children's Section</option>
             <option>Fiction</option>
           </select>
         </div>

           
      
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-info" name="submit" >Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
       </form>
    </div>
  </div>
</div>
