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
        $__internal_b5739c2cb3823a7da85b1576829ebe68d896db455877171a0b052e62c03ffe32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5739c2cb3823a7da85b1576829ebe68d896db455877171a0b052e62c03ffe32->enter($__internal_b5739c2cb3823a7da85b1576829ebe68d896db455877171a0b052e62c03ffe32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle::layout.html.twig"));

        $__internal_dd30d49dd04be0fe82d51734db19ff21598a46efe45def8710f4e8542ed54491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd30d49dd04be0fe82d51734db19ff21598a46efe45def8710f4e8542ed54491->enter($__internal_dd30d49dd04be0fe82d51734db19ff21598a46efe45def8710f4e8542ed54491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle::layout.html.twig"));

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
  \t<title>Musée du Louvre</title>
  </head>
  <body>
\t\t<div class=\"container\">
\t\t\t<!--Navbar-->
\t\t\t<nav class=\"navbar navbar-default navbar-fixed-top navbar-inverse navbar-toggleable-md navbar-dark bg-primary fixed-top\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"../\">Louvre.fr</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbar-main\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t<li class=\"hidden\">
\t\t\t\t\t\t\t\t<a href=\"#page-top\"></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"../\">Accueil</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"../step/1\">Commander</a>
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
        
        $__internal_b5739c2cb3823a7da85b1576829ebe68d896db455877171a0b052e62c03ffe32->leave($__internal_b5739c2cb3823a7da85b1576829ebe68d896db455877171a0b052e62c03ffe32_prof);

        
        $__internal_dd30d49dd04be0fe82d51734db19ff21598a46efe45def8710f4e8542ed54491->leave($__internal_dd30d49dd04be0fe82d51734db19ff21598a46efe45def8710f4e8542ed54491_prof);

    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        $__internal_7b8f7ce87b4e0da29148c3c9885db481807367b27d3a79602cf796e1b892ccfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b8f7ce87b4e0da29148c3c9885db481807367b27d3a79602cf796e1b892ccfc->enter($__internal_7b8f7ce87b4e0da29148c3c9885db481807367b27d3a79602cf796e1b892ccfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_11687328fd25708ee4cc26491564381a0fe5286d4aaed103a66f4164214bed17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11687328fd25708ee4cc26491564381a0fe5286d4aaed103a66f4164214bed17->enter($__internal_11687328fd25708ee4cc26491564381a0fe5286d4aaed103a66f4164214bed17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_11687328fd25708ee4cc26491564381a0fe5286d4aaed103a66f4164214bed17->leave($__internal_11687328fd25708ee4cc26491564381a0fe5286d4aaed103a66f4164214bed17_prof);

        
        $__internal_7b8f7ce87b4e0da29148c3c9885db481807367b27d3a79602cf796e1b892ccfc->leave($__internal_7b8f7ce87b4e0da29148c3c9885db481807367b27d3a79602cf796e1b892ccfc_prof);

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
        return array (  137 => 42,  119 => 59,  115 => 58,  110 => 56,  104 => 53,  100 => 52,  96 => 51,  92 => 50,  88 => 49,  78 => 42,  42 => 9,  38 => 8,  34 => 7,  26 => 1,);
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
  \t<title>Musée du Louvre</title>
  </head>
  <body>
\t\t<div class=\"container\">
\t\t\t<!--Navbar-->
\t\t\t<nav class=\"navbar navbar-default navbar-fixed-top navbar-inverse navbar-toggleable-md navbar-dark bg-primary fixed-top\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"../\">Louvre.fr</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbar-main\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t<li class=\"hidden\">
\t\t\t\t\t\t\t\t<a href=\"#page-top\"></a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"../\">Accueil</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"../step/1\">Commander</a>
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
