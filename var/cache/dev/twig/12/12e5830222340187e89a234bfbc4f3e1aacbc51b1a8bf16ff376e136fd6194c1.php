<?php

/* :episode:index.html.twig */
class __TwigTemplate_2c868ffe94afa16151ca8c05a399f004ebff33ab306368a7379952c7023fd3c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":episode:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65ba5cc7d124f70e088c7eb71aeda376e63bac7e8a9ca3ef900bae72e6662741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65ba5cc7d124f70e088c7eb71aeda376e63bac7e8a9ca3ef900bae72e6662741->enter($__internal_65ba5cc7d124f70e088c7eb71aeda376e63bac7e8a9ca3ef900bae72e6662741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":episode:index.html.twig"));

        $__internal_b0bdd11925dc6db6b2a68a2cab40a0277c0f933b362d33111b48bd200931ae93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0bdd11925dc6db6b2a68a2cab40a0277c0f933b362d33111b48bd200931ae93->enter($__internal_b0bdd11925dc6db6b2a68a2cab40a0277c0f933b362d33111b48bd200931ae93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":episode:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65ba5cc7d124f70e088c7eb71aeda376e63bac7e8a9ca3ef900bae72e6662741->leave($__internal_65ba5cc7d124f70e088c7eb71aeda376e63bac7e8a9ca3ef900bae72e6662741_prof);

        
        $__internal_b0bdd11925dc6db6b2a68a2cab40a0277c0f933b362d33111b48bd200931ae93->leave($__internal_b0bdd11925dc6db6b2a68a2cab40a0277c0f933b362d33111b48bd200931ae93_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1da0c0bb10a7b55232ab09c8f1dc6771793b5d673bf96d351eaa74b53b646337 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1da0c0bb10a7b55232ab09c8f1dc6771793b5d673bf96d351eaa74b53b646337->enter($__internal_1da0c0bb10a7b55232ab09c8f1dc6771793b5d673bf96d351eaa74b53b646337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ab855eddc3ae79803252d69c76cf6c5fcc03edb4a36df956c2a30cb8edc6d938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab855eddc3ae79803252d69c76cf6c5fcc03edb4a36df956c2a30cb8edc6d938->enter($__internal_ab855eddc3ae79803252d69c76cf6c5fcc03edb4a36df956c2a30cb8edc6d938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Episodes list</h1>

    <table class=\"table\" id=\"example\" width=\"100%\" cellspacing=\"0\">
        <thead>
            <tr>
                <th>Id</th>
                <th></th>
                <th>Série</th>
                <th>Saison</th>
                <th>Nom</th>
                <th>Distribution</th>
                <th>Duration</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["episodes"] ?? $this->getContext($context, "episodes")));
        foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("episode_show", array("id" => $this->getAttribute($context["episode"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "id", array()), "html", null, true);
            echo "</a></td>
                <td><img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($this->getAttribute($context["episode"], "serie", array()), "affiche", array()))), "html", null, true);
            echo "\" width=\"100px\"/></td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["episode"], "serie", array()), "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["episode"], "saison", array()), "name", array()), "html", null, true);
            echo "</td>
                <td>Episode ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "number", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["episode"], "episodePeoples", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["episodePeople"]) {
                // line 29
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["episodePeople"], "peopleType", array()), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["episodePeople"], "people", array()), "name", array()), "html", null, true);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episodePeople'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                </td>
                <td>";
            // line 32
            if ($this->getAttribute($context["episode"], "duration", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["episode"], "duration", array()), "H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul style=\"list-style-type: none;\">
                        <li>
                            <a class=\"btn btn-default\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("episode_show", array("id" => $this->getAttribute($context["episode"], "id", array()))), "html", null, true);
            echo "\" role=\"button\"><span class=\"glyphicon glyphicon-eye-open\"></span> Voir</a>
                        </li>
                        <li>
                            <a class=\"btn btn-default\" href=\"";
            // line 39
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
        // line 45
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("episode_new");
        echo "\">Create a new episode</a>
        </li>
    </ul>
";
        
        $__internal_ab855eddc3ae79803252d69c76cf6c5fcc03edb4a36df956c2a30cb8edc6d938->leave($__internal_ab855eddc3ae79803252d69c76cf6c5fcc03edb4a36df956c2a30cb8edc6d938_prof);

        
        $__internal_1da0c0bb10a7b55232ab09c8f1dc6771793b5d673bf96d351eaa74b53b646337->leave($__internal_1da0c0bb10a7b55232ab09c8f1dc6771793b5d673bf96d351eaa74b53b646337_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a980bde66daf79bcefd20086bd6611472fe0fc6cbd9d744a6f62773e71adaabf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a980bde66daf79bcefd20086bd6611472fe0fc6cbd9d744a6f62773e71adaabf->enter($__internal_a980bde66daf79bcefd20086bd6611472fe0fc6cbd9d744a6f62773e71adaabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_17c401ec698ca662591629f627f347a251b2b18764a4156d4db2f1d2c708e413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17c401ec698ca662591629f627f347a251b2b18764a4156d4db2f1d2c708e413->enter($__internal_17c401ec698ca662591629f627f347a251b2b18764a4156d4db2f1d2c708e413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "    <script>
        \$(document).ready(function() {
            \$('#example').DataTable();
        } );
    </script>
";
        
        $__internal_17c401ec698ca662591629f627f347a251b2b18764a4156d4db2f1d2c708e413->leave($__internal_17c401ec698ca662591629f627f347a251b2b18764a4156d4db2f1d2c708e413_prof);

        
        $__internal_a980bde66daf79bcefd20086bd6611472fe0fc6cbd9d744a6f62773e71adaabf->leave($__internal_a980bde66daf79bcefd20086bd6611472fe0fc6cbd9d744a6f62773e71adaabf_prof);

    }

    public function getTemplateName()
    {
        return ":episode:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 56,  166 => 55,  152 => 50,  145 => 45,  133 => 39,  127 => 36,  118 => 32,  115 => 31,  104 => 29,  100 => 28,  93 => 26,  89 => 25,  85 => 24,  81 => 23,  75 => 22,  72 => 21,  68 => 20,  50 => 4,  41 => 3,  11 => 1,);
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

    <table class=\"table\" id=\"example\" width=\"100%\" cellspacing=\"0\">
        <thead>
            <tr>
                <th>Id</th>
                <th></th>
                <th>Série</th>
                <th>Saison</th>
                <th>Nom</th>
                <th>Distribution</th>
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
                <td>
                    {% for episodePeople in episode.episodePeoples %}
                        {{ episodePeople.peopleType }} : {{ episodePeople.people.name }}
                    {% endfor %}
                </td>
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

{% block javascripts %}
    <script>
        \$(document).ready(function() {
            \$('#example').DataTable();
        } );
    </script>
{% endblock %}", ":episode:index.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/episode/index.html.twig");
    }
}
