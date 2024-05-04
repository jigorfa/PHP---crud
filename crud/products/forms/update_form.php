<?php
    require("../../../database/db.php");

    $produto_id = $_GET['id'];

    $stmt = $pdo->prepare("SELECT * FROM produtos WHERE id = :id");

    $stmt->bindParam(':id', $produto_id, PDO::PARAM_INT);

    $stmt->execute();

    $produto = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar produto</title>

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

                                    <h2 class="login text-center">Atualizar</h2>

                                    <form action="../logics/update_logic.php" method="POST" autocomplete="off">
                                        <div class="inputBox">
                                            <input type="text" name="id" value="<?php echo $produto['id']; ?>" autocomplete="off" hidden required="required">
                                        </div>

                                        <div class="inputBox">
                                            <input type="text" name="name" value="<?php echo $produto['nome']; ?>" autocomplete="off" required="required">
                                            <span>Nome:</span>
                                        </div>

                                        <div id="inputQuantity" class="inputBox validate-input">
                                            <input type="number" name="quantity" value="<?php echo $produto['quantidade']; ?>" autocomplete="off" required="required">
                                            <span>Quantidade:</span>
                                        </div>

                                        <div class="inputBox validate-input">
                                            <input type="number" name="price" step="0.01" value="<?php echo $produto['preco']; ?>" autocomplete="off" required="required">
                                            <span>Preço:</span>
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