@extends ('Painel.Template.template')

@section ('content')
<h1 style="font-size:38px;font-weight:100px;">Gestão Produtos</h1>

<form class="form-horizontal" style="width: 50%;">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  placeholder="Nome">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Numero</label>
    <div class="col-sm-10">
      <input type="text" class="form-control"  placeholder="Numero">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label" >Descrição</label>
    <div class="col-sm-10">
      <input type="textarea" class="form-control" placeholder="Descrição" >
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
</form>


@endsection