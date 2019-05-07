<?php

namespace App\Controller;

use App\Entity\Menu;
use App\Form\MenuType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="test")
     */
    public function index(Request $request)
    {
        $menu = new Menu();

        $form = $this->createForm(MenuType::class, $menu);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            dd($menu);
        }

        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
            'form' => $form->createView(),
        ]);
    }
}
