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

/* themes/custom/hestiag/templates/views/Vista-Prod-x-categoria/views-view-fields--productos_por_categoria.html.twig */
class __TwigTemplate_fe817bb14d2e48deb66f5770143065137e9b4cab85c7cd5bce368b5087d0868d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 59, "trim" => 59, "striptags" => 59, "render" => 59];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'trim', 'striptags', 'render'],
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
        echo "
<!-- single product -->
<div class=\"col-lg-4 col-md-6\">
\t<div class=\"single-product text-center\">
\t\t<a href=\"";
        // line 59
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "view_commerce_product", []), "content", []))))), "html", null, true);
        echo "\"><img class=\"img-fluid m-auto\" src=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "field_imagen_tumb", []), "content", []))))), "html", null, true);
        echo "\" alt=\"\"/></a>
\t\t<div class=\"product-details\">
\t\t\t<a href=\"";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "view_commerce_product", []), "content", []))))), "html", null, true);
        echo "\">
\t\t\t\t<h6 class=\"quick-add-to-cart-hide\">";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "title", []), "content", [])), "html", null, true);
        echo "</h6>
\t\t\t</a>
\t\t\t<div class=\"price quick-add-to-cart-hide\">
\t\t\t\t";
        // line 68
        echo "\t\t\t\t";
        // line 71
        echo "\t\t\t</div>
\t\t\t<div class=\"prd-bottom quick-add-to-cart-hide\">
\t\t\t\t<a href=\"\" class=\"social-info add-to-cart-special\">
\t\t\t\t\t<span class=\"ti-bag\"></span>
\t\t\t\t\t<p class=\"hover-text\">
\t\t\t\t\t\tAgregar\t
\t\t\t\t\t</p>
\t\t\t\t</a>

\t\t\t\t";
        // line 92
        echo "\t\t\t\t<a href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "view_commerce_product", []), "content", []))))), "html", null, true);
        echo "\" class=\"social-info quick-add-to-cart-hide\">
\t\t\t\t\t<span class=\"lnr lnr-move\"></span>
\t\t\t\t\t<p class=\"hover-text\">
\t\t\t\t\t\tVer más
\t\t\t\t\t</p>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"quick-add-to-cart\">
\t\t\t\t<div class=\"close-quick-add-to-cart\">
\t\t\t\t\t<p>Cerrar <span><i class=\"fas fa-times\"></i></span> </p>
\t\t\t\t</div>
\t\t\t\t";
        // line 103
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
        return "themes/custom/hestiag/templates/views/Vista-Prod-x-categoria/views-view-fields--productos_por_categoria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 103,  91 => 92,  80 => 71,  78 => 68,  72 => 62,  68 => 61,  61 => 59,  55 => 55,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hestiag/templates/views/Vista-Prod-x-categoria/views-view-fields--productos_por_categoria.html.twig", "/app/themes/custom/hestiag/templates/views/Vista-Prod-x-categoria/views-view-fields--productos_por_categoria.html.twig");
    }
}
