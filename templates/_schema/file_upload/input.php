<fileupload class="fileupload fileupload-new"  data-url="<?php echo $url ?>" data-bucket="<?php echo $self['bucket'] ?>">
    <div class="input-group">
        <div class="form-control uneditable-input input-fixed" >
            <i class="fa fa-file fileinput-exists"></i>&nbsp;
            <span class="fileupload-filename"> </span>
            <?php if(count($value) > 0): ?>
                <input type="hidden" name="<?php echo $self['name'] ?>" id="<?php echo $self['name'] ?>" value='<?php echo json_encode($value) ?>'/>
            <?php else : ?>
                <input type="hidden" name="<?php echo $self['name'] ?>" id="<?php echo $self['name'] ?>" />
            <?php endif; ?>
        </div>
        <input type="file"> 
        <span class="input-group-btn" >
            <button type="button" class="btn blue " >
                <span class="spinner">
                    <i class="fa fa-spinner fa-spin"></i>
                </span>
                <span class="label-spinner">
                    <span class="fileupload-new"> Select file </span>
                    <span class="fileupload-exists"> Change </span>
                <span>
            </button>
            <a href="javascript:;" class="btn red fileupload-exists" data-dismiss="fileinput"> Remove </a>
        </span>
    </div>
</fileupload>