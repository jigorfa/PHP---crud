<?php
	session_start();
    if (!isset($_SESSION["user"])) {
	    header("location:login/login_logic.php");
	    die();
    }
?>

<?php 
    require ('database/db.php')
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<title>Painel</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="stylesheet/css/style.css" rel="stylesheet">
        <link href="stylesheet/acess.css" rel="stylesheet">
	</head>
    <body>
	    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
		    <div class="sidebar-brand">
			    <img class="sidebar-brand-full" width="136" height="32" src="stylesheet/logo.png"></img>
			    <img class="sidebar-brand-narrow" width="46" height="46" src="stylesheet/logo.png"></img>
		    </div>
		    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
			    <li class="nav-title">Operações</li>
			    <li class="nav-item"><a class="nav-link" href="crud/products/forms/read_form.php">Produtos</a></li>
			    <li class="nav-item"><a class="nav-link" href="crud/users/forms/employees.php">Funcionários</a></li>
		    </ul>
	    </div>

	    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
		    <header class="header header-sticky mb-4">
			    <div class="container-fluid">
                    <nav class="d-flex">
                        <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                            <svg class="icon icon-lg">
                                <use xlink:href="stylesheet/vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                            </svg>
                        </button>
                    
                        <ul class="breadcrumb m-2">
                            <li class="breadcrumb-item">
                            <span>Início</span>
                            </li>
                            <li class="breadcrumb-item active"><span>Painel Principal</span></li>
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
                        
                        <a href="login/login_form.php">
                            <button class="btn btn-outline-danger">
                                Sair
                            </button>
                        </a>
				    </div>
                </div>
		    </header>
	
            <div class="body px-3">
                <div class="container-lg">
                    <div class="row">
                        <div class="col-sm-6 col-lg-6">
                            <div class="card mb-4 text-white bg-dark">
                                <div class="card-body">
                                    <div class="fs-4 fw-semibold">
                                        Produtos:
                                    
                                        <?php
                                            $query = "SELECT COUNT(id) FROM produtos";
                                                                                        
                                            $stmt = $pdo -> prepare($query);
                                                                                        
                                            $stmt->execute();
                                            $result_count = $stmt->fetchColumn();
                                            echo $result_count;
                                        ?>

                                    </div>
                                        <a href="crud/products/forms/read_form.php">
                                            <button type="button" class="btn btn-secondary">Detalhes</button>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-6">
                                <div class="card mb-4 text-white bg-dark">
                                    <div class="card-body">
                                        <div class="fs-4 fw-semibold">
                                            Funcionários:

                                            <?php
                                                $query = "SELECT COUNT(id) FROM usuarios";
                                                                                            
                                                $stmt = $pdo -> prepare($query);
                                                                                            
                                                $stmt->execute();
                                                $result_count = $stmt->fetchColumn();
                                                echo $result_count;
                                            ?>

                                        </div>
                                            <a href="crud/users/forms/read_form.php">
                                                <button type="button" class="btn btn-secondary">Detalhes</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <footer class="footer">
            <div class="text-center p-1 fixed-bottom bg-dark color-light" style="color: white;">
                GI Development
                &copy;
                <?php echo date("Y");?>
                All rights reserved
            </div>
        </footer>  
    </body>

    <script src="stylesheet/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
</html>