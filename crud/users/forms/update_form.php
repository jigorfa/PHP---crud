<?php
    require("../../../database/db.php");

    $usuario_id = $_GET['id'];

    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");

    $stmt->bindParam(':id', $usuario_id, PDO::PARAM_INT);

    $stmt->execute();

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuário</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../stylesheet/crud.css" rel="stylesheet">
    <link href="../../../stylesheet/read.css" rel="stylesheet">
    <link href="../../../stylesheet/css/style.css" rel="stylesheet">
</head>

<?php require("../../templates/header.php");?>

<body>
<section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">   
                        <div class="container">
                            <div class="card-login">
                                <div class="p-5 mb-md-5 mt-md-4 pb-5">

                                    <h2 class="login text-center">Editar</h2>

                                    <form action="../logics/update_logic.php" method="POST" autocomplete="off">
                                        <div class="inputBox">
                                            <input type="text" name="id" value="<?php echo $usuario['id']; ?>" autocomplete="off" hidden required="required">
                                        </div>

                                        <div class="inputBox">
                                            <input type="text" name="user" value="<?php echo $usuario['usuario']; ?>" autocomplete="off" required="required">
                                            <span>Usuário:</span>
                                        </div>

                                        <div id="inputQuantity" class="inputBox validate-input">
                                            <input type="number" name="password" value="<?php echo $usuario['senha']; ?>" autocomplete="off" required="required">
                                            <span>Senha:</span>
                                        </div>

                                        <button type="submit" class="btn btn-outline-success btn-lg px-5" name="submit">Concluir</button>
                                        <a class="btn btn-outline-danger btn-lg px-5 " href="read_form.php">Cancelar</a>

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

<?php require("../../templates/footer.php");?>