<?php

/* partials/comments.html.twig */
class __TwigTemplate_003a7ae4d700f321184c84630a7eba2c6676adff5c4cac5ce1e30cdf3f77e9f5 extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "enable", array())) {
            // line 2
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "comments", array()))) {
                // line 3
                echo "<ol class=\"comment-list\">
  ";
                // line 4
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(array_reverse($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "comments", array())));
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
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 5
                    echo "  <li class=\"comment byuser bypostauthor thread-";
                    if (($this->getAttribute($context["loop"], "index", array()) % 2 == 0)) {
                        echo "even";
                    } else {
                        echo "odd";
                    }
                    echo " depth-1 parent\">
    <div id=\"comment-";
                    // line 6
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "\" class=\" clearfix\">
      <div class=\"comment-content\">
        <div class=\"comment-text\">
          <p class=\"comment-meta-header\">
            <cite class=\"fn\">";
                    // line 10
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "author", array()));
                    echo "</cite>
            <span class=\"comment-meta commentmetadata\">";
                    // line 11
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_COMMENTS.WRITTEN_ON");
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "date", array()));
                    echo "</span>
          </p>

          ";
                    // line 14
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "text", array()));
                    echo "
          <br />
        </div>
      </div>
    </div>
  </li>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "</ol>
";
            }
            // line 23
            echo "
<div class=\"comment-replybox-thread\">
  <form class=\"contact-form\" name=\"";
            // line 25
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "name", array());
            echo "\"
  action=\"";
            // line 26
            echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "action", array())) ? ((($context["base_url"] ?? null) . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "action", array()))) : ($this->getAttribute(($context["page"] ?? null), "url", array())));
            echo "\"
  method=\"";
            // line 27
            echo _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "method", array())), "POST");
            echo "\">
  ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "fields", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 29
                echo "
  ";
                // line 30
                $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
                // line 31
                echo "  ";
                if ($this->getAttribute($context["field"], "evaluateDefault", array())) {
                    // line 32
                    echo "  ";
                    $context["value"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->evaluateStringFunc($this->env, $context, $this->getAttribute($context["field"], "evaluateDefault", array()));
                    // line 33
                    echo "  ";
                }
                // line 34
                echo "  <div>
    ";
                // line 35
                $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), "partials/comments.html.twig", 35)->display($context);
                // line 36
                echo "  </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "
  <div class=\"buttons\">
    ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "buttons", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 41
                echo "    <button class=\"btn\" type=\"";
                echo (($this->getAttribute($context["button"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "type", array()), "submit")) : ("submit"));
                echo "\">";
                echo _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute($context["button"], "value", array())), "Submit");
                echo "</button>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "  </div>

  ";
            // line 45
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("form", "form-nonce");
            echo "
</form>

";
            // line 48
            if ($this->getAttribute(($context["form"] ?? null), "message", array())) {
                // line 49
                echo "<div class=\"alert\">";
                echo $this->getAttribute(($context["form"] ?? null), "message", array());
                echo "</div>
";
            }
            // line 51
            echo "</div>

";
        }
    }

    public function getTemplateName()
    {
        return "partials/comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 51,  194 => 49,  192 => 48,  186 => 45,  182 => 43,  171 => 41,  167 => 40,  163 => 38,  148 => 36,  146 => 35,  143 => 34,  140 => 33,  137 => 32,  134 => 31,  132 => 30,  129 => 29,  112 => 28,  108 => 27,  104 => 26,  100 => 25,  96 => 23,  92 => 21,  71 => 14,  63 => 11,  59 => 10,  52 => 6,  43 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if grav.twig.enable %}
{% if grav.twig.comments|length %}
<ol class=\"comment-list\">
  {% for comment in grav.twig.comments|array_reverse %}
  <li class=\"comment byuser bypostauthor thread-{% if loop.index is even %}even{% else %}odd{% endif %} depth-1 parent\">
    <div id=\"comment-{{ loop.index }}\" class=\" clearfix\">
      <div class=\"comment-content\">
        <div class=\"comment-text\">
          <p class=\"comment-meta-header\">
            <cite class=\"fn\">{{comment.author|e}}</cite>
            <span class=\"comment-meta commentmetadata\">{{'PLUGIN_COMMENTS.WRITTEN_ON'|t}} {{comment.date|e}}</span>
          </p>

          {{comment.text|e}}
          <br />
        </div>
      </div>
    </div>
  </li>
  {% endfor %}
</ol>
{% endif %}

<div class=\"comment-replybox-thread\">
  <form class=\"contact-form\" name=\"{{ grav.config.plugins.comments.form.name }}\"
  action=\"{{ grav.config.plugins.comments.form.action ?  base_url ~ grav.config.plugins.comments.form.action : page.url }}\"
  method=\"{{ grav.config.plugins.comments.form.method|upper|default('POST') }}\">
  {% for field in grav.config.plugins.comments.form.fields %}

  {% set value = form.value(field.name) %}
  {% if field.evaluateDefault %}
  {% set value = evaluate(field.evaluateDefault) %}
  {% endif %}
  <div>
    {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" %}
  </div>
  {% endfor %}

  <div class=\"buttons\">
    {% for button in grav.config.plugins.comments.form.buttons %}
    <button class=\"btn\" type=\"{{ button.type|default('submit') }}\">{{ button.value|t|default('Submit') }}</button>
    {% endfor %}
  </div>

  {{ nonce_field('form', 'form-nonce') }}
</form>

{% if form.message %}
<div class=\"alert\">{{ form.message }}</div>
{% endif %}
</div>

{% endif %}
", "partials/comments.html.twig", "/home/grav/grav-skeleton-gateway-site/user/themes/gateway/templates/partials/comments.html.twig");
    }
}
