<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_1f212915cade70d8e2beacae39f5788bbd81a788ecf95927c2b1c12757065800 extends Twig_Template
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
        $__internal_3272e5c2534468f858e3cb60b459fdceafc85caa169f049daa4f8859f4a0ba92 = $this->env->getExtension("native_profiler");
        $__internal_3272e5c2534468f858e3cb60b459fdceafc85caa169f049daa4f8859f4a0ba92->enter($__internal_3272e5c2534468f858e3cb60b459fdceafc85caa169f049daa4f8859f4a0ba92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_3272e5c2534468f858e3cb60b459fdceafc85caa169f049daa4f8859f4a0ba92->leave($__internal_3272e5c2534468f858e3cb60b459fdceafc85caa169f049daa4f8859f4a0ba92_prof);

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
