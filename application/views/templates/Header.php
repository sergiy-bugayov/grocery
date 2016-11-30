<!DOCTYPE html>
<html>
<head>
    <title><?=$title?></title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="<? echo $keywords; ?>" />
    <meta name="description" content="<? echo $description; ?>" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="/assets/stylesheets/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/assets/stylesheets/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/assets/stylesheets/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
    <script src="/assets/javascripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/assets/javascripts/move-top.js"></script>
    <script type="text/javascript" src="/assets/javascripts/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
</head>

<body>
<!-- header -->
<div class="agileits_header">
    <div class="w3l_offers">
        <a href="products">Спеціальні пропозиції !</a>
    </div>
    <div class="w3l_search">
        <form action="#" method="post">
            <input type="text" name="Product" value="Шукати продукт..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Шукати продукт...';}" required="">
            <input type="submit" value=" ">
        </form>
    </div>
    <div class="product_list_header">
        <form action="#" method="post" class="last">
            <fieldset>
                <input type="hidden" name="cmd" value="_cart" />
                <input type="hidden" name="display" value="1" />
                <input type="submit" name="submit" value="Відкрити кошик" class="button" />
            </fieldset>
        </form>
    </div>
    <div class="w3l_header_right">
        <ul>
            <li class="dropdown profile_details_drop">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
                <div class="mega-dropdown-menu">
                    <div class="w3ls_vegetables">
                        <ul class="dropdown-menu drp-mnu">
                            <li><a href="login.html">Ввійти</a></li>
                            <li><a href="login.html">Зареєструватись</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="w3l_header_right1">
        <h2><a href="mail.html">Контакти</a></h2>
    </div>
    <div class="clearfix"> </div>
</div>
<!-- script-for sticky-nav -->
<script>
    $(document).ready(function() {
        var navoffeset=$(".agileits_header").offset().top;
        $(window).scroll(function(){
            var scrollpos=$(window).scrollTop();
            if(scrollpos >=navoffeset){
                $(".agileits_header").addClass("fixed");
            }else{
                $(".agileits_header").removeClass("fixed");
            }
        });

    });
</script>
<!-- //script-for sticky-nav -->
<div class="logo_products">
    <div class="container">
        <div class="w3ls_logo_products_left">
            <h1><a href="/"><span>Grocery</span> Store</a></h1>
        </div>
        <div class="w3ls_logo_products_left1">
            <ul class="special_items">
                <li><a href="events">Події</a><i>/</i></li>
                <li><a href="about">Про нас</a><i>/</i></li>
                <li><a href="products">Спеціальні пропозиції</a><i>/</i></li>
                <li><a href="services.html">Сервіси</a></li>
            </ul>
        </div>
        <div class="w3ls_logo_products_left1">
            <ul class="phone_email">
                <li><i class="fa fa-phone" aria-hidden="true"></i>(+0123) 234 567</li>
                <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:store@grocery.com">store@grocery.com</a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //header -->