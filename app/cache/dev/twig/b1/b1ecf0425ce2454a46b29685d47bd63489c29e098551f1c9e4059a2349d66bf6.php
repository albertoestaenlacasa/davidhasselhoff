<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_05c01725415596f51d16ab7c4f438fc14d0100694963bbce4d30e5da75b68861 extends Twig_Template
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
        $__internal_24ae53ef233f4b5c9ecbff7d0b277893d4714e4c2d0da1d6db98f1d097a2df1e = $this->env->getExtension("native_profiler");
        $__internal_24ae53ef233f4b5c9ecbff7d0b277893d4714e4c2d0da1d6db98f1d097a2df1e->enter($__internal_24ae53ef233f4b5c9ecbff7d0b277893d4714e4c2d0da1d6db98f1d097a2df1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_24ae53ef233f4b5c9ecbff7d0b277893d4714e4c2d0da1d6db98f1d097a2df1e->leave($__internal_24ae53ef233f4b5c9ecbff7d0b277893d4714e4c2d0da1d6db98f1d097a2df1e_prof);

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
