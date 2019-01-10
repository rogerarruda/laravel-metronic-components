<div class="@if(empty($responsive)) col-lg-12 @else {{$responsive}} @endif"
style="@if(!empty($display)) display: {{ $display }}; @endif
     @if(!empty($style)) @foreach($style as $key => $item) {{ $key }}:{{ $item }}; @endforeach  @endif">
     
    <div class="m-portlet @isset($tabs) @if($tabs) m-portlet--tabs @endif @endisset {{ !empty($class) ? $class : '' }}" id="{{ !empty($id) ? $id : '' }}">
		@if (!empty($header) || !empty($actions))
			<div class="m-portlet__head">
				@if(!empty($header))
					<div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
							<h3 class="m-portlet__head-text"> {{$header}} </h3>
						</div>
					</div>
				@endif
				@if(!empty($actions))
					<div class="m-portlet__head-tools">
						{{$actions}}
					</div>
				@endif
			</div>
		@endif

        @if (!empty($form))
            {{$form}}
        @endif

        <div class="m-portlet__body {{ !empty($class_body) ? $class_body : '' }}">
            @if (!empty($form))
                <div class="row">
                    <div class="col-12 form-group m-form__group m--margin-top-5">
                        <div class="alert m-alert m-alert--default" role="alert">
                            Campos marcados com (<span class="m--font-danger">*</span>) são obrigatórios
                        </div>
                    </div>
                </div>
            @endif
            @if (isset($content))
                {{$content}}
            @endif

            @if (isset($slot))
                {{$slot}}
            @endif
        </div>

        @if(!empty($footer))
            <div class="m-portlet__foot">
                <div class="row align-items-center">
                    {{$footer}}
                </div>
            </div>
        @endif

        @if (!empty($form))
            </form>
        @endif
    </div>
</div>
