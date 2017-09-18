<?php

/* FrontendBundle:Default:index.html.twig */
class __TwigTemplate_c3094c40f3d4a10c5b6f93074837040adc1ed5e18703dc2f04ad490968beab26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FrontendBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af3090a4a81807f5613c8ed54297e06fb82c7447e262d14dca2813e39f4f46a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af3090a4a81807f5613c8ed54297e06fb82c7447e262d14dca2813e39f4f46a1->enter($__internal_af3090a4a81807f5613c8ed54297e06fb82c7447e262d14dca2813e39f4f46a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Default:index.html.twig"));

        $__internal_b4f1ebeb9b8903a677e48e3621881b3c67c4c34d802a73056977d852eac8630e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4f1ebeb9b8903a677e48e3621881b3c67c4c34d802a73056977d852eac8630e->enter($__internal_b4f1ebeb9b8903a677e48e3621881b3c67c4c34d802a73056977d852eac8630e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af3090a4a81807f5613c8ed54297e06fb82c7447e262d14dca2813e39f4f46a1->leave($__internal_af3090a4a81807f5613c8ed54297e06fb82c7447e262d14dca2813e39f4f46a1_prof);

        
        $__internal_b4f1ebeb9b8903a677e48e3621881b3c67c4c34d802a73056977d852eac8630e->leave($__internal_b4f1ebeb9b8903a677e48e3621881b3c67c4c34d802a73056977d852eac8630e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed07c726aa0665a94142575d7dfce31b4821e416eff0d7bf6017cd0dfc08b4a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed07c726aa0665a94142575d7dfce31b4821e416eff0d7bf6017cd0dfc08b4a6->enter($__internal_ed07c726aa0665a94142575d7dfce31b4821e416eff0d7bf6017cd0dfc08b4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ffef26e061d9bc3bf6df025bf4208d600ea0aa04c7356a760e0cfb1bdeebd086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffef26e061d9bc3bf6df025bf4208d600ea0aa04c7356a760e0cfb1bdeebd086->enter($__internal_ffef26e061d9bc3bf6df025bf4208d600ea0aa04c7356a760e0cfb1bdeebd086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\tFrontend
";
        
        $__internal_ffef26e061d9bc3bf6df025bf4208d600ea0aa04c7356a760e0cfb1bdeebd086->leave($__internal_ffef26e061d9bc3bf6df025bf4208d600ea0aa04c7356a760e0cfb1bdeebd086_prof);

        
        $__internal_ed07c726aa0665a94142575d7dfce31b4821e416eff0d7bf6017cd0dfc08b4a6->leave($__internal_ed07c726aa0665a94142575d7dfce31b4821e416eff0d7bf6017cd0dfc08b4a6_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
\tFrontend
{% endblock %}", "FrontendBundle:Default:index.html.twig", "/Applications/MAMP/htdocs/seriestv/src/FrontendBundle/Resources/views/Default/index.html.twig");
    }
}
