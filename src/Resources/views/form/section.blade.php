<div class="m-form__section
{{ isset($first) ? $first ? 'm-form__section--first' : '' : '' }}
{{ isset($last) ? $last ? 'm-form__section--last' : '' : '' }}
{{ isset($class) ? $class : '' }}" id="{{isset($id) ? $id : ''}}">

	@isset($title)
		<div class="m-form__heading {{ isset($responsive) ? $responsive ? 'col-md-12' : '' : '' }}">
			<h3 class="m-form__heading-title">{{ $title }}</h3>
		</div>
	@endisset

	@isset($responsive)
		@if ($responsive)
			<div class="row">
		@endif
	@endisset

	@isset($slot)
		{!! $slot !!}
	@endisset

	@isset($responsive)
		@if ($responsive)
			</div>
		@endif
	@endisset
</div>

@if (!isset($last))
	<div class="m-form__seperator m-form__seperator--dashed"></div>
@endif
