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
        $__internal_82c5c757e907d333a1608737da49bb7710067aaa8a97b2a09d4775fc663dff42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82c5c757e907d333a1608737da49bb7710067aaa8a97b2a09d4775fc663dff42->enter($__internal_82c5c757e907d333a1608737da49bb7710067aaa8a97b2a09d4775fc663dff42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:paiement.html.twig"));

        $__internal_b1e4f3c93a814e9101054c87ee3683352cf6367c382cb90ece82ab9bb7e00bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1e4f3c93a814e9101054c87ee3683352cf6367c382cb90ece82ab9bb7e00bb9->enter($__internal_b1e4f3c93a814e9101054c87ee3683352cf6367c382cb90ece82ab9bb7e00bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppLouvreBundle:App:paiement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82c5c757e907d333a1608737da49bb7710067aaa8a97b2a09d4775fc663dff42->leave($__internal_82c5c757e907d333a1608737da49bb7710067aaa8a97b2a09d4775fc663dff42_prof);

        
        $__internal_b1e4f3c93a814e9101054c87ee3683352cf6367c382cb90ece82ab9bb7e00bb9->leave($__internal_b1e4f3c93a814e9101054c87ee3683352cf6367c382cb90ece82ab9bb7e00bb9_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_88cc7a0eb8cedff59f4103fa404d7aa88de621dfc183313adabee05a7d7956b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88cc7a0eb8cedff59f4103fa404d7aa88de621dfc183313adabee05a7d7956b5->enter($__internal_88cc7a0eb8cedff59f4103fa404d7aa88de621dfc183313adabee05a7d7956b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_11bfca90e451fb9b8628b3c7242f35ca097f7d22a585d5547ff2bb342de16085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11bfca90e451fb9b8628b3c7242f35ca097f7d22a585d5547ff2bb342de16085->enter($__internal_11bfca90e451fb9b8628b3c7242f35ca097f7d22a585d5547ff2bb342de16085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_11bfca90e451fb9b8628b3c7242f35ca097f7d22a585d5547ff2bb342de16085->leave($__internal_11bfca90e451fb9b8628b3c7242f35ca097f7d22a585d5547ff2bb342de16085_prof);

        
        $__internal_88cc7a0eb8cedff59f4103fa404d7aa88de621dfc183313adabee05a7d7956b5->leave($__internal_88cc7a0eb8cedff59f4103fa404d7aa88de621dfc183313adabee05a7d7956b5_prof);

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
