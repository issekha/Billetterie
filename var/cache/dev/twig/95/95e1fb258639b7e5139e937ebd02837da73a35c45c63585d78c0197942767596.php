<?php

/* AppLouvreBundle:App:paiement.html.twig */
class __TwigTemplate_c1a10b6775a7df67d76d029d69d994cf4e427513ae38b8673b376d7c3902bd83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppLouvreBundle::layout.html.twig", "AppLouvreBundle:App:paiement.html.twig", 1);
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
        $__internal_d18fdd1c8f9ab0f0cabe3680394440a08e660d8d59b768b4d325afa19e7a6d1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d18fdd1c8f9ab0f0cabe3680394440a08e660d8d59b768b4d325afa19e7a6d1f->enter($__internal_d18fdd1c8f9ab0f0cabe3680394440a08e660d8d59b768b4d325afa19e7a6d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:paiement.html.twig"));

        $__internal_309ff54a29d5483d3eb32d4c7b21737815b2529477b41278c55d85e069bebd0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_309ff54a29d5483d3eb32d4c7b21737815b2529477b41278c55d85e069bebd0b->enter($__internal_309ff54a29d5483d3eb32d4c7b21737815b2529477b41278c55d85e069bebd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:paiement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d18fdd1c8f9ab0f0cabe3680394440a08e660d8d59b768b4d325afa19e7a6d1f->leave($__internal_d18fdd1c8f9ab0f0cabe3680394440a08e660d8d59b768b4d325afa19e7a6d1f_prof);

        
        $__internal_309ff54a29d5483d3eb32d4c7b21737815b2529477b41278c55d85e069bebd0b->leave($__internal_309ff54a29d5483d3eb32d4c7b21737815b2529477b41278c55d85e069bebd0b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_28773b666b403b8c7de658ba09c94858efa12ef243e6a8afbe2bc7a6ead9dab5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28773b666b403b8c7de658ba09c94858efa12ef243e6a8afbe2bc7a6ead9dab5->enter($__internal_28773b666b403b8c7de658ba09c94858efa12ef243e6a8afbe2bc7a6ead9dab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5f1a79fe432594d5037b8ae29843673496af6b2ce01dc992184bf2b057f9984b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f1a79fe432594d5037b8ae29843673496af6b2ce01dc992184bf2b057f9984b->enter($__internal_5f1a79fe432594d5037b8ae29843673496af6b2ce01dc992184bf2b057f9984b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
  
  <h1><strong>Etape 4:</strong> Procédez au paiement</h1>
  
  

  <hr>
<div class=\"well \">
<div class=\"nav-space-checkout\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-8 col-sm-12\">
               
                <form action=\"\" method=\"POST\">
                <script
                  src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
                  data-key=\"pk_test_JnHnHbzCKM5CxeKzQyI3YfWk\"
                  data-amount=";
        // line 21
        echo twig_escape_filter($this->env, ((isset($context["prix"]) ? $context["prix"] : $this->getContext($context, "prix")) * 100), "html", null, true);
        echo "
                  data-name=\"Musée du louvre\"
                  data-label=\"Acheter\"
                  data-email=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "\"
                  data-description=\"Billetterie du musée du Louvre\"
                  data-locale=\"auto\"
                  data-currency=\"eur\">
                </script>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
";
        
        $__internal_5f1a79fe432594d5037b8ae29843673496af6b2ce01dc992184bf2b057f9984b->leave($__internal_5f1a79fe432594d5037b8ae29843673496af6b2ce01dc992184bf2b057f9984b_prof);

        
        $__internal_28773b666b403b8c7de658ba09c94858efa12ef243e6a8afbe2bc7a6ead9dab5->leave($__internal_28773b666b403b8c7de658ba09c94858efa12ef243e6a8afbe2bc7a6ead9dab5_prof);

    }

    public function getTemplateName()
    {
        return "AppLouvreBundle:App:paiement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 24,  68 => 21,  49 => 4,  40 => 3,  11 => 1,);
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

  
  <h1><strong>Etape 4:</strong> Procédez au paiement</h1>
  
  

  <hr>
<div class=\"well \">
<div class=\"nav-space-checkout\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-8 col-sm-12\">
               
                <form action=\"\" method=\"POST\">
                <script
                  src=\"https://checkout.stripe.com/checkout.js\" class=\"stripe-button\"
                  data-key=\"pk_test_JnHnHbzCKM5CxeKzQyI3YfWk\"
                  data-amount={{ prix * 100}}
                  data-name=\"Musée du louvre\"
                  data-label=\"Acheter\"
                  data-email=\"{{email}}\"
                  data-description=\"Billetterie du musée du Louvre\"
                  data-locale=\"auto\"
                  data-currency=\"eur\">
                </script>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
{% endblock %}", "AppLouvreBundle:App:paiement.html.twig", "C:\\wamp64\\www\\Billetterie\\src\\App\\LouvreBundle/Resources/views/App/paiement.html.twig");
    }
}
