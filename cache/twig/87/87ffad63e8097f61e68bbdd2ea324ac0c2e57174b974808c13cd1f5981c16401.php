<?php

/* blog.html.twig */
class __TwigTemplate_939a64c80379b091190b40fa271068acecc39f5479163e8c6cddfce2cc85e613 extends Twig_Template
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
        // line 1
        $this->loadTemplate("blog.html.twig", "blog.html.twig", 1, "756943730")->display($context);
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

{% set collection = page.collection() %}
{% set the_base_url = page.url %}
{% set feed_url = the_base_url %}

{% if the_base_url == '/' %}
{% set the_base_url = '' %}
{% endif %}

{% if the_base_url == base_url_relative %}
{% set feed_url = the_base_url~'/'~page.slug %}
{% endif  %}

{% block content %}
<div class=\"blog_page_titles\">
  <div class=\"row blog_page_titles\">
    <div class=\"large-12 columns\">
      {{ page.content }}
    </div>
  </div>
</div>
<div class=\"row\">
  <div id=\"primary\" class=\"content-area\">
    <div class=\"large-{% if not page.header.fullwidth %}8{% else %}12{% endif %} columns\">
      <main id=\"main\" class=\"site-main\" role=\"main\">
        {% for child in collection %}
        <div class=\"row\">
          {% include 'partials/blog_item.html.twig' with {'page':child, 'truncate':true} %}
        </div>
        {% endfor %}

        {% if config.plugins.pagination.enabled and collection.params.pagination %}
        {% include 'partials/pagination.html.twig' with {'base_url': page.url, 'pagination':collection.params.pagination} %}
        {% endif %}
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

{% endembed %}
", "blog.html.twig", "/Volumes/Dados/workspace/partner-wod.com/user/themes/gateway/templates/blog.html.twig");
    }
}


/* blog.html.twig */
class __TwigTemplate_939a64c80379b091190b40fa271068acecc39f5479163e8c6cddfce2cc85e613_756943730 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "blog.html.twig", 1);
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
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 4
        $context["the_base_url"] = $this->getAttribute(($context["page"] ?? null), "url", array());
        // line 5
        $context["feed_url"] = ($context["the_base_url"] ?? null);
        // line 7
        if ((($context["the_base_url"] ?? null) == "/")) {
            // line 8
            $context["the_base_url"] = "";
        }
        // line 11
        if ((($context["the_base_url"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 12
            $context["feed_url"] = ((($context["the_base_url"] ?? null) . "/") . $this->getAttribute(($context["page"] ?? null), "slug", array()));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "<div class=\"blog_page_titles\">
  <div class=\"row blog_page_titles\">
    <div class=\"large-12 columns\">
      ";
        // line 19
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
    </div>
  </div>
</div>
<div class=\"row\">
  <div id=\"primary\" class=\"content-area\">
    <div class=\"large-";
        // line 25
        if ( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "fullwidth", array())) {
            echo "8";
        } else {
            echo "12";
        }
        echo " columns\">
      <main id=\"main\" class=\"site-main\" role=\"main\">
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 28
            echo "        <div class=\"row\">
          ";
            // line 29
            $this->loadTemplate("partials/blog_item.html.twig", "blog.html.twig", 29)->display(array_merge($context, array("page" => $context["child"], "truncate" => true)));
            // line 30
            echo "        </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
        ";
        // line 33
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))) {
            // line 34
            echo "        ";
            $this->loadTemplate("partials/pagination.html.twig", "blog.html.twig", 34)->display(array_merge($context, array("base_url" => $this->getAttribute(($context["page"] ?? null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))));
            // line 35
            echo "        ";
        }
        // line 36
        echo "      </main>
    </div>
    ";
        // line 38
        if ( !$this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "fullwidth", array())) {
            // line 39
            echo "    <div class=\"large-3 large-offset-1 columns\">
      <div id=\"secondary\" class=\"widget-area\">
        ";
            // line 41
            $this->loadTemplate("partials/sidebar.html.twig", "blog.html.twig", 41)->display($context);
            // line 42
            echo "      </div>
    </div>
    ";
        }
        // line 45
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 45,  223 => 42,  221 => 41,  217 => 39,  215 => 38,  211 => 36,  208 => 35,  205 => 34,  203 => 33,  200 => 32,  185 => 30,  183 => 29,  180 => 28,  163 => 27,  154 => 25,  145 => 19,  140 => 16,  137 => 15,  133 => 1,  130 => 12,  128 => 11,  125 => 8,  123 => 7,  121 => 5,  119 => 4,  117 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

{% set collection = page.collection() %}
{% set the_base_url = page.url %}
{% set feed_url = the_base_url %}

{% if the_base_url == '/' %}
{% set the_base_url = '' %}
{% endif %}

{% if the_base_url == base_url_relative %}
{% set feed_url = the_base_url~'/'~page.slug %}
{% endif  %}

{% block content %}
<div class=\"blog_page_titles\">
  <div class=\"row blog_page_titles\">
    <div class=\"large-12 columns\">
      {{ page.content }}
    </div>
  </div>
</div>
<div class=\"row\">
  <div id=\"primary\" class=\"content-area\">
    <div class=\"large-{% if not page.header.fullwidth %}8{% else %}12{% endif %} columns\">
      <main id=\"main\" class=\"site-main\" role=\"main\">
        {% for child in collection %}
        <div class=\"row\">
          {% include 'partials/blog_item.html.twig' with {'page':child, 'truncate':true} %}
        </div>
        {% endfor %}

        {% if config.plugins.pagination.enabled and collection.params.pagination %}
        {% include 'partials/pagination.html.twig' with {'base_url': page.url, 'pagination':collection.params.pagination} %}
        {% endif %}
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

{% endembed %}
", "blog.html.twig", "/Volumes/Dados/workspace/partner-wod.com/user/themes/gateway/templates/blog.html.twig");
    }
}
