<?php

class Login extends Controller
{
    private $data = [];
    private $loginModel;
    private $formData = [];
    public function __construct()
    {
        // Initialize any required models or data here
        $this->loginModel = $this->model('User');
    }

    public function index()
    {
        $this->formData = filteration($_POST);
        // Check if the user is already logged in
        if (isLoggedInUser()) {
            redirect('admin'); // Redirect to admin dashboard if logged in
        }
        // If the request method is POST, handle the login logic
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // Initialize data array
            $this->data = [
                'email' => $this->formData['email'] ?? '',
                'password' => $this->formData['password'] ?? '',
            ];

            // Validate inputs
            if (empty($this->data['email'])) {
                alert('Error', 'Please, enter your email', 'danger');
            }
            if (empty($this->data['password'])) {
                alert('Error', 'Please, enter your password', 'danger');
            } else {
                // Attempt to log in the user
                if ($this->loginModel->login($this->formData['email'], $this->formData['password'])) {
                    redirect('admin'); // Redirect to admin dashboard on success
                } else {
                    alert('Error', 'Invalid email or password', 'danger');
                }
            }
        }

        $this->data = [
            'title' => 'Login',
            'description' => 'Please, login to access your account',
        ];

        $this->view('login', $this->data);
    }
}
