<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_32933b0dfd2a5074f0eb9d22a082b4fab743a42f9d3929281de967e3f57ce89d extends Twig_Template
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
        $__internal_ebf0b8db227004b2ead6198e6d17f0ad0bc12b6ccbbc810a71ccc47cabf45b77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebf0b8db227004b2ead6198e6d17f0ad0bc12b6ccbbc810a71ccc47cabf45b77->enter($__internal_ebf0b8db227004b2ead6198e6d17f0ad0bc12b6ccbbc810a71ccc47cabf45b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_87677dcecc2c144f7cf46852d42a01291e3a619d70123c1e1c9d3548a6ca040a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87677dcecc2c144f7cf46852d42a01291e3a619d70123c1e1c9d3548a6ca040a->enter($__internal_87677dcecc2c144f7cf46852d42a01291e3a619d70123c1e1c9d3548a6ca040a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_ebf0b8db227004b2ead6198e6d17f0ad0bc12b6ccbbc810a71ccc47cabf45b77->leave($__internal_ebf0b8db227004b2ead6198e6d17f0ad0bc12b6ccbbc810a71ccc47cabf45b77_prof);

        
        $__internal_87677dcecc2c144f7cf46852d42a01291e3a619d70123c1e1c9d3548a6ca040a->leave($__internal_87677dcecc2c144f7cf46852d42a01291e3a619d70123c1e1c9d3548a6ca040a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
