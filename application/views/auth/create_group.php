<main>
      <section id="create_group" class="container col-8 mt-5">
            <h1><?php echo lang('create_group_heading'); ?></h1>
            <p><?php echo lang('create_group_subheading'); ?></p>

            <div id="infoMessage"><?php echo $message; ?></div>
            <?php echo form_open("auth/create_group"); ?>
            <div class="mx-auto">

                  <div class="form-group">
                        <input type="text" class="form-control" name="group_name" id="group_name" aria-describedby="helpId" placeholder="Digite o nome do grupo">
                  </div>
                  <div class="form-group">
                        <input type="text" class="form-control" name="descripition" id="descripition" aria-describedby="helpId" placeholder="Digite a descrição">
                  </div>
                  <button type="submit" class="btn btn-outline-success">Cadastrar</button>
            </div>
            <?php echo form_close(); ?>
      </section>
</main>