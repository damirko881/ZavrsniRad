<!-- Add -->
<div class="modal fade" id="profile">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Admin Profil</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="profile_update.php?return=<?php echo basename($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
          		  <div class="form-group">
                  	<label for="username" class="col-sm-3 control-label">Korisničko ime</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="username" name="username" value="<?php echo $user['username']; ?>">
                  	</div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Lozinka</label>

                    <div class="col-sm-9"> 
                      <input type="password" class="form-control" id="password" name="password" value="<?php echo $user['password']; ?>">
                    </div>
                </div>
                <div class="form-group">
                  	<label for="firstname" class="col-sm-3 control-label">Ime</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $user['firstname']; ?>">
                  	</div>
                </div>
                <div class="form-group">
                  	<label for="lastname" class="col-sm-3 control-label">Prezime</label>

                  	<div class="col-sm-9">
                    	<input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $user['lastname']; ?>">
                  	</div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo:</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo">
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label for="curr_password" class="col-sm-3 control-label">Trenutna lozinka:</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="curr_password" name="curr_password" placeholder="Unesite trenutnu lozniku za spremanje promjena" required>
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Zatvori</button>
            	<button type="submit" class="btn btn-success btn-flat" name="save"><i class="fa fa-check-square-o"></i> Spremi</button>
            	</form>
          	</div>
        </div>
    </div>
</div>