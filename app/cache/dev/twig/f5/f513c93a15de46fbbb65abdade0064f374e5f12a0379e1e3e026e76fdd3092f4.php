<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_41fecf1619f0c4369d65980ec291e7974fecf6496b1df32784dc828eca38cbac extends Twig_Template
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
        $__internal_04a97f062148640af3bafe678ca9b5b92eeef1e6efd959dda27b599ec863b3e7 = $this->env->getExtension("native_profiler");
        $__internal_04a97f062148640af3bafe678ca9b5b92eeef1e6efd959dda27b599ec863b3e7->enter($__internal_04a97f062148640af3bafe678ca9b5b92eeef1e6efd959dda27b599ec863b3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_04a97f062148640af3bafe678ca9b5b92eeef1e6efd959dda27b599ec863b3e7->leave($__internal_04a97f062148640af3bafe678ca9b5b92eeef1e6efd959dda27b599ec863b3e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
