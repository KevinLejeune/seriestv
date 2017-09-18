<?php

/* :serie:index.html.twig */
class __TwigTemplate_33771134ec31705f3644dd92b8cbeba938318d0fefeed3d134567eca367fe438 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":serie:index.html.twig", 1);
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
        $__internal_0ab11907e4f77acf360e1f078f027e284f643221f228c9b11585515d2775843b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ab11907e4f77acf360e1f078f027e284f643221f228c9b11585515d2775843b->enter($__internal_0ab11907e4f77acf360e1f078f027e284f643221f228c9b11585515d2775843b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":serie:index.html.twig"));

        $__internal_8e39587276f4602e2c1ddb4fb2a4b30cdb5f48091a4a1362dc42266a76327c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e39587276f4602e2c1ddb4fb2a4b30cdb5f48091a4a1362dc42266a76327c0c->enter($__internal_8e39587276f4602e2c1ddb4fb2a4b30cdb5f48091a4a1362dc42266a76327c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":serie:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ab11907e4f77acf360e1f078f027e284f643221f228c9b11585515d2775843b->leave($__internal_0ab11907e4f77acf360e1f078f027e284f643221f228c9b11585515d2775843b_prof);

        
        $__internal_8e39587276f4602e2c1ddb4fb2a4b30cdb5f48091a4a1362dc42266a76327c0c->leave($__internal_8e39587276f4602e2c1ddb4fb2a4b30cdb5f48091a4a1362dc42266a76327c0c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_70b35af782b3273027373086129e19d4c444a0768211a1d486d48ee2a7092ece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70b35af782b3273027373086129e19d4c444a0768211a1d486d48ee2a7092ece->enter($__internal_70b35af782b3273027373086129e19d4c444a0768211a1d486d48ee2a7092ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d324d567ab80bf455392436ef20bd7ae5750d774c3192868b967e270e6201978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d324d567ab80bf455392436ef20bd7ae5750d774c3192868b967e270e6201978->enter($__internal_d324d567ab80bf455392436ef20bd7ae5750d774c3192868b967e270e6201978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Series list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Affiche</th>
                <th>Nom</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["series"] ?? $this->getContext($context, "series")));
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serie_show", array("id" => $this->getAttribute($context["serie"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "id", array()), "html", null, true);
            echo "</a></td>
                <td><img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($context["serie"], "affiche", array()))), "html", null, true);
            echo "\" width=\"100px\"/></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["serie"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["serie"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["serie"], "date", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serie_show", array("id" => $this->getAttribute($context["serie"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
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
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("serie_new");
        echo "\">Create a new serie</a>
        </li>
    </ul>
";
        
        $__internal_d324d567ab80bf455392436ef20bd7ae5750d774c3192868b967e270e6201978->leave($__internal_d324d567ab80bf455392436ef20bd7ae5750d774c3192868b967e270e6201978_prof);

        
        $__internal_70b35af782b3273027373086129e19d4c444a0768211a1d486d48ee2a7092ece->leave($__internal_70b35af782b3273027373086129e19d4c444a0768211a1d486d48ee2a7092ece_prof);

    }

    public function getTemplateName()
    {
        return ":serie:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 40,  112 => 35,  100 => 29,  94 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
                <th>Affiche</th>
                <th>Nom</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for serie in series %}
            <tr>
                <td><a href=\"{{ path('serie_show', { 'id': serie.id }) }}\">{{ serie.id }}</a></td>
                <td><img src=\"{{ asset('uploads/'~serie.affiche) }}\" width=\"100px\"/></td>
                <td>{{ serie.nom }}</td>
                <td>{% if serie.date %}{{ serie.date|date('d-m-Y') }}{% endif %}</td>
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
", ":serie:index.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/serie/index.html.twig");
    }
}
