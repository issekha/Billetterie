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
        $__internal_75b884de4fe7447579ea6922e1e5f4697da80c7d96687a41155ac492ab88c81b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75b884de4fe7447579ea6922e1e5f4697da80c7d96687a41155ac492ab88c81b->enter($__internal_75b884de4fe7447579ea6922e1e5f4697da80c7d96687a41155ac492ab88c81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:resume.html.twig"));

        $__internal_efbda0c616c6d6f4bfc16e9152845dc307e73b9e91a2b9ddb94cb70fd9452789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efbda0c616c6d6f4bfc16e9152845dc307e73b9e91a2b9ddb94cb70fd9452789->enter($__internal_efbda0c616c6d6f4bfc16e9152845dc307e73b9e91a2b9ddb94cb70fd9452789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:resume.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75b884de4fe7447579ea6922e1e5f4697da80c7d96687a41155ac492ab88c81b->leave($__internal_75b884de4fe7447579ea6922e1e5f4697da80c7d96687a41155ac492ab88c81b_prof);

        
        $__internal_efbda0c616c6d6f4bfc16e9152845dc307e73b9e91a2b9ddb94cb70fd9452789->leave($__internal_efbda0c616c6d6f4bfc16e9152845dc307e73b9e91a2b9ddb94cb70fd9452789_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d4d71feaec0c3f7ddfcfabfd34ccad3bcba4a57671bcdff56398463cbbf3b592 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4d71feaec0c3f7ddfcfabfd34ccad3bcba4a57671bcdff56398463cbbf3b592->enter($__internal_d4d71feaec0c3f7ddfcfabfd34ccad3bcba4a57671bcdff56398463cbbf3b592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_64a249cc108659ed90c411e446a375b93cba17126568253717f2afbe40dea75f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64a249cc108659ed90c411e446a375b93cba17126568253717f2afbe40dea75f->enter($__internal_64a249cc108659ed90c411e446a375b93cba17126568253717f2afbe40dea75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
  <h1><strong>Etape 3:</strong> Récapitulatif de votre commande </h1> 

  <hr>

\t
\t
<div class=\"well col-md-6\" id=\"total1\">
<strong>Adresse e-mail</strong> : ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo " <br />

<strong>Date de la réservation</strong> : ";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date_reservation"]) ? $context["date_reservation"] : $this->getContext($context, "date_reservation")), "d/m/Y"), "html", null, true);
        echo " <br />

<strong>Type de billet</strong> : 

";
        // line 18
        if (((isset($context["type_billet"]) ? $context["type_billet"] : $this->getContext($context, "type_billet")) == 1)) {
            echo " 
Journée 

";
        } elseif ((        // line 21
(isset($context["type_billet"]) ? $context["type_billet"] : $this->getContext($context, "type_billet")) == 2)) {
            // line 22
            echo "Demi-Journée
";
        }
        // line 24
        echo "<br />

<strong>Nombre de billet(s)</strong> : ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["nombre_billet"]) ? $context["nombre_billet"] : $this->getContext($context, "nombre_billet")), "html", null, true);
        echo " <br />

<strong>Référence de la Commande</strong> : ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["orderCode"]) ? $context["orderCode"] : $this->getContext($context, "orderCode")), "html", null, true);
        echo " <br />
</div>
<br/>
<div class=\"well col-md-6\" id=\"total2\">
<h3><strong>Le montant total de votre commande est de</strong> : ";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "€</h3>

<div>
\t<div style=\"text-align:right\">
\t<div class=\"col-md-4\"><a href=\"../\"><input type=\"button\" class=\"btn btn-danger\" value=\"Annuler\" /></a></div>
\t<div class=\"col-md-4\"><a href=\"javascript:history.go(-1)\"><input type=\"button\" class=\"btn btn-secondary\" value=\"< Etape 2\" /></a></div>
\t<div class=\"col-md-4\"><form action=\"paiement\" method=\"POST\">
                <script
                  src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
                  data-key=\"pk_test_JnHnHbzCKM5CxeKzQyI3YfWk\"
                  data-amount=";
        // line 42
        echo twig_escape_filter($this->env, ((isset($context["prix"]) ? $context["prix"] : $this->getContext($context, "prix")) * 100), "html", null, true);
        echo "
                  data-name=\"Musée du Louvre\"
                  data-label=\"Acheter\"
                  data-email=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "\"
                  data-description=\"Evitez les files d'attentes\"
                  data-locale=\"auto\"
                  data-currency=\"eur\">
                </script>
                </form>
                </div>
\t\t
\t\t
\t\t
\t\t
   
           
               
                
            
   
\t\t
\t
</div>
   
</div>

</div>
 <br />
 <div class=\"well col-md-7\" id=\"allTickets\">
 
<div class=\"well col-md-12\">
\t
\t";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")));
        foreach ($context['_seq'] as $context["_key"] => $context["tickets"]) {
            // line 75
            echo "
\t
\t <div class=\"well col-md-12\" id=\"ticketsResume\">
 
<strong>Nom</strong> : ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "name", array()), "html", null, true);
            echo " <br /> 
<strong>Prénom</strong> : ";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "firstName", array()), "html", null, true);
            echo " <br />
<strong>Date de naissance</strong> :<br/> ";
            // line 81
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["tickets"], "birthDate", array()), "d/m/Y"), "html", null, true);
            echo " <br />
<strong>Pays</strong> : ";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "pays", array()), "html", null, true);
            echo " <br />
<strong>Tarif réduit</strong> : 
";
            // line 84
            if (($this->getAttribute($context["tickets"], "lowRate", array()) == true)) {
                echo " 
Oui
";
            } elseif (($this->getAttribute(            // line 86
$context["tickets"], "lowRate", array()) == false)) {
                // line 87
                echo "Non
";
            }
            // line 89
            echo "<br />
<strong>Type de tarif</strong> : 
";
            // line 91
            if (($this->getAttribute($context["tickets"], "ticketsRate", array()) == 1)) {
                echo " 
Enfant
";
            } elseif (($this->getAttribute(            // line 93
$context["tickets"], "ticketsRate", array()) == 2)) {
                // line 94
                echo "Normal
";
            } elseif (($this->getAttribute(            // line 95
$context["tickets"], "ticketsRate", array()) == 3)) {
                // line 96
                echo "Senior
";
            } elseif (($this->getAttribute(            // line 97
$context["tickets"], "ticketsRate", array()) == 4)) {
                // line 98
                echo "Tarif réduit
";
            }
            // line 100
            echo "<br />
<strong>Prix du billet</strong> : ";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["tickets"], "prix", array()), "html", null, true);
            echo "€
<hr>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tickets'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "\t
</div>

<div class=\"well col-md-4\">
<strong>TOTAL</strong> : ";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "€
<div class=\"form-group text-right\">
    <form action=\"\" method=\"POST\">
                <script
                  src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
                  data-key=\"pk_test_JnHnHbzCKM5CxeKzQyI3YfWk\"
                  data-amount=";
        // line 115
        echo twig_escape_filter($this->env, ((isset($context["prix"]) ? $context["prix"] : $this->getContext($context, "prix")) * 100), "html", null, true);
        echo "
                  data-name=\"Musée du Louvre\"
                  data-label=\"Acheter\"
                  data-email=\"";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "\"
                  data-description=\"Evitez les files d'attentes\"
                  data-locale=\"auto\"
                  data-currency=\"eur\">
                </script>
                </form>
</div>
</div>

</div>
\t


";
        
        $__internal_64a249cc108659ed90c411e446a375b93cba17126568253717f2afbe40dea75f->leave($__internal_64a249cc108659ed90c411e446a375b93cba17126568253717f2afbe40dea75f_prof);

        
        $__internal_d4d71feaec0c3f7ddfcfabfd34ccad3bcba4a57671bcdff56398463cbbf3b592->leave($__internal_d4d71feaec0c3f7ddfcfabfd34ccad3bcba4a57671bcdff56398463cbbf3b592_prof);

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
        return array (  247 => 118,  241 => 115,  232 => 109,  226 => 105,  216 => 101,  213 => 100,  209 => 98,  207 => 97,  204 => 96,  202 => 95,  199 => 94,  197 => 93,  192 => 91,  188 => 89,  184 => 87,  182 => 86,  177 => 84,  172 => 82,  168 => 81,  164 => 80,  160 => 79,  154 => 75,  150 => 74,  118 => 45,  112 => 42,  99 => 32,  92 => 28,  87 => 26,  83 => 24,  79 => 22,  77 => 21,  71 => 18,  64 => 14,  59 => 12,  49 => 4,  40 => 3,  11 => 1,);
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

\t
\t
<div class=\"well col-md-6\" id=\"total1\">
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
</div>
<br/>
<div class=\"well col-md-6\" id=\"total2\">
<h3><strong>Le montant total de votre commande est de</strong> : {{total}}€</h3>

<div>
\t<div style=\"text-align:right\">
\t<div class=\"col-md-4\"><a href=\"../\"><input type=\"button\" class=\"btn btn-danger\" value=\"Annuler\" /></a></div>
\t<div class=\"col-md-4\"><a href=\"javascript:history.go(-1)\"><input type=\"button\" class=\"btn btn-secondary\" value=\"< Etape 2\" /></a></div>
\t<div class=\"col-md-4\"><form action=\"paiement\" method=\"POST\">
                <script
                  src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
                  data-key=\"pk_test_JnHnHbzCKM5CxeKzQyI3YfWk\"
                  data-amount={{ prix * 100}}
                  data-name=\"Musée du Louvre\"
                  data-label=\"Acheter\"
                  data-email=\"{{email}}\"
                  data-description=\"Evitez les files d'attentes\"
                  data-locale=\"auto\"
                  data-currency=\"eur\">
                </script>
                </form>
                </div>
\t\t
\t\t
\t\t
\t\t
   
           
               
                
            
   
\t\t
\t
</div>
   
</div>

</div>
 <br />
 <div class=\"well col-md-7\" id=\"allTickets\">
 
<div class=\"well col-md-12\">
\t
\t{% for tickets in nom %}

\t
\t <div class=\"well col-md-12\" id=\"ticketsResume\">
 
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
\t
</div>

<div class=\"well col-md-4\">
<strong>TOTAL</strong> : {{total}}€
<div class=\"form-group text-right\">
    <form action=\"\" method=\"POST\">
                <script
                  src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
                  data-key=\"pk_test_JnHnHbzCKM5CxeKzQyI3YfWk\"
                  data-amount={{ prix * 100}}
                  data-name=\"Musée du Louvre\"
                  data-label=\"Acheter\"
                  data-email=\"{{email}}\"
                  data-description=\"Evitez les files d'attentes\"
                  data-locale=\"auto\"
                  data-currency=\"eur\">
                </script>
                </form>
</div>
</div>

</div>
\t


{% endblock %}", "AppLouvreBundle:App:resume.html.twig", "C:\\wamp64\\www\\Billetterie\\src\\App\\LouvreBundle/Resources/views/App/resume.html.twig");
    }
}
