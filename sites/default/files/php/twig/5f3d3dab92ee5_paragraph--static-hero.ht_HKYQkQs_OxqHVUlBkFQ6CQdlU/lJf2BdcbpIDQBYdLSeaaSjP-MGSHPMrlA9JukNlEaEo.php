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

/* themes/custom/hestiag/templates/sections/Static-hero/paragraph--static-hero.html.twig */
class __TwigTemplate_c3d0eb9051398ee6e8d6e9f416ac11ad9195400b1fa18ad41481cb0517e58c76 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 42, "block" => 49];
        $filters = ["clean_class" => 44, "escape" => 52, "trim" => 52, "raw" => 52, "striptags" => 52, "render" => 52];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['clean_class', 'escape', 'trim', 'raw', 'striptags', 'render'],
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
        // line 42
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 44
($context["paragraph"] ?? null), "bundle", [])))), 2 => ((        // line 45
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("")), 3 => (( !$this->getAttribute(        // line 46
($context["paragraph"] ?? null), "isPublished", [], "method")) ? ("paragraph--unpublished") : (""))];
        // line 49
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 50
        echo "  
    ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 85
        echo "
";
    }

    // line 51
    public function block_content($context, array $blocks = [])
    {
        // line 52
        echo "    <section class=\"banner-area\" style=\"background-image:url('";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_background_image", []))))), "html", null, true);
        echo "')\" ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
      <div class=\"container\">
        <div class=\"row fullscreen align-items-center justify-content-start\">
          <div class=\"col-lg-12\">
            <div class=\"\">
              
              <div class=\"row single-slide align-items-center d-flex\" ";
        // line 58
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
\t\t\t\t\t\t\t<div class=\"col-lg-8 col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"banner-content\">
\t\t\t\t\t\t\t\t\t<h1 style='color:";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_color_titulo", []))))), "html", null, true);
        echo "'>";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_titulo", [])), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t\t\t\t<h2 style='color:";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_color_descripcion", []))))), "html", null, true);
        echo "' style='font-family: \"futuraBolditalic\";'>";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_description", [])), "html", null, true);
        echo "</h2>
\t\t\t\t\t\t\t\t\t<div class=\"add-bag d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<a class=\"add-btn\" href=\"";
        // line 64
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cta", []), 0, [], "array"), "#url_title", [], "array"))))), "html", null, true);
        echo "\"><span class=\"lnr lnr-cross\"></span></a>
\t\t\t\t\t\t\t\t\t\t<a href='";
        // line 65
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cta", []), 0, [], "array"), "#url_title", [], "array"))))), "html", null, true);
        echo "'><span class=\"add-text text-uppercase\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cta", []), 0, [], "array"), "#title", [], "array"))))), "html", null, true);
        echo "</span></a>
                    
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t\t\t\t<div class=\"banner-img\">
\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" style=\"max-height:300px;width:auto;margin:auto;\" src=\"";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_imagen_static_hero", []))))), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

            </div>
          </div>
        </div>
      </div>
    </section>

      ";
        // line 84
        echo "    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/hestiag/templates/sections/Static-hero/paragraph--static-hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 84,  128 => 72,  116 => 65,  112 => 64,  105 => 62,  99 => 61,  93 => 58,  81 => 52,  78 => 51,  73 => 85,  71 => 51,  68 => 50,  62 => 49,  60 => 46,  59 => 45,  58 => 44,  57 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hestiag/templates/sections/Static-hero/paragraph--static-hero.html.twig", "/app/themes/custom/hestiag/templates/sections/Static-hero/paragraph--static-hero.html.twig");
    }
}
