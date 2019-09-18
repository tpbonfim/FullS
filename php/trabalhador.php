<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Full Service</title>

        <!-- CSS  -->
        <link rel="stylesheet" href="../css/trabalhador.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
    <body>
    <?php
        require_once "menu.php";
    ?>
        <form action="" method="POST">
            <div id="tudo">
                <div class="inf">
                    <center>
                    <div class="card-image" id="perfilFoto">
                        <img id='img1'class ='circle'src="../img/img1.jpg">
                    </div>
                    </center>
                    <label>Nome:</label>
                    <input type="text" name="" id="">
                    <br>
                    <label>CPF:</label>
                    <input type="text" name="" id="">
                    <br>
                    <label>Profissão:</label>
                    <input type="text" name="" id="">
                    <br>
                    <label>CEP:</label>
                    <input type="text" name="" id="">
                    <br>
                    <label>Telefone:</label>
                    <input type="text" name="" id="">
                    <label>Email:</label>
                    <input type="text" name="" id="">
                    <br>
                    <br>
                    <div class="row">
                        <div class="col s6">
                            <button type="submit" id="icon" class="orange lighten-2 col s12"><i class="material-icons ">edit</i>Editar</button>
                        </div>
                        <div class="col s6">
                            <button type="submit" class="orange lighten-2 col s12"><i class="material-icons ">delete</i>Excluir conta</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../js/materialize.js"></script>
    <script src="../js/init.js"></script>

  </body>
</html>


