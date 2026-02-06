<?php

namespace App\Controller;

use App\Core\Controller;
use App\Core\Database;
use App\Repository\UserRepository;

class HomeController extends Controller
{
    public function index(): void
    {
        $userRepository = new UserRepository();
        $users = $userRepository->findAll();

        $this->render('home', [
            'title' => 'Home', // $title = 'Home';
            'users' => $users
        ]);
    }
}


