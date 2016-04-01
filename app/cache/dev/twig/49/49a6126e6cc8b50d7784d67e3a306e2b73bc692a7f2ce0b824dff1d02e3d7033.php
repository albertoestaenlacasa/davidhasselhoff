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
        $__internal_6053dd0fc7b90765495a29d0643342f0865362407f2f72aeac2986c39e23fe34 = $this->env->getExtension("native_profiler");
        $__internal_6053dd0fc7b90765495a29d0643342f0865362407f2f72aeac2986c39e23fe34->enter($__internal_6053dd0fc7b90765495a29d0643342f0865362407f2f72aeac2986c39e23fe34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_6053dd0fc7b90765495a29d0643342f0865362407f2f72aeac2986c39e23fe34->leave($__internal_6053dd0fc7b90765495a29d0643342f0865362407f2f72aeac2986c39e23fe34_prof);

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
