<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_5780275db14980ef60f4c4c361eae4632ee67e7b33fc7632eb4d3bb868cdb5d4 extends Twig_Template
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
        $__internal_2b5a18221581a5aed3c1eb5b046f6d8ce45244a6945734300c9eef262cf7447b = $this->env->getExtension("native_profiler");
        $__internal_2b5a18221581a5aed3c1eb5b046f6d8ce45244a6945734300c9eef262cf7447b->enter($__internal_2b5a18221581a5aed3c1eb5b046f6d8ce45244a6945734300c9eef262cf7447b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_2b5a18221581a5aed3c1eb5b046f6d8ce45244a6945734300c9eef262cf7447b->leave($__internal_2b5a18221581a5aed3c1eb5b046f6d8ce45244a6945734300c9eef262cf7447b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
