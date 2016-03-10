<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_0b105baf24a332c34c3477196ed081403881ca353ded7c904cb35845f94fe6ad extends Twig_Template
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
        $__internal_e47018dd39427c44b060fb4427d29297768b5608b3a5c7a409070fbb2a060369 = $this->env->getExtension("native_profiler");
        $__internal_e47018dd39427c44b060fb4427d29297768b5608b3a5c7a409070fbb2a060369->enter($__internal_e47018dd39427c44b060fb4427d29297768b5608b3a5c7a409070fbb2a060369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e47018dd39427c44b060fb4427d29297768b5608b3a5c7a409070fbb2a060369->leave($__internal_e47018dd39427c44b060fb4427d29297768b5608b3a5c7a409070fbb2a060369_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
