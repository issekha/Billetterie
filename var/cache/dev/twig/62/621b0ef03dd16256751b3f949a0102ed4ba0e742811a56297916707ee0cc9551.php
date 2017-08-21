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
        $__internal_3954865390dde4a999fa76d1dfd9c945b448be418e0e4a7718aee6f807807241 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3954865390dde4a999fa76d1dfd9c945b448be418e0e4a7718aee6f807807241->enter($__internal_3954865390dde4a999fa76d1dfd9c945b448be418e0e4a7718aee6f807807241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:ticket.html.twig"));

        $__internal_d4e6b55c5d9d36a0745b44e0324c333fc528ed6e45a9facca923a0e02e588897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4e6b55c5d9d36a0745b44e0324c333fc528ed6e45a9facca923a0e02e588897->enter($__internal_d4e6b55c5d9d36a0745b44e0324c333fc528ed6e45a9facca923a0e02e588897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:ticket.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3954865390dde4a999fa76d1dfd9c945b448be418e0e4a7718aee6f807807241->leave($__internal_3954865390dde4a999fa76d1dfd9c945b448be418e0e4a7718aee6f807807241_prof);

        
        $__internal_d4e6b55c5d9d36a0745b44e0324c333fc528ed6e45a9facca923a0e02e588897->leave($__internal_d4e6b55c5d9d36a0745b44e0324c333fc528ed6e45a9facca923a0e02e588897_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_404bc217c9013c5a881c69742dd675a917ec9002a22958b1f5707c0d1d0f8944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_404bc217c9013c5a881c69742dd675a917ec9002a22958b1f5707c0d1d0f8944->enter($__internal_404bc217c9013c5a881c69742dd675a917ec9002a22958b1f5707c0d1d0f8944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_550473002a9c8bed4514f02369672ff628705b067c67e8edac79ba9908d4c2ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_550473002a9c8bed4514f02369672ff628705b067c67e8edac79ba9908d4c2ed->enter($__internal_550473002a9c8bed4514f02369672ff628705b067c67e8edac79ba9908d4c2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
  
  <h1><strong>Etape 2:</strong> Vos billets </h1>
  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "errors"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 8
            echo "      <div class=\"alert alert-danger\">
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
        echo "   <div>
\t\t<div style=\"text-align:right\">
\t\t\t<a href=\"../\"><input type=\"button\" class=\"btn btn-danger\" value=\"Annuler\" /></a>
\t\t\t<a href=\"javascript:history.go(-1)\"><input type=\"button\" class=\"btn btn-secondary\" value=\"< Etape 1\" /></a>
\t\t\t<input type=\"submit\" class=\"btn btn-info\" value=\"Etape 3 >\" />
\t\t</div>
\t</div>
  
  ";
        // line 98
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
        
        $__internal_550473002a9c8bed4514f02369672ff628705b067c67e8edac79ba9908d4c2ed->leave($__internal_550473002a9c8bed4514f02369672ff628705b067c67e8edac79ba9908d4c2ed_prof);

        
        $__internal_404bc217c9013c5a881c69742dd675a917ec9002a22958b1f5707c0d1d0f8944->leave($__internal_404bc217c9013c5a881c69742dd675a917ec9002a22958b1f5707c0d1d0f8944_prof);

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
        return array (  225 => 98,  215 => 90,  203 => 85,  196 => 81,  190 => 78,  179 => 70,  172 => 66,  166 => 63,  157 => 57,  150 => 53,  144 => 50,  135 => 44,  128 => 40,  122 => 37,  113 => 31,  106 => 27,  100 => 24,  97 => 22,  93 => 20,  90 => 19,  88 => 18,  85 => 17,  81 => 16,  76 => 15,  74 => 14,  70 => 12,  61 => 9,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
      <div class=\"alert alert-danger\">
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
   <div>
\t\t<div style=\"text-align:right\">
\t\t\t<a href=\"../\"><input type=\"button\" class=\"btn btn-danger\" value=\"Annuler\" /></a>
\t\t\t<a href=\"javascript:history.go(-1)\"><input type=\"button\" class=\"btn btn-secondary\" value=\"< Etape 1\" /></a>
\t\t\t<input type=\"submit\" class=\"btn btn-info\" value=\"Etape 3 >\" />
\t\t</div>
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
