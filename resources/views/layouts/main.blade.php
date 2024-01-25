<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <!-- CSS Bootstrap   -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- Fonte do Google  -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- Fonte CSS -->
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../js/scripts.js"></script>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="collapse navbar-collapse" id="navbar"></div>
      <a href="/" id="navbar-brand">
        <img src="https://cdn-icons-png.flaticon.com/512/780/780575.png" alt="icon" class="ico">
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="/" class="nav-link">Eventos</a>
        </li>
        <li class="nav-item">
          <a href="/events/create" class="nav-link">Criar Eventos</a>
        </li>
        <li class="nav-item">
          <a href="/" class="nav-link">Entrar</a>
        </li>
        <li class="nav-item">
          <a href="/" class="nav-link">Cadastrar</a>
        </li>
      </ul>
    </nav>
  </header>

  @yield('content')

  <main>
    <h5>Invista em você!</h5>
  </main>

  <footer>
    <p> HDC Events &copy; 2024</p>
  </footer>
  
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>