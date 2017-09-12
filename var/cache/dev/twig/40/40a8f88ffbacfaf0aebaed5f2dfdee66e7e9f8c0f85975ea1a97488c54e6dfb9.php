<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e67d1b62d54d4f7e0b3d65b85b48bd0d98c17f0a53b6bd82e63f74521d4837e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e67d1b62d54d4f7e0b3d65b85b48bd0d98c17f0a53b6bd82e63f74521d4837e5->enter($__internal_e67d1b62d54d4f7e0b3d65b85b48bd0d98c17f0a53b6bd82e63f74521d4837e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8b0df89e424db9bda4f6ed4f193380ec35ea51f1d6d40529c6447ff04359af6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b0df89e424db9bda4f6ed4f193380ec35ea51f1d6d40529c6447ff04359af6d->enter($__internal_8b0df89e424db9bda4f6ed4f193380ec35ea51f1d6d40529c6447ff04359af6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e67d1b62d54d4f7e0b3d65b85b48bd0d98c17f0a53b6bd82e63f74521d4837e5->leave($__internal_e67d1b62d54d4f7e0b3d65b85b48bd0d98c17f0a53b6bd82e63f74521d4837e5_prof);

        
        $__internal_8b0df89e424db9bda4f6ed4f193380ec35ea51f1d6d40529c6447ff04359af6d->leave($__internal_8b0df89e424db9bda4f6ed4f193380ec35ea51f1d6d40529c6447ff04359af6d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1910d51252419bdff2a8450cd4f8a5ad30a521e3b8d25517b87a3871247bb694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1910d51252419bdff2a8450cd4f8a5ad30a521e3b8d25517b87a3871247bb694->enter($__internal_1910d51252419bdff2a8450cd4f8a5ad30a521e3b8d25517b87a3871247bb694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2aa082b443b5a2fb92a66c6ab961adf01a6c9d22211144bfd5ab6dcdbac4d14c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa082b443b5a2fb92a66c6ab961adf01a6c9d22211144bfd5ab6dcdbac4d14c->enter($__internal_2aa082b443b5a2fb92a66c6ab961adf01a6c9d22211144bfd5ab6dcdbac4d14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2aa082b443b5a2fb92a66c6ab961adf01a6c9d22211144bfd5ab6dcdbac4d14c->leave($__internal_2aa082b443b5a2fb92a66c6ab961adf01a6c9d22211144bfd5ab6dcdbac4d14c_prof);

        
        $__internal_1910d51252419bdff2a8450cd4f8a5ad30a521e3b8d25517b87a3871247bb694->leave($__internal_1910d51252419bdff2a8450cd4f8a5ad30a521e3b8d25517b87a3871247bb694_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b75a9ce9d3d2976c3882bd1bdd892fdb8b2f708ac324549d9c820016d0ef4c7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b75a9ce9d3d2976c3882bd1bdd892fdb8b2f708ac324549d9c820016d0ef4c7d->enter($__internal_b75a9ce9d3d2976c3882bd1bdd892fdb8b2f708ac324549d9c820016d0ef4c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d9b367f5a0d3d821f6b25c4a015efec96026cc9bd077a17b34c8237bdc14e1ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b367f5a0d3d821f6b25c4a015efec96026cc9bd077a17b34c8237bdc14e1ae->enter($__internal_d9b367f5a0d3d821f6b25c4a015efec96026cc9bd077a17b34c8237bdc14e1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d9b367f5a0d3d821f6b25c4a015efec96026cc9bd077a17b34c8237bdc14e1ae->leave($__internal_d9b367f5a0d3d821f6b25c4a015efec96026cc9bd077a17b34c8237bdc14e1ae_prof);

        
        $__internal_b75a9ce9d3d2976c3882bd1bdd892fdb8b2f708ac324549d9c820016d0ef4c7d->leave($__internal_b75a9ce9d3d2976c3882bd1bdd892fdb8b2f708ac324549d9c820016d0ef4c7d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e3a21e3d788b0a7e3ac4b64303fd9d553b6d115abb7971abcb655cd1986bc8de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3a21e3d788b0a7e3ac4b64303fd9d553b6d115abb7971abcb655cd1986bc8de->enter($__internal_e3a21e3d788b0a7e3ac4b64303fd9d553b6d115abb7971abcb655cd1986bc8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f3fc7faa6e09c31889a7115d5a3846b1c480244566482610b12cd68a3a6e4d3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3fc7faa6e09c31889a7115d5a3846b1c480244566482610b12cd68a3a6e4d3d->enter($__internal_f3fc7faa6e09c31889a7115d5a3846b1c480244566482610b12cd68a3a6e4d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f3fc7faa6e09c31889a7115d5a3846b1c480244566482610b12cd68a3a6e4d3d->leave($__internal_f3fc7faa6e09c31889a7115d5a3846b1c480244566482610b12cd68a3a6e4d3d_prof);

        
        $__internal_e3a21e3d788b0a7e3ac4b64303fd9d553b6d115abb7971abcb655cd1986bc8de->leave($__internal_e3a21e3d788b0a7e3ac4b64303fd9d553b6d115abb7971abcb655cd1986bc8de_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
