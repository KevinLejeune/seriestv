<?php

/* episode/show.html.twig */
class __TwigTemplate_c9225f610c7513c23be976e21f3b2a9f9eb892c56d9c8c3e4add35d465b79f49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "episode/show.html.twig", 1);
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
        $__internal_7ef119ac79d78293afd32620ede2d918aeccf8a7e1f90e5f734add7754bde0d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ef119ac79d78293afd32620ede2d918aeccf8a7e1f90e5f734add7754bde0d9->enter($__internal_7ef119ac79d78293afd32620ede2d918aeccf8a7e1f90e5f734add7754bde0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/show.html.twig"));

        $__internal_00bd9a9589e48d53c86de7b2bd0d46ddf3729cadac125578e3c78ca46b460142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00bd9a9589e48d53c86de7b2bd0d46ddf3729cadac125578e3c78ca46b460142->enter($__internal_00bd9a9589e48d53c86de7b2bd0d46ddf3729cadac125578e3c78ca46b460142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ef119ac79d78293afd32620ede2d918aeccf8a7e1f90e5f734add7754bde0d9->leave($__internal_7ef119ac79d78293afd32620ede2d918aeccf8a7e1f90e5f734add7754bde0d9_prof);

        
        $__internal_00bd9a9589e48d53c86de7b2bd0d46ddf3729cadac125578e3c78ca46b460142->leave($__internal_00bd9a9589e48d53c86de7b2bd0d46ddf3729cadac125578e3c78ca46b460142_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_637f50f0591155a00c1185d973b1beec8a7e5c76697b9efb018a26a51b328be1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_637f50f0591155a00c1185d973b1beec8a7e5c76697b9efb018a26a51b328be1->enter($__internal_637f50f0591155a00c1185d973b1beec8a7e5c76697b9efb018a26a51b328be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_97dba44ebd2b60f461d935748e93c13174a85a359a270663a944832e0ec5d8aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97dba44ebd2b60f461d935748e93c13174a85a359a270663a944832e0ec5d8aa->enter($__internal_97dba44ebd2b60f461d935748e93c13174a85a359a270663a944832e0ec5d8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Episode</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Duration</th>
                <td>";
        // line 18
        if ($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "duration", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "duration", array()), "H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("episode_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("episode_edit", array("id" => $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "id", array()))), "html", null, true);
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
        
        $__internal_97dba44ebd2b60f461d935748e93c13174a85a359a270663a944832e0ec5d8aa->leave($__internal_97dba44ebd2b60f461d935748e93c13174a85a359a270663a944832e0ec5d8aa_prof);

        
        $__internal_637f50f0591155a00c1185d973b1beec8a7e5c76697b9efb018a26a51b328be1->leave($__internal_637f50f0591155a00c1185d973b1beec8a7e5c76697b9efb018a26a51b328be1_prof);

    }

    public function getTemplateName()
    {
        return "episode/show.html.twig";
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
    <h1>Episode</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ episode.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ episode.name }}</td>
            </tr>
            <tr>
                <th>Duration</th>
                <td>{% if episode.duration %}{{ episode.duration|date('H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('episode_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('episode_edit', { 'id': episode.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "episode/show.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/episode/show.html.twig");
    }
}
