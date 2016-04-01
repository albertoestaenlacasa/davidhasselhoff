<?php

namespace DHBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use DHBundle\Entity\Noticias;


class DefaultController extends Controller
{

    public function changeLangAction($lang)
    {
        $this->get('session')->set('_locale', $lang);
        $this->getRequest()->setlocale($lang);

        return $this->redirectToRoute('dh_homepage');
   }


    public function indexAction()
    {
        return $this->render('DHBundle:Default:index.html.twig');
    }

    public function newsAction()
    {
        $noticias = $this -> getDoctrine() -> getRepository("DHBundle:Noticias");
        $noticias = $noticias -> findAll();

        return $this->render('DHBundle:Default:news.html.twig', array('noticias' => $noticias));    	
    }

    public function fullnewAction($id)
    {
        $noticia = $this -> getDoctrine() -> getRepository("DHBundle:Noticias");
        $noticia = $noticia -> find($id);

        return $this->render('DHBundle:Default:fullnew.html.twig', array('noticia' => $noticia));    	
    }

}
