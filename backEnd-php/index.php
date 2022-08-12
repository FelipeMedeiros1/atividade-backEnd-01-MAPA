<?php
include("dados.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilo.css">
  <title>MAPA php</title>
</head>

<body>
  <header>
    <nav>

      <div class="navbar" id="nav-principal">

        <ul class="navbar-nav ">
          <li class="nav-item">
            <a href="" class="nav-link">Cardápio</a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">Blog</a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">Quem somos</a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">Contato</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <section>
    <h1>Faça sua escolha!</h1>
    <?php
    
    foreach ($cardapio as $chave => $valor) {
    
    ?>
    <div>
      <a href="pagina2.php?id=<?=$valor["id"]; ?> "> <img width="300px" height="250px" src=<?=$valor['imagem']; ?>></a>
      <h3><?=$valor['nome']; ?></h3>
      <p><?=$valor['preco']; ?></p>


    </div>
    <?php 
    }
    ?>

    <div>
      <h2>Todos nossos produtos são feitos diariamente.</h2>
    </div>
  </section>
  <footer>
    <div>
      <h2>Quer saber mais?</h2>
      <p>Nos siga nas redes</p>
      <img src="img/zap.jpg" alt="" width="30px">
      <img src="img/insta.jpg" alt="" width="30px">
      <img src="img/face.png" alt="" width="30px">
      <img src="img/telegran.jpg" alt="" width="30px">
    </div>
    <hr>
    <p>Felipe Medeiros RA: 21003145-5</p>

  </footer>

</body>

</html>