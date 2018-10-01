 <thumbnail class="thumbnailreference filethumbnail filethumbnail-new" data-provides="filethumbnail" style="width: 100%" data-url="<?php echo $url ?>" data-bucket="<?php echo $self['bucket'] ?>" >
    <div class="filethumbnail-preview thumbnail" data-trigger="filethumbnail" style="width: 100%; height: 150px; max-width: 180px">
                <span class="spinner">
                    <i class="fa fa-cog fa-spin"></i>
                </span> 
    </div>
    <?php if(count($value) > 0): ?>
                <input type="hidden" name="<?php echo $self['name'] ?>" id="<?php echo $self['name'] ?>" value='<?php echo json_encode($value) ?>'/>
    <?php else : ?>
                <input type="hidden" name="<?php echo $self['name'] ?>" id="<?php echo $self['name'] ?>" />
    <?php endif; ?>
    <div>
        <span class="btn red btn-outline btn-file">
            <span class="filethumbnail-new"> Select image </span>
            <span class="filethumbnail-exists"> Change </span>
            <input type="file" class="file-upload"> 
            
        </span>
        <a href="javascript:;" class="btn red filethumbnail-exists" data-dismiss="filethumbnail"> Remove </a>
    </div>
</thumbnail>
