<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_6a92b0335af9d49c69aff429b0aec283b49cb2b1e86e071864b12a3a1c293803 extends Twig_Template
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
        $__internal_a0144ce57c1aca505b16262f8c363d994fa46163677a8679c7458c768819d0ad = $this->env->getExtension("native_profiler");
        $__internal_a0144ce57c1aca505b16262f8c363d994fa46163677a8679c7458c768819d0ad->enter($__internal_a0144ce57c1aca505b16262f8c363d994fa46163677a8679c7458c768819d0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a0144ce57c1aca505b16262f8c363d994fa46163677a8679c7458c768819d0ad->leave($__internal_a0144ce57c1aca505b16262f8c363d994fa46163677a8679c7458c768819d0ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
