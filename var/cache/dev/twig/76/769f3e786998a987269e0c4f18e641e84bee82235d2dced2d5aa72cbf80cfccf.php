<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_955cc17dfa719928ac111330d7ce96faccd6f0e26aba2e98b93882afbcaf683f extends Twig_Template
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
        $__internal_ee4d1a7cc3f7ff940d2dd09a2c4d7d681f1a52c259f7329c74d6c13c67b69de8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee4d1a7cc3f7ff940d2dd09a2c4d7d681f1a52c259f7329c74d6c13c67b69de8->enter($__internal_ee4d1a7cc3f7ff940d2dd09a2c4d7d681f1a52c259f7329c74d6c13c67b69de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_b93a27d4b957f816bd85d33cc60a2338b720c9d49f66dbe6e22b6b67e48c067f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b93a27d4b957f816bd85d33cc60a2338b720c9d49f66dbe6e22b6b67e48c067f->enter($__internal_b93a27d4b957f816bd85d33cc60a2338b720c9d49f66dbe6e22b6b67e48c067f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_ee4d1a7cc3f7ff940d2dd09a2c4d7d681f1a52c259f7329c74d6c13c67b69de8->leave($__internal_ee4d1a7cc3f7ff940d2dd09a2c4d7d681f1a52c259f7329c74d6c13c67b69de8_prof);

        
        $__internal_b93a27d4b957f816bd85d33cc60a2338b720c9d49f66dbe6e22b6b67e48c067f->leave($__internal_b93a27d4b957f816bd85d33cc60a2338b720c9d49f66dbe6e22b6b67e48c067f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/Applications/MAMP/htdocs/seriestv/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
