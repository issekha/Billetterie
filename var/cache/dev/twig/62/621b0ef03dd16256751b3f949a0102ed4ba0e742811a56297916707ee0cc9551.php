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
        $__internal_08fa4281291ce7273ff9421206f396f9e68c36f1d10b5e3dd54935b0811b30a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08fa4281291ce7273ff9421206f396f9e68c36f1d10b5e3dd54935b0811b30a7->enter($__internal_08fa4281291ce7273ff9421206f396f9e68c36f1d10b5e3dd54935b0811b30a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:ticket.html.twig"));

        $__internal_b1e8ecf6db94b0de56b2179991461e32a1512529de5db1f5d6ff28ff3c414f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1e8ecf6db94b0de56b2179991461e32a1512529de5db1f5d6ff28ff3c414f17->enter($__internal_b1e8ecf6db94b0de56b2179991461e32a1512529de5db1f5d6ff28ff3c414f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:ticket.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08fa4281291ce7273ff9421206f396f9e68c36f1d10b5e3dd54935b0811b30a7->leave($__internal_08fa4281291ce7273ff9421206f396f9e68c36f1d10b5e3dd54935b0811b30a7_prof);

        
        $__internal_b1e8ecf6db94b0de56b2179991461e32a1512529de5db1f5d6ff28ff3c414f17->leave($__internal_b1e8ecf6db94b0de56b2179991461e32a1512529de5db1f5d6ff28ff3c414f17_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b960294313a1a8dcd98584a91cf1ad5f253dc8327026730c46a8503c43c2c036 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b960294313a1a8dcd98584a91cf1ad5f253dc8327026730c46a8503c43c2c036->enter($__internal_b960294313a1a8dcd98584a91cf1ad5f253dc8327026730c46a8503c43c2c036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_367fba33dd87e461319ad12757bbf02b85e0bef75b392e62a3c3b84b6be43b31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_367fba33dd87e461319ad12757bbf02b85e0bef75b392e62a3c3b84b6be43b31->enter($__internal_367fba33dd87e461319ad12757bbf02b85e0bef75b392e62a3c3b84b6be43b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
  
  <h1><strong>Etape 2:</strong> Vos billets </h1>
  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "errors"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 8
            echo "      <div class=\"alert alert-danger\" style=\"width:52%\">
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
        echo "  <hr>
<div class=\"well col-md-6\" id=\"ticketsForm\">
 ";
        // line 14
        $context["i"] = 0;
        // line 15
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
  ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tickets", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 17
            echo "  
\t";
            // line 18
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 19
            echo " <div class=\"well\">
 \t<label>Billet n°";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
            echo " </label>
 \t ";
            // line 22
            echo "  <div class=\"form-group\">
    ";
            // line 24
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "name", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Nom"));
            echo "

    ";
            // line 27
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "name", array()), 'errors');
            echo "

    <div class=\"col-md-6\">
      ";
            // line 31
            echo "      ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "name", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
    </div>
  </div>

   <div class=\"form-group\">
    ";
            // line 37
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "firstName", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Prénom"));
            echo "

    ";
            // line 40
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "firstName", array()), 'errors');
            echo "

    <div class=\"col-md-6\">
      ";
            // line 44
            echo "      ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "firstName", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
    </div>
  </div>

<div class=\"form-group\">
    ";
            // line 50
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "pays", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Nationalité"));
            echo "

    ";
            // line 53
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "pays", array()), 'errors');
            echo "

    <div class=\"col-md-6\">
      ";
            // line 57
            echo "      ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "pays", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
            // line 63
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "birthDate", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Date de naissance"));
            echo "

    ";
            // line 66
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "birthDate", array()), 'errors');
            echo "

    <div class=\"col-md-6  \">
      ";
            // line 70
            echo "      ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "birthDate", array()), 'widget', array("attr" => array("class" => "")));
            echo "
    </div>
  </div>

 

  <div class=\"form-group\">
    ";
            // line 78
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "lowRate", array()), 'label', array("label_attr" => array("class" => "col-md-4 control-label"), "label" => "Tarif réduit "));
            echo "

    ";
            // line 81
            echo "    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "lowRate", array()), 'errors');
            echo "

    <div class=\"col-md-6\">
      ";
            // line 85
            echo "      ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($context["ticket"], "lowRate", array()), 'widget', array("attr" => array("class" => "checkbox")));
            echo "
    </div>
  </div>
   </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo " \t
 
 
  <div class=\"form-group text-right\">
    <input formnovalidate type=\"submit\" id=\"bouton\" class=\"btn btn-primary\" value=\"Valider\" />
\t</div>
  
  ";
        // line 97
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>

\t<div class=\"row col-md-4\" id=\"infosTarifs\">
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\">Tarifs :</h3>
    </div>
    <ul class=\"list-group\">
     
        <li class=\"list-group-item\">Enfant -4 ans   : Gratuit</li>
      <li class=\"list-group-item\">Enfant -12 ans    : 8 euros</li>
      <li class=\"list-group-item\">Sénior +60 ans : 12 euros</li>
      <li class=\"list-group-item\">Tarif réduit    : 10 euros</li>
      <li class=\"list-group-item\">Tarif normal : 16 euros</li>
\t</ul>
  </div>
\t\t
\t</div>

";
        
        $__internal_367fba33dd87e461319ad12757bbf02b85e0bef75b392e62a3c3b84b6be43b31->leave($__internal_367fba33dd87e461319ad12757bbf02b85e0bef75b392e62a3c3b84b6be43b31_prof);

        
        $__internal_b960294313a1a8dcd98584a91cf1ad5f253dc8327026730c46a8503c43c2c036->leave($__internal_b960294313a1a8dcd98584a91cf1ad5f253dc8327026730c46a8503c43c2c036_prof);

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
        return array (  224 => 97,  215 => 90,  203 => 85,  196 => 81,  190 => 78,  179 => 70,  172 => 66,  166 => 63,  157 => 57,  150 => 53,  144 => 50,  135 => 44,  128 => 40,  122 => 37,  113 => 31,  106 => 27,  100 => 24,  97 => 22,  93 => 20,  90 => 19,  88 => 18,  85 => 17,  81 => 16,  76 => 15,  74 => 14,  70 => 12,  61 => 9,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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

  
  <h1><strong>Etape 2:</strong> Vos billets </h1>
  {% for flashMessage in app.session.flashbag.get('errors') %}
      <div class=\"alert alert-danger\" style=\"width:52%\">
          {{ flashMessage }}
      </div>
  {% endfor %}
  <hr>
<div class=\"well col-md-6\" id=\"ticketsForm\">
 {% set i= 0 %}
  {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
  {% for ticket in form.tickets %}
  
\t{% set i = i + 1 %}
 <div class=\"well\">
 \t<label>Billet n°{{ i }} </label>
 \t {# Génération manuelle et éclatée : #}
  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(ticket.name, \"Nom\", {'label_attr': {'class': 'col-md-4 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(ticket.name) }}

    <div class=\"col-md-6\">
      {# Génération de l'input. #}
      {{ form_widget(ticket.name, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

   <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(ticket.firstName, \"Prénom\", {'label_attr': {'class': 'col-md-4 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(ticket.firstName) }}

    <div class=\"col-md-6\">
      {# Génération de l'input. #}
      {{ form_widget(ticket.firstName, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

<div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(ticket.pays, \"Nationalité\", {'label_attr': {'class': 'col-md-4 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(ticket.pays) }}

    <div class=\"col-md-6\">
      {# Génération de l'input. #}
      {{ form_widget(ticket.pays, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(ticket.birthDate, \"Date de naissance\", {'label_attr': {'class': 'col-md-4 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(ticket.birthDate) }}

    <div class=\"col-md-6  \">
      {# Génération de l'input. #}
      {{ form_widget(ticket.birthDate, {'attr': {'class': ''}}) }}
    </div>
  </div>

 

  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(ticket.lowRate, \"Tarif réduit \", {'label_attr': {'class': 'col-md-4 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(ticket.lowRate) }}

    <div class=\"col-md-6\">
      {# Génération de l'input. #}
      {{ form_widget(ticket.lowRate, {'attr': {'class': 'checkbox'}}) }}
    </div>
  </div>
   </div>
  {% endfor %}
 \t
 
 
  <div class=\"form-group text-right\">
    <input formnovalidate type=\"submit\" id=\"bouton\" class=\"btn btn-primary\" value=\"Valider\" />
\t</div>
  
  {{ form_end(form) }}
</div>

\t<div class=\"row col-md-4\" id=\"infosTarifs\">
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\">Tarifs :</h3>
    </div>
    <ul class=\"list-group\">
     
        <li class=\"list-group-item\">Enfant -4 ans   : Gratuit</li>
      <li class=\"list-group-item\">Enfant -12 ans    : 8 euros</li>
      <li class=\"list-group-item\">Sénior +60 ans : 12 euros</li>
      <li class=\"list-group-item\">Tarif réduit    : 10 euros</li>
      <li class=\"list-group-item\">Tarif normal : 16 euros</li>
\t</ul>
  </div>
\t\t
\t</div>

{% endblock %}", "AppLouvreBundle:App:ticket.html.twig", "C:\\wamp64\\www\\Billetterie\\src\\App\\LouvreBundle/Resources/views/App/ticket.html.twig");
    }
}
