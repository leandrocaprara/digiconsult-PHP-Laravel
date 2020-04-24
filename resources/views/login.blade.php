<html>
  <head>
    <script src="/js/jquery3.2.1.min.js"></script>
    <script src="/js/bootstrap4.0.0.min.js"></script>
    <link href="/css/bootstrap4.0.0.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="/css/login.css">
  </head>
  <body>
    <div class="login-reg-panel">
      <div class="login-info-box">
        <h2>Tem uma conta?</h2>
        <p>Entre com as suas informações.</p>
        <label id="label-register" for="log-reg-show">Login</label>
        <input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
      </div>
      <div class="register-info-box">
        <h2>Esqueceu sua senha?</h2>
        <p>Preencha seu e-mail para resetar sua senha.</p>
        <label id="label-login" for="log-login-show">Recuperar senha.</label>
        <input type="radio" name="active-log-panel" id="log-login-show">
      </div>     
      <div class="white-panel">
        <p>Usuário ou senha inválidos, verifique!</p>
        <form action="#" method="POST">
          <div class="login-show">
            <h2>LOGIN</h2>
            <label for="" style="color: black;">Email</label>
            <input type="text" name="nome" id="">
            <label for="" style="color: black;">Password</label>
            <input type="text" name="nome" id="">
            <input type="hidden" name="next" value="">
            <input type="submit" value="Login" class=".login-show button" name="login">
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
  $(document).ready(function(){
    $('.login-info-box').fadeOut();
    $('.login-show').addClass('show-log-panel');
  });
  
  $('.login-reg-panel input[type="radio"]').on('change', function() {
    if($('#log-login-show').is(':checked')) {
        $('.register-info-box').fadeOut(); 
        $('.login-info-box').fadeIn();
        
        $('.white-panel').addClass('right-log');
        $('.register-show').addClass('show-log-panel');
        $('.login-show').removeClass('show-log-panel');
        
    }
    else if($('#log-reg-show').is(':checked')) {
        $('.register-info-box').fadeIn();
        $('.login-info-box').fadeOut();
        
        $('.white-panel').removeClass('right-log');
        
        $('.login-show').addClass('show-log-panel');
        $('.register-show').removeClass('show-log-panel');
    }
  });
</script>