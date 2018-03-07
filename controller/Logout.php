<?php
namespace app\controller;

use Demolidor\Demolidor;

class Logout extends Demolidor
{
    public function get()
    {
        $this->auth->logout();
        $this->view->redirect('/');
    }
}
