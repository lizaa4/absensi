<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" href="tabel.blade.php">
  </head>
  <style>
    body {
        min-height: 2000px;
    }
    .jumbotron {
        padding-top: 2rem;
        background-color: #e2edff;
    }

    #projects {
        background-color: #e2edff;
    }
  </style>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="#">Profile</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <!-- Akhir Navbar -->

  <!-- Jumbotron -->
  <section class="jumbotron text-center">
  <img src="{{asset('/images/profile-')}}img.png" alt="rofile" width="200" />
  <h1 class="display-4">Welcome Home</h1>
  <p class="lead">Sudah melakukan Absensi</p>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="0.8" d="M0,96L34.3,112C68.6,128,137,160,206,149.3C274.3,139,343,85,411,90.7C480,96,549,160,617,160C685.7,160,754,96,823,101.3C891.4,107,960,181,1029,192C1097.1,203,1166,149,1234,117.3C1302.9,85,1371,75,1406,69.3L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
  </section>
  <!-- Akhir Jumbotron -->

  <!-- About -->
  <section id="about">
    <div class="container">
        <div class="row text-center mb-3">
            <div class="col">
                <h2>About me</h2>
            </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
            <div class="col-md-4">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum repudiandae non odio eum obcaecati, suscipit eveniet dignissimos quia iusto facere!</p>
            </div>
            <div class="col-md-4">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam eos voluptatibus molestias nostrum! Ipsum perspiciatis voluptas voluptatum alias, distinctio autem voluptates asperiores quibusdam dolore rerum.</p>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="0.8" d="M0,64L34.3,90.7C68.6,117,137,171,206,213.3C274.3,256,343,288,411,250.7C480,213,549,107,617,69.3C685.7,32,754,64,823,90.7C891.4,117,960,139,1029,160C1097.1,181,1166,203,1234,197.3C1302.9,192,1371,160,1406,144L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
  </section>
  <!-- Akhir About -->

  <!-- Projects -->
  <section id="projects">
    <div class="container">
        <div class="row text-center mb-3">
            <div class="col">
                <h2>My Projects</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/originals/f2/c2/58/f2c258726ac7e2b64114a77ca4316f80.jpg" class="card-img-top" alt="project 1">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
            </div>
                </div>
        <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <img src="https://i.pinimg.com/originals/cb/62/f2/cb62f23a7bfae733e43c49529d258f8d.jpg"  class="card-img-top" alt="project 2">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
        </div>
            <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://i.pinimg.com/originals/99/28/7b/99287b1362a6128d05bea4aa19eea775.jpg" class="card-img-top" alt="project 3">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
        </div>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="0.8" d="M0,224L34.3,224C68.6,224,137,224,206,186.7C274.3,149,343,75,411,80C480,85,549,171,617,213.3C685.7,256,754,256,823,229.3C891.4,203,960,149,1029,138.7C1097.1,128,1166,160,1234,170.7C1302.9,181,1371,171,1406,165.3L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
    </section>
  <!-- Akhir projects -->

  <!-- Contact -->
<section id="contact">
<div class="container">
    <div class="row text-center">
        <div class="col">
            <h2>Contact Me</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
        <form>
  <div class="mb-3">
    <label for="name" class="form-label">Nama Lengkap</label>
    <input type="email" class="form-control" id="name" aria-describedby="name">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" aria-describedby="email">
  </div>
  <div class="mb-3">
  <label for="pesan" class="form-label">Pesan</label>
  <textarea class="form-control" id="esan" rows="3"></textarea>
</div>
  <button type="submit" class="btn btn-primary">Kirim</button>
</form>
        </div>
    </div>
</div>
</section>
  <!-- Akhir Contact -->
</html>