
<div class="row">
    <div class="col-md-6">

        <input type="hidden" name="activity_id" value="<?php echo $activity->id; ?>">

        <div class="form-group">
            <label>Parameter Title</label>
            <textarea class="form-control" rows="2" 
            name="parameter_name" style="width: 100%;"><?=(@$param)?$param->parameter_name:''?></textarea>
        </div>

        <div class="form-group">
            <label>Parameter Target Value</label>
            <input class="form-control" type="number"  name="target" value="<?=(@$param)?$param->target_value:''?>" />
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Parameter Description</label>
            <textarea class="form-control summernote" rows="1" 
            name="parameter_description" 
            style="width: 100%;"><?=(@$param)?$param->parameter_description:''?></textarea>
        </div>
    </div>
</div>

