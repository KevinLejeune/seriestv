<?php

/* :serie:show.html.twig */
class __TwigTemplate_024604655d7fee59564a756a02e393a5322ea0a190b852f381ef0e34c471dc0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":serie:show.html.twig", 1);
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
        $__internal_421052635500ce97f47f807a65a5e6fde37ea7e8f9220b120821e1f5eabd813a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_421052635500ce97f47f807a65a5e6fde37ea7e8f9220b120821e1f5eabd813a->enter($__internal_421052635500ce97f47f807a65a5e6fde37ea7e8f9220b120821e1f5eabd813a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":serie:show.html.twig"));

        $__internal_7d3f5c921fc0cf3cb6060dccf21aa8d62b9a86388f834bc2719d7767b7f872a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d3f5c921fc0cf3cb6060dccf21aa8d62b9a86388f834bc2719d7767b7f872a5->enter($__internal_7d3f5c921fc0cf3cb6060dccf21aa8d62b9a86388f834bc2719d7767b7f872a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":serie:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_421052635500ce97f47f807a65a5e6fde37ea7e8f9220b120821e1f5eabd813a->leave($__internal_421052635500ce97f47f807a65a5e6fde37ea7e8f9220b120821e1f5eabd813a_prof);

        
        $__internal_7d3f5c921fc0cf3cb6060dccf21aa8d62b9a86388f834bc2719d7767b7f872a5->leave($__internal_7d3f5c921fc0cf3cb6060dccf21aa8d62b9a86388f834bc2719d7767b7f872a5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d34eda77453d10a590e9de7c80c7f17b7cd1bfafecd7a594a055fda079d2f284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d34eda77453d10a590e9de7c80c7f17b7cd1bfafecd7a594a055fda079d2f284->enter($__internal_d34eda77453d10a590e9de7c80c7f17b7cd1bfafecd7a594a055fda079d2f284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0c3f0763c1fda16cdff476dca52152a682e6a0f440892a4da94bf59a14771e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c3f0763c1fda16cdff476dca52152a682e6a0f440892a4da94bf59a14771e41->enter($__internal_0c3f0763c1fda16cdff476dca52152a682e6a0f440892a4da94bf59a14771e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Serie</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 18
        if ($this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "date", array()), "d-m-Y"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serie_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serie_edit", array("id" => $this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_0c3f0763c1fda16cdff476dca52152a682e6a0f440892a4da94bf59a14771e41->leave($__internal_0c3f0763c1fda16cdff476dca52152a682e6a0f440892a4da94bf59a14771e41_prof);

        
        $__internal_d34eda77453d10a590e9de7c80c7f17b7cd1bfafecd7a594a055fda079d2f284->leave($__internal_d34eda77453d10a590e9de7c80c7f17b7cd1bfafecd7a594a055fda079d2f284_prof);

    }

    public function getTemplateName()
    {
        return ":serie:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 33,  95 => 31,  89 => 28,  83 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Serie</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ serie.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ serie.nom }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if serie.date %}{{ serie.date|date('d-m-Y') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('serie_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('serie_edit', { 'id': serie.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":serie:show.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/serie/show.html.twig");
    }
}
