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

/* themes/custom/hestiag/templates/block--footer.html.twig */
class __TwigTemplate_99dddc0100b2e478fe788099b45ac6bc87476bb6f2243fa01918c95c500acae7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 33, "if" => 110];
        $filters = ["clean_class" => 35, "escape" => 70, "trim" => 70, "striptags" => 70, "render" => 70];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'trim', 'striptags', 'render'],
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
        // line 33
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 35
($context["configuration"] ?? null), "provider", [])))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 36
($context["plugin_id"] ?? null))))];
        // line 51
        echo "
<footer class=\"footer-area section_gap\">
      <div class=\"container\">
        <div class=\"row\">
          ";
        // line 65
        echo "          <div class=\"col-lg-7 col-md-6 col-sm-6\">
            <div class=\"single-footer-widget\">
              <h6>
                Contáctanos
              </h6>
              <p><span><i class=\"fas fa-map-marker-alt\"></i></span> ";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_direccion_1", []))))), "html", null, true);
        echo "</p>
              <p><span><i class=\"fas fa-map-marker-alt\"></i></span> ";
        // line 71
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_direccion_2", []))))), "html", null, true);
        echo "</p>
              <p><span><i class=\"fas fa-phone-alt\"></i></span> <a href=\"https://wa.me/593967486700\">";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_telefono", []))))), "html", null, true);
        echo "</a></p>
              <p><span><i class=\"fas fa-envelope-open\"></i></span> <a href=\"mailto:";
        // line 73
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_correo", []))))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_correo", []))))), "html", null, true);
        echo "</a></p>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-6 col-sm-6\">
            <div class=\"single-footer-widget mail-chimp\">
              <h6 class=\"mb-20\">
                Instragram Feed
              </h6>
              ";
        // line 91
        echo "              ";
        // line 93
        echo "              ";
        // line 94
        echo "              <!-- LightWidget WIDGET -->
              <script src=\"https://cdn.lightwidget.com/widgets/lightwidget.js\"></script><iframe src=\"//lightwidget.com/widgets/f0396ee5887d5349bf1ba60afd864920.html\" scrolling=\"no\" allowtransparency=\"true\" class=\"lightwidget-widget\" style=\"width:100%;border:0;overflow:hidden;\"></iframe>
              <!-- SnapWidget -->
";
        // line 99
        echo "            </div>
          </div>
          <div class=\"col-lg-2 col-md-6 col-sm-6\">
            <div class=\"single-footer-widget\">
              <h6>
                Síguenos en
              </h6>
              <p>
                Entérate más en :
              </p>
              <div class=\"footer-social d-flex align-items-center\">
                ";
        // line 110
        if (twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_facebook", []))))) {
            // line 111
            echo "                  <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_facebook", []))))), "html", null, true);
            echo "\"><i class=\"fa fa-facebook\"></i></a>
                ";
        }
        // line 113
        echo "                ";
        if (twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_instagram", []))))) {
            // line 114
            echo "                  <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_instagram", []))))), "html", null, true);
            echo "\"><i class=\"fa fa-instagram\"></i></a>
                ";
        }
        // line 116
        echo "                ";
        if (twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_linkedin", []))))) {
            // line 117
            echo "                  <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_linkedin", []))))), "html", null, true);
            echo "\"><i class=\"fa fa-linkedin\"></i></a>
                ";
        }
        // line 119
        echo "                ";
        if (twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_youtube", []))))) {
            // line 120
            echo "                  <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_youtube", []))))), "html", null, true);
            echo "\"><i class=\"fa fa-youtube\"></i></a>
                ";
        }
        // line 122
        echo "              </div>
            </div>
          </div>
        </div>
        ";
        // line 138
        echo "      </div>
    </footer>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/hestiag/templates/block--footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 138,  154 => 122,  148 => 120,  145 => 119,  139 => 117,  136 => 116,  130 => 114,  127 => 113,  121 => 111,  119 => 110,  106 => 99,  101 => 94,  99 => 93,  97 => 91,  84 => 73,  80 => 72,  76 => 71,  72 => 70,  65 => 65,  59 => 51,  57 => 36,  56 => 35,  55 => 33,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hestiag/templates/block--footer.html.twig", "/app/themes/custom/hestiag/templates/block--footer.html.twig");
    }
}
