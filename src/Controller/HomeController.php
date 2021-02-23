<?php

namespace App\Controller;

use App\Entity\Bar;
use App\Entity\Foo;
use App\Form\FooType;
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
        $em = $this->getDoctrine()->getManager();

        $foo = new Foo();
        for ($i = 0; $i < 3; $i++) {
            $bar = new Bar();
            $foo->addBar($bar);
            $em->persist($bar);
        }

        $form = $this->createForm(FooType::class, $foo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($foo);
            $em->flush();
            return $this->redirectToRoute('home');
        }

        return $this->render('home/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
