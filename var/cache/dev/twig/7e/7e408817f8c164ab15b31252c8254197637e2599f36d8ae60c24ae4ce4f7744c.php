<?php

/* serie/index.html.twig */
class __TwigTemplate_33771134ec31705f3644dd92b8cbeba938318d0fefeed3d134567eca367fe438 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "serie/index.html.twig", 1);
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
        $__internal_021c2de6bbbd4cbdb8564d5317860dc69dd0128592d3894728bf5ec91da9288e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_021c2de6bbbd4cbdb8564d5317860dc69dd0128592d3894728bf5ec91da9288e->enter($__internal_021c2de6bbbd4cbdb8564d5317860dc69dd0128592d3894728bf5ec91da9288e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "serie/index.html.twig"));

        $__internal_02c613f4c04fccebdcfce156db32afbfa1e29593918b2baa6466f0c00ba1ebb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c613f4c04fccebdcfce156db32afbfa1e29593918b2baa6466f0c00ba1ebb9->enter($__internal_02c613f4c04fccebdcfce156db32afbfa1e29593918b2baa6466f0c00ba1ebb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "serie/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_021c2de6bbbd4cbdb8564d5317860dc69dd0128592d3894728bf5ec91da9288e->leave($__internal_021c2de6bbbd4cbdb8564d5317860dc69dd0128592d3894728bf5ec91da9288e_prof);

        
        $__internal_02c613f4c04fccebdcfce156db32afbfa1e29593918b2baa6466f0c00ba1ebb9->leave($__internal_02c613f4c04fccebdcfce156db32afbfa1e29593918b2baa6466f0c00ba1ebb9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_293c14683b65ca06079d544f3d98bfd2a0c28793ae6a7f6c871e5c47f3a75f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_293c14683b65ca06079d544f3d98bfd2a0c28793ae6a7f6c871e5c47f3a75f7d->enter($__internal_293c14683b65ca06079d544f3d98bfd2a0c28793ae6a7f6c871e5c47f3a75f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5f0fb528e8a3b83221b810679a95899732a92803ef40a1be7cb297b7175fa74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5f0fb528e8a3b83221b810679a95899732a92803ef40a1be7cb297b7175fa74->enter($__internal_e5f0fb528e8a3b83221b810679a95899732a92803ef40a1be7cb297b7175fa74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Series list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["series"] ?? $this->getContext($context, "series")));
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serie_show", array("id" => $this->getAttribute($context["serie"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["serie"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["serie"], "date", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serie_show", array("id" => $this->getAttribute($context["serie"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serie_edit", array("id" => $this->getAttribute($context["serie"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serie_new");
        echo "\">Create a new serie</a>
        </li>
    </ul>
";
        
        $__internal_e5f0fb528e8a3b83221b810679a95899732a92803ef40a1be7cb297b7175fa74->leave($__internal_e5f0fb528e8a3b83221b810679a95899732a92803ef40a1be7cb297b7175fa74_prof);

        
        $__internal_293c14683b65ca06079d544f3d98bfd2a0c28793ae6a7f6c871e5c47f3a75f7d->leave($__internal_293c14683b65ca06079d544f3d98bfd2a0c28793ae6a7f6c871e5c47f3a75f7d_prof);

    }

    public function getTemplateName()
    {
        return "serie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 38,  107 => 33,  95 => 27,  89 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Series list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for serie in series %}
            <tr>
                <td><a href=\"{{ path('serie_show', { 'id': serie.id }) }}\">{{ serie.id }}</a></td>
                <td>{{ serie.nom }}</td>
                <td>{% if serie.date %}{{ serie.date|date('Y-m-d') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('serie_show', { 'id': serie.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('serie_edit', { 'id': serie.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('serie_new') }}\">Create a new serie</a>
        </li>
    </ul>
{% endblock %}
", "serie/index.html.twig", "/var/www/html/seriestv/app/Resources/views/serie/index.html.twig");
    }
}
