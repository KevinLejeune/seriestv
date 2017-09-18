<?php

/* :people:show.html.twig */
class __TwigTemplate_0443374982a28e843ee350a885bfedc541f1d2260aaca6230d1d953706b3ca60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":people:show.html.twig", 1);
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
        $__internal_fe4d1b451a0d67cb7800b660c66772004aacf5946d36fc629ddb181bf865e64e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe4d1b451a0d67cb7800b660c66772004aacf5946d36fc629ddb181bf865e64e->enter($__internal_fe4d1b451a0d67cb7800b660c66772004aacf5946d36fc629ddb181bf865e64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":people:show.html.twig"));

        $__internal_3bf3b1219e563683cc96cd1f10f1f82729a40e1031ac73a6baccf7cafcd31d18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bf3b1219e563683cc96cd1f10f1f82729a40e1031ac73a6baccf7cafcd31d18->enter($__internal_3bf3b1219e563683cc96cd1f10f1f82729a40e1031ac73a6baccf7cafcd31d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":people:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe4d1b451a0d67cb7800b660c66772004aacf5946d36fc629ddb181bf865e64e->leave($__internal_fe4d1b451a0d67cb7800b660c66772004aacf5946d36fc629ddb181bf865e64e_prof);

        
        $__internal_3bf3b1219e563683cc96cd1f10f1f82729a40e1031ac73a6baccf7cafcd31d18->leave($__internal_3bf3b1219e563683cc96cd1f10f1f82729a40e1031ac73a6baccf7cafcd31d18_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_834179d0d844e0043c36b7b980dbae2d38058cd1160fc8450986f40377052210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_834179d0d844e0043c36b7b980dbae2d38058cd1160fc8450986f40377052210->enter($__internal_834179d0d844e0043c36b7b980dbae2d38058cd1160fc8450986f40377052210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5de74be1add3cfd31c0781bfb77d7b0ca414aa5be9c6f147fee6ec8f4a630ed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5de74be1add3cfd31c0781bfb77d7b0ca414aa5be9c6f147fee6ec8f4a630ed3->enter($__internal_5de74be1add3cfd31c0781bfb77d7b0ca414aa5be9c6f147fee6ec8f4a630ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>People</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["people"] ?? $this->getContext($context, "people")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["people"] ?? $this->getContext($context, "people")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Birthdate</th>
                <td>";
        // line 18
        if ($this->getAttribute(($context["people"] ?? $this->getContext($context, "people")), "birthDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["people"] ?? $this->getContext($context, "people")), "birthDate", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("people_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("people_edit", array("id" => $this->getAttribute(($context["people"] ?? $this->getContext($context, "people")), "id", array()))), "html", null, true);
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
        
        $__internal_5de74be1add3cfd31c0781bfb77d7b0ca414aa5be9c6f147fee6ec8f4a630ed3->leave($__internal_5de74be1add3cfd31c0781bfb77d7b0ca414aa5be9c6f147fee6ec8f4a630ed3_prof);

        
        $__internal_834179d0d844e0043c36b7b980dbae2d38058cd1160fc8450986f40377052210->leave($__internal_834179d0d844e0043c36b7b980dbae2d38058cd1160fc8450986f40377052210_prof);

    }

    public function getTemplateName()
    {
        return ":people:show.html.twig";
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
    <h1>People</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ people.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ people.name }}</td>
            </tr>
            <tr>
                <th>Birthdate</th>
                <td>{% if people.birthDate %}{{ people.birthDate|date('Y-m-d') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('people_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('people_edit', { 'id': people.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":people:show.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/people/show.html.twig");
    }
}
