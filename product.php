<?php
include_once("./include/header.php");
include_once("./include/navbar.php");
?>
<!-- =================================== -->
<!-- ====== product details section ====== -->
<!-- =================================== -->
<section class="pro_detls mt-5">
    <div class="container-lg">
        <div class="details row">
            <div class="pro col-6">
                <div class="img_pro">
                    <a data-big="https://halalfoodservicebd.com/wp-content/uploads/2021/12/299106266_601731048168033_8846127039959966928_n.jpg" href="#" class="z-image">
                        <img class="img-fluid" src="https://halalfoodservicebd.com/wp-content/uploads/2021/12/299106266_601731048168033_8846127039959966928_n.jpg" alt="" />
                    </a>
                    <div class="wish_list">
                        <a href="#"><i class="fa-solid fa-heart"></i></a>
                    </div>
                    <div class="zoom_pic">
                        <a data-big="https://halalfoodservicebd.com/wp-content/uploads/2021/12/299106266_601731048168033_8846127039959966928_n.jpg" href="javascript:voild(0)" class="z-image tt" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Zoom"><i class="fa-solid fa-magnifying-glass-plus fa-shake"></i></a>
                    </div>
                </div>
            </div>
            <div class="pro_order col-6">
                <span>hi</span>
            </div>
        </div>
        <div class="tab_contents">

        </div>
    </div>
</section>
<!-- =================================== -->
<!-- ====== related products section ====== -->
<!-- =================================== -->
<section class="related_pro">
    <div class="container-lg">
        <h5>Related Products</h5>
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php
                for ($i = 0; $i < 10; $i++) {
                ?>
                    <div class="swiper-slide">
                        <!-- product 1 -->
                        <div class="pro">
                            <div class="img_pro">
                                <a href="#">
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
                            <div class="article_section text-start">
                                <article>
                                    <span class="d-block">Foods</span>
                                    <span class="d-block"><a href="#" class="d-inline-block">দুলালের তালমিছরি (১ কেজি)</a></span>
                                    <span class="text-dark">From: <strong class="fw-bold">৳ 490.00</strong></span>
                                </article>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
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
</section>

<?php
include_once("./include/footer.php");
?>