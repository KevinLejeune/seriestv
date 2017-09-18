<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_3e3f39508b4382a848393181ef1fb966c38c4ff5a26a2d0ff786833e01e587dc extends Twig_Template
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
        $__internal_649b797c3cf6ddf9ef8c12131b9516219d3e08ade1bcc67632d6469a6c6c06f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_649b797c3cf6ddf9ef8c12131b9516219d3e08ade1bcc67632d6469a6c6c06f0->enter($__internal_649b797c3cf6ddf9ef8c12131b9516219d3e08ade1bcc67632d6469a6c6c06f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_68981b7b0816814a06e2ac7bd04513919de4e0e2fd1a29932e339403e346b243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68981b7b0816814a06e2ac7bd04513919de4e0e2fd1a29932e339403e346b243->enter($__internal_68981b7b0816814a06e2ac7bd04513919de4e0e2fd1a29932e339403e346b243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_649b797c3cf6ddf9ef8c12131b9516219d3e08ade1bcc67632d6469a6c6c06f0->leave($__internal_649b797c3cf6ddf9ef8c12131b9516219d3e08ade1bcc67632d6469a6c6c06f0_prof);

        
        $__internal_68981b7b0816814a06e2ac7bd04513919de4e0e2fd1a29932e339403e346b243->leave($__internal_68981b7b0816814a06e2ac7bd04513919de4e0e2fd1a29932e339403e346b243_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
