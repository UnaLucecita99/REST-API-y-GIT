<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\usuario_model;


class login_controller extends BaseController
{
  public function index(){
    helper(['form','url']);

    $dato['titulo']='login';
    echo view('front/head',$dato);
    echo view('front/navbar');
    echo view('back/usuario/login');
    echo view('front/footer');
  }

  public function auth(){
    $session = session();
    $model = new usuario_model();

    $email = $this->request->getVar('email');
    $password = $this->request->getVar('pass');

    $data = $model->where('email', $email)->first();
    if($data){
      $pass = $data['pass'];
      $ba = $data['baja'];
      if ($ba == 'SI'){
        $session->setFlashdata('msg', 'Usuario dado de baja');
        return redirect()->to('/login_controller');
      }
      $verify_pass = password_verify($password, $pass);

      if($verify_pass){
        $ses_data = [
          'id_usuario' => $data['id_usuario'],
          'nombre' => $data['nombre'],
          'apellido' => $data['apellido'],
          'email' => $data['email'],
          'usuario' => $data['usuario'],
          'perfil_id' => $data['perfil_id'],
          'logged_in' => TRUE
        ];
          //si se cumple la verificación se inicia la sesion
        $session->set($ses_data);

        session()->setFlashdata('msg', 'Bienvenido!!');
        return redirect()->to('/panel');
        //return redirect()->to('/prueba')://pagina principal
      }else{
        //no paso la validación de la password//
        $session->setFlashdata('msg', 'Contraseña incorrecta');
        return redirect()->to('/login');
      }
    }else{
      $session->setFlashdata('msg', 'No Existe el Email o Email incorrecto');
      return redirect()->to('/login');
    }
  }
  public function logout()
  {
    $session = session();
    $session->destroy();
    return redirect()->to('/');
  }
}
