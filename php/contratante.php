<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Parallax Template - Materialize</title>

  <!-- CSS  -->
  <link rel="stylesheet" href="../css/contratante.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
        <form action="" method="POST">
            <!-- Dropdown Structure -->
            <ul id="dropdown1" class="dropdown-content">
            <div id="navbar">
                <li><a href="#!">one</a></li>
                <li><a href="#!">two</a></li>
                <li class="divider"></li>
                <li><a href="#!">three</a></li>
                </ul>
                <nav>
                <div class="nav-wrapper orange lighten-2">
                    <a href="#!" class="brand-logo" id="fonte">Contratante Full Service</a>
                    <ul class="right hide-on-med-and-down">
                    <li><a href="sass.html" href="../php/contratante.php">Contratar</a></li>
                    <li><a href="badges.html"id="fonte2">Perfil</a></li>
                    </ul>
                </div>
            </div>
            </nav>

            <!--Card-->
            <div class="row" id="card">
                <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                    <img src="../img/img1.jpg">
                    <span class="card-title">Mecânico</span>
                    <button class="btn-floating halfway-fab waves-effect orange lighten-2" ><a class="btn modal-trigger" href="#modal1"></a>
                                        
                    <!-- Modal Trigger -->
                    

                    <!-- Modal Structure -->
                    <div id="modal1" class="modal">
                    <div class="modal-content">
                        <h4>Modal Header</h4>
                        <p>A bunch of text</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                    </div>
                    </div>
                </button>
                    </div>
                    <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                    </div>
                </div>
                </div>
             

                <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                    <img src="../img/img1.jpg">
                    <span class="card-title">Mecânico</span>
                    <a class="btn-floating halfway-fab waves-effect orange lighten-2"><i class="material-icons">add</i></a>
                    </div>
                    <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                    </div>
                </div>
                </div>

                <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                    <img src="../img/img1.jpg">
                    <span class="card-title">Mecânico</span>
                    <a class="btn-floating halfway-fab waves-effect orange lighten-2"><i class="material-icons">add</i></a>
                    </div>
                    <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
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


