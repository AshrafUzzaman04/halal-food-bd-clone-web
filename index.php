<?php
include_once("./include/header.php");
?>

<!-- ============================= -->
<!-- ============ preloader ============ -->
<!-- ============================= -->
<div id="preloader">
  <div class="wrapper">
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="shadow"></div>
    <div class="shadow"></div>
    <div class="shadow"></div>
  </div>
</div>

<!-- ============================= -->
<!-- navigation bar section started here -->
<!-- ============================= -->
<?php
include_once("./include/navbar.php");
?>

<!-- ================================= -->
<!-- ====== hero image section ====== -->
<!-- ================================= -->
<section class="hero_img">
  <img src="https://halalfoodservicebd.com/wp-content/uploads/2021/12/174518273_288792369461904_1182148777851774931_n-scaled.jpg" class="img-fluid" alt="" />
</section>

<!-- ===================================== -->
<!-- ====== popular product section ====== -->
<!-- ===================================== -->
<section class="product popular_product">
  <div class="container-lg">
    <div class="pro_title">
      <h2><b></b><span>পপুলার পণ্য</span><b></b></h2>
    </div>
    <div class="grid_pro">
      <!-- product 1 -->
      <div class="pro">
        <div class="img_pro">
          <a data-big="https://halalfoodservicebd.com/wp-content/uploads/2021/12/299106266_601731048168033_8846127039959966928_n.jpg" href="#" class="z-image">
            <img class="img-fluid" src="https://halalfoodservicebd.com/wp-content/uploads/2021/12/299106266_601731048168033_8846127039959966928_n.jpg" alt="" />
          </a>
          <div class="wish_list">
            <a href="#"><i class="fa-solid fa-heart"></i></a>
          </div>
          <div class="quick_view" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <!-- Button trigger Quick View modal -->
            <a href="javascript:void(0)"><strong>Quick View</strong></a>
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                  Modal title
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">hi</div>
            </div>
          </div>
        </div>
        <div class="article_section">
          <article>
            <span class="d-block">Foods</span>
            <span class="d-block"><a href="#" class="d-inline-block">দুলালের তালমিছরি (১ কেজি)</a></span>
            <span class="text-dark">From: <strong class="fw-bold">৳ 490.00</strong></span>
          </article>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- =================================== -->
<!-- ====== top category section ====== -->
<!-- =================================== -->
<section class="top_category">
  <div class="container-lg">
    <!-- section title -->
    <div class="pro_title">
      <h2><b></b><span>টপ ক্যাটাগরি</span><b></b></h2>
    </div>
    <div class="grid_category">
      <!-- category 1 -->
      <div class="category">
        <a href="#">
          <img src="https://halalfoodservicebd.com/wp-content/uploads/2022/06/Popular_Badges-09-512-400x400.webp" alt="" class="img-fluid" />
        </a>
        <strong><a href="#">পপুলার</a></strong>
      </div>
      <!-- category 2 -->
      <div class="category">
        <a href="#">
          <img src="https://halalfoodservicebd.com/wp-content/uploads/2022/06/g4415-512-400x400.webp" alt="" class="img-fluid" />
        </a>
        <strong><a href="#">পপুলার</a></strong>
      </div>
      <!-- category 3 -->
      <div class="category">
        <a href="#">
          <img src="https://halalfoodservicebd.com/wp-content/uploads/2022/06/Honey-PNG-Image-94520.png" alt="" class="img-fluid" />
        </a>
        <strong><a href="#">পপুলার</a></strong>
      </div>
      <!-- category 4 -->
      <div class="category">
        <a href="#">
          <img src="https://halalfoodservicebd.com/wp-content/uploads/2022/06/Item_Almond.webp" alt="" class="img-fluid" />
        </a>
        <strong><a href="#">পপুলার</a></strong>
      </div>
      <!-- category 5 -->
      <div class="category">
        <a href="#">
          <img src="https://halalfoodservicebd.com/wp-content/uploads/2022/06/FzQwEKjqPWlHWiBifaaqIpXEj40Tf3krF14HxN7u-400x400.png" alt="" class="img-fluid" />
        </a>
        <strong><a href="#">পপুলার</a></strong>
      </div>
      <!-- category 6 -->
      <div class="category">
        <a href="#">
          <img src="https://halalfoodservicebd.com/wp-content/uploads/2022/06/Fish.png" alt="" class="img-fluid" />
        </a>
        <strong><a href="#">পপুলার</a></strong>
      </div>
      <!-- category 7 -->
      <div class="category">
        <a href="#">
          <img src="https://halalfoodservicebd.com/wp-content/uploads/2022/06/fish-1.png" alt="" class="img-fluid" />
        </a>
        <strong><a href="#">পপুলার</a></strong>
      </div>
    </div>
  </div>
</section>

<!-- ======================================= -->
<!-- ===== info about product section ======= -->
<!-- ======================================= -->
<section class="info_pro">
  <div class="container-lg">
    <!-- section title -->
    <div class="pro_title">
      <h2><b></b><span>পণ্য সম্পর্কে জানুন</span><b></b></h2>
    </div>
    <!-- grid video content -->
    <div class="grid_video">
      <!-- video 1 -->
      <div class="video">
        <iframe class="img-fluid w-100 h-100" src="https://www.youtube.com/embed/56Rdkrvfx0Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</section>

<!-- ======================================= -->
<!-- ===== footer section ======= -->
<!-- ======================================= -->
<?php
include_once("./include/footer.php");
?>