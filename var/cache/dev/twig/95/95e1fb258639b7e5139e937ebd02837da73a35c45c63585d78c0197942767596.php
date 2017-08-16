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
        $__internal_273c5969d287a0edd9deac0ef7cc945ff6d900c625b1e509533bc579409829f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_273c5969d287a0edd9deac0ef7cc945ff6d900c625b1e509533bc579409829f3->enter($__internal_273c5969d287a0edd9deac0ef7cc945ff6d900c625b1e509533bc579409829f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:paiement.html.twig"));

        $__internal_a0c571cb28b5e7b4a0b1172105cff6484872fea4c96f57858e84c3f5d10f5aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0c571cb28b5e7b4a0b1172105cff6484872fea4c96f57858e84c3f5d10f5aa2->enter($__internal_a0c571cb28b5e7b4a0b1172105cff6484872fea4c96f57858e84c3f5d10f5aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:paiement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_273c5969d287a0edd9deac0ef7cc945ff6d900c625b1e509533bc579409829f3->leave($__internal_273c5969d287a0edd9deac0ef7cc945ff6d900c625b1e509533bc579409829f3_prof);

        
        $__internal_a0c571cb28b5e7b4a0b1172105cff6484872fea4c96f57858e84c3f5d10f5aa2->leave($__internal_a0c571cb28b5e7b4a0b1172105cff6484872fea4c96f57858e84c3f5d10f5aa2_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_ae9241a6b38511dae096c70fc31cb75e034ef77127f107b8b282b1ed41944bbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae9241a6b38511dae096c70fc31cb75e034ef77127f107b8b282b1ed41944bbc->enter($__internal_ae9241a6b38511dae096c70fc31cb75e034ef77127f107b8b282b1ed41944bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e6bcf81d3491f7a290c0751e0d72d7421edda4691551b7da16d8aac05f823af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6bcf81d3491f7a290c0751e0d72d7421edda4691551b7da16d8aac05f823af8->enter($__internal_e6bcf81d3491f7a290c0751e0d72d7421edda4691551b7da16d8aac05f823af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_e6bcf81d3491f7a290c0751e0d72d7421edda4691551b7da16d8aac05f823af8->leave($__internal_e6bcf81d3491f7a290c0751e0d72d7421edda4691551b7da16d8aac05f823af8_prof);

        
        $__internal_ae9241a6b38511dae096c70fc31cb75e034ef77127f107b8b282b1ed41944bbc->leave($__internal_ae9241a6b38511dae096c70fc31cb75e034ef77127f107b8b282b1ed41944bbc_prof);

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
