<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_3d3803f9b42078db3c98130f1fad9d36c7ee342a861b740d51b8a1b1239cc5c6 extends Twig_Template
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
        $__internal_5822e3276892f8b06c28cbaec8e2b0f6434cec91bc76e9703983486639c6eac4 = $this->env->getExtension("native_profiler");
        $__internal_5822e3276892f8b06c28cbaec8e2b0f6434cec91bc76e9703983486639c6eac4->enter($__internal_5822e3276892f8b06c28cbaec8e2b0f6434cec91bc76e9703983486639c6eac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_5822e3276892f8b06c28cbaec8e2b0f6434cec91bc76e9703983486639c6eac4->leave($__internal_5822e3276892f8b06c28cbaec8e2b0f6434cec91bc76e9703983486639c6eac4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
