<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ff745af4c9785908df5f50f3220a611a7a8150c8acb4b2d4fa58002236a15742 extends Twig_Template
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
        $__internal_3a2fa0fa5f3673ad09db36ad7508622866d8650af21cba90301073b3a0072400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a2fa0fa5f3673ad09db36ad7508622866d8650af21cba90301073b3a0072400->enter($__internal_3a2fa0fa5f3673ad09db36ad7508622866d8650af21cba90301073b3a0072400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_fb0987a0880c9d35789e586b20f14f91b5f78ae458d9804a4c358a69f45498fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb0987a0880c9d35789e586b20f14f91b5f78ae458d9804a4c358a69f45498fe->enter($__internal_fb0987a0880c9d35789e586b20f14f91b5f78ae458d9804a4c358a69f45498fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a2fa0fa5f3673ad09db36ad7508622866d8650af21cba90301073b3a0072400->leave($__internal_3a2fa0fa5f3673ad09db36ad7508622866d8650af21cba90301073b3a0072400_prof);

        
        $__internal_fb0987a0880c9d35789e586b20f14f91b5f78ae458d9804a4c358a69f45498fe->leave($__internal_fb0987a0880c9d35789e586b20f14f91b5f78ae458d9804a4c358a69f45498fe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4537f09ee27b4646bc46cdaa6d8fd7e89cbdf42540ccd48a121dfb0875707b99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4537f09ee27b4646bc46cdaa6d8fd7e89cbdf42540ccd48a121dfb0875707b99->enter($__internal_4537f09ee27b4646bc46cdaa6d8fd7e89cbdf42540ccd48a121dfb0875707b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0bf3b6c0d9a96235c3bcb9ad9fa38cd7a3d7a4f4187cf4e40183578df4d0cbd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bf3b6c0d9a96235c3bcb9ad9fa38cd7a3d7a4f4187cf4e40183578df4d0cbd8->enter($__internal_0bf3b6c0d9a96235c3bcb9ad9fa38cd7a3d7a4f4187cf4e40183578df4d0cbd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0bf3b6c0d9a96235c3bcb9ad9fa38cd7a3d7a4f4187cf4e40183578df4d0cbd8->leave($__internal_0bf3b6c0d9a96235c3bcb9ad9fa38cd7a3d7a4f4187cf4e40183578df4d0cbd8_prof);

        
        $__internal_4537f09ee27b4646bc46cdaa6d8fd7e89cbdf42540ccd48a121dfb0875707b99->leave($__internal_4537f09ee27b4646bc46cdaa6d8fd7e89cbdf42540ccd48a121dfb0875707b99_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8ccc489a2916c3918865248acd3736a7bbdedbb29d76692dba35b95f71ec5d28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ccc489a2916c3918865248acd3736a7bbdedbb29d76692dba35b95f71ec5d28->enter($__internal_8ccc489a2916c3918865248acd3736a7bbdedbb29d76692dba35b95f71ec5d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d6ad329f3f5c77deff2321d4db68b1b811c6c9b498f4a8c1e6d5a629b488b5ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ad329f3f5c77deff2321d4db68b1b811c6c9b498f4a8c1e6d5a629b488b5ad->enter($__internal_d6ad329f3f5c77deff2321d4db68b1b811c6c9b498f4a8c1e6d5a629b488b5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d6ad329f3f5c77deff2321d4db68b1b811c6c9b498f4a8c1e6d5a629b488b5ad->leave($__internal_d6ad329f3f5c77deff2321d4db68b1b811c6c9b498f4a8c1e6d5a629b488b5ad_prof);

        
        $__internal_8ccc489a2916c3918865248acd3736a7bbdedbb29d76692dba35b95f71ec5d28->leave($__internal_8ccc489a2916c3918865248acd3736a7bbdedbb29d76692dba35b95f71ec5d28_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ba25010c0327808f84f6634a4e63c0b9336a67daa485397adb16a3dd82e2c484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba25010c0327808f84f6634a4e63c0b9336a67daa485397adb16a3dd82e2c484->enter($__internal_ba25010c0327808f84f6634a4e63c0b9336a67daa485397adb16a3dd82e2c484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_648ce5c8c9ceba4afaec6cefe4a75eb639d1f18b8b4afe455d28f40d3838e2f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_648ce5c8c9ceba4afaec6cefe4a75eb639d1f18b8b4afe455d28f40d3838e2f8->enter($__internal_648ce5c8c9ceba4afaec6cefe4a75eb639d1f18b8b4afe455d28f40d3838e2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_648ce5c8c9ceba4afaec6cefe4a75eb639d1f18b8b4afe455d28f40d3838e2f8->leave($__internal_648ce5c8c9ceba4afaec6cefe4a75eb639d1f18b8b4afe455d28f40d3838e2f8_prof);

        
        $__internal_ba25010c0327808f84f6634a4e63c0b9336a67daa485397adb16a3dd82e2c484->leave($__internal_ba25010c0327808f84f6634a4e63c0b9336a67daa485397adb16a3dd82e2c484_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
