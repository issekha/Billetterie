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
        $__internal_385870e78f2d93dfaaddeb5d13337c6e35fa054bdad5d411474513554e60c692 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_385870e78f2d93dfaaddeb5d13337c6e35fa054bdad5d411474513554e60c692->enter($__internal_385870e78f2d93dfaaddeb5d13337c6e35fa054bdad5d411474513554e60c692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:paiement.html.twig"));

        $__internal_dc0410c6ad800ad53bfc8419ae5883e1c5f5608eaafd3cf40a8abf4d522aa5c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc0410c6ad800ad53bfc8419ae5883e1c5f5608eaafd3cf40a8abf4d522aa5c3->enter($__internal_dc0410c6ad800ad53bfc8419ae5883e1c5f5608eaafd3cf40a8abf4d522aa5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:paiement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_385870e78f2d93dfaaddeb5d13337c6e35fa054bdad5d411474513554e60c692->leave($__internal_385870e78f2d93dfaaddeb5d13337c6e35fa054bdad5d411474513554e60c692_prof);

        
        $__internal_dc0410c6ad800ad53bfc8419ae5883e1c5f5608eaafd3cf40a8abf4d522aa5c3->leave($__internal_dc0410c6ad800ad53bfc8419ae5883e1c5f5608eaafd3cf40a8abf4d522aa5c3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8eade5426554d4ac9ad3ee0369fc40655f5e87c266ab440ef4fe17bfe11667e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eade5426554d4ac9ad3ee0369fc40655f5e87c266ab440ef4fe17bfe11667e9->enter($__internal_8eade5426554d4ac9ad3ee0369fc40655f5e87c266ab440ef4fe17bfe11667e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_efab68b629fa9b95ab0c9215e0c303c5bf2a943722cec41f7cb722449437b093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efab68b629fa9b95ab0c9215e0c303c5bf2a943722cec41f7cb722449437b093->enter($__internal_efab68b629fa9b95ab0c9215e0c303c5bf2a943722cec41f7cb722449437b093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                  data-name=\"Musée du Louvre\"
                  data-label=\"Acheter\"
                  data-email=\"";
        // line 24
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
</div>

</div>
";
        
        $__internal_efab68b629fa9b95ab0c9215e0c303c5bf2a943722cec41f7cb722449437b093->leave($__internal_efab68b629fa9b95ab0c9215e0c303c5bf2a943722cec41f7cb722449437b093_prof);

        
        $__internal_8eade5426554d4ac9ad3ee0369fc40655f5e87c266ab440ef4fe17bfe11667e9->leave($__internal_8eade5426554d4ac9ad3ee0369fc40655f5e87c266ab440ef4fe17bfe11667e9_prof);

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
</div>

</div>
{% endblock %}", "AppLouvreBundle:App:paiement.html.twig", "C:\\wamp64\\www\\Billetterie\\src\\App\\LouvreBundle/Resources/views/App/paiement.html.twig");
    }
}
