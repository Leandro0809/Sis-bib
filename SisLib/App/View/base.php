<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../../../App/View/style/default.css" />
  <link rel="stylesheet" href="../../../App/View/style/navbar.css" />
  <link rel="stylesheet" href="../../../App/View/style/sidebar.css" />
  <link rel="stylesheet" href="../../../App/View/style/Cadastro.css" />
  <link rel="stylesheet" href="../../../App//View/style/ConteudoAutor.css">
  <link rel="stylesheet" href="../../../App//View/style/ConteudoCadastrarUsuario.css">
  <link rel="stylesheet" href="../../../App//View/style/ConteudoCadastroAutor.css">
  <link rel="stylesheet" href="../../../App//View/style/conteudoCadastroLivros.css">
  <link rel="stylesheet" href="../../../App//View/style/conteudoLivro.css">
  <link rel="stylesheet" href="../../../App//View/style/ConteudoUsuário.css">
  <?php echo  '<title>' . $titulo . '</title>' ?>

</head>

<body>
  <header>
    <h1>

      <div class="logo">
        <a class="logo-foto" href="../index.html">
          <img src="../../../App/View/img/LOGO_BIIBLIOTECA.png" />
        </a>
      </div>
    </h1>
    <div class="actions">
      <ul>
        <li>
          <a href="../../Login.html">Login</a>
        </li>
        <li>
          <a href="#">Cadastrar</a>
        </li>
      </ul>
    </div>
  </header>
  <div class="conteiner">
    <div class="navigation">
      <ul class="navigation-list">
        <li>
          <a href="../livros.html">
            <img class="nav-img" src="../../../App/View/img/Logo Livrós.png" alt="" />
            <span>Livros</span>
          </a>
        </li>
        <li>
          <a href="../../../App/Controller/Autor/AutorIndex.php">
            <img class="nav-img" src="../../../App/View/img/Logo Autor.png" alt="" />
            <span>Autor</span>
          </a>
        </li>
        <li>
          <a href="../../../App/Controller/Categoria/CategoriaIndex.php">
            <img class="nav-img" src="../../../App/View/img/Logo Categoria.png" alt="" />
            <span>Categoria</span>
          </a>
        </li>
        <li>
          <a href="../../App/Controller/Usuario/">
            <img class="nav-img" src="../../../App/View/img/Logo Usuário.png" alt="" />
            <span>Usuário</span>
          </a>
        </li>
        <li>
          <a href="#">
            <img class="nav-img" src="../../../App/View/img/Logo Emprétimo.png" alt="" />
            <span>Empréstimo</span>
          </a>
        </li>
      </ul>
    </div>