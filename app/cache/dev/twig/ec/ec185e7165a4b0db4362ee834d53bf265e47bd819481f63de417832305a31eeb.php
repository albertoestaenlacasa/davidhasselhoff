<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_7d8759c88b35661e78337b01e3ba11ba64ae137061624d9d7a108b21b0454aa9 extends Twig_Template
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
        $__internal_f84477d4501cdd4989cfa47c85b4e820213f92a7b8cb61c7d825bfe9f695e9e0 = $this->env->getExtension("native_profiler");
        $__internal_f84477d4501cdd4989cfa47c85b4e820213f92a7b8cb61c7d825bfe9f695e9e0->enter($__internal_f84477d4501cdd4989cfa47c85b4e820213f92a7b8cb61c7d825bfe9f695e9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f84477d4501cdd4989cfa47c85b4e820213f92a7b8cb61c7d825bfe9f695e9e0->leave($__internal_f84477d4501cdd4989cfa47c85b4e820213f92a7b8cb61c7d825bfe9f695e9e0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
