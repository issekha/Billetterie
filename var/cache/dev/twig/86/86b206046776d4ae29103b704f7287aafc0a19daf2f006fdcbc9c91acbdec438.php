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
        $__internal_9a8f1fec50f96f4bdfb2bac9ddd9edc49426bd37fef19da80e8e9abeb7646990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a8f1fec50f96f4bdfb2bac9ddd9edc49426bd37fef19da80e8e9abeb7646990->enter($__internal_9a8f1fec50f96f4bdfb2bac9ddd9edc49426bd37fef19da80e8e9abeb7646990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle::layout.html.twig"));

        $__internal_6d4608b30dffaf888bc7d9f61671f616e531e0af1f475a9554729d1f57b6137c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d4608b30dffaf888bc7d9f61671f616e531e0af1f475a9554729d1f57b6137c->enter($__internal_6d4608b30dffaf888bc7d9f61671f616e531e0af1f475a9554729d1f57b6137c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
   <meta charset=\"utf-8\">
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
  \t<title>Louvre.fr</title>
  </head>
  <body>
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
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
            \t\t</div>
            \t\t<!-- /.navbar-collapse -->
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>
\t\t<!--/.Navbar-->
\t\t
\t\t

\t\t<div id=\"content\" class=\"row\">";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
\t\t
\t\t<footer class=\"footer\">
\t\t\t<a href=\"https://github.com//issekha/louvreTrp\">Powered by dsetdb</a> Copyright 2017.
\t\t</footer>

\t\t<!-- jQuery -->
\t\t<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://code.jquery.com/jquery-1.12.4.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://code.jquery.com/ui/1.12.1/jquery-ui.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("i18n/datepicker-fr.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t<!-- JavaScript Boostrap plugin -->
\t\t<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t<script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("lib/bootstrap-datepicker/dist/locales/bootstrap-datepicker.fr.min.js"), "html", null, true);
        echo "\"></script>
\t\t
\t\t<script src=\"https://js.stripe.com/v3/\"></script>


\t</body>
</html>
";
        
        $__internal_9a8f1fec50f96f4bdfb2bac9ddd9edc49426bd37fef19da80e8e9abeb7646990->leave($__internal_9a8f1fec50f96f4bdfb2bac9ddd9edc49426bd37fef19da80e8e9abeb7646990_prof);

        
        $__internal_6d4608b30dffaf888bc7d9f61671f616e531e0af1f475a9554729d1f57b6137c->leave($__internal_6d4608b30dffaf888bc7d9f61671f616e531e0af1f475a9554729d1f57b6137c_prof);

    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        $__internal_894ddba562683e72ae462552207ed6b97331f3137bdc60739720f2a15516bc61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_894ddba562683e72ae462552207ed6b97331f3137bdc60739720f2a15516bc61->enter($__internal_894ddba562683e72ae462552207ed6b97331f3137bdc60739720f2a15516bc61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d074c5d91eeba66848c5b6c9dab499d5916b8a04079850b4a4e0798159e00ebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d074c5d91eeba66848c5b6c9dab499d5916b8a04079850b4a4e0798159e00ebe->enter($__internal_d074c5d91eeba66848c5b6c9dab499d5916b8a04079850b4a4e0798159e00ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_d074c5d91eeba66848c5b6c9dab499d5916b8a04079850b4a4e0798159e00ebe->leave($__internal_d074c5d91eeba66848c5b6c9dab499d5916b8a04079850b4a4e0798159e00ebe_prof);

        
        $__internal_894ddba562683e72ae462552207ed6b97331f3137bdc60739720f2a15516bc61->leave($__internal_894ddba562683e72ae462552207ed6b97331f3137bdc60739720f2a15516bc61_prof);

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
        return array (  143 => 42,  125 => 59,  121 => 58,  116 => 56,  110 => 53,  106 => 52,  102 => 51,  98 => 50,  94 => 49,  84 => 42,  68 => 29,  62 => 26,  42 => 9,  38 => 8,  34 => 7,  26 => 1,);
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
   <meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<link href=\"{{ asset('lib/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
\t\t<link href=\"{{ asset('lib/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css') }}\" rel=\"stylesheet\">
\t\t<link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">
  \t<title>Louvre.fr</title>
  </head>
  <body>
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
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
            \t\t</div>
            \t\t<!-- /.navbar-collapse -->
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>
\t\t<!--/.Navbar-->
\t\t
\t\t

\t\t<div id=\"content\" class=\"row\">{% block content %}{% endblock %}</div>
\t\t
\t\t<footer class=\"footer\">
\t\t\t<a href=\"https://github.com//issekha/louvreTrp\">Powered by dsetdb</a> Copyright 2017.
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
