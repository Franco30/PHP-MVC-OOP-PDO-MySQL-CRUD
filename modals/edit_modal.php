<!-- Edit User Modal -->
<div class="modal fade" id="editModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Edit User</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body px-4">
                <form action="" method="post" id="edit-form-data">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <input type="text" name="fname" id="fname" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="lname" id="lname" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="number" name="phone" id="phone" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="insert" id="update" value="Update User" class="btn btn-primary btn-block" required>
                    </div>
                </form>
            </div>
            
            <!-- Modal footer -->
<!--
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
-->
            
        </div>
    </div>
</div>