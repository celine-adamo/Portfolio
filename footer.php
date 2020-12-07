<?php include_once 'header.php' ?>
<section class="container">
  <div class="row">
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-interval="10000">
          <img src="../assets/images/IMG_4447.JPG" class="d-block w-100" alt="test">
        </div>
        <div class="carousel-item" data-interval="2000">
          <img src="../assets/images/IMG_4434.jpg" class="d-block w-100" alt="test2">
        </div>
        <div class="carousel-item">
          <img src="../assets/images/IMG_4438.JPG" class="d-block w-100" alt="test3">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>
<br>


<section class="container col-5">
  <div  class="mb-4">
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact</h2>
    <p class="text-center w-responsive mx-auto mb-5">Des questions? Merci de me contacter via le formulaire suivant :</p>
    <div class="row">
      <div class="col-md-8 mb-md-0 mb-5">
        <form id="contact-form" name="contact-form" action="mail.php" method="POST">
          <div class="row">
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="name" name="name" class="form-control">
                <label for="name" class="">Nom</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="email" name="email" class="form-control">
                <label for="email" class="">Email</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="md-form mb-0">
                <input type="text" id="subject" name="subject" class="form-control">
                <label for="subject" class="">Sujet</label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="md-form">
                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                <label for="message">Message</label>
              </div>
            </div>
          </div>
        </form>
        <div class="text-center text-md-left">
          <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
        </div>
        <div class="status"></div>
      </div>
      <div class="col-md-3 text-center">
        <ul class="list-unstyled mb-0">
          <li><i class="fas fa-map-marker-alt fa-2x"></i>
            <p>Belfort, 90000 France</p>
          </li>
          <li><i class="fas fa-phone mt-4 fa-2x"></i>
            <p>+ 06 67 42 47 66</p>
          </li>
          <li><i class="fas fa-envelope mt-4 fa-2x"></i>
            <p>celineadamo.ca@gmail.com</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>


<footer>

</footer>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>