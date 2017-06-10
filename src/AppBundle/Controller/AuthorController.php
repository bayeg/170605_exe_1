<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AuthorController extends Controller
{
    /**
     * @Route("/authors", name="authorsList")
     */
    public function authorsListAction()
    {   
        $em = $this->getDoctrine()->getManager();
        $authors = $em->getRepository('AppBundle:Author')
                ->findAll();
//        dump($authors);die;
        return $this->render('Author/authorsList.html.twig', [
            "authors" => $authors
        ]);
    }

    /**
     * @Route("/author/{id}", name="authorDetail")
     */
    public function authorDetailAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $author = $em->getRepository("AppBundle:Author")
                ->find($id);
        
        return $this->render('Author/authorDetail.html.twig', [
            "a" => $author            
            ]);
    }

}
