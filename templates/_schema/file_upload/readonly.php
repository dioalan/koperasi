<filereadonly data-url="<?php echo URL::base('') ?>">
    <div class="input-group">
        <input type="text" class="form-control" value="<?php echo (!empty($value['name'])?$value['name']:'')?>" />
        <?php if(count($value) > 0): ?>
            <input type="hidden"  value='<?php echo json_encode($value) ?>'/>
        <?php else :?>
            <input type="hidden" />
        <?php endif ?>

        <span class="input-group-btn">
            <button class="btn btn-icon-only blue btn-download" type="button"><i class="fa fa-cloud-download"></i></button>
        </span>
    </div>
</filereadonly>