<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // dh_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dh_homepage');
            }

            return array (  '_controller' => 'DHBundle\\Controller\\DefaultController::indexAction',  '_route' => 'dh_homepage',);
        }

        if (0 === strpos($pathinfo, '/noticias')) {
            // dh_news
            if ($pathinfo === '/noticias') {
                return array (  '_controller' => 'DHBundle\\Controller\\DefaultController::newsAction',  '_route' => 'dh_news',);
            }

            // dh_fullnew
            if (preg_match('#^/noticias/(?P<id>[^/]++)/(?P<titulo>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dh_fullnew')), array (  '_controller' => 'DHBundle\\Controller\\DefaultController::fullnewAction',));
            }

        }

        // dh_changeLang
        if (0 === strpos($pathinfo, '/idioma') && preg_match('#^/idioma(?:/(?P<lang>es|ca|en))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dh_changeLang')), array (  '_controller' => 'DHBundle\\Controller\\DefaultController::changeLangAction',  'lang' => 'es',));
        }

        // dh_admin
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'DHBundle\\Controller\\AdminController::indexAction',  '_route' => 'dh_admin',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'DHBundle\\Controller\\AdminController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        if (0 === strpos($pathinfo, '/admin/noticias')) {
            // dh_admin_news
            if ($pathinfo === '/admin/noticias') {
                return array (  '_controller' => 'DHBundle\\Controller\\AdminController::newsAction',  '_route' => 'dh_admin_news',);
            }

            // dh_admin_news_new
            if ($pathinfo === '/admin/noticias/nuevo') {
                return array (  '_controller' => 'DHBundle\\Controller\\AdminController::createNewAction',  '_route' => 'dh_admin_news_new',);
            }

            // dh_admin_news_update
            if ($pathinfo === '/admin/noticias/actualizar') {
                return array (  '_controller' => 'DHBundle\\Controller\\AdminController::updateNewAction',  '_route' => 'dh_admin_news_update',);
            }

            // dh_admin_news_delete
            if ($pathinfo === '/admin/noticias/eliminar') {
                return array (  '_controller' => 'DHBundle\\Controller\\AdminController::deleteNewAction',  '_route' => 'dh_admin_news_delete',);
            }

        }

        // my_recipes_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'my_recipes_homepage');
            }

            return array (  '_controller' => 'My\\RecipesBundle\\Controller\\DefaultController::indexAction',  '_route' => 'my_recipes_homepage',);
        }

        if (0 === strpos($pathinfo, '/recetas')) {
            // my_recipes_1
            if (rtrim($pathinfo, '/') === '/recetas/uno') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'my_recipes_1');
                }

                return array (  '_controller' => 'My\\RecipesBundle\\Controller\\RecetasController::unoAction',  '_route' => 'my_recipes_1',);
            }

            if (0 === strpos($pathinfo, '/recetas/dos')) {
                // my_recipes_2a
                if (rtrim($pathinfo, '/') === '/recetas/dos') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'my_recipes_2a');
                    }

                    return array (  '_controller' => 'My\\RecipesBundle\\Controller\\RecetasController::dosAction',  'para' => 'aleman',  '_route' => 'my_recipes_2a',);
                }

                // my_recipes_2b
                if (preg_match('#^/recetas/dos(?:/(?P<para>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_recipes_2b')), array (  '_controller' => 'My\\RecipesBundle\\Controller\\RecetasController::dosAction',  'para' => 'aleman',));
                }

            }

            if (0 === strpos($pathinfo, '/recetas/nuevo')) {
                // my_recipes_3
                if (rtrim($pathinfo, '/') === '/recetas/nuevo1') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'my_recipes_3');
                    }

                    return array (  '_controller' => 'My\\RecipesBundle\\Controller\\RecetasController::create1Action',  '_route' => 'my_recipes_3',);
                }

                // my_recipes_4
                if (0 === strpos($pathinfo, '/recetas/nuevo2') && preg_match('#^/recetas/nuevo2/(?P<nombre>[^/]++)/(?P<descripcion>[^/]++)(?:/(?P<dificultad>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_recipes_4')), array (  '_controller' => 'My\\RecipesBundle\\Controller\\RecetasController::create2Action',  'dificultad' => 'facil',));
                }

            }

            if (0 === strpos($pathinfo, '/recetas/show')) {
                // my_recipes_5_show_one
                if (0 === strpos($pathinfo, '/recetas/show1') && preg_match('#^/recetas/show1/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_recipes_5_show_one')), array (  '_controller' => 'My\\RecipesBundle\\Controller\\RecetasController::show1Action',));
                }

                // my_recipes_6
                if (rtrim($pathinfo, '/') === '/recetas/showAll') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'my_recipes_6');
                    }

                    return array (  '_controller' => 'My\\RecipesBundle\\Controller\\RecetasController::showAllAction',  '_route' => 'my_recipes_6',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/author')) {
            // my_author_0
            if (rtrim($pathinfo, '/') === '/author/show') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'my_author_0');
                }

                return array (  '_controller' => 'My\\RecipesBundle\\Controller\\AuthorController::showAuthorsAction',  '_route' => 'my_author_0',);
            }

            // my_author_1
            if (rtrim($pathinfo, '/') === '/author/create') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'my_author_1');
                }

                return array (  '_controller' => 'My\\RecipesBundle\\Controller\\AuthorController::createAction',  '_route' => 'my_author_1',);
            }

        }

        // prueba_trans
        if ($pathinfo === '/trans') {
            return array (  '_controller' => 'My\\RecipesBundle\\Controller\\TransController::indexAction',  '_route' => 'prueba_trans',);
        }

        // prueba_trans_change
        if (preg_match('#^/(?P<lang>en_US|es_ES|ca_ES)/change$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'prueba_trans_change')), array (  '_controller' => 'My\\RecipesBundle\\Controller\\TransController::changeLangAction',  'lang' => 'es_ES',));
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
