<div class="row mt-5 align-items-center">
	<div class="col-6 clearfix">
		{{$itens->total()}} registros encontrados.
	</div>
	<div class="col-6 text-right">
		{{ $itens->render("pagination::bootstrap-4") }}
	</div>
</div>
