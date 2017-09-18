<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_010742bacd7922f8c0ef3868b50c1fd85132c12a1b910d45f0522f422e756bf5 extends Twig_Template
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
        $__internal_4709178b7b4aa0a57cbe530ebd7e2b29dbd5ea24722d2b6444771b40c3a2d0b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4709178b7b4aa0a57cbe530ebd7e2b29dbd5ea24722d2b6444771b40c3a2d0b7->enter($__internal_4709178b7b4aa0a57cbe530ebd7e2b29dbd5ea24722d2b6444771b40c3a2d0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4027d14c035d47a3a06a57513830f18da2182711f999cc03c2c68dbbbd35249b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4027d14c035d47a3a06a57513830f18da2182711f999cc03c2c68dbbbd35249b->enter($__internal_4027d14c035d47a3a06a57513830f18da2182711f999cc03c2c68dbbbd35249b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4709178b7b4aa0a57cbe530ebd7e2b29dbd5ea24722d2b6444771b40c3a2d0b7->leave($__internal_4709178b7b4aa0a57cbe530ebd7e2b29dbd5ea24722d2b6444771b40c3a2d0b7_prof);

        
        $__internal_4027d14c035d47a3a06a57513830f18da2182711f999cc03c2c68dbbbd35249b->leave($__internal_4027d14c035d47a3a06a57513830f18da2182711f999cc03c2c68dbbbd35249b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b21d81fdb6f952c453addfcf7ca51554382627ecb2c2d4dfbb23d41ca3268254 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b21d81fdb6f952c453addfcf7ca51554382627ecb2c2d4dfbb23d41ca3268254->enter($__internal_b21d81fdb6f952c453addfcf7ca51554382627ecb2c2d4dfbb23d41ca3268254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7996b6929d9fb9c20db37e6a4d2cc974ee4d233073ebf559be68ed69a09d9dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7996b6929d9fb9c20db37e6a4d2cc974ee4d233073ebf559be68ed69a09d9dcf->enter($__internal_7996b6929d9fb9c20db37e6a4d2cc974ee4d233073ebf559be68ed69a09d9dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7996b6929d9fb9c20db37e6a4d2cc974ee4d233073ebf559be68ed69a09d9dcf->leave($__internal_7996b6929d9fb9c20db37e6a4d2cc974ee4d233073ebf559be68ed69a09d9dcf_prof);

        
        $__internal_b21d81fdb6f952c453addfcf7ca51554382627ecb2c2d4dfbb23d41ca3268254->leave($__internal_b21d81fdb6f952c453addfcf7ca51554382627ecb2c2d4dfbb23d41ca3268254_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dfbf75dfcd9efe276d07d77456f5d286cafadf15eb63d4571fad2f1bc07e9ef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfbf75dfcd9efe276d07d77456f5d286cafadf15eb63d4571fad2f1bc07e9ef4->enter($__internal_dfbf75dfcd9efe276d07d77456f5d286cafadf15eb63d4571fad2f1bc07e9ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7cf8491ad0e5d9f58e2d5d7ac67f2dfc10dae0963be10086c0f1c657e21ca3a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf8491ad0e5d9f58e2d5d7ac67f2dfc10dae0963be10086c0f1c657e21ca3a1->enter($__internal_7cf8491ad0e5d9f58e2d5d7ac67f2dfc10dae0963be10086c0f1c657e21ca3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7cf8491ad0e5d9f58e2d5d7ac67f2dfc10dae0963be10086c0f1c657e21ca3a1->leave($__internal_7cf8491ad0e5d9f58e2d5d7ac67f2dfc10dae0963be10086c0f1c657e21ca3a1_prof);

        
        $__internal_dfbf75dfcd9efe276d07d77456f5d286cafadf15eb63d4571fad2f1bc07e9ef4->leave($__internal_dfbf75dfcd9efe276d07d77456f5d286cafadf15eb63d4571fad2f1bc07e9ef4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1d298bb765966eb74ee2e595437f17b11ece480393cc7cadd3005f6bbc51ffea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d298bb765966eb74ee2e595437f17b11ece480393cc7cadd3005f6bbc51ffea->enter($__internal_1d298bb765966eb74ee2e595437f17b11ece480393cc7cadd3005f6bbc51ffea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8aaeb793e619495ce4ed90760970266f78eb6abdcd690b271bd2d3ee6b8241c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aaeb793e619495ce4ed90760970266f78eb6abdcd690b271bd2d3ee6b8241c8->enter($__internal_8aaeb793e619495ce4ed90760970266f78eb6abdcd690b271bd2d3ee6b8241c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8aaeb793e619495ce4ed90760970266f78eb6abdcd690b271bd2d3ee6b8241c8->leave($__internal_8aaeb793e619495ce4ed90760970266f78eb6abdcd690b271bd2d3ee6b8241c8_prof);

        
        $__internal_1d298bb765966eb74ee2e595437f17b11ece480393cc7cadd3005f6bbc51ffea->leave($__internal_1d298bb765966eb74ee2e595437f17b11ece480393cc7cadd3005f6bbc51ffea_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
