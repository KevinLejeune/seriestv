<?php

/* base.html.twig */
class __TwigTemplate_0f7392102991309cf27a0a919ffad8cb4a1ac73166363ccbc7b612edd07f4f0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bdadc16be7147d9a77ae29d0450c4e254e899a6c52b3d6660027179fc29c3b7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdadc16be7147d9a77ae29d0450c4e254e899a6c52b3d6660027179fc29c3b7d->enter($__internal_bdadc16be7147d9a77ae29d0450c4e254e899a6c52b3d6660027179fc29c3b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_39f58ff85bd7c405f2c1a883ce4c287ca52c964fce2677aec67d3f60a72d042d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f58ff85bd7c405f2c1a883ce4c287ca52c964fce2677aec67d3f60a72d042d->enter($__internal_39f58ff85bd7c405f2c1a883ce4c287ca52c964fce2677aec67d3f60a72d042d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap-datepicker/css/bootstrap-datepicker.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dataTables/css/jquery.dataTables.min.css"), "html", null, true);
        echo "\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jquery-min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap-datepicker/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dataTables/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        <div>
            <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Déconnexion</a>
        </div>
        ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "    </body>
</html>
";
        
        $__internal_bdadc16be7147d9a77ae29d0450c4e254e899a6c52b3d6660027179fc29c3b7d->leave($__internal_bdadc16be7147d9a77ae29d0450c4e254e899a6c52b3d6660027179fc29c3b7d_prof);

        
        $__internal_39f58ff85bd7c405f2c1a883ce4c287ca52c964fce2677aec67d3f60a72d042d->leave($__internal_39f58ff85bd7c405f2c1a883ce4c287ca52c964fce2677aec67d3f60a72d042d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_178b13e1c8d415fbdf529daaae42b1d2cadc44e59e57ace82db58be43b1be78a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_178b13e1c8d415fbdf529daaae42b1d2cadc44e59e57ace82db58be43b1be78a->enter($__internal_178b13e1c8d415fbdf529daaae42b1d2cadc44e59e57ace82db58be43b1be78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_55029f6b8a0e7e65074d38732b183570a33060fc8ec137235a6ffbb8c1888040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55029f6b8a0e7e65074d38732b183570a33060fc8ec137235a6ffbb8c1888040->enter($__internal_55029f6b8a0e7e65074d38732b183570a33060fc8ec137235a6ffbb8c1888040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_55029f6b8a0e7e65074d38732b183570a33060fc8ec137235a6ffbb8c1888040->leave($__internal_55029f6b8a0e7e65074d38732b183570a33060fc8ec137235a6ffbb8c1888040_prof);

        
        $__internal_178b13e1c8d415fbdf529daaae42b1d2cadc44e59e57ace82db58be43b1be78a->leave($__internal_178b13e1c8d415fbdf529daaae42b1d2cadc44e59e57ace82db58be43b1be78a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_470466b135bfcbfa805b1f58af13b7be5595a29e2a516ff021b6a0697ee31eff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_470466b135bfcbfa805b1f58af13b7be5595a29e2a516ff021b6a0697ee31eff->enter($__internal_470466b135bfcbfa805b1f58af13b7be5595a29e2a516ff021b6a0697ee31eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a436faa4fc07d3fbaac62ccb78104664179c29b8342a16c0cec347121a7d3f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a436faa4fc07d3fbaac62ccb78104664179c29b8342a16c0cec347121a7d3f19->enter($__internal_a436faa4fc07d3fbaac62ccb78104664179c29b8342a16c0cec347121a7d3f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a436faa4fc07d3fbaac62ccb78104664179c29b8342a16c0cec347121a7d3f19->leave($__internal_a436faa4fc07d3fbaac62ccb78104664179c29b8342a16c0cec347121a7d3f19_prof);

        
        $__internal_470466b135bfcbfa805b1f58af13b7be5595a29e2a516ff021b6a0697ee31eff->leave($__internal_470466b135bfcbfa805b1f58af13b7be5595a29e2a516ff021b6a0697ee31eff_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_84e0caf2b16fb44e5d53726c803ec7db555ea2fa3a7fcc82523c6d3275ffb092 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84e0caf2b16fb44e5d53726c803ec7db555ea2fa3a7fcc82523c6d3275ffb092->enter($__internal_84e0caf2b16fb44e5d53726c803ec7db555ea2fa3a7fcc82523c6d3275ffb092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d4e146a537871f9fca5c1f88e5e1ef93ede04e3f7e09cf567ab88e29c97667db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4e146a537871f9fca5c1f88e5e1ef93ede04e3f7e09cf567ab88e29c97667db->enter($__internal_d4e146a537871f9fca5c1f88e5e1ef93ede04e3f7e09cf567ab88e29c97667db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d4e146a537871f9fca5c1f88e5e1ef93ede04e3f7e09cf567ab88e29c97667db->leave($__internal_d4e146a537871f9fca5c1f88e5e1ef93ede04e3f7e09cf567ab88e29c97667db_prof);

        
        $__internal_84e0caf2b16fb44e5d53726c803ec7db555ea2fa3a7fcc82523c6d3275ffb092->leave($__internal_84e0caf2b16fb44e5d53726c803ec7db555ea2fa3a7fcc82523c6d3275ffb092_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bdecfc33100d8d97a275599ea3a1f045cd639c6b85c432fbfb9b042d30ea239a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdecfc33100d8d97a275599ea3a1f045cd639c6b85c432fbfb9b042d30ea239a->enter($__internal_bdecfc33100d8d97a275599ea3a1f045cd639c6b85c432fbfb9b042d30ea239a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8ab9a0fcdd448f78625c34f9cc53cd8928b9c8e92e32b97c3a18923a78fbf73d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ab9a0fcdd448f78625c34f9cc53cd8928b9c8e92e32b97c3a18923a78fbf73d->enter($__internal_8ab9a0fcdd448f78625c34f9cc53cd8928b9c8e92e32b97c3a18923a78fbf73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "            
        ";
        
        $__internal_8ab9a0fcdd448f78625c34f9cc53cd8928b9c8e92e32b97c3a18923a78fbf73d->leave($__internal_8ab9a0fcdd448f78625c34f9cc53cd8928b9c8e92e32b97c3a18923a78fbf73d_prof);

        
        $__internal_bdecfc33100d8d97a275599ea3a1f045cd639c6b85c432fbfb9b042d30ea239a->leave($__internal_bdecfc33100d8d97a275599ea3a1f045cd639c6b85c432fbfb9b042d30ea239a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 24,  154 => 23,  137 => 22,  120 => 6,  102 => 5,  90 => 26,  87 => 23,  85 => 22,  80 => 20,  73 => 16,  69 => 15,  65 => 14,  61 => 13,  56 => 11,  52 => 10,  48 => 9,  44 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}

        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('dataTables/css/jquery.dataTables.min.css') }}\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

        <script type=\"text/javascript\" src=\"{{ asset('jquery-min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('bootstrap/js/bootstrap.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('dataTables/js/jquery.dataTables.min.js') }}\"></script>
    </head>
    <body>
        <div>
            <a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
        </div>
        {% block body %}{% endblock %}
        {% block javascripts %}
            
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/Applications/MAMP/htdocs/seriestv/app/Resources/views/base.html.twig");
    }
}
