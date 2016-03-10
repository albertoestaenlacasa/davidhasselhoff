<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_074e4ddd2484e0516cf05d9daaf04b4eae168d5db6cdef80d597cee79be0b154 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06df8e0fa2ce99c5dc2dec09ec84f5f045226a9af2c6eaefe43bfeda5a8a43ef = $this->env->getExtension("native_profiler");
        $__internal_06df8e0fa2ce99c5dc2dec09ec84f5f045226a9af2c6eaefe43bfeda5a8a43ef->enter($__internal_06df8e0fa2ce99c5dc2dec09ec84f5f045226a9af2c6eaefe43bfeda5a8a43ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06df8e0fa2ce99c5dc2dec09ec84f5f045226a9af2c6eaefe43bfeda5a8a43ef->leave($__internal_06df8e0fa2ce99c5dc2dec09ec84f5f045226a9af2c6eaefe43bfeda5a8a43ef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4b1f21ea2c06c1dac9c25e20a95534d223e4dfae7b0fc8d610c6ad8572f61dd = $this->env->getExtension("native_profiler");
        $__internal_d4b1f21ea2c06c1dac9c25e20a95534d223e4dfae7b0fc8d610c6ad8572f61dd->enter($__internal_d4b1f21ea2c06c1dac9c25e20a95534d223e4dfae7b0fc8d610c6ad8572f61dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d4b1f21ea2c06c1dac9c25e20a95534d223e4dfae7b0fc8d610c6ad8572f61dd->leave($__internal_d4b1f21ea2c06c1dac9c25e20a95534d223e4dfae7b0fc8d610c6ad8572f61dd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_16f36ed80fc772f59430c5320a56f164825bae18c6932cf0fda27b5a2b1c4d17 = $this->env->getExtension("native_profiler");
        $__internal_16f36ed80fc772f59430c5320a56f164825bae18c6932cf0fda27b5a2b1c4d17->enter($__internal_16f36ed80fc772f59430c5320a56f164825bae18c6932cf0fda27b5a2b1c4d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_16f36ed80fc772f59430c5320a56f164825bae18c6932cf0fda27b5a2b1c4d17->leave($__internal_16f36ed80fc772f59430c5320a56f164825bae18c6932cf0fda27b5a2b1c4d17_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
