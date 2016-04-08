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
        $__internal_4dde34c5127132f0201f951b75d50f8780273394b5c005add542a5668f15bcfd = $this->env->getExtension("native_profiler");
        $__internal_4dde34c5127132f0201f951b75d50f8780273394b5c005add542a5668f15bcfd->enter($__internal_4dde34c5127132f0201f951b75d50f8780273394b5c005add542a5668f15bcfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::foot.html.twig"));

        // line 1
        $this->displayBlock('foot', $context, $blocks);
        
        $__internal_4dde34c5127132f0201f951b75d50f8780273394b5c005add542a5668f15bcfd->leave($__internal_4dde34c5127132f0201f951b75d50f8780273394b5c005add542a5668f15bcfd_prof);

    }

    public function block_foot($context, array $blocks = array())
    {
        $__internal_2fee3edb2f14cdf6b5e898d19d6be53e6f038b68ee59e5e3fe0c5b7de8ce8dd6 = $this->env->getExtension("native_profiler");
        $__internal_2fee3edb2f14cdf6b5e898d19d6be53e6f038b68ee59e5e3fe0c5b7de8ce8dd6->enter($__internal_2fee3edb2f14cdf6b5e898d19d6be53e6f038b68ee59e5e3fe0c5b7de8ce8dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot"));

        // line 2
        echo "
\t<footer>
\t\t\t";
        // line 4
        echo $this->env->getExtension('translator')->getTranslator()->trans("STR_CONTACT", array(), "menu", (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")));
        echo " : <a href=\"mailto:";
        echo twig_escape_filter($this->env, (isset($context["contact_email"]) ? $context["contact_email"] : $this->getContext($context, "contact_email")), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, (isset($context["contact_email"]) ? $context["contact_email"] : $this->getContext($context, "contact_email")), "html", null, true);
        echo " </a>
\t</footer>

";
        
        $__internal_2fee3edb2f14cdf6b5e898d19d6be53e6f038b68ee59e5e3fe0c5b7de8ce8dd6->leave($__internal_2fee3edb2f14cdf6b5e898d19d6be53e6f038b68ee59e5e3fe0c5b7de8ce8dd6_prof);

    }

    public function getTemplateName()
    {
        return "::foot.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  35 => 2,  23 => 1,);
    }
}
/* {% block foot %}*/
/* */
/* 	<footer>*/
/* 			{% trans from "menu" into _locale %} STR_CONTACT {% endtrans %} : <a href="mailto:{{ contact_email }}"> {{ contact_email }} </a>*/
/* 	</footer>*/
/* */
/* {% endblock %}*/
