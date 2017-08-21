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
        $__internal_ab8d1ba9785ea92d9f2fd949dbde1440554cf734ef7bfead407bf29326a53fde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab8d1ba9785ea92d9f2fd949dbde1440554cf734ef7bfead407bf29326a53fde->enter($__internal_ab8d1ba9785ea92d9f2fd949dbde1440554cf734ef7bfead407bf29326a53fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:email.html.twig"));

        $__internal_bf31bf20730e0caa8d5a49d6edf5328e70fed10c825e7d2e9c083ba9086606d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf31bf20730e0caa8d5a49d6edf5328e70fed10c825e7d2e9c083ba9086606d4->enter($__internal_bf31bf20730e0caa8d5a49d6edf5328e70fed10c825e7d2e9c083ba9086606d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:email.html.twig"));

        // line 1
        echo "
<p><img src=\"http://www.louvre.fr/sites/all/themes/louvre/img/data/logo-louvre.jpg\" alt=\"le Louvre\" style=\"float:left;\"></p><br/>



<h2> # ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["orderCode"]) ? $context["orderCode"] : $this->getContext($context, "orderCode")), "html", null, true);
        echo " </h2><br />


<strong>Adresse e-mail</strong> : ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo " <br />

<strong>Date de la réservation</strong> : ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date_reservation"]) ? $context["date_reservation"] : $this->getContext($context, "date_reservation")), "d/m/Y"), "html", null, true);
        echo " <br />

<strong>Type de billet</strong> : 

";
        // line 15
        if (((isset($context["type_billet"]) ? $context["type_billet"] : $this->getContext($context, "type_billet")) == 1)) {
            echo " 
Journée 

";
        } elseif ((        // line 18
(isset($context["type_billet"]) ? $context["type_billet"] : $this->getContext($context, "type_billet")) == 2)) {
            // line 19
            echo "Demi-Journée
";
        }
        // line 21
        echo "<br />

<strong>Nombre de billet</strong> : ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["nombre_billet"]) ? $context["nombre_billet"] : $this->getContext($context, "nombre_billet")), "html", null, true);
        echo " <br />

<strong>Numéro de Commande</strong> : ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["orderCode"]) ? $context["orderCode"] : $this->getContext($context, "orderCode")), "html", null, true);
        echo " <br />

 <br />

";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")));
        foreach ($context['_seq'] as $context["_key"] => $context["tickets"]) {
            // line 30
            echo "  
<strong>Nom</strong> : ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "name", array()), "html", null, true);
            echo " <br /> 
<strong>Prenom</strong> : ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "firstName", array()), "html", null, true);
            echo " <br />
<strong>date de naissance</strong> : ";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tickets"], "birthDate", array()), "d/m/Y"), "html", null, true);
            echo " <br />
<strong>Nationalité</strong> : ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "pays", array()), "html", null, true);
            echo " <br />
<strong>Tarif réduit</strong> : 
";
            // line 36
            if (($this->getAttribute($context["tickets"], "lowRate", array()) == true)) {
                echo " 
Oui
";
            } elseif (($this->getAttribute(            // line 38
$context["tickets"], "lowRate", array()) == false)) {
                // line 39
                echo "Non
";
            }
            // line 41
            echo "<br />
<strong>Type de tarif</strong> : 
";
            // line 43
            if (($this->getAttribute($context["tickets"], "ticketsRate", array()) == 1)) {
                echo " 
Enfant
";
            } elseif (($this->getAttribute(            // line 45
$context["tickets"], "ticketsRate", array()) == 2)) {
                // line 46
                echo "Normal
";
            } elseif (($this->getAttribute(            // line 47
$context["tickets"], "ticketsRate", array()) == 3)) {
                // line 48
                echo "Senior
";
            } elseif (($this->getAttribute(            // line 49
$context["tickets"], "ticketsRate", array()) == 4)) {
                // line 50
                echo "Tarif réduit
";
            }
            // line 52
            echo "<br />
<strong>prix</strong> : ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "prix", array()), "html", null, true);
            echo "€
 <hr>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tickets'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
<strong>Total prix</strong> : ";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "€
";
        
        $__internal_ab8d1ba9785ea92d9f2fd949dbde1440554cf734ef7bfead407bf29326a53fde->leave($__internal_ab8d1ba9785ea92d9f2fd949dbde1440554cf734ef7bfead407bf29326a53fde_prof);

        
        $__internal_bf31bf20730e0caa8d5a49d6edf5328e70fed10c825e7d2e9c083ba9086606d4->leave($__internal_bf31bf20730e0caa8d5a49d6edf5328e70fed10c825e7d2e9c083ba9086606d4_prof);

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
        return array (  153 => 57,  150 => 56,  141 => 53,  138 => 52,  134 => 50,  132 => 49,  129 => 48,  127 => 47,  124 => 46,  122 => 45,  117 => 43,  113 => 41,  109 => 39,  107 => 38,  102 => 36,  97 => 34,  93 => 33,  89 => 32,  85 => 31,  82 => 30,  78 => 29,  71 => 25,  66 => 23,  62 => 21,  58 => 19,  56 => 18,  50 => 15,  43 => 11,  38 => 9,  32 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<p><img src=\"http://www.louvre.fr/sites/all/themes/louvre/img/data/logo-louvre.jpg\" alt=\"le Louvre\" style=\"float:left;\"></p><br/>



<h2> # {{ orderCode }} </h2><br />


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
", "AppLouvreBundle:App:email.html.twig", "C:\\wamp64\\www\\Billetterie\\src\\App\\LouvreBundle/Resources/views/App/email.html.twig");
    }
}
