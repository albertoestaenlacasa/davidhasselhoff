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
        $__internal_be79a8ed05a107c80d9ce13b99840e3308d9db9e5e7bd9517943bf6cee35cbd9 = $this->env->getExtension("native_profiler");
        $__internal_be79a8ed05a107c80d9ce13b99840e3308d9db9e5e7bd9517943bf6cee35cbd9->enter($__internal_be79a8ed05a107c80d9ce13b99840e3308d9db9e5e7bd9517943bf6cee35cbd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be79a8ed05a107c80d9ce13b99840e3308d9db9e5e7bd9517943bf6cee35cbd9->leave($__internal_be79a8ed05a107c80d9ce13b99840e3308d9db9e5e7bd9517943bf6cee35cbd9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4ccdb3e5c67b25cfd8da1c1b04fe8345fb58ca67e47d40a41d33a53076925bcc = $this->env->getExtension("native_profiler");
        $__internal_4ccdb3e5c67b25cfd8da1c1b04fe8345fb58ca67e47d40a41d33a53076925bcc->enter($__internal_4ccdb3e5c67b25cfd8da1c1b04fe8345fb58ca67e47d40a41d33a53076925bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4ccdb3e5c67b25cfd8da1c1b04fe8345fb58ca67e47d40a41d33a53076925bcc->leave($__internal_4ccdb3e5c67b25cfd8da1c1b04fe8345fb58ca67e47d40a41d33a53076925bcc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_09bfe2071b721867f369e1e7cd36e2d7eb6ab44363b3d868c8c2ad86b9c70a8d = $this->env->getExtension("native_profiler");
        $__internal_09bfe2071b721867f369e1e7cd36e2d7eb6ab44363b3d868c8c2ad86b9c70a8d->enter($__internal_09bfe2071b721867f369e1e7cd36e2d7eb6ab44363b3d868c8c2ad86b9c70a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_09bfe2071b721867f369e1e7cd36e2d7eb6ab44363b3d868c8c2ad86b9c70a8d->leave($__internal_09bfe2071b721867f369e1e7cd36e2d7eb6ab44363b3d868c8c2ad86b9c70a8d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_37c9f43946c68e9c6c5cdfb6a1a54e9cb4a8a9973b5a76649b467fc60358ba1d = $this->env->getExtension("native_profiler");
        $__internal_37c9f43946c68e9c6c5cdfb6a1a54e9cb4a8a9973b5a76649b467fc60358ba1d->enter($__internal_37c9f43946c68e9c6c5cdfb6a1a54e9cb4a8a9973b5a76649b467fc60358ba1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_37c9f43946c68e9c6c5cdfb6a1a54e9cb4a8a9973b5a76649b467fc60358ba1d->leave($__internal_37c9f43946c68e9c6c5cdfb6a1a54e9cb4a8a9973b5a76649b467fc60358ba1d_prof);

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
