<?php

/* people_type/show.html.twig */
class __TwigTemplate_4269402d3270622cd2df5c80e36d60aea3299aa67b7df3b21d609be3a7943f47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "people_type/show.html.twig", 1);
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
        $__internal_70a5ba0e64516acefc3515ac6dd115eecbfad75dc5fb25b254c5041cb682a761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70a5ba0e64516acefc3515ac6dd115eecbfad75dc5fb25b254c5041cb682a761->enter($__internal_70a5ba0e64516acefc3515ac6dd115eecbfad75dc5fb25b254c5041cb682a761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "people_type/show.html.twig"));

        $__internal_ce96e0e76f0b7bdda247300dd11b5d15f902c3fc5344c6d3ed6807c8d3752a12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce96e0e76f0b7bdda247300dd11b5d15f902c3fc5344c6d3ed6807c8d3752a12->enter($__internal_ce96e0e76f0b7bdda247300dd11b5d15f902c3fc5344c6d3ed6807c8d3752a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "people_type/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70a5ba0e64516acefc3515ac6dd115eecbfad75dc5fb25b254c5041cb682a761->leave($__internal_70a5ba0e64516acefc3515ac6dd115eecbfad75dc5fb25b254c5041cb682a761_prof);

        
        $__internal_ce96e0e76f0b7bdda247300dd11b5d15f902c3fc5344c6d3ed6807c8d3752a12->leave($__internal_ce96e0e76f0b7bdda247300dd11b5d15f902c3fc5344c6d3ed6807c8d3752a12_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ed19a8dea09ec665c7984f92e931d67b75f0861ab40e1c2b03fcae8c79aafbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed19a8dea09ec665c7984f92e931d67b75f0861ab40e1c2b03fcae8c79aafbb->enter($__internal_1ed19a8dea09ec665c7984f92e931d67b75f0861ab40e1c2b03fcae8c79aafbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cb45bd1c3fb0c70242c42aa7195caabd5004f47f6cec932f21636bfa40cec415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb45bd1c3fb0c70242c42aa7195caabd5004f47f6cec932f21636bfa40cec415->enter($__internal_cb45bd1c3fb0c70242c42aa7195caabd5004f47f6cec932f21636bfa40cec415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>People_type</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["people_type"] ?? $this->getContext($context, "people_type")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lib</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["people_type"] ?? $this->getContext($context, "people_type")), "lib", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("people_type_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("people_type_edit", array("id" => $this->getAttribute(($context["people_type"] ?? $this->getContext($context, "people_type")), "id", array()))), "html", null, true);
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
        
        $__internal_cb45bd1c3fb0c70242c42aa7195caabd5004f47f6cec932f21636bfa40cec415->leave($__internal_cb45bd1c3fb0c70242c42aa7195caabd5004f47f6cec932f21636bfa40cec415_prof);

        
        $__internal_1ed19a8dea09ec665c7984f92e931d67b75f0861ab40e1c2b03fcae8c79aafbb->leave($__internal_1ed19a8dea09ec665c7984f92e931d67b75f0861ab40e1c2b03fcae8c79aafbb_prof);

    }

    public function getTemplateName()
    {
        return "people_type/show.html.twig";
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
    <h1>People_type</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ people_type.id }}</td>
            </tr>
            <tr>
                <th>Lib</th>
                <td>{{ people_type.lib }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('people_type_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('people_type_edit', { 'id': people_type.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "people_type/show.html.twig", "/var/www/html/seriestv/app/Resources/views/people_type/show.html.twig");
    }
}
