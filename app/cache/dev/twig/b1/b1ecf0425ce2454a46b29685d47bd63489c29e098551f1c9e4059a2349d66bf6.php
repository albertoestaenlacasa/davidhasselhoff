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
        $__internal_e7088abecc54891aaa8859be473b7188871a3cac45062403bac6ce367de300cb = $this->env->getExtension("native_profiler");
        $__internal_e7088abecc54891aaa8859be473b7188871a3cac45062403bac6ce367de300cb->enter($__internal_e7088abecc54891aaa8859be473b7188871a3cac45062403bac6ce367de300cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e7088abecc54891aaa8859be473b7188871a3cac45062403bac6ce367de300cb->leave($__internal_e7088abecc54891aaa8859be473b7188871a3cac45062403bac6ce367de300cb_prof);

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
