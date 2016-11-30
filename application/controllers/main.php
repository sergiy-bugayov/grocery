<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'Grocery Store',
            'keywords' => 'Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design',
            'description' => 'Grocery Store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template',
            'view' => 'mainpage/MainpageView',
            'additionalViews' => array("mainpage/MainpageBottomBanner",
                                        "mainpage/TopBrands",
                                        "mainpage/FreshVegetables")
        );

        $this->load->view('MainTemplate', $data);
    }

    public function about() {
        $data = array(
            'title' => 'Grocery Store | Про нас',
            'keywords' => 'Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design',
            'description' => 'Grocery Store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template',
            'view' => 'about/AboutView',
            'navigation' => 'Про нас',
            'additionalViews' => array("about/TeamView", "about/TestimonialsView")
        );

        $this->load->view('MainTemplate', $data);
    }

    public function events() {
        $data = array(
            'title' => 'Grocery Store | Події',
            'keywords' => 'Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design',
            'description' => 'Grocery Store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template',
            'view' => 'EventsView',
            'navigation' => 'Події'
        );

        $this->load->view('MainTemplate', $data);
    }
}
