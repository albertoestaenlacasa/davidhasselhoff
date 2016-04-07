<?php

/* MyRecipesBundle:Author:showAuthors.html.twig */
class __TwigTemplate_094a68342b2e3509f98c83e8e0f5cc81d4a789755cdceca957b4697275826577 extends Twig_Template
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
        // line 1
        echo "

<h1>Cocineros</h1>

";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["authores"]) ? $context["authores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["autor"]) {
            // line 6
            echo "
\t<li> ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["autor"], "name", array()), "html", null, true);
            echo " </li>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['autor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "MyRecipesBundle:Author:showAuthors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* */
/* */
/* <h1>Cocineros</h1>*/
/* */
/* {% for autor in authores %}*/
/* */
/* 	<li> {{ autor.name }} </li>*/
/* */
/* {% endfor %}*/
