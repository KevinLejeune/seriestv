<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_c73a916adef90294612b3e613cdcdd32c28385911d292c192a5857bfa5acb0c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca10737286247380f1109f36f660fe34bd1fc664534308587a826c8e6875feb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca10737286247380f1109f36f660fe34bd1fc664534308587a826c8e6875feb2->enter($__internal_ca10737286247380f1109f36f660fe34bd1fc664534308587a826c8e6875feb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_14e4f3fe041e233731a10955fa0cb77863f8d43cfa34138fa6032415e1daf371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14e4f3fe041e233731a10955fa0cb77863f8d43cfa34138fa6032415e1daf371->enter($__internal_14e4f3fe041e233731a10955fa0cb77863f8d43cfa34138fa6032415e1daf371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca10737286247380f1109f36f660fe34bd1fc664534308587a826c8e6875feb2->leave($__internal_ca10737286247380f1109f36f660fe34bd1fc664534308587a826c8e6875feb2_prof);

        
        $__internal_14e4f3fe041e233731a10955fa0cb77863f8d43cfa34138fa6032415e1daf371->leave($__internal_14e4f3fe041e233731a10955fa0cb77863f8d43cfa34138fa6032415e1daf371_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b37c71350618847ea118fc54aba4ab8e960eaeed94c44803d82efedc02fe583d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b37c71350618847ea118fc54aba4ab8e960eaeed94c44803d82efedc02fe583d->enter($__internal_b37c71350618847ea118fc54aba4ab8e960eaeed94c44803d82efedc02fe583d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6745f8b76f3279241f4402f7a2d94d731e0ff8889958fc6a9e0dd7a85a6d9c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6745f8b76f3279241f4402f7a2d94d731e0ff8889958fc6a9e0dd7a85a6d9c35->enter($__internal_6745f8b76f3279241f4402f7a2d94d731e0ff8889958fc6a9e0dd7a85a6d9c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_6745f8b76f3279241f4402f7a2d94d731e0ff8889958fc6a9e0dd7a85a6d9c35->leave($__internal_6745f8b76f3279241f4402f7a2d94d731e0ff8889958fc6a9e0dd7a85a6d9c35_prof);

        
        $__internal_b37c71350618847ea118fc54aba4ab8e960eaeed94c44803d82efedc02fe583d->leave($__internal_b37c71350618847ea118fc54aba4ab8e960eaeed94c44803d82efedc02fe583d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ada0dfe1da6e48bb8392ff355a150e8bd3e9c05cd17b8c23688c7f52c9600277 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ada0dfe1da6e48bb8392ff355a150e8bd3e9c05cd17b8c23688c7f52c9600277->enter($__internal_ada0dfe1da6e48bb8392ff355a150e8bd3e9c05cd17b8c23688c7f52c9600277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d195e44bf1312909cd59cc77ee4f404dc5926d2fe6988263b12f2bfcf53cec15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d195e44bf1312909cd59cc77ee4f404dc5926d2fe6988263b12f2bfcf53cec15->enter($__internal_d195e44bf1312909cd59cc77ee4f404dc5926d2fe6988263b12f2bfcf53cec15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_d195e44bf1312909cd59cc77ee4f404dc5926d2fe6988263b12f2bfcf53cec15->leave($__internal_d195e44bf1312909cd59cc77ee4f404dc5926d2fe6988263b12f2bfcf53cec15_prof);

        
        $__internal_ada0dfe1da6e48bb8392ff355a150e8bd3e9c05cd17b8c23688c7f52c9600277->leave($__internal_ada0dfe1da6e48bb8392ff355a150e8bd3e9c05cd17b8c23688c7f52c9600277_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
