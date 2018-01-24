<?php

/* modular/default.html.twig */
class __TwigTemplate_4d23c70a76158104026692a1672b606f6017c0c818aca0bfb06c0fa0dd31aef3 extends Twig_Template
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
        echo "<div class=\"row ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "class", array());
        echo "\">
   <div class=\"large-12 columns\">
     ";
        // line 3
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "vimeo", array())) {
            // line 4
            echo "      <div class=\"rescue-column rescue-one-half rescue-column-first  rescue-all\">
         <div class=\"embed-vimeo\" style=\"text-align:center;\"><iframe src=\"";
            // line 5
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "vimeo", array()), "src", array());
            echo "\" width=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "vimeo", array()), "width", array());
            echo "\" height=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "vimeo", array()), "height", array());
            echo "\" frameborder=\"0\" webkitallowfullscreen=\"\" mozallowfullscreen=\"\" allowfullscreen=\"\"></iframe></div>
      </div>
      ";
        }
        // line 8
        echo "      ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "youtube", array())) {
            // line 9
            echo "      <div class=\"rescue-column rescue-one-half rescue-column-first  rescue-all\">
         <div class=\"embed-youtube\" style=\"text-align:center;\"><iframe src=\"";
            // line 10
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "youtube", array()), "src", array());
            echo "\" width=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "youtube", array()), "width", array());
            echo "\" height=\"";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "youtube", array()), "height", array());
            echo "\" frameborder=\"0\" webkitallowfullscreen=\"\" mozallowfullscreen=\"\" allowfullscreen=\"\"></iframe></div>
      </div>
      ";
        }
        // line 13
        echo "      <div class=\"rescue-column rescue-one-half rescue-column-last  rescue-all\">
         ";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
         <p>
           ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 17
            echo "           <a href=\"";
            echo $this->getAttribute($context["button"], "url", array());
            echo "\" class=\"";
            echo $this->getAttribute($context["button"], "class", array());
            echo "\">";
            echo $this->getAttribute($context["button"], "text", array());
            echo "</a>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "         </p>
      </div>
   </div>
   <!-- .large-12 -->
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 19,  68 => 17,  64 => 16,  59 => 14,  56 => 13,  46 => 10,  43 => 9,  40 => 8,  30 => 5,  27 => 4,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row {{ page.header.class }}\">
   <div class=\"large-12 columns\">
     {% if page.header.vimeo %}
      <div class=\"rescue-column rescue-one-half rescue-column-first  rescue-all\">
         <div class=\"embed-vimeo\" style=\"text-align:center;\"><iframe src=\"{{ page.header.vimeo.src }}\" width=\"{{ page.header.vimeo.width }}\" height=\"{{ page.header.vimeo.height }}\" frameborder=\"0\" webkitallowfullscreen=\"\" mozallowfullscreen=\"\" allowfullscreen=\"\"></iframe></div>
      </div>
      {% endif %}
      {% if page.header.youtube %}
      <div class=\"rescue-column rescue-one-half rescue-column-first  rescue-all\">
         <div class=\"embed-youtube\" style=\"text-align:center;\"><iframe src=\"{{ page.header.youtube.src }}\" width=\"{{ page.header.youtube.width }}\" height=\"{{ page.header.youtube.height }}\" frameborder=\"0\" webkitallowfullscreen=\"\" mozallowfullscreen=\"\" allowfullscreen=\"\"></iframe></div>
      </div>
      {% endif %}
      <div class=\"rescue-column rescue-one-half rescue-column-last  rescue-all\">
         {{ page.content }}
         <p>
           {% for button in page.header.buttons %}
           <a href=\"{{ button.url }}\" class=\"{{ button.class }}\">{{ button.text }}</a>
           {% endfor %}
         </p>
      </div>
   </div>
   <!-- .large-12 -->
</div>
", "modular/default.html.twig", "/Volumes/Dados/workspace/partner-wod.com/user/themes/gateway/templates/modular/default.html.twig");
    }
}
