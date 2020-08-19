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

/* themes/custom/hestiag/templates/navigation/block--system-menu-block.html.twig */
class __TwigTemplate_7192a6da1ef28fe8bf82fb5367d81564f0f4b930f2618c9d46313083e924f6e0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 35, "block" => 66];
        $filters = ["clean_class" => 39, "clean_id" => 42, "raw" => 48, "striptags" => 48, "render" => 48, "escape" => 67];
        $functions = ["drupal_block" => 48];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['clean_class', 'clean_id', 'raw', 'striptags', 'render', 'escape'],
                ['drupal_block']
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
        // line 35
        $context["classes"] = [0 => "block", 1 => "block-menu", 2 => "navigation", 3 => ("menu--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 39
($context["derivative_plugin_id"] ?? null))))];
        // line 42
        $context["heading_id"] = ($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "id", [])) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 43
        echo "<header class=\"header_area sticky-header\">
\t\t<div class=\"main_menu\">
\t\t\t<nav class=\"navbar navbar-expand-lg navbar-light main_box\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t\t\t<a class=\"navbar-brand logo_h\" href=\"/\"><img style=\"max-height:70px;width:auto\" src=\"";
        // line 48
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalBlock("system_branding_block", ["label" => "Branding", "use_site_name" => false]))));
        echo "\" alt=\"\"></a>
\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
\t\t\t\t\t aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t\t\t<div class=\"collapse navbar-collapse offset\" id=\"navbarSupportedContent\">
  ";
        // line 58
        echo "  ";
        // line 64
        echo "
  ";
        // line 66
        echo "  ";
        $this->displayBlock('content', $context, $blocks);
        // line 69
        echo "<ul class=\"nav navbar-nav navbar-right\">
\t<li class=\"nav-item cesta\">
\t\t<a href=\"/cart\" class=\"cart\">
\t\t\t<span class=\"ti-bag\"></span>
\t\t</a>
\t</li>
\t";
        // line 78
        echo "</ul>
<ul class=\"nav navbar-nav d-sm d-md-none d-lg-none d-xl-none\">
\t<li class=\"nav-item \">
\t\t<a href=\"/cart\" class=\"cart\">
\t\t\t<span class=\"ti-bag\"></span>
\t\t</a>
\t</li>
\t";
        // line 88
        echo "</ul>

    </div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>
\t\t";
        // line 103
        echo "\t</header>
";
    }

    // line 66
    public function block_content($context, array $blocks = [])
    {
        // line 67
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/hestiag/templates/navigation/block--system-menu-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 67,  118 => 66,  113 => 103,  105 => 88,  96 => 78,  88 => 69,  85 => 66,  82 => 64,  80 => 58,  68 => 48,  61 => 43,  59 => 42,  57 => 39,  56 => 35,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hestiag/templates/navigation/block--system-menu-block.html.twig", "/app/themes/custom/hestiag/templates/navigation/block--system-menu-block.html.twig");
    }
}
