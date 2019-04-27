<div class="form-group m-form__group m-form__group--md {{ isset($responsive) ? $responsive : '' }} {{ $errors->has($name) ? ' has-danger' : '' }}" id="{{isset($id) ? $id : ''}}">
    <label for="{{ $name }}">{{ $label }} {!! isset($required) ? $required ? '<span class="m--font-danger">*</span>' : '' : '' !!}</label>
    @isset($icon)
        <div class="m-input-icon m-input-icon--right">
    @endisset

    @if (isset($group_left) || isset($group_right))
        <div class="input-group">
    @endif

    @isset($group_left)
        <div class="input-group-prepend">
            <span class="input-group-text" id="">{{ $group_left }}</span>
        </div>
    @endisset

    @isset($typeahead)
        @if ($typeahead)
            <div class="m-typeahead">
        @endif
    @endisset

    <input id="{{ $name }}"
           type="{{ isset($type) ? $type : 'text' }}"
           name="{{ $name }}"
           class="{{ isset($type) ? $type != 'radio' && $type != 'checkbox' ? 'form-control m-input' : '' : 'form-control m-input' }} {{ isset($class) ? $class : '' }}"
           placeholder="{{ isset($placeholder) ? $placeholder : '' }}"
           value="{{ empty(old($name)) ? isset($slot) ? trim($slot) : '' : old($name) }}"
           step="{{ isset($step) ? $step : 1 }}"
           min="{{ isset($min) ? $min : '' }}"
           max="{{ isset($max) ? $max : '' }}"
        {{ isset($required) ? $required ? 'required' : '' : '' }}
        {{ isset($readonly) ? $readonly ? 'readonly' : '' : '' }}
        {{ isset($disabled) ? $disabled ? 'disabled' : '' : '' }}
        {{ isset($autocomplete) ? !$autocomplete ? 'autocomplete="off"' : '' : '' }}

    />

    @isset($group_right)
        <div class="input-group-append">
            <span class="input-group-text" id="">{{ $group_right }}</span>
        </div>
    @endisset

    @isset($icon)
        <span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="{{ $icon }}"></i></span></span>
    @endisset

    @isset($typeahead)
        @if ($typeahead)
            </div>
        @endif
    @endisset

    @if (isset($group_left) || isset($group_right))
        </div>
    @endif

    @if(isset($icon))
        </div>
    @endif

    @isset($help)
        <span class="m-form__help">{{ $help }}</span>
    @endisset

    @if ($errors->has($name))
        <div class="form-control-feedback"> {{ $errors->first($name) }} </div>
    @endif
</div>
