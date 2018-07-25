<div class="form-group m-form__group m-form__group--md {{ isset($responsive) ? $responsive : '' }} {{ isset($class) ? $class : '' }} {{ $errors->has($name) ? ' has-danger' : '' }}">
	<label for={{ $name }}>{{ $label }} {!! isset($required) ? $required ? '<span class="m--font-danger">*</span>' : '' : '' !!}</label>

	@isset($type)
		@if ($type == 'checkbox')
			<div class="{{ isset($inline) ? $inline ? 'm-checkbox-inline' : 'm-checkbox-list' : 'm-checkbox-list' }}">
				{!! $slot !!}
			</div>
		@endif
		@if ($type == 'radio')
			<div class="{{ isset($inline) ? $inline ? 'm-radio-inline' : 'm-radio-list' : 'm-radio-list' }}">
				{!! $slot !!}
			</div>
		@endif
	@endisset

    @isset($help)
		<span class="m-form__help">{{ $help }}</span>
    @endisset
	@if ($errors->has($name))
		<span class="form-control-feedback"> {{ $errors->first($name) }} </span>
	@endif
</div>
