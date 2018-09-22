<div class="form-group m-form__group m-form__group--md {{ isset($responsive) ? $responsive : '' }} {{ $errors->has($name) ? ' has-danger' : '' }}">
	<label for={{ $name }}>{{ $label }} {!! isset($required) ? $required ? '<span class="m--font-danger">*</span>' : '' : '' !!}</label>

	<textarea id={{ $name }} name={{ $name }} class="form-control m-textarea {{ isset($class) ? $class : '' }}" rows="5" {{ isset($required) ? $required ? 'required' : '' : '' }} {{ isset($readonly) ? $readonly ? 'readonly' : '' : '' }} {{ isset($disabled) ? $disabled ? 'disabled' : '' : '' }}> {{ empty(old($name)) ? isset($slot) ? trim($slot) : '' : old($name) }}</textarea>

    @isset($help)
		<span class="m-form__help">{{ $help }}</span>
    @endisset
	@if ($errors->has($name))
		<div class="form-control-feedback"> {{ $errors->first($name) }} </div>
	@endif
</div>
