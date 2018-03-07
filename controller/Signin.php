<?php
namespace app\controller;

use Demolidor\Demolidor;

class signin extends Demolidor
{
    public function get()
    {
        if ($this->data['user']) {
            $this->view->redirect('/');
        }
    }
    public function post()
    {
        if (!$this->data['user']) {
            $this->data['user']=$this->auth->signin();
        }
        if (isset($this->data['user']['error'])) {
            $this->data['errors']=$this->data['user']['error'];
        } else {
            $this->data['errors']=false;
        }
    }
}
