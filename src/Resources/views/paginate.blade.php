<div class="row mt-5 align-items-center">
    <div class="col-6 clearfix">
        {{$itens->total()}} registros encontrados.
    </div>
    <div class="col-6 text-right">
        @if (isset($appends))
            {{ $itens->appends($appends)->render("pagination::bootstrap-4") }}
        @else
            {{ $itens->render("pagination::bootstrap-4") }}
        @endif
    </div>
</div>
