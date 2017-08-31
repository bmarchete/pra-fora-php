<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./public/css/bootstrap.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand" href="/">Pra Fora</a>
            </div>

           <form class="navbar-form navbar-right" method="post" action="/search">
                <input type="text" name="name" class="form-control" placeholder="Digite sua busca">
                <button class="btn btn-info">Buscar</button>
           </form>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header text-capitalize text-center" style="padding-top: 30px;">Bem vindo ao Pra Fora</h1>

            </div>
        </div>

        <div class="row" style="padding-top: 20px;">
            <div class="col-md-12">
                <form method="post" action="/insert">
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" id="name" class="form-control" name="name" value="" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Mensagem</label>
                        <textarea required rows="" id="message" class="form-control" cols="" name="message"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-lg btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        <h2 class="page-header">Mensagens <span class="badge"><?= count($dados) ?></span></h2>



        <div class="row">

            <?php foreach ($dados as $message) { ?>
            <div class="col-md-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <?= $message['name'] ?>
                        </h3>
                    </div>

                    <div class="panel-body">
                        <p class="well">
                            <?= $message['message'] ?>
                        </p>
                        <p class="text-right">
                            <?php 
                                $return = new \DateTime($message['date']);
                                echo $return->format('d/m/Y');
                            ?>
                        </p>

                    </div>
                </div>

            </div>
            <?php  } ?>
        </div>

    </div>
</body>

</html>