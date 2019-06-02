<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        $books = [
            'Livre 1',
            'Livre 2',
            'Livre 3',
            'Livre 4',
            'Livre 5',
        ];

        return $this->render('home.html.twig', [
            'books' => $books
        ]);
    }

    /**
     * @Route("/{title}", name="show")
     */
    public function show($title)
    {
        return $this->render('show.html.twig', [
            'title' => $title
        ]);
    }

    /**
     * @Route("/symfony/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('contact.html.twig');
    }


}