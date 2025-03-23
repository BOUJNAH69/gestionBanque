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
            echo "Connexion réussie avec l'utilisateur : " . $username;
            header('Location: http://localhost/gestionBanque/index.php');
            exit(); // On stoppe tout pour voir si ça passe ici
        } else {
            echo "Identifiants incorrects.";
            $this->index();
        }
    }
    

    public function disconnect() {
        session_destroy();
        header('Location: http://localhost/gestionBanque/index.php?page=login');
    }
}