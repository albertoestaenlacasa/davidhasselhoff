<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_8fb4a06e1c8c9a769fa737ff617cacc02a596f1dfb981bed5bac3cf413e58ab1 extends Twig_Template
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
        $__internal_9e19eae177471b87ed7c2952e84cdd8c1612cb761a729047f2992eeb4c888359 = $this->env->getExtension("native_profiler");
        $__internal_9e19eae177471b87ed7c2952e84cdd8c1612cb761a729047f2992eeb4c888359->enter($__internal_9e19eae177471b87ed7c2952e84cdd8c1612cb761a729047f2992eeb4c888359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_9e19eae177471b87ed7c2952e84cdd8c1612cb761a729047f2992eeb4c888359->leave($__internal_9e19eae177471b87ed7c2952e84cdd8c1612cb761a729047f2992eeb4c888359_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
