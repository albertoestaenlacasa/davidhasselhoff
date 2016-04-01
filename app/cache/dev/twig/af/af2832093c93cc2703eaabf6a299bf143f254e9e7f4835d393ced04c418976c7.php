<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_7aea9cec65de39bdb3795d8df2c442193db55da5c2ab8a1d6e179b0867b6981a extends Twig_Template
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
        $__internal_1dd91e7a5ebf7d16fce8209e3520d655718eb0bd1b83669f0b51d690eb39dd7d = $this->env->getExtension("native_profiler");
        $__internal_1dd91e7a5ebf7d16fce8209e3520d655718eb0bd1b83669f0b51d690eb39dd7d->enter($__internal_1dd91e7a5ebf7d16fce8209e3520d655718eb0bd1b83669f0b51d690eb39dd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_1dd91e7a5ebf7d16fce8209e3520d655718eb0bd1b83669f0b51d690eb39dd7d->leave($__internal_1dd91e7a5ebf7d16fce8209e3520d655718eb0bd1b83669f0b51d690eb39dd7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
