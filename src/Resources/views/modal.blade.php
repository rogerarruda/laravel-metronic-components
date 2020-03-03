<!--begin::Modal {{$id}}-->
<div class="modal fade" id="{{$id}}" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered {{ isset($size) && $size == 'sm' ? 'modal-sm' : '' }}{{ isset($size) && $size == 'lg' ? 'modal-lg' : '' }}" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal">{{ $header }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @if (!empty($form))
                {{$form}}
            @endif
            <div class="modal-body">
                {{$slot}}
            </div>
            <div class="modal-footer">
            @if(!empty($footer))
                {{$footer}}
            @else
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CLose</button>
                @if(!empty($form))
                    <button type="submit" class="btn btn-primary">Save</button>
                @endif
            @endif
            </div>
            @if(!empty($form)) </form> @endif
        </div>
    </div>
</div>
<!--end::Modal {{$id}}-->
