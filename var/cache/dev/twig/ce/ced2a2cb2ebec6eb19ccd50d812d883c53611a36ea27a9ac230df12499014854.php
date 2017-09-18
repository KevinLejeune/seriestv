<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_23258d24abe9c8bbbb0610c03898c8c281600ce981b68160704042a1027f84ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_8f1f07985b65f83d6f662505883529e2aa5d56e01ab3b4403adabf23ac4d7190 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f1f07985b65f83d6f662505883529e2aa5d56e01ab3b4403adabf23ac4d7190->enter($__internal_8f1f07985b65f83d6f662505883529e2aa5d56e01ab3b4403adabf23ac4d7190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_372e6ebc02ecd3e385b51ab6a17da5bfb3ee6fda9fc42ed2a20fa3c2fc5f7638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_372e6ebc02ecd3e385b51ab6a17da5bfb3ee6fda9fc42ed2a20fa3c2fc5f7638->enter($__internal_372e6ebc02ecd3e385b51ab6a17da5bfb3ee6fda9fc42ed2a20fa3c2fc5f7638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f1f07985b65f83d6f662505883529e2aa5d56e01ab3b4403adabf23ac4d7190->leave($__internal_8f1f07985b65f83d6f662505883529e2aa5d56e01ab3b4403adabf23ac4d7190_prof);

        
        $__internal_372e6ebc02ecd3e385b51ab6a17da5bfb3ee6fda9fc42ed2a20fa3c2fc5f7638->leave($__internal_372e6ebc02ecd3e385b51ab6a17da5bfb3ee6fda9fc42ed2a20fa3c2fc5f7638_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d8eaba977ffbc1901f5c155eefde1454e926a3c2b868fca59c0a8455beef2893 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8eaba977ffbc1901f5c155eefde1454e926a3c2b868fca59c0a8455beef2893->enter($__internal_d8eaba977ffbc1901f5c155eefde1454e926a3c2b868fca59c0a8455beef2893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_21bf7a11ca65bcccad1c6b73c456a24a157a07d0137bbdbb09fa8e6898222959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21bf7a11ca65bcccad1c6b73c456a24a157a07d0137bbdbb09fa8e6898222959->enter($__internal_21bf7a11ca65bcccad1c6b73c456a24a157a07d0137bbdbb09fa8e6898222959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_21bf7a11ca65bcccad1c6b73c456a24a157a07d0137bbdbb09fa8e6898222959->leave($__internal_21bf7a11ca65bcccad1c6b73c456a24a157a07d0137bbdbb09fa8e6898222959_prof);

        
        $__internal_d8eaba977ffbc1901f5c155eefde1454e926a3c2b868fca59c0a8455beef2893->leave($__internal_d8eaba977ffbc1901f5c155eefde1454e926a3c2b868fca59c0a8455beef2893_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Applications/MAMP/htdocs/seriestv/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
