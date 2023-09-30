<?php

function getUsers(){
    $getPath = file_get_contents(__DIR__ . '/users.json');
    $users =  json_decode($getPath, true);
    return $users;

}

function getUserById($id){
    $users = getUsers();
    foreach ($users as $user){
        if($user['id'] == $id){
            return $user;
        }
        return null;
    }

}

function creatUser($id)
{

}

function updateUser($data, $id)
{

}

function deleteUser($id)
{

}