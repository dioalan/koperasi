<div class="input-group date date-picker-bono" date-format="<?php echo $self->date_format ?>"  data-value="<?php echo $value ?>"  >
    <input type="text" class="form-control" >
    <input type="hidden" name="<?php echo $self['name'] ?>" value="<?php echo $value ?>" />
    <span class="input-group-btn">
        <button class="btn default" type="button">
            <i class="fa fa-calendar"></i>
        </button>
    </span>
</div>

