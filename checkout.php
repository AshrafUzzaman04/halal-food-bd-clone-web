<?php
include_once("./include/header.php");
include_once("./include/navbar.php");
include_once("./include/cartManu.php");
?>

<section class="container my-5 checkout-container">
    <div class="row">
        <div class="col-12 col-md-7 py-3 p-0 border-top border-3">
            <h6 class="fw-bold px-0">BILLING & SHIPPING</h6>
            <form action="">
                <div class="col-12">
                    <div class="col-12">
                        <span class="d-block fw-bold">Full Name *</span>
                        <input type="text" width="100%" class="col-12">
                    </div>
                    <div class="col-12">
                        <span class="d-block fw-bold">ফোন নাম্বার লিখুন *</span>
                        <input type="text" width="100%" class="col-12">
                    </div>
                    <div class="col-12">
                        <span class="d-block fw-bold">Street address *</span>
                        <input type="text" width="100%" class="col-12">
                    </div>
                    <div class="col-12">
                        <span class="d-block fw-bold">Town / City *</span>
                        <input type="text" width="100%" class="col-12">
                    </div>
                    <div class="col-12">
                        <h5 class="d-block fw-bold">ADDITIONAL INFORMATION</h5>
                        <small class="fw-bold">Order notes (optional)</small>
                        <input type="text" width="100%" class="col-12">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-5 my-5 my-md-0">
        </div>
    </div>
</section>


<?php
include_once("./include/footer.php");
?>