<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_674099ca901fd8c9ca9d64eee22cba8aeb1e939a3f260cf57c0421b1596fe5d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_aae936762bacde8d30da5c1416ef1f076ee4902cfdd551962a175a273e749724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aae936762bacde8d30da5c1416ef1f076ee4902cfdd551962a175a273e749724->enter($__internal_aae936762bacde8d30da5c1416ef1f076ee4902cfdd551962a175a273e749724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_79c68d1d511bc9fbe87220f67b5fab0f78f6d57ef46b9926519ae929cecb6322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79c68d1d511bc9fbe87220f67b5fab0f78f6d57ef46b9926519ae929cecb6322->enter($__internal_79c68d1d511bc9fbe87220f67b5fab0f78f6d57ef46b9926519ae929cecb6322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aae936762bacde8d30da5c1416ef1f076ee4902cfdd551962a175a273e749724->leave($__internal_aae936762bacde8d30da5c1416ef1f076ee4902cfdd551962a175a273e749724_prof);

        
        $__internal_79c68d1d511bc9fbe87220f67b5fab0f78f6d57ef46b9926519ae929cecb6322->leave($__internal_79c68d1d511bc9fbe87220f67b5fab0f78f6d57ef46b9926519ae929cecb6322_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_22284c4e5d962413c048568e9c157348416db43e3500733f9af4b5ec42385da7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22284c4e5d962413c048568e9c157348416db43e3500733f9af4b5ec42385da7->enter($__internal_22284c4e5d962413c048568e9c157348416db43e3500733f9af4b5ec42385da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_478d9705e7295f9fc5a94e71f0ae4e678efc9858728b78e994a8c04caefdb034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478d9705e7295f9fc5a94e71f0ae4e678efc9858728b78e994a8c04caefdb034->enter($__internal_478d9705e7295f9fc5a94e71f0ae4e678efc9858728b78e994a8c04caefdb034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_478d9705e7295f9fc5a94e71f0ae4e678efc9858728b78e994a8c04caefdb034->leave($__internal_478d9705e7295f9fc5a94e71f0ae4e678efc9858728b78e994a8c04caefdb034_prof);

        
        $__internal_22284c4e5d962413c048568e9c157348416db43e3500733f9af4b5ec42385da7->leave($__internal_22284c4e5d962413c048568e9c157348416db43e3500733f9af4b5ec42385da7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/Applications/MAMP/htdocs/seriestv/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
