<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_d3b8766fb9411da8e3783c205b00114eefc1fba69057a2eee1d68a838b492d78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_c5b01656917edf7cda193ce6504998212c024f7e21753eefb80acdda572ab047 = $this->env->getExtension("native_profiler");
        $__internal_c5b01656917edf7cda193ce6504998212c024f7e21753eefb80acdda572ab047->enter($__internal_c5b01656917edf7cda193ce6504998212c024f7e21753eefb80acdda572ab047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5b01656917edf7cda193ce6504998212c024f7e21753eefb80acdda572ab047->leave($__internal_c5b01656917edf7cda193ce6504998212c024f7e21753eefb80acdda572ab047_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d35ecb93b99ba5e46da77f12becbe77c509a1ff6d0a86b4160ce612045c5b440 = $this->env->getExtension("native_profiler");
        $__internal_d35ecb93b99ba5e46da77f12becbe77c509a1ff6d0a86b4160ce612045c5b440->enter($__internal_d35ecb93b99ba5e46da77f12becbe77c509a1ff6d0a86b4160ce612045c5b440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d35ecb93b99ba5e46da77f12becbe77c509a1ff6d0a86b4160ce612045c5b440->leave($__internal_d35ecb93b99ba5e46da77f12becbe77c509a1ff6d0a86b4160ce612045c5b440_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_89e4be026c690d5e43ddfc9717ee6f5f200949acfb6a8c86491ec8e0f6cd0e09 = $this->env->getExtension("native_profiler");
        $__internal_89e4be026c690d5e43ddfc9717ee6f5f200949acfb6a8c86491ec8e0f6cd0e09->enter($__internal_89e4be026c690d5e43ddfc9717ee6f5f200949acfb6a8c86491ec8e0f6cd0e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_89e4be026c690d5e43ddfc9717ee6f5f200949acfb6a8c86491ec8e0f6cd0e09->leave($__internal_89e4be026c690d5e43ddfc9717ee6f5f200949acfb6a8c86491ec8e0f6cd0e09_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_489b7d0894ab5a2cdd8c89260e1f3af278597c27db2e96fb8e48baca394285f1 = $this->env->getExtension("native_profiler");
        $__internal_489b7d0894ab5a2cdd8c89260e1f3af278597c27db2e96fb8e48baca394285f1->enter($__internal_489b7d0894ab5a2cdd8c89260e1f3af278597c27db2e96fb8e48baca394285f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_489b7d0894ab5a2cdd8c89260e1f3af278597c27db2e96fb8e48baca394285f1->leave($__internal_489b7d0894ab5a2cdd8c89260e1f3af278597c27db2e96fb8e48baca394285f1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
