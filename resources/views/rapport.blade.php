
<!-- <!DOCTYPE html> -->

<head>
	<meta charset="utf-8" >
	<title> Page d'envoi de Rapport</title>
	<link rel="stylesheet" type="text/css" href="menu3.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>

	<header> 

		<nav class="navbar navbar-expand-lg bg-light">
			<form class="d-flex" role="search">
				<input class="form-control me-2" type="search" placeholder="" aria-label="Search">
				<button class="btn btn-outline-success" type="submit">Recherche</button>
			</form>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-link" href="#">Email</a>
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<a class="nav-link" href="#">Rapport</a>
				</div>
			</div>
			<button class="btn  " type="submit">Deconnexion</button>
		</li>
	</ul>
</div>
</div>
</nav>
</header>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<section>

	<!-- <form method="post" action="{{url('rapport')}}"> @csrf -->
    <form method="Post" action="/rapport">
		<div class="container"> 

			<div class="row">
				<div class="col-md-4" >
				</div>
				<div class="col-md-4">
					<div class="mb-3">
						<label for="formGroupExampleInput" class="form-label"><strong> Membre</strong></label>
						<input type="text" class="form-control" placeholder="Nom" aria-label="Nom">
						<div class="col">
							<input type="text" class="form-control" placeholder="Prenom" aria-label="Prenom">
						</div>
						<div class="col">
							<input type="text" class="form-control" placeholder="Email" aria-label="Email">
						</div>
					</div>
					<div class="mb-3">
						<label for="formGroupExampleInput" class="form-label"><strong> Fichiers</strong></label>
						<div class="input-group mb-3">
							<input type="file" class="form-control" id="inputGroupFile02">
							<label class="input-group-text" for="inputGroupFile02">Télécharger</label>
						</div>
					</div>
					<div class="mb-3">
						<label for="exampleFormControlTextarea1" class="form-label"><strong> Parcours</strong></label>
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					</div>
					<div class="col-md-4" >
					</div>
						<button type="submit" class="btn btn-primary ">Envoie</button>

				</div>
			</div>
		</div>

	</form>
</section>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>