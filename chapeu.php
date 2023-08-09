<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hogwarts</title>
  <link rel="icon" type="image/x-icon" href="imgs/icone.png" />
  <link rel="stylesheet" href="css/chapeu.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <script type="text/javascript" src="js/main.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>
<?php
session_start();

$nome = $_SESSION["nome"];

$casas = rand(0, 3);
$nomecasa = "";

if ($casas === 0) {
  $nomecasa = "Grifinória";
  $casa = "grifesc";
} else if ($casas === 1) {
  $nomecasa = "Corvinal";
  $casa = "corvesc";
} else if ($casas === 2) {
  $nomecasa = "Sonserina";
  $casa = "sonsesc";
} else {
  $nomecasa = "Lufa-Lufa";
  $casa = "lufesc";
}
?>

<body class="body">
  <div class="titulo">
    <img src="imgs/tt.png" style="width: 60%; margin-left: auto; margin-right: auto;margin-top: 15px;padding-top: 5px; padding-bottom: 5px;" class="tt">
  </div><br><br>
  <div class="chapeu">
    <img src="imgs/chapeu.png" class="chapeuimg" />
    <img src="imgs/balao.png" class="balaoimg">
    <div class="texto">
      <h1 id="fala3"><?php echo "" . $nomecasa . "!!" ?></h1>
    </div>
  </div><br>
  <button class="btn btn-warning" style="margin-left:70%;" onclick="continuar();"><i class="fas fa-chevron-right"></i></button>
  <div class="divresul">
    <h1 class="display-6 resul tt"><?php echo "Parabéns " . $nome . ", você agora faz parte da " . $nomecasa . "!" ?><img src="imgs/<?php echo "" . $casa . "" ?>.png" class="esc" style="width: 100px; margin-top: 5px;margin-bottom: 5px;" /></h1>
  </div><br>
  <form action="index.php">
    <input type="submit" value="Voltar"  class="voltar btn btn-warning" style="margin-left: 90%;margin-bottom:3%;" />
  </form>
  
</body>

</html>