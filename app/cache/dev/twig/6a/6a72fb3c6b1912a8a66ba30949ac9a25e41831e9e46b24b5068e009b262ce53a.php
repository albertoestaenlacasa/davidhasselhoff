<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_cd0eecb3e5bfb7fab55852ba29710d78a57b4aebeaa1250d20f42b0f1d508929 extends Twig_Template
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
        $__internal_270acf455a500ce2ff576c1e597a3bdbb22c9f9c726cf6a4e378febeb36b2ffa = $this->env->getExtension("native_profiler");
        $__internal_270acf455a500ce2ff576c1e597a3bdbb22c9f9c726cf6a4e378febeb36b2ffa->enter($__internal_270acf455a500ce2ff576c1e597a3bdbb22c9f9c726cf6a4e378febeb36b2ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_270acf455a500ce2ff576c1e597a3bdbb22c9f9c726cf6a4e378febeb36b2ffa->leave($__internal_270acf455a500ce2ff576c1e597a3bdbb22c9f9c726cf6a4e378febeb36b2ffa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
