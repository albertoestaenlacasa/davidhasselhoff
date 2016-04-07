<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_1880eaca0298f27849ad4c0fdd4ee40e6777826f86f3174e8a3cdd039ff868df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b61d176c57f7d405387e7a18805daadcfdeb60e924edc80110052ebb21a3f06c = $this->env->getExtension("native_profiler");
        $__internal_b61d176c57f7d405387e7a18805daadcfdeb60e924edc80110052ebb21a3f06c->enter($__internal_b61d176c57f7d405387e7a18805daadcfdeb60e924edc80110052ebb21a3f06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b61d176c57f7d405387e7a18805daadcfdeb60e924edc80110052ebb21a3f06c->leave($__internal_b61d176c57f7d405387e7a18805daadcfdeb60e924edc80110052ebb21a3f06c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8736921256a9be44936d3dd4a051ceb50794cf7c81e53e4bf3c42b1726c3bc9f = $this->env->getExtension("native_profiler");
        $__internal_8736921256a9be44936d3dd4a051ceb50794cf7c81e53e4bf3c42b1726c3bc9f->enter($__internal_8736921256a9be44936d3dd4a051ceb50794cf7c81e53e4bf3c42b1726c3bc9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8736921256a9be44936d3dd4a051ceb50794cf7c81e53e4bf3c42b1726c3bc9f->leave($__internal_8736921256a9be44936d3dd4a051ceb50794cf7c81e53e4bf3c42b1726c3bc9f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_de3fcc0ac5263b737fb736c995db75efefa970afbf21b79a6561a0f2ab562fb7 = $this->env->getExtension("native_profiler");
        $__internal_de3fcc0ac5263b737fb736c995db75efefa970afbf21b79a6561a0f2ab562fb7->enter($__internal_de3fcc0ac5263b737fb736c995db75efefa970afbf21b79a6561a0f2ab562fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_de3fcc0ac5263b737fb736c995db75efefa970afbf21b79a6561a0f2ab562fb7->leave($__internal_de3fcc0ac5263b737fb736c995db75efefa970afbf21b79a6561a0f2ab562fb7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3d85fcb357278c451dd732cd2a4c13de1696f1388d224fc9dccdba0c02034b09 = $this->env->getExtension("native_profiler");
        $__internal_3d85fcb357278c451dd732cd2a4c13de1696f1388d224fc9dccdba0c02034b09->enter($__internal_3d85fcb357278c451dd732cd2a4c13de1696f1388d224fc9dccdba0c02034b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_3d85fcb357278c451dd732cd2a4c13de1696f1388d224fc9dccdba0c02034b09->leave($__internal_3d85fcb357278c451dd732cd2a4c13de1696f1388d224fc9dccdba0c02034b09_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
