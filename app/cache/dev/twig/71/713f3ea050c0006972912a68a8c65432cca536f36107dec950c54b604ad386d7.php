<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_8bc7f56f4977be88e19a8759bb813775853bb3379ac6f38000a33c7de784a15a extends Twig_Template
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
        $__internal_318f84b584c66cac5c49c61f456f627c676d7286db71b695a1f47b021f2da021 = $this->env->getExtension("native_profiler");
        $__internal_318f84b584c66cac5c49c61f456f627c676d7286db71b695a1f47b021f2da021->enter($__internal_318f84b584c66cac5c49c61f456f627c676d7286db71b695a1f47b021f2da021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_318f84b584c66cac5c49c61f456f627c676d7286db71b695a1f47b021f2da021->leave($__internal_318f84b584c66cac5c49c61f456f627c676d7286db71b695a1f47b021f2da021_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
