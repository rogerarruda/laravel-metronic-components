<div class="form-group m-form__group m-form__group--md {{ isset($responsive) ? $responsive : '' }} {{ $errors->has($name) ? ' has-danger' : '' }}">
	<label for={{ $name }}>{{ $label }} {!! isset($required) ? $required ? '<span class="m--font-danger">*</span>' : '' : '' !!}</label>
	@isset($icon)
		<div class="m-input-icon m-input-icon--right">
	@endisset
	@isset($group)
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon2">{{ $group }}</span>
			</div>
	@endisset

		@isset($type)
			@if ($type == 'file')
				<div id="error_block" class="m-alert alert alert-warning mb-4" style="width: 100%; margin: 0;"></div>
			@endif
		@endisset

		@isset($typeahead)
			@if ($typeahead)
				<div class="m-typeahead">
			@endif
		@endisset

		<input id={{ $name }}
		type="{{ isset($type) ? $type : 'text' }}"
		name="{{ $name }}"
		class="{{ isset($type) ? $type != 'radio' && $type != 'checkbox' ? 'form-control m-input' : '' : 'form-control m-input' }} {{ isset($class) ? $class : '' }}"
		placeholder="{{ isset($placeholder) ? $placeholder : '' }}"
		value="{{ empty(old($name)) ? isset($slot) ? trim($slot) : '' : old($name) }}"
		{{ isset($required) ? $required ? 'required' : '' : '' }}
		{{ isset($readonly) ? $readonly ? 'readonly' : '' : '' }}
		{{ isset($disabled) ? $disabled ? 'disabled' : '' : '' }}
		/>

		@isset($icon)
			<span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="{{ $icon }}"></i></span></span>
		@endisset

		@isset($typeahead)
			@if ($typeahead)
			</div>
			@endif
		@endisset

	@if(isset($group))
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
