<?php

namespace App\Controller;

use App\Core\Controller;
use App\Core\Database;
use PDO;

class HomeController extends Controller
{
    public function index(): void
    {
        $db = new Database();

        $query = $db->prepare("SELECT * FROM user");
        $query->execute();

        $tableau = $query->fetchAll();

        print_r($tableau);


        $this->render('home', [
            'title' => 'Home', // $title = 'Home';
            'users' => $tableau
        ]);
    }

    public function contact(): void
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $email = $_POST["email"] ?? '';
            $subject = $_POST["subject"] ?? '';
            $message = $_POST["message"] ?? '';

            $db = new Database();

            $query = $db->prepare("INSERT INTO contact (email, subject, message) VALUES (:email, :subject, :message)");
            $query->execute([
                ':email' => $email,
                ':subject' => $subject,
                ':message' => $message
            ]);

            $this->redirect('/contact');
        }

        $this->render('contact', [
            'title' => 'Contact',
        ]);
    }
}
