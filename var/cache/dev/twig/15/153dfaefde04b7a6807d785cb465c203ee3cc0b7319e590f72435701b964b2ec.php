<?php

/* AppLouvreBundle:App:email.html.twig */
class __TwigTemplate_4d8ca81f20ec024f9a2137eb3177fe83cf858a2b8f7ab9fcaba038c287d8ca1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_edf401a3a62d484eb6827248ec238adce95bf5ed636b4d69733ed5d0c32a5e40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edf401a3a62d484eb6827248ec238adce95bf5ed636b4d69733ed5d0c32a5e40->enter($__internal_edf401a3a62d484eb6827248ec238adce95bf5ed636b4d69733ed5d0c32a5e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:email.html.twig"));

        $__internal_20ccb66a1b98f36e82ae950f8404acb70500be099841833bf8e214c6365e0e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20ccb66a1b98f36e82ae950f8404acb70500be099841833bf8e214c6365e0e04->enter($__internal_20ccb66a1b98f36e82ae950f8404acb70500be099841833bf8e214c6365e0e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:email.html.twig"));

        // line 1
        echo "<h2> Commande numero : ";
        echo twig_escape_filter($this->env, (isset($context["orderCode"]) ? $context["orderCode"] : $this->getContext($context, "orderCode")), "html", null, true);
        echo " </h2><br />


<strong>Adresse e-mail</strong> : ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo " <br />

<strong>Date de la réservation</strong> : ";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date_reservation"]) ? $context["date_reservation"] : $this->getContext($context, "date_reservation")), "d/m/Y"), "html", null, true);
        echo " <br />

<strong>Type de billet</strong> : 

";
        // line 10
        if (((isset($context["type_billet"]) ? $context["type_billet"] : $this->getContext($context, "type_billet")) == 1)) {
            echo " 
Journée 

";
        } elseif ((        // line 13
(isset($context["type_billet"]) ? $context["type_billet"] : $this->getContext($context, "type_billet")) == 2)) {
            // line 14
            echo "Demi-Journée
";
        }
        // line 16
        echo "<br />

<strong>Nombre de billet</strong> : ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["nombre_billet"]) ? $context["nombre_billet"] : $this->getContext($context, "nombre_billet")), "html", null, true);
        echo " <br />

<strong>Numéro de Commande</strong> : ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["orderCode"]) ? $context["orderCode"] : $this->getContext($context, "orderCode")), "html", null, true);
        echo " <br />

 <br />

";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")));
        foreach ($context['_seq'] as $context["_key"] => $context["tickets"]) {
            // line 25
            echo "  
<strong>Nom</strong> : ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "name", array()), "html", null, true);
            echo " <br /> 
<strong>Prenom</strong> : ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "firstName", array()), "html", null, true);
            echo " <br />
<strong>date de naissance</strong> : ";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tickets"], "birthDate", array()), "d/m/Y"), "html", null, true);
            echo " <br />
<strong>Nationalité</strong> : ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "pays", array()), "html", null, true);
            echo " <br />
<strong>Tarif réduit</strong> : 
";
            // line 31
            if (($this->getAttribute($context["tickets"], "lowRate", array()) == true)) {
                echo " 
Oui
";
            } elseif (($this->getAttribute(            // line 33
$context["tickets"], "lowRate", array()) == false)) {
                // line 34
                echo "Non
";
            }
            // line 36
            echo "<br />
<strong>Type de tarif</strong> : 
";
            // line 38
            if (($this->getAttribute($context["tickets"], "ticketsRate", array()) == 1)) {
                echo " 
Enfant
";
            } elseif (($this->getAttribute(            // line 40
$context["tickets"], "ticketsRate", array()) == 2)) {
                // line 41
                echo "Normal
";
            } elseif (($this->getAttribute(            // line 42
$context["tickets"], "ticketsRate", array()) == 3)) {
                // line 43
                echo "Senior
";
            } elseif (($this->getAttribute(            // line 44
$context["tickets"], "ticketsRate", array()) == 4)) {
                // line 45
                echo "Tarif réduit
";
            }
            // line 47
            echo "<br />
<strong>prix</strong> : ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "prix", array()), "html", null, true);
            echo "€
 <hr>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tickets'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
<strong>Total prix</strong> : ";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "€
";
        
        $__internal_edf401a3a62d484eb6827248ec238adce95bf5ed636b4d69733ed5d0c32a5e40->leave($__internal_edf401a3a62d484eb6827248ec238adce95bf5ed636b4d69733ed5d0c32a5e40_prof);

        
        $__internal_20ccb66a1b98f36e82ae950f8404acb70500be099841833bf8e214c6365e0e04->leave($__internal_20ccb66a1b98f36e82ae950f8404acb70500be099841833bf8e214c6365e0e04_prof);

    }

    public function getTemplateName()
    {
        return "AppLouvreBundle:App:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 52,  144 => 51,  135 => 48,  132 => 47,  128 => 45,  126 => 44,  123 => 43,  121 => 42,  118 => 41,  116 => 40,  111 => 38,  107 => 36,  103 => 34,  101 => 33,  96 => 31,  91 => 29,  87 => 28,  83 => 27,  79 => 26,  76 => 25,  72 => 24,  65 => 20,  60 => 18,  56 => 16,  52 => 14,  50 => 13,  44 => 10,  37 => 6,  32 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h2> Commande numero : {{ orderCode }} </h2><br />


<strong>Adresse e-mail</strong> : {{ email }} <br />

<strong>Date de la réservation</strong> : {{ date_reservation|date(\"d/m/Y\") }} <br />

<strong>Type de billet</strong> : 

{% if type_billet == 1%} 
Journée 

{% elseif type_billet == 2 %}
Demi-Journée
{% endif %}
<br />

<strong>Nombre de billet</strong> : {{ nombre_billet }} <br />

<strong>Numéro de Commande</strong> : {{ orderCode }} <br />

 <br />

{% for tickets in nom %}
  
<strong>Nom</strong> : {{ tickets.name }} <br /> 
<strong>Prenom</strong> : {{ tickets.firstName }} <br />
<strong>date de naissance</strong> : {{tickets.birthDate|date(\"d/m/Y\")}} <br />
<strong>Nationalité</strong> : {{tickets.pays}} <br />
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
<strong>prix</strong> : {{tickets.prix}}€
 <hr>
 {% endfor %}

<strong>Total prix</strong> : {{total}}€
", "AppLouvreBundle:App:email.html.twig", "C:\\wamp64\\www\\try\\src\\App\\LouvreBundle/Resources/views/App/email.html.twig");
    }
}
