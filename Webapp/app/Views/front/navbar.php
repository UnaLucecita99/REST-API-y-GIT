<!-- Navbar -->
<?php
$session = session();
$nombre = $session->get('nombre');
$perfil=$session->get('perfil_id');
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="<?php echo base_url('principal')?>">
      <img src="<?php echo base_url('assets/img/flor3.jpg')?>" alt="marca"
      width="75" height="30" class="img-fluid"/>
    </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

<!--Admin view-->
    <?php if(session()->perfil_id == 2): ?>
    <div class="btn btn-secondary active btnUser btn-sm">
      <a href="">CLIENTE:   <?php echo session('nombre');?> </a>
    </div>
<!---->

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="principal">Principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="quienes_somos">Quienes somos?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="acercade">Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar sesión</a>
        </li>
      </ul>
    </div>
  <?php elseif(session()->perfil_id == 1): ?>
  <div class="btn btn-secondary active btnUser btn-sm">
    <a href="">ADMIN:   <?php echo session('nombre');?> </a>
  </div>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Login
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="login">Ingresar</a></li>
            <li><a class="dropdown-item" href="register">Registrarse</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
      </ul>
      </div>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar sesión</a>
      </li>

    <?php else:?>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Login
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="login">Ingresar</a></li>
              <li><a class="dropdown-item" href="register">Registrarse</a></li>
              <li><hr class="dropdown-divider"></li>
            </ul>
          </li>
        </ul>
        </div>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" aria-label="Buscar">
        <button class="btn btn-button" type="submit">Buscar</button>
      </form>
    <?php endif;?>
  </div>
</nav>
<!-- Navbar -->
