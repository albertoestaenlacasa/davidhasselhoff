<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_b488d31149d6c7a2f0fb0b7d623a13c38fbb82f46c8ea7412ce1b166c0830ced extends Twig_Template
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
        $__internal_df2ea8f2ebb305e9286a9e301bed4628ab206c27af0c8534b56479ac932e0eaf = $this->env->getExtension("native_profiler");
        $__internal_df2ea8f2ebb305e9286a9e301bed4628ab206c27af0c8534b56479ac932e0eaf->enter($__internal_df2ea8f2ebb305e9286a9e301bed4628ab206c27af0c8534b56479ac932e0eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_df2ea8f2ebb305e9286a9e301bed4628ab206c27af0c8534b56479ac932e0eaf->leave($__internal_df2ea8f2ebb305e9286a9e301bed4628ab206c27af0c8534b56479ac932e0eaf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */