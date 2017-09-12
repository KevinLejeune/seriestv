<?php

/* saison/index.html.twig */
class __TwigTemplate_aedba4ba8892c4173245ced23c1eb88dfe405b80e418b6d3a4f12797f8e37477 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "saison/index.html.twig", 1);
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
        $__internal_8b79223b2d572a3a05a9d7211f434659670de707c41fccddaa574c1e380a7e9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b79223b2d572a3a05a9d7211f434659670de707c41fccddaa574c1e380a7e9c->enter($__internal_8b79223b2d572a3a05a9d7211f434659670de707c41fccddaa574c1e380a7e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "saison/index.html.twig"));

        $__internal_11d5292e38405ac9dce5d98c82e60c7d21220f771373914884c10c148a86c08e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11d5292e38405ac9dce5d98c82e60c7d21220f771373914884c10c148a86c08e->enter($__internal_11d5292e38405ac9dce5d98c82e60c7d21220f771373914884c10c148a86c08e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "saison/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b79223b2d572a3a05a9d7211f434659670de707c41fccddaa574c1e380a7e9c->leave($__internal_8b79223b2d572a3a05a9d7211f434659670de707c41fccddaa574c1e380a7e9c_prof);

        
        $__internal_11d5292e38405ac9dce5d98c82e60c7d21220f771373914884c10c148a86c08e->leave($__internal_11d5292e38405ac9dce5d98c82e60c7d21220f771373914884c10c148a86c08e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_699e44799cfe710939150aca2b12a6a30b718f7eefab95ee31c35d58308cf259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_699e44799cfe710939150aca2b12a6a30b718f7eefab95ee31c35d58308cf259->enter($__internal_699e44799cfe710939150aca2b12a6a30b718f7eefab95ee31c35d58308cf259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_41c45eb81f54ac2245d5fffcfdc3d8f3b2f74cda6a1298498a159c00b3766b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41c45eb81f54ac2245d5fffcfdc3d8f3b2f74cda6a1298498a159c00b3766b4f->enter($__internal_41c45eb81f54ac2245d5fffcfdc3d8f3b2f74cda6a1298498a159c00b3766b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Saisons list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["saisons"] ?? $this->getContext($context, "saisons")));
        foreach ($context['_seq'] as $context["_key"] => $context["saison"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("saison_show", array("id" => $this->getAttribute($context["saison"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["saison"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["saison"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("saison_show", array("id" => $this->getAttribute($context["saison"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("saison_edit", array("id" => $this->getAttribute($context["saison"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['saison'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("saison_new");
        echo "\">Create a new saison</a>
        </li>
    </ul>
";
        
        $__internal_41c45eb81f54ac2245d5fffcfdc3d8f3b2f74cda6a1298498a159c00b3766b4f->leave($__internal_41c45eb81f54ac2245d5fffcfdc3d8f3b2f74cda6a1298498a159c00b3766b4f_prof);

        
        $__internal_699e44799cfe710939150aca2b12a6a30b718f7eefab95ee31c35d58308cf259->leave($__internal_699e44799cfe710939150aca2b12a6a30b718f7eefab95ee31c35d58308cf259_prof);

    }

    public function getTemplateName()
    {
        return "saison/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 36,  100 => 31,  88 => 25,  82 => 22,  75 => 18,  69 => 17,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Saisons list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for saison in saisons %}
            <tr>
                <td><a href=\"{{ path('saison_show', { 'id': saison.id }) }}\">{{ saison.id }}</a></td>
                <td>{{ saison.name }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('saison_show', { 'id': saison.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('saison_edit', { 'id': saison.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('saison_new') }}\">Create a new saison</a>
        </li>
    </ul>
{% endblock %}
", "saison/index.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/saison/index.html.twig");
    }
}
