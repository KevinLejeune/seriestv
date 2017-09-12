<?php

/* serie/show.html.twig */
class __TwigTemplate_2b3fa53fde616f22f36590e0f6772decd9244a527c31e2cd8d45f3fa8accca53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "serie/show.html.twig", 1);
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
        $__internal_022e0a350e3a6627ebdc74d8712d2d974a4192487e48c9a5255dca350979bd06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_022e0a350e3a6627ebdc74d8712d2d974a4192487e48c9a5255dca350979bd06->enter($__internal_022e0a350e3a6627ebdc74d8712d2d974a4192487e48c9a5255dca350979bd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "serie/show.html.twig"));

        $__internal_86941266a8864ac41c68b45938cd4f740b7c4aedb27e8169f5c4c44871695370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86941266a8864ac41c68b45938cd4f740b7c4aedb27e8169f5c4c44871695370->enter($__internal_86941266a8864ac41c68b45938cd4f740b7c4aedb27e8169f5c4c44871695370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "serie/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_022e0a350e3a6627ebdc74d8712d2d974a4192487e48c9a5255dca350979bd06->leave($__internal_022e0a350e3a6627ebdc74d8712d2d974a4192487e48c9a5255dca350979bd06_prof);

        
        $__internal_86941266a8864ac41c68b45938cd4f740b7c4aedb27e8169f5c4c44871695370->leave($__internal_86941266a8864ac41c68b45938cd4f740b7c4aedb27e8169f5c4c44871695370_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd293448f2f0550a0c99effd97ef034958fd262600e8807c92df785e05303406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd293448f2f0550a0c99effd97ef034958fd262600e8807c92df785e05303406->enter($__internal_dd293448f2f0550a0c99effd97ef034958fd262600e8807c92df785e05303406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_181bbe652d625e1b806b393f55b02f1310ec348bef60453c9a80b74feb66b740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_181bbe652d625e1b806b393f55b02f1310ec348bef60453c9a80b74feb66b740->enter($__internal_181bbe652d625e1b806b393f55b02f1310ec348bef60453c9a80b74feb66b740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_181bbe652d625e1b806b393f55b02f1310ec348bef60453c9a80b74feb66b740->leave($__internal_181bbe652d625e1b806b393f55b02f1310ec348bef60453c9a80b74feb66b740_prof);

        
        $__internal_dd293448f2f0550a0c99effd97ef034958fd262600e8807c92df785e05303406->leave($__internal_dd293448f2f0550a0c99effd97ef034958fd262600e8807c92df785e05303406_prof);

    }

    public function getTemplateName()
    {
        return "serie/show.html.twig";
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
", "serie/show.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/serie/show.html.twig");
    }
}
