<?php
session_start();



if (isset($_POST["nome"]) && !empty($_POST["nome"])) {
  $_SESSION["nome"] = $_POST["nome"];
  header("location: chapeu.php");
} else {
  header("location: index.php");
}
