<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5290a5a34246a26095d6bb3b1e2a021f3e474a6860c4498366d440b6a0a3d82b extends Twig_Template
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
        $__internal_a924162348ee7a0ad35af31d2c5f7b6a87b434a3ab8bc3f4f5323c72efc70ca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a924162348ee7a0ad35af31d2c5f7b6a87b434a3ab8bc3f4f5323c72efc70ca5->enter($__internal_a924162348ee7a0ad35af31d2c5f7b6a87b434a3ab8bc3f4f5323c72efc70ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_bed7540564a2d77bbb59d0d3154c5823d7438c9def55af5d9b882dcb62dc8b85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bed7540564a2d77bbb59d0d3154c5823d7438c9def55af5d9b882dcb62dc8b85->enter($__internal_bed7540564a2d77bbb59d0d3154c5823d7438c9def55af5d9b882dcb62dc8b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_a924162348ee7a0ad35af31d2c5f7b6a87b434a3ab8bc3f4f5323c72efc70ca5->leave($__internal_a924162348ee7a0ad35af31d2c5f7b6a87b434a3ab8bc3f4f5323c72efc70ca5_prof);

        
        $__internal_bed7540564a2d77bbb59d0d3154c5823d7438c9def55af5d9b882dcb62dc8b85->leave($__internal_bed7540564a2d77bbb59d0d3154c5823d7438c9def55af5d9b882dcb62dc8b85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
