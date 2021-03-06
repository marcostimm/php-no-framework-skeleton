<?php

namespace App\Controllers;

use App\Views\View;
use Doctrine\ORM\EntityManager;


class HomeController
{

    protected $view;

    public function __construct(View $view)
    {
        $this->view = $view;
    }

    public function index($request, $response)
    {
        return $this->view->render($response, 'home.twig');
    }
}