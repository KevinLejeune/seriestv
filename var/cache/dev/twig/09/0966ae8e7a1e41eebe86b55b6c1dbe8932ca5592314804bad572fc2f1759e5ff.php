<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_8c1b7229f37d58e1983aba035fb09422e2028941705f2b5c0631ef2ce67dc990 extends Twig_Template
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
        $__internal_37b2bd094214962f205fd9646b19a86626ea4c3a583c71e475e9a8adcdb579bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37b2bd094214962f205fd9646b19a86626ea4c3a583c71e475e9a8adcdb579bc->enter($__internal_37b2bd094214962f205fd9646b19a86626ea4c3a583c71e475e9a8adcdb579bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_502030342145754b257e10bb20e8a3d2fb0fc1b7d4b7262d05936d8f681ca023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_502030342145754b257e10bb20e8a3d2fb0fc1b7d4b7262d05936d8f681ca023->enter($__internal_502030342145754b257e10bb20e8a3d2fb0fc1b7d4b7262d05936d8f681ca023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_37b2bd094214962f205fd9646b19a86626ea4c3a583c71e475e9a8adcdb579bc->leave($__internal_37b2bd094214962f205fd9646b19a86626ea4c3a583c71e475e9a8adcdb579bc_prof);

        
        $__internal_502030342145754b257e10bb20e8a3d2fb0fc1b7d4b7262d05936d8f681ca023->leave($__internal_502030342145754b257e10bb20e8a3d2fb0fc1b7d4b7262d05936d8f681ca023_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
