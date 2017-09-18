<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_f423f2843e5d1c0d130d905c1bed80167d69872a5c423eb802e4ec14d12432ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_cbff968aa3dcf6c4bae769dffd8cc4a4187b81a844249c617389afdf5f5ef32e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbff968aa3dcf6c4bae769dffd8cc4a4187b81a844249c617389afdf5f5ef32e->enter($__internal_cbff968aa3dcf6c4bae769dffd8cc4a4187b81a844249c617389afdf5f5ef32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_e8a161872a0c0b5ecaea7b3ecaebefde3ad1a3177a7e66f5698719e30d9970b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8a161872a0c0b5ecaea7b3ecaebefde3ad1a3177a7e66f5698719e30d9970b3->enter($__internal_e8a161872a0c0b5ecaea7b3ecaebefde3ad1a3177a7e66f5698719e30d9970b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbff968aa3dcf6c4bae769dffd8cc4a4187b81a844249c617389afdf5f5ef32e->leave($__internal_cbff968aa3dcf6c4bae769dffd8cc4a4187b81a844249c617389afdf5f5ef32e_prof);

        
        $__internal_e8a161872a0c0b5ecaea7b3ecaebefde3ad1a3177a7e66f5698719e30d9970b3->leave($__internal_e8a161872a0c0b5ecaea7b3ecaebefde3ad1a3177a7e66f5698719e30d9970b3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_55730e6ee31381c964a407894cdab42a21a8ce5802b610e4e0464be88d0fafb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55730e6ee31381c964a407894cdab42a21a8ce5802b610e4e0464be88d0fafb6->enter($__internal_55730e6ee31381c964a407894cdab42a21a8ce5802b610e4e0464be88d0fafb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fed898743cdb57b4e0956fd1ca80e8161a47a1ac9682c4091ee6a299b09b1aec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed898743cdb57b4e0956fd1ca80e8161a47a1ac9682c4091ee6a299b09b1aec->enter($__internal_fed898743cdb57b4e0956fd1ca80e8161a47a1ac9682c4091ee6a299b09b1aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_fed898743cdb57b4e0956fd1ca80e8161a47a1ac9682c4091ee6a299b09b1aec->leave($__internal_fed898743cdb57b4e0956fd1ca80e8161a47a1ac9682c4091ee6a299b09b1aec_prof);

        
        $__internal_55730e6ee31381c964a407894cdab42a21a8ce5802b610e4e0464be88d0fafb6->leave($__internal_55730e6ee31381c964a407894cdab42a21a8ce5802b610e4e0464be88d0fafb6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Applications/MAMP/htdocs/seriestv/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
