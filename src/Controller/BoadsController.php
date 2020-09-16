<?php

namespace App\Controller;


class BoadsController extends AppController
{
    public function  index()
    {
        $data = $this->Boads->find('all');
        $this->set('data', $data);
        $this->set('entity', $this->Boads->newEntity());
    }

    public function addRecord()
    {
        if ($this->request->is('post')) { //postメソッドの真偽
            $boad = $this->Boads->newEntity($this->request->data); //formで入力されたデータを変数にいれる

            $this->Boads->save($boad);
            return $this->redirect(['action' => 'index']);
        }
    }
}
