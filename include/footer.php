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

<!-- login modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4 pt-0">
                <ul class="nav nav-pills mb-md-4 mb-3 justify-content-center align-items-center" id="start-user" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="sign-in-tab" data-bs-toggle="pill" data-bs-target="#sign-in" type="button" role="tab" aria-controls="sign-in" aria-selected="true">Sign In</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="register-tab" data-bs-toggle="pill" data-bs-target="#register" type="button" role="tab" aria-controls="register" aria-selected="false">Register</button>
                    </li>
                </ul>
                <div class="tab-content" id="start-userContent">
                    <div class="tab-pane fade show active" id="sign-in" role="tabpanel" aria-labelledby="sign-in-tab" tabindex="0">
                        <form action="">
                            <div>
                                <label class="d-block" for="login_email"><span>Email address *</span></label>
                                <input id="login_email" type="email" name="Uname_email">
                            </div>
                            <div>
                                <label class="d-block" for="login_pass"><span>Password *</span></label>
                                <input id="login_pass" type="password" name="log_pass">
                            </div>
                            <div>
                                <input id="remember_me" type="checkbox" name="remember_check">
                                <label class="remember" for="remember_me"><span>Remember me</span></label>
                            </div>
                            <div>
                                <button type="button">LOG IN</button>
                            </div>
                            <div>
                                <a href="javascript:void(0)"><span>Lost your password?</span></a>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab" tabindex="0">
                        <form action="">
                            <div class="col-12">
                                <label class="d-block" for="regi_name"><span>Name *</span></label>
                                <input id="regi_name" type="text" name="reg_name">
                            </div>
                            <div>
                                <label class="d-block" for="regi_mobile"><span>Mobile *</span></label>
                                <input id="regi_mobile" type="text" name="reg_mobile">
                            </div>
                            <div>
                                <label class="d-block" for="regi_email"><span>Email *</span></label>
                                <input id="regi_email" type="email" name="reg_email">
                            </div>
                            <div>
                                <label class="d-block" for="regi_pass"><span>Password *</span></label>
                                <input id="regi_pass" type="password" name="reg_pass">
                            </div>
                            <div>
                                <span>Gender *</span>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Female
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        Others
                                    </label>
                                </div>
                            </div>
                            <div class="my-3">
                                <button type="button">Register</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
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


<!-- jquery cdn -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- click to  zoom image jquery link -->
<script src="./assets/js/jquery.pan.js?<?php echo time(); ?>"></script>

<!-- Roughly all script js -->
<script src="./assets/js/script.js?<?php echo time(); ?>"></script>

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
<script src="./assets/js/navbar.js?<?php echo time(); ?>"></script>

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