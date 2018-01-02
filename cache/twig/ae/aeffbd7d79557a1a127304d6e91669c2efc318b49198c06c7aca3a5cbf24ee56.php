<?php

/* forms/form.html.twig */
class __TwigTemplate_9bd2518c3b3cb2c7a8d6264263c35f20ab4c424c4d7114af038ac7089e1d2663 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/default/form.html.twig", "forms/form.html.twig", 1);
        $this->blocks = array(
            'form_classes' => array($this, 'block_form_classes'),
            'button_classes' => array($this, 'block_button_classes'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/default/form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_form_classes($context, array $blocks = array())
    {
        // line 3
        echo "  class=\"";
        echo $this->getAttribute(($context["form"] ?? null), "classes", array());
        echo " contact-form commentsblock\"
";
    }

    // line 6
    public function block_button_classes($context, array $blocks = array())
    {
        // line 7
        echo "  class=\"";
        echo (($this->getAttribute(($context["button"] ?? null), "classes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["button"] ?? null), "classes", array()), "button")) : ("button"));
        echo " pushbutton-wide\"
";
    }

    public function getTemplateName()
    {
        return "forms/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  39 => 6,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'forms/default/form.html.twig' %}
{% block form_classes %}
  class=\"{{ form.classes }} contact-form commentsblock\"
{% endblock %}

{% block button_classes %}
  class=\"{{ button.classes|default('button') }} pushbutton-wide\"
{% endblock %}
", "forms/form.html.twig", "/home/grav/grav-skeleton-gateway-site/user/themes/gateway/templates/forms/form.html.twig");
    }
}
