<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionários</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../stylesheet/read.css" rel="stylesheet">
    <link href="../../../stylesheet/css/style.css" rel="stylesheet">
</head>

<?php require("../../templates/header.php");?>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="info-fill" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
        </symbol>
    </svg>

    <div class="alert alert-warning d-flex align-items-center fade show" role="alert">
        <svg width="15" height="15" class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:">
            <use xlink:href="#info-fill"/>
        </svg>
        <strong>Página em construção</strong>
    </div>
</body>

<?php require("../../templates/footer.php");?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous">
</script>
</html>

<!-- <?php
// require("../../../database/db.php");

// $sql = "SELECT * FROM usuarios ORDER BY id ASC";
// $result = $pdo->query($sql);
?>

<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../stylesheet/read.css" rel="stylesheet">
    <link href="../../../stylesheet/css/style.css" rel="stylesheet">
</head>

<?php require("../../templates/header.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-6 col-sm-3">
            <div class="row card">
                <div class="card-header">
                    <h2 class="text-black" style="text-align: left;">
                        Listagem:

                        <?php
                            // $query = "SELECT COUNT(id) FROM usuarios";
                                                                        
                            // $stmt = $pdo -> prepare($query);
                                                                        
                            // $stmt->execute();
                            // $result_count = $stmt->fetchColumn();
                            // echo $result_count;
                        ?>
                    
                        usuário(s)
                    </h2>
                </div>

                <div class="p-3">
                    <?php
                    if ($result->rowCount() == 0) { ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
                            <symbol id="info-fill" viewBox="0 0 16 16">
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                            </symbol>
                        </svg>

                        <div class="alert alert-warning d-flex align-items-center fade show" role="alert">
                            <svg width="15" height="15" class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:">
                                <use xlink:href="#info-fill" />
                            </svg>
                            <strong>Não há registros no banco de dados</strong>
                        </div>
                    <?php
                    }
                    ?>

                    <?php
                        if(isset($_GET['s']) && $_GET['s']==1){?>

                        <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
                        <symbol id="check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </symbol>
                        </svg>

                        <div class="alert alert-success d-flex align-items-center alert-dismissible fade show" role="alert">
                            <svg width="15" height="15" class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:">
                                <use xlink:href="#check-circle-fill"/>
                            </svg>
                            <strong>Usuário adicionado com sucesso!</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php
                    }   
                    ?> 

                    <?php
                        // if(isset($_GET['u']) && $_GET['u']==1){
                        //     header("location:../../../login/login_form.php?u=1");
                           
                    ?> 

                    <table class="table table-bordered table-striped table-hover table-bg table-dark border-black
                    col-lg-12 col-md-6 col-sm-3">
                        <thead>
                            <tr>
                                <th scope="col" style="vertical-align: middle;">ID:</th>
                                <th scope="col" style="vertical-align: middle;">Nome:</th>
                                <th scope="col" style="vertical-align: middle;">Senha:</th>
                                <th scope="col" style="vertical-align: middle;">Ações:
                                    <a class="btn btn-success" href="create_form.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                        </svg>
                                    </a>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php
                            // $stmt = $pdo->query('SELECT * FROM usuarios');
                            // $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

                            // foreach ($rows as $row) {
                            //     echo "<tr>";
                            //         echo "<td>" . $row['id'] . "</td>";
                            //         echo "<td>" . $row['usuario'] . "</td>";
                            //         echo "<td>" . $row['senha'] . "</td>";
                            //         echo "<td>
                            //                 <a class='btn btn-info' href='update_form.php?id={$row['id']}'>
                            //                     <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                            //                         <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                            //                         <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                            //                     </svg>
                            //                 </a>

                            //                 <a class='btn btn-danger' onclick='confirmedExclusion({$row['id']});'>
                            //                     <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                            //                         <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z'/>
                            //                         <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z'/>
                            //                     </svg>
                            //                 </a>
                            //             </td>";
                            //     echo "</tr>";
                            // }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../../../stylesheet/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>

<script>
    function confirmedExclusion(id) {
        var confirmed = confirm("Você tem certeza que deseja excluir este usuário?");

        if (confirmed) {
            window.location.href = "../logics/delete_logic.php?id=" + id;
        }
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous">
</script>

<?php ; ?> -->
