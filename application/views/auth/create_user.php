<main>
      <section id="create_user" class="container mb-3 mt-3">
            <h1><?= lang('create_user_heading'); ?></h1>
            <p><?= lang('create_user_subheading'); ?></p>
            <div id="infoMessage"><?= $message; ?></div>
            <?= form_open("auth/create_user"); ?>
            <div class="form-row">
                  <div class="col">
                        <p>
                              <div class="form-group">
                                    <input type="text" class="form-control" name="first_name" id="first_name" aria-describedby="helpId" placeholder="Digite seu nome">
                              </div>
                        </p>
                  </div>
                  <div class="col">
                        <p>
                              <div class="form-group">
                                    <input type="text" class="form-control" name="last_name" id="last_name" aria-describedby="helpId" placeholder="Digite seu Sobrenome">
                              </div>
                        </p>
                  </div>
            </div>
            <div class="form-row">
                  <div class="col">
                        <?php
                        if ($identity_column !== 'email') {
                              echo '<p>';
                              echo lang('create_user_identity_label', 'identity');
                              echo '<br />';
                              echo form_error('identity');
                              echo form_input($identity);
                              echo '</p>';
                        }
                        ?>

                        <div class="form-group">
                              <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Digite seu e-mail">
                        </div>
                  </div>
                  <div class="col">
                        <div class="form-group">
                              <input type="text" class="form-control" name="phone" id="phone" aria-describedby="helpId" placeholder="Digite seu telefone / celular">
                        </div>
                  </div>
            </div>
            <div class="form-row">
                  <div class="col">
                        <div class="form-group">
                              <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Digite a senha">
                        </div>
                  </div>
                  <div class="col">
                        <div class="form-group">
                              <input type="password" class="form-control" name="confirm_password" id="confirm_password" aria-describedby="helpId" placeholder="Confirme sua senha">
                        </div>
                  </div>
            </div>

            <button type="submit" class="btn btn-outline-success">Cadastrar</button>
            <?= form_close(); ?>

      </section>
</main>