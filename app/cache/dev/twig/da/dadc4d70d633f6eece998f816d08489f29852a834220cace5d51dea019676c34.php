<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_05af99f01ee17b77ac6d823534550da47692f9c03e627a8205bafe4bfa629e5b extends Twig_Template
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
        $__internal_f0170ab40eb97021b4cd7e91119795a4bb18522eac574b2c03c521b695edffd1 = $this->env->getExtension("native_profiler");
        $__internal_f0170ab40eb97021b4cd7e91119795a4bb18522eac574b2c03c521b695edffd1->enter($__internal_f0170ab40eb97021b4cd7e91119795a4bb18522eac574b2c03c521b695edffd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_f0170ab40eb97021b4cd7e91119795a4bb18522eac574b2c03c521b695edffd1->leave($__internal_f0170ab40eb97021b4cd7e91119795a4bb18522eac574b2c03c521b695edffd1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
