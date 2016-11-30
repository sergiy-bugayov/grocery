<!-- banner -->
<section class="slider">
    <div class="flexslider">
        <ul class="slides">
            <li>
                <div class="w3l_banner_nav_right_banner">
                    <h3>Готуй свою <span>їжу</span> зі спеціями.</h3>
                    <div class="more">
                        <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Придбати">Придбати</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="w3l_banner_nav_right_banner1">
                    <h3>Готуй свою <span>їжу</span> зі спеціями.</h3>
                    <div class="more">
                        <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Придбати">Придбати</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="w3l_banner_nav_right_banner2">
                    <h3>Знижка до <i>50%</i></h3>
                    <div class="more">
                        <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Придбати">Придбати</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- flexSlider -->
<link rel="stylesheet" href="/assets/stylesheets/flexslider.css" type="text/css" media="screen" property="" />
<script defer src="/assets/javascripts/jquery.flexslider.js"></script>
<script type="text/javascript">
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!-- //flexSlider -->
<!-- //banner -->


