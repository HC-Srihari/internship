<?php include '../app/pages/includes/header.php'; ?>


<section>
  <div class="container course pb-5 pt-5">
    <h2 class="h1-responsive font-weight-bold text-center my-4">Why Our School ?</h2>
    <!--school description-->
    <p class="text-center w-responsive mx-auto mb-5">Karnataka Public School Ramteerth Nagar Belagavi is one of the top Government Schools in Belagavi.
      Our school has furnished laboratory,computer labs,library,etc. with top notch faculties.
    </p>
    <div class="row">
      <div class="col-md-4">
        <div class="card box">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="https://cdn.pixabay.com/photo/2016/09/08/04/12/programmer-1653351_960_720.png" class="img-fluid" />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Information Technology</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the
              bulk of the card's content.</p>
            <a href="#!" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card box">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="https://cdn.pixabay.com/photo/2017/09/25/11/55/cyberspace-2784907_960_720.jpg" class="img-fluid" />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Electronic Engineering</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the
              bulk of the card's content.</p>
            <a href="#!" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card box">
          <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
            <img src="https://cdn.pixabay.com/photo/2020/12/05/14/08/man-5806012_960_720.jpg" class="img-fluid" />
            <a href="#!">
              <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
            </a>
          </div>
          <div class="card-body">
            <h5 class="card-title">Civil Engineering</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the
              bulk of the card's content.</p>
            <a href="#!" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--school description-->

<!-- gallery -->
<h2 class="h1-responsive font-weight-bold text-center my-4">Gallery</h2>
<div class="row">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img src="https://cdn.pixabay.com/photo/2016/06/25/12/52/laptop-1478822_960_720.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

    <img src="https://www.wallpaperup.com/uploads/wallpapers/2015/06/13/720921/15a07e44a4ad8c23b292e74224c127d4.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img src="https://www.wallpaperup.com/uploads/wallpapers/2015/06/13/720921/15a07e44a4ad8c23b292e74224c127d4.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" />

    <img src="https://www.wallpaperup.com/uploads/wallpapers/2015/06/13/720921/15a07e44a4ad8c23b292e74224c127d4.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img src="https://www.wallpaperup.com/uploads/wallpapers/2015/06/13/720921/15a07e44a4ad8c23b292e74224c127d4.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

    <img src="https://www.wallpaperup.com/uploads/wallpapers/2015/06/13/720921/15a07e44a4ad8c23b292e74224c127d4.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" />
  </div>
</div>
<!-- Gallery -->

<h3 class="mx-4">Featured</h3>

<div class="row my-2 justify-content-center">

  <?php

  $query = "select posts.*,categories.category from posts join categories on posts.category_id = categories.id order by id desc limit 6";
  $rows = query($query);
  if ($rows) {
    foreach ($rows as $row) {
      include '../app/pages/includes/post-card.php';
    }
  } else {
    echo "No items found!";
  }

  ?>

</div>

<?php include '../app/pages/includes/footer.php'; ?>