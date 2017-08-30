<?php

/* AppLouvreBundle:App:order.html.twig */
class __TwigTemplate_b5fcc44a138fe1f7c4aa08be766f76788aed9827cc76ca817f4813948521987e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppLouvreBundle::layout.html.twig", "AppLouvreBundle:App:order.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppLouvreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ef8dac04c0012c284853b8d0ce209a98df851711b7d642d788b87f44d46c936 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ef8dac04c0012c284853b8d0ce209a98df851711b7d642d788b87f44d46c936->enter($__internal_3ef8dac04c0012c284853b8d0ce209a98df851711b7d642d788b87f44d46c936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:order.html.twig"));

        $__internal_7a2b0ea41ba69ac404e56e483fa41a37c89511702226e4e5cc0492f056aff913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a2b0ea41ba69ac404e56e483fa41a37c89511702226e4e5cc0492f056aff913->enter($__internal_7a2b0ea41ba69ac404e56e483fa41a37c89511702226e4e5cc0492f056aff913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:order.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ef8dac04c0012c284853b8d0ce209a98df851711b7d642d788b87f44d46c936->leave($__internal_3ef8dac04c0012c284853b8d0ce209a98df851711b7d642d788b87f44d46c936_prof);

        
        $__internal_7a2b0ea41ba69ac404e56e483fa41a37c89511702226e4e5cc0492f056aff913->leave($__internal_7a2b0ea41ba69ac404e56e483fa41a37c89511702226e4e5cc0492f056aff913_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_c754235e208ca654e8ce70d266b09cd8badf86b4f3a5934996a47a6ca959811d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c754235e208ca654e8ce70d266b09cd8badf86b4f3a5934996a47a6ca959811d->enter($__internal_c754235e208ca654e8ce70d266b09cd8badf86b4f3a5934996a47a6ca959811d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_11738a0180edb2cd44f790b9f48a53b5c6befb706fa8cfce10a4c0d918ccb404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11738a0180edb2cd44f790b9f48a53b5c6befb706fa8cfce10a4c0d918ccb404->enter($__internal_11738a0180edb2cd44f790b9f48a53b5c6befb706fa8cfce10a4c0d918ccb404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
\t";
        // line 6
        echo "\t
\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 8
            echo "\t\t<div class=\"alert alert-success\" >
          ";
            // line 9
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
      \t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "   
\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "errors"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 14
            echo "      \t<div class=\"alert alert-danger\">
          ";
            // line 15
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
      \t</div>
  \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    
\t<h1><strong>Etape 1:</strong> Votre commande </h1>
  \t<hr>
  \t
  \t";
        // line 23
        echo "  \t
\t<div id=\"orderForm\" class=\"well col-md-6 \">
\t\t<div class=\" orderForm\">
\t\t\t ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
  \t\t\t\t
  \t\t\t\t";
        // line 29
        echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "visitDate", array()), 'label', array("label_attr" => array("class" => "col-sm-4"), "label" => "Date de visite"));
        echo "

\t\t\t\t\t";
        // line 33
        echo "\t\t\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "visitDate", array()), 'errors');
        echo "

\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t  ";
        // line 37
        echo "\t\t\t\t\t  ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "visitDate", array()), 'widget', array("attr" => array("class" => "datepicker")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
        // line 42
        echo "\t\t\t\t
\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-4"), "label" => "Entrez votre Email "));
        echo "

\t\t\t\t\t";
        // line 48
        echo "\t\t\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "

\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t  ";
        // line 52
        echo "\t\t\t\t\t  ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
        // line 57
        echo "\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 60
        echo "\t\t\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ticketsType", array()), 'label', array("label_attr" => array("class" => "col-sm-4"), "label" => "Choix de billet"));
        echo "

\t\t\t\t\t";
        // line 63
        echo "\t\t\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ticketsType", array()), 'errors');
        echo "

\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t  ";
        // line 67
        echo "\t\t\t\t\t  ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ticketsType", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
        // line 72
        echo "\t\t\t\t
\t\t\t\t<span class=\"form-group\">
\t\t\t\t\t";
        // line 75
        echo "\t\t\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ticketsNbr", array()), 'label', array("label_attr" => array("class" => "col-sm-4"), "label" => "Nombre de billet"));
        echo "

\t\t\t\t\t";
        // line 78
        echo "\t\t\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ticketsNbr", array()), 'errors');
        echo "

\t\t\t\t\t<span class=\"col-sm-3\">
\t\t\t\t\t  ";
        // line 82
        echo "\t\t\t\t\t  ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ticketsNbr", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</span>

\t\t\t\t\t<input type=\"submit\" class=\"btn btn-info\" id=\"stp1bouton\" value=\"Etape 2 >\" />
\t\t\t\t\t<a href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_louvre_homePage");
        echo "\"><input type=\"button\" class=\"btn btn-danger\" value=\"Annuler\" /></a>
\t\t\t\t</span>
\t\t\t";
        // line 88
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>
\t</div>
\t
 \t";
        // line 93
        echo " \t
\t<div id=\"infosHoraires\" class=\"col-md-4\">
\t\t<div class=\"row col-md-8\">

\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\">Horaires :</h3>
\t\t\t\t</div>
\t\t\t\t<ul class=\"list-group\">
\t\t\t\t  <li class=\"list-group-item\">Lundi    : 09h00-18h00</li>
\t\t\t\t  <li class=\"list-group-item\"><strong>Mardi    : Fermé</strong></li>
\t\t\t\t  <li class=\"list-group-item\">Mercredi : 09h00-21h45</li>
\t\t\t\t  <li class=\"list-group-item\">Jeudi    : 09h00-18h00</li>
\t\t\t\t  <li class=\"list-group-item\">Vendredi : 09h00-21h45</li>
\t\t\t\t  <li class=\"list-group-item\">Samedi   : 09h00-18h00</li>
\t\t\t\t  <li class=\"list-group-item\"><strong>Dimanche    : Fermé</strong></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_11738a0180edb2cd44f790b9f48a53b5c6befb706fa8cfce10a4c0d918ccb404->leave($__internal_11738a0180edb2cd44f790b9f48a53b5c6befb706fa8cfce10a4c0d918ccb404_prof);

        
        $__internal_c754235e208ca654e8ce70d266b09cd8badf86b4f3a5934996a47a6ca959811d->leave($__internal_c754235e208ca654e8ce70d266b09cd8badf86b4f3a5934996a47a6ca959811d_prof);

    }

    public function getTemplateName()
    {
        return "AppLouvreBundle:App:order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 93,  209 => 88,  204 => 86,  196 => 82,  189 => 78,  183 => 75,  179 => 72,  171 => 67,  164 => 63,  158 => 60,  154 => 57,  146 => 52,  139 => 48,  134 => 45,  129 => 42,  121 => 37,  114 => 33,  109 => 30,  106 => 29,  101 => 26,  96 => 23,  90 => 18,  81 => 15,  78 => 14,  74 => 13,  71 => 12,  62 => 9,  59 => 8,  55 => 7,  52 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppLouvreBundle::layout.html.twig\" %}

{% block content %}

\t{#Notifications#}
\t
\t{% for flashMessage in app.session.flashbag.get('success') %}
\t\t<div class=\"alert alert-success\" >
          {{ flashMessage }}
      \t</div>
\t{% endfor %}
   
\t{% for flashMessage in app.session.flashbag.get('errors') %}
      \t<div class=\"alert alert-danger\">
          {{ flashMessage }}
      \t</div>
  \t{% endfor %}
    
\t<h1><strong>Etape 1:</strong> Votre commande </h1>
  \t<hr>
  \t
  \t{#Formulaire#}
  \t
\t<div id=\"orderForm\" class=\"well col-md-6 \">
\t\t<div class=\" orderForm\">
\t\t\t {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
  \t\t\t\t
  \t\t\t\t{#Date de visite#}
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{{ form_label(form.visitDate, \"Date de visite\", {'label_attr': {'class': 'col-sm-4'}}) }}

\t\t\t\t\t{# Affichage des erreurs pour ce champ précis. #}
\t\t\t\t\t{{ form_errors(form.visitDate) }}

\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t  {# Génération de l'input. #}
\t\t\t\t\t  {{ form_widget(form.visitDate, {'attr': {'class': 'datepicker'}}) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t{#Email#}
\t\t\t\t
\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t{{ form_label(form.email, \"Entrez votre Email \", {'label_attr': {'class': 'col-sm-4', }}) }}

\t\t\t\t\t{# Affichage des erreurs pour ce champ précis. #}
\t\t\t\t\t{{ form_errors(form.email) }}

\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t  {# Génération de l'input. #}
\t\t\t\t\t  {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t{#Type de billet#}
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{# Génération du label. #}
\t\t\t\t\t{{ form_label(form.ticketsType, \"Choix de billet\", {'label_attr': {'class': 'col-sm-4'}}) }}

\t\t\t\t\t{# Affichage des erreurs pour ce champ précis. #}
\t\t\t\t\t{{ form_errors(form.ticketsType) }}

\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t  {# Génération de l'input. #}
\t\t\t\t\t  {{ form_widget(form.ticketsType, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t{#Nombre de billet + boutons de navigation#}
\t\t\t\t
\t\t\t\t<span class=\"form-group\">
\t\t\t\t\t{# Génération du label. #}
\t\t\t\t\t{{ form_label(form.ticketsNbr, \"Nombre de billet\", {'label_attr': {'class': 'col-sm-4'}}) }}

\t\t\t\t\t{# Affichage des erreurs pour ce champ précis. #}
\t\t\t\t\t{{ form_errors(form.ticketsNbr) }}

\t\t\t\t\t<span class=\"col-sm-3\">
\t\t\t\t\t  {# Génération de l'input. #}
\t\t\t\t\t  {{ form_widget(form.ticketsNbr, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t</span>

\t\t\t\t\t<input type=\"submit\" class=\"btn btn-info\" id=\"stp1bouton\" value=\"Etape 2 >\" />
\t\t\t\t\t<a href=\"{{path('app_louvre_homePage')}}\"><input type=\"button\" class=\"btn btn-danger\" value=\"Annuler\" /></a>
\t\t\t\t</span>
\t\t\t{{ form_end(form) }}
\t\t</div>
\t</div>
\t
 \t{#Horaires#}
 \t
\t<div id=\"infosHoraires\" class=\"col-md-4\">
\t\t<div class=\"row col-md-8\">

\t\t\t<div class=\"panel panel-default\">
\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t<h3 class=\"panel-title\">Horaires :</h3>
\t\t\t\t</div>
\t\t\t\t<ul class=\"list-group\">
\t\t\t\t  <li class=\"list-group-item\">Lundi    : 09h00-18h00</li>
\t\t\t\t  <li class=\"list-group-item\"><strong>Mardi    : Fermé</strong></li>
\t\t\t\t  <li class=\"list-group-item\">Mercredi : 09h00-21h45</li>
\t\t\t\t  <li class=\"list-group-item\">Jeudi    : 09h00-18h00</li>
\t\t\t\t  <li class=\"list-group-item\">Vendredi : 09h00-21h45</li>
\t\t\t\t  <li class=\"list-group-item\">Samedi   : 09h00-18h00</li>
\t\t\t\t  <li class=\"list-group-item\"><strong>Dimanche    : Fermé</strong></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}", "AppLouvreBundle:App:order.html.twig", "C:\\wamp64\\www\\Billetterie\\src\\App\\LouvreBundle/Resources/views/App/order.html.twig");
    }
}
