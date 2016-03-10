<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_6ca5582e8e19cfe481b56fbc25e12a8301d2eab70d89b0a802e136da8c63612f extends Twig_Template
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
        $__internal_6bf2d9ddfff42474d5ff71d41592453329a4c8cefacae3cac3a9f8aaede8bd05 = $this->env->getExtension("native_profiler");
        $__internal_6bf2d9ddfff42474d5ff71d41592453329a4c8cefacae3cac3a9f8aaede8bd05->enter($__internal_6bf2d9ddfff42474d5ff71d41592453329a4c8cefacae3cac3a9f8aaede8bd05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_6bf2d9ddfff42474d5ff71d41592453329a4c8cefacae3cac3a9f8aaede8bd05->leave($__internal_6bf2d9ddfff42474d5ff71d41592453329a4c8cefacae3cac3a9f8aaede8bd05_prof);

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
