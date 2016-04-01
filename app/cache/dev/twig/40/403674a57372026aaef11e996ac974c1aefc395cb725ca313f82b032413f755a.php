<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_955d78a0892a1eefd8c2910e0dc49aede6cfb34900d0d034697c721ba8ce56cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f621e5ae37b9f2a9753eb0170f97e3a6ac9fd11cab9d9af81ba1f7ebdda82865 = $this->env->getExtension("native_profiler");
        $__internal_f621e5ae37b9f2a9753eb0170f97e3a6ac9fd11cab9d9af81ba1f7ebdda82865->enter($__internal_f621e5ae37b9f2a9753eb0170f97e3a6ac9fd11cab9d9af81ba1f7ebdda82865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_f621e5ae37b9f2a9753eb0170f97e3a6ac9fd11cab9d9af81ba1f7ebdda82865->leave($__internal_f621e5ae37b9f2a9753eb0170f97e3a6ac9fd11cab9d9af81ba1f7ebdda82865_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
