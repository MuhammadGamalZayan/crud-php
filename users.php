<?php

function getUsers() {
    return json_decode(file_get_contents(__DIR__.'/users.json'), true);
   
}

function getUserById($id) {
    $users = getUsers();
    foreach ($users as $user){
        if($user['id']== $id) {
            return $user;
        }
    }
    return null;
}

function createUser($data) {

}

function updateUser($data, $id) {
    $updateUser = [];
    $users = getUsers();
    foreach ($users as $i => $user) {
        if($user['id'] == $id) {
            $users[$i] = $updateUser = array_merge($user, $data);
        }
    }
    file_put_contents(__DIR__.'/users.json', json_encode($users, JSON_PRETTY_PRINT) );

    return $updateUser;
}

function deleteUser($id) {

}


function uploadImage($file, $user) {
    // check if the DIR not found then create a directory for images called images
    if(!is_dir(__DIR__."/images")) {
        mkdir(__DIR__."/images");
    } 
    // Get the file extension from the filename
    $fileName = $file['name'];
    // Search for the dot in the filename
    $dotPosition = strpos($fileName, '.');
    // Take the substring from the dot position till the end of the string
    $extension = substr($fileName, $dotPosition + 1);

    
    // get the image and set the name for the image with the user <- name 
    // move_uploaded_file($_FILES['picture']['tmp_name'], __DIR__."/assets/images/$userId.png"); //This is with user id
    move_uploaded_file($file['tmp_name'], __DIR__."/images/${user['id']}.$extension");

    $user['extension'] = $extension;
    updateUser($user, $user['id']);
}