<?php

namespace App\Controller;

use App\Entity\UserNumber;
use App\Form\UserNumberType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(Request $request): Response
    {
        $gain = null;
        $randomNumberHidden = rand(1, 5);
        $randomNumber = null;
        $userNumber = new UserNumber();
        $notification = "";
        $num = null;
        $form = $this->createForm(UserNumberType::class,$userNumber);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $randomNumber = $randomNumberHidden;
            $userNumber = $form->getData();
            $num =  $userNumber->getNumber();
            if ($num == $randomNumber) {
                $notification = "You win !";
                $gain = 'A link to my Portfolio';
            } else {
                $notification = "You loose...";
            }
        }
        return $this->render('home/index.html.twig', [
            'randomNumber' => $randomNumber,
            'form' => $form->createView(),
            'notification' => $notification,
            'num' => $num,
            'gain' => $gain
        ]);
    }
}
