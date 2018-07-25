<label class="m-checkbox {{ isset($class) ? $class : '' }}">
	<input type="checkbox" name="{{ $name }}"
	value="{{ $value }}"
	{{ empty(old($name)) ? '' : in_array($value, old($name)) ? 'checked' : '' }}
	{{ isset($required) ? $required ? 'required' : '' : '' }}
	{{ isset($readonly) ? $readonly ? 'readonly' : '' : '' }}
	{{ isset($disabled) ? $disabled ? 'disabled' : '' : '' }}
	{{ !isset($checked) ? '' : in_array($value, collect($checked)->toArray()) ? 'checked' : '' }}
	/> {!! $slot !!}
	<span></span>
</label>
