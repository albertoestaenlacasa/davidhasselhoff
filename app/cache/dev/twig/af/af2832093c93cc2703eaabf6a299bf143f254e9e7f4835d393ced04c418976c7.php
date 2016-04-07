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
        $__internal_fb7433fcd0149585670743c0ffaebe10b8f54cf12d4821fa2086df9fea67b81a = $this->env->getExtension("native_profiler");
        $__internal_fb7433fcd0149585670743c0ffaebe10b8f54cf12d4821fa2086df9fea67b81a->enter($__internal_fb7433fcd0149585670743c0ffaebe10b8f54cf12d4821fa2086df9fea67b81a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_fb7433fcd0149585670743c0ffaebe10b8f54cf12d4821fa2086df9fea67b81a->leave($__internal_fb7433fcd0149585670743c0ffaebe10b8f54cf12d4821fa2086df9fea67b81a_prof);

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
