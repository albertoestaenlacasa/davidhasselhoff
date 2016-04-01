<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_76f19ff0959e754981334fad8dd3059fd9552d078f2c41e44626d6df627b3be0 extends Twig_Template
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
        $__internal_6dfc57752b2fae69bc6cb7f2f1a75e68007378e792fe70ee5662ed57052ce572 = $this->env->getExtension("native_profiler");
        $__internal_6dfc57752b2fae69bc6cb7f2f1a75e68007378e792fe70ee5662ed57052ce572->enter($__internal_6dfc57752b2fae69bc6cb7f2f1a75e68007378e792fe70ee5662ed57052ce572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6dfc57752b2fae69bc6cb7f2f1a75e68007378e792fe70ee5662ed57052ce572->leave($__internal_6dfc57752b2fae69bc6cb7f2f1a75e68007378e792fe70ee5662ed57052ce572_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
