<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="E-commerce project : Vente de bijoux">
  <meta name="author" content="Mamadou, Islem, Andrei">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
  <title>E-commerce</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASE_URL ?>index.php">Logo WIP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= BASE_URL ?>index.php">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Bagues</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-disabled="true">Colliers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-disabled="true">Piercings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-disabled="true">Montres</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Bracelets
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Poignets</a></li>
                <li><a class="dropdown-item" href="#">Chevilles</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Joncs</a></li>
              </ul>
            </li>

            <?php
            if (isset($_SESSION['admin'])) :

              echo '<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">Backoffice</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?= BASE_URL; ?>admin/categories.php">Catégories</a></li>
                <li><a class="dropdown-item" href="<?= BASE_URL; ?>admin/jewelry.php">Bijoux</a></li>
                <li><a class="dropdown-item" href="<?= BASE_URL; ?>admin/addJewelryForm.php">Gestions des Bijoux</a></li>
                <li><a class="dropdown-item" href="<?= BASE_URL; ?>admin/users.php">Utilisateurs</a></li>
              </ul>
            </li>';
            endif;
            ?>

            <?php
            if (!isset($_SESSION['user'])) :
              echo "<li class='nav-item'>
              <a class='nav-link' href=''>Connexion</a>
            </li>";
            endif;
            ?>

            <?php
            if (isset($_SESSION['user'])) :
              echo "<li class='nav-item'>
                <a class='nav-link' href='?action=logout'>Déconnexion</a>
              </li>";
            endif;
            ?>

            <li class="nav-item">
              <a class="nav-link" href="<?= BASE_URL; ?>store/cart.php"><i class="bi bi-basket"><sup></sup></i></a>
            </li>

          </ul>

        </div>
      </div>
    </nav>
  </header>
  <main>