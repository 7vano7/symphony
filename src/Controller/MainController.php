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

    public function about()
    {
        return $this->render('about.html.twig', ['number'=>'']);
    }

    public function factory()
    {
        return $this->render('factory.html.twig', ['number'=>'']);
    }

    public function production()
    {
        return $this->render('production.html.twig', ['number'=>'']);
    }

    public function dostavka()
    {
        return $this->render('dostavka.html.twig', ['number'=>'']);
    }

    public function contacts()
    {
        return $this->render('contacts.html.twig', ['number'=>'']);
    }
}