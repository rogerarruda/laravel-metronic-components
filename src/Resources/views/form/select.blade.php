<div class="form-group m-form__group m-form__group--md {{ isset($responsive) ? $responsive : '' }} {{ $errors->has($name) ? ' has-danger' : '' }}">
	<label for={{ str_replace('[]', '', $name) }}>{{ $label }} {!! isset($required) ? $required ? '<span class="m--font-danger">*</span>' : '' : '' !!}</label>

	<select id={{ str_replace('[]', '', $name) }} {{ isset($multiple) ? $multiple ? 'multiple' : '' : '' }} name={{ $name }} class="form-control m-select {{ isset($class) ? $class : '' }}"
	{{ isset($required) ? $required ? 'required' : '' : '' }}
	{{ isset($readonly) ? $readonly ? 'readonly' : '' : '' }}
	{{ isset($disabled) ? $disabled ? 'disabled' : '' : '' }}>
		@if(!isset($multiple))
			<option value="" disabled>-- Selecione --</option>
		@endif
		{!! isset($slot) ? $slot : '' !!}
	</select>

    @isset($help)
		<span class="m-form__help">{{ $help }}</span>
    @endisset
	@if ($errors->has($name))
		<span class="form-control-feedback"> {{ $errors->first($name) }} </span>
	@endif
</div>
