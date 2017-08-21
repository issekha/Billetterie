<?php

/* AppLouvreBundle::layout.html.twig */
class __TwigTemplate_b990b62505c5a5f5a6cb422969b018bbca8a49127313fd038243a4d82d6f4a3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a63b9a8ec28d41c369b98268f82b5b00467422483a70d0e511046118d344103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a63b9a8ec28d41c369b98268f82b5b00467422483a70d0e511046118d344103->enter($__internal_8a63b9a8ec28d41c369b98268f82b5b00467422483a70d0e511046118d344103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle::layout.html.twig"));

        $__internal_adeab1e862128dbb003e0d5e1b0fd1da99b41d9ff69255dc798823d868ef5cf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adeab1e862128dbb003e0d5e1b0fd1da99b41d9ff69255dc798823d868ef5cf4->enter($__internal_adeab1e862128dbb003e0d5e1b0fd1da99b41d9ff69255dc798823d868ef5cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<title>Louvre.fr</title>
\t</head>
\t<body>
\t\t<div class=\"container\">
\t\t\t<!--Navbar-->
\t\t\t<nav class=\"navbar navbar-default navbar-fixed-top navbar-inverse navbar-toggleable-md navbar-dark bg-primary fixed-top\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"http://www.louvre.fr\">Musée du Louvre</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbar-main\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t<li class=\"hidden\">
\t\t\t\t\t\t\t\t<a href=\"#page-top\"></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_louvre_homePage");
        echo "\">Accueil</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_louvre_order");
        echo "\">Commander</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.navbar-collapse -->
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>
\t\t<!--/.Navbar-->
\t\t<div id=\"content\" class=\"row\">";
        // line 38
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
\t\t
\t\t<footer class=\"footer\">
\t\t\t<a href=\"https://github.com//issekha/Billetterie\">Powered by dsetdb</a> Copyright 2017.
\t\t</footer>

\t\t<!-- jQuery -->
\t\t<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://code.jquery.com/jquery-1.12.4.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://code.jquery.com/ui/1.12.1/jquery-ui.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("i18n/datepicker-fr.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t<!-- JavaScript Boostrap plugin -->
\t\t<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap-datepicker/dist/locales/bootstrap-datepicker.fr.min.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t<script src=\"https://js.stripe.com/v3/\"></script>
\t</body>
</html>
";
        
        $__internal_8a63b9a8ec28d41c369b98268f82b5b00467422483a70d0e511046118d344103->leave($__internal_8a63b9a8ec28d41c369b98268f82b5b00467422483a70d0e511046118d344103_prof);

        
        $__internal_adeab1e862128dbb003e0d5e1b0fd1da99b41d9ff69255dc798823d868ef5cf4->leave($__internal_adeab1e862128dbb003e0d5e1b0fd1da99b41d9ff69255dc798823d868ef5cf4_prof);

    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        $__internal_b216af8435683098d70524c61d249e72b2296c49c247794c6a38be26969d0f3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b216af8435683098d70524c61d249e72b2296c49c247794c6a38be26969d0f3a->enter($__internal_b216af8435683098d70524c61d249e72b2296c49c247794c6a38be26969d0f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c48cc91d737b28d285b2368e84a98b68ebc9db05b35462b9b9b06be6c369a039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c48cc91d737b28d285b2368e84a98b68ebc9db05b35462b9b9b06be6c369a039->enter($__internal_c48cc91d737b28d285b2368e84a98b68ebc9db05b35462b9b9b06be6c369a039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_c48cc91d737b28d285b2368e84a98b68ebc9db05b35462b9b9b06be6c369a039->leave($__internal_c48cc91d737b28d285b2368e84a98b68ebc9db05b35462b9b9b06be6c369a039_prof);

        
        $__internal_b216af8435683098d70524c61d249e72b2296c49c247794c6a38be26969d0f3a->leave($__internal_b216af8435683098d70524c61d249e72b2296c49c247794c6a38be26969d0f3a_prof);

    }

    public function getTemplateName()
    {
        return "AppLouvreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 38,  121 => 55,  117 => 54,  112 => 52,  106 => 49,  102 => 48,  98 => 47,  94 => 46,  90 => 45,  80 => 38,  68 => 29,  62 => 26,  42 => 9,  38 => 8,  34 => 7,  26 => 1,);
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
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<link href=\"{{ asset('lib/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
\t\t<link href=\"{{ asset('lib/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css') }}\" rel=\"stylesheet\">
\t\t<link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">
\t\t<title>Louvre.fr</title>
\t</head>
\t<body>
\t\t<div class=\"container\">
\t\t\t<!--Navbar-->
\t\t\t<nav class=\"navbar navbar-default navbar-fixed-top navbar-inverse navbar-toggleable-md navbar-dark bg-primary fixed-top\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"http://www.louvre.fr\">Musée du Louvre</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbar-main\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t<li class=\"hidden\">
\t\t\t\t\t\t\t\t<a href=\"#page-top\"></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('app_louvre_homePage')}}\">Accueil</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('app_louvre_order')}}\">Commander</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.navbar-collapse -->
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>
\t\t<!--/.Navbar-->
\t\t<div id=\"content\" class=\"row\">{% block content %}{% endblock %}</div>
\t\t
\t\t<footer class=\"footer\">
\t\t\t<a href=\"https://github.com//issekha/Billetterie\">Powered by dsetdb</a> Copyright 2017.
\t\t</footer>

\t\t<!-- jQuery -->
\t\t<script src=\"{{ asset('lib/jquery/jquery.min.js') }}\"></script>
\t\t<script src=\"{{ asset ('https://code.jquery.com/jquery-1.12.4.js') }}\"></script>
\t\t<script src=\"{{ asset ('https://code.jquery.com/ui/1.12.1/jquery-ui.js') }}\"></script>
\t\t<script src=\"{{ asset ('i18n/datepicker-fr.js') }}\"></script>
\t\t<script src=\"{{ asset('js/app.js')}}\"></script>
\t\t
\t\t<!-- JavaScript Boostrap plugin -->
\t\t<script src=\"{{ asset('lib/bootstrap/js/bootstrap.min.js') }}\"></script>
\t\t
\t\t<script src=\"{{ asset('lib/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}\"></script>
\t\t<script src=\"{{ asset('lib/bootstrap-datepicker/dist/locales/bootstrap-datepicker.fr.min.js') }}\"></script>
\t\t
\t\t<script src=\"https://js.stripe.com/v3/\"></script>
\t</body>
</html>
", "AppLouvreBundle::layout.html.twig", "C:\\wamp64\\www\\Billetterie\\src\\App\\LouvreBundle/Resources/views/layout.html.twig");
    }
}
