<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="{{ asset('css/form.css') }}">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   </head>
   <body>
   <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Formulário da escola!</h3>
                        <form class="requires-validation" action="{{isset($escola->id)?route('escola_atualizacao',['id'=>$escola->id]):route('escola_create')}}" method="POST">
                        @csrf
                        @method('POST')           
                        <input type="hidden" id="id" name="id" value="{{isset($escola->id)?$escola->id:''}}">
                            <div class="col-md-12">
                            <input type="text" name="nome_escola" placeholder="Nome da escola" value="{{isset($escola->nome_escola)?$escola->nome_escola:''}}">
                            </div>

                            <div class="col-md-12 mb-3">
                            <input type="text" name="cnpj" placeholder="CNPJ da escola" value="{{isset($escola->cnpj)?$escola->cnpj:''}}">
                                
                            </div>
                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">Registre</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
   </body>
</html>

