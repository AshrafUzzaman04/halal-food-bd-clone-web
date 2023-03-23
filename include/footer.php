<!-- ======================================= -->
<!-- ===== footer section ======= -->
<!-- ======================================= -->
<footer class="text-center text-lg-start text-white">
    <section>
        <div class="container-lg text-start">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">About</h6>
                    <p>
                        Halal food service foods that Muslims are allowed to eat or
                        drink under Islamic Law. We are trying to provide you 100% halal
                        food.
                    </p>
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">Company</h6>
                    <p>
                        <a href="#">About</a>
                    </p>
                    <p>
                        <a href="#">CEO Message</a>
                    </p>
                </div>

                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">Information</h6>
                    <p>
                        <a href="#">Wishlist</a>
                    </p>
                    <p>
                        <a href="#">Privacy Policy</a>
                    </p>
                    <p>
                        <a href="#">Refund & Returns</a>
                    </p>
                    <p>
                        <a href="#">Terms & Conditions</a>
                    </p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">Like us on Facebook</h6>
                    <div class="fb-page" data-href="https://www.facebook.com/webcoderashraf" data-width="250" data-hide-cover="false" data-show-facepile="false"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Copyright -->
    <div class="text-center copyright">
        2023 © Halal Food Service | Developed By
        <a class="text-reset fw-bold" href="https://github.com/ashrafuzzaman04">Ashraf Uzzaman</a>
    </div>
    <!-- Copyright -->
</footer>


<!-- jquery cdn -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

<!-- click to  zoom image jquery link -->
<script src="./assets/js/jquery.pan.js"></script>

<!-- boostrap link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

<!-- ionicons -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<!-- facebook page iframe js api link -->
<script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&amp;version=v2.5"></script>

<!-- box icons -->
<!-- <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script> -->

<!-- navbar js -->
<script src="./assets/js/navbar.js"></script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 40,
        freeMode: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        // Responsive breakpoints
        breakpoints: {
            // when window width is >= 0px
            0: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            // when window width is >= 320px
            320: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 3,
                spaceBetween: 20
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 4,
                spaceBetween: 40
            }
        }
    });
</script>

<!-- tooltip js -->
<script>
    const tooltipTriggerList = document.querySelectorAll(".tt");
    const tooltipList = [...tooltipTriggerList].map(
        (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
    );
</script>

<!-- preloader js/jquery -->
<script>
    // var loader = document.getElementById("preloader");

    // window.addEventListener("load", () => {
    //   loader.style.opacity = 0;
    //   loader.style.visibility = "hidden";
    // });

    $(window).on("load", function() {
        setTimeout(removeLoader, 1500); //wait for page load PLUS two seconds.
    });

    function removeLoader() {
        $("#preloader").fadeOut(500, function() {
            // fadeOut complete. Remove the loading div
            $("#preloader").remove(); //makes page more lightweight
        });
    }
</script>

<!-- click to iamge zoom jquery -->
<script>
    $(document).ready(function() {
        // $(".z-image").magnificPopup({ type: "image" });

        $(".z-image").pan();
    });
</script>
</body>

</html>