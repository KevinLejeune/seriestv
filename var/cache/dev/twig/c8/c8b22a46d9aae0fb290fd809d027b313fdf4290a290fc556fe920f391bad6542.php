<?php

/* base.html.twig */
class __TwigTemplate_47fd51b039e5f4fb7e336b9f260737cefed48cbce97d781ee1d74e5c39c4c062 extends Twig_Template
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
        $__internal_9556aed0946582c803724e571616bb05bb25162dc625322c31d90d03703be987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9556aed0946582c803724e571616bb05bb25162dc625322c31d90d03703be987->enter($__internal_9556aed0946582c803724e571616bb05bb25162dc625322c31d90d03703be987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_44d6eadc9b43c085cc2581830b5026afeb9c82c3983b544002ba35f457458f97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44d6eadc9b43c085cc2581830b5026afeb9c82c3983b544002ba35f457458f97->enter($__internal_44d6eadc9b43c085cc2581830b5026afeb9c82c3983b544002ba35f457458f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_9556aed0946582c803724e571616bb05bb25162dc625322c31d90d03703be987->leave($__internal_9556aed0946582c803724e571616bb05bb25162dc625322c31d90d03703be987_prof);

        
        $__internal_44d6eadc9b43c085cc2581830b5026afeb9c82c3983b544002ba35f457458f97->leave($__internal_44d6eadc9b43c085cc2581830b5026afeb9c82c3983b544002ba35f457458f97_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e402c77bdb2e388710a3b03f25d267cc40e67dc914b571be5d6029fa69c2e0d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e402c77bdb2e388710a3b03f25d267cc40e67dc914b571be5d6029fa69c2e0d2->enter($__internal_e402c77bdb2e388710a3b03f25d267cc40e67dc914b571be5d6029fa69c2e0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0f3622dc247187de928938470f3072788b8728c7b176a9b2fadaf56a96bb80f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f3622dc247187de928938470f3072788b8728c7b176a9b2fadaf56a96bb80f1->enter($__internal_0f3622dc247187de928938470f3072788b8728c7b176a9b2fadaf56a96bb80f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0f3622dc247187de928938470f3072788b8728c7b176a9b2fadaf56a96bb80f1->leave($__internal_0f3622dc247187de928938470f3072788b8728c7b176a9b2fadaf56a96bb80f1_prof);

        
        $__internal_e402c77bdb2e388710a3b03f25d267cc40e67dc914b571be5d6029fa69c2e0d2->leave($__internal_e402c77bdb2e388710a3b03f25d267cc40e67dc914b571be5d6029fa69c2e0d2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_239c617347e3d6a53474261fdaf2dc1e2b4fc2754be18fec6cfc0aa4e6729412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_239c617347e3d6a53474261fdaf2dc1e2b4fc2754be18fec6cfc0aa4e6729412->enter($__internal_239c617347e3d6a53474261fdaf2dc1e2b4fc2754be18fec6cfc0aa4e6729412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6cbedae49dcf70b3cf5b09067bd7c822f8f592845d5a2a387522dbf7989711a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cbedae49dcf70b3cf5b09067bd7c822f8f592845d5a2a387522dbf7989711a0->enter($__internal_6cbedae49dcf70b3cf5b09067bd7c822f8f592845d5a2a387522dbf7989711a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6cbedae49dcf70b3cf5b09067bd7c822f8f592845d5a2a387522dbf7989711a0->leave($__internal_6cbedae49dcf70b3cf5b09067bd7c822f8f592845d5a2a387522dbf7989711a0_prof);

        
        $__internal_239c617347e3d6a53474261fdaf2dc1e2b4fc2754be18fec6cfc0aa4e6729412->leave($__internal_239c617347e3d6a53474261fdaf2dc1e2b4fc2754be18fec6cfc0aa4e6729412_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d2480d57897f8a4744574832925880ed60b8f59f2bcd736187c37843c8eaba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d2480d57897f8a4744574832925880ed60b8f59f2bcd736187c37843c8eaba5->enter($__internal_4d2480d57897f8a4744574832925880ed60b8f59f2bcd736187c37843c8eaba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ec4d241cc6e585c793ecd25a52e72ddf8df34728387cb85e92e416269fbb0292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec4d241cc6e585c793ecd25a52e72ddf8df34728387cb85e92e416269fbb0292->enter($__internal_ec4d241cc6e585c793ecd25a52e72ddf8df34728387cb85e92e416269fbb0292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ec4d241cc6e585c793ecd25a52e72ddf8df34728387cb85e92e416269fbb0292->leave($__internal_ec4d241cc6e585c793ecd25a52e72ddf8df34728387cb85e92e416269fbb0292_prof);

        
        $__internal_4d2480d57897f8a4744574832925880ed60b8f59f2bcd736187c37843c8eaba5->leave($__internal_4d2480d57897f8a4744574832925880ed60b8f59f2bcd736187c37843c8eaba5_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9c53a9abe38b60de68cf897d2e776d104df7428e82ef3fb43e20d1086e8ba164 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c53a9abe38b60de68cf897d2e776d104df7428e82ef3fb43e20d1086e8ba164->enter($__internal_9c53a9abe38b60de68cf897d2e776d104df7428e82ef3fb43e20d1086e8ba164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3d0af7a3644f398aa0a0184daeaa35159930602c4b7cddceb254e9f36dd76fe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d0af7a3644f398aa0a0184daeaa35159930602c4b7cddceb254e9f36dd76fe9->enter($__internal_3d0af7a3644f398aa0a0184daeaa35159930602c4b7cddceb254e9f36dd76fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "            
        ";
        
        $__internal_3d0af7a3644f398aa0a0184daeaa35159930602c4b7cddceb254e9f36dd76fe9->leave($__internal_3d0af7a3644f398aa0a0184daeaa35159930602c4b7cddceb254e9f36dd76fe9_prof);

        
        $__internal_9c53a9abe38b60de68cf897d2e776d104df7428e82ef3fb43e20d1086e8ba164->leave($__internal_9c53a9abe38b60de68cf897d2e776d104df7428e82ef3fb43e20d1086e8ba164_prof);

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
