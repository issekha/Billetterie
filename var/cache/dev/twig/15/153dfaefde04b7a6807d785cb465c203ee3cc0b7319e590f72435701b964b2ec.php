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
        $__internal_7bfefd4598cf6d2af4ee3f71c27e6eed5bf8a686359c91495eb80f08e0a3cf3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bfefd4598cf6d2af4ee3f71c27e6eed5bf8a686359c91495eb80f08e0a3cf3c->enter($__internal_7bfefd4598cf6d2af4ee3f71c27e6eed5bf8a686359c91495eb80f08e0a3cf3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:email.html.twig"));

        $__internal_f82d6b4303d4e6ba7708f49cf20ae6cd4158e13d3698e7e63d970d320b3e33c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f82d6b4303d4e6ba7708f49cf20ae6cd4158e13d3698e7e63d970d320b3e33c4->enter($__internal_f82d6b4303d4e6ba7708f49cf20ae6cd4158e13d3698e7e63d970d320b3e33c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:email.html.twig"));

        // line 1
        echo "
<p><img src=\"http://www.louvre.fr/sites/all/themes/louvre/img/data/logo-louvre.jpg\" alt=\"le Louvre\" style=\"float:left;\"></p><br/>

<h1>Musée du Louvre</h1>


<h2> Commande numero : ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["orderCode"]) ? $context["orderCode"] : $this->getContext($context, "orderCode")), "html", null, true);
        echo " </h2><br />


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

<strong>Nombre de billet</strong> : ";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["nombre_billet"]) ? $context["nombre_billet"] : $this->getContext($context, "nombre_billet")), "html", null, true);
        echo " <br />

<strong>Numéro de Commande</strong> : ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["orderCode"]) ? $context["orderCode"] : $this->getContext($context, "orderCode")), "html", null, true);
        echo " <br />

 <br />

";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")));
        foreach ($context['_seq'] as $context["_key"] => $context["tickets"]) {
            // line 31
            echo "  
<strong>Nom</strong> : ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "name", array()), "html", null, true);
            echo " <br /> 
<strong>Prenom</strong> : ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "firstName", array()), "html", null, true);
            echo " <br />
<strong>date de naissance</strong> : ";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tickets"], "birthDate", array()), "d/m/Y"), "html", null, true);
            echo " <br />
<strong>Nationalité</strong> : ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "pays", array()), "html", null, true);
            echo " <br />
<strong>Tarif réduit</strong> : 
";
            // line 37
            if (($this->getAttribute($context["tickets"], "lowRate", array()) == true)) {
                echo " 
Oui
";
            } elseif (($this->getAttribute(            // line 39
$context["tickets"], "lowRate", array()) == false)) {
                // line 40
                echo "Non
";
            }
            // line 42
            echo "<br />
<strong>Type de tarif</strong> : 
";
            // line 44
            if (($this->getAttribute($context["tickets"], "ticketsRate", array()) == 1)) {
                echo " 
Enfant
";
            } elseif (($this->getAttribute(            // line 46
$context["tickets"], "ticketsRate", array()) == 2)) {
                // line 47
                echo "Normal
";
            } elseif (($this->getAttribute(            // line 48
$context["tickets"], "ticketsRate", array()) == 3)) {
                // line 49
                echo "Senior
";
            } elseif (($this->getAttribute(            // line 50
$context["tickets"], "ticketsRate", array()) == 4)) {
                // line 51
                echo "Tarif réduit
";
            }
            // line 53
            echo "<br />
<strong>prix</strong> : ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "prix", array()), "html", null, true);
            echo "€
 <hr>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tickets'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
<strong>Total prix</strong> : ";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "€
";
        
        $__internal_7bfefd4598cf6d2af4ee3f71c27e6eed5bf8a686359c91495eb80f08e0a3cf3c->leave($__internal_7bfefd4598cf6d2af4ee3f71c27e6eed5bf8a686359c91495eb80f08e0a3cf3c_prof);

        
        $__internal_f82d6b4303d4e6ba7708f49cf20ae6cd4158e13d3698e7e63d970d320b3e33c4->leave($__internal_f82d6b4303d4e6ba7708f49cf20ae6cd4158e13d3698e7e63d970d320b3e33c4_prof);

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
        return array (  154 => 58,  151 => 57,  142 => 54,  139 => 53,  135 => 51,  133 => 50,  130 => 49,  128 => 48,  125 => 47,  123 => 46,  118 => 44,  114 => 42,  110 => 40,  108 => 39,  103 => 37,  98 => 35,  94 => 34,  90 => 33,  86 => 32,  83 => 31,  79 => 30,  72 => 26,  67 => 24,  63 => 22,  59 => 20,  57 => 19,  51 => 16,  44 => 12,  39 => 10,  33 => 7,  25 => 1,);
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

<h1>Musée du Louvre</h1>


<h2> Commande numero : {{ orderCode }} </h2><br />


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
