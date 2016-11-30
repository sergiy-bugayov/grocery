<?php
    include "templates/Header.php";
    if(isset($navigation)) {
        include "templates/TopNavBar.php";
    };
?>

<!-- banner -->
<div class="banner">
    <div class="w3l_banner_nav_left">
        <nav class="navbar nav_bottom">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header nav_2">
                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <ul class="nav navbar-nav nav_1">
                    <li><a href="products.html">Брендові товари</a></li>
                    <li><a href="household.html">Товари для дому</a></li>
                    <li class="dropdown mega-dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Овочі та фрукти<span class="caret"></span></a>
                        <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                            <div class="w3ls_vegetables">
                                <ul>
                                    <li><a href="vegetables.html">Овочі</a></li>
                                    <li><a href="vegetables.html">Фрукт</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="kitchen.html">Кухня</a></li>
                    <!--li><a href="short-codes.html">Короткие коды</a></li-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Напої<span class="caret"></span></a>
                        <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                            <div class="w3ls_vegetables">
                                <ul>
                                    <li><a href="drinks.html">Безалкогольні</a></li>
                                    <li><a href="drinks.html">Соки</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="pet.html">Корм для тварин</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Заморожена їжа<span class="caret"></span></a>
                        <div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
                            <div class="w3ls_vegetables">
                                <ul>
                                    <li><a href="frozen.html">Закуски</a></li>
                                    <li><a href="frozen.html">Не вегетаріанська їжа</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="bread.html">Хліб і випічка</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>
    <div class="w3l_banner_nav_right">
        <?php include $view.".php"; ?>
    </div>
    <div class="clearfix"></div>
</div>
<!-- //banner -->

<?php
    if(isset($additionalViews)) {
        foreach ($additionalViews as $additionalView) {
            include $additionalView.".php";
        }
    }
    include "templates/Footer.php";
?>



