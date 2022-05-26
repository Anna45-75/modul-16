<?php
function checkPassword(string $login, string $password): bool 
{   /* подключение симуляции БД зарегистрированных users */
    $users = require __DIR__ . '/usersDB.php';

    foreach ($users as $user) {
        if ($user['login'] === $login 
            && $user['password'] === $password 
            && $date['date'] === $date
        ) {
            return true;
        }
    }

    return false;
}
   /* подключение кук */
function getUserLogin(): ?string
{
    $loginFromCookie = $_COOKIE['login'];
    $passwordFromCookie = $_COOKIE['password'];
    $dateFromCookie = $_COOKIE['date'];

    if (checkPassword($loginFromCookie, $passwordFromCookie, $dateFromCookie)) {
        return $loginFromCookie;
    }

    return null;
}

