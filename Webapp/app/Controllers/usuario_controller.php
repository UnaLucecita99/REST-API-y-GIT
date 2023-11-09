<?php

namespace App\Controllers;
Use App\Models\usuario_model;
use CodeIgniter\Controller;

class usuario_controller extends Controller{

public function __construct(){
  helper(['form', 'url']);
}
public function register(){
  $data['titulo']='Registro';
  echo view('front/head',$data);
  echo view('front/navbar');
  echo view('back/usuario/register');
  echo view('front/footer');
}
//Validar datos de registro
public function formValidation() {
  $input = $this->validate([
    'nombre' => 'required|min_length[3]',
    'apellido' => 'required|min_length[3]|max_length[25]',
    'usuario' => 'required|min_length[3]',
    'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
    'pass' => 'required|min_length[3]|max_length[10]'
  ],
);
 $formModel = new usuario_model();
  if (!$input) {
    $data['titulo']='Registro';
    echo view('front/head',$data);
    echo view('front/navbar');
    echo view('back/usuario/register', ['validation' => $this->validator]);
    echo view('front/footer');
  }
  //En este else se guardan los datos en la tabla
   else {
    $formModel->save([
      'nombre' => $this->request->getVar('nombre'),
      'apellido' => $this->request->getVar('apellido'),
      'usuario' => $this->request->getVar('usuario'),
      'email' => $this->request->getVar('email'),
      'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
    ]);

    session()->setFlashdata('success', 'Usuario registrado con exito');
 		return redirect()->to(base_url('/login'));
  }
}
}
