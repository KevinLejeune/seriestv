<?php

/* :episodepeople:new.html.twig */
class __TwigTemplate_dfa50be145f023c70f4170691435df6e70aaf60471beb7b594d68abb7ef944a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":episodepeople:new.html.twig", 1);
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
        $__internal_008f9f1366bd9119ba6bbb40fbf1a8f90804f8ebd67030b1600974f1cdf41991 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_008f9f1366bd9119ba6bbb40fbf1a8f90804f8ebd67030b1600974f1cdf41991->enter($__internal_008f9f1366bd9119ba6bbb40fbf1a8f90804f8ebd67030b1600974f1cdf41991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":episodepeople:new.html.twig"));

        $__internal_ede08e08845eea2e7a53ef2fdb0d6e85dc2500b412fa63fe2221f5440193c87a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede08e08845eea2e7a53ef2fdb0d6e85dc2500b412fa63fe2221f5440193c87a->enter($__internal_ede08e08845eea2e7a53ef2fdb0d6e85dc2500b412fa63fe2221f5440193c87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":episodepeople:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_008f9f1366bd9119ba6bbb40fbf1a8f90804f8ebd67030b1600974f1cdf41991->leave($__internal_008f9f1366bd9119ba6bbb40fbf1a8f90804f8ebd67030b1600974f1cdf41991_prof);

        
        $__internal_ede08e08845eea2e7a53ef2fdb0d6e85dc2500b412fa63fe2221f5440193c87a->leave($__internal_ede08e08845eea2e7a53ef2fdb0d6e85dc2500b412fa63fe2221f5440193c87a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8fa113a30e138c6376d199b55e811e56f70866826d542860d06f1d7242f4cbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8fa113a30e138c6376d199b55e811e56f70866826d542860d06f1d7242f4cbd->enter($__internal_c8fa113a30e138c6376d199b55e811e56f70866826d542860d06f1d7242f4cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_17bb5b1bd6b4afecb5bcc32890c0d81bcf9e5bf7ac77f34ddd15a941030f14d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17bb5b1bd6b4afecb5bcc32890c0d81bcf9e5bf7ac77f34ddd15a941030f14d3->enter($__internal_17bb5b1bd6b4afecb5bcc32890c0d81bcf9e5bf7ac77f34ddd15a941030f14d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Episodeperson creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("episodepeople_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_17bb5b1bd6b4afecb5bcc32890c0d81bcf9e5bf7ac77f34ddd15a941030f14d3->leave($__internal_17bb5b1bd6b4afecb5bcc32890c0d81bcf9e5bf7ac77f34ddd15a941030f14d3_prof);

        
        $__internal_c8fa113a30e138c6376d199b55e811e56f70866826d542860d06f1d7242f4cbd->leave($__internal_c8fa113a30e138c6376d199b55e811e56f70866826d542860d06f1d7242f4cbd_prof);

    }

    public function getTemplateName()
    {
        return ":episodepeople:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Episodeperson creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('episodepeople_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", ":episodepeople:new.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/episodepeople/new.html.twig");
    }
}
