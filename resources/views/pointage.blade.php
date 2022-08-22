
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8" >
	<title> menu2</title>
	<link rel="stylesheet" type="text/css" href="menu2.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>



	<section class="s1"> 
		<h1><p><u>Formulaire d'émargement</u></p> </h1>
		<div class="container" >
			<div class="row  align-items-start">
				<div class="col-md-6" >
					<form  method="Post" action="pointage">
                    @csrf
						<div class="class="col-sm-6 col-md-8">
							<label for="exampleInputEmail1" class="form-label">Nom</label>
							<input type="nom" class="form-control" id="nom" aria-describedby="nomHelp" name="nom">
						</div>
						<div class="mb-3">
							<label for="exampleInputPassword1" class="form-label">Prenom</label>
							<input type="text" class="form-control" id="prenom" name="prenom">
						</div>
						<div class="mb-3">
							<label for="exampleInputPassword1" class="form-label">Tel</label>
							<input type="text" class="form-control" id="tel" name="tel">
						</div>
						<div class="mb-3">
							<label for="exampleInputPassword1" class="form-label">email</label>
							<input type="email" class="form-control" id="email" name="email">
						</div>
                        <div class="mb-3">
							<label for="exampleInputPassword1" class="form-label">Jour</label>
							<input type="date" class="form-control" id="jour" name="jour">
						</div>
						<div class="mb-3">
							<label for="exampleInputPassword1" class="form-label">Heure de d'arrivée</label>
							<input type="time" class="form-control" id="heureArrive" name="heureArrive">
						</div>
						<div class="mb-3">
							<label for="exampleInputPassword1" class="form-label">Heure de Départ</label>
							<input type="time" class="form-control" id="heureDepart" name="heureDepart">
						</div>


                      
						<button type="submit" class="btn btn-primary">Envoyer</button>
                        
					</form>

				</div>

				<div class="col-md-auto">
					<table class="table">
                    
						<thead>
							<tr>
								<th scope="col">Nom</th>
								<th scope="col">Prenom</th>
								<th scope="col">Tel</th>
								<th scope="col">email</th>
								<th scope="col">Heure de d'arrivée</th>
								<th scope="col">Heure de Départ</th>
							</tr>
						</thead>
                        @foreach($pointage as $pointage)
						<tr>
                            <td>{{$pointage->prenom}}</td>
							<td>{{$pointage->tel}}</td>
							<td>{{$pointage->email}}</td>
							<td>{{$pointage->jout}}</td>
							<td>{{$pointage->heureArrive}}</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td></td>
							<td ></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</table>
                    
				</div>
				<div class="col-3"> 
                @endforeach
				</div>
			</div>
		</div>
	</section>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>