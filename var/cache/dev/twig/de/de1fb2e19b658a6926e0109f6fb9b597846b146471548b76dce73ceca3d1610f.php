<?php

/* BackendBundle:Default:index.html.twig */
class __TwigTemplate_a5f27fa705ab25ec41e98867059dcd6af2aaa06b6abdba490f9e92b62292fe84 extends Twig_Template
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
        $__internal_db431636f85aa0b6a0e020f5e636e78c4ab05d5d886de13110fb825dacf36f5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db431636f85aa0b6a0e020f5e636e78c4ab05d5d886de13110fb825dacf36f5e->enter($__internal_db431636f85aa0b6a0e020f5e636e78c4ab05d5d886de13110fb825dacf36f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackendBundle:Default:index.html.twig"));

        $__internal_24bc2be8abb882e211ee6c487c9f14e1b7964883e06130fcbe6fd5f5c0fe894c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24bc2be8abb882e211ee6c487c9f14e1b7964883e06130fcbe6fd5f5c0fe894c->enter($__internal_24bc2be8abb882e211ee6c487c9f14e1b7964883e06130fcbe6fd5f5c0fe894c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackendBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_db431636f85aa0b6a0e020f5e636e78c4ab05d5d886de13110fb825dacf36f5e->leave($__internal_db431636f85aa0b6a0e020f5e636e78c4ab05d5d886de13110fb825dacf36f5e_prof);

        
        $__internal_24bc2be8abb882e211ee6c487c9f14e1b7964883e06130fcbe6fd5f5c0fe894c->leave($__internal_24bc2be8abb882e211ee6c487c9f14e1b7964883e06130fcbe6fd5f5c0fe894c_prof);

    }

    public function getTemplateName()
    {
        return "BackendBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "BackendBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/seriestv/src/BackendBundle/Resources/views/Default/index.html.twig");
    }
}
