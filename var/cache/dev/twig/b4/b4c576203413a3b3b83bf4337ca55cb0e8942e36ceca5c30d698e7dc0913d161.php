<?php

/* FOSUserBundle:Group:edit_content.html.twig */
class __TwigTemplate_7f1aee6c5863d3c718a5d54990c6bfbf5b51c6b348a0da6d2e45bc1b2c37f63a extends Twig_Template
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
        $__internal_506914928878230506016dcce41ab18b06320af6e1dc872ca95ceb5840d6e2fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_506914928878230506016dcce41ab18b06320af6e1dc872ca95ceb5840d6e2fa->enter($__internal_506914928878230506016dcce41ab18b06320af6e1dc872ca95ceb5840d6e2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit_content.html.twig"));

        $__internal_46f4a17dc143ce7689c1d33d9a76f6e6844b30c579265ff33ef819cf420f1ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f4a17dc143ce7689c1d33d9a76f6e6844b30c579265ff33ef819cf420f1ced->enter($__internal_46f4a17dc143ce7689c1d33d9a76f6e6844b30c579265ff33ef819cf420f1ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_edit", array("groupName" => ($context["group_name"] ?? $this->getContext($context, "group_name")))), "attr" => array("class" => "fos_user_group_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_506914928878230506016dcce41ab18b06320af6e1dc872ca95ceb5840d6e2fa->leave($__internal_506914928878230506016dcce41ab18b06320af6e1dc872ca95ceb5840d6e2fa_prof);

        
        $__internal_46f4a17dc143ce7689c1d33d9a76f6e6844b30c579265ff33ef819cf420f1ced->leave($__internal_46f4a17dc143ce7689c1d33d9a76f6e6844b30c579265ff33ef819cf420f1ced_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
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

{{ form_start(form, { 'action': path('fos_user_group_edit', {'groupName': group_name}), 'attr': { 'class': 'fos_user_group_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Group:edit_content.html.twig", "/Applications/MAMP/htdocs/seriestv/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit_content.html.twig");
    }
}
