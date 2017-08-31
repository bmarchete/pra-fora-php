<?php
namespace Project\Controller;

use Project\Db\QueryBuilder;

class MessageController
{
    public function index()
    {
        //acessar o bd
        $q = new QueryBuilder();
        //busca os dados
        $dados = $q->select('messages');
        $dados = array_reverse($dados);
       
        //acessar a view
        require './app/views/index.php';

    }

    public function insert()
    {
        //acessar o banco
        $q = new QueryBuilder();
        
        //recebo os dados
        $data['name'] = $_POST['name'];
        
        //filtra os dados
        $data['message'] = nl2br(htmlentities($_POST['message'], ENT_QUOTES, 'UTF-8'));
        
        $date = new \DateTime('now');
        $data['date'] = date_format($date, 'Y-m-d');
      
        $q->insert('messages', $data);

        header('Location: /');
    }

    public function search()
    {
        $q = new QueryBuilder();
        $dados = $q->select('messages', ['name' => $_POST['name']]);
        require './app/views/index.php';
    }
}