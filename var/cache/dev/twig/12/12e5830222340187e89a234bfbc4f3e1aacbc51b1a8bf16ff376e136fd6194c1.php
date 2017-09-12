<?php

/* episode/index.html.twig */
class __TwigTemplate_2c868ffe94afa16151ca8c05a399f004ebff33ab306368a7379952c7023fd3c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "episode/index.html.twig", 1);
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
        $__internal_01d04e9ce073d2b939ec9a247288d55ae1a8cd4a295b7473da143e296fe17841 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01d04e9ce073d2b939ec9a247288d55ae1a8cd4a295b7473da143e296fe17841->enter($__internal_01d04e9ce073d2b939ec9a247288d55ae1a8cd4a295b7473da143e296fe17841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/index.html.twig"));

        $__internal_2375c7f6f9df0c648e8f897a1276a7cf050b5347853f067cc2932ced86638c80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2375c7f6f9df0c648e8f897a1276a7cf050b5347853f067cc2932ced86638c80->enter($__internal_2375c7f6f9df0c648e8f897a1276a7cf050b5347853f067cc2932ced86638c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01d04e9ce073d2b939ec9a247288d55ae1a8cd4a295b7473da143e296fe17841->leave($__internal_01d04e9ce073d2b939ec9a247288d55ae1a8cd4a295b7473da143e296fe17841_prof);

        
        $__internal_2375c7f6f9df0c648e8f897a1276a7cf050b5347853f067cc2932ced86638c80->leave($__internal_2375c7f6f9df0c648e8f897a1276a7cf050b5347853f067cc2932ced86638c80_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_42b852b18030d638f3984aee9340523f9dc780d019156ed95d81731503821ae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42b852b18030d638f3984aee9340523f9dc780d019156ed95d81731503821ae2->enter($__internal_42b852b18030d638f3984aee9340523f9dc780d019156ed95d81731503821ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6720a6824af726191977f121d417c669075d73f8b1567ec34d4b154f64cb82f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6720a6824af726191977f121d417c669075d73f8b1567ec34d4b154f64cb82f0->enter($__internal_6720a6824af726191977f121d417c669075d73f8b1567ec34d4b154f64cb82f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Episodes list</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th></th>
                <th>Série</th>
                <th>Saison</th>
                <th>Name</th>
                <th>Duration</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["episodes"] ?? $this->getContext($context, "episodes")));
        foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("episode_show", array("id" => $this->getAttribute($context["episode"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "id", array()), "html", null, true);
            echo "</a></td>
                <td><img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/p13935058_b_v8_ab.jpg"), "html", null, true);
            echo "\" width=\"75px\"></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["episode"], "serie", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["episode"], "saison", array()), "name", array()), "html", null, true);
            echo "</td>
                <td>Episode ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "number", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["episode"], "duration", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["episode"], "duration", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul style=\"list-style-type: none;\">
                        <li>
                            <a class=\"btn btn-default\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("episode_show", array("id" => $this->getAttribute($context["episode"], "id", array()))), "html", null, true);
            echo "\" role=\"button\"><span class=\"glyphicon glyphicon-eye-open\"></span> Voir</a>
                        </li>
                        <li>
                            <a class=\"btn btn-default\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("episode_edit", array("id" => $this->getAttribute($context["episode"], "id", array()))), "html", null, true);
            echo "\" role=\"button\"><span class=\"glyphicon glyphicon-pencil\"></span> Modifier</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("episode_new");
        echo "\">Create a new episode</a>
        </li>
    </ul>
";
        
        $__internal_6720a6824af726191977f121d417c669075d73f8b1567ec34d4b154f64cb82f0->leave($__internal_6720a6824af726191977f121d417c669075d73f8b1567ec34d4b154f64cb82f0_prof);

        
        $__internal_42b852b18030d638f3984aee9340523f9dc780d019156ed95d81731503821ae2->leave($__internal_42b852b18030d638f3984aee9340523f9dc780d019156ed95d81731503821ae2_prof);

    }

    public function getTemplateName()
    {
        return "episode/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 44,  124 => 39,  112 => 33,  106 => 30,  97 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Episodes list</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th></th>
                <th>Série</th>
                <th>Saison</th>
                <th>Name</th>
                <th>Duration</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for episode in episodes %}
            <tr>
                <td><a href=\"{{ path('episode_show', { 'id': episode.id }) }}\">{{ episode.id }}</a></td>
                <td><img src=\"{{ asset('images/p13935058_b_v8_ab.jpg') }}\" width=\"75px\"></td>
                <td>{{ episode.serie.nom }}</td>
                <td>{{ episode.saison.name }}</td>
                <td>Episode {{ episode.number }} - {{ episode.name }}</td>
                <td>{% if episode.duration %}{{ episode.duration|date('H:i:s') }}{% endif %}</td>
                <td>
                    <ul style=\"list-style-type: none;\">
                        <li>
                            <a class=\"btn btn-default\" href=\"{{ path('episode_show', { 'id': episode.id }) }}\" role=\"button\"><span class=\"glyphicon glyphicon-eye-open\"></span> Voir</a>
                        </li>
                        <li>
                            <a class=\"btn btn-default\" href=\"{{ path('episode_edit', { 'id': episode.id }) }}\" role=\"button\"><span class=\"glyphicon glyphicon-pencil\"></span> Modifier</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('episode_new') }}\">Create a new episode</a>
        </li>
    </ul>
{% endblock %}
", "episode/index.html.twig", "/var/www/html/seriestv/app/Resources/views/episode/index.html.twig");
    }
}
