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
        $__internal_14451d761ba539188ebe399f8602f0296ddaa5920690d7bf6c3c94f10bf8e6bf = $this->env->getExtension("native_profiler");
        $__internal_14451d761ba539188ebe399f8602f0296ddaa5920690d7bf6c3c94f10bf8e6bf->enter($__internal_14451d761ba539188ebe399f8602f0296ddaa5920690d7bf6c3c94f10bf8e6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_14451d761ba539188ebe399f8602f0296ddaa5920690d7bf6c3c94f10bf8e6bf->leave($__internal_14451d761ba539188ebe399f8602f0296ddaa5920690d7bf6c3c94f10bf8e6bf_prof);

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
