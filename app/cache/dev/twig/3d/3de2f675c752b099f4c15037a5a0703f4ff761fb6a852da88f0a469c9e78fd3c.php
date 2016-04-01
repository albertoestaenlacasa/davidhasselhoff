<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_628fe0404b8f7f79bc969d94830bb5fe5f65698c9dc0bcde21a0570bd41b2a21 extends Twig_Template
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
        $__internal_38ba2b22b9a4452bc62d0b8cd1b4d0022ee6ecac1b63b4124b7890e041d3d1da = $this->env->getExtension("native_profiler");
        $__internal_38ba2b22b9a4452bc62d0b8cd1b4d0022ee6ecac1b63b4124b7890e041d3d1da->enter($__internal_38ba2b22b9a4452bc62d0b8cd1b4d0022ee6ecac1b63b4124b7890e041d3d1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38ba2b22b9a4452bc62d0b8cd1b4d0022ee6ecac1b63b4124b7890e041d3d1da->leave($__internal_38ba2b22b9a4452bc62d0b8cd1b4d0022ee6ecac1b63b4124b7890e041d3d1da_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f9487c0ef08d050bbff97c761f47dbab6656698af56c55d0c56b12a401d723c = $this->env->getExtension("native_profiler");
        $__internal_4f9487c0ef08d050bbff97c761f47dbab6656698af56c55d0c56b12a401d723c->enter($__internal_4f9487c0ef08d050bbff97c761f47dbab6656698af56c55d0c56b12a401d723c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4f9487c0ef08d050bbff97c761f47dbab6656698af56c55d0c56b12a401d723c->leave($__internal_4f9487c0ef08d050bbff97c761f47dbab6656698af56c55d0c56b12a401d723c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e24eec1e2940f893030df86832d2a4f4e305f16f32acf81cdc1e6f52b3051ccb = $this->env->getExtension("native_profiler");
        $__internal_e24eec1e2940f893030df86832d2a4f4e305f16f32acf81cdc1e6f52b3051ccb->enter($__internal_e24eec1e2940f893030df86832d2a4f4e305f16f32acf81cdc1e6f52b3051ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e24eec1e2940f893030df86832d2a4f4e305f16f32acf81cdc1e6f52b3051ccb->leave($__internal_e24eec1e2940f893030df86832d2a4f4e305f16f32acf81cdc1e6f52b3051ccb_prof);

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
