<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>partij van de vissen</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> <!--link naar bootstrap-->
</head>
<body>
  <!--sidebar-->
  <button class="btn btn-rgba(173, 229, 235, 1)" type="button" style="background-color: rgba(173, 229, 235, 1);" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">= navbar</button>
  <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-header">
      <div class="container-fluid">
        <div class="navbar-header">
        </div>
        <ul class="nav navbar-nav text-center">
          <img src="logo.png" class="img-fluid rounded" alt="logo">
          <a class="navbar-brand" href="#">partij van de vissen</a>
          <li><button type="button" class="btn btn-outline-info"><a href="index.php">home page</a></button></li>
          <li class="dropdown"> <!--dropdown-->
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">standpunten
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><button type="button" class="btn btn-outline-info"><a href="stampunt1.php">woningsnood</a></button></li>
              <li><button type="button" class="btn btn-outline-info"><a href="stampunt2.php">immigratie</a></button></li>
              <li><button type="button" class="btn btn-outline-info"><a href="stampunt3.php">school</a></button></li>
              <li><button type="button" class="btn btn-outline-info"><a href="stampunt4.php">klimaatverandering</a></button></li>
            </ul>
          </li>
          <li><button type="button" class="btn btn-outline-info"><a href="overons.php">over ons</a></button></li>
          <li><button type="button" class="btn btn-outline-info"><a href="index.php">contacten</a></button></li>
        </ul>
      </div>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
  </div>
  <!--eind sidebar-->
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> <!--link naar bootstrap-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> <!--link naar bootstrap-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> <!--link naar bootstrap-->
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm" >
          <h1>partij van de vissen</h1>
        </div>
        <div class="col-sm">
          <img src="logo.png" width="400px" alt="logo">
        </div>
      </div>
    </div>
    <br>
    <div class="container">
      <div class="row" >
        <div class="col-sm">
          <div class="d-block p-2 text-black" style="background-color: rgba(173, 229, 235, 1); height:300px; width: 550px; border-radius:20px; ">
            <h1 class="text-center p-3">partij voor de vissen</h1>
            <p class="text-center p-3">We vinden dat iedereen die in Nederland woont een goed leven moet kunnen leiden. Daarom hebben we ervoor gekozen om de woningnood aan te pakken, immigranten een goed leven te bieden in Nederland, het lerarentekort op te lossen en de klimaatverandering tegen te gaan. Als we dit niet aanpakken, zullen toekomstige generaties in de problemen komen. Dat willen we niet, omdat we vinden dat ook toekomstige generaties recht hebben op een normaal leven.</p>
          </div>
        </div>
        <div class="col-sm" style="margin-left: 160px;">
        <a href="index.php"><button type="button" class="btn btn-warning" style="background-color: rgba(255, 118, 19, 1); width: 150px;height:150px; border-radius:100px; ">doe mee!</button></a>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> <!--link naar bootstrap-->
<br>
<h1 class="text-center">onze mensen</h1>
<div>
<img src="stijn.png"  alt="logo" style="border-radius:20px; width:500px;">
<p>ik heb voor dit project een begin aan de overons pagina gemaakt.</p>
<img src="tim.png"  alt="logo"  style="border-radius:20px; width:500px;"> <!--foto's-->
<p>ik heb voor dit project alle stampunten bedacht en opgeschreven deze kan je zien als je in ne navbar op stampunten klikt.
  en ik heb ook een stuk van de overons gemaakt
</p>
</div>
<!--footer-->
<footer class="bg-light text-center text-lg-start">
      <div class="container p-4">
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">standpunten</h5>
            <ul class="list-unstyled mb-0">
            <li>
                <a href="stampunt1.php" class="text-dark">woningsnood</a>
              </li>
              <li>
                <a href="stampunt2.php" class="text-dark">immigratie</a>
              </li>
              <li>
                <a href="stampunt3.php" class="text-dark">school</a>
              </li>
              <li>
                <a href="stampunt4.php" class="text-dark">klimaatverandering</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase mb-0"><a href="index.php">home page</h5></a>
            <h5 class="text-uppercase mb-0"><a href="contactpagina.php">contact pagina</h5></a>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase"><a href="overons.php">over ons</h5></a>
          </div>
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <div class="col-sm">
            <a href="index.php"><button type="button" class="btn btn-warning" style="background-color: rgba(255, 118, 19, 1); width: 100px; height:50px; border-radius:100px; ">doe mee!</button></a>
            </div>
            <div class="col-sm">
              <a><button type="button" class="btn btn-warning" style="background-color: rgba(255, 118, 19, 1); width: 100px;height:50px; border-radius:100px; ">doneren</button></a>
            </div>
            <p class="text-white">.</p>
            <h5 class="text-uppercase mb-0">social media</h5>
            <div class="row">
            <img src="contactus.png" width="50px" alt="logo" style="border-radius:20px; ">
            </div>
          </div>
        </div>
      </div>
      <div class="text-center p-3" style="background-color: rgba(173, 229, 235, 1);">
        © 2023 Copyright:
        <a class="text-dark"> door Tim en Stijn</a>
      </div>
    </footer>
  </body>

  </html>