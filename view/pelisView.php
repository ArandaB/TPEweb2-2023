<?php
require_once('libs/smarty-4.3.4/libs/Smarty.class.php');

class PelisView {

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showHome($pelis){
        include ("templates/header.php");
        $user = $this->checkLoggedInView();
        $this->smarty->assign('pelis', $pelis);
        $this->smarty->assign('user',  $user);
        $this->smarty->assign('titulo', 'Catalogo Completo');
        $this->smarty->display('templates/render.array.pelis.tpl');
        include ("templates/footer.html");
    }
    

    function showPelicula($peli){
        include ("templates/header.php");
        $user = $this->checkLoggedInView();
        $this->smarty->assign('user',  $user);
        $this->smarty->assign('peli', $peli);
        $this->smarty->display('./templates/pelicula.tpl');
        include ("templates/footer.html");
    }

    function RedirectHome(){
        header("Location: ".BASE_URL."home");
    }

    
    function modificar($peli){
        include ("templates/header.php");
        $this->smarty->assign('peli', $peli);
        $this->smarty->display('./templates/peliculaModificar.tpl');

        include ("templates/footer.html");
    }

    function checkLoggedInView(){
        session_start();
        if(!isset($_SESSION["user"])){
            $user = 0;
        }
        else{
            $user = 1;
        }
        return $user;
    }

}