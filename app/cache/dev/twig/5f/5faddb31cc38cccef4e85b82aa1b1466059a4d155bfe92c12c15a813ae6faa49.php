<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_32e757f6488feb5af989bc39d1d91d8b84bf421e3623605747f759d0756bf4f0 extends Twig_Template
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
        $__internal_17770e5aa04ac0416b84c6c4e04ce339e50625b0df3bb92938becad15a530161 = $this->env->getExtension("native_profiler");
        $__internal_17770e5aa04ac0416b84c6c4e04ce339e50625b0df3bb92938becad15a530161->enter($__internal_17770e5aa04ac0416b84c6c4e04ce339e50625b0df3bb92938becad15a530161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17770e5aa04ac0416b84c6c4e04ce339e50625b0df3bb92938becad15a530161->leave($__internal_17770e5aa04ac0416b84c6c4e04ce339e50625b0df3bb92938becad15a530161_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dff40f4ca77199d69c550f8d0500f46ffbc7cb5d792caa3136d978792651f9e5 = $this->env->getExtension("native_profiler");
        $__internal_dff40f4ca77199d69c550f8d0500f46ffbc7cb5d792caa3136d978792651f9e5->enter($__internal_dff40f4ca77199d69c550f8d0500f46ffbc7cb5d792caa3136d978792651f9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_dff40f4ca77199d69c550f8d0500f46ffbc7cb5d792caa3136d978792651f9e5->leave($__internal_dff40f4ca77199d69c550f8d0500f46ffbc7cb5d792caa3136d978792651f9e5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e09640ec47dfa4b57684b5512efb1bb18a9c4a1e93cdd12b3c614bbb9cc08b59 = $this->env->getExtension("native_profiler");
        $__internal_e09640ec47dfa4b57684b5512efb1bb18a9c4a1e93cdd12b3c614bbb9cc08b59->enter($__internal_e09640ec47dfa4b57684b5512efb1bb18a9c4a1e93cdd12b3c614bbb9cc08b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e09640ec47dfa4b57684b5512efb1bb18a9c4a1e93cdd12b3c614bbb9cc08b59->leave($__internal_e09640ec47dfa4b57684b5512efb1bb18a9c4a1e93cdd12b3c614bbb9cc08b59_prof);

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
