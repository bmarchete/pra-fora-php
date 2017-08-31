<?php
//rotas da aplicação
//a variável $uri já contém os dados da rota solicitada

switch ($uri) {
    
    case '/':
        $messageController->index();
        break;
   
    case '/insert':

        $messageController->insert();

        break;

    case '/search':

    $messageController->search();

    break;
           
    default:
        die('Essa rota não é valida');
        break;
}
