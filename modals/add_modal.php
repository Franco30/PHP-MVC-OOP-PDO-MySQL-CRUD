<!-- Add New User Modal -->
<div class="modal fade" id="addModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add New User</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body px-4">
                <form action="" method="post" id="form-data">
                    <div class="form-group">
                        <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                    </div>
                    <div class="form-group">
                        <input type="number" name="phone" class="form-control" placeholder="Phone" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="insert" id="insert" value="Add User" class="btn btn-primary btn-block" required>
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