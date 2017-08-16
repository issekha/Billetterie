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
        $__internal_1454857b0e681ba11d282cf37d1277c9237e8615e09cb6f01ee370d927f9b7bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1454857b0e681ba11d282cf37d1277c9237e8615e09cb6f01ee370d927f9b7bd->enter($__internal_1454857b0e681ba11d282cf37d1277c9237e8615e09cb6f01ee370d927f9b7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:resume.html.twig"));

        $__internal_c75df118ce657f02ed6f7b464a78df9e73b3da5182d472dcf849797ef0096f1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75df118ce657f02ed6f7b464a78df9e73b3da5182d472dcf849797ef0096f1c->enter($__internal_c75df118ce657f02ed6f7b464a78df9e73b3da5182d472dcf849797ef0096f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:resume.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1454857b0e681ba11d282cf37d1277c9237e8615e09cb6f01ee370d927f9b7bd->leave($__internal_1454857b0e681ba11d282cf37d1277c9237e8615e09cb6f01ee370d927f9b7bd_prof);

        
        $__internal_c75df118ce657f02ed6f7b464a78df9e73b3da5182d472dcf849797ef0096f1c->leave($__internal_c75df118ce657f02ed6f7b464a78df9e73b3da5182d472dcf849797ef0096f1c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_efeb18c7f0231a30e8821fe0e83f4b14629cf9f3bfb618639c1c970cb2ce222c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efeb18c7f0231a30e8821fe0e83f4b14629cf9f3bfb618639c1c970cb2ce222c->enter($__internal_efeb18c7f0231a30e8821fe0e83f4b14629cf9f3bfb618639c1c970cb2ce222c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2fe96bf95b9de01c9cfb61683959dc69446477fdfb907f41dd12245e86b109e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fe96bf95b9de01c9cfb61683959dc69446477fdfb907f41dd12245e86b109e6->enter($__internal_2fe96bf95b9de01c9cfb61683959dc69446477fdfb907f41dd12245e86b109e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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

    <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_louvre_paiement");
        echo "\"><input type=\"button\" id=\"bouton\" class=\"btn btn-primary\" value=\"Valider\" /></a>
</div>

</div>
 <br />
 <div class=\"well col-md-8\" id=\"blockResume\">
";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")));
        foreach ($context['_seq'] as $context["_key"] => $context["tickets"]) {
            // line 38
            echo "
\t
\t <div class=\"well col-md-10\" id=\"ticketsResume\">
 
<strong>Nom</strong> : ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "name", array()), "html", null, true);
            echo " <br /> 
<strong>Prénom</strong> : ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "firstName", array()), "html", null, true);
            echo " <br />
<strong>Date de naissance</strong> : ";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tickets"], "birthDate", array()), "d/m/Y"), "html", null, true);
            echo " <br />
<strong>Pays</strong> : ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "pays", array()), "html", null, true);
            echo " <br />
<strong>Tarif réduit</strong> : 
";
            // line 47
            if (($this->getAttribute($context["tickets"], "lowRate", array()) == true)) {
                echo " 
Oui
";
            } elseif (($this->getAttribute(            // line 49
$context["tickets"], "lowRate", array()) == false)) {
                // line 50
                echo "Non
";
            }
            // line 52
            echo "<br />
<strong>Type de tarif</strong> : 
";
            // line 54
            if (($this->getAttribute($context["tickets"], "ticketsRate", array()) == 1)) {
                echo " 
Enfant
";
            } elseif (($this->getAttribute(            // line 56
$context["tickets"], "ticketsRate", array()) == 2)) {
                // line 57
                echo "Normal
";
            } elseif (($this->getAttribute(            // line 58
$context["tickets"], "ticketsRate", array()) == 3)) {
                // line 59
                echo "Senior
";
            } elseif (($this->getAttribute(            // line 60
$context["tickets"], "ticketsRate", array()) == 4)) {
                // line 61
                echo "Tarif réduit
";
            }
            // line 63
            echo "<br />
<strong>Prix du billet</strong> : ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "prix", array()), "html", null, true);
            echo "€
<hr>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tickets'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "
<div class=\"well col-md-4\">
<strong>TOTAL</strong> : ";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "€
<div class=\"form-group text-right\">
    <a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_louvre_paiement");
        echo "\"><input type=\"button\" id=\"bouton\" class=\"btn btn-primary\" value=\"Valider\" /></a>
</div>
</div>
\t
</div>

";
        
        $__internal_2fe96bf95b9de01c9cfb61683959dc69446477fdfb907f41dd12245e86b109e6->leave($__internal_2fe96bf95b9de01c9cfb61683959dc69446477fdfb907f41dd12245e86b109e6_prof);

        
        $__internal_efeb18c7f0231a30e8821fe0e83f4b14629cf9f3bfb618639c1c970cb2ce222c->leave($__internal_efeb18c7f0231a30e8821fe0e83f4b14629cf9f3bfb618639c1c970cb2ce222c_prof);

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
        return array (  195 => 72,  190 => 70,  186 => 68,  176 => 64,  173 => 63,  169 => 61,  167 => 60,  164 => 59,  162 => 58,  159 => 57,  157 => 56,  152 => 54,  148 => 52,  144 => 50,  142 => 49,  137 => 47,  132 => 45,  128 => 44,  124 => 43,  120 => 42,  114 => 38,  110 => 37,  101 => 31,  96 => 29,  90 => 26,  85 => 24,  81 => 22,  77 => 20,  75 => 19,  69 => 16,  62 => 12,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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

    <a href=\"{{ path('app_louvre_paiement') }}\"><input type=\"button\" id=\"bouton\" class=\"btn btn-primary\" value=\"Valider\" /></a>
</div>

</div>
 <br />
 <div class=\"well col-md-8\" id=\"blockResume\">
{% for tickets in nom %}

\t
\t <div class=\"well col-md-10\" id=\"ticketsResume\">
 
<strong>Nom</strong> : {{ tickets.name }} <br /> 
<strong>Prénom</strong> : {{ tickets.firstName }} <br />
<strong>Date de naissance</strong> : {{tickets.birthDate|date(\"d/m/Y\")}} <br />
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
    <a href=\"{{ path('app_louvre_paiement') }}\"><input type=\"button\" id=\"bouton\" class=\"btn btn-primary\" value=\"Valider\" /></a>
</div>
</div>
\t
</div>

{% endblock %}", "AppLouvreBundle:App:resume.html.twig", "C:\\wamp64\\www\\Billetterie\\src\\App\\LouvreBundle/Resources/views/App/resume.html.twig");
    }
}
