<?php

/* :saison:show.html.twig */
class __TwigTemplate_120b8c941a97c969506fe2627b93f21bf84b8a1a619fcc8b9fcec33571c647b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":saison:show.html.twig", 1);
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
        $__internal_21d059073d62f6c7fe7576716919a4c3418e299eaa111f29ee9904a665495999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21d059073d62f6c7fe7576716919a4c3418e299eaa111f29ee9904a665495999->enter($__internal_21d059073d62f6c7fe7576716919a4c3418e299eaa111f29ee9904a665495999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":saison:show.html.twig"));

        $__internal_57c021562ba194cd54ebe0a512eb5937a98e545a25fffff2b8432ad493630ddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c021562ba194cd54ebe0a512eb5937a98e545a25fffff2b8432ad493630ddd->enter($__internal_57c021562ba194cd54ebe0a512eb5937a98e545a25fffff2b8432ad493630ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":saison:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21d059073d62f6c7fe7576716919a4c3418e299eaa111f29ee9904a665495999->leave($__internal_21d059073d62f6c7fe7576716919a4c3418e299eaa111f29ee9904a665495999_prof);

        
        $__internal_57c021562ba194cd54ebe0a512eb5937a98e545a25fffff2b8432ad493630ddd->leave($__internal_57c021562ba194cd54ebe0a512eb5937a98e545a25fffff2b8432ad493630ddd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ec132a5b005b41e7bdc2b6ed0f79f8756a9859c2df99cbeb2ac791261203c82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ec132a5b005b41e7bdc2b6ed0f79f8756a9859c2df99cbeb2ac791261203c82->enter($__internal_5ec132a5b005b41e7bdc2b6ed0f79f8756a9859c2df99cbeb2ac791261203c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ab980808a6e88c8b6a6f4778c312004fe1fd7211af762c7ed3383fb358d4a44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ab980808a6e88c8b6a6f4778c312004fe1fd7211af762c7ed3383fb358d4a44->enter($__internal_3ab980808a6e88c8b6a6f4778c312004fe1fd7211af762c7ed3383fb358d4a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Saison</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["saison"] ?? $this->getContext($context, "saison")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["saison"] ?? $this->getContext($context, "saison")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("saison_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("saison_edit", array("id" => $this->getAttribute(($context["saison"] ?? $this->getContext($context, "saison")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_3ab980808a6e88c8b6a6f4778c312004fe1fd7211af762c7ed3383fb358d4a44->leave($__internal_3ab980808a6e88c8b6a6f4778c312004fe1fd7211af762c7ed3383fb358d4a44_prof);

        
        $__internal_5ec132a5b005b41e7bdc2b6ed0f79f8756a9859c2df99cbeb2ac791261203c82->leave($__internal_5ec132a5b005b41e7bdc2b6ed0f79f8756a9859c2df99cbeb2ac791261203c82_prof);

    }

    public function getTemplateName()
    {
        return ":saison:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  86 => 27,  80 => 24,  74 => 21,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Saison</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ saison.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ saison.name }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('saison_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('saison_edit', { 'id': saison.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":saison:show.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/saison/show.html.twig");
    }
}
