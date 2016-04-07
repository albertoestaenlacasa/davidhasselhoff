<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'dh_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DHBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dh_news' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DHBundle\\Controller\\DefaultController::newsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/noticias',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dh_fullnew' => array (  0 =>   array (    0 => 'id',    1 => 'titulo',  ),  1 =>   array (    '_controller' => 'DHBundle\\Controller\\DefaultController::fullnewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'titulo',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/noticias',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dh_changeLang' => array (  0 =>   array (    0 => 'lang',  ),  1 =>   array (    '_controller' => 'DHBundle\\Controller\\DefaultController::changeLangAction',    'lang' => 'es',  ),  2 =>   array (    'lang' => 'es|ca|en',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => 'es|ca|en',      3 => 'lang',    ),    1 =>     array (      0 => 'text',      1 => '/idioma',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dh_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DHBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DHBundle\\Controller\\AdminController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dh_admin_news' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DHBundle\\Controller\\AdminController::newsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/noticias',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dh_admin_news_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DHBundle\\Controller\\AdminController::createNewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/noticias/nuevo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dh_admin_news_update' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DHBundle\\Controller\\AdminController::updateNewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/noticias/actualizar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'dh_admin_news_delete' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DHBundle\\Controller\\AdminController::deleteNewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/noticias/eliminar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'my_recipes_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'My\\RecipesBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'my_recipes_1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'My\\RecipesBundle\\Controller\\RecetasController::unoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/recetas/uno/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'my_recipes_2a' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'My\\RecipesBundle\\Controller\\RecetasController::dosAction',    'para' => 'aleman',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/recetas/dos/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'my_recipes_2b' => array (  0 =>   array (    0 => 'para',  ),  1 =>   array (    '_controller' => 'My\\RecipesBundle\\Controller\\RecetasController::dosAction',    'para' => 'aleman',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'para',    ),    1 =>     array (      0 => 'text',      1 => '/recetas/dos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'my_recipes_3' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'My\\RecipesBundle\\Controller\\RecetasController::create1Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/recetas/nuevo1/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'my_recipes_4' => array (  0 =>   array (    0 => 'nombre',    1 => 'descripcion',    2 => 'dificultad',  ),  1 =>   array (    '_controller' => 'My\\RecipesBundle\\Controller\\RecetasController::create2Action',    'dificultad' => 'facil',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'dificultad',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'descripcion',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nombre',    ),    3 =>     array (      0 => 'text',      1 => '/recetas/nuevo2',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'my_recipes_5_show_one' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'My\\RecipesBundle\\Controller\\RecetasController::show1Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/recetas/show1',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'my_recipes_6' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'My\\RecipesBundle\\Controller\\RecetasController::showAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/recetas/showAll/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'my_author_0' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'My\\RecipesBundle\\Controller\\AuthorController::showAuthorsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/author/show/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'my_author_1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'My\\RecipesBundle\\Controller\\AuthorController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/author/create/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'prueba_trans' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'My\\RecipesBundle\\Controller\\TransController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trans',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'prueba_trans_change' => array (  0 =>   array (    0 => 'lang',  ),  1 =>   array (    '_controller' => 'My\\RecipesBundle\\Controller\\TransController::changeLangAction',    'lang' => 'es_ES',  ),  2 =>   array (    'lang' => 'en_US|es_ES|ca_ES',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/change',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => 'en_US|es_ES|ca_ES',      3 => 'lang',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
