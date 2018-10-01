
<select class="form-control multi_reference select2" name="<?php echo isset($name) ? $name : $self['name'] ?>[]" multiple>
    <?php foreach ($self->optionData() as $key => $entry): ?>
        <option value="<?php echo $self->optionValue($key,$entry) ?>" <?php echo (!empty($value[$self->optionValue($key,$entry)]) ? 'selected' : '') ?>>
            <?php echo $self->optionLabel($key,$entry) ?>
        </option>
    <?php endforeach ?>
</select>