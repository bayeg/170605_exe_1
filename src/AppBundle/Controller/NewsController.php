<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\News;

class NewsController extends Controller{
    
    /**
     * @Route("/news/new", name="nouvelleNews")
     */
    
//    public function newAction(){
//        $new = new News();
//        $new->setTitre("Mon titre ".rand(1,999));
//        $new->setSousTitre("Sous-titre ".rand(1,999));
//        $new->setTexte("Texte ".rand(1,999)." et puis texte ".rand(1,999));
//        
//        $em = $this->getDoctrine()->getManager();
//        $em->persist($new);
//        $em->flush();
//        
//        return new Response("<html><body>Nouvelle news créée</body></html>");
//    }

    /**
     * @Route("/", name="home")
     */
    public function homeAction() {
        $em = $this->getDoctrine()->getManager();
        $news = $em->getRepository("AppBundle:News")
                ->findAll();
        
        return $this->render('news/home.html.twig', [
            "news" => $news,
        ]);
    }

    /**
     * @Route("/news/{id}", name="news_detail")
     */
    public function newsDetail($id) {
        $em = $this->getDoctrine()->getManager();
        $new = $em->getRepository("AppBundle:News")
               ->findOneById($id);
        
       return $this->render('news/newsDetail.html.twig'
        , [
            "new" => $new,
        ]
        );
    }

}
