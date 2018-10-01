<div class="input-group searchreference" data-url="<?php echo URL::site(strtolower($self['foreign']).'.json'); ?>" data-label="<?php echo $self['foreignLabel'] ?>" data-key="<?php echo $self['foreignKey'] ?>" data-field='<?php echo json_encode($self['field']); ?>'>
    <input type="text" class="form-control" value="<?php echo $label ?>">
    <input type="hidden" class="product" name="<?php echo $self['name'] ?>" value="<?php echo $value ?>" data-entry=""/>
    <span class="input-group-btn ">
        <button class="btn blue btn-clear " type="button">
            <i class="fa fa-close"><a href="#" class="popup"></a></i>
        </button>
        <button class="btn blue btn-search" type="button">
            <i class="fa fa-search"><a href="#" class="popup"></a></i>
        </button>
        
    </span>
</div>