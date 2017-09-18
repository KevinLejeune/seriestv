<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_8d4b7eb359beabde00363abfa54c222061db4d8d8c81bd7a4ac54fff0458b344 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6fe47b8b2072d4f17a687e2a9075fc909a856036f409441cffe2f94ef2f7d30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6fe47b8b2072d4f17a687e2a9075fc909a856036f409441cffe2f94ef2f7d30->enter($__internal_e6fe47b8b2072d4f17a687e2a9075fc909a856036f409441cffe2f94ef2f7d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_a83cec6149a13389432cc4e4493886f189be7214feb5a9081f3cf05749b310d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a83cec6149a13389432cc4e4493886f189be7214feb5a9081f3cf05749b310d9->enter($__internal_a83cec6149a13389432cc4e4493886f189be7214feb5a9081f3cf05749b310d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6fe47b8b2072d4f17a687e2a9075fc909a856036f409441cffe2f94ef2f7d30->leave($__internal_e6fe47b8b2072d4f17a687e2a9075fc909a856036f409441cffe2f94ef2f7d30_prof);

        
        $__internal_a83cec6149a13389432cc4e4493886f189be7214feb5a9081f3cf05749b310d9->leave($__internal_a83cec6149a13389432cc4e4493886f189be7214feb5a9081f3cf05749b310d9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_03013b02d160ae6bff38dd1862670193a734dc717fe6b20e06aa054cadb949a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03013b02d160ae6bff38dd1862670193a734dc717fe6b20e06aa054cadb949a6->enter($__internal_03013b02d160ae6bff38dd1862670193a734dc717fe6b20e06aa054cadb949a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_498fd1ee1a02031bba2f8dbf65ac60a2e14ce28d247d83406e15eb1845e99547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_498fd1ee1a02031bba2f8dbf65ac60a2e14ce28d247d83406e15eb1845e99547->enter($__internal_498fd1ee1a02031bba2f8dbf65ac60a2e14ce28d247d83406e15eb1845e99547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_498fd1ee1a02031bba2f8dbf65ac60a2e14ce28d247d83406e15eb1845e99547->leave($__internal_498fd1ee1a02031bba2f8dbf65ac60a2e14ce28d247d83406e15eb1845e99547_prof);

        
        $__internal_03013b02d160ae6bff38dd1862670193a734dc717fe6b20e06aa054cadb949a6->leave($__internal_03013b02d160ae6bff38dd1862670193a734dc717fe6b20e06aa054cadb949a6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/Applications/MAMP/htdocs/seriestv/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
