<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_f7a9cb87a4b906b5a34c6a20d75ebbd21cf3fe257ae66d4ecb7daf2b8af58495 extends Twig_Template
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
        $__internal_31fe5893bdd6a3669ee321b5733a82d9e42f9b383db7b64837195f2f5c2c5af8 = $this->env->getExtension("native_profiler");
        $__internal_31fe5893bdd6a3669ee321b5733a82d9e42f9b383db7b64837195f2f5c2c5af8->enter($__internal_31fe5893bdd6a3669ee321b5733a82d9e42f9b383db7b64837195f2f5c2c5af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_31fe5893bdd6a3669ee321b5733a82d9e42f9b383db7b64837195f2f5c2c5af8->leave($__internal_31fe5893bdd6a3669ee321b5733a82d9e42f9b383db7b64837195f2f5c2c5af8_prof);

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
