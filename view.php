<?php
include 'includes/header.php';
$title = 'View';

require __DIR__.'/users.php';
// check if all users are available or not
if(!isset($_GET['id'])) {
    include 'includes/usersNotFound.php';
    exit;
}
// get the user from slug with id 
$userId = $_GET['id'];

$user = getUserById($userId);
// check if the specific user is null or not 
if(!$user) {
    include 'includes/userNotFound.php';
    exit;
}

?>
<div class="container test">

    <div class="card">
        <div class="card-head">
        <h3 style="font-weight:lighter !important;">The view user for : <b><?php echo $user['name'];?></b></h3>
    </div>
    <table class="table">
        <thead>
        <th>ID</th>
        <th>Image</th>
        <th>Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Website</th>
        
    </thead>
    <tbody>
        <tr>
            <td><?php echo $user['id'];?></td>
            <td class="image-td">
                <?php if(isset($user['extension'])): ?>
                <img class="img-thumbnail" src="images/<?php echo "${user['id']}.${user['extension']}" ?>" alt="">
                <?php endif; ?>
            </td>
            <td><?php echo $user['name']?></td>
            <td><?php echo $user['username']?></td>
            <td><a href="mailto:<?php echo $user['email']?>"><?php echo $user['email']?></a></td>
            <td><a href="tel:<?php echo $user['phone']?>" class="outlined"><?php echo $user['phone']?></a></td>
            <td><a terget="_blank" href="http://<?php echo $user['website']?>" class="outlined"><?php echo $user['website']?></a></td>
        </tr>

    </tbody>
</table>
</div>
<div class="row">
    <div class="col-6">
        <a href="index.php" class="btn btn-primary">Go back to all users</a>
    </div>
    <div class="col-6">
        <a href="updateUser.php?id=<?php echo $userId?>" class="btn btn-outline-primary">Edit User <?php echo $user['name']; ?></a>
    </div>
</div>
</div>
<?php include 'includes/footer.php'; ?>