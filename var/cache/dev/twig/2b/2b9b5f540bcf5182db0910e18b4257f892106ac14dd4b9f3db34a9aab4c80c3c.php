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
        $__internal_8a2b161a6ac304ab49244002d55ba2d1b4cc23fdfcb053f78f3aacd0b75918df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a2b161a6ac304ab49244002d55ba2d1b4cc23fdfcb053f78f3aacd0b75918df->enter($__internal_8a2b161a6ac304ab49244002d55ba2d1b4cc23fdfcb053f78f3aacd0b75918df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:resume.html.twig"));

        $__internal_a38a0470b76a7ae83103d88e365058690c4bc37d776d97fa8512158820c80813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a38a0470b76a7ae83103d88e365058690c4bc37d776d97fa8512158820c80813->enter($__internal_a38a0470b76a7ae83103d88e365058690c4bc37d776d97fa8512158820c80813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:resume.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a2b161a6ac304ab49244002d55ba2d1b4cc23fdfcb053f78f3aacd0b75918df->leave($__internal_8a2b161a6ac304ab49244002d55ba2d1b4cc23fdfcb053f78f3aacd0b75918df_prof);

        
        $__internal_a38a0470b76a7ae83103d88e365058690c4bc37d776d97fa8512158820c80813->leave($__internal_a38a0470b76a7ae83103d88e365058690c4bc37d776d97fa8512158820c80813_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f35e91b9293460c8f0cd548e408f7f2bd3c4ff300a39bf59236a2fa4d2bb7bae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f35e91b9293460c8f0cd548e408f7f2bd3c4ff300a39bf59236a2fa4d2bb7bae->enter($__internal_f35e91b9293460c8f0cd548e408f7f2bd3c4ff300a39bf59236a2fa4d2bb7bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6bf17c4b9a21da993f29148a369e34b84c3258a22241fc88414ca5ad72490b55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bf17c4b9a21da993f29148a369e34b84c3258a22241fc88414ca5ad72490b55->enter($__internal_6bf17c4b9a21da993f29148a369e34b84c3258a22241fc88414ca5ad72490b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "\t
\t";
        // line 6
        echo "
\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "errors"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 8
            echo "\t  <div class=\"alert alert-danger\">
\t\t  ";
            // line 9
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t  </div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
\t<h1><strong>Etape 3:</strong> Récapitulatif de votre commande </h1> 

\t<hr>
\t
\t";
        // line 18
        echo "\t
\t<div class=\"well col-md-6\" id=\"total1\">
\t\t<strong>Adresse e-mail</strong> : ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo " <br />

\t\t<strong>Date de la réservation</strong> : ";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["orderDate"]) ? $context["orderDate"] : $this->getContext($context, "orderDate")), "d/m/Y"), "html", null, true);
        echo " <br />

\t\t<strong>Type de billet</strong> : 

\t\t";
        // line 26
        if (((isset($context["ticketsType"]) ? $context["ticketsType"] : $this->getContext($context, "ticketsType")) == 1)) {
            echo " 
\t\tJournée 

\t\t";
        } elseif ((        // line 29
(isset($context["ticketsType"]) ? $context["ticketsType"] : $this->getContext($context, "ticketsType")) == 2)) {
            // line 30
            echo "\t\tDemi-Journée
\t\t";
        }
        // line 32
        echo "\t\t<br />

\t\t<strong>Nombre de billet(s)</strong> : ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["ticketsNbr"]) ? $context["ticketsNbr"] : $this->getContext($context, "ticketsNbr")), "html", null, true);
        echo " <br />

\t\t<strong>Référence de la Commande</strong> : ";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["orderCode"]) ? $context["orderCode"] : $this->getContext($context, "orderCode")), "html", null, true);
        echo " <br />
\t</div>
\t<br/>
\t
\t";
        // line 41
        echo "\t
\t<div class=\"well col-md-6\" id=\"total2\">
\t\t<h3><strong>Le montant total de votre commande est de</strong> : ";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "€</h3>
\t\t<div>
\t\t\t<div style=\" col-md-6\">
\t\t\t\t<div class=\"col-md-4\"><a href=\"../\"><input type=\"button\" class=\"btn btn-danger\" value=\"Annuler\" /></a></div>
\t\t\t\t<div id=\"step3step2\" class=\"col-md-4\">
\t\t\t\t\t<a href=\"javascript:history.go(-1)\"><input type=\"button\" class=\"btn btn-secondary\" value=\"< Etape 2\" /></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<form action=\"paiement\" method=\"POST\">
\t\t\t\t\t\t<script
\t\t\t\t\t\t  src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
\t\t\t\t\t\t  data-key=\"pk_test_JnHnHbzCKM5CxeKzQyI3YfWk\"
\t\t\t\t\t\t  data-amount=";
        // line 55
        echo twig_escape_filter($this->env, ((isset($context["prix"]) ? $context["prix"] : $this->getContext($context, "prix")) * 100), "html", null, true);
        echo "
\t\t\t\t\t\t  data-name=\"Musée du Louvre\"
\t\t\t\t\t\t  data-label=\"Acheter\"
\t\t\t\t\t\t  data-email=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "\"
\t\t\t\t\t\t  data-description=\"Evitez les files d'attentes\"
\t\t\t\t\t\t  data-locale=\"auto\"
\t\t\t\t\t\t  data-currency=\"eur\">
\t\t\t\t\t\t</script>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
 \t<br />
 \t
 \t";
        // line 71
        echo " \t
\t<div class=\"well col-md-7\" id=\"allTickets\">
\t\t<div class=\"well col-md-12\">
\t\t\t";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allTickets"]) ? $context["allTickets"] : $this->getContext($context, "allTickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["tickets"]) {
            // line 75
            echo "\t \t\t\t<div class=\"well col-md-12\" id=\"ticketsResume\">
\t\t\t\t\t<strong>Nom</strong> : ";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "name", array()), "html", null, true);
            echo " <br /> 
\t\t\t\t\t<strong>Prénom</strong> : ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "firstName", array()), "html", null, true);
            echo " <br />
\t\t\t\t\t<strong>Date de naissance</strong> :<br/> ";
            // line 78
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tickets"], "birthDate", array()), "d/m/Y"), "html", null, true);
            echo " <br />
\t\t\t\t\t<strong>Pays</strong> : ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "pays", array()), "html", null, true);
            echo " <br />
\t\t\t\t\t<strong>Tarif réduit</strong> : 
\t\t\t\t\t";
            // line 81
            if (($this->getAttribute($context["tickets"], "lowRate", array()) == true)) {
                echo " 
\t\t\t\t\t\tOui
\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 83
$context["tickets"], "lowRate", array()) == false)) {
                // line 84
                echo "\t\t\t\t\t\tNon
\t\t\t\t\t";
            }
            // line 86
            echo "\t\t\t\t\t<br />
\t\t\t\t\t<strong>Type de tarif</strong> : 
\t\t\t\t\t";
            // line 88
            if (($this->getAttribute($context["tickets"], "ticketsRate", array()) == 1)) {
                echo " 
\t\t\t\t\t\tEnfant
\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 90
$context["tickets"], "ticketsRate", array()) == 2)) {
                // line 91
                echo "\t\t\t\t\t\tNormal
\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 92
$context["tickets"], "ticketsRate", array()) == 3)) {
                // line 93
                echo "\t\t\t\t\t\tSenior
\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 94
$context["tickets"], "ticketsRate", array()) == 4)) {
                // line 95
                echo "\t\t\t\t\tTarif réduit
\t\t\t\t\t";
            }
            // line 97
            echo "\t\t\t\t\t<br />
\t\t\t\t\t<strong>Prix du billet</strong> : ";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "prix", array()), "html", null, true);
            echo "€
\t\t\t\t\t<hr>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tickets'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "\t\t</div>
\t\t
\t\t";
        // line 105
        echo "\t\t
\t\t<div class=\"well col-md-4\">
\t\t\t<strong>TOTAL</strong> : ";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "€
\t\t\t<div class=\"form-group text-right\">
\t\t\t\t<form action=\"paiement\" method=\"POST\">
\t\t\t\t\t<script
\t\t\t\t\t  src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
\t\t\t\t\t  data-key=\"pk_test_JnHnHbzCKM5CxeKzQyI3YfWk\"
\t\t\t\t\t  data-amount=";
        // line 113
        echo twig_escape_filter($this->env, ((isset($context["prix"]) ? $context["prix"] : $this->getContext($context, "prix")) * 100), "html", null, true);
        echo "
\t\t\t\t\t  data-name=\"Musée du Louvre\"
\t\t\t\t\t  data-label=\"Acheter\"
\t\t\t\t\t  data-email=\"";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "\"
\t\t\t\t\t  data-description=\"Evitez les files d'attentes\"
\t\t\t\t\t  data-locale=\"auto\"
\t\t\t\t\t  data-currency=\"eur\">
\t\t\t\t\t</script>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6bf17c4b9a21da993f29148a369e34b84c3258a22241fc88414ca5ad72490b55->leave($__internal_6bf17c4b9a21da993f29148a369e34b84c3258a22241fc88414ca5ad72490b55_prof);

        
        $__internal_f35e91b9293460c8f0cd548e408f7f2bd3c4ff300a39bf59236a2fa4d2bb7bae->leave($__internal_f35e91b9293460c8f0cd548e408f7f2bd3c4ff300a39bf59236a2fa4d2bb7bae_prof);

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
        return array (  263 => 116,  257 => 113,  248 => 107,  244 => 105,  240 => 102,  230 => 98,  227 => 97,  223 => 95,  221 => 94,  218 => 93,  216 => 92,  213 => 91,  211 => 90,  206 => 88,  202 => 86,  198 => 84,  196 => 83,  191 => 81,  186 => 79,  182 => 78,  178 => 77,  174 => 76,  171 => 75,  167 => 74,  162 => 71,  147 => 58,  141 => 55,  126 => 43,  122 => 41,  115 => 36,  110 => 34,  106 => 32,  102 => 30,  100 => 29,  94 => 26,  87 => 22,  82 => 20,  78 => 18,  71 => 12,  62 => 9,  59 => 8,  55 => 7,  52 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
\t
\t{# Notifications #}

\t{% for flashMessage in app.session.flashbag.get('errors') %}
\t  <div class=\"alert alert-danger\">
\t\t  {{ flashMessage }}
\t  </div>
\t{% endfor %}

\t<h1><strong>Etape 3:</strong> Récapitulatif de votre commande </h1> 

\t<hr>
\t
\t{#Recapitualitf de la commande#}
\t
\t<div class=\"well col-md-6\" id=\"total1\">
\t\t<strong>Adresse e-mail</strong> : {{ email }} <br />

\t\t<strong>Date de la réservation</strong> : {{ orderDate|date(\"d/m/Y\") }} <br />

\t\t<strong>Type de billet</strong> : 

\t\t{% if ticketsType == 1%} 
\t\tJournée 

\t\t{% elseif ticketsType == 2 %}
\t\tDemi-Journée
\t\t{% endif %}
\t\t<br />

\t\t<strong>Nombre de billet(s)</strong> : {{ ticketsNbr }} <br />

\t\t<strong>Référence de la Commande</strong> : {{ orderCode }} <br />
\t</div>
\t<br/>
\t
\t{#Montant Total et boutons de navigation #}
\t
\t<div class=\"well col-md-6\" id=\"total2\">
\t\t<h3><strong>Le montant total de votre commande est de</strong> : {{total}}€</h3>
\t\t<div>
\t\t\t<div style=\" col-md-6\">
\t\t\t\t<div class=\"col-md-4\"><a href=\"../\"><input type=\"button\" class=\"btn btn-danger\" value=\"Annuler\" /></a></div>
\t\t\t\t<div id=\"step3step2\" class=\"col-md-4\">
\t\t\t\t\t<a href=\"javascript:history.go(-1)\"><input type=\"button\" class=\"btn btn-secondary\" value=\"< Etape 2\" /></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<form action=\"paiement\" method=\"POST\">
\t\t\t\t\t\t<script
\t\t\t\t\t\t  src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
\t\t\t\t\t\t  data-key=\"pk_test_JnHnHbzCKM5CxeKzQyI3YfWk\"
\t\t\t\t\t\t  data-amount={{ prix * 100}}
\t\t\t\t\t\t  data-name=\"Musée du Louvre\"
\t\t\t\t\t\t  data-label=\"Acheter\"
\t\t\t\t\t\t  data-email=\"{{email}}\"
\t\t\t\t\t\t  data-description=\"Evitez les files d'attentes\"
\t\t\t\t\t\t  data-locale=\"auto\"
\t\t\t\t\t\t  data-currency=\"eur\">
\t\t\t\t\t\t</script>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
 \t<br />
 \t
 \t{#Billets + Total + Boutons payer#}
 \t
\t<div class=\"well col-md-7\" id=\"allTickets\">
\t\t<div class=\"well col-md-12\">
\t\t\t{% for tickets in allTickets %}
\t \t\t\t<div class=\"well col-md-12\" id=\"ticketsResume\">
\t\t\t\t\t<strong>Nom</strong> : {{ tickets.name }} <br /> 
\t\t\t\t\t<strong>Prénom</strong> : {{ tickets.firstName }} <br />
\t\t\t\t\t<strong>Date de naissance</strong> :<br/> {{tickets.birthDate|date(\"d/m/Y\")}} <br />
\t\t\t\t\t<strong>Pays</strong> : {{tickets.pays}} <br />
\t\t\t\t\t<strong>Tarif réduit</strong> : 
\t\t\t\t\t{% if tickets.lowRate == true %} 
\t\t\t\t\t\tOui
\t\t\t\t\t{% elseif tickets.lowRate == false %}
\t\t\t\t\t\tNon
\t\t\t\t\t{% endif %}
\t\t\t\t\t<br />
\t\t\t\t\t<strong>Type de tarif</strong> : 
\t\t\t\t\t{% if tickets.ticketsRate == 1 %} 
\t\t\t\t\t\tEnfant
\t\t\t\t\t{% elseif tickets.ticketsRate == 2 %}
\t\t\t\t\t\tNormal
\t\t\t\t\t{% elseif tickets.ticketsRate == 3 %}
\t\t\t\t\t\tSenior
\t\t\t\t\t{% elseif tickets.ticketsRate == 4 %}
\t\t\t\t\tTarif réduit
\t\t\t\t\t{% endif %}
\t\t\t\t\t<br />
\t\t\t\t\t<strong>Prix du billet</strong> : {{tickets.prix}}€
\t\t\t\t\t<hr>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t\t
\t\t{#Total + bouton payer#}
\t\t
\t\t<div class=\"well col-md-4\">
\t\t\t<strong>TOTAL</strong> : {{total}}€
\t\t\t<div class=\"form-group text-right\">
\t\t\t\t<form action=\"paiement\" method=\"POST\">
\t\t\t\t\t<script
\t\t\t\t\t  src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
\t\t\t\t\t  data-key=\"pk_test_JnHnHbzCKM5CxeKzQyI3YfWk\"
\t\t\t\t\t  data-amount={{ prix * 100}}
\t\t\t\t\t  data-name=\"Musée du Louvre\"
\t\t\t\t\t  data-label=\"Acheter\"
\t\t\t\t\t  data-email=\"{{email}}\"
\t\t\t\t\t  data-description=\"Evitez les files d'attentes\"
\t\t\t\t\t  data-locale=\"auto\"
\t\t\t\t\t  data-currency=\"eur\">
\t\t\t\t\t</script>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}", "AppLouvreBundle:App:resume.html.twig", "C:\\wamp64\\www\\Billetterie\\src\\App\\LouvreBundle/Resources/views/App/resume.html.twig");
    }
}
