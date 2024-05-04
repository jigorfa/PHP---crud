<?php
	session_start();
    if (!isset($_SESSION["user"])) {
	    header("location:../../../login/login_logic.php");
	    die();
    }
?>

<body>
	<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
		<div class="sidebar-brand">
			<img class="sidebar-brand-full" width="136" height="32" src="../../../stylesheet/logo.png"></img>
			<img class="sidebar-brand-narrow" width="46" height="46" src="../../../stylesheet/logo.png"></img>
		</div>
		<ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
			<li class="nav-title">Operações</li>
			<li class="nav-item"><a class="nav-link" href="../forms/read_form.php">Produtos</a></li>
			<li class="nav-item"><a class="nav-link" href="../forms/employees.php">Funcionários</a></li>
		</ul>
	</div>

	<div class="wrapper d-flex flex-column min-vh-100 bg-light">
		<header class="header header-sticky mb-4">
			<div class="container-fluid">
				<nav class="d-flex">
					<button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
						<svg class="icon icon-lg">
							<use xlink:href="../../../stylesheet/vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
						</svg>
					</button>
				
					<ul class="breadcrumb m-2">
						<li class="breadcrumb-item">	
							<a href="../../../index.php" style="text-decoration: none;">
								<span>Início</span>
							</a>
						</li>
						<li class="breadcrumb-item active"><span>Produtos</span></li>
					</ul>
				</nav>

				<div> 
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
						<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
						<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
					</svg>

					<?php
						echo $_SESSION['user'];
					?>

					<a href="../../../login/login_form.php">
						<button class="btn btn-outline-danger">
							Sair
						</button>
					</a>
				</div>
			</div>
		</header>