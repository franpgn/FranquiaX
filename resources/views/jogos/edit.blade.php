<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Edição</title>

  <!-- Principal CSS do Bootstrap -->
  <link href="https://getbootstrap.com.br/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Estilos customizados para esse template -->
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=3zcPJe0O3F5m3RhRBh40LMYGUL9Q-GQNaqF-OKPqNjkarBXoguc7vezcIFANBWeemk5MLp1ANOL-OON2FDHHN_xbSlNwv63d2dEBrYFy3KE" charset="UTF-8"></script></head>

  <body class="text-center">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <nav class="nav nav-masthead justify-content-center">
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">Edição</h1>
        <p class="lead">Edite os campos do Jogo</p>


        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('Jogo.update', $jogos->id) }}">
          @method('PATCH') 
          @csrf
          <div class="form-group">    
            <label for="first_name">Título:</label>
            <input type="text" class="form-control" name="nome"/>
          </div>

          <div class="form-group">
            <label for="last_name">Empresa:</label>
            <input type="text" class="form-control" name="empresa"/>
          </div>

          <div class="form-group">
            <label for="email">Data:</label>
            <input type="text" class="form-control" name="data"/>
          </div> 
          <div class="form-group">
            <label for="email">Console:</label>
            <input type="text" class="form-control" name="console"/>
          </div> 
          <div class="form-group">
            <label for="email">Resumo:</label>
            <input type="text" class="form-control" name="resumo"/>
          </div> 
          <button type="submit" class="btn btn-lg btn-secondary">Atualizar</button>
        </form>
      </main>
    </div>

    <!-- Principal JavaScript do Bootstrap
      ================================================== -->
      <!-- Foi colocado no final para a página carregar mais rápido -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="../../assets/js/vendor/popper.min.js"></script>
      <script src="../../dist/js/bootstrap.min.js"></script>
    </body>
    </html>
