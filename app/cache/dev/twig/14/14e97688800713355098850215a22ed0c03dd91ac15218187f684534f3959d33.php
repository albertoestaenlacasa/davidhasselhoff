<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_1eb99a8acf950412cb5b3f5158efbef9c2e192d407b1b827a6bfba99c6b16323 extends Twig_Template
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
        $__internal_5b02ec3ab2c0a00d6a4ad3b03cfb04b682e0ec9d8b060843065f100e07cea8e4 = $this->env->getExtension("native_profiler");
        $__internal_5b02ec3ab2c0a00d6a4ad3b03cfb04b682e0ec9d8b060843065f100e07cea8e4->enter($__internal_5b02ec3ab2c0a00d6a4ad3b03cfb04b682e0ec9d8b060843065f100e07cea8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_5b02ec3ab2c0a00d6a4ad3b03cfb04b682e0ec9d8b060843065f100e07cea8e4->leave($__internal_5b02ec3ab2c0a00d6a4ad3b03cfb04b682e0ec9d8b060843065f100e07cea8e4_prof);

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
