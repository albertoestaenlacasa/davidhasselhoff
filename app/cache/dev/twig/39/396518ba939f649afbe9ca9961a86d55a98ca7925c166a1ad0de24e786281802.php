<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6816e41436255014046efb70201e599fda7cc677e4a39bacbe83c88fb1f8a3e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_b95b2a466def1f471ea78bfb62e0c02642666ad2cdf6522067d78cf7992fed53 = $this->env->getExtension("native_profiler");
        $__internal_b95b2a466def1f471ea78bfb62e0c02642666ad2cdf6522067d78cf7992fed53->enter($__internal_b95b2a466def1f471ea78bfb62e0c02642666ad2cdf6522067d78cf7992fed53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b95b2a466def1f471ea78bfb62e0c02642666ad2cdf6522067d78cf7992fed53->leave($__internal_b95b2a466def1f471ea78bfb62e0c02642666ad2cdf6522067d78cf7992fed53_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_51fec4ff8d57d0647941c46715e13201b1b2b416de2a0ccfd27dbe2b8ad04aa1 = $this->env->getExtension("native_profiler");
        $__internal_51fec4ff8d57d0647941c46715e13201b1b2b416de2a0ccfd27dbe2b8ad04aa1->enter($__internal_51fec4ff8d57d0647941c46715e13201b1b2b416de2a0ccfd27dbe2b8ad04aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_51fec4ff8d57d0647941c46715e13201b1b2b416de2a0ccfd27dbe2b8ad04aa1->leave($__internal_51fec4ff8d57d0647941c46715e13201b1b2b416de2a0ccfd27dbe2b8ad04aa1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a4fca45c08951fad7c73d6f085737c8403bd44c5663d74a5ac8b136b96b437fe = $this->env->getExtension("native_profiler");
        $__internal_a4fca45c08951fad7c73d6f085737c8403bd44c5663d74a5ac8b136b96b437fe->enter($__internal_a4fca45c08951fad7c73d6f085737c8403bd44c5663d74a5ac8b136b96b437fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a4fca45c08951fad7c73d6f085737c8403bd44c5663d74a5ac8b136b96b437fe->leave($__internal_a4fca45c08951fad7c73d6f085737c8403bd44c5663d74a5ac8b136b96b437fe_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_acb3b1ab78656409b657717bb39cc47cfad186cd1e06fa15bb4a2058553eeaab = $this->env->getExtension("native_profiler");
        $__internal_acb3b1ab78656409b657717bb39cc47cfad186cd1e06fa15bb4a2058553eeaab->enter($__internal_acb3b1ab78656409b657717bb39cc47cfad186cd1e06fa15bb4a2058553eeaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_acb3b1ab78656409b657717bb39cc47cfad186cd1e06fa15bb4a2058553eeaab->leave($__internal_acb3b1ab78656409b657717bb39cc47cfad186cd1e06fa15bb4a2058553eeaab_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
