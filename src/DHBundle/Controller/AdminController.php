<?php

namespace DHBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

//entidades
use DHBundle\Entity\Noticias;
use DHBundle\Entity\Galeria;

use Symfony\Component\Security\Core\SecurityContext;

// para mostrar en pantalla sin pagina
use Symfony\Component\HttpFoundation\Response;


class AdminController extends Controller
{

    public function indexAction()
    {
        //registro en el log el proceso 
        $logger = $this->get('logger');
        $logger->info('Mostramos la página principal de administración');
    
        return $this->render('DHBundle:Admin:index.html.twig');
    }

    public function loginAction(Request $request)
    {
        $session = $request->getSession();
 
         //registro en el log el proceso 
        $logger = $this->get('logger');
        $logger->info('Login de usuario');

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

        //registro en el log el proceso 
        $logger = $this->get('logger');
        $logger->info('Lista de noticias');

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

        //registro en el log el proceso 
        $logger = $this->get('logger');
        $logger->info('Eliminar noticia');

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
            //registro en el log el proceso 
            $logger = $this->get('logger');
            $logger->info('insertamos la noticia');

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

            //registro en el log el proceso 
            $logger = $this->get('logger');
            $logger->info('Se actualiza la noticia ' .$new_id);

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

    // ADMINISTRAR GLOSARIO
    public function galeryAction()
    {
        $galeria = $this -> getDoctrine() -> getRepository("DHBundle:Galeria");
        $galeria = $galeria -> findAll();

        return $this->render('DHBundle:Admin:galery.html.twig', array('galeria' => $galeria ));        
    }

    public function deleteGaleryAction()
    {       
        //recibir formulario
        $form = Request::createFromGlobals();
        $galery_id = $form->request->get('galery_id');

        $new = $this -> getDoctrine() -> getRepository('DHBundle:Galeria') ->find($galery_id);            

        $em = $this->getDoctrine()->getManager();
        $em->remove($new);
        $em->flush();
 
       return $this->redirect($this->generateUrl('dh_admin_galery'));
    }

    public function galeryNewAction(Request $request)
    {   
        // crear un objeto $Galeria nuevo
        $new = new Galeria();
     
        $form = $this->createFormBuilder($new)
            ->add('titulo', 'text', array('attr' => array('style' => 'width: 500px'), 'required' => false ))
            ->add('urlImg', 'text', array('attr' => array('style' => 'width: 500px') ))
            ->add('save', 'submit', array('label' => '**Aceptar**', 'attr' => array('class' => 'boton') ))
            ->getForm();
     
        $form->handleRequest($request);
     
        if ($form->isValid()) {

            // guardar la noticia en la base de datos
            $em = $this->getDoctrine()->getManager();
            $em->persist($new);
            $em->flush();

            return $this->redirect($this->generateUrl('dh_admin_galery'));
        }

        return $this->render('DHBundle:Admin:addImageGalery.html.twig', array(
            'form' => $form->createView()
        ));

    }




}
