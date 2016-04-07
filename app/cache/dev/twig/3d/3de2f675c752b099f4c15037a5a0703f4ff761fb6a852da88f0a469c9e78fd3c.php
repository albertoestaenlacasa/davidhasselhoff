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
        $__internal_13fd854166f6702ec709abcdda9a29f3d70e6cf4d51eb1aac621d5a4af0b6198 = $this->env->getExtension("native_profiler");
        $__internal_13fd854166f6702ec709abcdda9a29f3d70e6cf4d51eb1aac621d5a4af0b6198->enter($__internal_13fd854166f6702ec709abcdda9a29f3d70e6cf4d51eb1aac621d5a4af0b6198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13fd854166f6702ec709abcdda9a29f3d70e6cf4d51eb1aac621d5a4af0b6198->leave($__internal_13fd854166f6702ec709abcdda9a29f3d70e6cf4d51eb1aac621d5a4af0b6198_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d93355b2de2808e414e4f1368f9e26ede8aa97d7cb3d14eab5cd88314d32228a = $this->env->getExtension("native_profiler");
        $__internal_d93355b2de2808e414e4f1368f9e26ede8aa97d7cb3d14eab5cd88314d32228a->enter($__internal_d93355b2de2808e414e4f1368f9e26ede8aa97d7cb3d14eab5cd88314d32228a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d93355b2de2808e414e4f1368f9e26ede8aa97d7cb3d14eab5cd88314d32228a->leave($__internal_d93355b2de2808e414e4f1368f9e26ede8aa97d7cb3d14eab5cd88314d32228a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6617285fcd347fbe07049ecb09cf3d72c873053ed9988488a9a3bc561832f281 = $this->env->getExtension("native_profiler");
        $__internal_6617285fcd347fbe07049ecb09cf3d72c873053ed9988488a9a3bc561832f281->enter($__internal_6617285fcd347fbe07049ecb09cf3d72c873053ed9988488a9a3bc561832f281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6617285fcd347fbe07049ecb09cf3d72c873053ed9988488a9a3bc561832f281->leave($__internal_6617285fcd347fbe07049ecb09cf3d72c873053ed9988488a9a3bc561832f281_prof);

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
