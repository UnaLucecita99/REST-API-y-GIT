<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='Pagina principal';
        echo view('front/head',$data);
        echo view('front/navbar');
        echo view('front/principal');
        echo view('front/footer');
    }
    public function quienes_somos()
    {
        $data['titulo']='Quienes somos';
        echo view('front/head',$data);
        echo view('front/navbar');
        echo view('front/quienes_somos');
        echo view('front/footer');
    }
    public function acercade()
    {
        $data['titulo']='Acerca de';
        echo view('front/head',$data);
        echo view('front/navbar');
        echo view('front/acercade');
        echo view('front/footer');
    }
    public function login()
    {
        $data['titulo']='Ingresar';
        echo view('front/head',$data);
        echo view('front/navbar');
        echo view('back/usuario/login');
        echo view('front/footer');
    }
    public function register()
    {
        $data['titulo']='Registro';
        echo view('front/head',$data);
        echo view('front/navbar');
        echo view('back/usuario/register');
        echo view('front/footer');
    }
    public function procesar_registro()
    {
        $data['titulo']='registrando';
        echo view('front/head',$data);
        echo view('front/navbar');
        echo view('front/procesar_registro');
        echo view('front/footer');
    }
    public function registro_exitoso()
    {
        $data['titulo']='Registro exitoso';
        echo view('front/head',$data);
        echo view('front/navbar');
        echo view('front/registro_exitoso');
        echo view('front/footer');
    }
}
