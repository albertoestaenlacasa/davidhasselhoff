<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_efdd0a027ce2b34746c1e4cc8a8fa0999c257ec29d1ce2f4690d299fd7a2a5ae extends Twig_Template
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
        $__internal_3fdb0bbb569bc2b81d1a0f006108a7bdfe1a099ffe6ec6c0731435284aa2b7a0 = $this->env->getExtension("native_profiler");
        $__internal_3fdb0bbb569bc2b81d1a0f006108a7bdfe1a099ffe6ec6c0731435284aa2b7a0->enter($__internal_3fdb0bbb569bc2b81d1a0f006108a7bdfe1a099ffe6ec6c0731435284aa2b7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_3fdb0bbb569bc2b81d1a0f006108a7bdfe1a099ffe6ec6c0731435284aa2b7a0->leave($__internal_3fdb0bbb569bc2b81d1a0f006108a7bdfe1a099ffe6ec6c0731435284aa2b7a0_prof);

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
