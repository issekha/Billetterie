<?php

/* AppLouvreBundle:App:resume.html.twig */
class __TwigTemplate_336afdeb8d8fbc57a9f9e033905d93c47c45000a823c846d9f367b3333dc49cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppLouvreBundle::layout.html.twig", "AppLouvreBundle:App:resume.html.twig", 1);
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
        $__internal_0e0445d8a4ed5ee26b38ce1652cf96c278dc8dbf50beaa1d1b137a333557c8bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e0445d8a4ed5ee26b38ce1652cf96c278dc8dbf50beaa1d1b137a333557c8bd->enter($__internal_0e0445d8a4ed5ee26b38ce1652cf96c278dc8dbf50beaa1d1b137a333557c8bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:resume.html.twig"));

        $__internal_d0c616f889d11173e42413e323657e989b4a524bdb898c76b72513ea98cbb7e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0c616f889d11173e42413e323657e989b4a524bdb898c76b72513ea98cbb7e8->enter($__internal_d0c616f889d11173e42413e323657e989b4a524bdb898c76b72513ea98cbb7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:resume.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e0445d8a4ed5ee26b38ce1652cf96c278dc8dbf50beaa1d1b137a333557c8bd->leave($__internal_0e0445d8a4ed5ee26b38ce1652cf96c278dc8dbf50beaa1d1b137a333557c8bd_prof);

        
        $__internal_d0c616f889d11173e42413e323657e989b4a524bdb898c76b72513ea98cbb7e8->leave($__internal_d0c616f889d11173e42413e323657e989b4a524bdb898c76b72513ea98cbb7e8_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_2f2d704f6616bcec0039fbfe7eaf0b773533285c45c6e873508e586fde8fa9f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f2d704f6616bcec0039fbfe7eaf0b773533285c45c6e873508e586fde8fa9f6->enter($__internal_2f2d704f6616bcec0039fbfe7eaf0b773533285c45c6e873508e586fde8fa9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e4307d57c598fd28e90d1844275e6a692d76937ced114e6313111f589629375b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4307d57c598fd28e90d1844275e6a692d76937ced114e6313111f589629375b->enter($__internal_e4307d57c598fd28e90d1844275e6a692d76937ced114e6313111f589629375b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
  <h1><strong>Etape 3:</strong> Récapitulatif de votre commande </h1> 

  <hr>
<div class=\"well col-md-8\" id=\"resume\">

<strong>Adresse e-mail</strong> : ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo " <br />

<strong>Date de la réservation</strong> : ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date_reservation"]) ? $context["date_reservation"] : $this->getContext($context, "date_reservation")), "d/m/Y"), "html", null, true);
        echo " <br />

<strong>Type de billet</strong> : 

";
        // line 16
        if (((isset($context["type_billet"]) ? $context["type_billet"] : $this->getContext($context, "type_billet")) == 1)) {
            echo " 
Journée 

";
        } elseif ((        // line 19
(isset($context["type_billet"]) ? $context["type_billet"] : $this->getContext($context, "type_billet")) == 2)) {
            // line 20
            echo "Demi-Journée
";
        }
        // line 22
        echo "<br />

<strong>Nombre de billet(s)</strong> : ";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["nombre_billet"]) ? $context["nombre_billet"] : $this->getContext($context, "nombre_billet")), "html", null, true);
        echo " <br />

<strong>Référence de la Commande</strong> : ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["orderCode"]) ? $context["orderCode"] : $this->getContext($context, "orderCode")), "html", null, true);
        echo " <br />
<br/>
<div class=\"well col-md-6\" id=\"total1\">
<strong>Le montant total de votre commande est de</strong> : ";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "€

<div>
\t<div style=\"text-align:right\">
\t\t<a href=\"../\"><input type=\"button\" class=\"btn btn-danger\" value=\"Annuler\" /></a>
\t\t<a href=\"javascript:history.go(-1)\"><input type=\"button\" class=\"btn btn-primary\" value=\"< Etape précédente\" /></a>
\t\t
\t\t<a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_louvre_paiement");
        echo "\"><input type=\"submit\" id=\"up\" class=\"btn btn-success\" name=\"up\" value=\"Etape suivante >\" /></a>
\t</div>
</div>
   
</div>

</div>
 <br />
 <div class=\"well col-md-8\" id=\"blockResume\">
";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")));
        foreach ($context['_seq'] as $context["_key"] => $context["tickets"]) {
            // line 46
            echo "
\t
\t <div class=\"well col-md-10\" id=\"ticketsResume\">
 
<strong>Nom</strong> : ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "name", array()), "html", null, true);
            echo " <br /> 
<strong>Prénom</strong> : ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "firstName", array()), "html", null, true);
            echo " <br />
<strong>Date de naissance</strong> :<br/> ";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tickets"], "birthDate", array()), "d/m/Y"), "html", null, true);
            echo " <br />
<strong>Pays</strong> : ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "pays", array()), "html", null, true);
            echo " <br />
<strong>Tarif réduit</strong> : 
";
            // line 55
            if (($this->getAttribute($context["tickets"], "lowRate", array()) == true)) {
                echo " 
Oui
";
            } elseif (($this->getAttribute(            // line 57
$context["tickets"], "lowRate", array()) == false)) {
                // line 58
                echo "Non
";
            }
            // line 60
            echo "<br />
<strong>Type de tarif</strong> : 
";
            // line 62
            if (($this->getAttribute($context["tickets"], "ticketsRate", array()) == 1)) {
                echo " 
Enfant
";
            } elseif (($this->getAttribute(            // line 64
$context["tickets"], "ticketsRate", array()) == 2)) {
                // line 65
                echo "Normal
";
            } elseif (($this->getAttribute(            // line 66
$context["tickets"], "ticketsRate", array()) == 3)) {
                // line 67
                echo "Senior
";
            } elseif (($this->getAttribute(            // line 68
$context["tickets"], "ticketsRate", array()) == 4)) {
                // line 69
                echo "Tarif réduit
";
            }
            // line 71
            echo "<br />
<strong>Prix du billet</strong> : ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "prix", array()), "html", null, true);
            echo "€
<hr>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tickets'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "
<div class=\"well col-md-4\">
<strong>TOTAL</strong> : ";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "€
<div class=\"form-group text-right\">
    <a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_louvre_paiement");
        echo "\"><input name=\"\" type=\"submit\" id=\"bouton\" class=\"btn btn-success\" value=\"Valider\" /></a>
</div>
</div>
\t
</div>

";
        
        $__internal_e4307d57c598fd28e90d1844275e6a692d76937ced114e6313111f589629375b->leave($__internal_e4307d57c598fd28e90d1844275e6a692d76937ced114e6313111f589629375b_prof);

        
        $__internal_2f2d704f6616bcec0039fbfe7eaf0b773533285c45c6e873508e586fde8fa9f6->leave($__internal_2f2d704f6616bcec0039fbfe7eaf0b773533285c45c6e873508e586fde8fa9f6_prof);

    }

    public function getTemplateName()
    {
        return "AppLouvreBundle:App:resume.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 80,  198 => 78,  194 => 76,  184 => 72,  181 => 71,  177 => 69,  175 => 68,  172 => 67,  170 => 66,  167 => 65,  165 => 64,  160 => 62,  156 => 60,  152 => 58,  150 => 57,  145 => 55,  140 => 53,  136 => 52,  132 => 51,  128 => 50,  122 => 46,  118 => 45,  106 => 36,  96 => 29,  90 => 26,  85 => 24,  81 => 22,  77 => 20,  75 => 19,  69 => 16,  62 => 12,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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

  <h1><strong>Etape 3:</strong> Récapitulatif de votre commande </h1> 

  <hr>
<div class=\"well col-md-8\" id=\"resume\">

<strong>Adresse e-mail</strong> : {{ email }} <br />

<strong>Date de la réservation</strong> : {{ date_reservation|date(\"d/m/Y\") }} <br />

<strong>Type de billet</strong> : 

{% if type_billet == 1%} 
Journée 

{% elseif type_billet == 2 %}
Demi-Journée
{% endif %}
<br />

<strong>Nombre de billet(s)</strong> : {{ nombre_billet }} <br />

<strong>Référence de la Commande</strong> : {{ orderCode }} <br />
<br/>
<div class=\"well col-md-6\" id=\"total1\">
<strong>Le montant total de votre commande est de</strong> : {{total}}€

<div>
\t<div style=\"text-align:right\">
\t\t<a href=\"../\"><input type=\"button\" class=\"btn btn-danger\" value=\"Annuler\" /></a>
\t\t<a href=\"javascript:history.go(-1)\"><input type=\"button\" class=\"btn btn-primary\" value=\"< Etape précédente\" /></a>
\t\t
\t\t<a href=\"{{ path('app_louvre_paiement') }}\"><input type=\"submit\" id=\"up\" class=\"btn btn-success\" name=\"up\" value=\"Etape suivante >\" /></a>
\t</div>
</div>
   
</div>

</div>
 <br />
 <div class=\"well col-md-8\" id=\"blockResume\">
{% for tickets in nom %}

\t
\t <div class=\"well col-md-10\" id=\"ticketsResume\">
 
<strong>Nom</strong> : {{ tickets.name }} <br /> 
<strong>Prénom</strong> : {{ tickets.firstName }} <br />
<strong>Date de naissance</strong> :<br/> {{tickets.birthDate|date(\"d/m/Y\")}} <br />
<strong>Pays</strong> : {{tickets.pays}} <br />
<strong>Tarif réduit</strong> : 
{% if tickets.lowRate == true %} 
Oui
{% elseif tickets.lowRate == false %}
Non
{% endif %}
<br />
<strong>Type de tarif</strong> : 
{% if tickets.ticketsRate == 1 %} 
Enfant
{% elseif tickets.ticketsRate == 2 %}
Normal
{% elseif tickets.ticketsRate == 3 %}
Senior
{% elseif tickets.ticketsRate == 4 %}
Tarif réduit
{% endif %}
<br />
<strong>Prix du billet</strong> : {{tickets.prix}}€
<hr>
</div>
{% endfor %}

<div class=\"well col-md-4\">
<strong>TOTAL</strong> : {{total}}€
<div class=\"form-group text-right\">
    <a href=\"{{ path('app_louvre_paiement') }}\"><input name=\"\" type=\"submit\" id=\"bouton\" class=\"btn btn-success\" value=\"Valider\" /></a>
</div>
</div>
\t
</div>

{% endblock %}", "AppLouvreBundle:App:resume.html.twig", "C:\\wamp64\\www\\Billetterie\\src\\App\\LouvreBundle/Resources/views/App/resume.html.twig");
    }
}
