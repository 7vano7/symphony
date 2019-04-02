<?php
// src/Controller/LuckyController.php
namespace App\Controller;

//use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class MainController
 * @package App\Controller
 */

class MainController extends AbstractController
{
    /**
     * @return Response
     * @throws \Exception
     *
     */
    public function home()
    {
        $number = random_int(0, 100);

        return $this->render('home.html.twig', ['number'=>$number]);
    }
}