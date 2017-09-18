<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_8da44bcdea30fb3bce82794837dbb5297a9a1ca912ab6945a5c0372627a7abcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_eb6db76ee99e9362d9b0b2ae0b7a1bb87bdc843883c7469d33dee9b70cb5f6c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb6db76ee99e9362d9b0b2ae0b7a1bb87bdc843883c7469d33dee9b70cb5f6c7->enter($__internal_eb6db76ee99e9362d9b0b2ae0b7a1bb87bdc843883c7469d33dee9b70cb5f6c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_55bd5b7fc12dc92d31c49d67e25d8bc9127479a1deb497536ad66256c5d59ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55bd5b7fc12dc92d31c49d67e25d8bc9127479a1deb497536ad66256c5d59ee2->enter($__internal_55bd5b7fc12dc92d31c49d67e25d8bc9127479a1deb497536ad66256c5d59ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb6db76ee99e9362d9b0b2ae0b7a1bb87bdc843883c7469d33dee9b70cb5f6c7->leave($__internal_eb6db76ee99e9362d9b0b2ae0b7a1bb87bdc843883c7469d33dee9b70cb5f6c7_prof);

        
        $__internal_55bd5b7fc12dc92d31c49d67e25d8bc9127479a1deb497536ad66256c5d59ee2->leave($__internal_55bd5b7fc12dc92d31c49d67e25d8bc9127479a1deb497536ad66256c5d59ee2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3b80d81504b2e805c0ec63c425ea8ba572f046a35346d369be7f6cccb00dbed9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b80d81504b2e805c0ec63c425ea8ba572f046a35346d369be7f6cccb00dbed9->enter($__internal_3b80d81504b2e805c0ec63c425ea8ba572f046a35346d369be7f6cccb00dbed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7dbe017211dc60e52d313aa0471ac827b8d4ca771178607a77b34f753c4e11c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dbe017211dc60e52d313aa0471ac827b8d4ca771178607a77b34f753c4e11c2->enter($__internal_7dbe017211dc60e52d313aa0471ac827b8d4ca771178607a77b34f753c4e11c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_7dbe017211dc60e52d313aa0471ac827b8d4ca771178607a77b34f753c4e11c2->leave($__internal_7dbe017211dc60e52d313aa0471ac827b8d4ca771178607a77b34f753c4e11c2_prof);

        
        $__internal_3b80d81504b2e805c0ec63c425ea8ba572f046a35346d369be7f6cccb00dbed9->leave($__internal_3b80d81504b2e805c0ec63c425ea8ba572f046a35346d369be7f6cccb00dbed9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Applications/MAMP/htdocs/seriestv/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
