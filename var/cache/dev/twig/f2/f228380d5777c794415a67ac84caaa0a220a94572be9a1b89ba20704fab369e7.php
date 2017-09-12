<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96852b8170199fe3dfb60badec1319dbd50eb53231070c47b2c2a550edebf44f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96852b8170199fe3dfb60badec1319dbd50eb53231070c47b2c2a550edebf44f->enter($__internal_96852b8170199fe3dfb60badec1319dbd50eb53231070c47b2c2a550edebf44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ceb33fdb35f438cb07932426a509ca317093a230ca76259dacd739b06a7022bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb33fdb35f438cb07932426a509ca317093a230ca76259dacd739b06a7022bb->enter($__internal_ceb33fdb35f438cb07932426a509ca317093a230ca76259dacd739b06a7022bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96852b8170199fe3dfb60badec1319dbd50eb53231070c47b2c2a550edebf44f->leave($__internal_96852b8170199fe3dfb60badec1319dbd50eb53231070c47b2c2a550edebf44f_prof);

        
        $__internal_ceb33fdb35f438cb07932426a509ca317093a230ca76259dacd739b06a7022bb->leave($__internal_ceb33fdb35f438cb07932426a509ca317093a230ca76259dacd739b06a7022bb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cb6057f9f3fbe0856e707923e53c1d4b3603a074b32cba22e8c680c5f5d2b1c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb6057f9f3fbe0856e707923e53c1d4b3603a074b32cba22e8c680c5f5d2b1c3->enter($__internal_cb6057f9f3fbe0856e707923e53c1d4b3603a074b32cba22e8c680c5f5d2b1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0b276441f009a9a202abafa8360f914c68225806c9fbb3836e1e9ca08bfc6744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b276441f009a9a202abafa8360f914c68225806c9fbb3836e1e9ca08bfc6744->enter($__internal_0b276441f009a9a202abafa8360f914c68225806c9fbb3836e1e9ca08bfc6744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0b276441f009a9a202abafa8360f914c68225806c9fbb3836e1e9ca08bfc6744->leave($__internal_0b276441f009a9a202abafa8360f914c68225806c9fbb3836e1e9ca08bfc6744_prof);

        
        $__internal_cb6057f9f3fbe0856e707923e53c1d4b3603a074b32cba22e8c680c5f5d2b1c3->leave($__internal_cb6057f9f3fbe0856e707923e53c1d4b3603a074b32cba22e8c680c5f5d2b1c3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d58b9e43593a10b363399d20fa6bec0ab8a8bd2ff1a77f3fb8753c30b9d8b11d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d58b9e43593a10b363399d20fa6bec0ab8a8bd2ff1a77f3fb8753c30b9d8b11d->enter($__internal_d58b9e43593a10b363399d20fa6bec0ab8a8bd2ff1a77f3fb8753c30b9d8b11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7f593d5f13951e2c545bc0f3eaa560a0a767fc9a9470c436cc0dae23a7ff6b6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f593d5f13951e2c545bc0f3eaa560a0a767fc9a9470c436cc0dae23a7ff6b6d->enter($__internal_7f593d5f13951e2c545bc0f3eaa560a0a767fc9a9470c436cc0dae23a7ff6b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7f593d5f13951e2c545bc0f3eaa560a0a767fc9a9470c436cc0dae23a7ff6b6d->leave($__internal_7f593d5f13951e2c545bc0f3eaa560a0a767fc9a9470c436cc0dae23a7ff6b6d_prof);

        
        $__internal_d58b9e43593a10b363399d20fa6bec0ab8a8bd2ff1a77f3fb8753c30b9d8b11d->leave($__internal_d58b9e43593a10b363399d20fa6bec0ab8a8bd2ff1a77f3fb8753c30b9d8b11d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f7808a64c44ee684d750fb0c300b9d00f99e41428ae214b44eaea89d07ee110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f7808a64c44ee684d750fb0c300b9d00f99e41428ae214b44eaea89d07ee110->enter($__internal_6f7808a64c44ee684d750fb0c300b9d00f99e41428ae214b44eaea89d07ee110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0855edd2b85c6fb2b07c8023bd55115270218e5528076af953824898dac0325a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0855edd2b85c6fb2b07c8023bd55115270218e5528076af953824898dac0325a->enter($__internal_0855edd2b85c6fb2b07c8023bd55115270218e5528076af953824898dac0325a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0855edd2b85c6fb2b07c8023bd55115270218e5528076af953824898dac0325a->leave($__internal_0855edd2b85c6fb2b07c8023bd55115270218e5528076af953824898dac0325a_prof);

        
        $__internal_6f7808a64c44ee684d750fb0c300b9d00f99e41428ae214b44eaea89d07ee110->leave($__internal_6f7808a64c44ee684d750fb0c300b9d00f99e41428ae214b44eaea89d07ee110_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
