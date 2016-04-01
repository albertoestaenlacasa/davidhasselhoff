<?php

/* ::foot.html.twig */
class __TwigTemplate_1f62e14ae66196e60015d497320633c7c1011ba81152bf57967819961c233c7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'foot' => array($this, 'block_foot'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6da351cec81af58a6d847e326c2614e994d9a4318256122979d85000cffba96 = $this->env->getExtension("native_profiler");
        $__internal_f6da351cec81af58a6d847e326c2614e994d9a4318256122979d85000cffba96->enter($__internal_f6da351cec81af58a6d847e326c2614e994d9a4318256122979d85000cffba96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::foot.html.twig"));

        // line 1
        $this->displayBlock('foot', $context, $blocks);
        
        $__internal_f6da351cec81af58a6d847e326c2614e994d9a4318256122979d85000cffba96->leave($__internal_f6da351cec81af58a6d847e326c2614e994d9a4318256122979d85000cffba96_prof);

    }

    public function block_foot($context, array $blocks = array())
    {
        $__internal_6723ef1992fd10e4e849599987baf8b36d3164e74c956421541a719b7511fb0e = $this->env->getExtension("native_profiler");
        $__internal_6723ef1992fd10e4e849599987baf8b36d3164e74c956421541a719b7511fb0e->enter($__internal_6723ef1992fd10e4e849599987baf8b36d3164e74c956421541a719b7511fb0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot"));

        // line 2
        echo "
\t<style type=\"text/css\">
\t\tfooter {
\t\t\tpadding:50px 5px;
\t\t\ttext-align: center;
\t\t}
\t</style>

\t<footer>
\t\t";
        // line 11
        echo $this->env->getExtension('translator')->getTranslator()->trans("STR_CONTACT", array(), "menu", (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")));
        echo " : <a href=\"mailto:";
        echo twig_escape_filter($this->env, (isset($context["contact_email"]) ? $context["contact_email"] : $this->getContext($context, "contact_email")), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, (isset($context["contact_email"]) ? $context["contact_email"] : $this->getContext($context, "contact_email")), "html", null, true);
        echo " </a>
\t</footer>

";
        
        $__internal_6723ef1992fd10e4e849599987baf8b36d3164e74c956421541a719b7511fb0e->leave($__internal_6723ef1992fd10e4e849599987baf8b36d3164e74c956421541a719b7511fb0e_prof);

    }

    public function getTemplateName()
    {
        return "::foot.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  35 => 2,  23 => 1,);
    }
}
/* {% block foot %}*/
/* */
/* 	<style type="text/css">*/
/* 		footer {*/
/* 			padding:50px 5px;*/
/* 			text-align: center;*/
/* 		}*/
/* 	</style>*/
/* */
/* 	<footer>*/
/* 		{% trans from "menu" into _locale %} STR_CONTACT {% endtrans %} : <a href="mailto:{{ contact_email }}"> {{ contact_email }} </a>*/
/* 	</footer>*/
/* */
/* {% endblock %}*/
