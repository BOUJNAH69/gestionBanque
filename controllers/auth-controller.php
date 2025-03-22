<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../dao/adminDao.php';

class AuthController {
    private $adminDao;

    public function __construct() {
        $this->adminDao = new AdminDao();
    }

    public function index() {
        require_once __DIR__ . '/../views/login.php';
    }

    public function connect($username, $password) {
        $admin = $this->adminDao->getAdminByUsername($username);

        if ($admin && $admin['mot_de_passe'] === $password) { 
            $_SESSION['username'] = $username;
            header('Location: /gestion-bancaire/index.php');
            exit();
        } else {
            echo "Identifiants incorrects.";
            $this->index();
        }
    }

    public function disconnect() {
        session_destroy();
        header('Location: /gestion-bancaire/index.php?page=login');
    }
}

