<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_9f48bdfdf95c85cb280180f8689cde98707cabfde232fe3e1684ea85fb03ebb6 extends Twig_Template
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
        $__internal_5953b937911041e5e8e2c1488602b941ec3c97c9f7a5aa1676875fd6ecb63c99 = $this->env->getExtension("native_profiler");
        $__internal_5953b937911041e5e8e2c1488602b941ec3c97c9f7a5aa1676875fd6ecb63c99->enter($__internal_5953b937911041e5e8e2c1488602b941ec3c97c9f7a5aa1676875fd6ecb63c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5953b937911041e5e8e2c1488602b941ec3c97c9f7a5aa1676875fd6ecb63c99->leave($__internal_5953b937911041e5e8e2c1488602b941ec3c97c9f7a5aa1676875fd6ecb63c99_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
