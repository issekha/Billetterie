<?php

/* MKLouvreBundle::layout.html.twig */
class __TwigTemplate_b775301836ce2461fffeb2c23c248176ef4458586a49511d1c1ed7ec941caf65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a318a30d395b8d8ce7b8cb9ebc3d0ef45a661600eeaf8f782dae7785fd39404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a318a30d395b8d8ce7b8cb9ebc3d0ef45a661600eeaf8f782dae7785fd39404->enter($__internal_1a318a30d395b8d8ce7b8cb9ebc3d0ef45a661600eeaf8f782dae7785fd39404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle::layout.html.twig"));

        $__internal_ba5cf29372ee65972c3f3db3c9b58b9d0dcefa357fe4000c83141f53217b3e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba5cf29372ee65972c3f3db3c9b58b9d0dcefa357fe4000c83141f53217b3e4a->enter($__internal_ba5cf29372ee65972c3f3db3c9b58b9d0dcefa357fe4000c83141f53217b3e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MKLouvreBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "

  <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/resources/demos/style.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("style.css"), "html", null, true);
        echo "\">
  <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://code.jquery.com/jquery-1.12.4.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://code.jquery.com/ui/1.12.1/jquery-ui.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("i18n/datepicker-fr.js"), "html", null, true);
        echo "\"></script>
  </head>

  <body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Le site du musée du louvre</h1>
      <p>
        Le musée du Louvre est un musée d'art et d'antiquités situé au centre de Paris dans le palais du Louvre.
      </p>
      <p>
        <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mk_louvre_reservation");
        echo "\" class=\"btn btn-primary btn-lg\">Acheter Votre Billet !</a>
      </p>
    </div>

    <div class=\"row\">

        <div id=\"content\" class=\"col-md-9\">
        ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "      </div>

    </div>

        

    <hr>

    <footer>
      <p>Développé par Mohamed Konaté</p>
    </footer>
  </div>


<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fichier.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
";
        
        $__internal_1a318a30d395b8d8ce7b8cb9ebc3d0ef45a661600eeaf8f782dae7785fd39404->leave($__internal_1a318a30d395b8d8ce7b8cb9ebc3d0ef45a661600eeaf8f782dae7785fd39404_prof);

        
        $__internal_ba5cf29372ee65972c3f3db3c9b58b9d0dcefa357fe4000c83141f53217b3e4a->leave($__internal_ba5cf29372ee65972c3f3db3c9b58b9d0dcefa357fe4000c83141f53217b3e4a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3caee9b8b40e86eeac0391c03bc201d87a91a562e4e4ba00fb64dd0eb7bf3b9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3caee9b8b40e86eeac0391c03bc201d87a91a562e4e4ba00fb64dd0eb7bf3b9a->enter($__internal_3caee9b8b40e86eeac0391c03bc201d87a91a562e4e4ba00fb64dd0eb7bf3b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2b35c6ada87bf6a28be175b617d9fee391049b834148fd8dd8ebe5e9ebeedb56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b35c6ada87bf6a28be175b617d9fee391049b834148fd8dd8ebe5e9ebeedb56->enter($__internal_2b35c6ada87bf6a28be175b617d9fee391049b834148fd8dd8ebe5e9ebeedb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Musée du Louvre";
        
        $__internal_2b35c6ada87bf6a28be175b617d9fee391049b834148fd8dd8ebe5e9ebeedb56->leave($__internal_2b35c6ada87bf6a28be175b617d9fee391049b834148fd8dd8ebe5e9ebeedb56_prof);

        
        $__internal_3caee9b8b40e86eeac0391c03bc201d87a91a562e4e4ba00fb64dd0eb7bf3b9a->leave($__internal_3caee9b8b40e86eeac0391c03bc201d87a91a562e4e4ba00fb64dd0eb7bf3b9a_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fc0365c46bae58afabfedd86d3c6a63ae2ba1de015a9bd7d2e29287d23d396b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc0365c46bae58afabfedd86d3c6a63ae2ba1de015a9bd7d2e29287d23d396b7->enter($__internal_fc0365c46bae58afabfedd86d3c6a63ae2ba1de015a9bd7d2e29287d23d396b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_71290af4261c13871341b43491af43ecce7f187f6df18d02d86c3087ba8c087c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71290af4261c13871341b43491af43ecce7f187f6df18d02d86c3087ba8c087c->enter($__internal_71290af4261c13871341b43491af43ecce7f187f6df18d02d86c3087ba8c087c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "      ";
        // line 11
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_71290af4261c13871341b43491af43ecce7f187f6df18d02d86c3087ba8c087c->leave($__internal_71290af4261c13871341b43491af43ecce7f187f6df18d02d86c3087ba8c087c_prof);

        
        $__internal_fc0365c46bae58afabfedd86d3c6a63ae2ba1de015a9bd7d2e29287d23d396b7->leave($__internal_fc0365c46bae58afabfedd86d3c6a63ae2ba1de015a9bd7d2e29287d23d396b7_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_b15e3ae5fa3b20a688c2247c5afa5abb112b4c49828d0f22d0af6acf9c888c4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b15e3ae5fa3b20a688c2247c5afa5abb112b4c49828d0f22d0af6acf9c888c4a->enter($__internal_b15e3ae5fa3b20a688c2247c5afa5abb112b4c49828d0f22d0af6acf9c888c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_04f15f0ff86db15a49ae40ea563ff5b9bbf9c4fb9a9aa7f18390e8e79ec23f32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f15f0ff86db15a49ae40ea563ff5b9bbf9c4fb9a9aa7f18390e8e79ec23f32->enter($__internal_04f15f0ff86db15a49ae40ea563ff5b9bbf9c4fb9a9aa7f18390e8e79ec23f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "        ";
        
        $__internal_04f15f0ff86db15a49ae40ea563ff5b9bbf9c4fb9a9aa7f18390e8e79ec23f32->leave($__internal_04f15f0ff86db15a49ae40ea563ff5b9bbf9c4fb9a9aa7f18390e8e79ec23f32_prof);

        
        $__internal_b15e3ae5fa3b20a688c2247c5afa5abb112b4c49828d0f22d0af6acf9c888c4a->leave($__internal_b15e3ae5fa3b20a688c2247c5afa5abb112b4c49828d0f22d0af6acf9c888c4a_prof);

    }

    public function getTemplateName()
    {
        return "MKLouvreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 39,  165 => 38,  152 => 11,  150 => 10,  141 => 9,  123 => 7,  109 => 54,  93 => 40,  91 => 38,  81 => 31,  67 => 20,  63 => 19,  59 => 18,  55 => 17,  51 => 16,  47 => 15,  43 => 13,  41 => 9,  36 => 7,  28 => 1,);
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
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>{% block title %}Musée du Louvre{% endblock %}</title>

    {% block stylesheets %}
      {# On charge le CSS de bootstrap depuis le site directement #}
      <link rel=\"stylesheet\" href=\"{{ asset ('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css') }}\">
    {% endblock %}


  <link rel=\"stylesheet\" href=\"{{ asset ('//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset ('/resources/demos/style.css') }}\">
  <link rel=\"stylesheet\" href=\"{{ asset ('style.css') }}\">
  <script src=\"{{ asset ('https://code.jquery.com/jquery-1.12.4.js') }}\"></script>
  <script src=\"{{ asset ('https://code.jquery.com/ui/1.12.1/jquery-ui.js') }}\"></script>
  <script src=\"{{ asset ('i18n/datepicker-fr.js') }}\"></script>
  </head>

  <body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Le site du musée du louvre</h1>
      <p>
        Le musée du Louvre est un musée d'art et d'antiquités situé au centre de Paris dans le palais du Louvre.
      </p>
      <p>
        <a href=\"{{ path('mk_louvre_reservation')}}\" class=\"btn btn-primary btn-lg\">Acheter Votre Billet !</a>
      </p>
    </div>

    <div class=\"row\">

        <div id=\"content\" class=\"col-md-9\">
        {% block body %}
        {% endblock %}
      </div>

    </div>

        

    <hr>

    <footer>
      <p>Développé par Mohamed Konaté</p>
    </footer>
  </div>


<script src=\"{{ asset ('fichier.js') }}\"></script>
  </body>
</html>
", "MKLouvreBundle::layout.html.twig", "C:\\xampp\\htdocs\\louvre\\src\\MK\\LouvreBundle/Resources/views/layout.html.twig");
    }
}
