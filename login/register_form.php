<?php
session_start();
session_destroy();
?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../stylesheet/acess.css" rel="stylesheet">
</head>
<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">   
                    <div class="container">
                        <div class="card-login">
                            <div class="p-5 mb-md-5 mt-md-4 pb-5">
                                <h2 class="login text-center">Cadastro</h2>

                                <?php
                                    if(isset($_GET['e']) && $_GET['e']==1){?>

                                    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
                                        <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
                                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                        </symbol>
                                    </svg>

                                    <div class="alert alert-danger d-flex align-items-center alert-dismissible fade show" role="alert">
                                        <svg width="15" height="15" class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:">
                                            <use xlink:href="#exclamation-triangle-fill"/>
                                        </svg>
                                        <strong>Credenciais inválidas</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php
                                }   
                                ?>

                                <form action="register_logic.php" method="POST" autocomplete="off">
                                    <div class="inputBox" data-validate="Um email válido é abc@gmail.com">
                                        <input type="email" name="user" required="required">
                                        <span>Email:</span>
                                    </div>

                                    <div class="inputBox validate-input" data-validate="Insira a senha">
                                        <input type="password" name="password" required="required">
                                        <span>Senha:</span>
                                    </div>

                                    <div class="inputBox">
                                        <button type="submit" class="enter" name="submit">Cadastrar</button>
                                    </div>

                                    <p style="padding: 10px; color: #000;
                                        text-transform: uppercase;
                                        letter-spacing: 2px;">
                                        Possui cadastro?
                                        <a style="text-decoration: none;" href="login_form.php">Acesse-o</a>
                                    </p>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous">
</script>
</html>