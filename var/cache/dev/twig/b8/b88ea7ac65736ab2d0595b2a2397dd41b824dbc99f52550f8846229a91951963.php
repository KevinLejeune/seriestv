<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_69e6d9723c4d7a5da85fb4917391785023e8450ec8c33c1d8eabb645a9fcee6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_82f60db103691a3a96ae4679983cd629952703197c70e94faa3f642616784c95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82f60db103691a3a96ae4679983cd629952703197c70e94faa3f642616784c95->enter($__internal_82f60db103691a3a96ae4679983cd629952703197c70e94faa3f642616784c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_a7f988eb6ada9053cebb2e695722f7b1ef2dba6b7578477e330432c1a6ce64c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f988eb6ada9053cebb2e695722f7b1ef2dba6b7578477e330432c1a6ce64c4->enter($__internal_a7f988eb6ada9053cebb2e695722f7b1ef2dba6b7578477e330432c1a6ce64c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82f60db103691a3a96ae4679983cd629952703197c70e94faa3f642616784c95->leave($__internal_82f60db103691a3a96ae4679983cd629952703197c70e94faa3f642616784c95_prof);

        
        $__internal_a7f988eb6ada9053cebb2e695722f7b1ef2dba6b7578477e330432c1a6ce64c4->leave($__internal_a7f988eb6ada9053cebb2e695722f7b1ef2dba6b7578477e330432c1a6ce64c4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5dfc319301311f7c75f177422ef5a95c7a99957a6ab1001371cce8e30d72074e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dfc319301311f7c75f177422ef5a95c7a99957a6ab1001371cce8e30d72074e->enter($__internal_5dfc319301311f7c75f177422ef5a95c7a99957a6ab1001371cce8e30d72074e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_622704e820a585bcfcd1f5f0313d952be8363e7c3e55455f6c3eccd9ffe61460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_622704e820a585bcfcd1f5f0313d952be8363e7c3e55455f6c3eccd9ffe61460->enter($__internal_622704e820a585bcfcd1f5f0313d952be8363e7c3e55455f6c3eccd9ffe61460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_622704e820a585bcfcd1f5f0313d952be8363e7c3e55455f6c3eccd9ffe61460->leave($__internal_622704e820a585bcfcd1f5f0313d952be8363e7c3e55455f6c3eccd9ffe61460_prof);

        
        $__internal_5dfc319301311f7c75f177422ef5a95c7a99957a6ab1001371cce8e30d72074e->leave($__internal_5dfc319301311f7c75f177422ef5a95c7a99957a6ab1001371cce8e30d72074e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/Applications/MAMP/htdocs/seriestv/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
