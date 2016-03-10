<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_f4a060ef596771e80a0d9d90586f3545bfadebe5563f8fd79beabf7bbb7853db extends Twig_Template
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
        $__internal_0b8ac6c86967ad1ba33e3bab52b36d4fb235edd1f0648c388b292755ff48e8e2 = $this->env->getExtension("native_profiler");
        $__internal_0b8ac6c86967ad1ba33e3bab52b36d4fb235edd1f0648c388b292755ff48e8e2->enter($__internal_0b8ac6c86967ad1ba33e3bab52b36d4fb235edd1f0648c388b292755ff48e8e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_0b8ac6c86967ad1ba33e3bab52b36d4fb235edd1f0648c388b292755ff48e8e2->leave($__internal_0b8ac6c86967ad1ba33e3bab52b36d4fb235edd1f0648c388b292755ff48e8e2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
