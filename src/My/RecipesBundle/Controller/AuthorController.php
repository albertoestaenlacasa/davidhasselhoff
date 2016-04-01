<?php

namespace My\RecipesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use My\RecipesBundle\Entity\Author;


class AuthorController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyRecipesBundle:Default:index.html.twig');
    }


    // formularios
    public function createAction(Request $request)
    {
        $author = new Author();

        $form = $this->createFormBuilder($author)
            ->add('name', 'text', array('label' => 'Nombre'))
            ->add('surname','text')
            ->add('save', 'submit')
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()){
            $em = $this -> getDoctrine() -> getManager();
            $em -> persist($author);
            $em -> Flush();

            return $this -> redirect($this->generateUrl('my_author_0'));
        }


        return $this -> render('MyRecipesBundle:Author:create.html.twig', array('form' => $form->createView()));

        // esto hace lo mimo porque apunta aparentemente al mismo fichero create.html.twig porque entiendo que tiene el mismo nombre de funcion o no, a saber
        //    return array('form' => $form->createView());
        //

    }



    public function showAuthorsAction()
    {
        $autores = $this -> getDoctrine() -> getRepository("MyRecipesBundle:Author");
        $autores = $autores -> findAll();

        return $this -> render('MyRecipesBundle:Author:showAuthors.html.twig', array('authores' => $autores));

    }
}
