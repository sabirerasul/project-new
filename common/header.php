<?php $pageName = basename($_SERVER['SCRIPT_NAME']) ?>
<header>
    <div class="header-area header-middle mediskin_header">
        <div class="container">
            <div class="row">
                <nav id="main-navigation-wrapper" class="navbar navbar-default header-middle">
                    <div class="container">
                        <div class="navbar-header">
                            <div class="logo-menu "><a href="./"><img src="assets/img/homepage4/site-logo.png" alt="logo"></a></div>
                            <button type="button" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false" class="navbar-toggle collapsed">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="col-xl-3 col-sm-12">
                            <div class="header-logo">
                                <a href="./"><img src="assets/img/homepage4/site-logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-sm-12">
                            <div id="main-navigation" class="collapse navbar-collapse justify-content-end">
                                <ul class="nav navbar-nav">
                                    <li><a href="./" class="<?= ($pageName == 'index.php') ? 'active' : '' ?>">Home</a></li>
                                    <li><a href="./about" class="<?= ($pageName == 'about.php') ? 'active' : '' ?>">About</a></li>
                                    <li><a href="./treatment" class="<?= ($pageName == 'treatment.php') ? 'active' : '' ?>">Treatment</a></li>
                                    <li><a href="./blog" class="<?= ($pageName == 'blog.php') ? 'active' : '' ?>">Blog</a></li>
                                    <li><a href="./contact" class="<?= ($pageName == 'contact.php') ? 'active' : '' ?>">Contact us</a></li>


                                    <!-- <li><a href="#" class="<?= ($pageName == 'index.php') ? 'active' : '' ?>">Home</a></li>
                                    <li><a href="#" class="<?= ($pageName == 'about.php') ? 'active' : '' ?>">About</a></li>
                                    <li><a href="#" class="<?= ($pageName == 'procedure.php') ? 'active' : '' ?>">Procedure</a></li>
                                    <li><a href="#" class="<?= ($pageName == 'blog.php') ? 'active' : '' ?>">Blog</a></li>
                                    <li><a href="#" class="<?= ($pageName == 'contact.php') ? 'active' : '' ?>">Contact us</a></li> -->

                                    <!-- <li class="ccdda toggle"><a href="javascript:void(0)"><i class="far fa-search"></i></a></li> -->
                                    <!-- <li><a href="#"><i class="fas fa-cart-plus"></i></a></li> -->
                                </ul>
                                <!-- <ul class="searchh">
                                    <li class="ccfdf">
                                        <form class="searched">
                                            <input type="text" placeholder="Type here...">
                                            <button class="ssdf" type="submit">Search</button>
                                        </form>
                                    </li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>