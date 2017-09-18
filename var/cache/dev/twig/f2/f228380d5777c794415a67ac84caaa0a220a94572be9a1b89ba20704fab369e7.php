<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_bb34b68c3c42be6cea6d12f30e482b2458ef7b4a428dc602e8277699a512ac8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb34b68c3c42be6cea6d12f30e482b2458ef7b4a428dc602e8277699a512ac8c->enter($__internal_bb34b68c3c42be6cea6d12f30e482b2458ef7b4a428dc602e8277699a512ac8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_7472ee89e8e4c9f356a5b586d0e5330276131d81d0dbbba0ae623633d8ad9178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7472ee89e8e4c9f356a5b586d0e5330276131d81d0dbbba0ae623633d8ad9178->enter($__internal_7472ee89e8e4c9f356a5b586d0e5330276131d81d0dbbba0ae623633d8ad9178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb34b68c3c42be6cea6d12f30e482b2458ef7b4a428dc602e8277699a512ac8c->leave($__internal_bb34b68c3c42be6cea6d12f30e482b2458ef7b4a428dc602e8277699a512ac8c_prof);

        
        $__internal_7472ee89e8e4c9f356a5b586d0e5330276131d81d0dbbba0ae623633d8ad9178->leave($__internal_7472ee89e8e4c9f356a5b586d0e5330276131d81d0dbbba0ae623633d8ad9178_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_72deeec78eb0d74051309ed55e1b4c4a2584a761d3833bb1906f7c244c60de2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72deeec78eb0d74051309ed55e1b4c4a2584a761d3833bb1906f7c244c60de2a->enter($__internal_72deeec78eb0d74051309ed55e1b4c4a2584a761d3833bb1906f7c244c60de2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6112357de48ae8b010fdc9fd8060937aeaadf1bab381097835f8d2d4f3036a6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6112357de48ae8b010fdc9fd8060937aeaadf1bab381097835f8d2d4f3036a6a->enter($__internal_6112357de48ae8b010fdc9fd8060937aeaadf1bab381097835f8d2d4f3036a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6112357de48ae8b010fdc9fd8060937aeaadf1bab381097835f8d2d4f3036a6a->leave($__internal_6112357de48ae8b010fdc9fd8060937aeaadf1bab381097835f8d2d4f3036a6a_prof);

        
        $__internal_72deeec78eb0d74051309ed55e1b4c4a2584a761d3833bb1906f7c244c60de2a->leave($__internal_72deeec78eb0d74051309ed55e1b4c4a2584a761d3833bb1906f7c244c60de2a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8cb1d1c7e483e166f1d1042be551675c843fe6ba9ab756a77428c68f154f5a40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cb1d1c7e483e166f1d1042be551675c843fe6ba9ab756a77428c68f154f5a40->enter($__internal_8cb1d1c7e483e166f1d1042be551675c843fe6ba9ab756a77428c68f154f5a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e44b9cb7adf2e1e465f7c796cd484786f668c44784e596b6fca8d0559a235a02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e44b9cb7adf2e1e465f7c796cd484786f668c44784e596b6fca8d0559a235a02->enter($__internal_e44b9cb7adf2e1e465f7c796cd484786f668c44784e596b6fca8d0559a235a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e44b9cb7adf2e1e465f7c796cd484786f668c44784e596b6fca8d0559a235a02->leave($__internal_e44b9cb7adf2e1e465f7c796cd484786f668c44784e596b6fca8d0559a235a02_prof);

        
        $__internal_8cb1d1c7e483e166f1d1042be551675c843fe6ba9ab756a77428c68f154f5a40->leave($__internal_8cb1d1c7e483e166f1d1042be551675c843fe6ba9ab756a77428c68f154f5a40_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f40a4b4d83bf87401654ad0b39bd5fe9b48701e63753ce88a980ddd48d2c8f29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f40a4b4d83bf87401654ad0b39bd5fe9b48701e63753ce88a980ddd48d2c8f29->enter($__internal_f40a4b4d83bf87401654ad0b39bd5fe9b48701e63753ce88a980ddd48d2c8f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b420310e888dd08f44ab7633546958c0a8dcd19de9fa09bf8bdf200b3a448f76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b420310e888dd08f44ab7633546958c0a8dcd19de9fa09bf8bdf200b3a448f76->enter($__internal_b420310e888dd08f44ab7633546958c0a8dcd19de9fa09bf8bdf200b3a448f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b420310e888dd08f44ab7633546958c0a8dcd19de9fa09bf8bdf200b3a448f76->leave($__internal_b420310e888dd08f44ab7633546958c0a8dcd19de9fa09bf8bdf200b3a448f76_prof);

        
        $__internal_f40a4b4d83bf87401654ad0b39bd5fe9b48701e63753ce88a980ddd48d2c8f29->leave($__internal_f40a4b4d83bf87401654ad0b39bd5fe9b48701e63753ce88a980ddd48d2c8f29_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
