<!-- cart manubar -->
<section class="container checkout_page_title">
    <nav class="my-5">
        <ul class="d-flex justify-content-center align-items-center p-0">
            <li class="<?= basename($_SERVER['PHP_SELF'], PATHINFO_FILENAME) == "cart.php" ? "active" : null ?>"><a href="cart.php">SHOPPING CART</a></li>
            <li>></li>
            <li class="<?= basename($_SERVER['PHP_SELF'], PATHINFO_FILENAME) == "checkout.php" ? "active" : null ?>"><a href="checkout.php">CHECKOUT DETAILS</a></li>
            <li>></li>
            <li class="<?= basename($_SERVER['PHP_SELF'], PATHINFO_FILENAME) == "#" ? "active" : null ?>"><a href="#">ORDER COMPLETE</a></li>
        </ul>
    </nav>
</section>