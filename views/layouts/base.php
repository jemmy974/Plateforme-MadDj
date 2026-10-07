<!DOCTYPE html>
<!-- <html data-bs-theme="light"> -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>MadDJ</title>
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Button-Change-Text-on-Hover.css">
    <link rel="stylesheet" href="assets/css/Profile-Card.css">
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="assets/css/Advanced-Pricing-Cards.css">

    <link href="assets/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="assets/css/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/Calendar-BS4-news.css">
    <link rel="stylesheet" href="assets/css/Calendar-BS4.css">
    <link rel="stylesheet" href="assets/css/Login-Red.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form-1.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/OcOrato---Login-form.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="assets/fonts/bootstrap-icons.woff">
    <link rel="preconnect" href="assets/fonts/bootstrap-icons.woff2">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/Team-Grid.css">
    <link rel="stylesheet" href="assets/css/dist.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link rel="stylesheet" href="assets/css/video.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/Features-Large-Icons-icons.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/WOWSlider-about-us-1.css">
    <link rel="stylesheet" href="assets/css/WOWSlider-about-us-2.css">
    <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/css/WOWSlider-about-us-1.css" rel="stylesheet">
    <link href="assets/css/templatemo-festava-live.css" rel="stylesheet">


    <?php
    if (isset($css)) : ?>
        <link rel="stylesheet" href="<?= $css ?>">
    <?php endif ?>
    <?php
    if (isset($js)) : ?>
        <script src="<?= $js ?>"></script>
    <?php endif ?>

</head>



<body style="background-color: white;">

    <!-- Navbar -->

    <?php
    if (isset($navbar)) {
        require $navbar;
    }
    ?>
    <!--end Navbar -->
    <!-- body -->
    <?php
    if (isset($body)) {

        require $body;
    }

    ?>
    <!--end body -->
    <!-- footer -->
    <?php
    if (isset($footer)) {

        require $footer;
    }

    ?>
    <!--end footer -->





    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/click-scroll.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/profile-Edit-Form.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/daterangepicker.js"></script>


    <script>
        AOS.init();
    </script>

</body>



</html>