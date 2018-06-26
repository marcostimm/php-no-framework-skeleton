<?php

namespace App\Controllers\Auth;

use App\Controllers\Controller;
use App\Views\View;
use Doctrine\ORM\EntityManager;


class LoginController extends Controller
{

    protected $view;

    public function __construct(View $view)
    {
        $this->view = $view;
    }

    public function index($request, $response)
    {
        return $this->view->render($response, 'auth/login.twig');
    }

    public function sigin($request, $response)
    {
        $this->validate($request, [
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
    }
}