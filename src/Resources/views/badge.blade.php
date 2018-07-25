<span class="m-badge m-badge--{{empty($type) ? 'success' : $type}} m-badge--wide"
{{isset($popover) && $popover ? 'data-container=body data-toggle=m-popover' : '' }}
@isset($content)
    data-content="{!!$content!!}"
@endisset
@isset($title)
    title="{!!$title!!}"
@endisset
{{isset($position) ? 'data-placement='.$position : 'data-placement=top' }}
>
    {{$slot}}
</span>
