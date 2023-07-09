<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" href="style.css">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <title>Book</title>
</head>

<body>
  <!-- Nav bar-->
  <nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#"><i class="fa-solid fa-shop me-2"></i> <strong>ReadIt</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class=" collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto ">

          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase" href="#">Books</a>
          </li>
        </ul>

      </div>
      <div class="mx-auto my-3 d-lg-none d-sm-block d-xs-block">

      </div>
      <div class="input-group">
        <span class="border-info input-group-text bg-info text-white"><i class="fa-solid fa-magnifying-glass"></i></span>
        <input type="text" class="form-control border-info" style="color:#1e0785">
        <button class="btn btn-info text-white">Search</button>
      </div>
    </div>
  </nav>
  <br>
  <div class="container">
    <div class="row">
      <div class="col" width="50" height="50">
        <div class="card" style="width: 16rem;">
          <img class="card-img-top" src="images/Accelerando.jpg" alt="Card image cap" width="250" height="330">
          <div class="card-body">
            <h5 class="card-title">Accelerando</h5>
            <p class="card-text" width="150" height="200">
              Name: Accelerando <br>
              Year: 2005 <br>
              Author: Charles Stross <br>
            </p>
            <a href="#" class="btn btn-info font-monospace " style="font-weight: bold;">View Book</a>
            <p><a href="#" class="btn btn-info font-monospace " style="font-weight: bold;">Update Book</a>
            <a href="#" class="btn btn-info font-monospace " style="font-weight: bold;" >Delete Book</a></p>
          </div>
        </div>
      </div>
      <div class="col" width="50" height="50">
        <div class="card" style="width: 16rem;">
          <img class="card-img-top" src="images/Dracula.jpg" alt="Card image cap" width="250" height="330"">
                    <div class=" card-body">
          <h5 class="card-title">Dracula</h5>
          <p class="card-text" width="150" height="200">
            Name: Dracula <br>
            Year: 1897 <br>
            Author: Bram Stoker <br>
          </p>
          <a href="#" class="btn btn-info font-monospace " style="font-weight: bold;">View Book</a>
          <p><a href="#" class="btn btn-info font-monospace " style="font-weight: bold;">Update Book</a>
            <a href="#" class="btn btn-info font-monospace " style="font-weight: bold;" >Delete Book</a></p>
        </div>
      </div>
    </div>
    <div class="col" width="50" height="50">
      <div class="card" style="width: 16rem;">
        <img class="card-img-top" src="images/Walden.jpg" alt="Card image cap" width="250" height="330">
        <div class="card-body">
          <h5 class="card-title">Walden</h5>
          <p class="card-text">
            Name: Walden <br>
            Year: 2008 <br>
            Author: Henry David Thoreau <br>
          </p>
          <a href="#" class="btn btn-info font-monospace " style="font-weight: bold;">View Book</a>
          <p><a href="#" class="btn btn-info font-monospace " style="font-weight: bold;">Update Book</a>
            <a href="#" class="btn btn-info font-monospace " style="font-weight: bold;" >Delete Book</a></p>
        </div>
      </div>
    </div>
    <div class="col" width="50" height="50">
      <div class="card" style="width: 16rem;">
        <img class="card-img-top" src="images/Alice.jpg" alt="Card image cap" width="250" height="330">
        <div class="card-body">
          <h5 class="card-title">Alice in Wonderland</h5>
          <p class="card-text">
            Name: Alice in Wonderland <br>
            Year: 2003 <br>
            Author: Lewis Carroll <br>
          </p>
          <a href="#" class="btn btn-info font-monospace " style="font-weight: bold;">View Book</a>
          <p><a href="#" class="btn btn-info font-monospace " style="font-weight: bold;">Update Book</a>
            <a href="#" class="btn btn-info font-monospace " style="font-weight: bold;" >Delete Book</a></p>
        </div>
      </div>
    </div>
  </div>
  <br>
  <!-- Line 02( not responsived for other devices)-->
  <div class="row">
    <div class="col" width="50" height="50">
      <div class="card" style="width: 16rem;">
        <img class="card-img-top" src="images/Mademoiselle.jpg" alt="Card image cap" width="250" height="330">
        <div class="card-body">
          <h5 class="card-title">Mademoiselle At Arms</h5>
          <p class="card-text">
            Name: Mademoiselle At Arms <br>
            Year: 2000 <br>
            Author: Elizabeth Bailey <br>
          </p>
          <a href="#" class="btn btn-info font-monospace " style="font-weight: bold;">View Book</a>
          <p><a href="#" class="btn btn-info font-monospace " style="font-weight: bold;">Update Book</a>
            <a href="#" class="btn btn-info font-monospace " style="font-weight: bold;" >Delete Book</a></p>
        </div>
      </div>
    </div>
    <div class="col" width="50" height="50">
      <div class="card" style="width: 16rem;">
        <img class="card-img-top" src="images/Communist.jpg" alt="Card image cap" width="250" height="330">
        <div class="card-body">
          <h5 class="card-title">Communist Manifesto </h5>
          <p class="card-text">
            Name:Communist Manifesto <br>
            Year: 2001 <br>
            Author: Frederick Engels <br>
          </p>
          <a href="#" class="btn btn-info font-monospace " style="font-weight: bold;">View Book</a>
          <p><a href="#" class="btn btn-info font-monospace " style="font-weight: bold;">Update Book</a>
            <a href="#" class="btn btn-info font-monospace " style="font-weight: bold;" >Delete Book</a></p>
        </div>
      </div>
    </div>
    <div class="col" width="50" height="50">
      <div class="card" style="width: 16rem;">
        <img class="card-img-top" src="images/Games.jpg" alt="Card image cap" width="250" height="330">
        <div class="card-body">
          <h5 class="card-title">
            Floor Games</h5>
          <p class="card-text">
            Name: Floor Games <br>
            Year: 1995 <br>
            Author: H. G. Wells<br>
          </p>
          <a href="#" class="btn btn-info font-monospace " style="font-weight: bold;">View Book</a>
          <p><a href="#" class="btn btn-info font-monospace " style="font-weight: bold;">Update Book</a>
            <a href="#" class="btn btn-info font-monospace " style="font-weight: bold;" >Delete Book</a></p>
        </div>
      </div>
    </div>
    <div class="col" width="50" height="50">
      <div class="card" style="width: 16rem;">
        <img class="card-img-top" src="images/Fairyland.jpg" alt="Card image cap" width="250" height="330">
        <div class="card-body">
          <h5 class="card-title">All the Way to Fairyland</h5>
          <p class="card-text">
            Name: All the Way to Fairyland <br>
            Year: 1936 <br>
            Author:Evelyn Sharp<br>
          </p>
          <a href="#" class="btn btn-info font-monospace " style="font-weight: bold;">View Book</a>
          <p><a href="#" class="btn btn-info font-monospace " style="font-weight: bold;">Update Book</a>
            <a href="#" class="btn btn-info font-monospace " style="font-weight: bold;" >Delete Book</a></p>
        </div>
      </div>
    </div>
  </div>
  <br>
  </div>


  </div>

  <!-- Footer-->
  <?php
  include "footer.php";
  ?>

</body>

</html>