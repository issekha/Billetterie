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
        $__internal_b9225b65cd4f2206026ce37e264d9ad4bb5af627aae233e51a4504d7965d8830 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9225b65cd4f2206026ce37e264d9ad4bb5af627aae233e51a4504d7965d8830->enter($__internal_b9225b65cd4f2206026ce37e264d9ad4bb5af627aae233e51a4504d7965d8830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:order.html.twig"));

        $__internal_833182c59e1e9305795323d70784ba7bcdafece29e5e30627b5a7027f65cce1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_833182c59e1e9305795323d70784ba7bcdafece29e5e30627b5a7027f65cce1d->enter($__internal_833182c59e1e9305795323d70784ba7bcdafece29e5e30627b5a7027f65cce1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:order.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9225b65cd4f2206026ce37e264d9ad4bb5af627aae233e51a4504d7965d8830->leave($__internal_b9225b65cd4f2206026ce37e264d9ad4bb5af627aae233e51a4504d7965d8830_prof);

        
        $__internal_833182c59e1e9305795323d70784ba7bcdafece29e5e30627b5a7027f65cce1d->leave($__internal_833182c59e1e9305795323d70784ba7bcdafece29e5e30627b5a7027f65cce1d_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4f0b8c4feead4acdc169e6059ca4b67cae8bcb634f1cfb55d04bb48e5986b66f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f0b8c4feead4acdc169e6059ca4b67cae8bcb634f1cfb55d04bb48e5986b66f->enter($__internal_4f0b8c4feead4acdc169e6059ca4b67cae8bcb634f1cfb55d04bb48e5986b66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ee375fc1d23bbc22296862aa2a6f8c2a1b1f2a2f631ed34ff99e7a7d748c0375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee375fc1d23bbc22296862aa2a6f8c2a1b1f2a2f631ed34ff99e7a7d748c0375->enter($__internal_ee375fc1d23bbc22296862aa2a6f8c2a1b1f2a2f631ed34ff99e7a7d748c0375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 6
            echo "\t\t<div class=\"alert alert-success\" >
          ";
            // line 7
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
      \t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "   
\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "errors"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "      \t<div class=\"alert alert-danger\">
          ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
      \t</div>
  \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    
\t<h1><strong>Etape 1:</strong> Votre commande </h1>
  \t<hr>
\t<div id=\"orderForm\" class=\"well col-md-6 \">
\t\t<div class=\" orderForm\">
\t\t\t ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
  
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "visitDate", array()), 'label', array("label_attr" => array("class" => "col-sm-4"), "label" => "Date de visite"));
        echo "

\t\t\t\t\t";
        // line 27
        echo "\t\t\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "visitDate", array()), 'errors');
        echo "

\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t  ";
        // line 31
        echo "\t\t\t\t\t  ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "visitDate", array()), 'widget', array("attr" => array("class" => "datepicker")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-4"), "label" => "Entrez votre Email "));
        echo "

\t\t\t\t\t";
        // line 40
        echo "\t\t\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "

\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t  ";
        // line 44
        echo "\t\t\t\t\t  ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 50
        echo "\t\t\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ticketsType", array()), 'label', array("label_attr" => array("class" => "col-sm-4"), "label" => "Choix de billet"));
        echo "

\t\t\t\t\t";
        // line 53
        echo "\t\t\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ticketsType", array()), 'errors');
        echo "

\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t  ";
        // line 57
        echo "\t\t\t\t\t  ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ticketsType", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t  
\t\t\t\t  <span class=\"form-group\">
\t\t\t\t\t";
        // line 63
        echo "\t\t\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ticketsNbr", array()), 'label', array("label_attr" => array("class" => "col-sm-4"), "label" => "Nombre de billet"));
        echo "

\t\t\t\t\t";
        // line 66
        echo "\t\t\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ticketsNbr", array()), 'errors');
        echo "

\t\t\t\t\t<span class=\"col-sm-3\">
\t\t\t\t\t  ";
        // line 70
        echo "\t\t\t\t\t  ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ticketsNbr", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</span>
\t\t\t\t\t
\t\t\t\t\t<input type=\"submit\" class=\"btn btn-success\" id=\"stp1bouton\" value=\"Etape suivante >\" />
\t\t\t\t\t<a href=\"../\"><input type=\"button\" class=\"btn btn-danger\" value=\"Annuler\" /></a>
\t\t\t\t  </span>

\t\t\t";
        // line 77
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t
\t\t</div>
\t</div>
 
   <div id=\"infosHoraires\" class=\"col-md-4\">
  \t\t<div class=\"row col-md-8\">
\t\t
\t\t\t<div class=\"panel panel-default\">
  \t\t\t\t<div class=\"panel-heading\">
  \t  \t\t\t\t<h3 class=\"panel-title\">Horaires :</h3>
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
  </div>
";
        
        $__internal_ee375fc1d23bbc22296862aa2a6f8c2a1b1f2a2f631ed34ff99e7a7d748c0375->leave($__internal_ee375fc1d23bbc22296862aa2a6f8c2a1b1f2a2f631ed34ff99e7a7d748c0375_prof);

        
        $__internal_4f0b8c4feead4acdc169e6059ca4b67cae8bcb634f1cfb55d04bb48e5986b66f->leave($__internal_4f0b8c4feead4acdc169e6059ca4b67cae8bcb634f1cfb55d04bb48e5986b66f_prof);

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
        return array (  189 => 77,  178 => 70,  171 => 66,  165 => 63,  156 => 57,  149 => 53,  143 => 50,  134 => 44,  127 => 40,  122 => 37,  112 => 31,  105 => 27,  100 => 24,  94 => 21,  87 => 16,  78 => 13,  75 => 12,  71 => 11,  68 => 10,  59 => 7,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
\t<div id=\"orderForm\" class=\"well col-md-6 \">
\t\t<div class=\" orderForm\">
\t\t\t {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
  
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
\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t{{ form_label(form.email, \"Entrez votre Email \", {'label_attr': {'class': 'col-sm-4', }}) }}

\t\t\t\t\t{# Affichage des erreurs pour ce champ précis. #}
\t\t\t\t\t{{ form_errors(form.email) }}

\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t  {# Génération de l'input. #}
\t\t\t\t\t  {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t</div>
\t\t\t\t\t</div>
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
\t\t\t  
\t\t\t\t  <span class=\"form-group\">
\t\t\t\t\t{# Génération du label. #}
\t\t\t\t\t{{ form_label(form.ticketsNbr, \"Nombre de billet\", {'label_attr': {'class': 'col-sm-4'}}) }}

\t\t\t\t\t{# Affichage des erreurs pour ce champ précis. #}
\t\t\t\t\t{{ form_errors(form.ticketsNbr) }}

\t\t\t\t\t<span class=\"col-sm-3\">
\t\t\t\t\t  {# Génération de l'input. #}
\t\t\t\t\t  {{ form_widget(form.ticketsNbr, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t</span>
\t\t\t\t\t
\t\t\t\t\t<input type=\"submit\" class=\"btn btn-success\" id=\"stp1bouton\" value=\"Etape suivante >\" />
\t\t\t\t\t<a href=\"../\"><input type=\"button\" class=\"btn btn-danger\" value=\"Annuler\" /></a>
\t\t\t\t  </span>

\t\t\t{{ form_end(form) }}
\t
\t\t</div>
\t</div>
 
   <div id=\"infosHoraires\" class=\"col-md-4\">
  \t\t<div class=\"row col-md-8\">
\t\t
\t\t\t<div class=\"panel panel-default\">
  \t\t\t\t<div class=\"panel-heading\">
  \t  \t\t\t\t<h3 class=\"panel-title\">Horaires :</h3>
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
  </div>
{% endblock %}", "AppLouvreBundle:App:order.html.twig", "C:\\wamp64\\www\\Billetterie\\src\\App\\LouvreBundle/Resources/views/App/order.html.twig");
    }
}
