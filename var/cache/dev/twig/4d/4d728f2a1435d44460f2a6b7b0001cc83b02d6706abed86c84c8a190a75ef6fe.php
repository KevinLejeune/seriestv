<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_46badc8b4b6e4068b77294a33514b427c0c9333f4652b375a159293378ec6091 extends Twig_Template
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
        $__internal_458f2e4107293a094c0d74c3d4c489b342f2cfc1039456cd939656e55f5b7c3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_458f2e4107293a094c0d74c3d4c489b342f2cfc1039456cd939656e55f5b7c3c->enter($__internal_458f2e4107293a094c0d74c3d4c489b342f2cfc1039456cd939656e55f5b7c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_6673f8fdedb5d3ad37de782e3169f06f05c73fb3325312f43eb05d08826588e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6673f8fdedb5d3ad37de782e3169f06f05c73fb3325312f43eb05d08826588e6->enter($__internal_6673f8fdedb5d3ad37de782e3169f06f05c73fb3325312f43eb05d08826588e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_458f2e4107293a094c0d74c3d4c489b342f2cfc1039456cd939656e55f5b7c3c->leave($__internal_458f2e4107293a094c0d74c3d4c489b342f2cfc1039456cd939656e55f5b7c3c_prof);

        
        $__internal_6673f8fdedb5d3ad37de782e3169f06f05c73fb3325312f43eb05d08826588e6->leave($__internal_6673f8fdedb5d3ad37de782e3169f06f05c73fb3325312f43eb05d08826588e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
