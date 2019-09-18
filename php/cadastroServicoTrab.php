<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Full Service</title>

        <!-- CSS  -->
        <link rel="stylesheet" href="../css/perfil.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <title>Perfil Contratante</title>
    </head>
    <body>
        <?php
            require_once "menu.php";
        ?>
        <form action="" method="POST" id="input">
            <div id="tudo">
                <center>
                <div class="card-image" id="perfilFoto">
                    <img id='img1'class ='circle'src="../img/img1.jpg">
                </div>
                </center>
                <label>Profissional em:</label>
                <input type="text" name="" id="">
                <br>
                <br>
                <div class="file-field input-field ">
                    <div class="btn deep-purple">
                        <span>File</span>
                        <input type="file" multiple>
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" placeholder="Upload one or more files">
                    </div>
                </div>
                <br>
                <label>Descrição de seu serviço:</label>
                <input type="text" name="desc" id="">
                <br>
                <br>
                <div class="row">
                    <div class="col s6">
                        <button type="submit" id="icon" class="orange lighten-2 col s12"><i class="material-icons ">edit</i>Editar</button>
                    </div>
                    <div class="col s6">
                        <button type="submit" class="orange lighten-2 col s12"><i class="material-icons ">delete</i>Excluir</button>
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