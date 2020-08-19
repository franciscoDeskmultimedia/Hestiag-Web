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

/* themes/custom/hestiag/templates/sections/Icon-text/paragraph--icon-text-block.html.twig */
class __TwigTemplate_64968a7326a769a75dd57acb2a5f9fa4e6fbb43f2ba895826c45cba6ad79d491 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 42, "block" => 49, "if" => 60];
        $filters = ["clean_class" => 44, "trim" => 60, "striptags" => 60, "render" => 60, "escape" => 63];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'trim', 'striptags', 'render', 'escape'],
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
        echo "  ";
        // line 55
        echo "      <!-- start features Area -->
          <!-- single features -->
          <div class=\"col-lg-3 col-md-6 col-sm-6 single-features\">
            <div class=\"\" style=\"height:100%\">
              <div class=\"f-icon\">
                ";
        // line 60
        if ((twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_icon_image", [])))) != "")) {
            // line 61
            echo "                  ";
            // line 62
            echo "                  ";
            if (twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link", []), 0, [], "array"), "#url_title", [], "array"))))) {
                // line 63
                echo "                    <a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link", []), 0, [], "array"), "#url_title", [], "array"))))), "html", null, true);
                echo "\"><img style=\"width: 100%;max-width: 70px;\" src=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_icon_image", []))))), "html", null, true);
                echo "\" alt=\"\" /> </a>
                  ";
            } else {
                // line 65
                echo "                    <img style=\"width: 100%;max-width: 70px;\" src=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_icon_image", []))))), "html", null, true);
                echo "\" alt=\"\" />
                  ";
            }
            // line 67
            echo "                ";
        } else {
            // line 68
            echo "                  <div style=\"font-size:1.5em\">
                  ";
            // line 69
            if (twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link", []), 0, [], "array"), "#url_title", [], "array"))))) {
                // line 70
                echo "                    <a  href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link", []), 0, [], "array"), "#url_title", [], "array"))))), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_icon", [])), "html", null, true);
                echo "</a>
                   ";
            } else {
                // line 72
                echo "                    ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_icon", [])), "html", null, true);
                echo "
                   ";
            }
            // line 74
            echo "                  </div>
                ";
        }
        // line 75
        echo " 
              </div>
              <h6>
                ";
        // line 78
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_title", [])), "html", null, true);
        echo "
              </h6>
              <p>
                ";
        // line 81
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_description", [])), "html", null, true);
        echo "
              </p>
            </div>
          </div>

    <!-- end features Area -->
";
    }

    public function getTemplateName()
    {
        return "themes/custom/hestiag/templates/sections/Icon-text/paragraph--icon-text-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 81,  128 => 78,  123 => 75,  119 => 74,  113 => 72,  105 => 70,  103 => 69,  100 => 68,  97 => 67,  91 => 65,  83 => 63,  80 => 62,  78 => 61,  76 => 60,  69 => 55,  67 => 50,  61 => 49,  59 => 46,  58 => 45,  57 => 44,  56 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hestiag/templates/sections/Icon-text/paragraph--icon-text-block.html.twig", "/app/themes/custom/hestiag/templates/sections/Icon-text/paragraph--icon-text-block.html.twig");
    }
}
