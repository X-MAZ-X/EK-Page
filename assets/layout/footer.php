<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Sticky Footer</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
  /* Grundlegendes Reset */
  html,
  body {
    height: 100%;
    margin: 0;
  }

  body {
    display: flex;
    flex-direction: column;
  }

  main {
    flex: 1;
    /* Hauptinhalt dehnt sich aus, um den verfügbaren Platz zu füllen */
    padding: 20px;
  }

  footer {
    background-color: #000;
    color: #fff;
    text-align: center;
    padding: 10px 0;
    width: 100%;
  }
</style>
<main>
  <div class="container">
    <h1 class="mt-5"></h1>
    <p class="lead"</p>
    <p></p>
  </div>
</main>
<footer class="py-3" data-bs-theme="dark" role="contentinfo">
  <nav aria-label="Footer Navigation">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="index.php" class="nav-link px-2 text-light"
          aria-label="Zurück zur Startseite">Index</a></li>
      <li class="nav-item"><a href="login.php" class="nav-link px-2 text-light" aria-label="Anmelden">Login</a></li>
      <li class="nav-item"><a href="about.php" class="nav-link px-2 text-light" aria-label="Über uns">About</a></li>
    </ul>
  </nav>
  <p>© 2024 Mark Zöphel, Viel Erfolg bei deiner EK!</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>