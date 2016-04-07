<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b642bff7cb3cf1ce570dd08ecc10ea47c27ea1309369b1846ccb3fe59cc0a985 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_1e20ad6670c0e8cb88da6e300795a80b9d9791a7fbe42fd1a0d8f77210777110 = $this->env->getExtension("native_profiler");
        $__internal_1e20ad6670c0e8cb88da6e300795a80b9d9791a7fbe42fd1a0d8f77210777110->enter($__internal_1e20ad6670c0e8cb88da6e300795a80b9d9791a7fbe42fd1a0d8f77210777110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e20ad6670c0e8cb88da6e300795a80b9d9791a7fbe42fd1a0d8f77210777110->leave($__internal_1e20ad6670c0e8cb88da6e300795a80b9d9791a7fbe42fd1a0d8f77210777110_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e1c61089c2d39ceec11ee02ec98403d9ac1e97ac89bc65c1c7aff3943fc7e4e = $this->env->getExtension("native_profiler");
        $__internal_5e1c61089c2d39ceec11ee02ec98403d9ac1e97ac89bc65c1c7aff3943fc7e4e->enter($__internal_5e1c61089c2d39ceec11ee02ec98403d9ac1e97ac89bc65c1c7aff3943fc7e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5e1c61089c2d39ceec11ee02ec98403d9ac1e97ac89bc65c1c7aff3943fc7e4e->leave($__internal_5e1c61089c2d39ceec11ee02ec98403d9ac1e97ac89bc65c1c7aff3943fc7e4e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_699a80fbff8f31b26eb6c255a96b244c4a3ff39aecb4686f229f3fb230c46d6e = $this->env->getExtension("native_profiler");
        $__internal_699a80fbff8f31b26eb6c255a96b244c4a3ff39aecb4686f229f3fb230c46d6e->enter($__internal_699a80fbff8f31b26eb6c255a96b244c4a3ff39aecb4686f229f3fb230c46d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_699a80fbff8f31b26eb6c255a96b244c4a3ff39aecb4686f229f3fb230c46d6e->leave($__internal_699a80fbff8f31b26eb6c255a96b244c4a3ff39aecb4686f229f3fb230c46d6e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
