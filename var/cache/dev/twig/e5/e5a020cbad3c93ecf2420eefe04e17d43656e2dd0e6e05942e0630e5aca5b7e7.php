<?php

/* people_type/index.html.twig */
class __TwigTemplate_75075d52e2cd6714640a5eb12cfaaeacc19a8cc4eb5345ef3a093497703d39f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "people_type/index.html.twig", 1);
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
        $__internal_5f67667ab806293054ba227e09a697667fb4576892ee63e56013019fb7346bfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f67667ab806293054ba227e09a697667fb4576892ee63e56013019fb7346bfc->enter($__internal_5f67667ab806293054ba227e09a697667fb4576892ee63e56013019fb7346bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "people_type/index.html.twig"));

        $__internal_548b908ed1a3b0b40623aa7d40f52687c06223d7256d70b0edf06d0cc36a8104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_548b908ed1a3b0b40623aa7d40f52687c06223d7256d70b0edf06d0cc36a8104->enter($__internal_548b908ed1a3b0b40623aa7d40f52687c06223d7256d70b0edf06d0cc36a8104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "people_type/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f67667ab806293054ba227e09a697667fb4576892ee63e56013019fb7346bfc->leave($__internal_5f67667ab806293054ba227e09a697667fb4576892ee63e56013019fb7346bfc_prof);

        
        $__internal_548b908ed1a3b0b40623aa7d40f52687c06223d7256d70b0edf06d0cc36a8104->leave($__internal_548b908ed1a3b0b40623aa7d40f52687c06223d7256d70b0edf06d0cc36a8104_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4bac3e552c5a0072dd6e48ce0d21cf770d87bd348dbf1a188a992d833385d049 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bac3e552c5a0072dd6e48ce0d21cf770d87bd348dbf1a188a992d833385d049->enter($__internal_4bac3e552c5a0072dd6e48ce0d21cf770d87bd348dbf1a188a992d833385d049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d7ee26b15a87c7b5d4c75c42a861bb8daeb6f27999a5e5022dcdd86a3101143f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ee26b15a87c7b5d4c75c42a861bb8daeb6f27999a5e5022dcdd86a3101143f->enter($__internal_d7ee26b15a87c7b5d4c75c42a861bb8daeb6f27999a5e5022dcdd86a3101143f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>People_types list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Lib</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["people_types"] ?? $this->getContext($context, "people_types")));
        foreach ($context['_seq'] as $context["_key"] => $context["people_type"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("people_type_show", array("id" => $this->getAttribute($context["people_type"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["people_type"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["people_type"], "lib", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("people_type_show", array("id" => $this->getAttribute($context["people_type"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("people_type_edit", array("id" => $this->getAttribute($context["people_type"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['people_type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("people_type_new");
        echo "\">Create a new people_type</a>
        </li>
    </ul>
";
        
        $__internal_d7ee26b15a87c7b5d4c75c42a861bb8daeb6f27999a5e5022dcdd86a3101143f->leave($__internal_d7ee26b15a87c7b5d4c75c42a861bb8daeb6f27999a5e5022dcdd86a3101143f_prof);

        
        $__internal_4bac3e552c5a0072dd6e48ce0d21cf770d87bd348dbf1a188a992d833385d049->leave($__internal_4bac3e552c5a0072dd6e48ce0d21cf770d87bd348dbf1a188a992d833385d049_prof);

    }

    public function getTemplateName()
    {
        return "people_type/index.html.twig";
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
    <h1>People_types list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Lib</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for people_type in people_types %}
            <tr>
                <td><a href=\"{{ path('people_type_show', { 'id': people_type.id }) }}\">{{ people_type.id }}</a></td>
                <td>{{ people_type.lib }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('people_type_show', { 'id': people_type.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('people_type_edit', { 'id': people_type.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('people_type_new') }}\">Create a new people_type</a>
        </li>
    </ul>
{% endblock %}
", "people_type/index.html.twig", "/var/www/html/seriestv/app/Resources/views/people_type/index.html.twig");
    }
}
