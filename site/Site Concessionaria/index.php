<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Concessionária</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
		<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#">Deboxe!</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
	        </li>
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Funcionários
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=cadastrar-funcionario">Cadastrar</a></li>
	            <li><a class="dropdown-item" href="?page=listar-funcionario">Listar</a></li>	            
	          </ul>
	        </li>
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Clientes
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=cadastrar-cliente">Cadastrar</a></li>
	            <li><a class="dropdown-item" href="?page=listar-cliente">Listar</a></li>	            
	          </ul>
	        </li>
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Modelo
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=cadastrar-modelo">Cadastrar</a></li>
	            <li><a class="dropdown-item" href="?page=listar-modelo">Listar</a></li>	            
	          </ul>
	        </li>
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Marcas
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=cadastrar-marcas">Cadastrar</a></li>
	            <li><a class="dropdown-item" href="?page=listar-marcas">Listar</a></li>	            
	          </ul>
	        </li>
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Vendas
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=cadastrar-vendas">Cadastrar</a></li>
	            <li><a class="dropdown-item" href="?page=listar-vendas">Listar</a></li>	            
	          </ul>
	        </li>

	      </ul>
	      <form class="d-flex" role="search">
	        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
	        <button class="btn btn-outline-success" type="submit">Search</button>
	      </form>
	    </div>
	  </div>
	</nav>

	<div class="container mt-3">
		<div class="row">
			<div class="col">
				<?php
				include('config.php');
					switch(@$_REQUEST["page"]) {
						//cadastro-listar-editar-salvar-funcionario
						case 'cadastrar-funcionario':
						include('cadastrar-funcionario.php');
							break;
						
						case 'listar-funcionario':
							include('listar-funcionario.php');
							break;
						
						case 'editar-funcionario':
							include('editar-funcionario.php');
							break;

						case 'salvar-funcionario':
							include('salvar-funcionario.php');
							break;

						//cadastro-listar-editar-salvar-cliente
						case 'cadastrar-cliente':
						include('cadastrar-cliente.php');
							break;
						
						case 'listar-cliente':
							include('listar-cliente.php');
							break;
						
						case 'editar-cliente':
							include('editar-cliente.php');
							break;

						case 'salvar-cliente':
							include('salvar-cliente.php');
							break;

						//cadastro-listar-editar-salvar-modelo
						case 'cadastrar-modelo':
						include('cadastrar-modelo.php');
							break;
						
						case 'listar-modelo':
							include('listar-modelo.php');
							break;
						
						case 'editar-modelo':
							include('editar-modelo.php');
							break;

						case 'salvar-modelo':
							include('salvar-modelo.php');
							break;

						//cadastro-listar-editar-salvar-marcas
						case 'cadastrar-marcas':
						include('cadastrar-marcas.php');
							break;
						
						case 'listar-marcas':
							include('listar-marcas.php');
							break;
						
						case 'editar-marcas':
							include('editar-marcas.php');
							break;

						case 'salvar-marcas':
							include('salvar-marcas.php');
							break;

						//cadastro-listar-editar-salvar-vendas
						case 'cadastrar-vendas':
						include('cadastrar-vendas.php');
							break;
						
						case 'listar-vendas':
							include('listar-vendas.php');
							break;
						
						case 'editar-vendas':
							include('editar-vendas.php');
							break;

						case 'salvar-vendas':
							include('salvar-vendas.php');
							break;

						default:
							print "<h1>Seja Bem Vindo ao sistema da Deboxe!</h1>";
							break;
					}
				?>
			</div>						

	<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>