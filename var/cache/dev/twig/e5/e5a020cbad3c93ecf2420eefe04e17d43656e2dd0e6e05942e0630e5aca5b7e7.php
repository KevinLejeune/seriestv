<?php

/* :people_type:index.html.twig */
class __TwigTemplate_75075d52e2cd6714640a5eb12cfaaeacc19a8cc4eb5345ef3a093497703d39f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":people_type:index.html.twig", 1);
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
        $__internal_fb3f119dec9137685a4027821c8584a6bfcae89da033a6d5f355a73213188cac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb3f119dec9137685a4027821c8584a6bfcae89da033a6d5f355a73213188cac->enter($__internal_fb3f119dec9137685a4027821c8584a6bfcae89da033a6d5f355a73213188cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":people_type:index.html.twig"));

        $__internal_bc78d2e74f131b1d498edeb8233cd0dfbc48a8beb7f010fb727e5b4d5db550d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc78d2e74f131b1d498edeb8233cd0dfbc48a8beb7f010fb727e5b4d5db550d8->enter($__internal_bc78d2e74f131b1d498edeb8233cd0dfbc48a8beb7f010fb727e5b4d5db550d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":people_type:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb3f119dec9137685a4027821c8584a6bfcae89da033a6d5f355a73213188cac->leave($__internal_fb3f119dec9137685a4027821c8584a6bfcae89da033a6d5f355a73213188cac_prof);

        
        $__internal_bc78d2e74f131b1d498edeb8233cd0dfbc48a8beb7f010fb727e5b4d5db550d8->leave($__internal_bc78d2e74f131b1d498edeb8233cd0dfbc48a8beb7f010fb727e5b4d5db550d8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e6d6c47237922add9512a1b08b51c7fa0179e4c4c5c7c5a8b7c845212e39eb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e6d6c47237922add9512a1b08b51c7fa0179e4c4c5c7c5a8b7c845212e39eb0->enter($__internal_1e6d6c47237922add9512a1b08b51c7fa0179e4c4c5c7c5a8b7c845212e39eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dcdf4606ccc0632800a35e6feb47fcb4ee17b554c933c9cc2e222bf372058e4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcdf4606ccc0632800a35e6feb47fcb4ee17b554c933c9cc2e222bf372058e4c->enter($__internal_dcdf4606ccc0632800a35e6feb47fcb4ee17b554c933c9cc2e222bf372058e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dcdf4606ccc0632800a35e6feb47fcb4ee17b554c933c9cc2e222bf372058e4c->leave($__internal_dcdf4606ccc0632800a35e6feb47fcb4ee17b554c933c9cc2e222bf372058e4c_prof);

        
        $__internal_1e6d6c47237922add9512a1b08b51c7fa0179e4c4c5c7c5a8b7c845212e39eb0->leave($__internal_1e6d6c47237922add9512a1b08b51c7fa0179e4c4c5c7c5a8b7c845212e39eb0_prof);

    }

    public function getTemplateName()
    {
        return ":people_type:index.html.twig";
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
", ":people_type:index.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/people_type/index.html.twig");
    }
}
