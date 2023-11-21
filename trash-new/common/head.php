<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="icon" href="assets/img/site-logo.png" sizes="32x32" />
<link rel="icon" href="assets/img/site-logo.png" sizes="192x192" />
<link rel="apple-touch-icon" href="assets/img/site-logo.png" />
<meta name="msapplication-TileImage" content="assets/img/site-logo.png" />

<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/all.min.css" rel="stylesheet">
<link href="assets/css/icofont.min.css" rel="stylesheet">
<link href="assets/css/owl.carousel.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/magnific-popup.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11158206327">
</script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-11158206327');
</script>


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-N877LN2LGX"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-N877LN2LGX');
</script>


<?php
function breadcrumb($title = '', $size = 9)
{
    $externalLink = ($title != 'Blog' && $title != 'Contact Us' && $title != 'Treatment' && $title != 'About') ? '<li class="breadcrumb-item"><a href="./blog">Blog</a></li>' : '';
    $html = <<<EOT
        <div class="col-lg-{$size} mx-auto">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    {$externalLink}
                    <li class="breadcrumb-item active" aria-current="page">{$title}</li>
                </ol>
            </nav>
        </div>
    EOT;

    return $html;
}
?>