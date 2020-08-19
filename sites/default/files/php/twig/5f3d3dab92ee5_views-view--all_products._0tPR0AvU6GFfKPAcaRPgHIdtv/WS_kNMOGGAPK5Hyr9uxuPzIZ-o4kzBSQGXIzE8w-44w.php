<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/hestiag/templates/sections/All-products/views-view--all_products.html.twig */
class __TwigTemplate_f6b7b98ec4dee4c52975ba27e2d519690968cdcff6ad844b3faf1dd59247490b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 34, "if" => 101, "for" => 111];
        $filters = ["clean_class" => 36, "escape" => 100];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 34
        $context["classes"] = [0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 36
($context["id"] ?? null)))), 2 => ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 37
($context["id"] ?? null))), 3 => ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 38
($context["display_id"] ?? null))), 4 => ((        // line 39
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null)))) : ("")), 5 => "container", 6 => "all-product-grid"];
        // line 99
        echo "
<div ";
        // line 100
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
";
        // line 101
        if (($context["exposed"] ?? null)) {
            // line 102
            echo "    <div class=\"view-filters losfiltros d-none\">
      ";
            // line 103
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null)), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 106
        echo "\t<div class=\"row\">
\t\t<div class=\"col-xl-3 col-lg-4 col-md-5\">
\t\t\t<div class=\"sidebar-categories\">
\t\t\t\t<div class=\"head\">Categorías</div>
\t\t\t\t<ul class=\"main-categories filtro-de-categoria\">
        ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["exposed"] ?? null), "field_categoria_target_id", []), "#options", [], "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 112
            echo "          <li class=\"main-nav-list\">
\t\t\t\t\t\t<a href=\"\" aria-expanded=\"false\">";
            // line 113
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["item"]), "html", null, true);
            echo "</a>
\t\t\t\t\t</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t\t<div
\t\t\tclass=\"col-xl-9 col-lg-8 col-md-7\">
\t\t\t<!-- Start Filter Bar -->
\t\t\t";
        // line 125
        echo "\t\t\t<!-- End Filter Bar -->
\t\t\t<!-- Start Best Seller -->
\t\t\t<section class=\"lattest-product-area pb-40 category-list\">
\t\t\t\t<div
\t\t\t\t\tclass=\"row\">
\t\t\t\t\t<!-- single product -->
          ";
        // line 131
        if (($context["rows"] ?? null)) {
            // line 132
            echo "\t\t\t\t\t  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null)), "html", null, true);
            echo "
          ";
        } elseif (        // line 133
($context["empty"] ?? null)) {
            // line 134
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null)), "html", null, true);
            echo "
          ";
        }
        // line 136
        echo "
\t\t\t\t</div>
\t\t\t</section>

\t\t\t<!-- End Best Seller -->
\t\t\t<!-- Start Filter Bar -->
\t\t\t  ";
        // line 143
        echo "\t\t\t<!-- End Filter Bar -->
\t\t</div>
\t</div>
</div></div></div>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/hestiag/templates/sections/All-products/views-view--all_products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 143,  133 => 136,  127 => 134,  125 => 133,  120 => 132,  118 => 131,  110 => 125,  102 => 116,  93 => 113,  90 => 112,  86 => 111,  79 => 106,  73 => 103,  70 => 102,  68 => 101,  64 => 100,  61 => 99,  59 => 39,  58 => 38,  57 => 37,  56 => 36,  55 => 34,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hestiag/templates/sections/All-products/views-view--all_products.html.twig", "/app/themes/custom/hestiag/templates/sections/All-products/views-view--all_products.html.twig");
    }
}
