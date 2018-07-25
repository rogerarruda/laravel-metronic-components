<label class="{{ isset($megaoption) && $megaoption ? 'm-option' : 'm-radio' }} {{ isset($class) ? $class : '' }}">
	@if (isset($megaoption) && $megaoption)
		<span class="m-option__control">
			<span class="m-radio m-radio--brand m-radio--check-bold">
	@endif
			<input type="radio" name="{{ $name }}"
			value="{{ $value }}"
			{{ empty(old($name)) ? '' : in_array($value, old($name)) ? 'checked' : '' }}
			{{ isset($required) ? $required ? 'required' : '' : '' }}
			{{ isset($readonly) ? $readonly ? 'readonly' : '' : '' }}
			{{ isset($disabled) ? $disabled ? 'disabled' : '' : '' }}
			{{ !isset($checked) ? '' : in_array($value, collect($checked)->toArray()) ? 'checked' : '' }}
			/> {!! isset($megaoption) && $megaoption ? '' : $slot !!}
            <span></span>
	@if (isset($megaoption) && $megaoption)
        </span>
    </span>

    <span class="m-option__label">
        <span class="m-option__head">
            <span class="m-option__title">
                {!! $slot !!}
            </span>
            <span class="m-option__focus">
                {{isset($focus) ? $focus : ''}}
            </span>
        </span>
        <span class="m-option__body">
            {{isset($description) ? $description : ''}}
        </span>
    </span>
	@endif
</label>
