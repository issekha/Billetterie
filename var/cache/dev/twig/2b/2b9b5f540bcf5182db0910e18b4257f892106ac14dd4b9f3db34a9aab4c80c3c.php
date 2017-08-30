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
        $__internal_1e33fd3dd0404da26b08bb38f13df32c94267a3fe654d5fdd30d4acd2ad9047e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e33fd3dd0404da26b08bb38f13df32c94267a3fe654d5fdd30d4acd2ad9047e->enter($__internal_1e33fd3dd0404da26b08bb38f13df32c94267a3fe654d5fdd30d4acd2ad9047e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:resume.html.twig"));

        $__internal_413eac5835bb4e061cab63c904c2ebd58f1cddf2b0eb7fdaed6318303e8bcc46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_413eac5835bb4e061cab63c904c2ebd58f1cddf2b0eb7fdaed6318303e8bcc46->enter($__internal_413eac5835bb4e061cab63c904c2ebd58f1cddf2b0eb7fdaed6318303e8bcc46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:resume.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e33fd3dd0404da26b08bb38f13df32c94267a3fe654d5fdd30d4acd2ad9047e->leave($__internal_1e33fd3dd0404da26b08bb38f13df32c94267a3fe654d5fdd30d4acd2ad9047e_prof);

        
        $__internal_413eac5835bb4e061cab63c904c2ebd58f1cddf2b0eb7fdaed6318303e8bcc46->leave($__internal_413eac5835bb4e061cab63c904c2ebd58f1cddf2b0eb7fdaed6318303e8bcc46_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5cfda97810a87046c0a4ca73ccfad22a7fd69490fa804b13fead67394b8b6d1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cfda97810a87046c0a4ca73ccfad22a7fd69490fa804b13fead67394b8b6d1a->enter($__internal_5cfda97810a87046c0a4ca73ccfad22a7fd69490fa804b13fead67394b8b6d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ac6db3b8744ff571c9c1a0160ddf7f23fd2d95a678a2412a07e34931ac49f8b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac6db3b8744ff571c9c1a0160ddf7f23fd2d95a678a2412a07e34931ac49f8b3->enter($__internal_ac6db3b8744ff571c9c1a0160ddf7f23fd2d95a678a2412a07e34931ac49f8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
\t<h1><strong>Etape 3:</strong> Récapitulatif et Paiement de votre commande</h1> 

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
\t\t
\t\t<strong>Date de la visite</strong> : ";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["visitDate"]) ? $context["visitDate"] : $this->getContext($context, "visitDate")), "d/m/Y"), "html", null, true);
        echo " <br />

\t\t<strong>Type de billet</strong> : 

\t\t";
        // line 28
        if (((isset($context["ticketsType"]) ? $context["ticketsType"] : $this->getContext($context, "ticketsType")) == 1)) {
            echo " 
\t\tJournée 

\t\t";
        } elseif ((        // line 31
(isset($context["ticketsType"]) ? $context["ticketsType"] : $this->getContext($context, "ticketsType")) == 2)) {
            // line 32
            echo "\t\tDemi-Journée
\t\t";
        }
        // line 34
        echo "\t\t<br />

\t\t<strong>Nombre de billet(s)</strong> : ";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["ticketsNbr"]) ? $context["ticketsNbr"] : $this->getContext($context, "ticketsNbr")), "html", null, true);
        echo " <br />

\t\t
\t</div>
\t<br/>
\t
\t";
        // line 43
        echo "\t
\t<div class=\"well col-md-6\" id=\"total2\">
\t\t<h3><strong>Le montant total de votre commande est de</strong> : ";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "€</h3>
\t\t<div>
\t\t\t<div style=\" col-md-6\">
\t\t\t\t<div class=\"col-md-4\"><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_louvre_homePage");
        echo "\"><input type=\"button\" class=\"btn btn-danger\" value=\"Annuler\" /></a></div>
\t\t\t\t<div id=\"step3step2\" class=\"col-md-4\">
\t\t\t\t\t<a href=\"javascript:history.go(-1)\"><input type=\"button\" class=\"btn btn-secondary\" value=\"< Etape 2\" /></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<form action=\"paiement\" method=\"POST\">
\t\t\t\t\t\t<script
\t\t\t\t\t\t  src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
\t\t\t\t\t\t  data-key=\"pk_test_JnHnHbzCKM5CxeKzQyI3YfWk\"
\t\t\t\t\t\t  data-amount=";
        // line 57
        echo twig_escape_filter($this->env, ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) * 100), "html", null, true);
        echo "
\t\t\t\t\t\t  data-name=\"Musée du Louvre\"
\t\t\t\t\t\t  data-label=\"Acheter\"
\t\t\t\t\t\t  data-email=\"";
        // line 60
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
        // line 73
        echo " \t
\t<div class=\"well col-md-7\" id=\"allTickets\">
\t\t<div class=\"well col-md-12\">
\t\t\t";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allTickets"]) ? $context["allTickets"] : $this->getContext($context, "allTickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["tickets"]) {
            // line 77
            echo "\t \t\t\t<div class=\"well col-md-12\" id=\"ticketsResume\">
\t\t\t\t\t<strong>Nom</strong> : ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "name", array()), "html", null, true);
            echo " <br /> 
\t\t\t\t\t<strong>Prénom</strong> : ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "firstName", array()), "html", null, true);
            echo " <br />
\t\t\t\t\t<strong>Date de naissance</strong> :<br/> ";
            // line 80
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tickets"], "birthDate", array()), "d/m/Y"), "html", null, true);
            echo " <br />
\t\t\t\t\t<strong>Pays</strong> : ";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "pays", array()), "html", null, true);
            echo " <br />
\t\t\t\t\t<strong>Tarif réduit</strong> : 
\t\t\t\t\t";
            // line 83
            if (($this->getAttribute($context["tickets"], "lowRate", array()) == true)) {
                echo " 
\t\t\t\t\t\tOui
\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 85
$context["tickets"], "lowRate", array()) == false)) {
                // line 86
                echo "\t\t\t\t\t\tNon
\t\t\t\t\t";
            }
            // line 88
            echo "\t\t\t\t\t<br />
\t\t\t\t\t<strong>Type de tarif</strong> : 
\t\t\t\t\t";
            // line 90
            if (($this->getAttribute($context["tickets"], "ticketsRate", array()) == 1)) {
                echo " 
\t\t\t\t\t\tEnfant
\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 92
$context["tickets"], "ticketsRate", array()) == 2)) {
                // line 93
                echo "\t\t\t\t\t\tNormal
\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 94
$context["tickets"], "ticketsRate", array()) == 3)) {
                // line 95
                echo "\t\t\t\t\t\tSenior
\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 96
$context["tickets"], "ticketsRate", array()) == 4)) {
                // line 97
                echo "\t\t\t\t\t\tTarif réduit
\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 98
$context["tickets"], "ticketsRate", array()) == 5)) {
                // line 99
                echo "\t\t\t\t\t\tGratuit
\t\t\t\t\t";
            }
            // line 101
            echo "\t\t\t\t\t<br />
\t\t\t\t\t<strong>Prix du billet</strong> : ";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "prix", array()), "html", null, true);
            echo "€
\t\t\t\t\t<hr>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tickets'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "\t\t</div>
\t\t
\t\t";
        // line 109
        echo "\t\t
\t\t<div class=\"well col-md-4\">
\t\t\t<strong>TOTAL</strong> : ";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "€
\t\t\t<div class=\"form-group text-right\">
\t\t\t\t<form action=\"paiement\" method=\"POST\">
\t\t\t\t\t<script
\t\t\t\t\t  src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
\t\t\t\t\t  data-key=\"pk_test_JnHnHbzCKM5CxeKzQyI3YfWk\"
\t\t\t\t\t  data-amount=";
        // line 117
        echo twig_escape_filter($this->env, ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) * 100), "html", null, true);
        echo "
\t\t\t\t\t  data-name=\"Musée du Louvre\"
\t\t\t\t\t  data-label=\"Acheter\"
\t\t\t\t\t  data-email=\"";
        // line 120
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
        
        $__internal_ac6db3b8744ff571c9c1a0160ddf7f23fd2d95a678a2412a07e34931ac49f8b3->leave($__internal_ac6db3b8744ff571c9c1a0160ddf7f23fd2d95a678a2412a07e34931ac49f8b3_prof);

        
        $__internal_5cfda97810a87046c0a4ca73ccfad22a7fd69490fa804b13fead67394b8b6d1a->leave($__internal_5cfda97810a87046c0a4ca73ccfad22a7fd69490fa804b13fead67394b8b6d1a_prof);

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
        return array (  273 => 120,  267 => 117,  258 => 111,  254 => 109,  250 => 106,  240 => 102,  237 => 101,  233 => 99,  231 => 98,  228 => 97,  226 => 96,  223 => 95,  221 => 94,  218 => 93,  216 => 92,  211 => 90,  207 => 88,  203 => 86,  201 => 85,  196 => 83,  191 => 81,  187 => 80,  183 => 79,  179 => 78,  176 => 77,  172 => 76,  167 => 73,  152 => 60,  146 => 57,  134 => 48,  128 => 45,  124 => 43,  115 => 36,  111 => 34,  107 => 32,  105 => 31,  99 => 28,  92 => 24,  87 => 22,  82 => 20,  78 => 18,  71 => 12,  62 => 9,  59 => 8,  55 => 7,  52 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

\t<h1><strong>Etape 3:</strong> Récapitulatif et Paiement de votre commande</h1> 

\t<hr>
\t
\t{#Recapitualitf de la commande#}
\t
\t<div class=\"well col-md-6\" id=\"total1\">
\t\t<strong>Adresse e-mail</strong> : {{ email }} <br />

\t\t<strong>Date de la réservation</strong> : {{ orderDate|date(\"d/m/Y\") }} <br />
\t\t
\t\t<strong>Date de la visite</strong> : {{ visitDate|date(\"d/m/Y\") }} <br />

\t\t<strong>Type de billet</strong> : 

\t\t{% if ticketsType == 1%} 
\t\tJournée 

\t\t{% elseif ticketsType == 2 %}
\t\tDemi-Journée
\t\t{% endif %}
\t\t<br />

\t\t<strong>Nombre de billet(s)</strong> : {{ ticketsNbr }} <br />

\t\t
\t</div>
\t<br/>
\t
\t{#Montant Total et boutons de navigation #}
\t
\t<div class=\"well col-md-6\" id=\"total2\">
\t\t<h3><strong>Le montant total de votre commande est de</strong> : {{total}}€</h3>
\t\t<div>
\t\t\t<div style=\" col-md-6\">
\t\t\t\t<div class=\"col-md-4\"><a href=\"{{path('app_louvre_homePage')}}\"><input type=\"button\" class=\"btn btn-danger\" value=\"Annuler\" /></a></div>
\t\t\t\t<div id=\"step3step2\" class=\"col-md-4\">
\t\t\t\t\t<a href=\"javascript:history.go(-1)\"><input type=\"button\" class=\"btn btn-secondary\" value=\"< Etape 2\" /></a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<form action=\"paiement\" method=\"POST\">
\t\t\t\t\t\t<script
\t\t\t\t\t\t  src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
\t\t\t\t\t\t  data-key=\"pk_test_JnHnHbzCKM5CxeKzQyI3YfWk\"
\t\t\t\t\t\t  data-amount={{ total * 100}}
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
\t\t\t\t\t\tTarif réduit
\t\t\t\t\t{% elseif tickets.ticketsRate == 5 %}
\t\t\t\t\t\tGratuit
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
\t\t\t\t\t  data-amount={{ total * 100}}
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
