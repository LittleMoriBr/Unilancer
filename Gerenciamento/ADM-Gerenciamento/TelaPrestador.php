<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Documento sem título</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">



</head>

<body>

	<script href="js/bootstrap.bundle.js"></script>
	<link rel="stylesheet" href="js/bootstrap.bundle.js">

	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<!-- Container wrapper -->
		<div class="container">
			<!-- Navbar brand -->
			<a class="navbar-brand" href="#"><img id="MDB-logo" src="https://mdbcdn.b-cdn.net/wp-content/uploads/2018/06/logo-mdb-jquery-small.png" alt="MDB Logo" draggable="false" height="30" /></a>

			<!-- Toggle button -->
			<button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars"></i>
			</button>

			<!-- Collapsible wrapper -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<!-- Left links -->
				<ul class="navbar-nav me-3">
					<li class="nav-item">
						<a class="nav-link active d-flex align-items-center" aria-current="page" href="#"><i class="fas fa-bars pe-2"></i>Menu</a>
					</li>
				</ul>
				<!-- Left links -->

				<form class="d-flex align-items-center w-100 form-search">
					<div class="input-group">
						<button class="btn btn-light dropdown-toggle shadow-0" type="button" data-mdb-toggle="dropdown" aria-expanded="false" style="padding-bottom: 0.4rem;">
							All
						</button>
						<ul class="dropdown-menu dropdown-menu-dark fa-ul">
							<li>
								<a class="dropdown-item" href="#"><span class="fa-li pe-2"><i class="fas fa-search"></i></span>All</a>
							</li>
							<li>
								<a class="dropdown-item" href="#"><span class="fa-li pe-2"><i class="fas fa-film"></i></span>Titles</a>
							</li>
							<li>
								<a class="dropdown-item" href="#"><span class="fa-li pe-2"><i class="fas fa-tv"></i></span>TV
									Episodes</a>
							</li>
							<li>
								<a class="dropdown-item" href="#"><span class="fa-li pe-2"><i class="fas fa-user-friends"></i></span>Celebs</a>
							</li>
							<li>
								<a class="dropdown-item" href="#"><span class="fa-li pe-2"><i class="fas fa-building"></i></span>Companies</a>
							</li>
							<li>
								<a class="dropdown-item" href="#"><span class="fa-li pe-2"><i class="fas fa-key"></i></span>Keywords</a>
							</li>
							<li>
								<hr class="dropdown-divider" />
							</li>
							<li>
								<a class="dropdown-item" href="#"><span class="fa-li pe-2"><i class="fas fa-search-plus"></i></span>Advanced
									search<i class="fas fa-chevron-right ps-2"></i></a>
							</li>
						</ul>
						<input type="search" class="form-control" placeholder="Search" aria-label="Search" />
					</div>
					<a href="#!" class="text-white"><i class="fas fa-search ps-3"></i></a>
				</form>

				<ul class="navbar-nav ms-3">
					<li class="nav-item me-3">
						<a class="nav-link d-flex align-items-center" href="#!">IMDbPro</a>
					</li>
					<li class="nav-item">
						<a class="nav-link d-flex align-items-center me-3" href="#!">
							<i class="fas fa-bookmark pe-2"></i> Registrar
						</a>
					</li>
					<li class="nav-item" style="width: 65px;">
						<a class="nav-link d-flex align-items-center" href="#!">Sign In</a>
					</li>
				</ul>
			</div>
			<!-- Collapsible wrapper -->
		</div>
		<!-- Container wrapper -->
	</nav>
	<!-- Navbar -->

	<br>
	<br>

	<div class="container">
		<div class="row">

			<div class="col-sm-12">

				<div class="banner">

					<br>
					<br>
					<br>
					<br>
					<br>

					<div>
						<img style="margin-left: 130px;" class="redondo z-1" src="img/6687865b-0c8b-4694-b692-fb2612a3b3b2 (1).jpg" alt="">

						<label class="" for="">

							<button type="button" class="btn btn-sm btn-outline-success ml-6 mt-6-5">Success</button>
							<button type="button" class="btn btn-sm btn-outline-success ml-6-5 mt-6-5">Success</button>
							<button type="button" class="btn btn-sm btn-outline-success ml-6-5 mt-6-5">Success</button>

					</div>
					</label>

				</div>

				<div class="Vermelho"></div>

			</div>
		</div>

	</div>
	</div>

	<div class="container">
		<div class="row">

			<br>

			<?php

			include_once("conexao.php");

			$id = 1;

			?>

			<div class="col-sm-6 mt-3">
				<div class="card-body zoom">

					<img class="rounded" src="img/6687865b-0c8b-4694-b692-fb2612a3b3b2.jpg" width="100%" height="280px" alt="">

				</div>
			</div>

			<?php

			try {



				$sql = $conn->query("select * from portifolioprestador");



				foreach ($sql as $dados) {

					echo '<div class="col-sm-3 mt-3">';
					echo '<div class="card-body zoom">';
					echo '<img class="card-img-top tamanho rounded" src="img/' . $dados['id_parceiro'] . "/" . $dados['img_portifolioprestador'] . '">';
					echo "</div>";
					echo "</div>";
				}
			} catch (PDOException $e) {



				echo $e->getMessage();
			}

			?>

			<div class="col-sm-3 mt-3">
				<div class="card-body zoom">

					<img class="area rounded" src="img/6687865b-0c8b-4694-b692-fb2612a3b3b2.jpg" alt="">

				</div>
			</div>

			<div class="col-sm-3 mt-3">
				<div class="card-body zoom">

					<img class="area rounded" src="img/6687865b-0c8b-4694-b692-fb2612a3b3b2.jpg" alt="">

				</div>
			</div>

			<div class="col-sm-3">
				<div class="card-body zoom">

					<img class="area rounded" src="img/6687865b-0c8b-4694-b692-fb2612a3b3b2.jpg" alt="">

				</div>
			</div>

			<div class="col-sm-3">
				<div class="card-body zoom">

					<img class="area rounded" src="img/6687865b-0c8b-4694-b692-fb2612a3b3b2.jpg" alt="">

				</div>
			</div>

			<div class="col-sm-3">
				<div class="card-body zoom">

					<img class="area rounded" src="img/6687865b-0c8b-4694-b692-fb2612a3b3b2.jpg" alt="">

				</div>
			</div>

			<div class="col-sm-3">
				<div class="card-body zoom">

					<img class="area rounded" src="img/6687865b-0c8b-4694-b692-fb2612a3b3b2.jpg" alt="">

				</div>
			</div>

			<div class="col-sm-3">
				<div class="card-body zoom">

					<div>

						<label for="pic"><img class="area rounded" src="img/Mais.png" alt=""></label>
						<input style="display: none" id="pic" type="file" name="pic" accept="image/*" class="form-control">

					</div>


				</div>
			</div>

		</div>
	</div>



</body>

</html>




function sucessoPesquisa(datas) {
debuga.empty().html(datas);
$("#txtID").val($("#idPrestador").text());

$("#txtPrestador").val($("#nomePrestador").text());
$("#txtSobrenome").val($("#sobrenomePrestador").text());
$("#base64Code").val($("#imgPrestador").text());
$("#txtEmailPrestador").val($("#emailPrestador").text());
$("#txtCpfCnpjPrestador").val($("#cpfjnPrestador").text());
$("#txtNacionalidadePrestador").val($("#nacionalidadePrestador").text());
$("#txtCidadePrestador").val($("#cidadePrestador").text());
$("#txtUfPrestador").val($("#ufPrestador").text());
$("#txtEnderecoPrestador").val($("#enderecoPrestador").text());
$("#txtBairroPrestador").val($("#bairroPrestador").text());
$("#txtCepPrestador").val($("#cepPrestador").text());
$("#txtNumeroPrestador").val($("#numeroPrestador").text());
$("#txtComplementoPrestador").val($("#complementoPrestador").text());
$("#txtCelularPrestador").val($("#celularPrestador").text());
$("#txtLoginPrestador").val($("#loginPrestador").text());
$("#txtSenhaPrestador").val($("#senhaPrestador").text());
$("#comment").val($("#obsPrestador").text());
$("#txtAtuacaoPrestador").val($("#atuacaoPrestador").text());
$("#txtDescricaoPrestador").val($("#descricaoPrestador").text());

document.getElementById("preImg").value = "";
var preview = document.getElementById("preImg");
preview.src = $("#base64Code").val();
}