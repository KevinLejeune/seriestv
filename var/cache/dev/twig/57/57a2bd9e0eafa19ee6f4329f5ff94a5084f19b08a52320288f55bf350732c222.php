<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_c4f59bb411bf08e47a2b47008f757a48f67e5e529f28980527914954ca778905 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_a1f10c4f3edb11f49a2dc51aac95f2b3c3d8d869d8dbd12983bdfd02b106a6e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1f10c4f3edb11f49a2dc51aac95f2b3c3d8d869d8dbd12983bdfd02b106a6e4->enter($__internal_a1f10c4f3edb11f49a2dc51aac95f2b3c3d8d869d8dbd12983bdfd02b106a6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_7aa848b783f486d9a6ac2afb54ed953689aecb490b0ebd5265a23a3a0eef053e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aa848b783f486d9a6ac2afb54ed953689aecb490b0ebd5265a23a3a0eef053e->enter($__internal_7aa848b783f486d9a6ac2afb54ed953689aecb490b0ebd5265a23a3a0eef053e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1f10c4f3edb11f49a2dc51aac95f2b3c3d8d869d8dbd12983bdfd02b106a6e4->leave($__internal_a1f10c4f3edb11f49a2dc51aac95f2b3c3d8d869d8dbd12983bdfd02b106a6e4_prof);

        
        $__internal_7aa848b783f486d9a6ac2afb54ed953689aecb490b0ebd5265a23a3a0eef053e->leave($__internal_7aa848b783f486d9a6ac2afb54ed953689aecb490b0ebd5265a23a3a0eef053e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4981d496dbac8e276800413a5a55592b3ea6c02c9e19c0f53d1bd476312ec6e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4981d496dbac8e276800413a5a55592b3ea6c02c9e19c0f53d1bd476312ec6e3->enter($__internal_4981d496dbac8e276800413a5a55592b3ea6c02c9e19c0f53d1bd476312ec6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b30e07be4e6c1cddd90c5286981b0b5090fd4779c23b8399dac8e8b2a2804529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b30e07be4e6c1cddd90c5286981b0b5090fd4779c23b8399dac8e8b2a2804529->enter($__internal_b30e07be4e6c1cddd90c5286981b0b5090fd4779c23b8399dac8e8b2a2804529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_b30e07be4e6c1cddd90c5286981b0b5090fd4779c23b8399dac8e8b2a2804529->leave($__internal_b30e07be4e6c1cddd90c5286981b0b5090fd4779c23b8399dac8e8b2a2804529_prof);

        
        $__internal_4981d496dbac8e276800413a5a55592b3ea6c02c9e19c0f53d1bd476312ec6e3->leave($__internal_4981d496dbac8e276800413a5a55592b3ea6c02c9e19c0f53d1bd476312ec6e3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Applications/MAMP/htdocs/seriestv/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
