<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_8dc97cf982de83ce712e19fd38c1cd014de31b89068b9fd68a467092345ec68c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_0bd84afa4bb57df0f4da94191c257f1cdcd08790bc51aee8942bcf2910804a32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bd84afa4bb57df0f4da94191c257f1cdcd08790bc51aee8942bcf2910804a32->enter($__internal_0bd84afa4bb57df0f4da94191c257f1cdcd08790bc51aee8942bcf2910804a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_40e09644a2fbdf886ba57e7d9925c762b4ed3a7a2c8aa7f361bb83b8f117ae55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e09644a2fbdf886ba57e7d9925c762b4ed3a7a2c8aa7f361bb83b8f117ae55->enter($__internal_40e09644a2fbdf886ba57e7d9925c762b4ed3a7a2c8aa7f361bb83b8f117ae55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bd84afa4bb57df0f4da94191c257f1cdcd08790bc51aee8942bcf2910804a32->leave($__internal_0bd84afa4bb57df0f4da94191c257f1cdcd08790bc51aee8942bcf2910804a32_prof);

        
        $__internal_40e09644a2fbdf886ba57e7d9925c762b4ed3a7a2c8aa7f361bb83b8f117ae55->leave($__internal_40e09644a2fbdf886ba57e7d9925c762b4ed3a7a2c8aa7f361bb83b8f117ae55_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5d4291c8b0dd0a93d418fc6e864ee4d3547f277be3e2a9175fddeb0bb3c3a8cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d4291c8b0dd0a93d418fc6e864ee4d3547f277be3e2a9175fddeb0bb3c3a8cc->enter($__internal_5d4291c8b0dd0a93d418fc6e864ee4d3547f277be3e2a9175fddeb0bb3c3a8cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4b16c68557acb29c593cae0bf6775f44fe34b5a438180bfc68be7f074fe70dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b16c68557acb29c593cae0bf6775f44fe34b5a438180bfc68be7f074fe70dd2->enter($__internal_4b16c68557acb29c593cae0bf6775f44fe34b5a438180bfc68be7f074fe70dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_4b16c68557acb29c593cae0bf6775f44fe34b5a438180bfc68be7f074fe70dd2->leave($__internal_4b16c68557acb29c593cae0bf6775f44fe34b5a438180bfc68be7f074fe70dd2_prof);

        
        $__internal_5d4291c8b0dd0a93d418fc6e864ee4d3547f277be3e2a9175fddeb0bb3c3a8cc->leave($__internal_5d4291c8b0dd0a93d418fc6e864ee4d3547f277be3e2a9175fddeb0bb3c3a8cc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/Applications/MAMP/htdocs/seriestv/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
