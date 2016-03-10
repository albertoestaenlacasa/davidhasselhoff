<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_9b5ab8de8c0fec1aadf57753be28738b3cb1759d09c689741dec8308246c293f extends Twig_Template
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
        $__internal_1af50429a2e62ceda90267a7d6cf9d696dd588a3fa74112b9cd2ae664f93d8b0 = $this->env->getExtension("native_profiler");
        $__internal_1af50429a2e62ceda90267a7d6cf9d696dd588a3fa74112b9cd2ae664f93d8b0->enter($__internal_1af50429a2e62ceda90267a7d6cf9d696dd588a3fa74112b9cd2ae664f93d8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_1af50429a2e62ceda90267a7d6cf9d696dd588a3fa74112b9cd2ae664f93d8b0->leave($__internal_1af50429a2e62ceda90267a7d6cf9d696dd588a3fa74112b9cd2ae664f93d8b0_prof);

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
