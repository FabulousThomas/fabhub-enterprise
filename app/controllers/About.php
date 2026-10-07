<?php 

class About extends Controller {
    private $data = [];

    public function __construct() {
        // You can initialize any models or libraries here if needed
    }

    public function index() {
        $this->data = [
            'title' => 'About Us',
            'description' => '',
        ];

        $this->view('about', $this->data);
    }
}