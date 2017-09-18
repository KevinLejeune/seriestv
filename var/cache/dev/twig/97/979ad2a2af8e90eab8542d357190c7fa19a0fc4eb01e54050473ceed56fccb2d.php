<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_273cee18401e8a5901317d10a7dc788bd2884c50b01d2a5e78fa1c5587033ef0 extends Twig_Template
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
        $__internal_c097e183c92434f7bb8b205c18f0e7e433674c26911d7b992fc9d86e11a67fcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c097e183c92434f7bb8b205c18f0e7e433674c26911d7b992fc9d86e11a67fcd->enter($__internal_c097e183c92434f7bb8b205c18f0e7e433674c26911d7b992fc9d86e11a67fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_97d293bda57c8bc073c89f34197c64b67d019da61a39aad7a4d80f048bf3bb16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97d293bda57c8bc073c89f34197c64b67d019da61a39aad7a4d80f048bf3bb16->enter($__internal_97d293bda57c8bc073c89f34197c64b67d019da61a39aad7a4d80f048bf3bb16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_c097e183c92434f7bb8b205c18f0e7e433674c26911d7b992fc9d86e11a67fcd->leave($__internal_c097e183c92434f7bb8b205c18f0e7e433674c26911d7b992fc9d86e11a67fcd_prof);

        
        $__internal_97d293bda57c8bc073c89f34197c64b67d019da61a39aad7a4d80f048bf3bb16->leave($__internal_97d293bda57c8bc073c89f34197c64b67d019da61a39aad7a4d80f048bf3bb16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
