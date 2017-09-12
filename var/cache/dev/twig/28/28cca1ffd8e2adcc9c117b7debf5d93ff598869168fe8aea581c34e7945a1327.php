<?php

/* saison/show.html.twig */
class __TwigTemplate_733f89b8cc25a052c4406057b5d33455d1c6d179e8e8040624ba9cf05f84e728 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "saison/show.html.twig", 1);
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
        $__internal_639631df67f6f9be7865388054798ed62edc9a8cdc50b69925c111f792475308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_639631df67f6f9be7865388054798ed62edc9a8cdc50b69925c111f792475308->enter($__internal_639631df67f6f9be7865388054798ed62edc9a8cdc50b69925c111f792475308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "saison/show.html.twig"));

        $__internal_f18a0772fba01226c52570515968dc7460d0b6e58375ef7917e4a5413f5d26f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f18a0772fba01226c52570515968dc7460d0b6e58375ef7917e4a5413f5d26f5->enter($__internal_f18a0772fba01226c52570515968dc7460d0b6e58375ef7917e4a5413f5d26f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "saison/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_639631df67f6f9be7865388054798ed62edc9a8cdc50b69925c111f792475308->leave($__internal_639631df67f6f9be7865388054798ed62edc9a8cdc50b69925c111f792475308_prof);

        
        $__internal_f18a0772fba01226c52570515968dc7460d0b6e58375ef7917e4a5413f5d26f5->leave($__internal_f18a0772fba01226c52570515968dc7460d0b6e58375ef7917e4a5413f5d26f5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dea8ebd9690f08b88e2b7d16c915f85744a219fe1a4a864790b509027419f053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dea8ebd9690f08b88e2b7d16c915f85744a219fe1a4a864790b509027419f053->enter($__internal_dea8ebd9690f08b88e2b7d16c915f85744a219fe1a4a864790b509027419f053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_31429f03b3b86afe750a8ca1d0d0ec93d19c477bb5e63e2d05b698f2f99648a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31429f03b3b86afe750a8ca1d0d0ec93d19c477bb5e63e2d05b698f2f99648a7->enter($__internal_31429f03b3b86afe750a8ca1d0d0ec93d19c477bb5e63e2d05b698f2f99648a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_31429f03b3b86afe750a8ca1d0d0ec93d19c477bb5e63e2d05b698f2f99648a7->leave($__internal_31429f03b3b86afe750a8ca1d0d0ec93d19c477bb5e63e2d05b698f2f99648a7_prof);

        
        $__internal_dea8ebd9690f08b88e2b7d16c915f85744a219fe1a4a864790b509027419f053->leave($__internal_dea8ebd9690f08b88e2b7d16c915f85744a219fe1a4a864790b509027419f053_prof);

    }

    public function getTemplateName()
    {
        return "saison/show.html.twig";
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
", "saison/show.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/saison/show.html.twig");
    }
}
