<?php

namespace App\Controller;

class HelloController extends AppController
{
  //初期化処理
  //$this->atuoRender = false;
  //$this->viewBuilder()->autoLayout(false);

  public function initialize()
  {
    $this->viewBuilder()->setLayout('Hello');
  }
  public function index()
  {
    //$this->viewBuilder()->enableAutoLayout(true);
    $result = '';
    if ($this->request->isPost()) {
      $result = '*送信内容';
      $input = $this->request->getData('HelloForm');
      var_dump($input);
      foreach ($input as $k => $v) {
        $result = $v;
      }

      $result = $v;
    } else {
      $result = 'empty';
    }
    $this->set('result', $result);
  }

  public function sendForm()
  {
  }
}
