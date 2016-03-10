<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_707c64f35e7c33f008247bb5b55253db5bf212151687fef8784644b54c13fd53 extends Twig_Template
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
        $__internal_4934b5f6c87a3f5e90239257e7cd888f81fe6dc98d10a76c751e5616512fc82b = $this->env->getExtension("native_profiler");
        $__internal_4934b5f6c87a3f5e90239257e7cd888f81fe6dc98d10a76c751e5616512fc82b->enter($__internal_4934b5f6c87a3f5e90239257e7cd888f81fe6dc98d10a76c751e5616512fc82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_4934b5f6c87a3f5e90239257e7cd888f81fe6dc98d10a76c751e5616512fc82b->leave($__internal_4934b5f6c87a3f5e90239257e7cd888f81fe6dc98d10a76c751e5616512fc82b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
