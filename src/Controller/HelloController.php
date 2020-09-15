<?php
  namespace App\Controller;

  class HelloController extends AppController{
      //初期化処理
      //$this->atuoRender = false;
      //$this->viewBuilder()->autoLayout(false);

    public function initialize(){
      $this->viewBuilder()->autoLayout(true);
      $this->viewBuilder()->layout('Hello');
    }
    public function index(){
      $this->viewBuilder()->autoLayout();
    }


  }
 ?>
