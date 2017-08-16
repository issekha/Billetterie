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
        $__internal_c5df40a6884251890f8718f9cc7e165ab759ff5773dfc09bcdb60765f89a86fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5df40a6884251890f8718f9cc7e165ab759ff5773dfc09bcdb60765f89a86fd->enter($__internal_c5df40a6884251890f8718f9cc7e165ab759ff5773dfc09bcdb60765f89a86fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:order.html.twig"));

        $__internal_9157bd01acd623c2a8db24b329f6d694ce42b618e408ef4450c5a18235fc419d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9157bd01acd623c2a8db24b329f6d694ce42b618e408ef4450c5a18235fc419d->enter($__internal_9157bd01acd623c2a8db24b329f6d694ce42b618e408ef4450c5a18235fc419d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:order.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5df40a6884251890f8718f9cc7e165ab759ff5773dfc09bcdb60765f89a86fd->leave($__internal_c5df40a6884251890f8718f9cc7e165ab759ff5773dfc09bcdb60765f89a86fd_prof);

        
        $__internal_9157bd01acd623c2a8db24b329f6d694ce42b618e408ef4450c5a18235fc419d->leave($__internal_9157bd01acd623c2a8db24b329f6d694ce42b618e408ef4450c5a18235fc419d_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_0b217b0c64f901bfe29b056ab5cd5d1c561e4731a8779fa43768396a6944e9f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b217b0c64f901bfe29b056ab5cd5d1c561e4731a8779fa43768396a6944e9f0->enter($__internal_0b217b0c64f901bfe29b056ab5cd5d1c561e4731a8779fa43768396a6944e9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_fd3b514db1ea40a6b6d8c77ed0af6e5ba5f35e7b5d714daad8269deda5a39dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd3b514db1ea40a6b6d8c77ed0af6e5ba5f35e7b5d714daad8269deda5a39dd4->enter($__internal_fd3b514db1ea40a6b6d8c77ed0af6e5ba5f35e7b5d714daad8269deda5a39dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
 
      ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 7
            echo "      
      <div class=\"alert alert-success\" style=\"width:52%\">
          ";
            // line 9
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "  <h1><strong>Etape 1:</strong> Votre commande </h1>
  ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "errors"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 14
            echo "      
      <div class=\"alert alert-danger\" style=\"width:52%\">
          ";
            // line 16
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
      </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "  <hr>
\t<div id=\"orderForm\" class=\"well col-md-6 \">
\t\t<div class=\" orderForm\">
\t\t\t
\t\t\t ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
  
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "visitDate", array()), 'label', array("label_attr" => array("class" => "col-sm-4"), "label" => "Date de visite"));
        echo "

\t\t\t\t\t";
        // line 29
        echo "\t\t\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "visitDate", array()), 'errors');
        echo "

\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t  ";
        // line 33
        echo "\t\t\t\t\t  ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "visitDate", array()), 'widget', array("attr" => array("class" => "datepicker")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label_attr" => array("class" => "col-sm-4"), "label" => "Entrez votre Email "));
        echo "

\t\t\t\t\t";
        // line 42
        echo "\t\t\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "

\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t  ";
        // line 46
        echo "\t\t\t\t\t  ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
        // line 52
        echo "\t\t\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ticketsType", array()), 'label', array("label_attr" => array("class" => "col-sm-4"), "label" => "Choix de billet"));
        echo "

\t\t\t\t\t";
        // line 55
        echo "\t\t\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ticketsType", array()), 'errors');
        echo "

\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t  ";
        // line 59
        echo "\t\t\t\t\t  ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ticketsType", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t  
\t\t\t\t  <span class=\"form-group\">
\t\t\t\t\t";
        // line 65
        echo "\t\t\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ticketsNbr", array()), 'label', array("label_attr" => array("class" => "col-sm-4"), "label" => "Nombre de billet"));
        echo "

\t\t\t\t\t";
        // line 68
        echo "\t\t\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ticketsNbr", array()), 'errors');
        echo "

\t\t\t\t\t<span class=\"col-sm-4\">
\t\t\t\t\t  ";
        // line 72
        echo "\t\t\t\t\t  ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ticketsNbr", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t</span>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<input formnovalidate type=\"submit\" id=\"stp1bouton\" class=\"btn btn-primary\" value=\"Valider\" />
\t\t\t\t
\t\t\t  
\t\t\t\t  </span>
\t\t\t\t  
\t\t\t\t  
\t\t\t\t  \t
\t\t\t\t  

\t\t\t\t
\t\t\t\t  \t
\t\t\t\t  

";
        // line 89
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t
\t\t</div>
\t</div>
 
   <div id=\"infosHoraires\" class=\"col-md-4\">
  \t\t<div class=\"row col-md-8\">
\t\t
\t\t<div class=\"panel panel-default\">
  \t<div class=\"panel-heading\">
  \t  <h3 class=\"panel-title\">Horaires :</h3>
  \t</div>
  \t<ul class=\"list-group\">
      <li class=\"list-group-item\">Lundi    : 09h00-18h00</li>
      <li class=\"list-group-item\"><strong>Mardi    : Fermé</strong></li>
      <li class=\"list-group-item\">Mercredi : 09h00-21h45</li>
      <li class=\"list-group-item\">Jeudi    : 09h00-18h00</li>
      <li class=\"list-group-item\">Vendredi : 09h00-21h45</li>
      <li class=\"list-group-item\">Samedi   : 09h00-18h00</li>
      <li class=\"list-group-item\"><strong>Dimanche    : Fermé</strong></li>
    </ul>
  </div>
</div>
  </div>
\t

 

  
  

";
        
        $__internal_fd3b514db1ea40a6b6d8c77ed0af6e5ba5f35e7b5d714daad8269deda5a39dd4->leave($__internal_fd3b514db1ea40a6b6d8c77ed0af6e5ba5f35e7b5d714daad8269deda5a39dd4_prof);

        
        $__internal_0b217b0c64f901bfe29b056ab5cd5d1c561e4731a8779fa43768396a6944e9f0->leave($__internal_0b217b0c64f901bfe29b056ab5cd5d1c561e4731a8779fa43768396a6944e9f0_prof);

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
        return array (  201 => 89,  180 => 72,  173 => 68,  167 => 65,  158 => 59,  151 => 55,  145 => 52,  136 => 46,  129 => 42,  124 => 39,  114 => 33,  107 => 29,  102 => 26,  96 => 23,  90 => 19,  81 => 16,  77 => 14,  73 => 13,  70 => 12,  61 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

 
      {% for flashMessage in app.session.flashbag.get('success') %}
      
      <div class=\"alert alert-success\" style=\"width:52%\">
          {{ flashMessage }}
      </div>
    {% endfor %}
  <h1><strong>Etape 1:</strong> Votre commande </h1>
  {% for flashMessage in app.session.flashbag.get('errors') %}
      
      <div class=\"alert alert-danger\" style=\"width:52%\">
          {{ flashMessage }}
      </div>
  {% endfor %}
  <hr>
\t<div id=\"orderForm\" class=\"well col-md-6 \">
\t\t<div class=\" orderForm\">
\t\t\t
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

\t\t\t\t\t<span class=\"col-sm-4\">
\t\t\t\t\t  {# Génération de l'input. #}
\t\t\t\t\t  {{ form_widget(form.ticketsNbr, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t</span>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t<input formnovalidate type=\"submit\" id=\"stp1bouton\" class=\"btn btn-primary\" value=\"Valider\" />
\t\t\t\t
\t\t\t  
\t\t\t\t  </span>
\t\t\t\t  
\t\t\t\t  
\t\t\t\t  \t
\t\t\t\t  

\t\t\t\t
\t\t\t\t  \t
\t\t\t\t  

{{ form_end(form) }}
\t\t\t
\t\t</div>
\t</div>
 
   <div id=\"infosHoraires\" class=\"col-md-4\">
  \t\t<div class=\"row col-md-8\">
\t\t
\t\t<div class=\"panel panel-default\">
  \t<div class=\"panel-heading\">
  \t  <h3 class=\"panel-title\">Horaires :</h3>
  \t</div>
  \t<ul class=\"list-group\">
      <li class=\"list-group-item\">Lundi    : 09h00-18h00</li>
      <li class=\"list-group-item\"><strong>Mardi    : Fermé</strong></li>
      <li class=\"list-group-item\">Mercredi : 09h00-21h45</li>
      <li class=\"list-group-item\">Jeudi    : 09h00-18h00</li>
      <li class=\"list-group-item\">Vendredi : 09h00-21h45</li>
      <li class=\"list-group-item\">Samedi   : 09h00-18h00</li>
      <li class=\"list-group-item\"><strong>Dimanche    : Fermé</strong></li>
    </ul>
  </div>
</div>
  </div>
\t

 

  
  

{% endblock %}", "AppLouvreBundle:App:order.html.twig", "C:\\wamp64\\www\\Billetterie\\src\\App\\LouvreBundle/Resources/views/App/order.html.twig");
    }
}
