<?php

/* :FOSUserBundle/views:layout.html.twig */
class __TwigTemplate_2ada873e24a4464f24c36b75a4f50f61b8cfd7aed93f8b631a558f483094226a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5b6594a49de839a5b5c61b2f12988e4ff4d1e3fab6be2a1c601814e401f181b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5b6594a49de839a5b5c61b2f12988e4ff4d1e3fab6be2a1c601814e401f181b->enter($__internal_b5b6594a49de839a5b5c61b2f12988e4ff4d1e3fab6be2a1c601814e401f181b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":FOSUserBundle/views:layout.html.twig"));

        $__internal_650abf684d773d270ef6b1464042a236d17851184a0d58428c46e91242385fbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_650abf684d773d270ef6b1464042a236d17851184a0d58428c46e91242385fbe->enter($__internal_650abf684d773d270ef6b1464042a236d17851184a0d58428c46e91242385fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":FOSUserBundle/views:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 9
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 10
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 14
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 16
        echo "        </div>

        ";
        // line 18
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 19
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 20
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 21
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 22
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        ";
        }
        // line 27
        echo "
        <div>
            <h1>Coucou</h1>
            ";
        // line 30
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 32
        echo "        </div>
    </body>
</html>
";
        
        $__internal_b5b6594a49de839a5b5c61b2f12988e4ff4d1e3fab6be2a1c601814e401f181b->leave($__internal_b5b6594a49de839a5b5c61b2f12988e4ff4d1e3fab6be2a1c601814e401f181b_prof);

        
        $__internal_650abf684d773d270ef6b1464042a236d17851184a0d58428c46e91242385fbe->leave($__internal_650abf684d773d270ef6b1464042a236d17851184a0d58428c46e91242385fbe_prof);

    }

    // line 30
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_18fea643faa56708e9d75bca7792a98d2236957055d96b8bb508800e100a4308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18fea643faa56708e9d75bca7792a98d2236957055d96b8bb508800e100a4308->enter($__internal_18fea643faa56708e9d75bca7792a98d2236957055d96b8bb508800e100a4308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c8d06551fee73d640415be149d94f2d0ef820017d96c9b9d072fded1ae54eaa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8d06551fee73d640415be149d94f2d0ef820017d96c9b9d072fded1ae54eaa5->enter($__internal_c8d06551fee73d640415be149d94f2d0ef820017d96c9b9d072fded1ae54eaa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 31
        echo "            ";
        
        $__internal_c8d06551fee73d640415be149d94f2d0ef820017d96c9b9d072fded1ae54eaa5->leave($__internal_c8d06551fee73d640415be149d94f2d0ef820017d96c9b9d072fded1ae54eaa5_prof);

        
        $__internal_18fea643faa56708e9d75bca7792a98d2236957055d96b8bb508800e100a4308->leave($__internal_18fea643faa56708e9d75bca7792a98d2236957055d96b8bb508800e100a4308_prof);

    }

    public function getTemplateName()
    {
        return ":FOSUserBundle/views:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 31,  119 => 30,  106 => 32,  104 => 30,  99 => 27,  96 => 26,  90 => 25,  81 => 22,  76 => 21,  71 => 20,  66 => 19,  64 => 18,  60 => 16,  52 => 14,  46 => 11,  42 => 10,  37 => 9,  35 => 8,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            <h1>Coucou</h1>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
    </body>
</html>
", ":FOSUserBundle/views:layout.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/FOSUserBundle/views/layout.html.twig");
    }
}
