<?php
namespace app\controller;

use Demolidor\Demolidor;

class Message extends Demolidor
{
    public function post()
    {
        if ($this->user) {
            $data=[
                'message'=>$_POST['message'],
                'created_at'=>time(),
                'user_id'=>$this->user['id']
            ];
            $table='messages';
            $this->db->insert($table, $data);
            $this->view->redirect('/');
        } else {
            $this->view->redirect('/signin');
        }
    }
}
