<?php
require __DIR__ . '/users.php';
include 'comunsComponents/configHtml.php';
include 'comunsComponents/footerHtml.php';
if (!isset($_GET['id'])){
   echo '<div class="alert alert-danger" role="alert">
        Usuário não encontrado.
    </div>';
    return;
}

$userId = $_GET['id'];

$user = getUserById($userId);
if (!$user){
    echo '<div class="alert alert-danger" role="alert">
        Usuário não encontrado.
    </div>';
    return;
}
?>

<div class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="card" style="width: 18rem;">
                <img src="#" class="card-img-top" alt="Profile Image">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $user['name'] ?></h5>
                    <p class="card-text">Generic Description.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php echo $user['email'] ?></li>
                    <li class="list-group-item"><?php echo $user['phone'] ?></li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
    </div>
</div>


