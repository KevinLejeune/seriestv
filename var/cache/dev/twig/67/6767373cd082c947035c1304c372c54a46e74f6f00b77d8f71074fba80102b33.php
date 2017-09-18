<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_af193a305e15e92105d5ffb823e9a400347a32c6e416ee74f13d00ce1a949e52 extends Twig_Template
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
        $__internal_8c5d36f75e2c5bea864cc3797a9fcbe01f3ce34ef42d3fd241e0762f6b7c35bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c5d36f75e2c5bea864cc3797a9fcbe01f3ce34ef42d3fd241e0762f6b7c35bf->enter($__internal_8c5d36f75e2c5bea864cc3797a9fcbe01f3ce34ef42d3fd241e0762f6b7c35bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_4a186fc705b9c9832edc7c513f19ded6683d49b7d0c668ce46438088177706bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a186fc705b9c9832edc7c513f19ded6683d49b7d0c668ce46438088177706bc->enter($__internal_4a186fc705b9c9832edc7c513f19ded6683d49b7d0c668ce46438088177706bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_8c5d36f75e2c5bea864cc3797a9fcbe01f3ce34ef42d3fd241e0762f6b7c35bf->leave($__internal_8c5d36f75e2c5bea864cc3797a9fcbe01f3ce34ef42d3fd241e0762f6b7c35bf_prof);

        
        $__internal_4a186fc705b9c9832edc7c513f19ded6683d49b7d0c668ce46438088177706bc->leave($__internal_4a186fc705b9c9832edc7c513f19ded6683d49b7d0c668ce46438088177706bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
