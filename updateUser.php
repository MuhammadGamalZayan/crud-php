<?php
include 'includes/header.php';
require __DIR__.'/users.php';

if(!isset($_GET['id'])) {
    include 'includes/usersNotFound.php';
    exit;
}

$userId = $_GET['id'];

$user = getUserById($userId);

// check if all users are available or not
if(!$user) {
    include 'includes/userNotFound.php';
    exit;
}
// check if the method is post 
if($_SERVER['REQUEST_METHOD'] ===  'POST') {
    $user = updateUser($_POST, $userId);
    // check if the user has picture saved while upading or not 
    if (isset($_FILES['picture'])) {
        uploadImage($_FILES['picture'], $user);
    }
    header("Location: view.php?id=".$userId);
}
?>



<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 style="font-weight:lighter">Update user <b><?php echo $user['name'] ?></b></h3>
        </div>
        <div class="card-body">

    <?php include '_form.php'; ?>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>