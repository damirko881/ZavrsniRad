<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Dodaj novu kategoriju</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="category_add.php">
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Ime</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Zatvori</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Spremi</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Uredi kategoriju</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="category_edit.php">
                <input type="hidden" class="catid" name="id">
                <div class="form-group">
                    <label for="edit_name" class="col-sm-3 control-label">Naziv</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_name" name="name">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Zatvori</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Ažuriraj</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Brisanje...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="category_delete.php">
                <input type="hidden" class="catid" name="id">
                <div class="text-center">
                    <p>IZBRIŠI KNJIGU</p>
                    <h2 id="del_cat" class="bold"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Zatvori</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Izbriši</button>
              </form>
            </div>
        </div>
    </div>
</div>


     