<?php

/* :episodepeople:show.html.twig */
class __TwigTemplate_cee9ac7cf130a69903d4b836afd2c4ef2bde7c1f16490c5b5f7b7de120336a9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":episodepeople:show.html.twig", 1);
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
        $__internal_76be4ba9cd08d54a842511d21d86b4b447f5882affbb6ae1c703c7260cb9712f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76be4ba9cd08d54a842511d21d86b4b447f5882affbb6ae1c703c7260cb9712f->enter($__internal_76be4ba9cd08d54a842511d21d86b4b447f5882affbb6ae1c703c7260cb9712f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":episodepeople:show.html.twig"));

        $__internal_5ba895658f42ed1504cfc5904a33478fb150a32b05a469a4676fc5e19aad5bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba895658f42ed1504cfc5904a33478fb150a32b05a469a4676fc5e19aad5bcd->enter($__internal_5ba895658f42ed1504cfc5904a33478fb150a32b05a469a4676fc5e19aad5bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":episodepeople:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76be4ba9cd08d54a842511d21d86b4b447f5882affbb6ae1c703c7260cb9712f->leave($__internal_76be4ba9cd08d54a842511d21d86b4b447f5882affbb6ae1c703c7260cb9712f_prof);

        
        $__internal_5ba895658f42ed1504cfc5904a33478fb150a32b05a469a4676fc5e19aad5bcd->leave($__internal_5ba895658f42ed1504cfc5904a33478fb150a32b05a469a4676fc5e19aad5bcd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4dc58db19e27cc2dfe28b4795b6c6b092d55d23507549c78f3bec85b69c09801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dc58db19e27cc2dfe28b4795b6c6b092d55d23507549c78f3bec85b69c09801->enter($__internal_4dc58db19e27cc2dfe28b4795b6c6b092d55d23507549c78f3bec85b69c09801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9651592d5e63dbbb8d945286c80e04f05f1f19eea0dcd6025ecd24677daa6a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9651592d5e63dbbb8d945286c80e04f05f1f19eea0dcd6025ecd24677daa6a01->enter($__internal_9651592d5e63dbbb8d945286c80e04f05f1f19eea0dcd6025ecd24677daa6a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Episodeperson</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["episodePerson"] ?? $this->getContext($context, "episodePerson")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("episodepeople_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("episodepeople_edit", array("id" => $this->getAttribute(($context["episodePerson"] ?? $this->getContext($context, "episodePerson")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_9651592d5e63dbbb8d945286c80e04f05f1f19eea0dcd6025ecd24677daa6a01->leave($__internal_9651592d5e63dbbb8d945286c80e04f05f1f19eea0dcd6025ecd24677daa6a01_prof);

        
        $__internal_4dc58db19e27cc2dfe28b4795b6c6b092d55d23507549c78f3bec85b69c09801->leave($__internal_4dc58db19e27cc2dfe28b4795b6c6b092d55d23507549c78f3bec85b69c09801_prof);

    }

    public function getTemplateName()
    {
        return ":episodepeople:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  79 => 23,  73 => 20,  67 => 17,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Episodeperson</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ episodePerson.id }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('episodepeople_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('episodepeople_edit', { 'id': episodePerson.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":episodepeople:show.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/episodepeople/show.html.twig");
    }
}
