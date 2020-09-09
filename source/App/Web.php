<?php 

namespace Source\App;

use Source\Models\User;

class Web
{
    public function __construct()
    {
        
    }

    public function home($data)
    {
    	$model = new User();
    	$users = $model->find()->fetch(true);

    	echo json_encode($users);
    }

    public function contact($data)
    {
    	echo '<h1>Contato</h1>';
    	var_dump($data);
    }

    public function error($data)
    {
    	echo 'Erro ', $data['errcode'];
    }
}
