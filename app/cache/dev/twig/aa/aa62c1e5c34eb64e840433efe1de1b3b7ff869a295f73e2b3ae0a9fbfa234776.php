<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_c1f46663cffcf0b058e892f313b78ab9ec0fdf505a033158ad6c1cdf496ea808 extends Twig_Template
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
        $__internal_51f77fc1c92d37fa46741cd10b5df32da8842920ce8693d32d4222e174a695eb = $this->env->getExtension("native_profiler");
        $__internal_51f77fc1c92d37fa46741cd10b5df32da8842920ce8693d32d4222e174a695eb->enter($__internal_51f77fc1c92d37fa46741cd10b5df32da8842920ce8693d32d4222e174a695eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_51f77fc1c92d37fa46741cd10b5df32da8842920ce8693d32d4222e174a695eb->leave($__internal_51f77fc1c92d37fa46741cd10b5df32da8842920ce8693d32d4222e174a695eb_prof);

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
