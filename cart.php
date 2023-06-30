<?php
include_once("./include/header.php");
include_once("./include/navbar.php");
// <!-- cart manubar -->
include_once("./include/cartManu.php");
?>

<section class="container my-5 cart-container">
    <div class="row">
        <div class="col-12 col-md-7">
            <table class="col-12 table-product-show">
                <thead class="col-12 border-bottom border-3">
                    <tr class="col-12">
                        <th class="col-6 text-left">PRODUCT</th>
                        <th class="col-2 text-center px-3">PRICE</th>
                        <th class="col-2 text-center px-3">QUANTITY</th>
                        <th class="col-2 text-center px-3">SUBTOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="col-12 border-bottom border-1">
                        <td class="col-12 text-left d-flex justify-content-left align-items-center gap-2 py-2">
                            <div>
                                <span class="fs-4" style="cursor: pointer;"><i class='bx bx-x-circle'></i></span>
                            </div>
                            <div>
                                <img src="./assets/img/8tal-misri-300x300.jpg" alt="Product Image" width="70px">
                            </div>
                            <div>
                                <span><a href="#">স্পেশাল শাহী মশলা গুঁড়া - 0.5 KG</a></span>
                            </div>
                        </td>
                        <td class="col-2 text-center px-3"><span>৳ 1,275.00</span></td>
                        <td class="col-2 text-center px-3">
                            <div class="btn-group quantity_input" role="group" aria-label="Basic example">
                                <button type="button" class="btn border decrease">-</button>
                                <input type="text" class="text-center" value="1" min="1" maxlength="4" id="quantity">
                                <button type="button" class="btn border increase">+</button>
                            </div>
                        </td>
                        <td class="col-2 text-center px-3"><span>৳ 1,275.00</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-12 col-md-5 my-5 my-md-0">
            <form action="">
                <table class="col-12">
                    <thead class="border-bottom border-3">
                        <tr>
                            <th class="fw-bold">CART TOTALS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-1 border-bottom">
                            <td class="d-flex justify-content-between my-2">
                                <span>Subtotal</span>
                                <span class="fw-bold">৳ 1,275.00</span>
                            </td>
                        </tr>
                        <tr class="border-1 border-bottom">
                            <td class="py-2">
                                <span class="text-secondary">Shipping</span>
                                <div class="form-check my-2">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label fw-semibold" style='font-family: "Kalpurush", sans-serif;' for="flexRadioDefault2">
                                        ঢাকার মধ্যে: ৳ 50.00
                                    </label>
                                </div>
                                <div class="form-check my-2">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                                    <label class="form-check-label fw-semibold" style='font-family: "Kalpurush", sans-serif;' for="flexRadioDefault3">
                                        ঢাকার বাহিরে: ৳ 100.00
                                    </label>
                                </div>
                                <span class="fw-bold">Shipping to Dhaka.</span>
                            </td>
                        </tr>
                        <tr class="border-3 border-bottom">
                            <td class="d-flex justify-content-between my-2">
                                <span>Total</span>
                                <span class="fw-bold">৳ 1,325.00</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="proceed_to_checkout">Proceed to checkout</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="d-block fw-bold border-3 border-bottom"><i class='bx bxs-purchase-tag-alt me-2 text-secondary'></i>Coupon</span>
                                <input type="" maxlength="6" placeholder="Coupon Code">
                                <button type="button" class="apply_cupon">Proceed to checkout</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</section>


<?php
include_once("./include/footer.php");
?>