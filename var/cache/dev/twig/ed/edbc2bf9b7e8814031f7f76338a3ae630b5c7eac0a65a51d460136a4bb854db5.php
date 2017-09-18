<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_f140b2346f01ea7702f0d42d6fa01314b51e7a373692d8caf9a763e08b1e58ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e75a0207025cbae6e9147b8b1f982698f1c303cb3e32716242eedb83682abbf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e75a0207025cbae6e9147b8b1f982698f1c303cb3e32716242eedb83682abbf0->enter($__internal_e75a0207025cbae6e9147b8b1f982698f1c303cb3e32716242eedb83682abbf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_7d172eed6ee7d234f608a8ef01a782fa94536b552c5279681d9af9ec194be2e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d172eed6ee7d234f608a8ef01a782fa94536b552c5279681d9af9ec194be2e1->enter($__internal_7d172eed6ee7d234f608a8ef01a782fa94536b552c5279681d9af9ec194be2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_e75a0207025cbae6e9147b8b1f982698f1c303cb3e32716242eedb83682abbf0->leave($__internal_e75a0207025cbae6e9147b8b1f982698f1c303cb3e32716242eedb83682abbf0_prof);

        
        $__internal_7d172eed6ee7d234f608a8ef01a782fa94536b552c5279681d9af9ec194be2e1->leave($__internal_7d172eed6ee7d234f608a8ef01a782fa94536b552c5279681d9af9ec194be2e1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/Applications/MAMP/htdocs/seriestv/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
