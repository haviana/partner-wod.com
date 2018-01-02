<?php

/* form.html.twig */
class __TwigTemplate_be6cb2b41481347eec5c31e05c0e7cccbb3bd382c8d2c4cf58b9b6e22af0142a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "form.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"row\">
  <div id=\"primary\" class=\"content-area\">
    <div class=\"large-";
        // line 6
        if ( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "fullwidth", array())) {
            echo "8";
        } else {
            echo "12";
        }
        echo " columns\">
      <main id=\"main\" class=\"site-main\" role=\"main\">
        <article class=\"page type-page status-publish hentry\">
          <header class=\"entry-header\">
            <h2 class=\"entry-title\">
              ";
        // line 11
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
        echo "
            </h2>
          </header>
          <div class=\"entry-content\">
            ";
        // line 15
        echo ($context["content"] ?? null);
        echo "
            ";
        // line 16
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "form", array()), "enabled", array())) {
            // line 17
            echo "            ";
            $this->loadTemplate("forms/form.html.twig", "form.html.twig", 17)->display($context);
            // line 18
            echo "            ";
        }
        // line 19
        echo "          </div>
        </article>
      </main>
    </div>
    ";
        // line 23
        if ( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "fullwidth", array())) {
            // line 24
            echo "    <div class=\"large-3 large-offset-1 columns\">
      <div id=\"secondary\" class=\"widget-area\">
        ";
            // line 26
            $this->loadTemplate("partials/sidebar.html.twig", "form.html.twig", 26)->display($context);
            // line 27
            echo "      </div>
    </div>
    ";
        }
        // line 30
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  80 => 27,  78 => 26,  74 => 24,  72 => 23,  66 => 19,  63 => 18,  60 => 17,  58 => 16,  54 => 15,  47 => 11,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}
<div class=\"row\">
  <div id=\"primary\" class=\"content-area\">
    <div class=\"large-{% if not page.header.fullwidth %}8{% else %}12{% endif %} columns\">
      <main id=\"main\" class=\"site-main\" role=\"main\">
        <article class=\"page type-page status-publish hentry\">
          <header class=\"entry-header\">
            <h2 class=\"entry-title\">
              {{ page.header.title }}
            </h2>
          </header>
          <div class=\"entry-content\">
            {{ content }}
            {% if config.plugins.form.enabled %}
            {% include \"forms/form.html.twig\" %}
            {% endif  %}
          </div>
        </article>
      </main>
    </div>
    {% if not page.header.fullwidth %}
    <div class=\"large-3 large-offset-1 columns\">
      <div id=\"secondary\" class=\"widget-area\">
        {% include 'partials/sidebar.html.twig' %}
      </div>
    </div>
    {% endif %}
  </div>
</div>
{% endblock %}
", "form.html.twig", "/home/grav/grav-skeleton-gateway-site/user/themes/gateway/templates/form.html.twig");
    }
}
