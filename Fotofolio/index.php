<?php
require './koneksi.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="edit.css" />

    <title>My Fortofolio</title>
  </head>
  <body>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-secondary fixed-top">
      <a class="navbar-brand" href="#home"><i class="bi bi-controller"> Fortofolio</i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#hobby">Hobby</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#skills">Skill</a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
          </ul>
        </div>
      </nav>
      <!-- Akhir Navbar -->

      <!-- Jumbotron -->
      <section class="jumbotron text-center">
        <img src="img/<?php echo ucwords($data[0]['Judul']); ?>" alt="fIkri" width="200" class="rounded-circle" />
        <h1 class="display-4"><?php echo ucwords($data[0]['Nama']); ?></h1>
        <p class="lead"><?php echo ucwords($data[0]['Text']); ?></p>
      </section>
      <!-- Akhir Jumbotron -->

      <!-- About -->
      <section id="about">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FFFFFF" fill-opacity="1" d="M0,160L60,144C120,128,240,96,360,96C480,96,600,128,720,122.7C840,117,960,75,1080,58.7C1200,43,1320,53,1380,58.7L1440,64L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
      <div class="container2">
          <div class="row text-center mb-5">
            <div class="col">
              <h2>About Me</h2>
            </div>
          </div>
          <div class="row justify-content-center fs-5">
            <div class="col-5">
              <p><?php echo ucwords($data[0]['About']); ?><p/p>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#D7D7D7" fill-opacity="1" d="M0,160L0,160L144,160L144,128L288,128L288,96L432,96L432,64L576,64L576,32L720,32L720,192L864,192L864,96L1008,96L1008,64L1152,64L1152,128L1296,128L1296,32L1440,32L1440,0L1296,0L1296,0L1152,0L1152,0L1008,0L1008,0L864,0L864,0L720,0L720,0L576,0L576,0L432,0L432,0L288,0L288,0L144,0L144,0L0,0L0,0Z"></path></svg>
      </section>
      <!-- Akhir About -->

      <!-- Hobby -->
      <section id="hobby">
        <div class="container">
          <div class="row text-center mb-5">
            <div class="col">
              <h2>Hobby</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 mb-3">
             <div class="card">
              <img src="img/hobby/<?php echo ucwords($data[0]['Hobby4']); ?>" class="card-img-top" alt="Hobby">
               <div class="card-body">
                 <p class="card-text"><?php echo ucwords($data[0]['Hobby1']); ?></p>
               </div>
             </div>
            </div>
            <div class="col-md-4 mb-3">
             <div class="card">
              <img src="img/hobby/<?php echo ucwords($data[0]['Hobby5']); ?>" class="card-img-top" alt="Hobby">
               <div class="card-body">
                 <p class="card-text"><?php echo ucwords($data[0]['Hobby2']); ?></p>
               </div>
             </div>
            </div>
            <div class="col-md-4 mb-3">
             <div class="card">
              <img src="img/hobby/<?php echo ucwords($data[0]['Hobby6']); ?>" class="card-img-top" alt="Hobby">
               <div class="card-body">
                 <p class="card-text"><?php echo ucwords($data[0]['Hobby3']); ?></p>
               </div>
             </div>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#D7D7D7" fill-opacity="1" d="M0,160L60,144C120,128,240,96,360,96C480,96,600,128,720,122.7C840,117,960,75,1080,58.7C1200,43,1320,53,1380,58.7L1440,64L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
      </section>
      <!--Akhir Hobby -->

      <!--Project -->
      <section id="project">
        <div class="container">
          <div class="row text-center mb-5">
            <div class="col">
              <h2>My Project</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 mb-3">
             <div class="card">
              <img src="img/project/<?php echo ucwords($data[0]['Project4']); ?>" class="card-img-top" alt="Project">
               <div class="card-body">
                 <p class="card-text"><?php echo ucwords($data[0]['Project1']); ?></p>
               </div>
             </div>
            </div>
            <div class="col-md-4 mb-3">
             <div class="card">
              <img src="img/project/<?php echo ucwords($data[0]['Project5']); ?>" class="card-img-top" alt="Project">
               <div class="card-body">
                 <p class="card-text"><?php echo ucwords($data[0]['Project2']); ?></p>
               </div>
             </div>
            </div>
            <div class="col-md-4 mb-3">
             <div class="card">
              <img src="img/project/<?php echo ucwords($data[0]['Project6']); ?>" class="card-img-top" alt="Project">
               <div class="card-body">
                 <p class="card-text"><?php echo ucwords($data[0]['Project3']); ?></p>
               </div>
             </div>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#D7D7D7" fill-opacity="1" d="M0,160L60,144C120,128,240,96,360,96C480,96,600,128,720,122.7C840,117,960,75,1080,58.7C1200,43,1320,53,1380,58.7L1440,64L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z"></path></svg>
      </section>
      <!--Akhir Project -->

      <!-- Skill -->
      <section id="skills">
    <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h4>Skills</h4>
                    <p style="text-align:start";><?php echo ucwords($data[0]['Valorant']); ?></p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar" style=" text-align:right; width: 85%; background-color: #5000ca;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                    </div>
                    <p style="text-align:start";><br><?php echo ucwords($data[0]['Dota2']); ?></p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar" style=" text-align:right; width: 95%; background-color: #5000ca;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
                    </div>
                    <p style="text-align:start"><br><?php echo ucwords($data[0]['Apex']); ?></p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar" style=" text-align:right; width: 40%; background-color: #5000ca;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                    </div>
                    <p style="text-align:start";><br><?php echo ucwords($data[0]['Fornite']); ?></p>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar" style=" text-align:right; width: 35%; background-color: #5000ca;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">35%</div>
                    </div>
      </section>
      <!-- Akhir Skill -->

      <!-- Contact -->
      <section id="contact">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#D7D7D7" fill-opacity="1" d="M0,160L0,160L144,160L144,128L288,128L288,96L432,96L432,64L576,64L576,32L720,32L720,192L864,192L864,96L1008,96L1008,64L1152,64L1152,128L1296,128L1296,32L1440,32L1440,320L1296,320L1296,320L1152,320L1152,320L1008,320L1008,320L864,320L864,320L720,320L720,320L576,320L576,320L432,320L432,320L288,320L288,320L144,320L144,320L0,320L0,320Z"></path></svg>
  <div class="container">
    <div class="row text-center mb-3">
      <div class="col">
        <h2>Contact Me</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6">
      <form>
  <div class="mb-3">
    <label for="name" class="form-label"><?php echo ucwords($data[0]['NamaL']); ?></label>
    <input type="text" class="form-control" id="name" aria-describedby="name">
  </div>
</form>
  <div class="mb-3">
    <label for="email" class="form-label"><?php echo ucwords($data[0]['Email']); ?></label>
    <input type="email" class="form-control" id="emal" aria-describedby="emailHelp">
    <div class="mb-3">
  <label for="pesan" class="form-label"><?php echo ucwords($data[0]['Pesan']); ?></label>
  <textarea class="form-control" id="pesan" rows="3"></textarea>
</div>
  </div>
  <button type="submit" class="btn btn-secondary">Kirim</button>
</form>
      </div>
    </div>
  </div>

</section>
      <!-- Akhir Contact -->

      <!-- Footer -->
    <footer class="bg-secondary text-black text-center p-3">
      <p>Created with <i class="bi bi-heart-fill text-danger"></i> by <a href="https://www.instagram.com/fikri_anargya/" class="text-black fw-bold">Fikri Anargya Yoniar</a></p>
    </footer>
    <!-- Akhir Footer -->


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>