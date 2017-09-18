<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4ea0fb61e9124b98a6f4fefb8c5442657a9fecd68064b979a47c6009818ead9b extends Twig_Template
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
        $__internal_96d5f306102c9b7fc0c496c3261e601ac18f538a5397f2047e067e7250ae4711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96d5f306102c9b7fc0c496c3261e601ac18f538a5397f2047e067e7250ae4711->enter($__internal_96d5f306102c9b7fc0c496c3261e601ac18f538a5397f2047e067e7250ae4711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_5f6c334a7bc689ea8ad93a6e9a14c7ffdfd358a511b79e526b47d5af35b48acd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f6c334a7bc689ea8ad93a6e9a14c7ffdfd358a511b79e526b47d5af35b48acd->enter($__internal_5f6c334a7bc689ea8ad93a6e9a14c7ffdfd358a511b79e526b47d5af35b48acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_96d5f306102c9b7fc0c496c3261e601ac18f538a5397f2047e067e7250ae4711->leave($__internal_96d5f306102c9b7fc0c496c3261e601ac18f538a5397f2047e067e7250ae4711_prof);

        
        $__internal_5f6c334a7bc689ea8ad93a6e9a14c7ffdfd358a511b79e526b47d5af35b48acd->leave($__internal_5f6c334a7bc689ea8ad93a6e9a14c7ffdfd358a511b79e526b47d5af35b48acd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
