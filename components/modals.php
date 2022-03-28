
<!-- INSERT DATA MODAL -->
<div class="modal" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="text-danger">&times;</span>
        </button>
      </div>
      <form method="POST" action="includes/addUser.inc.php">
          
          <div class="modal-body">
              <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="name"  placeholder="Enter name">
              </div>
              <div class="form-group">
                  <label for="age">Age</label>
                  <input type="number" class="form-control" name="age"  placeholder="Enter Age">
              </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="addUser">Submit</button>
            </form>
      </div>
    </div>
  </div>
</div>