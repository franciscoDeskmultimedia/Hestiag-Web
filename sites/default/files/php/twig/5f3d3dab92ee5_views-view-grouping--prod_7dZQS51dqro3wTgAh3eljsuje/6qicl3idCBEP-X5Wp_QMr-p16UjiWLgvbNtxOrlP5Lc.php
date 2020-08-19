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

/* themes/custom/hestiag/templates/views/Vista-Prod-x-categoria/views-view-grouping--productos_por_categoria.html.twig */
class __TwigTemplate_a5eed0a566264869fd9e37c5034a178ac4c6162404f68feafc2ece08caeb061b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 27];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
        // line 21
        echo "<div class=\"single-product-slider\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-6 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<h1>
\t\t\t\t\t\t";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "
\t\t\t\t\t</h1>
\t\t\t\t\t<p>";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), 0, [], "array"), "#title", [], "array")), "html", null, true);
        echo "</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"row justify-content-center\">";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "</div>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/hestiag/templates/views/Vista-Prod-x-categoria/views-view-grouping--productos_por_categoria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 33,  68 => 29,  63 => 27,  55 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hestiag/templates/views/Vista-Prod-x-categoria/views-view-grouping--productos_por_categoria.html.twig", "/app/themes/custom/hestiag/templates/views/Vista-Prod-x-categoria/views-view-grouping--productos_por_categoria.html.twig");
    }
}
