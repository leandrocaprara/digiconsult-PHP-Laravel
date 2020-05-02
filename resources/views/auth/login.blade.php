<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Digiconsult - Nome do consultório</title>

    <!-- Scripts -->
    <script src="/js/app.js" defer></script>
    <script src="/js/jquery3.2.1.min.js"></script>
    <script src="/js/bootstrap4.0.0.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/bootstrap4.0.0.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="/css/login.css" rel="stylesheet">
</head>

<body>
    <div class="login-reg-panel">
        <div class="login-info-box">
            <h2>Tem uma conta?</h2>
            <p>Entre com as suas informações.</p>
            <label id="label-register" for="log-reg-show">Login</label>
            <input type="radio" name="active-log-panel" id="log-reg-show" checked="checked">
        </div>
        <div class="register-info-box">
            <h2>Esqueceu sua senha?</h2>
            <p>Preencha seu e-mail para resetar sua senha.</p>
            <label id="label-login" for="log-login-show">Recuperar senha.</label>
            <input type="radio" name="active-log-panel" id="log-login-show">
        </div>
        <div class="white-panel">
            <!-- <p>Usuário ou senha inválidos, verifique!</p> -->
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="login-show">
                    <h2>LOGIN</h2>
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                    <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                </div>
            </form>
            <form action="#" method="POST">
                <div class="register-show">
                    <h2>ESQUECEU SUA SENHA?</h2>
                    <input type="text" placeholder="Email" name="email_recovery">
                    <input type="submit" value="Recuperar" class=".register-show submit">
                </div>
            </form>
        </div>
    </div>

</body>

</html>
<script>
    $(document).ready(function() {
        $('.login-info-box').fadeOut();
        $('.login-show').addClass('show-log-panel');
    });

    $('.login-reg-panel input[type="radio"]').on('change', function() {
        if ($('#log-login-show').is(':checked')) {
            $('.register-info-box').fadeOut();
            $('.login-info-box').fadeIn();

            $('.white-panel').addClass('right-log');
            $('.register-show').addClass('show-log-panel');
            $('.login-show').removeClass('show-log-panel');

        } else if ($('#log-reg-show').is(':checked')) {
            $('.register-info-box').fadeIn();
            $('.login-info-box').fadeOut();

            $('.white-panel').removeClass('right-log');

            $('.login-show').addClass('show-log-panel');
            $('.register-show').removeClass('show-log-panel');
        }
    });
</script>