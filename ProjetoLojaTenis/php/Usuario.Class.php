<?php

class Usuario
{
  private $pdo;
  private $user;
  private $pass;

  function __construct()
  {
    $cnct = "mysql:dbname=sessaologins;host=localhost";
    $this->user = "root";
    $this->pass = "";

    try {
      $this->pdo = new PDO($cnct, $this->user, $this->pass);
      return true;
    } catch (\Throwable) {
      return false;
    }
  }

  function checkUser($email)
  {
    $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE email = :e");
    $sql->bindValue(":e", $email);
    $sql->execute();
    return $sql->rowCount();
  }
  function insrtUser($email, $pass)
  {
    $sql = $this->pdo->prepare("INSERT INTO usuarios SET email = :e , senha = :s");
    $sql->bindValue(":e", $email);
    $sql->bindValue(":s", $pass);
    $sql->execute();
  }
}
