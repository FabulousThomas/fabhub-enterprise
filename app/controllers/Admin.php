<?php
class Admin extends Controller
{
    private $data = [];
    private $commonModel;
    private $formData;
    public function __construct()
    {
        // Check if user is admin
        ifNot(isAdmin(), 'users/login');

        $this->commonModel = $this->model("Common");
    }

    public function index()
    {
        $this->data = [
            'title' => "Dashboard",
            'getInquiry' => $this->commonModel->select("SELECT * FROM `inquiry` ORDER BY `id` DESC"),
        ];

        $this->view("admin/index", $this->data);
    }

    public function login()
    {
        $this->view("admin/login", [
            "title" => "Admin Login",
            "description" => "Please, login to access the admin panel"
        ]);
    }

    public function settings()
    {
        $this->formData = filteration($_POST);
        $getHero = $this->commonModel->select("SELECT * FROM `settings`");
        foreach($getHero as $hero)
        $this->data = [
            'title' => 'Site Settings',
            'heroTitle' => $this->formData['heroTitle'] ?? '',
            'heroSubtitle' => $this->formData['heroSubtitle'] ?? '',
            'getTitle' => $hero->hero_title,
            'getSubTitle' => $hero->hero_subtitle,
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Handle form submission
            if (isset($_POST['btn-update-hero'])) {
                // Update hero section
                // $updateQuery = "UPDATE `settings` SET `value` = :value, `updated_at` = NOW() WHERE `key` = :key";
                $updateQuery = "UPDATE `settings` SET `hero_title` = :hero_title, `hero_subtitle` = :hero_subtitle, `updated_at` = NOW()";
                $params = [
                    'hero_title' => $this->data['heroTitle'],
                    'hero_subtitle' => $this->data['heroSubtitle'],
                    // 'group' => 'general'
                ];
                $this->commonModel->update($updateQuery, $params);
            }
        }

        $this->view("admin/settings", $this->data);
    }
}
