<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_889ab061d63b017cc137ae5b723ce04113b099e9c31694ca8752b04f97455eab extends Twig_Template
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
        $__internal_e2d4804251ffb6d5ee4c21984dbb66f44db3be147a6d0fd88ce282526dfd4f47 = $this->env->getExtension("native_profiler");
        $__internal_e2d4804251ffb6d5ee4c21984dbb66f44db3be147a6d0fd88ce282526dfd4f47->enter($__internal_e2d4804251ffb6d5ee4c21984dbb66f44db3be147a6d0fd88ce282526dfd4f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e2d4804251ffb6d5ee4c21984dbb66f44db3be147a6d0fd88ce282526dfd4f47->leave($__internal_e2d4804251ffb6d5ee4c21984dbb66f44db3be147a6d0fd88ce282526dfd4f47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
