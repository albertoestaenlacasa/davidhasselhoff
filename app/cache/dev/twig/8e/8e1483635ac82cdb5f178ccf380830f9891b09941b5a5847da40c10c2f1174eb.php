<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_73a4ef863a7920dad55daa7f158097b03d91fded932503adc8dae2a22fe375ee extends Twig_Template
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
        $__internal_2935dc00c65e04d5a093358fe048078765c408a5e97d7278b5839c83612a813d = $this->env->getExtension("native_profiler");
        $__internal_2935dc00c65e04d5a093358fe048078765c408a5e97d7278b5839c83612a813d->enter($__internal_2935dc00c65e04d5a093358fe048078765c408a5e97d7278b5839c83612a813d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2935dc00c65e04d5a093358fe048078765c408a5e97d7278b5839c83612a813d->leave($__internal_2935dc00c65e04d5a093358fe048078765c408a5e97d7278b5839c83612a813d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9592f84ae1a4331313fb4aa418cdda3c7507cd69301ff44e4e324e32cd681967 = $this->env->getExtension("native_profiler");
        $__internal_9592f84ae1a4331313fb4aa418cdda3c7507cd69301ff44e4e324e32cd681967->enter($__internal_9592f84ae1a4331313fb4aa418cdda3c7507cd69301ff44e4e324e32cd681967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9592f84ae1a4331313fb4aa418cdda3c7507cd69301ff44e4e324e32cd681967->leave($__internal_9592f84ae1a4331313fb4aa418cdda3c7507cd69301ff44e4e324e32cd681967_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dfcf7c6005ca0a6bdb62ac37a1769e24ac61c464d124a5cd13424a1588c132f6 = $this->env->getExtension("native_profiler");
        $__internal_dfcf7c6005ca0a6bdb62ac37a1769e24ac61c464d124a5cd13424a1588c132f6->enter($__internal_dfcf7c6005ca0a6bdb62ac37a1769e24ac61c464d124a5cd13424a1588c132f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_dfcf7c6005ca0a6bdb62ac37a1769e24ac61c464d124a5cd13424a1588c132f6->leave($__internal_dfcf7c6005ca0a6bdb62ac37a1769e24ac61c464d124a5cd13424a1588c132f6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_27727aea1f541d1aa4dacebc3003eb87562ca0cb3a9dac9c53723e716a126383 = $this->env->getExtension("native_profiler");
        $__internal_27727aea1f541d1aa4dacebc3003eb87562ca0cb3a9dac9c53723e716a126383->enter($__internal_27727aea1f541d1aa4dacebc3003eb87562ca0cb3a9dac9c53723e716a126383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_27727aea1f541d1aa4dacebc3003eb87562ca0cb3a9dac9c53723e716a126383->leave($__internal_27727aea1f541d1aa4dacebc3003eb87562ca0cb3a9dac9c53723e716a126383_prof);

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
