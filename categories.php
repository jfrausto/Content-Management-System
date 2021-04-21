<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap 5 cdn before all other stylesheets -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <title></title>
</head>
<body class="d-flex flex-column h-100">
  <div class="container-fluid">
  <!-- home, about, blog, profile, contact -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Cubby</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">about</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!-- main content -->
  <main class="flex-shrink-0">
    <div class="container-sm">
      <h1 class="display-1">
        Categories Page
      </h1>
      <button type="button" class="btn btn-warning">Warning</button>
    </div>
  </main>

  <!-- sticky footer, required the h-100 class to be applied to the root html tag -->
  <footer class="footer mt-auto py-3 bg-light">
    <div class="container">
      <span class="text-muted">
        Cubby 
        <span id="currentDate">
        </span>
      </span>
    </div>
  </footer>
  

  <script> 
    // write current year
    document.getElementById("currentDate").innerText = new Date().getFullYear();
  </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>