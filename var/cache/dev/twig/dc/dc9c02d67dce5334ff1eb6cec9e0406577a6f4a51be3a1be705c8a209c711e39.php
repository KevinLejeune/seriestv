<?php

/* serie/index.html.twig */
class __TwigTemplate_4650e68c0b161da2696a65290ed7dab1a140abd9483ca3de0d73c067d11cfcde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "serie/index.html.twig", 1);
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
        $__internal_adcfd88fc9b53fcd64e0f2cd0a05b9961376608e705d26fb8bb0338d1e1ad6d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adcfd88fc9b53fcd64e0f2cd0a05b9961376608e705d26fb8bb0338d1e1ad6d6->enter($__internal_adcfd88fc9b53fcd64e0f2cd0a05b9961376608e705d26fb8bb0338d1e1ad6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "serie/index.html.twig"));

        $__internal_902eae29839e4468e7e87c645b693a723a1c9eeea2a4cf51a5a6a684033afbdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_902eae29839e4468e7e87c645b693a723a1c9eeea2a4cf51a5a6a684033afbdc->enter($__internal_902eae29839e4468e7e87c645b693a723a1c9eeea2a4cf51a5a6a684033afbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "serie/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_adcfd88fc9b53fcd64e0f2cd0a05b9961376608e705d26fb8bb0338d1e1ad6d6->leave($__internal_adcfd88fc9b53fcd64e0f2cd0a05b9961376608e705d26fb8bb0338d1e1ad6d6_prof);

        
        $__internal_902eae29839e4468e7e87c645b693a723a1c9eeea2a4cf51a5a6a684033afbdc->leave($__internal_902eae29839e4468e7e87c645b693a723a1c9eeea2a4cf51a5a6a684033afbdc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a035cb98440325739518a3270e5fb507792deedcc7b864ebb62903e9eda9cf9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a035cb98440325739518a3270e5fb507792deedcc7b864ebb62903e9eda9cf9d->enter($__internal_a035cb98440325739518a3270e5fb507792deedcc7b864ebb62903e9eda9cf9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_061c609bcfc83273ca5c69180d1e34454563006c7a0f3fb311c2c03108ca52eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_061c609bcfc83273ca5c69180d1e34454563006c7a0f3fb311c2c03108ca52eb->enter($__internal_061c609bcfc83273ca5c69180d1e34454563006c7a0f3fb311c2c03108ca52eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Series list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Affiche</th>
                <th>Nom</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["series"] ?? $this->getContext($context, "series")));
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serie_show", array("id" => $this->getAttribute($context["serie"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "id", array()), "html", null, true);
            echo "</a></td>
                <td><img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($context["serie"], "affiche", array()))), "html", null, true);
            echo "\" width=\"100px\"/></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["serie"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["serie"], "date", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serie_show", array("id" => $this->getAttribute($context["serie"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serie_edit", array("id" => $this->getAttribute($context["serie"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serie_new");
        echo "\">Create a new serie</a>
        </li>
    </ul>
";
        
        $__internal_061c609bcfc83273ca5c69180d1e34454563006c7a0f3fb311c2c03108ca52eb->leave($__internal_061c609bcfc83273ca5c69180d1e34454563006c7a0f3fb311c2c03108ca52eb_prof);

        
        $__internal_a035cb98440325739518a3270e5fb507792deedcc7b864ebb62903e9eda9cf9d->leave($__internal_a035cb98440325739518a3270e5fb507792deedcc7b864ebb62903e9eda9cf9d_prof);

    }

    public function getTemplateName()
    {
        return "serie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 40,  112 => 35,  100 => 29,  94 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Series list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Affiche</th>
                <th>Nom</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for serie in series %}
            <tr>
                <td><a href=\"{{ path('serie_show', { 'id': serie.id }) }}\">{{ serie.id }}</a></td>
                <td><img src=\"{{ asset('uploads/'~serie.affiche) }}\" width=\"100px\"/></td>
                <td>{{ serie.nom }}</td>
                <td>{% if serie.date %}{{ serie.date|date('d-m-Y') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('serie_show', { 'id': serie.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('serie_edit', { 'id': serie.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('serie_new') }}\">Create a new serie</a>
        </li>
    </ul>
{% endblock %}
", "serie/index.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/serie/index.html.twig");
    }
}
