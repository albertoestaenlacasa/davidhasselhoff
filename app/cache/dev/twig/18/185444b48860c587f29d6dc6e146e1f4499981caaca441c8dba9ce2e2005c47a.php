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
        $__internal_3acabe6f71b11df7761b49fc5f4e08492898a8b5babc8b85aa076e46916e8618 = $this->env->getExtension("native_profiler");
        $__internal_3acabe6f71b11df7761b49fc5f4e08492898a8b5babc8b85aa076e46916e8618->enter($__internal_3acabe6f71b11df7761b49fc5f4e08492898a8b5babc8b85aa076e46916e8618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3acabe6f71b11df7761b49fc5f4e08492898a8b5babc8b85aa076e46916e8618->leave($__internal_3acabe6f71b11df7761b49fc5f4e08492898a8b5babc8b85aa076e46916e8618_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_52e6385f2c906cb0ac7e8153b954d8c90b0403b3d4cdee4ebc6df92f6daa290c = $this->env->getExtension("native_profiler");
        $__internal_52e6385f2c906cb0ac7e8153b954d8c90b0403b3d4cdee4ebc6df92f6daa290c->enter($__internal_52e6385f2c906cb0ac7e8153b954d8c90b0403b3d4cdee4ebc6df92f6daa290c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_52e6385f2c906cb0ac7e8153b954d8c90b0403b3d4cdee4ebc6df92f6daa290c->leave($__internal_52e6385f2c906cb0ac7e8153b954d8c90b0403b3d4cdee4ebc6df92f6daa290c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b70775e841ae28d10d796419252c0dc1bd375cf182c92a7ef01baadb20c1ee88 = $this->env->getExtension("native_profiler");
        $__internal_b70775e841ae28d10d796419252c0dc1bd375cf182c92a7ef01baadb20c1ee88->enter($__internal_b70775e841ae28d10d796419252c0dc1bd375cf182c92a7ef01baadb20c1ee88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b70775e841ae28d10d796419252c0dc1bd375cf182c92a7ef01baadb20c1ee88->leave($__internal_b70775e841ae28d10d796419252c0dc1bd375cf182c92a7ef01baadb20c1ee88_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4bf7e1bda55af6dd9ae658378957fffe16e73755207b9dd2394237c817f729dc = $this->env->getExtension("native_profiler");
        $__internal_4bf7e1bda55af6dd9ae658378957fffe16e73755207b9dd2394237c817f729dc->enter($__internal_4bf7e1bda55af6dd9ae658378957fffe16e73755207b9dd2394237c817f729dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4bf7e1bda55af6dd9ae658378957fffe16e73755207b9dd2394237c817f729dc->leave($__internal_4bf7e1bda55af6dd9ae658378957fffe16e73755207b9dd2394237c817f729dc_prof);

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
