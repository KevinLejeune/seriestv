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
        $__internal_5521a830fedbcf131d5680b280264944a2b90c9e7732862a30855aeb6172c35f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5521a830fedbcf131d5680b280264944a2b90c9e7732862a30855aeb6172c35f->enter($__internal_5521a830fedbcf131d5680b280264944a2b90c9e7732862a30855aeb6172c35f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_082575816e372e2dd924e8821e51af56e9c355872e3c7ec75a9bd68b0a8ae140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_082575816e372e2dd924e8821e51af56e9c355872e3c7ec75a9bd68b0a8ae140->enter($__internal_082575816e372e2dd924e8821e51af56e9c355872e3c7ec75a9bd68b0a8ae140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5521a830fedbcf131d5680b280264944a2b90c9e7732862a30855aeb6172c35f->leave($__internal_5521a830fedbcf131d5680b280264944a2b90c9e7732862a30855aeb6172c35f_prof);

        
        $__internal_082575816e372e2dd924e8821e51af56e9c355872e3c7ec75a9bd68b0a8ae140->leave($__internal_082575816e372e2dd924e8821e51af56e9c355872e3c7ec75a9bd68b0a8ae140_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5a45edc0a54aeede5397ae2ee57edb94f0e33cf9fcebd6511873f4a4aa33f683 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a45edc0a54aeede5397ae2ee57edb94f0e33cf9fcebd6511873f4a4aa33f683->enter($__internal_5a45edc0a54aeede5397ae2ee57edb94f0e33cf9fcebd6511873f4a4aa33f683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ab9b0aff2d744a38e0a1f58f3d919cdf2dc1115b7e90351f2bf28f4a0cf5fcaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab9b0aff2d744a38e0a1f58f3d919cdf2dc1115b7e90351f2bf28f4a0cf5fcaa->enter($__internal_ab9b0aff2d744a38e0a1f58f3d919cdf2dc1115b7e90351f2bf28f4a0cf5fcaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ab9b0aff2d744a38e0a1f58f3d919cdf2dc1115b7e90351f2bf28f4a0cf5fcaa->leave($__internal_ab9b0aff2d744a38e0a1f58f3d919cdf2dc1115b7e90351f2bf28f4a0cf5fcaa_prof);

        
        $__internal_5a45edc0a54aeede5397ae2ee57edb94f0e33cf9fcebd6511873f4a4aa33f683->leave($__internal_5a45edc0a54aeede5397ae2ee57edb94f0e33cf9fcebd6511873f4a4aa33f683_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1d3af6472db001ff946e7528bf0d30120e4c1c7152a94519dc924d2b93f79196 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d3af6472db001ff946e7528bf0d30120e4c1c7152a94519dc924d2b93f79196->enter($__internal_1d3af6472db001ff946e7528bf0d30120e4c1c7152a94519dc924d2b93f79196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_19ff687e3be531b82da5b9996fb27d714a56ff4d66022e608976a5b877891330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ff687e3be531b82da5b9996fb27d714a56ff4d66022e608976a5b877891330->enter($__internal_19ff687e3be531b82da5b9996fb27d714a56ff4d66022e608976a5b877891330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_19ff687e3be531b82da5b9996fb27d714a56ff4d66022e608976a5b877891330->leave($__internal_19ff687e3be531b82da5b9996fb27d714a56ff4d66022e608976a5b877891330_prof);

        
        $__internal_1d3af6472db001ff946e7528bf0d30120e4c1c7152a94519dc924d2b93f79196->leave($__internal_1d3af6472db001ff946e7528bf0d30120e4c1c7152a94519dc924d2b93f79196_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f223a1eb3c617685d0e08b98fe92a431dcbf9f08e6e5846b13e38f05f1bd9ffd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f223a1eb3c617685d0e08b98fe92a431dcbf9f08e6e5846b13e38f05f1bd9ffd->enter($__internal_f223a1eb3c617685d0e08b98fe92a431dcbf9f08e6e5846b13e38f05f1bd9ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_74918362d2cede77d7afb285c8915e9f6a2b51f3390cc709d80a2694a5b74cde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74918362d2cede77d7afb285c8915e9f6a2b51f3390cc709d80a2694a5b74cde->enter($__internal_74918362d2cede77d7afb285c8915e9f6a2b51f3390cc709d80a2694a5b74cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_74918362d2cede77d7afb285c8915e9f6a2b51f3390cc709d80a2694a5b74cde->leave($__internal_74918362d2cede77d7afb285c8915e9f6a2b51f3390cc709d80a2694a5b74cde_prof);

        
        $__internal_f223a1eb3c617685d0e08b98fe92a431dcbf9f08e6e5846b13e38f05f1bd9ffd->leave($__internal_f223a1eb3c617685d0e08b98fe92a431dcbf9f08e6e5846b13e38f05f1bd9ffd_prof);

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
