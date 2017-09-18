<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_a758a41eae33b9545b4f458d4d7e291bee9043964da6135db95a6ba26547afc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a758a41eae33b9545b4f458d4d7e291bee9043964da6135db95a6ba26547afc4->enter($__internal_a758a41eae33b9545b4f458d4d7e291bee9043964da6135db95a6ba26547afc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_503eb75f28c944abe6b302e6708bceaf42552098e11df74f14848894958baa78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_503eb75f28c944abe6b302e6708bceaf42552098e11df74f14848894958baa78->enter($__internal_503eb75f28c944abe6b302e6708bceaf42552098e11df74f14848894958baa78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a758a41eae33b9545b4f458d4d7e291bee9043964da6135db95a6ba26547afc4->leave($__internal_a758a41eae33b9545b4f458d4d7e291bee9043964da6135db95a6ba26547afc4_prof);

        
        $__internal_503eb75f28c944abe6b302e6708bceaf42552098e11df74f14848894958baa78->leave($__internal_503eb75f28c944abe6b302e6708bceaf42552098e11df74f14848894958baa78_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_43338af7f60fcca22207f49cd2b5926cb72b3bbe33581f60314be038fc7cab5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43338af7f60fcca22207f49cd2b5926cb72b3bbe33581f60314be038fc7cab5a->enter($__internal_43338af7f60fcca22207f49cd2b5926cb72b3bbe33581f60314be038fc7cab5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dc4996d0370c9edaed1b736319c30b306001348c9560b0293682ff3f98b79080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc4996d0370c9edaed1b736319c30b306001348c9560b0293682ff3f98b79080->enter($__internal_dc4996d0370c9edaed1b736319c30b306001348c9560b0293682ff3f98b79080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_dc4996d0370c9edaed1b736319c30b306001348c9560b0293682ff3f98b79080->leave($__internal_dc4996d0370c9edaed1b736319c30b306001348c9560b0293682ff3f98b79080_prof);

        
        $__internal_43338af7f60fcca22207f49cd2b5926cb72b3bbe33581f60314be038fc7cab5a->leave($__internal_43338af7f60fcca22207f49cd2b5926cb72b3bbe33581f60314be038fc7cab5a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cd3c6ba604dea9de34fc6702498b5637b606a3ba7fb8f364f3c4b642bf440914 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd3c6ba604dea9de34fc6702498b5637b606a3ba7fb8f364f3c4b642bf440914->enter($__internal_cd3c6ba604dea9de34fc6702498b5637b606a3ba7fb8f364f3c4b642bf440914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c3bf9f5048efce31f59c822c1df0953ae74172c6433ed10029bd6f6add6544a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3bf9f5048efce31f59c822c1df0953ae74172c6433ed10029bd6f6add6544a2->enter($__internal_c3bf9f5048efce31f59c822c1df0953ae74172c6433ed10029bd6f6add6544a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c3bf9f5048efce31f59c822c1df0953ae74172c6433ed10029bd6f6add6544a2->leave($__internal_c3bf9f5048efce31f59c822c1df0953ae74172c6433ed10029bd6f6add6544a2_prof);

        
        $__internal_cd3c6ba604dea9de34fc6702498b5637b606a3ba7fb8f364f3c4b642bf440914->leave($__internal_cd3c6ba604dea9de34fc6702498b5637b606a3ba7fb8f364f3c4b642bf440914_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2013a626971a92c3c21e17c28811989d2c81b12f3108aa4506c4d29928a70817 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2013a626971a92c3c21e17c28811989d2c81b12f3108aa4506c4d29928a70817->enter($__internal_2013a626971a92c3c21e17c28811989d2c81b12f3108aa4506c4d29928a70817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_53df3e8d0fdcacbfd4badb9b407d91315d6da70d44dcc16fa30ba587262a3a3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53df3e8d0fdcacbfd4badb9b407d91315d6da70d44dcc16fa30ba587262a3a3f->enter($__internal_53df3e8d0fdcacbfd4badb9b407d91315d6da70d44dcc16fa30ba587262a3a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_53df3e8d0fdcacbfd4badb9b407d91315d6da70d44dcc16fa30ba587262a3a3f->leave($__internal_53df3e8d0fdcacbfd4badb9b407d91315d6da70d44dcc16fa30ba587262a3a3f_prof);

        
        $__internal_2013a626971a92c3c21e17c28811989d2c81b12f3108aa4506c4d29928a70817->leave($__internal_2013a626971a92c3c21e17c28811989d2c81b12f3108aa4506c4d29928a70817_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
