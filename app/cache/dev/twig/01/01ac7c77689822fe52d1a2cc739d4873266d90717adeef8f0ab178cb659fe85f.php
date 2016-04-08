<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_af842adeef4bc4f87a0cb3ac2dc46a289e91531642f4cc26c96471555c40aceb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6176499ec04115a6e0afc8cdfecb21efc8d071a212429d653fa4d8a3a6762e77 = $this->env->getExtension("native_profiler");
        $__internal_6176499ec04115a6e0afc8cdfecb21efc8d071a212429d653fa4d8a3a6762e77->enter($__internal_6176499ec04115a6e0afc8cdfecb21efc8d071a212429d653fa4d8a3a6762e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6176499ec04115a6e0afc8cdfecb21efc8d071a212429d653fa4d8a3a6762e77->leave($__internal_6176499ec04115a6e0afc8cdfecb21efc8d071a212429d653fa4d8a3a6762e77_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5910d2023ec35db2775f2a3661f7f62af8f49ced5f06cb552e99fef609471c1c = $this->env->getExtension("native_profiler");
        $__internal_5910d2023ec35db2775f2a3661f7f62af8f49ced5f06cb552e99fef609471c1c->enter($__internal_5910d2023ec35db2775f2a3661f7f62af8f49ced5f06cb552e99fef609471c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5910d2023ec35db2775f2a3661f7f62af8f49ced5f06cb552e99fef609471c1c->leave($__internal_5910d2023ec35db2775f2a3661f7f62af8f49ced5f06cb552e99fef609471c1c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7f7546ed29be65a0593564fe6fbef58321728fc22c9f55f25e77fd71ad6247a3 = $this->env->getExtension("native_profiler");
        $__internal_7f7546ed29be65a0593564fe6fbef58321728fc22c9f55f25e77fd71ad6247a3->enter($__internal_7f7546ed29be65a0593564fe6fbef58321728fc22c9f55f25e77fd71ad6247a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7f7546ed29be65a0593564fe6fbef58321728fc22c9f55f25e77fd71ad6247a3->leave($__internal_7f7546ed29be65a0593564fe6fbef58321728fc22c9f55f25e77fd71ad6247a3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b883cd6f3cb0fb6976efe0bb054766736cd2c5e7638381d933aa5c586f85648e = $this->env->getExtension("native_profiler");
        $__internal_b883cd6f3cb0fb6976efe0bb054766736cd2c5e7638381d933aa5c586f85648e->enter($__internal_b883cd6f3cb0fb6976efe0bb054766736cd2c5e7638381d933aa5c586f85648e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b883cd6f3cb0fb6976efe0bb054766736cd2c5e7638381d933aa5c586f85648e->leave($__internal_b883cd6f3cb0fb6976efe0bb054766736cd2c5e7638381d933aa5c586f85648e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
