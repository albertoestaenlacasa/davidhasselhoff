<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5c4e6f274e8005ba1f31b7e8f7c9357459ef95a0c0d5ff0a0636d2343f54797c extends Twig_Template
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
        $__internal_a8a2925dcdf16219f55a339c3226d9affe57d6eb528933ddda7f747128c713aa = $this->env->getExtension("native_profiler");
        $__internal_a8a2925dcdf16219f55a339c3226d9affe57d6eb528933ddda7f747128c713aa->enter($__internal_a8a2925dcdf16219f55a339c3226d9affe57d6eb528933ddda7f747128c713aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8a2925dcdf16219f55a339c3226d9affe57d6eb528933ddda7f747128c713aa->leave($__internal_a8a2925dcdf16219f55a339c3226d9affe57d6eb528933ddda7f747128c713aa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_29e970b4d28b1d7dfa7e71efa4676638e32a074de99702f23127f225a1d658c7 = $this->env->getExtension("native_profiler");
        $__internal_29e970b4d28b1d7dfa7e71efa4676638e32a074de99702f23127f225a1d658c7->enter($__internal_29e970b4d28b1d7dfa7e71efa4676638e32a074de99702f23127f225a1d658c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_29e970b4d28b1d7dfa7e71efa4676638e32a074de99702f23127f225a1d658c7->leave($__internal_29e970b4d28b1d7dfa7e71efa4676638e32a074de99702f23127f225a1d658c7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_75da5fc377241bd46426d30bfc4c41e705aa0c8f2930b1839f0a940f6d70eeaf = $this->env->getExtension("native_profiler");
        $__internal_75da5fc377241bd46426d30bfc4c41e705aa0c8f2930b1839f0a940f6d70eeaf->enter($__internal_75da5fc377241bd46426d30bfc4c41e705aa0c8f2930b1839f0a940f6d70eeaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_75da5fc377241bd46426d30bfc4c41e705aa0c8f2930b1839f0a940f6d70eeaf->leave($__internal_75da5fc377241bd46426d30bfc4c41e705aa0c8f2930b1839f0a940f6d70eeaf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b7cb7de4b7d73769e4944ab00e0903a2cd3a1769dee7ee7e111d800713feddc8 = $this->env->getExtension("native_profiler");
        $__internal_b7cb7de4b7d73769e4944ab00e0903a2cd3a1769dee7ee7e111d800713feddc8->enter($__internal_b7cb7de4b7d73769e4944ab00e0903a2cd3a1769dee7ee7e111d800713feddc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b7cb7de4b7d73769e4944ab00e0903a2cd3a1769dee7ee7e111d800713feddc8->leave($__internal_b7cb7de4b7d73769e4944ab00e0903a2cd3a1769dee7ee7e111d800713feddc8_prof);

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
