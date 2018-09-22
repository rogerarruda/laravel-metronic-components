<option value="{{ $value }}"
{{ (is_array(old($name)) && in_array($value, old($name))) ? ' selected' : '' }}
{{isset($selected) ? $selected : ''}}
{{ isset($selected) ? is_array($selected) && in_array($value, $selected) || $selected == $value ? 'selected' : '' : '' }}
{{ (isset($readonly) && $readonly) ? 'readonly' : '' }}
{{ (isset($disabled) && $disabled) ? 'disabled' : '' }}
>{{ isset($slot) ? $slot : '' }}</option>
