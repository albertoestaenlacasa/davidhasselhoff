<?php

namespace DHBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use DHBundle\Entity\Noticias;


class DefaultController extends Controller
{

    public function indexAction()
    {
        //registro en el log el proceso 
        $logger = $this->get('logger');
        $logger->info('Página home');

        return $this->render('DHBundle:Default:index.html.twig');
    }

    public function newsAction()
    {
        //registro en el log el proceso 
        $logger = $this->get('logger');
        $logger->info('Mostramos la lista de noticias');

        return $this->render('DHBundle:Default:news.html.twig', array('noticias' => $this->get('dh.allNews')->findAll() ));    	
    }

    public function fullnewAction($id)
    {
        //registro en el log el proceso 
        $logger = $this->get('logger');
        $logger->info('Información de noticia detallada');

        // se pasa al servicio 
        //$noticia = $this -> getDoctrine() -> getRepository("DHBundle:Noticias");
        //$noticia = $noticia -> find($id);

        return $this->render('DHBundle:Default:fullnew.html.twig', array('noticia' => $this->get('dh.theNew')->findNew($id) ));    	
    }

    public function changeLangAction($lang, Request $request)
    {
        $this->get('session')->set('_locale', $lang);
        $request->setlocale($lang);

        //registro en el log el proceso 
        $logger = $this->get('logger');
        $logger->info('Cambiado idioma a '.$lang);

        return $this->redirectToRoute('dh_homepage');
   }



}
