<?php

/* episode/index.html.twig */
class __TwigTemplate_1c02c9a7cbf9d1169808eea172f543e76b1a4fd38a1cc8ad8cb20471c69b3829 extends Twig_Template
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
        $__internal_3790a2cc1a2e58f743f386dfe12a91e925bcf26ccc46bc8e3c3e69fd671cf2c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3790a2cc1a2e58f743f386dfe12a91e925bcf26ccc46bc8e3c3e69fd671cf2c0->enter($__internal_3790a2cc1a2e58f743f386dfe12a91e925bcf26ccc46bc8e3c3e69fd671cf2c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/index.html.twig"));

        $__internal_081c6b2c2d7381655772c5222e7fd8a6f1cf6384243f21d31f2a41b2c43373d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_081c6b2c2d7381655772c5222e7fd8a6f1cf6384243f21d31f2a41b2c43373d8->enter($__internal_081c6b2c2d7381655772c5222e7fd8a6f1cf6384243f21d31f2a41b2c43373d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3790a2cc1a2e58f743f386dfe12a91e925bcf26ccc46bc8e3c3e69fd671cf2c0->leave($__internal_3790a2cc1a2e58f743f386dfe12a91e925bcf26ccc46bc8e3c3e69fd671cf2c0_prof);

        
        $__internal_081c6b2c2d7381655772c5222e7fd8a6f1cf6384243f21d31f2a41b2c43373d8->leave($__internal_081c6b2c2d7381655772c5222e7fd8a6f1cf6384243f21d31f2a41b2c43373d8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7705764df83208d24c28a8ab1331f64c53ee7f3f2ce6fcb07a45af0923ea4ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7705764df83208d24c28a8ab1331f64c53ee7f3f2ce6fcb07a45af0923ea4ed->enter($__internal_d7705764df83208d24c28a8ab1331f64c53ee7f3f2ce6fcb07a45af0923ea4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_59d4b8b7e74a4a5e741999a93357e6a90bbfdc6da339a3fe421af5caaed3933b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59d4b8b7e74a4a5e741999a93357e6a90bbfdc6da339a3fe421af5caaed3933b->enter($__internal_59d4b8b7e74a4a5e741999a93357e6a90bbfdc6da339a3fe421af5caaed3933b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_59d4b8b7e74a4a5e741999a93357e6a90bbfdc6da339a3fe421af5caaed3933b->leave($__internal_59d4b8b7e74a4a5e741999a93357e6a90bbfdc6da339a3fe421af5caaed3933b_prof);

        
        $__internal_d7705764df83208d24c28a8ab1331f64c53ee7f3f2ce6fcb07a45af0923ea4ed->leave($__internal_d7705764df83208d24c28a8ab1331f64c53ee7f3f2ce6fcb07a45af0923ea4ed_prof);

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
", "episode/index.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/episode/index.html.twig");
    }
}
