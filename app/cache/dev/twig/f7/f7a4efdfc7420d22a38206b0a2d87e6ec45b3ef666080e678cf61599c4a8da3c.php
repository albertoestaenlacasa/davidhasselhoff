<?php

/* @DH/Admin/logout.html.twig */
class __TwigTemplate_c5003b6d1da67ec0b93e01761a1a0e07445462080a928a0108c4e998eefe3d6e extends Twig_Template
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
        $__internal_2952b6ad33f583e907e002c053fd41d5b2a2e8c78624c5dd04d2a56a9b6e9894 = $this->env->getExtension("native_profiler");
        $__internal_2952b6ad33f583e907e002c053fd41d5b2a2e8c78624c5dd04d2a56a9b6e9894->enter($__internal_2952b6ad33f583e907e002c053fd41d5b2a2e8c78624c5dd04d2a56a9b6e9894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DH/Admin/logout.html.twig"));

        // line 1
        echo "
<div class=\"titulo\">";
        // line 2
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.STR_ADMIN", array(), "content", (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")));
        // line 3
        echo "\t<div class=\"logout logoutText\">
\t\t<a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">
\t\t\t<div class=\"logoutText\">";
        // line 5
        echo $this->env->getExtension('translator')->getTranslator()->trans("admin.STR_LOGOUT", array(), "content", (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")));
        echo " </div>
\t\t</a>
\t</div>
</div>";
        
        $__internal_2952b6ad33f583e907e002c053fd41d5b2a2e8c78624c5dd04d2a56a9b6e9894->leave($__internal_2952b6ad33f583e907e002c053fd41d5b2a2e8c78624c5dd04d2a56a9b6e9894_prof);

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
        return array (  34 => 5,  30 => 4,  27 => 3,  25 => 2,  22 => 1,);
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
