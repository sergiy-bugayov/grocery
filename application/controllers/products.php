<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

    public function index()
    {
        $data = array(
            'title' => 'Grocery Store | Спеціальні пропозиції',
            'keywords' => 'Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design',
            'description' => 'Grocery Store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template',
            'view' => 'ProductView',
            'navigation' => 'Спеціальні пропозиції'
        );

        $this->load->view('MainTemplate', $data);
    }

}
