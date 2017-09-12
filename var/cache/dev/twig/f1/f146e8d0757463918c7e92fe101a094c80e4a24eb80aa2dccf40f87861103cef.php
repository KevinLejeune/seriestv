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
        $__internal_a19d5255a2b4ebad6202259128e92677924af9967a13ca3e6e9b80fe819e89bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a19d5255a2b4ebad6202259128e92677924af9967a13ca3e6e9b80fe819e89bf->enter($__internal_a19d5255a2b4ebad6202259128e92677924af9967a13ca3e6e9b80fe819e89bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/index.html.twig"));

        $__internal_c364b2482bb0c8e42ba6ab008270e556091a7b0f5b598275c92e16c27bfad3d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c364b2482bb0c8e42ba6ab008270e556091a7b0f5b598275c92e16c27bfad3d6->enter($__internal_c364b2482bb0c8e42ba6ab008270e556091a7b0f5b598275c92e16c27bfad3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a19d5255a2b4ebad6202259128e92677924af9967a13ca3e6e9b80fe819e89bf->leave($__internal_a19d5255a2b4ebad6202259128e92677924af9967a13ca3e6e9b80fe819e89bf_prof);

        
        $__internal_c364b2482bb0c8e42ba6ab008270e556091a7b0f5b598275c92e16c27bfad3d6->leave($__internal_c364b2482bb0c8e42ba6ab008270e556091a7b0f5b598275c92e16c27bfad3d6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb77908fa034d64782a39860c6bb97f677aed5f44334e1bef34a55cc723e776d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb77908fa034d64782a39860c6bb97f677aed5f44334e1bef34a55cc723e776d->enter($__internal_eb77908fa034d64782a39860c6bb97f677aed5f44334e1bef34a55cc723e776d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b9e321dfd24e9a1f50336c8f528d207a3d0bab069e29526d373978b5cdf5aba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e321dfd24e9a1f50336c8f528d207a3d0bab069e29526d373978b5cdf5aba4->enter($__internal_b9e321dfd24e9a1f50336c8f528d207a3d0bab069e29526d373978b5cdf5aba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($this->getAttribute($context["episode"], "serie", array()), "affiche", array()))), "html", null, true);
            echo "\" width=\"100px\"/></td>
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
        
        $__internal_b9e321dfd24e9a1f50336c8f528d207a3d0bab069e29526d373978b5cdf5aba4->leave($__internal_b9e321dfd24e9a1f50336c8f528d207a3d0bab069e29526d373978b5cdf5aba4_prof);

        
        $__internal_eb77908fa034d64782a39860c6bb97f677aed5f44334e1bef34a55cc723e776d->leave($__internal_eb77908fa034d64782a39860c6bb97f677aed5f44334e1bef34a55cc723e776d_prof);

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
                <td><img src=\"{{ asset('uploads/'~episode.serie.affiche) }}\" width=\"100px\"/></td>
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
