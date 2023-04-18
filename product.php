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
                    <a data-big="https://halalfoodservicebd.com/wp-content/uploads/2021/12/299106266_601731048168033_8846127039959966928_n.jpg" href="#" class="z-image cursor-pointer">
                        <img class="img-fluid" src="https://halalfoodservicebd.com/wp-content/uploads/2021/12/299106266_601731048168033_8846127039959966928_n.jpg" alt="" />
                    </a>
                    <div class="wish_list">
                        <a href="#"><i class="fa-solid fa-heart"></i></a>
                    </div>
                    <div class="zoom_pic">
                        <a data-big="https://halalfoodservicebd.com/wp-content/uploads/2021/12/299106266_601731048168033_8846127039959966928_n.jpg" href="javascript:voild(0)" class="z-image tt cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Zoom"><i class="fa-solid fa-magnifying-glass-plus fa-shake"></i></a>
                    </div>
                </div>
            </div>
            <div class="pro_order col-6">
                <p class="paigination mb-1">
                    <a href="#">Home</a>
                    <span class="mx-1">/</span>
                    <a href="#">Foods</a>
                </p>
                <h3 class="fw-bold mb-2">দুলালের তালমিছরি</h3>
                <h4 class="fw-bold mt-1">৳ 490.00</h4>
                <small class="fw-bold d-block">Weight: 1 KG</small>
                <div class="button_div d-flex">
                    <button class="tt d-inline m-0 me-2 border-2 rounded px-2 my-2 py-1 d-flex justify-content-center align-items-center bg-transparent" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="1 Kg">
                        1 KG
                    </button>
                    <button class="tt d-inline me-2 border-2 rounded px-2 my-2 py-1 d-flex justify-content-center align-items-center bg-transparent" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="1.5 Kg">
                        1.5 KG
                    </button>
                </div>
                <small class="fw-bold text-success d-block">99496 in stock</small>
                <div class="d-block">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn border">-</button>
                        <input type="text" class="border text-center" value="1" min="1" maxlength="4" id="quantity">
                        <button type="button" class="btn border">+</button>
                    </div>
                    <button>Add to Cart</button>
                </div>
                <button class="d-block">Buy Now</button>
                <button class="d-block">Continue Shopping</button>
            </div>
        </div>
        <div class="tab_contents">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">DESCRIPTION</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">ADDITIONAL INFORMATION</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">REVIEWS (0)</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">fuck</div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">you</div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">babe</div>
                <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
            </div>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(function() {
        $("#quantity").on('input', function(e) {
            $(this).val($(this).val().replace(/[^0-9]/g, ''));
        });
    });
</script>
<?php
include_once("./include/footer.php");
?>