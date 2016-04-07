<?php

namespace DHBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use DHBundle\Entity\Noticias;

use Symfony\Component\Security\Core\SecurityContext;

// para mostrar en pantalla sin pagina
use Symfony\Component\HttpFoundation\Response;


class AdminController extends Controller
{

    public function indexAction()
    {
        return $this->render('DHBundle:Admin:index.html.twig');
    }

    public function loginAction(Request $request)
    {
        $session = $request->getSession();
 
        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                SecurityContext::AUTHENTICATION_ERROR
            );
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
 
        return $this->render(
            'DHBundle:Admin:login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                'error'         => $error,
            )
        );
    }

    // ADMINISTRAR NOTICIAS
    public function newsAction()
    {
        // ya no usamos esto porque ahora hay un servicio que se encarga de este tema
        //$noticias = $this -> getDoctrine() -> getRepository("DHBundle:Noticias");
        //$noticias = $noticias -> findAll();

        return $this->render('DHBundle:Admin:news.html.twig', array('noticias' => $this->get('dh.allNews')->findAll() ));        
    }

    public function deleteNewAction()
    {       
        //recibir formulario
        $form = Request::createFromGlobals();
        $new_id = $form->request->get('new_id');

        // pasado al servicio
        //$new = $this -> getDoctrine() -> getRepository('DHBundle:Noticias') ->find($new_id);            
        $new = $this->get('dh.theNew')->findNew($new_id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($new);
        $em->flush();
 
       return $this->redirect($this->generateUrl('dh_admin_news'));
    }

    public function createNewAction(Request $request)
    {   
        // crear un objeto $Noticias nuevo
        $new = new Noticias();
     
        $form = $this->createFormBuilder($new)
            ->add('titulo', 'text', array('attr' => array('style' => 'width: 500px') ))
            ->add('descripcion', 'textarea', array('attr' => array('class' => 'textarea')))
            ->add('urlImg', 'text', array('attr' => array('style' => 'width: 500px') ))
            ->add('fecha', 'date', array('widget' => 'single_text', 'label' => 'Fecha ', 'data' => new \DateTime('now')  ))
            ->add('save', 'submit', array('label' => '**Aceptar**', 'attr' => array('class' => 'boton') ))
            ->getForm();
     
        $form->handleRequest($request);
     
        if ($form->isValid()) {
            // guardar la noticia en la base de datos
            $em = $this->getDoctrine()->getManager();
            $em->persist($new);
            $em->flush();

            return $this->redirect($this->generateUrl('dh_admin_news'));
        }

        return $this->render('DHBundle:Admin:createNew.html.twig', array(
            'form' => $form->createView()
        ));

    }

    public function updateNewAction(Request $request)
    {   

        //recibir formulario
        $form = Request::createFromGlobals();
        $new_id = $form->request->get('new_id');

        // pasado al servicio
        //$em = $this->getDoctrine()->getManager();
        //$new = $this -> getDoctrine() -> getRepository('DHBundle:Noticias') ->find($new_id);            
        $new = $this->get('dh.theNew')->findNew($new_id);
     
        $form = $this->createFormBuilder($new)
            ->add('titulo', 'text', array('attr' => array('style' => 'width: 500px') ))
            ->add('descripcion', 'textarea', array('attr' => array('class' => 'textarea')))
            ->add('urlImg', 'text', array('attr' => array('style' => 'width: 500px') ))
            ->add('fecha', 'date', array('widget' => 'single_text', 'label' => 'Fecha ' ))
            ->add('save', 'submit', array('label' => '**Guardar cambios**', 'attr' => array('class' => 'boton') ))
            ->getForm();
     
        $form->handleRequest($request);
     
        if ($form->isValid()) {
            // guardar la noticia en la base de datos
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirect($this->generateUrl('dh_admin_news'));
        }

        return $this->render('DHBundle:Admin:createNew.html.twig', array(
            'form' => $form->createView(), 'new_id' => $new_id
        ));

        //return new Response(dump($form));

    }


}
