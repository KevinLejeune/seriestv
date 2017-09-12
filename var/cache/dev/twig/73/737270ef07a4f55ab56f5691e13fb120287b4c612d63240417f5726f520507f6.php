<?php

/* FrontendBundle:Default:index.html.twig */
class __TwigTemplate_f5c820b1ce40c50d91717bd1fc297bbbfaee29ecda07b242dafc1addf714fd50 extends Twig_Template
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
        $__internal_65d7a145afca129ba9b0c410e2b22469a6e506d9600f5b36fc21a910adc2c79a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65d7a145afca129ba9b0c410e2b22469a6e506d9600f5b36fc21a910adc2c79a->enter($__internal_65d7a145afca129ba9b0c410e2b22469a6e506d9600f5b36fc21a910adc2c79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Default:index.html.twig"));

        $__internal_39fd609eafc5ab9eaa80d02e9890a434468d6d99ba2d01b419d29d0e56a86be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39fd609eafc5ab9eaa80d02e9890a434468d6d99ba2d01b419d29d0e56a86be4->enter($__internal_39fd609eafc5ab9eaa80d02e9890a434468d6d99ba2d01b419d29d0e56a86be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65d7a145afca129ba9b0c410e2b22469a6e506d9600f5b36fc21a910adc2c79a->leave($__internal_65d7a145afca129ba9b0c410e2b22469a6e506d9600f5b36fc21a910adc2c79a_prof);

        
        $__internal_39fd609eafc5ab9eaa80d02e9890a434468d6d99ba2d01b419d29d0e56a86be4->leave($__internal_39fd609eafc5ab9eaa80d02e9890a434468d6d99ba2d01b419d29d0e56a86be4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfd1a6aecbd288869e977659f02ec37ab78d603b1444be3bd603f8e534d13a73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfd1a6aecbd288869e977659f02ec37ab78d603b1444be3bd603f8e534d13a73->enter($__internal_cfd1a6aecbd288869e977659f02ec37ab78d603b1444be3bd603f8e534d13a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b47685e082ec9cf8b967256846e09425cac15035a0affdb2e5aaf3e2a047c07e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b47685e082ec9cf8b967256846e09425cac15035a0affdb2e5aaf3e2a047c07e->enter($__internal_b47685e082ec9cf8b967256846e09425cac15035a0affdb2e5aaf3e2a047c07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\tFrontend
";
        
        $__internal_b47685e082ec9cf8b967256846e09425cac15035a0affdb2e5aaf3e2a047c07e->leave($__internal_b47685e082ec9cf8b967256846e09425cac15035a0affdb2e5aaf3e2a047c07e_prof);

        
        $__internal_cfd1a6aecbd288869e977659f02ec37ab78d603b1444be3bd603f8e534d13a73->leave($__internal_cfd1a6aecbd288869e977659f02ec37ab78d603b1444be3bd603f8e534d13a73_prof);

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
