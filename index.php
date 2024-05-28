<?php

require_once 'vendor/autoload.php';

use App\Email;
use App\ProductCirc;
use App\ProductList;
use App\ProductRect;
use App\SpamChecker;
use App\User\Client;
use App\User\Employee;// FQCN
use App\User\User;

/*
App => src/
Email => Email.php
==> src/Email.php
*/

$email = new Email("atu@test.com");
echo $email->getDomain();

// Créer une instance de SpamChecker
$checker = new SpamChecker();
// Appeler sur cette instance la méthode isSpam en lui passant
// l'instance d'Email
var_dump($checker->isSpam($email));


// Produits (abstractions)
$productCirc = new ProductCirc("Produit circulaire", 456, 987);
$productRect = new ProductRect("Produit rectangulaire", 412, 12, 24);

var_dump($productCirc, $productRect);

$list = new ProductList([
    $productCirc,
    $productRect,
    new ProductRect("Autre produit rect", 684, 45, 12),
    new ProductRect("Encore un rectangulaire", 684, 45, 12),
    new ProductCirc("Autre produit circ", 684, 45),
]);

var_dump($list);

$list->display();


// Users (abstraction)
echo "<h2>Users</h2>";

/** @var User[] */
$users = [
    new Client("Jimenez", "Harriet", true, "AA9Njm0eO"),
    new Client("Smith", "Bernard", true, "VgaUxV7FyGzPxz91b"),
    new Employee("Sherman", "Jessie", "Nsb3ppdu4"),
    new Client("Jefferson", "Caleb", false, "0JnGFE6d"),
];

foreach ($users as $u) {
    echo $u->getInformations() . "<br />";
}
