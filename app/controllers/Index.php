<?php

class Index extends Controller
{
    private $data = [];
    private $userModel;
    private $commonModel;

    public function __construct()
    {
        // You can initialize any models or libraries here if needed
        $this->userModel = $this->model('User');
        $this->commonModel = $this->model('common');
        $this->function('Functions');
    }

    public function index()
    {

        $getHero = $this->commonModel->select("SELECT * FROM `settings`");
        foreach ($getHero as $hero)
            $this->data = [
                'title' => 'Core PHP-MVC-Framework',
                'description' => 'A simple open source PHP-MVC-Framework',
                'hero_title' => $hero->hero_title,
                'hero_subtitle' => $hero->hero_subtitle
            ];

        $this->view('index', $this->data);
    }
}
