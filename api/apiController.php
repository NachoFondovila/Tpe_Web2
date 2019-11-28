<?php

abstract class apiController {

    protected $model;
    protected $view;
    private $data;

    public function __construct() {
        $this->model = new comentsModel();
        $this->view= new JSONview();
        $this->helper= new userHelper();
        $this->data= file_get_contents("php://input");//que es esa direccion
    }

    public function getData(){
        return json_decode($this->data);
    }

}