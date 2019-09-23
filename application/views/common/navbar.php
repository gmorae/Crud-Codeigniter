<header>
  <nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a class="navbar-brand ml-5">CRUD</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav ml-auto mt-2 mr-5">
        <li class="nav-item ml-3">
          <a class="nav-link" href="<?= base_url('auth') ?>">Home</a>
        </li>
        <li class="nav-item ml-3">
          <a class="nav-link" href="<?= base_url('produtos') ?>">Produtos</a>
        </li>
        <li class="nav-item ml-3">
          <a class="nav-link" href="<?= base_url('auth/logout') ?>">Sair</a>
        </li>
      </ul>
    </div>
  </nav>
</header>