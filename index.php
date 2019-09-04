<!DOCTYPE html>
<html lang="en">

	<head>

	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	  <title>Full Service</title>

	  <!-- Bootstrap core CSS -->
	  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	  <!-- Custom fonts for this template -->
	  <link rel="stylesheet" href="css/estilo.css">
	  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	  <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
	  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	  <link rel="shortcut icon" href="img/icone.png" type="image/png">
	  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

	  <!-- Plugin CSS -->
	  <link rel="stylesheet" href="device-mockups/device-mockups.min.css">

	  <!-- Custom styles for this template -->
	  <link href="css/new-age.min.css" rel="stylesheet">

	</head>

	<body id="page-top">

	  <!-- Navigation -->
	  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
		<div class="container">
		  <a class="navbar-brand js-scroll-trigger" href="#page-top">Full Service</a>
		  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			Menu
			<i class="fas fa-bars"></i>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="#planos">Planos</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="#features">Funcionalidades</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="#download">Download</a>
			  </li>
			  <li class="nav-item dropdown">
				<a href="#" class="nav-link dropdown-toggle " data-toggle="dropdown">Entrar</a>
				<div class="dropdown-menu dropdown-menu-right">
				  <a href="#" data-toggle="modal" data-target="#login" class="dropdown-item btn btn-dark ">Login</a>
				  <a href="#" data-toggle="modal" data-target="#cadastro" class="dropdown-item  btn btn-dark ">Cadastrar</a>
				</div>
			  </li>
			</ul>
		  </div>
		</div>
	  </nav>
	  
	  <!--cadastro-->

	  <div class="container">
		<div class="modal fade" id="cadastro" tabindex="-1" role="dialog" aria-labelledby="cadastro" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header ">
				<h1 class="modal-title text-center text-dark id=" cadastro>Cadastre-se aqui:</h1>
			  </div>
			  <div class="modal-body ">
				<div class="row">
				  <form method="post" action="php/processaCadastro.php">
					<div class="row">
					  <div class="col-md-11 col-xl-11">
						<div class="form-group ">
						  <label>Digite seu nome completo:</label>
						  <input type="text" class="form-control campo form-control-sm" placeholder="Ex: Maria de Jesus"
							name="nome">
						</div>
					  </div>
						<div class="col-md-11 col-x3-11">
						<div class="form-group ">
						  <label>CPF:</label>
						  <input type="text" class="form-control campo form-control-sm" placeholder="Ex: 111-111-111-11"
							name="cpf">
						</div>
						</div>
					  <div class="col-md-11 col-xl-11">
						<div class="form-group  ">
						  <label>CEP:</label>
						  <input type="text" class="form-control campo form-control-sm" placeholder="Ex: 111111111"
							name="CEP">
						</div>
					  </div>
					  <div class="col-md-11 col-xl-11">
						<div class="form-group ">
						  <label>Telefone</label>
						  <input type="text" class="form-control campo form-control-sm" placeholder="Ex: (DDD) 0000-0000"
							name="telefone">
						</div>
					  </div>
					  <div class="col-md-11 col-xl-11">
					  </div>
					  <div class="col-md-11 col-xl-11">
						<div class="form-group ">
						  <label>Nivel:</label>
						  <select class="form-control  campo form-control-sm" name="nivel">
							<option value="" disabled selected>Selecione...</option>
							<option name="1">Trabalhador</option>
							<option name="2">Contratante</option>
						  </select>
						</div>
					  </div>
					  <div class="col-md-11 col-xl-11">
						<div class="form-group ">
						  <label>E-mail</label>
						  <input type="text" class="form-control campo form-control-sm"
							placeholder="Ex: fullservice1@gmail.com" name="email">
						</div>
					  </div>
					  <div class="col-md-11 col-xl-11">
						<div class="form-group">
						  <label>Digite sua senha</label>
						  <input type="password" name="senha" class="form-control form-control-sm campo"
							placeholder="********">
						</div>
					  </div>
					</div>
					<input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-dark" >
				  </form>
				</div>
			  </div>
			  <div class="modal-footer ">
				<button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
			  </div>
			</div>
		  </div>
		</div>
	  </div>

	  
	    <!--Login-->
	  <div class="container">
		<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header ">
				<h1 class="modal-title text-center text-dark" id="Login">Login</h1>
			  </div>
			  <div class="modal-body ">
				<form method="post" action="php/processaLogin.php">
				  <div class="row">
					<div class="col-md-12 col-xl-12">
					  <div class="form-group ">
						<label>Digite o nome do úsuario</label>
						<input type="text" class="form-control campo form-control-sm"
						  placeholder="Ex: fullservice1@gmail.com" name="usuario">
					  </div>
					</div>
					<div class="col-md-12 col-xl-12">
					  <div class="form-group">
						<label>Digite sua senha</label>
						<input type="password" name="senha" class="form-control  campo form-control-sm"
						  placeholder="********">
					  </div>
					</div>
				  </div>
				  <input type="submit" name="feito" value="Login" class="btn btn-dark">
				</form>
			  </div>
			  <div class="modal-footer ">
				<button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	  
	  <!--baixar-app-->
	  <header class="masthead">
		<div class="container h-100">
		  <div class="row h-100">
			<div class="col-lg-7 my-auto">
			  <div class="header-content mx-auto">
				<h1 class="mb-4">Conheça também nosso aplicativo, que ajudará você a exibir seus serviços com mais praticidade.</h1>
				<a href="#download" class="btn btn-outline btn-x2 js-scroll-trigger">Baixe agora gratuitamente</a>
			  </div>
			</div>
			<div class="col-lg-5 my-auto">
			  <div class="device-container">
				<div class="device-mockup iphone6_plus portrait white">
				  <div class="device">
					<div class="screen">
					  <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
					  <img src="img/colocar.jpg" class="img-fluid" alt="">
					</div>
					<div class="button">
					  <!-- You can hook the "home button" to some JavaScript events or just remove it -->
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </header>

	  
	  <!--planos-->
	  <section class="planos bg-primary text-center col-md-20 mx-auto min-width-2" id="planos">
		<div class="container">
	  <section class="planos" id="planos" href="planos">
		<div class="cta-content">
		  <div id="planos">
			<center>
			  <h1>Planos</h1>
			</center>
			<div class="row mb-5 mt-4">
			  <div class="col-sm-4 anime">
				<div class="card">
				  <div class="card-body">
					<center>
					  <h3 class="card-subtitle mb-2 text-muted">Bronze</h3>
					  <h1 class="">Gratuito</h1>
					</center>
				  </div>
				  <ul class="list-group list-group-flush">
					<li class="list-group-item">O usuário poderá deixar o anúncio de seus serviços no feed por uma semana gratuitamente.</li>
				  </ul>
				  <div class="card-body">
					<center>
					  <a href="#" data-toggle="modal" data-target="#login"
						class="btn btn-block btn-dark text-uppercase">Contratrar</a>
					</center>
				  </div>
				</div>
			  </div>

			  <div class="col-sm-4 anime">
				<div class="card">
				  <div class="card-body">
					<center>
					  <h3 class="card-subtitle mb-2 text-muted">Silver</h3>
					  <h1 class="">R$10</h1>
					</center>
				  </div>
				  <ul class="list-group list-group-flush">
					<li class="list-group-item">O usuário poderá deixar o anúncio de seus serviços no feed por uma semana
					  gratuitamente.</li>
				  </ul>
				  <div class="card-body">
					<center>
					  <a href="#" data-toggle="modal" data-target="#login"
						class="btn btn-block btn-dark text-uppercase">Contratrar</a>
					</center>
				  </div>
				</div>
			  </div>

			  <div class="col-sm-4 anime">
				<div class="card">
				  <div class="card-body">
					<center>
					  <h3 class="card-subtitle mb-2 text-muted">Gold</h3>
					  <h1 class="">R$25</h1>
					</center>
				  </div>
				  <ul class="list-group list-group-flush">
					<li class="list-group-item">O usuário poderá deixar o anúncio de seus serviços no feed por uma semana
					  gratuitamente.</li>
				  </ul>
				  <div class="card-body">
					<center>
					  <a href="#" data-toggle="modal" data-target="#login"
						class="btn btn-block btn-dark text-uppercase">Contratrar</a>
					</center>
				  </div>
				</div>
			  </div>
			</div>
		</div>
	  </section>
	</div>
</section>
	 
	 
	  <!--funcionalidades-->
	  <section class="features" id="features" href="features">
		<div class="container">
		  <div class="section-heading text-center">
			<h2>Funcionalidades e descobertas Ilimitadas</h2>
			<p class="text-muted">Descubras novas opotunidades de emprego !</p>
			<hr>
		  </div>
		  <div class="row">
			<div class="col-lg-4 my-auto">
			  <div class="device-container">
				<div class="device-mockup iphone6_plus portrait white">
				  <div class="device">
					<div class="screen">
					  <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
					  <img src="img/colocar.jpg" class="img-fluid" alt="">
					</div>
					<div class="button">
					  <!-- You can hook the "home button" to some JavaScript events or just remove it -->
					</div>
				  </div>
				</div>
			  </div>
			</div>
			<div class="col-lg-8 my-auto">
			  <div class="container-fluid">
				<div class="row">
				  <div class="col-lg-6">
					<div class="feature-item">
					  <img src="img/img1.png">
					  <h3>Dispositivos</h3>
					  <p class="text-muted">Auxiliar na divulgação de serviços prestados pelos usúarios no aplicativo.</p>
					</div>
				  </div>
				  <div class="col-lg-6">
					<div class="feature-item">
					  <img src="img/img2.png">
					  <h3>Uso flexível</h3>
					  <p class="text-muted">Colocar imagens de identificacão e de serviços prestados.</p>
					</div>
				  </div>
				</div>
				<div class="row">
				  <div class="col-lg-6">
					<div class="feature-item">
					  <img src="img/img3.png">
					  <h3>Livre para uso</h3>
					  <p class="text-muted">um sistema Gratuito com a finalidade de encontrar um profissional competente e confiavel na hora em que precisarem de um
					  serviço.</p>
					</div>
				  </div>
				  <div class="col-lg-6">
					<div class="feature-item">
					  <img src="img/img4.png">
					  <h3>Segurança</h3>
					  <p class="text-muted">Um sistema de segurança para o usuário.</p>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </section>

	  <!--baixar-->
	  <section class="download bg-primary text-center" id="download">
		<div class="container">
		  <div class="row">
			<div class="col-md-8 mx-auto">
			  <h2 class="section-heading">Seu serviço em apenas um click!</h2>
			  <p>O aplicativo está disponível em qualquer dispositivo móvel! Baixe agora para começar!</p>
			  <div class="badges">
				<a class="badge-link" href="#"><img src="img/google-play-badge.svg" alt=""></a>
				<a class="badge-link" href="#"><img src="img/app-store-badge.svg" alt=""></a>
			  </div>
			</div>
		  </div>
		</div>
	  </section>
	  

	  <footer>
		<div class="container">
		  <p>&copy; Your Website 2019. All Rights Reserved.</p>
		  <ul class="list-inline">
			<li class="list-inline-item">
			  <a href="#">Privacy</a>
			</li>
			<li class="list-inline-item">
			  <a href="#">Terms</a>
			</li>
			<li class="list-inline-item">
			  <a href="#">FAQ</a>
			</li>
		  </ul>
		  <li class="list-inline-item social-google-plus">
			<a href="https://www.google.com/gmail/">
				<i class="fab fa-google-plus-g"></i>
			</a>
		  </li>
		</div>
	  </footer>

	  <!-- Bootstrap core JavaScript -->
	  <script src="vendor/jquery/jquery.min.js"></script>
	  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	  <!-- Plugin JavaScript -->
	  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

	  <!-- Custom scripts for this template -->
	  <script src="js/new-age.min.js"></script>

	</body>

</html>
