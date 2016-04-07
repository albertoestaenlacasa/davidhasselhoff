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
        $__internal_210d7c089b9135925604d91f2c2751ae2ede1e65e74942a41d8ab62a5d5cfe92 = $this->env->getExtension("native_profiler");
        $__internal_210d7c089b9135925604d91f2c2751ae2ede1e65e74942a41d8ab62a5d5cfe92->enter($__internal_210d7c089b9135925604d91f2c2751ae2ede1e65e74942a41d8ab62a5d5cfe92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_210d7c089b9135925604d91f2c2751ae2ede1e65e74942a41d8ab62a5d5cfe92->leave($__internal_210d7c089b9135925604d91f2c2751ae2ede1e65e74942a41d8ab62a5d5cfe92_prof);

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
