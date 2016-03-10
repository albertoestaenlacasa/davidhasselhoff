<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_ecc91c5eaf884f99033b0c15878f0d716badd56d46465a445549bd9fdbc461a7 extends Twig_Template
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
        $__internal_a1eaa16df60b9668c1698199035ef0de9446247c127674e02e6372e0bbf3931c = $this->env->getExtension("native_profiler");
        $__internal_a1eaa16df60b9668c1698199035ef0de9446247c127674e02e6372e0bbf3931c->enter($__internal_a1eaa16df60b9668c1698199035ef0de9446247c127674e02e6372e0bbf3931c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1eaa16df60b9668c1698199035ef0de9446247c127674e02e6372e0bbf3931c->leave($__internal_a1eaa16df60b9668c1698199035ef0de9446247c127674e02e6372e0bbf3931c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_32ceabc8fbba09af2b6048235ea113a87ced8360d277b51271d90e5bfd46bb24 = $this->env->getExtension("native_profiler");
        $__internal_32ceabc8fbba09af2b6048235ea113a87ced8360d277b51271d90e5bfd46bb24->enter($__internal_32ceabc8fbba09af2b6048235ea113a87ced8360d277b51271d90e5bfd46bb24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_32ceabc8fbba09af2b6048235ea113a87ced8360d277b51271d90e5bfd46bb24->leave($__internal_32ceabc8fbba09af2b6048235ea113a87ced8360d277b51271d90e5bfd46bb24_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a0192bb2bb067eee187c273ed547d6925956bf9cdaa9cd6baff0bd75f73c91ff = $this->env->getExtension("native_profiler");
        $__internal_a0192bb2bb067eee187c273ed547d6925956bf9cdaa9cd6baff0bd75f73c91ff->enter($__internal_a0192bb2bb067eee187c273ed547d6925956bf9cdaa9cd6baff0bd75f73c91ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a0192bb2bb067eee187c273ed547d6925956bf9cdaa9cd6baff0bd75f73c91ff->leave($__internal_a0192bb2bb067eee187c273ed547d6925956bf9cdaa9cd6baff0bd75f73c91ff_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7898ae7d3478d1b6c1a8ce8acc87b206e6a930d4dec1533df5b2235812434a78 = $this->env->getExtension("native_profiler");
        $__internal_7898ae7d3478d1b6c1a8ce8acc87b206e6a930d4dec1533df5b2235812434a78->enter($__internal_7898ae7d3478d1b6c1a8ce8acc87b206e6a930d4dec1533df5b2235812434a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7898ae7d3478d1b6c1a8ce8acc87b206e6a930d4dec1533df5b2235812434a78->leave($__internal_7898ae7d3478d1b6c1a8ce8acc87b206e6a930d4dec1533df5b2235812434a78_prof);

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
