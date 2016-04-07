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
        $__internal_4344553d90882e7c09c308c749a3427cfc3e8c62e07bea11bfdc77e430965e52 = $this->env->getExtension("native_profiler");
        $__internal_4344553d90882e7c09c308c749a3427cfc3e8c62e07bea11bfdc77e430965e52->enter($__internal_4344553d90882e7c09c308c749a3427cfc3e8c62e07bea11bfdc77e430965e52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4344553d90882e7c09c308c749a3427cfc3e8c62e07bea11bfdc77e430965e52->leave($__internal_4344553d90882e7c09c308c749a3427cfc3e8c62e07bea11bfdc77e430965e52_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9fc8adaf6b3d702ac3637ad82ce0494241c6e62c9fc491e9fdbce045e57509a0 = $this->env->getExtension("native_profiler");
        $__internal_9fc8adaf6b3d702ac3637ad82ce0494241c6e62c9fc491e9fdbce045e57509a0->enter($__internal_9fc8adaf6b3d702ac3637ad82ce0494241c6e62c9fc491e9fdbce045e57509a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9fc8adaf6b3d702ac3637ad82ce0494241c6e62c9fc491e9fdbce045e57509a0->leave($__internal_9fc8adaf6b3d702ac3637ad82ce0494241c6e62c9fc491e9fdbce045e57509a0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fa084813cfcaedfd9a9283ef0583d2a9e3437e1eaf3595e805a0fa493b3f3058 = $this->env->getExtension("native_profiler");
        $__internal_fa084813cfcaedfd9a9283ef0583d2a9e3437e1eaf3595e805a0fa493b3f3058->enter($__internal_fa084813cfcaedfd9a9283ef0583d2a9e3437e1eaf3595e805a0fa493b3f3058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fa084813cfcaedfd9a9283ef0583d2a9e3437e1eaf3595e805a0fa493b3f3058->leave($__internal_fa084813cfcaedfd9a9283ef0583d2a9e3437e1eaf3595e805a0fa493b3f3058_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_73b2914cdebe1ac66ac3c3a2ca1f3898f4fb781e2b95f29d6142c1700223c3a7 = $this->env->getExtension("native_profiler");
        $__internal_73b2914cdebe1ac66ac3c3a2ca1f3898f4fb781e2b95f29d6142c1700223c3a7->enter($__internal_73b2914cdebe1ac66ac3c3a2ca1f3898f4fb781e2b95f29d6142c1700223c3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_73b2914cdebe1ac66ac3c3a2ca1f3898f4fb781e2b95f29d6142c1700223c3a7->leave($__internal_73b2914cdebe1ac66ac3c3a2ca1f3898f4fb781e2b95f29d6142c1700223c3a7_prof);

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
