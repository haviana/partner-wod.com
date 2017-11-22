<?php

/* widget.html.twig */
class __TwigTemplate_cc26c603fa06a2eeb33b3c8f5090227c0ce14e1573dd27e32942698221218de3 extends Twig_Template
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
        echo "<div class=\"widget HTML\">
    <h2 class=\"title\">";
        // line 2
        echo $this->getAttribute(($context["module"] ?? null), "title", array());
        echo "</h2>
    ";
        // line 3
        echo $this->getAttribute(($context["module"] ?? null), "content", array());
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"widget HTML\">
    <h2 class=\"title\">{{ module.title }}</h2>
    {{ module.content }}
</div>", "widget.html.twig", "/home/grav/www/html/user/themes/soraarticle/templates/widget.html.twig");
    }
}
