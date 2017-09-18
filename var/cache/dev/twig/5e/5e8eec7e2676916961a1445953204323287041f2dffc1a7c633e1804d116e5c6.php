<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d78503504fb6b096f928955d266daa015d957a8b58d47e03bfb63bdce6b1203b extends Twig_Template
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
        $__internal_ade2e407946c34f961d5a4e693fdcbfdadec9141f0cae36875721352e9a1d8e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ade2e407946c34f961d5a4e693fdcbfdadec9141f0cae36875721352e9a1d8e5->enter($__internal_ade2e407946c34f961d5a4e693fdcbfdadec9141f0cae36875721352e9a1d8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_88034e6b642b4376d826a35e6e605264232bae8857e5f8bd496790dda72917bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88034e6b642b4376d826a35e6e605264232bae8857e5f8bd496790dda72917bb->enter($__internal_88034e6b642b4376d826a35e6e605264232bae8857e5f8bd496790dda72917bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_ade2e407946c34f961d5a4e693fdcbfdadec9141f0cae36875721352e9a1d8e5->leave($__internal_ade2e407946c34f961d5a4e693fdcbfdadec9141f0cae36875721352e9a1d8e5_prof);

        
        $__internal_88034e6b642b4376d826a35e6e605264232bae8857e5f8bd496790dda72917bb->leave($__internal_88034e6b642b4376d826a35e6e605264232bae8857e5f8bd496790dda72917bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
