<?php

/* episode/show.html.twig */
class __TwigTemplate_deeee2a54318667a608500bd4e33ef91ce05a7a5bb5daa3aef4e4f22b7822567 extends Twig_Template
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
        $__internal_e76de87c300f1851ab930d9091c0edbf8007262d4e1e6fe94c8899451b4df27e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e76de87c300f1851ab930d9091c0edbf8007262d4e1e6fe94c8899451b4df27e->enter($__internal_e76de87c300f1851ab930d9091c0edbf8007262d4e1e6fe94c8899451b4df27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/show.html.twig"));

        $__internal_0db77b24ee06b5f20079d27c7dc54e07c45d7cb6fbcebc4b3d7366b21e8edcde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0db77b24ee06b5f20079d27c7dc54e07c45d7cb6fbcebc4b3d7366b21e8edcde->enter($__internal_0db77b24ee06b5f20079d27c7dc54e07c45d7cb6fbcebc4b3d7366b21e8edcde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "episode/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e76de87c300f1851ab930d9091c0edbf8007262d4e1e6fe94c8899451b4df27e->leave($__internal_e76de87c300f1851ab930d9091c0edbf8007262d4e1e6fe94c8899451b4df27e_prof);

        
        $__internal_0db77b24ee06b5f20079d27c7dc54e07c45d7cb6fbcebc4b3d7366b21e8edcde->leave($__internal_0db77b24ee06b5f20079d27c7dc54e07c45d7cb6fbcebc4b3d7366b21e8edcde_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8efbcf9317e48a41369c9bdbe854d32730de0658bc0431227d801d5988bade03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8efbcf9317e48a41369c9bdbe854d32730de0658bc0431227d801d5988bade03->enter($__internal_8efbcf9317e48a41369c9bdbe854d32730de0658bc0431227d801d5988bade03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7a6d2f9780bcf9f011697086aef2912932d3f456017f2756bd5d46007e5d22c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a6d2f9780bcf9f011697086aef2912932d3f456017f2756bd5d46007e5d22c5->enter($__internal_7a6d2f9780bcf9f011697086aef2912932d3f456017f2756bd5d46007e5d22c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7a6d2f9780bcf9f011697086aef2912932d3f456017f2756bd5d46007e5d22c5->leave($__internal_7a6d2f9780bcf9f011697086aef2912932d3f456017f2756bd5d46007e5d22c5_prof);

        
        $__internal_8efbcf9317e48a41369c9bdbe854d32730de0658bc0431227d801d5988bade03->leave($__internal_8efbcf9317e48a41369c9bdbe854d32730de0658bc0431227d801d5988bade03_prof);

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
", "episode/show.html.twig", "/var/www/html/seriestv/app/Resources/views/episode/show.html.twig");
    }
}
