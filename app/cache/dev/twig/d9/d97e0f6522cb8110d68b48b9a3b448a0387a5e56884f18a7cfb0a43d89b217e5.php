<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_ffba76455277f98380ff26358f8e8580ee15f59492c2f7a5c91e91e9b07c01e6 extends Twig_Template
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
        $__internal_be27d36c09c79ab67fb0f0b69227f34601b959c1707978144d52679802e537c5 = $this->env->getExtension("native_profiler");
        $__internal_be27d36c09c79ab67fb0f0b69227f34601b959c1707978144d52679802e537c5->enter($__internal_be27d36c09c79ab67fb0f0b69227f34601b959c1707978144d52679802e537c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_be27d36c09c79ab67fb0f0b69227f34601b959c1707978144d52679802e537c5->leave($__internal_be27d36c09c79ab67fb0f0b69227f34601b959c1707978144d52679802e537c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
