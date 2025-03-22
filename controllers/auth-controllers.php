<?php
require_once 'app/dao/AdminDAO.php';

class AuthController {
    public function login() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $adminDAO = new AdminDAO();
            $admin = $adminDAO->getAdminByEmail($email);

            if ($admin && password_verify($password, $admin->getMotDePasse())) {
                $_SESSION['admin'] = $admin->getId();
                header("Location: index.php?controller=client&action=list");
                exit();
            } else {
                $error = "Identifiants incorrects";
            }
        }
        require 'app/views/auth/login.php';
    }

    public function logout() {
        session_destroy();
        header("Location: index.php?controller=auth&action=login");
        exit();
    }
}

