<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
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
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */