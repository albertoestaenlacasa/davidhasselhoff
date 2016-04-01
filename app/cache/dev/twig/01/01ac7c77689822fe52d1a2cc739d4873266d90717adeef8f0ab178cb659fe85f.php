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
        $__internal_703e064ee2df6ba2f901796500cdc030bff3998df56a2a5049eda8b66a77837a = $this->env->getExtension("native_profiler");
        $__internal_703e064ee2df6ba2f901796500cdc030bff3998df56a2a5049eda8b66a77837a->enter($__internal_703e064ee2df6ba2f901796500cdc030bff3998df56a2a5049eda8b66a77837a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_703e064ee2df6ba2f901796500cdc030bff3998df56a2a5049eda8b66a77837a->leave($__internal_703e064ee2df6ba2f901796500cdc030bff3998df56a2a5049eda8b66a77837a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_30d364eb0f1961bf16b6f63e249ce2cc1424d838e65ce042ff2c4275949da536 = $this->env->getExtension("native_profiler");
        $__internal_30d364eb0f1961bf16b6f63e249ce2cc1424d838e65ce042ff2c4275949da536->enter($__internal_30d364eb0f1961bf16b6f63e249ce2cc1424d838e65ce042ff2c4275949da536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_30d364eb0f1961bf16b6f63e249ce2cc1424d838e65ce042ff2c4275949da536->leave($__internal_30d364eb0f1961bf16b6f63e249ce2cc1424d838e65ce042ff2c4275949da536_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b3abc33fe351e9eefe2fa94496f344dd615d09427dad18cf019b294c5d2938d6 = $this->env->getExtension("native_profiler");
        $__internal_b3abc33fe351e9eefe2fa94496f344dd615d09427dad18cf019b294c5d2938d6->enter($__internal_b3abc33fe351e9eefe2fa94496f344dd615d09427dad18cf019b294c5d2938d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b3abc33fe351e9eefe2fa94496f344dd615d09427dad18cf019b294c5d2938d6->leave($__internal_b3abc33fe351e9eefe2fa94496f344dd615d09427dad18cf019b294c5d2938d6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ec1200070ef68f780e4742eccad24d664a23b312a7011d29f4d390110172ab05 = $this->env->getExtension("native_profiler");
        $__internal_ec1200070ef68f780e4742eccad24d664a23b312a7011d29f4d390110172ab05->enter($__internal_ec1200070ef68f780e4742eccad24d664a23b312a7011d29f4d390110172ab05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ec1200070ef68f780e4742eccad24d664a23b312a7011d29f4d390110172ab05->leave($__internal_ec1200070ef68f780e4742eccad24d664a23b312a7011d29f4d390110172ab05_prof);

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
