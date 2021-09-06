<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!--Datatable-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 mt-3">
        <table id="" class="display" >
        <thead>
            <tr>
                <th scope="col">Nome da Escola</th>
                <th scope="col">CNPJ</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($escola as $itens)
            <tr>
                <td>{{$itens['nome_escola']}}</td>
                <td>{{$itens['cnpj']}}</td>
                <td class="action-buttons">
                  <a href="{{route('escola_delete',$itens['id'])}}" class="btn btn-danger">Deletar</a>
                  <a href="{{route('escola_view',$itens['id'])}}" class="btn btn-info">Editar</a>
                  

                </td>
            </tr>
            @endforeach
        </tbody>
        
    </table>
    <a href="{{route('escola_formulario')}}" class="btn btn-primary">Novo</a>
    <a href="{{route('turma_index')}}" class="btn btn-primary">Visualizar todas as turmas</a>
        </div>
      </div>
    </div>
    <!--Página de navegação das turmas-->
    

    <!--Datatable-->
    <script src="http://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
    <!--Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function() {
    $('table.display').DataTable();
} );
</script>

</body>
</html>