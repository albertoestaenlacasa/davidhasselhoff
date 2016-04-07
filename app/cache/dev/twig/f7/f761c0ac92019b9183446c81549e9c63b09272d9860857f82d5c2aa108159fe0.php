<?php

/* foot.html.twig */
class __TwigTemplate_3befac1132db2be66d98cbb18133652b16b626cb7df33b9cf2379223cebd3139 extends Twig_Template
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
        $__internal_1108dbbbc42b2527e9a63034f9808c819ebb07a400ff580e899b07f243b6c730 = $this->env->getExtension("native_profiler");
        $__internal_1108dbbbc42b2527e9a63034f9808c819ebb07a400ff580e899b07f243b6c730->enter($__internal_1108dbbbc42b2527e9a63034f9808c819ebb07a400ff580e899b07f243b6c730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foot.html.twig"));

        // line 1
        $this->displayBlock('foot', $context, $blocks);
        
        $__internal_1108dbbbc42b2527e9a63034f9808c819ebb07a400ff580e899b07f243b6c730->leave($__internal_1108dbbbc42b2527e9a63034f9808c819ebb07a400ff580e899b07f243b6c730_prof);

    }

    public function block_foot($context, array $blocks = array())
    {
        $__internal_e9005fce4e58bb432f67df8376b4a8a8dec09a7a8a2c6ae801fea1cfe6cede93 = $this->env->getExtension("native_profiler");
        $__internal_e9005fce4e58bb432f67df8376b4a8a8dec09a7a8a2c6ae801fea1cfe6cede93->enter($__internal_e9005fce4e58bb432f67df8376b4a8a8dec09a7a8a2c6ae801fea1cfe6cede93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot"));

        // line 2
        echo "
\t<footer>
\t\t\t";
        // line 4
        echo $this->env->getExtension('translator')->getTranslator()->trans("STR_CONTACT", array(), "menu", (isset($context["_locale"]) ? $context["_locale"] : $this->getContext($context, "_locale")));
        echo " : <a href=\"mailto:";
        echo twig_escape_filter($this->env, (isset($context["contact_email"]) ? $context["contact_email"] : $this->getContext($context, "contact_email")), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, (isset($context["contact_email"]) ? $context["contact_email"] : $this->getContext($context, "contact_email")), "html", null, true);
        echo " </a>
\t</footer>

";
        
        $__internal_e9005fce4e58bb432f67df8376b4a8a8dec09a7a8a2c6ae801fea1cfe6cede93->leave($__internal_e9005fce4e58bb432f67df8376b4a8a8dec09a7a8a2c6ae801fea1cfe6cede93_prof);

    }

    public function getTemplateName()
    {
        return "foot.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  35 => 2,  23 => 1,);
    }
}
/* {% block foot %}*/
/* */
/* 	<footer>*/
/* 			{% trans from "menu" into _locale %} STR_CONTACT {% endtrans %} : <a href="mailto:{{ contact_email }}"> {{ contact_email }} </a>*/
/* 	</footer>*/
/* */
/* {% endblock %}*/
