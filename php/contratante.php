<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Full Service</title>

  <!-- CSS  -->
  <link rel="stylesheet" type ="text/css" href="../css/contratante.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
    <?php
        require_once "menu2.php";
    ?>
        <form action="" method="POST">
            <!--Card-->
            <div class="row" id="card">
                <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                    <img src="../img/img1.jpg">
                    <span class="card-title">Mecânico</span>
                    </div>
                    <div class="card-content">
                    <p>Profissional responsável por cuidar da manutenção de veículos, motocicletas, motores e similares,
                         desmontando, reparando, substituindo, ajustando e lubrificando o motor e peças anexas.</p>
                    </div>
                    <a class="waves-effect waves-light btn  deep-purple waves-effect waves-light btn modal-trigger" href="#cadastro" id="botao">Contratar</a>
                        <!-- Modal Structure -->
                        <div id="cadastro" class="modal">
                            <div class="modal-content">
                            <h4>Contrato</h4>
                            <div class="row">
                            <form class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                <input id="last_name" type="text" class="validate">
                                <label for="last_name">Nome Completo</label>
                                </div>
                            </div>
                            <div class="row">
                            <div class="input-field col s12">
                                <select>
                                <option value="" disabled selected>Para quando necessita do serviço?</option>
                                <option value="1">Imediatamente</option>
                                <option value="2">Daqui uma semana</option>
                                <option value="3">Sem previsão</option>
                                </select>
                            </div>
                            </div>
                            <div class="row">
                            <div class="input-field col s12">
                                <textarea id="textarea2" class="materialize-textarea" data-length="120"></textarea>
                                <label for="textarea2">Detalhes que serão importantes ao profissional saber</label>
                            </div>
                            </div>
                            <div class="row">
                            <div class="input-field col s12">
                                <select>
                                <option value="" disabled selected>De que modo quer entrar em contato?</option>
                                <option value="1">Ligação</option>
                                <option value="2">Email</option>
                                <option value="3">Ambos</option>
                                </select>
                            </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                <input id="cep" type="text" class="validate">
                                <label for="cep">CEP:</label>
                                </div>
                            </div>
                            <button class="btn waves-effect waves-right col s12 deep-purple" id="botao" type="submit" name="action">Finalizar
                                <i class="material-icons right">send</i>
                            </button>
                            </div>
                            </form>
                        </div>
                            </div>
                        </div> 
                </div>
                </div>
            <!--fim do card-->
        </form>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>

  </body>
</html>


