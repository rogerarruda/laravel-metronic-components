<div class="form-group m-form__group m-form__group--md {{ isset($responsive) ? $responsive : '' }} {{ $errors->has($name) ? ' has-danger' : '' }}">
	<label for={{ $name }}>{{ $label }} {!! isset($required) ? $required ? '<span class="m--font-danger">*</span>' : '' : '' !!}</label><br />

	<input type="hidden" name="{{ $name }}" value="0">
	<input data-switch="true" name="{{ $name }}" @isset($slot) @if($slot == '1') checked="checked" @endif @endisset value="1"
		data-on-text="{{ isset($on_text) ? $on_text : 'Ativado' }}"
		data-off-text="{{ isset($off_text) ? $off_text : 'Inativo' }}"
		type="checkbox"
		data-on-color="{{ isset($on_color) ? $on_color : 'success' }}"
		data-off-color="{{ isset($off_color) ? $off_color : 'warning' }}">

    @isset($help)
		<div class="m-form__help">{{ $help }}</div>
    @endisset
	@if ($errors->has($name))
		<div class="form-control-feedback"> {{ $errors->first($name) }} </div>
	@endif
</div>
