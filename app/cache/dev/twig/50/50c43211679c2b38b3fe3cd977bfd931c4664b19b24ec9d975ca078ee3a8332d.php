<?php

/* DHBundle:Admin:logout.html.twig */
class __TwigTemplate_1fcf6d57515ca2c608a2ee0252cf62516b3fc1862ff7dfb9795a48090a222803 extends Twig_Template
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
        $__internal_c9cb097fb2fb3f0137da17e0106b12b9abe8e9147714edc2bbcda0be468150b5 = $this->env->getExtension("native_profiler");
        $__internal_c9cb097fb2fb3f0137da17e0106b12b9abe8e9147714edc2bbcda0be468150b5->enter($__internal_c9cb097fb2fb3f0137da17e0106b12b9abe8e9147714edc2bbcda0be468150b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DHBundle:Admin:logout.html.twig"));

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
        
        $__internal_c9cb097fb2fb3f0137da17e0106b12b9abe8e9147714edc2bbcda0be468150b5->leave($__internal_c9cb097fb2fb3f0137da17e0106b12b9abe8e9147714edc2bbcda0be468150b5_prof);

    }

    public function getTemplateName()
    {
        return "DHBundle:Admin:logout.html.twig";
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
