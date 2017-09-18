<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_0946aa9808eb3669f4271ee15f43e945b9013509a84b464884d1fbc4440d7f5d extends Twig_Template
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
        $__internal_42322e62455544b5bc8301d806cc709c9b708153ba9938eac4f71ed49fece792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42322e62455544b5bc8301d806cc709c9b708153ba9938eac4f71ed49fece792->enter($__internal_42322e62455544b5bc8301d806cc709c9b708153ba9938eac4f71ed49fece792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_69c8747517f54867f68a5b13ae0d72b42426e6de561b164edecb55a20576ceb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69c8747517f54867f68a5b13ae0d72b42426e6de561b164edecb55a20576ceb2->enter($__internal_69c8747517f54867f68a5b13ae0d72b42426e6de561b164edecb55a20576ceb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_42322e62455544b5bc8301d806cc709c9b708153ba9938eac4f71ed49fece792->leave($__internal_42322e62455544b5bc8301d806cc709c9b708153ba9938eac4f71ed49fece792_prof);

        
        $__internal_69c8747517f54867f68a5b13ae0d72b42426e6de561b164edecb55a20576ceb2->leave($__internal_69c8747517f54867f68a5b13ae0d72b42426e6de561b164edecb55a20576ceb2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
