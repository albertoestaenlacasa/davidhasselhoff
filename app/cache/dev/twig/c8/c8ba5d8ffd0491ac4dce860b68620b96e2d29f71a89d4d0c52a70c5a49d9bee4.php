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
        $__internal_0395ccd97fbe5f714a0cd278bd8f0149789a3628291eac8995eb863e92f1875d = $this->env->getExtension("native_profiler");
        $__internal_0395ccd97fbe5f714a0cd278bd8f0149789a3628291eac8995eb863e92f1875d->enter($__internal_0395ccd97fbe5f714a0cd278bd8f0149789a3628291eac8995eb863e92f1875d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0395ccd97fbe5f714a0cd278bd8f0149789a3628291eac8995eb863e92f1875d->leave($__internal_0395ccd97fbe5f714a0cd278bd8f0149789a3628291eac8995eb863e92f1875d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fde661b350a823dc69415e7d4015b2cc3450e2e49d998175fddfcc6ef0af8f87 = $this->env->getExtension("native_profiler");
        $__internal_fde661b350a823dc69415e7d4015b2cc3450e2e49d998175fddfcc6ef0af8f87->enter($__internal_fde661b350a823dc69415e7d4015b2cc3450e2e49d998175fddfcc6ef0af8f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_fde661b350a823dc69415e7d4015b2cc3450e2e49d998175fddfcc6ef0af8f87->leave($__internal_fde661b350a823dc69415e7d4015b2cc3450e2e49d998175fddfcc6ef0af8f87_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8a7ae316576085d512d1832a46e2b89e8299f6e4bed7cc102c53333b6832be3 = $this->env->getExtension("native_profiler");
        $__internal_c8a7ae316576085d512d1832a46e2b89e8299f6e4bed7cc102c53333b6832be3->enter($__internal_c8a7ae316576085d512d1832a46e2b89e8299f6e4bed7cc102c53333b6832be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c8a7ae316576085d512d1832a46e2b89e8299f6e4bed7cc102c53333b6832be3->leave($__internal_c8a7ae316576085d512d1832a46e2b89e8299f6e4bed7cc102c53333b6832be3_prof);

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
