@extends('site.templates.template')
@section('pagina')
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" width="100%">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <label class="modal-title">Modal</label>
      </div>
      <div class="modal-body">
        <p>Conteudo</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link waves-effect"  data-dismiss="modal">FECHAR</button>
      </div>
    </div>
  </div>
</div>
@endsection