<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_2e8b9aae92afadc290fe619c72bc6da3690cb9e740d51fa5089092727b1ae777 extends Twig_Template
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
        $__internal_cfb297d577ea97550d66b199fca45fd792a7ed7212beae241e9611467ad34b6d = $this->env->getExtension("native_profiler");
        $__internal_cfb297d577ea97550d66b199fca45fd792a7ed7212beae241e9611467ad34b6d->enter($__internal_cfb297d577ea97550d66b199fca45fd792a7ed7212beae241e9611467ad34b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_cfb297d577ea97550d66b199fca45fd792a7ed7212beae241e9611467ad34b6d->leave($__internal_cfb297d577ea97550d66b199fca45fd792a7ed7212beae241e9611467ad34b6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
