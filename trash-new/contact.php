<!DOCTYPE html>
<html lang="en">

<head>
    <title>Conact | Skin World Kanpur</title>
    <?php include('./common/head.php') ?>

    <link rel="stylesheet" href="./skinpost/sweetalert2.min.css">
</head>

<body>
    <!--=========header start============-->
    <?php include('./common/header.php') ?>
    <!--=========header end============-->

    <!-- hero-about-area start -->
    <!-- <div class="hero-about-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-about-text text-center">
                        <h2>Contact us</h2>
                        <h4><span>Home / Service / </span><a href="#">Contact us</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- hero-about-area End -->

    <!--contuct-area-start-->
    <div class="contuct-area">
        <div class="container">
            <div class="row">
                <?= breadcrumb('Contact Us', 12) ?>

                <div class="col-lg-9">
                    <div class="blog-form-area">
                        <form action="./skinpost/send_mail.php" method="post" id="second_form">
                            <h3>Get In touch for any kind of Information</h3>

                            <div class="form-style">
                                <input type="text" name="skin[name]" placeholder="Name" id="name">
                                <div class="errorM"></div>
                            </div>

                            <div class="form-style">
                                <input type="email" name="skin[email]" placeholder="Email" id="email">
                                <div class="errorM"></div>
                            </div>

                            <div class="form-style">
                                <input type="number" name="skin[mobile]" placeholder="Mobile Number" id="mobile">
                                <div class="errorM"></div>
                            </div>

                            <div class="form-style">
                                <textarea name="skin[message]" cols="30" rows="10" placeholder="Message" id="message"></textarea>
                                <div class="errorM"></div>
                            </div>


                            <div class="form-style">
                                <div class="alert contact__msg1 alert-message"></div>
                            </div>


                            <button class="team-1" type="submit">Submit Now!</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contect-location">
                        <div class="contact-fl">
                            <address>
                                <div class="single-contact">
                                    <i class="icofont-map-pins"></i>
                                    <p>
                                        P. No. 117/379/H-1, <br>Asthana Market Near Agra Sweet House Kakadeo Kanpur, U.P. - 208025
                                    </p>
                                </div>
                                <div class="single-contact">
                                    <i class="icofont-envelope"></i>
                                    <p><a href="mailto:skinworldkanpur@gmail.com">
                                            skinworldkanpur@gmail.com</a>
                                        <!-- <br><a href="mailto:info@medics.com">info@medics.com</a> -->
                                    </p>
                                </div>
                                <div class="single-contact">
                                    <i class="icofont-mobile-phone"></i>
                                    <p>
                                        <a href="tel:+91-99369-59955">+91-99369-59955</a><br>
                                        <a href="tel:+91-99563-59950">+91-99563-59950</a>
                                    </p>
                                </div>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--contuct-area-end-->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7142.495546824237!2d80.30802657770997!3d26.479965999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c394868940d99%3A0xd9ed32d416b721a4!2sSkin%20World%20Clinic!5e0!3m2!1sen!2sus!4v1695457860428!5m2!1sen!2sus" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="google-map__contact"></iframe>
    <!-- <iframe src="" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
    <!-- footer-area-start-->
    <?php include('./common/footer.php') ?>
    <!-- footer-area-end -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include('./common/script.php') ?>

    <script src="./skinpost/sweetalert2.all.min.js"></script>
    <script src="./skinpost/validation.js"></script>
    <script src="./skinpost/mail-script.js"></script>
    <link rel="stylesheet" href="./skinpost/style.css">

    <style>
        .form-style {
            position: relative;
        }
    </style>

</body>

</html>