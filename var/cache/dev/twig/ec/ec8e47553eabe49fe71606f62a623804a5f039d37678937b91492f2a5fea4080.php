<?php

/* people/index.html.twig */
class __TwigTemplate_339cef98067ae06e5f4639d9aa75c54de6fd538b0ddd47fff577644ff71fe54c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "people/index.html.twig", 1);
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
        $__internal_557b59c55441ec8b7ace85bdbdd648f0be721ef466d50471ab9ee87a957c0b95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_557b59c55441ec8b7ace85bdbdd648f0be721ef466d50471ab9ee87a957c0b95->enter($__internal_557b59c55441ec8b7ace85bdbdd648f0be721ef466d50471ab9ee87a957c0b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "people/index.html.twig"));

        $__internal_dda8193f9d7f21e0bbf36ec8c8a5b080e3fe0ff570ab977ccd33dfb4ae521018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda8193f9d7f21e0bbf36ec8c8a5b080e3fe0ff570ab977ccd33dfb4ae521018->enter($__internal_dda8193f9d7f21e0bbf36ec8c8a5b080e3fe0ff570ab977ccd33dfb4ae521018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "people/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_557b59c55441ec8b7ace85bdbdd648f0be721ef466d50471ab9ee87a957c0b95->leave($__internal_557b59c55441ec8b7ace85bdbdd648f0be721ef466d50471ab9ee87a957c0b95_prof);

        
        $__internal_dda8193f9d7f21e0bbf36ec8c8a5b080e3fe0ff570ab977ccd33dfb4ae521018->leave($__internal_dda8193f9d7f21e0bbf36ec8c8a5b080e3fe0ff570ab977ccd33dfb4ae521018_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c0cfcbabe17c78e9d7f0943571efeb1672f0dc75b51bdc0f59edaf989e9ce58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c0cfcbabe17c78e9d7f0943571efeb1672f0dc75b51bdc0f59edaf989e9ce58->enter($__internal_5c0cfcbabe17c78e9d7f0943571efeb1672f0dc75b51bdc0f59edaf989e9ce58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b3a3beae8732c4371eff2285fefaa8417ae05633486016734fda686578e49f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a3beae8732c4371eff2285fefaa8417ae05633486016734fda686578e49f43->enter($__internal_b3a3beae8732c4371eff2285fefaa8417ae05633486016734fda686578e49f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>People list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Birthdate</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["people"] ?? $this->getContext($context, "people")));
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("people_show", array("id" => $this->getAttribute($context["person"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["person"], "birthDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["person"], "birthDate", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("people_show", array("id" => $this->getAttribute($context["person"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("people_edit", array("id" => $this->getAttribute($context["person"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("people_new");
        echo "\">Create a new person</a>
        </li>
    </ul>
";
        
        $__internal_b3a3beae8732c4371eff2285fefaa8417ae05633486016734fda686578e49f43->leave($__internal_b3a3beae8732c4371eff2285fefaa8417ae05633486016734fda686578e49f43_prof);

        
        $__internal_5c0cfcbabe17c78e9d7f0943571efeb1672f0dc75b51bdc0f59edaf989e9ce58->leave($__internal_5c0cfcbabe17c78e9d7f0943571efeb1672f0dc75b51bdc0f59edaf989e9ce58_prof);

    }

    public function getTemplateName()
    {
        return "people/index.html.twig";
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
    <h1>People list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Birthdate</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for person in people %}
            <tr>
                <td><a href=\"{{ path('people_show', { 'id': person.id }) }}\">{{ person.id }}</a></td>
                <td>{{ person.name }}</td>
                <td>{% if person.birthDate %}{{ person.birthDate|date('Y-m-d') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('people_show', { 'id': person.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('people_edit', { 'id': person.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('people_new') }}\">Create a new person</a>
        </li>
    </ul>
{% endblock %}
", "people/index.html.twig", "/var/www/html/seriestv/app/Resources/views/people/index.html.twig");
    }
}
