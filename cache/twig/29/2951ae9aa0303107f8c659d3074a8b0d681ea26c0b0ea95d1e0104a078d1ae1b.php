<?php

/* partials/taxonomylist.html.twig */
class __TwigTemplate_7cf6162623ca0895a10b96931a611fdeddcd0927a56207ac6847f04a14800d9b extends Twig_Template
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
        $context["taxlist"] = $this->getAttribute(($context["taxonomylist"] ?? null), "get", array(), "method");
        // line 2
        echo "
";
        // line 3
        if (($context["taxlist"] ?? null)) {
            // line 4
            echo "<div class=\"tagcloud\">
    ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["taxlist"] ?? null), ($context["taxonomy"] ?? null), array(), "array"));
            foreach ($context['_seq'] as $context["tax"] => $context["value"]) {
                // line 6
                echo "        <a href=\"";
                echo ($context["base_url"] ?? null);
                echo "/";
                echo ($context["taxonomy"] ?? null);
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
                echo twig_escape_filter($this->env, $context["tax"], "url");
                echo "\">";
                echo twig_capitalize_string_filter($this->env, $context["tax"]);
                echo " </a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tax'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/taxonomylist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  33 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set taxlist = taxonomylist.get() %}

{% if taxlist %}
<div class=\"tagcloud\">
    {% for tax,value in taxlist[taxonomy] %}
        <a href=\"{{ base_url }}/{{ taxonomy }}{{ config.system.param_sep }}{{ tax|e('url') }}\">{{ tax|capitalize }} </a>
    {% endfor %}
</div>
{% endif %}
", "partials/taxonomylist.html.twig", "/Volumes/Dados/workspace/partner-wod.com/user/themes/gateway/templates/partials/taxonomylist.html.twig");
    }
}
