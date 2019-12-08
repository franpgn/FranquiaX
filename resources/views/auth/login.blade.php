<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Franquia X</title>

  <!-- Principal CSS do Bootstrap -->
  <link href="https://getbootstrap.com.br/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Estilos customizados para esse template -->
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=3zcPJe0O3F5m3RhRBh40LMYGUL9Q-GQNaqF-OKPqNjkarBXoguc7vezcIFANBWeemk5MLp1ANOL-OON2FDHHN_xbSlNwv63d2dEBrYFy3KE" charset="UTF-8"></script></head>

  <body class="text-center">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <main role="main" class="inner cover">
        <h1 class="cover-heading">Faça seu Login</h1></br>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Permanecer Logado') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-lg btn-secondary">
                        {{ __('Login') }}
                    </button>
                    <a class="btn btn-lg btn-secondary" href="{{ route('register') }}">
                        Registrar
                    </a>
                </div>
            </div>
        </form>
    </div>
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


