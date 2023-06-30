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
                        <input type="text" width="100%" class="col-12" placeholder="আপনার নাম লিখুন">
                    </div>
                    <div class="col-12">
                        <small class="d-block fw-bold">ফোন নাম্বার লিখুন *</small>
                        <input type="text" width="100%" maxlength="11" class="col-12" placeholder="ফোন নম্বর লিখুন">
                    </div>
                    <div class="col-12">
                        <span class="d-block fw-bold">Street address *</span>
                        <input type="text" width="100%" class="col-12" placeholder="আপনার ঠিকানা লিখুন">
                    </div>
                    <div class="col-12">
                        <span class="d-block fw-bold">Town / City *</span>
                        <input type="text" width="100%" class="col-12" placeholder="থানা ও জেলা লিখুন">
                    </div>
                    <div class="col-12">
                        <h5 class="d-block fw-bold">ADDITIONAL INFORMATION</h5>
                        <small class="fw-bold">Order notes (optional)</small>
                        <textarea width="100%" class="col-12" placeholder="Notes about your order, e.g. special notes for delivery." spellcheck="false"></textarea>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 col-md-5 my-5 my-md-0 p-4">
            <form action="" style="border: 2px solid #000; padding: 20px;">
                <h6 class="fw-bold px-0">YOUR ORDER</h6>
                <table class="col-12">
                    <thead class="border-bottom border-3">
                        <tr>
                            <th class="fw-bold d-flex justify-content-between my-2">
                                <span>PRODUCT</span>
                                <span>Subtotal</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-1 border-bottom">
                            <td class="d-flex justify-content-between my-2">
                                <small class="fw-bold">দানাদার ঘি ( সিরাজগঞ্জ ) - 1 KG × 1</small>
                                <span class="fw-bold">৳ 1,275.00</span>
                            </td>
                        </tr>
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
                                <span class="d-block fw-bold py-2">Cash on delivery
                                    <br>
                                    Order Place</span>
                                <button type="button" class="apply_cupon">Place Order</button>
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