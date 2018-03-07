<?php
namespace app\controller;

use Demolidor\Demolidor;

class Home extends Demolidor
{
    public function get()
    {
        $table='messages';
        $where=[
            'id[>]'=>0,
            'ORDER'=>['created_at'=>'DESC']
        ];
        $this->data['messages']=$this->db->select($table, "*", $where);
        if ($this->data['messages']) {
            foreach ($this->data['messages'] as $key => $message) {
                $table='users';
                $where=[
                    'id'=>$message['user_id']
                ];
                $name=$this->db->get($table, 'name', $where);
                $this->data['messages'][$key]['name']=$name;
            }
        }
    }
}
