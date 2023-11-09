<div class="forma" style="width: 38rem;">
    <h1>Registro en Neko</h1>
    <?php $validation = \Config\Services::validation(); ?>

    <form method="post" action="<?php echo base_url('/enviar-form') ?>">
      <?=csrf_field();?>
      <?=csrf_field();?>
      <?php if(!empty (session()->getFlashdata('fail'))):?>
        <div class="aler alert-danger"><?=session()->getFlashdata('success');?></div>
      <?php endif?>

        <div class="form-group">
            <label for="nombre">Nombres:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <!--Error-->
        <?php if($validation->getError('nombre')) {?>
          <div class='alert alert-danger mt-2'>
          <?= $error = $validation->getError('nombre'); ?>
        </div>
      <?php }?>

        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" class="form-control" required>
        </div>
        <?php if($validation->getError('apellido')) {?>
          <div class='alert alert-danger mt-2'>
          <?= $error = $validation->getError('apellido'); ?>
        </div>
      <?php }?>

        <div class="form-group">
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" class="form-control" required>
        </div>
        <?php if($validation->getError('usuario')) {?>
          <div class='alert alert-danger mt-2'>
          <?= $error = $validation->getError('usuario'); ?>
        </div>
      <?php }?>

        <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <input type="femail" name="email" class="form-control" required>
        </div>
        <?php if($validation->getError('email')) {?>
          <div class='alert alert-danger mt-2'>
          <?= $error = $validation->getError('email'); ?>
        </div>
      <?php }?>

        <div class="form-group">
            <label for="pass">Contraseña:</label>
            <input type="password" name="pass" class="form-control" required>
        </div>
        <?php if($validation->getError('pass')) {?>
          <div class='alert alert-danger mt-2'>
          <?= $error = $validation->getError('pass'); ?>
        </div>
      <?php }?>
        <br>
        <button type="submit" class="btn btn-primary">Registrarse</button>
    </form>
</div>
