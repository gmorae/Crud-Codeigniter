<?php echo form_open("auth/login"); ?>
<main>
  <section id="login" class="mt-5">
    <div class="login__corpo_principal container col-6">
      <div class="text-center">
        <h1>Login</h1>
        <p>Por favor entre com seu e-mail e senha abaixo para poder acessar sua conta</p>
        <div id="infoMessage"><?php echo $message; ?></div>
      </div>
      <form method="POST">
        <div class="form-group">
          <input type="email" class="form-control" name="identity" id="identity" aria-describedby="emailHelp" placeholder="E-mail">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="password" id="password" placeholder="Senha">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </section>
</main>
<?php echo form_close(); ?>