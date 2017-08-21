<?php

/* AppLouvreBundle:App:ticket.html.twig */
class __TwigTemplate_4e5a19784f2917355d2f21ab23e93e6f9ac98fd2cb0eb1b0530ef4252b6b0e51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppLouvreBundle::layout.html.twig", "AppLouvreBundle:App:ticket.html.twig", 1);
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
        $__internal_21e7caebea68e4af53a8f75824bd6a59dcb64b8af7e89e5ccfdce76e3e16d458 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21e7caebea68e4af53a8f75824bd6a59dcb64b8af7e89e5ccfdce76e3e16d458->enter($__internal_21e7caebea68e4af53a8f75824bd6a59dcb64b8af7e89e5ccfdce76e3e16d458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:ticket.html.twig"));

        $__internal_660189b8d8b784ab0c61f79f0c4e8767b1b09e998cb522d2cd91e0a15501caec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660189b8d8b784ab0c61f79f0c4e8767b1b09e998cb522d2cd91e0a15501caec->enter($__internal_660189b8d8b784ab0c61f79f0c4e8767b1b09e998cb522d2cd91e0a15501caec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:ticket.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21e7caebea68e4af53a8f75824bd6a59dcb64b8af7e89e5ccfdce76e3e16d458->leave($__internal_21e7caebea68e4af53a8f75824bd6a59dcb64b8af7e89e5ccfdce76e3e16d458_prof);

        
        $__internal_660189b8d8b784ab0c61f79f0c4e8767b1b09e998cb522d2cd91e0a15501caec->leave($__internal_660189b8d8b784ab0c61f79f0c4e8767b1b09e998cb522d2cd91e0a15501caec_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1cb249980881e0df447d0fd1e8e4fa2a6db3c4007d7bf37dfc54ee6b16b38311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cb249980881e0df447d0fd1e8e4fa2a6db3c4007d7bf37dfc54ee6b16b38311->enter($__internal_1cb249980881e0df447d0fd1e8e4fa2a6db3c4007d7bf37dfc54ee6b16b38311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_aa143424c42ad2afb6fbaec6b8e590cacadcbfc4b515ba5f0c1aee7f45d49633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa143424c42ad2afb6fbaec6b8e590cacadcbfc4b515ba5f0c1aee7f45d49633->enter($__internal_aa143424c42ad2afb6fbaec6b8e590cacadcbfc4b515ba5f0c1aee7f45d49633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo " 
\t<h1><strong>Etape 2:</strong> Vos billets </h1>

\t";
        // line 8
        echo "
\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "errors"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "\t  <div class=\"alert alert-danger\">
\t\t  ";
            // line 11
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t  </div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t<hr>
  \t
  \t";
        // line 17
        echo "  \t
\t<div class=\"well col-md-6\" id=\"ticketsForm\">
\t\t";
        // line 19
        $context["i"] = 0;
        // line 20
        echo "\t\t";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t\t
\t\t\t";
        // line 23
        echo "\t\t\t
\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tickets", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 25
            echo "\t\t\t";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 26
            echo "\t\t\t<div class=\"well\">
\t\t\t\t<label>Billet n°";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo " </label>

\t\t\t\t";
            // line 30
            echo "\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
            // line 33
            echo "\t\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "name", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Nom"));
            echo "

\t\t\t\t\t";
            // line 36
            echo "\t\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "name", array()), 'errors');
            echo "

\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t  ";
            // line 40
            echo "\t\t\t\t\t  ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "name", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
            // line 45
            echo "\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
            // line 48
            echo "\t\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "firstName", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Prénom"));
            echo "

\t\t\t\t\t";
            // line 51
            echo "\t\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "firstName", array()), 'errors');
            echo "

\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t  ";
            // line 55
            echo "\t\t\t\t\t  ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "firstName", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
            // line 60
            echo "\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
            // line 63
            echo "\t\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "pays", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Nationalité"));
            echo "

\t\t\t\t\t";
            // line 66
            echo "\t\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "pays", array()), 'errors');
            echo "

\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t  ";
            // line 70
            echo "\t\t\t\t\t  ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "pays", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
            // line 75
            echo "\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
            // line 78
            echo "\t\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "birthDate", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Date de naissance"));
            echo "

\t\t\t\t\t";
            // line 81
            echo "\t\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "birthDate", array()), 'errors');
            echo "

\t\t\t\t\t<div class=\"col-md-6  \">
\t\t\t\t\t  ";
            // line 85
            echo "\t\t\t\t\t  ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "birthDate", array()), 'widget', array("attr" => array("class" => "")));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
            // line 90
            echo "\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t";
            // line 93
            echo "\t\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "lowRate", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Tarif réduit "));
            echo "

\t\t\t\t\t";
            // line 96
            echo "\t\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "lowRate", array()), 'errors');
            echo "

\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t  ";
            // line 100
            echo "\t\t\t\t\t  ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "lowRate", array()), 'widget', array("attr" => array("class" => "checkbox")));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "\t\t\t
\t\t\t";
        // line 107
        echo "\t\t\t
\t\t\t<div>
\t\t\t\t<div style=\"text-align:right\">
\t\t\t\t\t<a href=\"../\"><input type=\"button\" class=\"btn btn-danger\" value=\"Annuler\" /></a>
\t\t\t\t\t<a href=\"javascript:history.go(-1)\"><input type=\"button\" class=\"btn btn-secondary\" value=\"< Etape 1\" /></a>
\t\t\t\t\t<input type=\"submit\" class=\"btn btn-info\" value=\"Etape 3 >\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        // line 115
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t</div>
\t
\t";
        // line 119
        echo "\t
\t<div class=\"row col-md-4\" id=\"infosTarifs\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t  <h3 class=\"panel-title\">Tarifs :</h3>
\t\t\t</div>
\t\t\t<ul class=\"list-group\">
\t\t\t\t<li class=\"list-group-item\">Enfant - 4 ans   : Gratuit</li>
\t\t\t\t<li class=\"list-group-item\">Enfant - 12 ans    : 8 euros</li>
\t\t\t\t<li class=\"list-group-item\">Sénior + 60 ans : 12 euros</li>
\t\t\t\t<li class=\"list-group-item\">Tarif réduit    : 10 euros</li>
\t\t\t\t<li class=\"list-group-item\">Tarif normal : 16 euros</li>
\t\t\t</ul>
\t\t</div>
\t</div>

";
        
        $__internal_aa143424c42ad2afb6fbaec6b8e590cacadcbfc4b515ba5f0c1aee7f45d49633->leave($__internal_aa143424c42ad2afb6fbaec6b8e590cacadcbfc4b515ba5f0c1aee7f45d49633_prof);

        
        $__internal_1cb249980881e0df447d0fd1e8e4fa2a6db3c4007d7bf37dfc54ee6b16b38311->leave($__internal_1cb249980881e0df447d0fd1e8e4fa2a6db3c4007d7bf37dfc54ee6b16b38311_prof);

    }

    public function getTemplateName()
    {
        return "AppLouvreBundle:App:ticket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 119,  249 => 115,  239 => 107,  236 => 105,  224 => 100,  217 => 96,  211 => 93,  207 => 90,  199 => 85,  192 => 81,  186 => 78,  182 => 75,  174 => 70,  167 => 66,  161 => 63,  157 => 60,  149 => 55,  142 => 51,  136 => 48,  132 => 45,  124 => 40,  117 => 36,  111 => 33,  107 => 30,  102 => 27,  99 => 26,  96 => 25,  92 => 24,  89 => 23,  83 => 20,  81 => 19,  77 => 17,  73 => 14,  64 => 11,  61 => 10,  57 => 9,  54 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
 
\t<h1><strong>Etape 2:</strong> Vos billets </h1>

\t{# Notifications #}

\t{% for flashMessage in app.session.flashbag.get('errors') %}
\t  <div class=\"alert alert-danger\">
\t\t  {{ flashMessage }}
\t  </div>
\t{% endfor %}
\t<hr>
  \t
  \t{#Formulaires#}
  \t
\t<div class=\"well col-md-6\" id=\"ticketsForm\">
\t\t{% set i= 0 %}
\t\t{{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
\t\t\t
\t\t\t{#Génération d'un formulaire par billet#}
\t\t\t
\t\t\t{% for ticket in form.tickets %}
\t\t\t{% set i = i + 1 %}
\t\t\t<div class=\"well\">
\t\t\t\t<label>Billet n°{{ i }} </label>

\t\t\t\t{#Nom#}
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{# Génération du label. #}
\t\t\t\t\t{{ form_label(ticket.name, \"Nom\", {'label_attr': {'class': 'col-md-4 control-label'}}) }}

\t\t\t\t\t{# Affichage des erreurs pour ce champ précis. #}
\t\t\t\t\t{{ form_errors(ticket.name) }}

\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t  {# Génération de l'input. #}
\t\t\t\t\t  {{ form_widget(ticket.name, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t{# Prenom #}
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{# Génération du label. #}
\t\t\t\t\t{{ form_label(ticket.firstName, \"Prénom\", {'label_attr': {'class': 'col-md-4 control-label'}}) }}

\t\t\t\t\t{# Affichage des erreurs pour ce champ précis. #}
\t\t\t\t\t{{ form_errors(ticket.firstName) }}

\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t  {# Génération de l'input. #}
\t\t\t\t\t  {{ form_widget(ticket.firstName, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t{# Pays #}
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{# Génération du label. #}
\t\t\t\t\t{{ form_label(ticket.pays, \"Nationalité\", {'label_attr': {'class': 'col-md-4 control-label'}}) }}

\t\t\t\t\t{# Affichage des erreurs pour ce champ précis. #}
\t\t\t\t\t{{ form_errors(ticket.pays) }}

\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t  {# Génération de l'input. #}
\t\t\t\t\t  {{ form_widget(ticket.pays, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t{# Date de naissance #}
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{# Génération du label. #}
\t\t\t\t\t{{ form_label(ticket.birthDate, \"Date de naissance\", {'label_attr': {'class': 'col-md-4 control-label'}}) }}

\t\t\t\t\t{# Affichage des erreurs pour ce champ précis. #}
\t\t\t\t\t{{ form_errors(ticket.birthDate) }}

\t\t\t\t\t<div class=\"col-md-6  \">
\t\t\t\t\t  {# Génération de l'input. #}
\t\t\t\t\t  {{ form_widget(ticket.birthDate, {'attr': {'class': ''}}) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t{# Tarif réduit #}
\t\t\t\t
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t{# Génération du label. #}
\t\t\t\t\t{{ form_label(ticket.lowRate, \"Tarif réduit \", {'label_attr': {'class': 'col-md-4 control-label'}}) }}

\t\t\t\t\t{# Affichage des erreurs pour ce champ précis. #}
\t\t\t\t\t{{ form_errors(ticket.lowRate) }}

\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t  {# Génération de l'input. #}
\t\t\t\t\t  {{ form_widget(ticket.lowRate, {'attr': {'class': 'checkbox'}}) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% endfor %}
\t\t\t
\t\t\t{# Boutons de navigations #}
\t\t\t
\t\t\t<div>
\t\t\t\t<div style=\"text-align:right\">
\t\t\t\t\t<a href=\"../\"><input type=\"button\" class=\"btn btn-danger\" value=\"Annuler\" /></a>
\t\t\t\t\t<a href=\"javascript:history.go(-1)\"><input type=\"button\" class=\"btn btn-secondary\" value=\"< Etape 1\" /></a>
\t\t\t\t\t<input type=\"submit\" class=\"btn btn-info\" value=\"Etape 3 >\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t{{ form_end(form) }}
\t</div>
\t
\t{# Tarifs #}
\t
\t<div class=\"row col-md-4\" id=\"infosTarifs\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t  <h3 class=\"panel-title\">Tarifs :</h3>
\t\t\t</div>
\t\t\t<ul class=\"list-group\">
\t\t\t\t<li class=\"list-group-item\">Enfant - 4 ans   : Gratuit</li>
\t\t\t\t<li class=\"list-group-item\">Enfant - 12 ans    : 8 euros</li>
\t\t\t\t<li class=\"list-group-item\">Sénior + 60 ans : 12 euros</li>
\t\t\t\t<li class=\"list-group-item\">Tarif réduit    : 10 euros</li>
\t\t\t\t<li class=\"list-group-item\">Tarif normal : 16 euros</li>
\t\t\t</ul>
\t\t</div>
\t</div>

{% endblock %}", "AppLouvreBundle:App:ticket.html.twig", "C:\\wamp64\\www\\Billetterie\\src\\App\\LouvreBundle/Resources/views/App/ticket.html.twig");
    }
}
