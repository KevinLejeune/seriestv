<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_a5c8d6d4c9dddecdabcaebb193989c6d212e511f40565b9d9d4f7ac5db97348e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_aae333a80352242e80cca5a8447100e3e70af7d370bbeb7c33df3f2377e26afd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aae333a80352242e80cca5a8447100e3e70af7d370bbeb7c33df3f2377e26afd->enter($__internal_aae333a80352242e80cca5a8447100e3e70af7d370bbeb7c33df3f2377e26afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_f47d6ad6265b7034b1f2d26dfca84f7f37c3f13b1dd2e9cf3fb1277a6eaaf772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f47d6ad6265b7034b1f2d26dfca84f7f37c3f13b1dd2e9cf3fb1277a6eaaf772->enter($__internal_f47d6ad6265b7034b1f2d26dfca84f7f37c3f13b1dd2e9cf3fb1277a6eaaf772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aae333a80352242e80cca5a8447100e3e70af7d370bbeb7c33df3f2377e26afd->leave($__internal_aae333a80352242e80cca5a8447100e3e70af7d370bbeb7c33df3f2377e26afd_prof);

        
        $__internal_f47d6ad6265b7034b1f2d26dfca84f7f37c3f13b1dd2e9cf3fb1277a6eaaf772->leave($__internal_f47d6ad6265b7034b1f2d26dfca84f7f37c3f13b1dd2e9cf3fb1277a6eaaf772_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bfc2a60e6f1c3c86d735aadbca3141d0d5a7bd88052e429ed0c2d460da25bd9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfc2a60e6f1c3c86d735aadbca3141d0d5a7bd88052e429ed0c2d460da25bd9a->enter($__internal_bfc2a60e6f1c3c86d735aadbca3141d0d5a7bd88052e429ed0c2d460da25bd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_79c3adf81c8a5c1794345322f68db987da7e00762b973e0d37b7844d3d14eff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79c3adf81c8a5c1794345322f68db987da7e00762b973e0d37b7844d3d14eff8->enter($__internal_79c3adf81c8a5c1794345322f68db987da7e00762b973e0d37b7844d3d14eff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_79c3adf81c8a5c1794345322f68db987da7e00762b973e0d37b7844d3d14eff8->leave($__internal_79c3adf81c8a5c1794345322f68db987da7e00762b973e0d37b7844d3d14eff8_prof);

        
        $__internal_bfc2a60e6f1c3c86d735aadbca3141d0d5a7bd88052e429ed0c2d460da25bd9a->leave($__internal_bfc2a60e6f1c3c86d735aadbca3141d0d5a7bd88052e429ed0c2d460da25bd9a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/Applications/MAMP/htdocs/seriestv/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
