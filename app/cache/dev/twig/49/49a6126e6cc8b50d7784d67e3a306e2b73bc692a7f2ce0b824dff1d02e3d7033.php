<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_f7964381ddb5e441f5c9dcb47c45af1cf6668044b1a23a3a812c0deb44be4821 extends Twig_Template
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
        $__internal_4808ede5889b736bb0ac428526388d71bdde64e988c1f83390beca0b7aee3413 = $this->env->getExtension("native_profiler");
        $__internal_4808ede5889b736bb0ac428526388d71bdde64e988c1f83390beca0b7aee3413->enter($__internal_4808ede5889b736bb0ac428526388d71bdde64e988c1f83390beca0b7aee3413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_4808ede5889b736bb0ac428526388d71bdde64e988c1f83390beca0b7aee3413->leave($__internal_4808ede5889b736bb0ac428526388d71bdde64e988c1f83390beca0b7aee3413_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
