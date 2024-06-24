<?php 
    require_once('modelo/materia_model.php');

    class materia_controller{

        private $model_m;
    
        function __construct(){
            $this->model_m=new materia_model();
        }

        function index(){
            $query =$this->model_m->get();

            include_once('vistas/header.php');
            include_once('vistas/index.php');
            include_once('vistas/footer.php');
        }
        function materia(){
            $data=NULL;
            if(isset($_REQUEST['id'])){
                $data=$this->model_m->get_id($_REQUEST['id']);    
            }
            $query=$this->model_m->get();
            include_once('vistas/header.php');
            include_once('vistas/materia.php');
            include_once('vistas/footer.php');
        }

        function get_datosE(){

            
            $data['id']=$_REQUEST['txt_id'];
            $data['nombre']=$_REQUEST['txt_nombre'];
            $data['profesor']=$_REQUEST['txt_profesor'];
            $data['hora_inicio']=$_REQUEST['txt_hora_inicio'];
            $data['creditos']=$_REQUEST['txt_creditos'];
        
            if ($_REQUEST['txt_id']=="") {
                $this->model_m->create($data);
            }
            
            if($_REQUEST['txt_id']!=""){
                $date=$_REQUEST['id'];
                $this->model_m->update($data,$date);
            }
            
            header("Location:index.php");

        }

        function confirmarDelete(){

            $data=NULL;

            if ($_REQUEST['id']!=0) {
               $data=$this->model_m->get_id($_REQUEST['id']);
            }

            if ($_REQUEST['id']==0) {
                $date['id']=$_REQUEST['txt_id'];
                $this->model_m->delete($date['id']);
                header("Location:index.php");
            }

            include_once('vistas/header.php');
            include_once('vistas/confirm.php');
            include_once('vistas/footer.php');
            
        }
    }
?>