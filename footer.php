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

<footer class="container">
  <div class="row-flex col-lg-6 offset-6">
    <form>
    <h2>Contact</h2>
    <br>
      <div class="form-group">
        <label for="exampleFormControlInput1">Adresse mail :</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Commentaire :</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        <br>
        <button type="button" class="btn btn-dark">Soumettre</button>
      </div>
  </div>
  </form>
</footer>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>