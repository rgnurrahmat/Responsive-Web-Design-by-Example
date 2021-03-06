<?php require_once( "SNIPPETS/HEADER.php" ); ?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <div id="AwesomeCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#AwesomeCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#AwesomeCarousel" data-slide-to="1"></li>
          <li data-target="#AwesomeCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="d-block img-fluid carouselImage" src="https://i.ytimg.com/vi/4dQOpz3KUYk/maxresdefault.jpg" alt="First slide">
          </div>

          <div class="carousel-item">
            <img class="d-block img-fluid carouselImage" src="https://i.ytimg.com/vi/4dQOpz3KUYk/maxresdefault.jpg" alt="Second slide">
          </div>

          <div class="carousel-item">
            <img class="d-block img-fluid carouselImage" src="https://i.ytimg.com/vi/4dQOpz3KUYk/maxresdefault.jpg" alt="Third slide">
          </div>
        </div>

        <a class="carousel-control-prev" href="#AwesomeCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#AwesomeCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</div>

<?php require_once( "SNIPPETS/FOOTER.php" ); ?>