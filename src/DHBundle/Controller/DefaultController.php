<?php

namespace DHBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
// entidades
use DHBundle\Entity\Noticias;
use DHBundle\Entity\Musica;
use DHBundle\Entity\Peliculas;
use DHBundle\Entity\Galeria;


class DefaultController extends Controller
{

    public function indexAction()
    {
        //registro en el log el proceso 
        $logger = $this->get('logger');
        $logger->info('Página home');

        return $this->render('DHBundle:Default:index.html.twig');
    }

    // NOTICIAS
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

    // MUSICA
    public function musicAction()
    {

        $musicas = $this -> getDoctrine() -> getRepository("DHBundle:Musica");
        $musicas = $musicas -> findAll();

        return $this->render('DHBundle:Default:music.html.twig', array('musicas' => $musicas ));     
    }

    public function fullmusicAction($id)
    {
        $musica = $this -> getDoctrine() -> getRepository("DHBundle:Musica");
        $musica = $musica -> find($id);

        return $this->render('DHBundle:Default:fullmusic.html.twig', array('musica' => $musica ));     
    }

    // PELICULAS
    public function moviesAction()
    {

        $peliculas = $this -> getDoctrine() -> getRepository("DHBundle:Peliculas");
        $peliculas = $peliculas -> findAll();

        return $this->render('DHBundle:Default:movies.html.twig', array('peliculas' => $peliculas ));     
    }

    public function fullmovieAction($id)
    {
        $pelicula = $this -> getDoctrine() -> getRepository("DHBundle:Peliculas");
        $pelicula = $pelicula -> find($id);

        return $this->render('DHBundle:Default:fullmovie.html.twig', array('pelicula' => $pelicula ));     
    }


    // GALERIA
    public function galeryAction()
    {
        $galeria = $this -> getDoctrine() -> getRepository("DHBundle:Galeria");
        $galeria = $galeria -> findAll();

        return $this->render('DHBundle:Default:galery.html.twig', array('galeria' => $galeria ));     
    }

    // GESION DE IDIOIMA
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
