<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CLIENTE HTTP</title>
	
	<link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
	<link rel="stylesheet" href="{{url('css/estilos.css')}}">
	
</head>
<body>




			<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="{{url('clientesweb/principal')}}">Clientes HTTP</a>
  <!-- <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div> -->
</nav>

	<div class="container-fluid">
			@yield('contenido')
	</div>


	
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="{{url('js/tether.min.js')}}"></script>
	<script src="https://npmcdn.com/bootstrap@4.0.0-alpha.5/dist/js/bootstrap.min.js"></script>
	 <script >	
	// // $(document).ready(function() {
	// // 	$(function () {
	// // 	  $('[data-toggle="popover"]').popover()
	// // 	  });
	// // 	})
	// </script>
	




</body>
</html>