<?php

/* foot.html.twig */
class __TwigTemplate_68e4ab0d27072512440b56c263a1649ca848efa1293115ac026769fca6fb2e0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'foot' => array($this, 'block_foot'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('foot', $context, $blocks);
    }

    public function block_foot($context, array $blocks = array())
    {
        // line 2
        echo "
\t<footer>
\t\t\t";
        // line 4
        echo $this->env->getExtension('translator')->getTranslator()->trans("STR_CONTACT", array(), "menu", (isset($context["_locale"]) ? $context["_locale"] : null));
        echo " : <a href=\"mailto:";
        echo twig_escape_filter($this->env, (isset($context["contact_email"]) ? $context["contact_email"] : null), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, (isset($context["contact_email"]) ? $context["contact_email"] : null), "html", null, true);
        echo " </a>
\t</footer>

";
    }

    public function getTemplateName()
    {
        return "foot.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 2,  20 => 1,);
    }
}
/* {% block foot %}*/
/* */
/* 	<footer>*/
/* 			{% trans from "menu" into _locale %} STR_CONTACT {% endtrans %} : <a href="mailto:{{ contact_email }}"> {{ contact_email }} </a>*/
/* 	</footer>*/
/* */
/* {% endblock %}*/
