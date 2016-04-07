<?php

/* @DH/Admin/logout.html.twig */
class __TwigTemplate_85b7d795c1e2731a1642fe6072c0ccb34d0e9fb9aece7f0915d648b9edbe94f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<div class=\"titulo\">";
        // line 2
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.STR_ADMIN", array(), "content", (isset($context["_locale"]) ? $context["_locale"] : null));
        // line 3
        echo "\t<div class=\"logout logoutText\">
\t\t<a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">
\t\t\t<div class=\"logoutText\">";
        // line 5
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.STR_LOGOUT", array(), "content", (isset($context["_locale"]) ? $context["_locale"] : null));
        echo " </div>
\t\t</a>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "@DH/Admin/logout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* <div class="titulo">{% trans from "content" into _locale %} admin.STR_ADMIN {% endtrans %}*/
/* 	<div class="logout logoutText">*/
/* 		<a href="{{ path('logout') }}">*/
/* 			<div class="logoutText">{% trans from "content" into _locale %} admin.STR_LOGOUT {% endtrans %} </div>*/
/* 		</a>*/
/* 	</div>*/
/* </div>*/
