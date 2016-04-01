<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

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
