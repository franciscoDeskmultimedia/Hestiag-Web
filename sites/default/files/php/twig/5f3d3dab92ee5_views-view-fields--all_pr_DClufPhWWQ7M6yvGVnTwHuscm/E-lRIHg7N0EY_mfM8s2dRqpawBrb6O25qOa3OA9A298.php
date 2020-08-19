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

/* themes/custom/hestiag/templates/sections/All-products/views-view-fields--all_products.html.twig */
class __TwigTemplate_c9ec05a76fa9c44097ef2a3d31d02e6b82b0b94ac3a8848e07fce293722dfb8b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 57, "trim" => 57, "striptags" => 57, "render" => 57, "raw" => 59];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'trim', 'striptags', 'render', 'raw'],
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
        // line 55
        echo "<div class=\"col-lg-4 col-md-6\">
\t<div class=\"single-product\">
\t\t<a href=\"";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "view_commerce_product", []), "content", []))))), "html", null, true);
        echo "\"><img class=\"img-fluid\" src=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_imagen_tumb", []), "content", []))))), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t<div class=\"product-details\">
\t\t\t<a href=\"";
        // line 59
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "view_commerce_product", []), "content", []))))), "html", null, true);
        echo "\"><h6>";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "title", []), "content", [])))));
        echo "</h6></a>
\t\t\t<p>";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "body", []), "content", []))))), "html", null, true);
        echo "</p> ";
        // line 64
        echo "\t\t\t
      <div class=\"prd-bottom quick-add-to-cart-hide\">
        <a href=\"\" class=\"social-info add-to-cart-special\">
          <span class=\"ti-bag\"></span>
          <p class=\"hover-text\">
            Agregar
          </p>
        </a>

        ";
        // line 85
        echo "        <a href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "view_commerce_product", []), "content", []))))), "html", null, true);
        echo "\" class=\"social-info quick-add-to-cart-hide\">
          <span class=\"lnr lnr-move\"></span>
          <p class=\"hover-text\">
            Ver más
          </p>
        </a>
      </div>
      <div class=\"quick-add-to-cart\">
\t\t\t\t<div class=\"close-quick-add-to-cart\">
\t\t\t\t\t<p>Cerrar <span><i class=\"fas fa-times\"></i></span> </p>
\t\t\t\t</div>
\t\t\t\t";
        // line 96
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "variations_target_id", []), "content", [])), "html", null, true);
        echo "
\t\t\t</div>


\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/hestiag/templates/sections/All-products/views-view-fields--all_products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 96,  86 => 85,  75 => 64,  72 => 60,  66 => 59,  59 => 57,  55 => 55,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hestiag/templates/sections/All-products/views-view-fields--all_products.html.twig", "/app/themes/custom/hestiag/templates/sections/All-products/views-view-fields--all_products.html.twig");
    }
}
