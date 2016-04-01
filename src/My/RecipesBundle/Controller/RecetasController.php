<?php

namespace My\RecipesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use My\RecipesBundle\Entity\prueba1;


class RecetasController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyRecipesBundle:Default:index.html.twig');
    }

    public function unoAction()
    {
    	return new Response("<html><body style='background-color:yellow'><h1>Esta es la página UNO 1</h1></body></html>");
    }

    public function dosAction($para)
    {
    	return new Response("<html><body style='background-color:lightgreen'><h1>Esta es la página DOS 2: <br> Parametro = "  .$para ." </h1></body></html>");
    }


    //parte del Doctine, bases de datos y eso

    public function create1Action()
    {
        $receta = new prueba1();
        $receta -> setName("Pollo al Albert");
        $receta -> setDifficulty("facil");
        $receta -> setDescription("Este pollo es un clasico de la mansión. Se hace en el horno y esta muy bunoe con patatitas");

        $em = $this -> getDoctrine() -> getManager();
        $em -> persist($receta);
        $em -> flush();

        return new Response("<html><body style='background-color:red'><h1>Receta creada</h1></body></html>");
    }

    public function create2Action($nombre, $dificultad, $descripcion)
    {
        $receta = new prueba1();
        $receta -> setName($nombre);
        $receta -> setDifficulty($dificultad);
        $receta -> setDescription($descripcion);

        $em = $this -> getDoctrine() -> getManager();
        $em -> persist($receta);
        $em -> flush();

        return new Response("<html><body style='background-color:orange'><h1>Receta creada</h1><br><br>" .$nombre. "<br>" .$descripcion. "<br>" .$dificultad. "</body></html>");
    }


    public function show1Action($id)
    {
        $repository = $this->getDoctrine()->getRepository("MyRecipesBundle:prueba1");
        $receta = $repository->find($id);

        return new Response("<html><body style='background-color:purple'><h1>Receta " .$id. "</h1><br>" .$receta->getName(). "</body></html>");
    }

    public function showAllAction()
    {
        $recetas = $this -> getDoctrine() -> getRepository("MyRecipesBundle:prueba1");
        $recetas = $recetas -> findAll();

        return $this -> render('MyRecipesBundle:Default:showAll.html.twig', array('recetas' => $recetas));

    }
}
