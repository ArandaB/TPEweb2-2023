<?php
require_once ('model/pelisModel.php');
require_once ('view/pelisView.php');


class PelisController  {

    private $model;
    private $view;

    function __construct(){
        $this->model = new PelisModel();
        $this->view = new PelisView();
    }

    
    function showHome(){
        $pelis = $this->model->getPelis();
        $this->view->showHome($pelis);
    }
    
    function showPelicula($id){
        $peli = $this->model->getPelicula($id);
        $this->view->showPelicula($peli);
    }
    
    function eliminar($id) {
        $this->model->eliminar($id);
        $this->view->RedirectHome();
    }

    function createPeli(){
        $select = $_POST['categorie'];
        switch($select){
            case "action":
                $categorie = "Acción";
                $id_categorie = 1;
                break;
            case "adventure":
                $categorie = "Aventura";
                $id_categorie = 3;
                break;
            case "drama":
                $categorie = "Drama";
                $id_categorie = 2;
                break;
        }

        if( $_FILES['img']['type'] == "image/jpg" ||
            $_FILES['img']['type'] == "image/jpeg" ||
            $_FILES['img']['type'] == "image/png" ){
            $this->model->insertPeli($_POST['name'], $_POST['description'], $_POST['release_date'], $_FILES['img']['tmp_name'], $categorie, $id_categorie);
            $this->view->RedirectHome();
        }else{
            $this->model->insertPeli($_POST['name'], $_POST['description'], $_POST['release_date'],$_FILES['img']['tmp_name'], $categorie, $id_categorie);
            $this->view->RedirectHome();
        }
    }

    private function uploadImg($image){
        $target = 'img/games/' . uniqid() . '.jpg';
        move_uploaded_file($image, $target);
        return $target;
    }
    function modificarView($id){
        $peli = $this->model->getPelicula($id);
        $this->view->modificar($peli);
    }
    function modificar($id){
        $select = $_POST['categorie'];
        switch($select){
            case "action":
                $categorie = "Acción";
                $id_categorie = 1;
                break;
            case "adventure":
                $categorie = "Aventura";
                $id_categorie = 3;
                break;
            case "drama":
                $categorie = "Drama";
                $id_categorie = 2;
                break;
        }
            $this->model->modificarPelicula($_POST['name'], $_POST['description'], $_POST['release_date'], $categorie, $id_categorie, $id);
            $this->view->RedirectHome();
    }
    function eliminarTodasSegunCategoria($categoria){
        $this->model->eliminarTodasSegunCategoria($categoria);
    }

    function modificarTituloCategoria($categoria){
        $tituloNuevo = $_POST['titulocategoria'];
        $this->model->modificarTituloCategoria($categoria, $tituloNuevo);
    }


    
}