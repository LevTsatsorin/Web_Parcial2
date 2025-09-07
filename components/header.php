<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>La compañía Boeing</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link rel="stylesheet" href="../css/styles.css" />
  </head>

  <body>
    <header class="bg-white shadow-sm fixed-top">
      <nav class="navbar navbar-expand-custom navbar-light p-0">
        <div class="container">
          <a class="navbar-brand" href="../index.php">
            <img src="../assets/boeing_logo.png" alt="Boeing logo" height="50" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <!-- PÁGINAS PRINCIPALES -->
              <li class="nav-item <?php echo (isset($currentPage) && $currentPage == 'inicio') ? 'innovation-nav-item' : ''; ?>">
                <a class="nav-link <?php echo (isset($currentPage) && $currentPage == 'inicio') ? 'text-white' : 'text-dark'; ?> fw-medium" href="inicio.php"
                  >Inicio</a
                >
              </li>
              <li class="nav-item <?php echo (isset($currentPage) && $currentPage == 'innovation') ? 'innovation-nav-item' : ''; ?>">
                <a class="nav-link <?php echo (isset($currentPage) && $currentPage == 'innovation') ? 'text-white' : 'text-dark'; ?> fw-medium" href="innovation.php"
                  >Innovación</a
                >
              </li>
              <li class="nav-item <?php echo (isset($currentPage) && $currentPage == 'quienes-somos') ? 'innovation-nav-item' : ''; ?>">
                <a class="nav-link <?php echo (isset($currentPage) && $currentPage == 'quienes-somos') ? 'text-white' : 'text-dark'; ?> fw-medium" href="quienes-somos.php"
                  >Quiénes Somos</a
                >
              </li>
                            <li class="nav-item <?php echo (isset($currentPage) && $currentPage == 'contacto') ? 'innovation-nav-item' : ''; ?>">
                <a class="nav-link <?php echo (isset($currentPage) && $currentPage == 'contacto') ? 'text-white' : 'text-dark'; ?> fw-medium" href="contacto.php"
                  >Contacto</a
                >
              </li>
              
              <!-- SEPARADOR VISUAL -->
              <li class="nav-divider d-none d-custom-block"></li>
              
              <!-- SECCIONES DE INICIO -->
              <li class="nav-item nav-section-item">
                <a class="nav-link text-dark fw-medium nav-section-link" href="<?php echo (isset($currentPage) && $currentPage == 'inicio') ? '#history' : 'inicio.php#history'; ?>"
                  >Historia</a
                >
              </li>
              <li class="nav-item nav-section-item">
                <a class="nav-link text-dark fw-medium nav-section-link" href="<?php echo (isset($currentPage) && $currentPage == 'inicio') ? '#models' : 'inicio.php#models'; ?>"
                  >Modelos</a
                >
              </li>
              <li class="nav-item nav-section-item">
                <a class="nav-link text-dark fw-medium nav-section-link" href="<?php echo (isset($currentPage) && $currentPage == 'inicio') ? '#news' : 'inicio.php#news'; ?>"
                  >Noticias</a
                >
              </li>
              <li class="nav-item nav-section-item">
                <a class="nav-link text-dark fw-medium nav-section-link" href="<?php echo (isset($currentPage) && $currentPage == 'inicio') ? '#fleet' : 'inicio.php#fleet'; ?>"
                  >Galería</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
