<?php

/* :people:index.html.twig */
class __TwigTemplate_339cef98067ae06e5f4639d9aa75c54de6fd538b0ddd47fff577644ff71fe54c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":people:index.html.twig", 1);
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
        $__internal_4f50b42c1e2d50faf629504f2ef59d70e864f4ef27967df9c82584792312b54b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f50b42c1e2d50faf629504f2ef59d70e864f4ef27967df9c82584792312b54b->enter($__internal_4f50b42c1e2d50faf629504f2ef59d70e864f4ef27967df9c82584792312b54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":people:index.html.twig"));

        $__internal_9b4b9ed0abf077102be15097ae4936b749e1d42daf17877510a3a08087040e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b4b9ed0abf077102be15097ae4936b749e1d42daf17877510a3a08087040e60->enter($__internal_9b4b9ed0abf077102be15097ae4936b749e1d42daf17877510a3a08087040e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":people:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f50b42c1e2d50faf629504f2ef59d70e864f4ef27967df9c82584792312b54b->leave($__internal_4f50b42c1e2d50faf629504f2ef59d70e864f4ef27967df9c82584792312b54b_prof);

        
        $__internal_9b4b9ed0abf077102be15097ae4936b749e1d42daf17877510a3a08087040e60->leave($__internal_9b4b9ed0abf077102be15097ae4936b749e1d42daf17877510a3a08087040e60_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_339446ecc3702542217a515bb9457cfed43c75814306494ca519132db39c38b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_339446ecc3702542217a515bb9457cfed43c75814306494ca519132db39c38b1->enter($__internal_339446ecc3702542217a515bb9457cfed43c75814306494ca519132db39c38b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e37d4548f142fbfa1f03159a170f5b3f01203e694a3ce2ef00a5df2270f99d13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37d4548f142fbfa1f03159a170f5b3f01203e694a3ce2ef00a5df2270f99d13->enter($__internal_e37d4548f142fbfa1f03159a170f5b3f01203e694a3ce2ef00a5df2270f99d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>People list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Birthdate</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["people"] ?? $this->getContext($context, "people")));
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("people_show", array("id" => $this->getAttribute($context["person"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["person"], "birthDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["person"], "birthDate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                    ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["person"], "peopleTypes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 24
                echo "                        ";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                </td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("people_show", array("id" => $this->getAttribute($context["person"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("people_edit", array("id" => $this->getAttribute($context["person"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("people_new");
        echo "\">Create a new person</a>
        </li>
    </ul>
";
        
        $__internal_e37d4548f142fbfa1f03159a170f5b3f01203e694a3ce2ef00a5df2270f99d13->leave($__internal_e37d4548f142fbfa1f03159a170f5b3f01203e694a3ce2ef00a5df2270f99d13_prof);

        
        $__internal_339446ecc3702542217a515bb9457cfed43c75814306494ca519132db39c38b1->leave($__internal_339446ecc3702542217a515bb9457cfed43c75814306494ca519132db39c38b1_prof);

    }

    public function getTemplateName()
    {
        return ":people:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 44,  125 => 39,  113 => 33,  107 => 30,  101 => 26,  92 => 24,  88 => 23,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>People list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Birthdate</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for person in people %}
            <tr>
                <td><a href=\"{{ path('people_show', { 'id': person.id }) }}\">{{ person.id }}</a></td>
                <td>{{ person.name }}</td>
                <td>{% if person.birthDate %}{{ person.birthDate|date('Y-m-d') }}{% endif %}</td>
                <td>
                    {% for type in person.peopleTypes %}
                        {{ type }}
                    {% endfor %}
                </td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('people_show', { 'id': person.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('people_edit', { 'id': person.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('people_new') }}\">Create a new person</a>
        </li>
    </ul>
{% endblock %}
", ":people:index.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/people/index.html.twig");
    }
}
