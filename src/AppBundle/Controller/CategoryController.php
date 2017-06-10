<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CategoryController extends Controller
{
    /**
     * @Route("/categories", name="categoriesList")
     */
    public function categoriesListAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories= $em->getRepository("AppBundle:Category")
                ->findAll();
        return $this->render('Category\categoriesList.html.twig', [
            "c" => $categories            
        ]);
    }

    /**
     * @Route("/category/{id}", name="categoryDetail")
     */
    public function categoryDetailAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository("AppBundle:Category")
                ->findOneBy(["id" => $id]);
        return $this->render('Category\categoryDetail.html.twig',[
            "c" => $category
        ]
            
        );
    }

}
