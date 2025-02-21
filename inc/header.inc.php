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
  <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/styles.css">
  <title>E-commerce</title>
</head>

<body>
  <div class="menu-icon">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      fill="none"
      viewBox="0 0 24 24"
      stroke-width="1.5"
      stroke="currentColor"
      class="w-6 h-6">
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        d="M3.75 9h16.5m-16.5 6.75h16.5" />
    </svg>
  </div>

  <div class="menu-items-container">
    <div class="close-icon">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        class="w-6 h-6">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M6 18 18 6M6 6l12 12" />
      </svg>
    </div>

    <div class="menu-items">
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Contact</a>
    </div>
  </div>

  <header>
    <video src="<?= BASE_URL ?>assets/videos/a-ring-with-a-blue-stone-in-gold.mp4" autoplay muted loop></video>
    <div class="text-content">
      <h1>Step into a World of Possibilities</h1>
      <a href="#" class="btn">Learn More</a>
    </div>
  </header>

  <main>