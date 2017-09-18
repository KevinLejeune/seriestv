<?php

/* :episodepeople:index.html.twig */
class __TwigTemplate_43abcf953e67172d38b7279edc2f90a77ba990014c3b61e7ea931b682093cc11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":episodepeople:index.html.twig", 1);
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
        $__internal_38b6fb2899cd2bd7a0d14339021a3d36594caa0d9e3b27952cc30817d641ffbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38b6fb2899cd2bd7a0d14339021a3d36594caa0d9e3b27952cc30817d641ffbd->enter($__internal_38b6fb2899cd2bd7a0d14339021a3d36594caa0d9e3b27952cc30817d641ffbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":episodepeople:index.html.twig"));

        $__internal_b509f67832be6648b11ff35fca923aab967d77ffd26c3b429042a1adee4f5b0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b509f67832be6648b11ff35fca923aab967d77ffd26c3b429042a1adee4f5b0c->enter($__internal_b509f67832be6648b11ff35fca923aab967d77ffd26c3b429042a1adee4f5b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":episodepeople:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38b6fb2899cd2bd7a0d14339021a3d36594caa0d9e3b27952cc30817d641ffbd->leave($__internal_38b6fb2899cd2bd7a0d14339021a3d36594caa0d9e3b27952cc30817d641ffbd_prof);

        
        $__internal_b509f67832be6648b11ff35fca923aab967d77ffd26c3b429042a1adee4f5b0c->leave($__internal_b509f67832be6648b11ff35fca923aab967d77ffd26c3b429042a1adee4f5b0c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2315683ac76bf3663a88db3e0d71217da360ff1f7b4792368eb1ee81e1f4a40c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2315683ac76bf3663a88db3e0d71217da360ff1f7b4792368eb1ee81e1f4a40c->enter($__internal_2315683ac76bf3663a88db3e0d71217da360ff1f7b4792368eb1ee81e1f4a40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf9743f151cc0d8e28bc033954de2bdf295d05b8a5d84a49466cd2d9a156e775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf9743f151cc0d8e28bc033954de2bdf295d05b8a5d84a49466cd2d9a156e775->enter($__internal_cf9743f151cc0d8e28bc033954de2bdf295d05b8a5d84a49466cd2d9a156e775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Episodepeoples list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["episodePeoples"] ?? $this->getContext($context, "episodePeoples")));
        foreach ($context['_seq'] as $context["_key"] => $context["episodePerson"]) {
            // line 15
            echo "            <tr>
                <td><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("episodepeople_show", array("id" => $this->getAttribute($context["episodePerson"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["episodePerson"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("episodepeople_show", array("id" => $this->getAttribute($context["episodePerson"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("episodepeople_edit", array("id" => $this->getAttribute($context["episodePerson"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episodePerson'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("episodepeople_new");
        echo "\">Create a new episodePerson</a>
        </li>
    </ul>
";
        
        $__internal_cf9743f151cc0d8e28bc033954de2bdf295d05b8a5d84a49466cd2d9a156e775->leave($__internal_cf9743f151cc0d8e28bc033954de2bdf295d05b8a5d84a49466cd2d9a156e775_prof);

        
        $__internal_2315683ac76bf3663a88db3e0d71217da360ff1f7b4792368eb1ee81e1f4a40c->leave($__internal_2315683ac76bf3663a88db3e0d71217da360ff1f7b4792368eb1ee81e1f4a40c_prof);

    }

    public function getTemplateName()
    {
        return ":episodepeople:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 34,  95 => 29,  83 => 23,  77 => 20,  68 => 16,  65 => 15,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Episodepeoples list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for episodePerson in episodePeoples %}
            <tr>
                <td><a href=\"{{ path('episodepeople_show', { 'id': episodePerson.id }) }}\">{{ episodePerson.id }}</a></td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('episodepeople_show', { 'id': episodePerson.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('episodepeople_edit', { 'id': episodePerson.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('episodepeople_new') }}\">Create a new episodePerson</a>
        </li>
    </ul>
{% endblock %}
", ":episodepeople:index.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/episodepeople/index.html.twig");
    }
}
