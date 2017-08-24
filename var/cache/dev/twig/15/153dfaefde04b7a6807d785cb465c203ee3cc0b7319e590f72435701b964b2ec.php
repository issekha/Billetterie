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
        $__internal_c866d4becff15882b33bb4330d7851c99f80a6c99505efd0a3cb3a6c28138007 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c866d4becff15882b33bb4330d7851c99f80a6c99505efd0a3cb3a6c28138007->enter($__internal_c866d4becff15882b33bb4330d7851c99f80a6c99505efd0a3cb3a6c28138007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:email.html.twig"));

        $__internal_0cb5be20c46969e617fe54ccfba28c03ddb5c94fd790b68c946a17338adfb2bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb5be20c46969e617fe54ccfba28c03ddb5c94fd790b68c946a17338adfb2bb->enter($__internal_0cb5be20c46969e617fe54ccfba28c03ddb5c94fd790b68c946a17338adfb2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:email.html.twig"));

        // line 1
        echo "
<p><img src=\"http://www.louvre.fr/sites/all/themes/louvre/img/data/logo-louvre.jpg\" alt=\"le Louvre\" style=\"float:left;\"></p><br />


<strong>Adresse e-mail</strong> : ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo " <br />

<strong>Commandé le </strong> : ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["orderDate"]) ? $context["orderDate"] : $this->getContext($context, "orderDate")), "d/m/Y"), "html", null, true);
        echo " <br />

<strong>Pour le</strong> : ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["visitDate"]) ? $context["visitDate"] : $this->getContext($context, "visitDate")), "d/m/Y"), "html", null, true);
        echo " <br />

<strong>Type de billet</strong> : 

";
        // line 13
        if (((isset($context["ticketsType"]) ? $context["ticketsType"] : $this->getContext($context, "ticketsType")) == 1)) {
            echo " 
\tJournée 

";
        } elseif ((        // line 16
(isset($context["ticketsType"]) ? $context["ticketsType"] : $this->getContext($context, "ticketsType")) == 2)) {
            // line 17
            echo "\tDemi-Journée
";
        }
        // line 19
        echo "<br />

<strong>Nombre de billet</strong> : ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["ticketsNbr"]) ? $context["ticketsNbr"] : $this->getContext($context, "ticketsNbr")), "html", null, true);
        echo " <br />

<strong>Numéro de Commande</strong> : ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["orderCode"]) ? $context["orderCode"] : $this->getContext($context, "orderCode")), "html", null, true);
        echo " <br />

 <br />

";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allTickets"]) ? $context["allTickets"] : $this->getContext($context, "allTickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["tickets"]) {
            // line 28
            echo "  
\t<strong>Nom</strong> : ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "name", array()), "html", null, true);
            echo " <br /> 
\t<strong>Prenom</strong> : ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "firstName", array()), "html", null, true);
            echo " <br />
\t<strong>date de naissance</strong> : ";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tickets"], "birthDate", array()), "d/m/Y"), "html", null, true);
            echo " <br />
\t<strong>Nationalité</strong> : ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "pays", array()), "html", null, true);
            echo " <br />
\t<strong>Tarif réduit</strong> : 
\t";
            // line 34
            if (($this->getAttribute($context["tickets"], "lowRate", array()) == true)) {
                echo " 
\t\tOui
\t";
            } elseif (($this->getAttribute(            // line 36
$context["tickets"], "lowRate", array()) == false)) {
                // line 37
                echo "\t\tNon
\t";
            }
            // line 39
            echo "\t<br />
\t<strong>Type de tarif</strong> : 
\t";
            // line 41
            if (($this->getAttribute($context["tickets"], "ticketsRate", array()) == 1)) {
                echo " 
\t\tEnfant
\t";
            } elseif (($this->getAttribute(            // line 43
$context["tickets"], "ticketsRate", array()) == 2)) {
                // line 44
                echo "\t\tNormal
\t";
            } elseif (($this->getAttribute(            // line 45
$context["tickets"], "ticketsRate", array()) == 3)) {
                // line 46
                echo "\t\tSenior
\t";
            } elseif (($this->getAttribute(            // line 47
$context["tickets"], "ticketsRate", array()) == 4)) {
                // line 48
                echo "\t\tTarif réduit
\t";
            }
            // line 50
            echo "\t<br />
\t<strong>prix</strong> : ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "prix", array()), "html", null, true);
            echo "€
\t <hr>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tickets'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
<strong>Total prix</strong> : ";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "€
";
        
        $__internal_c866d4becff15882b33bb4330d7851c99f80a6c99505efd0a3cb3a6c28138007->leave($__internal_c866d4becff15882b33bb4330d7851c99f80a6c99505efd0a3cb3a6c28138007_prof);

        
        $__internal_0cb5be20c46969e617fe54ccfba28c03ddb5c94fd790b68c946a17338adfb2bb->leave($__internal_0cb5be20c46969e617fe54ccfba28c03ddb5c94fd790b68c946a17338adfb2bb_prof);

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
        return array (  151 => 55,  148 => 54,  139 => 51,  136 => 50,  132 => 48,  130 => 47,  127 => 46,  125 => 45,  122 => 44,  120 => 43,  115 => 41,  111 => 39,  107 => 37,  105 => 36,  100 => 34,  95 => 32,  91 => 31,  87 => 30,  83 => 29,  80 => 28,  76 => 27,  69 => 23,  64 => 21,  60 => 19,  56 => 17,  54 => 16,  48 => 13,  41 => 9,  36 => 7,  31 => 5,  25 => 1,);
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
<p><img src=\"http://www.louvre.fr/sites/all/themes/louvre/img/data/logo-louvre.jpg\" alt=\"le Louvre\" style=\"float:left;\"></p><br />


<strong>Adresse e-mail</strong> : {{ email }} <br />

<strong>Commandé le </strong> : {{ orderDate|date(\"d/m/Y\") }} <br />

<strong>Pour le</strong> : {{ visitDate|date(\"d/m/Y\") }} <br />

<strong>Type de billet</strong> : 

{% if ticketsType == 1%} 
\tJournée 

{% elseif ticketsType == 2 %}
\tDemi-Journée
{% endif %}
<br />

<strong>Nombre de billet</strong> : {{ ticketsNbr }} <br />

<strong>Numéro de Commande</strong> : {{ orderCode }} <br />

 <br />

{% for tickets in allTickets %}
  
\t<strong>Nom</strong> : {{ tickets.name }} <br /> 
\t<strong>Prenom</strong> : {{ tickets.firstName }} <br />
\t<strong>date de naissance</strong> : {{tickets.birthDate|date(\"d/m/Y\")}} <br />
\t<strong>Nationalité</strong> : {{tickets.pays}} <br />
\t<strong>Tarif réduit</strong> : 
\t{% if tickets.lowRate == true %} 
\t\tOui
\t{% elseif tickets.lowRate == false %}
\t\tNon
\t{% endif %}
\t<br />
\t<strong>Type de tarif</strong> : 
\t{% if tickets.ticketsRate == 1 %} 
\t\tEnfant
\t{% elseif tickets.ticketsRate == 2 %}
\t\tNormal
\t{% elseif tickets.ticketsRate == 3 %}
\t\tSenior
\t{% elseif tickets.ticketsRate == 4 %}
\t\tTarif réduit
\t{% endif %}
\t<br />
\t<strong>prix</strong> : {{tickets.prix}}€
\t <hr>
 {% endfor %}

<strong>Total prix</strong> : {{total}}€
", "AppLouvreBundle:App:email.html.twig", "C:\\wamp64\\www\\Billetterie\\src\\App\\LouvreBundle/Resources/views/App/email.html.twig");
    }
}
