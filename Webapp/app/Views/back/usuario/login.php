<?php $validation = \Config\Services::validation(); ?>
<div class="forma" style="width: 38rem;">
<!--Inicio del formulario-->
<form method="post" action="<?php echo base_url('/enviar-login') ?>">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
    <input name="email" type="text" class="form-control" aria-describedby="emailHelp">
  </div>
  <?php if($validation->getError('email')) {?>
    <div class='alert alert-danger mt-2'>
    <?= $error = $validation->getError('email'); ?>
  </div>
<?php }?>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input name="pass" type="password" class="form-control">
  </div>
  <?php if($validation->getError('pass')) {?>
    <div class='alert alert-danger mt-2'>
    <?= $error = $validation->getError('pass'); ?>
  </div>
  <!-- Mensaje de error-->
<?php }?>
  <?php if(session()->getFlashdata('msg')):?>
   <div class="aler alert-warning">
      <?=session()->getFlashdata('msg');?> 
  </div>
<?php endif?>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Mantenerme conectado</label>
  </div>
  <button type="submit" class="btn btn-primary">Entrar</button>
  <br><span>¿No esta registrado? <a href="<?php echo base_url ('/register'); ?>"> Haga click aqui</a></span>
</form>
</div>
