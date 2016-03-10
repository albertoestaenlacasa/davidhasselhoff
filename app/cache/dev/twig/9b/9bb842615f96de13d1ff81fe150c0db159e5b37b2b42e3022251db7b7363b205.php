<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_20e45a15e1d26f3e261b785e993f56e01876b48852d39b83681618f589c33891 extends Twig_Template
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
        $__internal_cc0b4de849bd0029f88953537082d106446b0652b759a035d463bb01316179bc = $this->env->getExtension("native_profiler");
        $__internal_cc0b4de849bd0029f88953537082d106446b0652b759a035d463bb01316179bc->enter($__internal_cc0b4de849bd0029f88953537082d106446b0652b759a035d463bb01316179bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_cc0b4de849bd0029f88953537082d106446b0652b759a035d463bb01316179bc->leave($__internal_cc0b4de849bd0029f88953537082d106446b0652b759a035d463bb01316179bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
