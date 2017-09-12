<?php

/* saison/index.html.twig */
class __TwigTemplate_abc0be1a52a5e7324d04c67f536968afedcda7f4f22f23c8160b637d2dd4518c extends Twig_Template
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
        $__internal_1847594d9ff71f2cc28c1b0ecbe8c0afab94bdf888dc05598795297b58bc32bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1847594d9ff71f2cc28c1b0ecbe8c0afab94bdf888dc05598795297b58bc32bc->enter($__internal_1847594d9ff71f2cc28c1b0ecbe8c0afab94bdf888dc05598795297b58bc32bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "saison/index.html.twig"));

        $__internal_d3b23701a9006d1dd9de8b13d5cfd414a192b744aa531cd92b932cbf89d08915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b23701a9006d1dd9de8b13d5cfd414a192b744aa531cd92b932cbf89d08915->enter($__internal_d3b23701a9006d1dd9de8b13d5cfd414a192b744aa531cd92b932cbf89d08915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "saison/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1847594d9ff71f2cc28c1b0ecbe8c0afab94bdf888dc05598795297b58bc32bc->leave($__internal_1847594d9ff71f2cc28c1b0ecbe8c0afab94bdf888dc05598795297b58bc32bc_prof);

        
        $__internal_d3b23701a9006d1dd9de8b13d5cfd414a192b744aa531cd92b932cbf89d08915->leave($__internal_d3b23701a9006d1dd9de8b13d5cfd414a192b744aa531cd92b932cbf89d08915_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8445108e723ab8209f03c9f5867bde2be2b1feed02a6fb27312a0f0a71b7fa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8445108e723ab8209f03c9f5867bde2be2b1feed02a6fb27312a0f0a71b7fa7->enter($__internal_b8445108e723ab8209f03c9f5867bde2be2b1feed02a6fb27312a0f0a71b7fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d36e1ef9e2463a7c050e589037619c8857659bfb7544a20c72238b4416e2403a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d36e1ef9e2463a7c050e589037619c8857659bfb7544a20c72238b4416e2403a->enter($__internal_d36e1ef9e2463a7c050e589037619c8857659bfb7544a20c72238b4416e2403a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d36e1ef9e2463a7c050e589037619c8857659bfb7544a20c72238b4416e2403a->leave($__internal_d36e1ef9e2463a7c050e589037619c8857659bfb7544a20c72238b4416e2403a_prof);

        
        $__internal_b8445108e723ab8209f03c9f5867bde2be2b1feed02a6fb27312a0f0a71b7fa7->leave($__internal_b8445108e723ab8209f03c9f5867bde2be2b1feed02a6fb27312a0f0a71b7fa7_prof);

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
", "saison/index.html.twig", "/var/www/html/seriestv/app/Resources/views/saison/index.html.twig");
    }
}
