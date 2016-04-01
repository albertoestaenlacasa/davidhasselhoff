<?php

namespace My\RecipesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class TransController extends Controller
{

    public function indexAction()
    {
        $_locale = $this->get('session')->get('_locale');

        return $this -> render('MyRecipesBundle:Trans:index.html.twig', array('_locale' => $_locale ) );

    }

    public function changeLangAction($lang)
    {

        $this->get('session')->set('_locale', $lang);
        $this->getRequest()->setlocale($lang);

        return $this->redirectToRoute('prueba_trans');
   }

}
