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
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b698d7ce25ce3d334043d93e8113aabf8323d780888cd402b511c4b58cf4926e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b698d7ce25ce3d334043d93e8113aabf8323d780888cd402b511c4b58cf4926e->enter($__internal_b698d7ce25ce3d334043d93e8113aabf8323d780888cd402b511c4b58cf4926e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/index.html.twig"));

        $__internal_57275d2ee47a260e3501009fc6121f1988819373d37d94986b45dd5a015cac9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57275d2ee47a260e3501009fc6121f1988819373d37d94986b45dd5a015cac9b->enter($__internal_57275d2ee47a260e3501009fc6121f1988819373d37d94986b45dd5a015cac9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b698d7ce25ce3d334043d93e8113aabf8323d780888cd402b511c4b58cf4926e->leave($__internal_b698d7ce25ce3d334043d93e8113aabf8323d780888cd402b511c4b58cf4926e_prof);

        
        $__internal_57275d2ee47a260e3501009fc6121f1988819373d37d94986b45dd5a015cac9b->leave($__internal_57275d2ee47a260e3501009fc6121f1988819373d37d94986b45dd5a015cac9b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3f4a547ded0cb57678dce71e8ed132d7080de732cf5de5248e50a1540b50120 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3f4a547ded0cb57678dce71e8ed132d7080de732cf5de5248e50a1540b50120->enter($__internal_b3f4a547ded0cb57678dce71e8ed132d7080de732cf5de5248e50a1540b50120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c34530d914ae88e08f8e4621d4ecd93b60a325cc003340de12fbda35e13a8e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c34530d914ae88e08f8e4621d4ecd93b60a325cc003340de12fbda35e13a8e04->enter($__internal_c34530d914ae88e08f8e4621d4ecd93b60a325cc003340de12fbda35e13a8e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c34530d914ae88e08f8e4621d4ecd93b60a325cc003340de12fbda35e13a8e04->leave($__internal_c34530d914ae88e08f8e4621d4ecd93b60a325cc003340de12fbda35e13a8e04_prof);

        
        $__internal_b3f4a547ded0cb57678dce71e8ed132d7080de732cf5de5248e50a1540b50120->leave($__internal_b3f4a547ded0cb57678dce71e8ed132d7080de732cf5de5248e50a1540b50120_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eef492fd62efd95553c1ffcd2b88865f9027b11321f8aad6c2a54ced5e2fd3c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eef492fd62efd95553c1ffcd2b88865f9027b11321f8aad6c2a54ced5e2fd3c3->enter($__internal_eef492fd62efd95553c1ffcd2b88865f9027b11321f8aad6c2a54ced5e2fd3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3bf9a556049c78df031892e580f5685648a3fd231ae3a1c66f0eecd735536458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bf9a556049c78df031892e580f5685648a3fd231ae3a1c66f0eecd735536458->enter($__internal_3bf9a556049c78df031892e580f5685648a3fd231ae3a1c66f0eecd735536458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "    <script>
        \$(document).ready(function() {
            \$('#example').DataTable();
        } );
    </script>
";
        
        $__internal_3bf9a556049c78df031892e580f5685648a3fd231ae3a1c66f0eecd735536458->leave($__internal_3bf9a556049c78df031892e580f5685648a3fd231ae3a1c66f0eecd735536458_prof);

        
        $__internal_eef492fd62efd95553c1ffcd2b88865f9027b11321f8aad6c2a54ced5e2fd3c3->leave($__internal_eef492fd62efd95553c1ffcd2b88865f9027b11321f8aad6c2a54ced5e2fd3c3_prof);

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
{% endblock %}", "episode/index.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/episode/index.html.twig");
    }
}
