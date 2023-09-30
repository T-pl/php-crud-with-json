<?php
require 'users.php';

$getUsers = getUsers();
include 'comunsComponents/configHtml.php'
?>
    <div class="container">
    <table class="table">
        <thead>
        <tr>
            <th>Nome</th>
            <th>user_nome</th>
            <th>email</th>
            <th>Telefone</th>
            <th>Instagram</th>
            <th></th>
        </tr>
        </thead>
        <?php foreach ($getUsers as $user):?>
            <tr>
                <td><?php echo $user['name']?></td>
                <td><?php echo $user['username']?></td>
                <td><?php echo $user['email']?></td>
                <td><?php echo $user['phone']?></td>
                <td><?php echo $user['website']?></td>
                <td>
                    <a title="Informações" href="view.php?id=<?php echo $user['id'] ?>" class="btn btn-secondary">
                        <i class="bi bi-info-square"></i>
                    </a>
                    <a title="Editar" href="update.php?id=<?php echo $user['id'] ?>" class="btn btn-info">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    <a title="Deletar" href="delete.php?id=<?php echo $user['id'] ?>" class="btn btn-danger">
                        <i class="bi bi-trash"></i>
                    </a>
                </td>

            </tr>
        <?php endforeach ?>

    </table>
    </div>

<?php include 'comunsComponents/footerHtml.php' ?>