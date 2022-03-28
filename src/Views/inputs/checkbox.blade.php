@php
    $valid = '';
    if(sizeof($errors) > 0) :
        $fieldName = $errorName !== '' ? $errorName : $name;
        if($errorBag  !== '') :
            if($errors->getBag($errorBag)->has($fieldName)) :
                $valid = 'is-invalid';
            else :
                $valid = 'is-valid';
            endif;
        else :
            if($errors->has($fieldName)) :
                $valid = 'is-invalid';
            else :
                $valid = 'is-valid';
            endif;
        endif;
    endif;
@endphp

<div class="form-check mx-3 my-2">
    {!! Form::checkbox($name, $value, $checked, $clean($attributes->merge(['id' => $name, 'class' => "form-check-input $valid"]))) !!}
    <label class="form-check-label {{$labelClass}}" for="{{$name}}">
        {{ $label }}
    </label>
</div>