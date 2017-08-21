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
        $__internal_24acb8866099225ff79535ff50eb92c26d7d666cd8dd432f353ca3380a71ab8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24acb8866099225ff79535ff50eb92c26d7d666cd8dd432f353ca3380a71ab8e->enter($__internal_24acb8866099225ff79535ff50eb92c26d7d666cd8dd432f353ca3380a71ab8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:resume.html.twig"));

        $__internal_b31a93bb28ee27f31be9dc949a46e3d77fa7bc942a5c5716d1e5f0f50ec948e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b31a93bb28ee27f31be9dc949a46e3d77fa7bc942a5c5716d1e5f0f50ec948e8->enter($__internal_b31a93bb28ee27f31be9dc949a46e3d77fa7bc942a5c5716d1e5f0f50ec948e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:resume.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24acb8866099225ff79535ff50eb92c26d7d666cd8dd432f353ca3380a71ab8e->leave($__internal_24acb8866099225ff79535ff50eb92c26d7d666cd8dd432f353ca3380a71ab8e_prof);

        
        $__internal_b31a93bb28ee27f31be9dc949a46e3d77fa7bc942a5c5716d1e5f0f50ec948e8->leave($__internal_b31a93bb28ee27f31be9dc949a46e3d77fa7bc942a5c5716d1e5f0f50ec948e8_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ba5383b807b397733ae4b5a90ccdbae77e31c441a305e37a60d42bfb3fc79151 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba5383b807b397733ae4b5a90ccdbae77e31c441a305e37a60d42bfb3fc79151->enter($__internal_ba5383b807b397733ae4b5a90ccdbae77e31c441a305e37a60d42bfb3fc79151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_95603c9e704b76aa4c59aae77d967c15e635f67d945afd4e8565ba3022b85904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95603c9e704b76aa4c59aae77d967c15e635f67d945afd4e8565ba3022b85904->enter($__internal_95603c9e704b76aa4c59aae77d967c15e635f67d945afd4e8565ba3022b85904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
\t<h1><strong>Etape 3:</strong> Récapitulatif de votre commande </h1> 

\t<hr>
\t
\t";
        // line 10
        echo "\t
\t<div class=\"well col-md-6\" id=\"total1\">
\t\t<strong>Adresse e-mail</strong> : ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo " <br />

\t\t<strong>Date de la réservation</strong> : ";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["orderDate"]) ? $context["orderDate"] : $this->getContext($context, "orderDate")), "d/m/Y"), "html", null, true);
        echo " <br />

\t\t<strong>Type de billet</strong> : 

\t\t";
        // line 18
        if (((isset($context["ticketsType"]) ? $context["ticketsType"] : $this->getContext($context, "ticketsType")) == 1)) {
            echo " 
\t\tJournée 

\t\t";
        } elseif ((        // line 21
(isset($context["ticketsType"]) ? $context["ticketsType"] : $this->getContext($context, "ticketsType")) == 2)) {
            // line 22
            echo "\t\tDemi-Journée
\t\t";
        }
        // line 24
        echo "\t\t<br />

\t\t<strong>Nombre de billet(s)</strong> : ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["ticketsNbr"]) ? $context["ticketsNbr"] : $this->getContext($context, "ticketsNbr")), "html", null, true);
        echo " <br />

\t\t<strong>Référence de la Commande</strong> : ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["orderCode"]) ? $context["orderCode"] : $this->getContext($context, "orderCode")), "html", null, true);
        echo " <br />
\t</div>
\t<br/>
\t
\t";
        // line 33
        echo "\t
\t<div class=\"well col-md-6\" id=\"total2\">
\t\t<h3><strong>Le montant total de votre commande est de</strong> : ";
        // line 35
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
        // line 47
        echo twig_escape_filter($this->env, ((isset($context["prix"]) ? $context["prix"] : $this->getContext($context, "prix")) * 100), "html", null, true);
        echo "
\t\t\t\t\t\t  data-name=\"Musée du Louvre\"
\t\t\t\t\t\t  data-label=\"Acheter\"
\t\t\t\t\t\t  data-email=\"";
        // line 50
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
        // line 63
        echo " \t
\t<div class=\"well col-md-7\" id=\"allTickets\">
\t\t<div class=\"well col-md-12\">
\t\t\t";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allTickets"]) ? $context["allTickets"] : $this->getContext($context, "allTickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["tickets"]) {
            // line 67
            echo "\t \t\t\t<div class=\"well col-md-12\" id=\"ticketsResume\">
\t\t\t\t\t<strong>Nom</strong> : ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "name", array()), "html", null, true);
            echo " <br /> 
\t\t\t\t\t<strong>Prénom</strong> : ";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "firstName", array()), "html", null, true);
            echo " <br />
\t\t\t\t\t<strong>Date de naissance</strong> :<br/> ";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tickets"], "birthDate", array()), "d/m/Y"), "html", null, true);
            echo " <br />
\t\t\t\t\t<strong>Pays</strong> : ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "pays", array()), "html", null, true);
            echo " <br />
\t\t\t\t\t<strong>Tarif réduit</strong> : 
\t\t\t\t\t";
            // line 73
            if (($this->getAttribute($context["tickets"], "lowRate", array()) == true)) {
                echo " 
\t\t\t\t\t\tOui
\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 75
$context["tickets"], "lowRate", array()) == false)) {
                // line 76
                echo "\t\t\t\t\t\tNon
\t\t\t\t\t";
            }
            // line 78
            echo "\t\t\t\t\t<br />
\t\t\t\t\t<strong>Type de tarif</strong> : 
\t\t\t\t\t";
            // line 80
            if (($this->getAttribute($context["tickets"], "ticketsRate", array()) == 1)) {
                echo " 
\t\t\t\t\t\tEnfant
\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 82
$context["tickets"], "ticketsRate", array()) == 2)) {
                // line 83
                echo "\t\t\t\t\t\tNormal
\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 84
$context["tickets"], "ticketsRate", array()) == 3)) {
                // line 85
                echo "\t\t\t\t\t\tSenior
\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 86
$context["tickets"], "ticketsRate", array()) == 4)) {
                // line 87
                echo "\t\t\t\t\tTarif réduit
\t\t\t\t\t";
            }
            // line 89
            echo "\t\t\t\t\t<br />
\t\t\t\t\t<strong>Prix du billet</strong> : ";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "prix", array()), "html", null, true);
            echo "€
\t\t\t\t\t<hr>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tickets'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "\t\t</div>
\t\t
\t\t";
        // line 97
        echo "\t\t
\t\t<div class=\"well col-md-4\">
\t\t\t<strong>TOTAL</strong> : ";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "€
\t\t\t<div class=\"form-group text-right\">
\t\t\t\t<form action=\"paiement\" method=\"POST\">
\t\t\t\t\t<script
\t\t\t\t\t  src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
\t\t\t\t\t  data-key=\"pk_test_JnHnHbzCKM5CxeKzQyI3YfWk\"
\t\t\t\t\t  data-amount=";
        // line 105
        echo twig_escape_filter($this->env, ((isset($context["prix"]) ? $context["prix"] : $this->getContext($context, "prix")) * 100), "html", null, true);
        echo "
\t\t\t\t\t  data-name=\"Musée du Louvre\"
\t\t\t\t\t  data-label=\"Acheter\"
\t\t\t\t\t  data-email=\"";
        // line 108
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
        
        $__internal_95603c9e704b76aa4c59aae77d967c15e635f67d945afd4e8565ba3022b85904->leave($__internal_95603c9e704b76aa4c59aae77d967c15e635f67d945afd4e8565ba3022b85904_prof);

        
        $__internal_ba5383b807b397733ae4b5a90ccdbae77e31c441a305e37a60d42bfb3fc79151->leave($__internal_ba5383b807b397733ae4b5a90ccdbae77e31c441a305e37a60d42bfb3fc79151_prof);

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
        return array (  241 => 108,  235 => 105,  226 => 99,  222 => 97,  218 => 94,  208 => 90,  205 => 89,  201 => 87,  199 => 86,  196 => 85,  194 => 84,  191 => 83,  189 => 82,  184 => 80,  180 => 78,  176 => 76,  174 => 75,  169 => 73,  164 => 71,  160 => 70,  156 => 69,  152 => 68,  149 => 67,  145 => 66,  140 => 63,  125 => 50,  119 => 47,  104 => 35,  100 => 33,  93 => 28,  88 => 26,  84 => 24,  80 => 22,  78 => 21,  72 => 18,  65 => 14,  60 => 12,  56 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
