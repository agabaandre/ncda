
<div class="modal" id="edit-action<?=$row->id?>">
<div class="modal-dialog modal-lg">
<div class="modal-content">
    
    <form method="post" action="<?= site_url('save-action') ?>">
      
    <div class="modal-header">
        <h3>Update Action Point</h3>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <h3 aria-hidden="true">&times;</h3>
        </button>
    </div>

    <div class="modal-body">
            
            <?php require('action_point_form.php'); ?>
            <input type="hidden" name="meeting" value="<?=$meeting->id?>" />
            
        <div class="modal-footer">
            <button type="submit" class="btn btn-info pull-right"> <i class="fas fa-save"></i>  Save Changes</button>
        </div>
    </div>
    </form>
    </div>
</div>
</div>