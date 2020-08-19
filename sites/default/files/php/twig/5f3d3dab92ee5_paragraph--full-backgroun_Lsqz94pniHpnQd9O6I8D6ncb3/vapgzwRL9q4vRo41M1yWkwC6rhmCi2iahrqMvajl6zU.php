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

/* themes/custom/hestiag/templates/sections/Full-slider/paragraph--full-background-slider.html.twig */
class __TwigTemplate_e60f1c410283f56a096669302200a4692b0d5fc2d5ffd6ec3e1894a254467234 extends \Twig\Template
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
        $tags = ["set" => 41, "block" => 47];
        $filters = ["clean_class" => 43, "escape" => 57];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
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
        // line 41
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 43
($context["paragraph"] ?? null), "bundle", [])))), 2 => ((        // line 44
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("")), 3 => (( !$this->getAttribute(        // line 45
($context["paragraph"] ?? null), "isPublished", [], "method")) ? ("paragraph--unpublished") : (""))];
        // line 47
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 48
        echo "  <!-- start banner Area -->
  ";
        // line 50
        echo "
  ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 64
        echo "  ";
        // line 65
        echo "
  <!-- End banner Area -->
";
    }

    // line 51
    public function block_content($context, array $blocks = [])
    {
        // line 52
        echo "    <section class=\"fullScreen-slider pt-5 pb-5\">
      <div class=\"container-fluid pl-0 pr-0\">
        <div class=\"row-fluid  align-items-center justify-content-start\" >
          <div class=\"\" style=\"height:100%\">
            <div class=\"active-banner-slider owl-carousel\" >
              ";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_full_background_slider_sli", [])), "html", null, true);
        echo "
            </div>
          </div>
        </div>
      </div>
    </section>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/hestiag/templates/sections/Full-slider/paragraph--full-background-slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 57,  87 => 52,  84 => 51,  78 => 65,  76 => 64,  74 => 51,  71 => 50,  68 => 48,  62 => 47,  60 => 45,  59 => 44,  58 => 43,  57 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hestiag/templates/sections/Full-slider/paragraph--full-background-slider.html.twig", "/app/themes/custom/hestiag/templates/sections/Full-slider/paragraph--full-background-slider.html.twig");
    }
}
