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

/* themes/custom/hestiag/templates/sections/Componente-promo/paragraph--componente-promo.html.twig */
class __TwigTemplate_136d7eff8b464cfc5102aba350a4cc81e4d67981864c37fd2f1625ecca610e54 extends \Twig\Template
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
        $tags = ["set" => 42, "block" => 49, "if" => 61];
        $filters = ["clean_class" => 44, "trim" => 61, "striptags" => 61, "render" => 61, "escape" => 65, "length" => 67];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'trim', 'striptags', 'render', 'escape', 'length'],
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
        // line 51
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 185
        echo "  ";
    }

    // line 51
    public function block_content($context, array $blocks = [])
    {
        // line 52
        echo "          <!-- Start category Area -->
    <section class=\"category-area pt-5 pb-5\">
      <div class=\"container\">
        <div class=\"row justify-content-center\">
          <div class=\"col-lg-8 col-md-12\">
            <div class=\"row\">

              <div class=\"col-lg-8 col-md-8\">
                <div class=\"single-deal\">
                  ";
        // line 61
        if ((twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_texto_1", [])))) != "")) {
            // line 62
            echo "                    <div class=\"overlay\"></div>
                  ";
        }
        // line 64
        echo "                  ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link_1", []), 0, []), "#title", [], "array")) {
            // line 65
            echo "                    <div class=\"floating-text\"><p>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link_1", []), 0, []), "#title", [], "array")), "html", null, true);
            echo "</p></div>
                  ";
        }
        // line 67
        echo "                  <a ";
        if ((twig_length_filter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link_1", []), 0, [], "array"), "#url_title", [], "array"))))) > 0)) {
            echo " href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link_1", []), 0, [], "array"), "#url_title", [], "array"))))), "html", null, true);
            echo "\"";
        }
        // line 68
        echo "                    class=\"\"
                    target=\"_blank\">
                    <img class=\"img-fluid w-100\" src=\"";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_promo_image_1", []))))), "html", null, true);
        echo "\" alt=\"\" />
                    ";
        // line 71
        if ((twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_texto_1", [])))) != "")) {
            // line 72
            echo "                      <div class=\"deal-details\">
                        <h6 class=\"deal-title\">
                          ";
            // line 74
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_texto_1", []))))), "html", null, true);
            echo "
                        </h6>
                      </div>
                    ";
        }
        // line 78
        echo "                  </a>
                </div>
              </div>

              <div class=\"col-lg-4 col-md-4\">
                <div class=\"single-deal\">
                  ";
        // line 84
        if ((twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_texto_2", [])))) != "")) {
            // line 85
            echo "                    <div class=\"overlay\"></div>
                  ";
        }
        // line 87
        echo "                  ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link_2", []), 0, []), "#title", [], "array")) {
            // line 88
            echo "                    <div class=\"floating-text\"><p>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link_2", []), 0, []), "#title", [], "array")), "html", null, true);
            echo "</p></div>
                  ";
        }
        // line 90
        echo "                  <a ";
        if ((twig_length_filter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link_2", []), 0, [], "array"), "#url_title", [], "array"))))) > 0)) {
            echo " href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link_2", []), 0, [], "array"), "#url_title", [], "array"))))), "html", null, true);
            echo "\"";
        }
        // line 91
        echo "                    class=\"\"
                    target=\"_blank\">
                    <img class=\"img-fluid w-100\" src=\"";
        // line 93
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_promo_image_2", []))))), "html", null, true);
        echo "\" alt=\"\" />
                    ";
        // line 94
        if ((twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_texto_2", [])))) != "")) {
            // line 95
            echo "                      <div class=\"deal-details\">
                        <h6 class=\"deal-title\">
                          ";
            // line 97
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_texto_2", []))))), "html", null, true);
            echo "
                        </h6>
                      </div>
                    ";
        }
        // line 101
        echo "                  </a>
                </div>
              </div>

              <div class=\"col-lg-4 col-md-4\">
                <div class=\"single-deal\">
                  ";
        // line 107
        if ((twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_texto_3", [])))) != "")) {
            // line 108
            echo "                    <div class=\"overlay\"></div>
                  ";
        }
        // line 110
        echo "                  ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link_3", []), 0, []), "#title", [], "array")) {
            // line 111
            echo "                    <div class=\"floating-text\"><p>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link_3", []), 0, []), "#title", [], "array")), "html", null, true);
            echo "</p></div>
                  ";
        }
        // line 113
        echo "                  ";
        // line 116
        echo "                  <a ";
        if ((twig_length_filter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link_3", []), 0, [], "array"), "#url_title", [], "array"))))) > 0)) {
            echo "href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link_3", []), 0, [], "array"), "#url_title", [], "array"))))), "html", null, true);
            echo "\"";
        }
        // line 117
        echo "                    class=\"\"
                    target=\"_blank\">
                    <img class=\"img-fluid w-100\" src=\"";
        // line 119
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_promo_image_3", []))))), "html", null, true);
        echo "\" alt=\"\" />
                    ";
        // line 120
        if ((twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_texto_3", [])))) != "")) {
            // line 121
            echo "                      <div class=\"deal-details\">
                        <h6 class=\"deal-title\">
                          ";
            // line 123
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_texto_3", []))))), "html", null, true);
            echo "
                        </h6>
                      </div>
                    ";
        }
        // line 127
        echo "                  </a>
                </div>
              </div>

              <div class=\"col-lg-8 col-md-8\">
                <div class=\"single-deal\">
                  ";
        // line 133
        if ((twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_texto_4", [])))) != "")) {
            // line 134
            echo "                    <div class=\"overlay\"></div>
                  ";
        }
        // line 136
        echo "                  ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link_4", []), 0, []), "#title", [], "array")) {
            // line 137
            echo "                    <div class=\"floating-text\"><p>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link_4", []), 0, []), "#title", [], "array")), "html", null, true);
            echo "</p></div>
                  ";
        }
        // line 139
        echo "                  <a ";
        if ((twig_length_filter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link_4", []), 0, [], "array"), "#url_title", [], "array"))))) > 0)) {
            echo "href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link_4", []), 0, [], "array"), "#url_title", [], "array"))))), "html", null, true);
            echo "\"";
        }
        // line 140
        echo "                    class=\"\"
                    target=\"_blank\">
                    <img class=\"img-fluid w-100\" src=\"";
        // line 142
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_promo_image_4", []))))), "html", null, true);
        echo "\" alt=\"\" />
                    ";
        // line 143
        if ((twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_texto_4", [])))) != "")) {
            // line 144
            echo "                      <div class=\"deal-details\">
                        <h6 class=\"deal-title\">
                          ";
            // line 146
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_texto_4", []))))), "html", null, true);
            echo "
                        </h6>
                      </div>
                    ";
        }
        // line 150
        echo "                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-4 col-md-6\">
            <div class=\"single-deal\">
              ";
        // line 158
        if ((twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_texto_5", [])))) != "")) {
            // line 159
            echo "                <div class=\"overlay\"></div>
              ";
        }
        // line 161
        echo "              ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link_5", []), 0, []), "#title", [], "array")) {
            // line 162
            echo "                <div class=\"floating-text\"><p>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link_5", []), 0, []), "#title", [], "array")), "html", null, true);
            echo "</p></div>
              ";
        }
        // line 164
        echo "              <a ";
        if ((twig_length_filter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link_5", []), 0, [], "array"), "#url_title", [], "array"))))) > 0)) {
            echo " href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link_5", []), 0, [], "array"), "#url_title", [], "array"))))), "html", null, true);
            echo "\"";
        }
        // line 165
        echo "                class=\"\"
                target=\"_blank\">
                <img class=\"img-fluid w-100\" src=\"";
        // line 167
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_promo_image_5", []))))), "html", null, true);
        echo "\" alt=\"\" />
                ";
        // line 168
        if ((twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_texto_5", [])))) != "")) {
            // line 169
            echo "                  <div class=\"deal-details\">
                    <h6 class=\"deal-title\">
                      ";
            // line 171
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_texto_5", []))))), "html", null, true);
            echo "
                    </h6>
                  </div>
                ";
        }
        // line 175
        echo "              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End category Area -->
      ";
        // line 183
        echo "      
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/hestiag/templates/sections/Componente-promo/paragraph--componente-promo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 183,  342 => 175,  335 => 171,  331 => 169,  329 => 168,  325 => 167,  321 => 165,  314 => 164,  308 => 162,  305 => 161,  301 => 159,  299 => 158,  289 => 150,  282 => 146,  278 => 144,  276 => 143,  272 => 142,  268 => 140,  261 => 139,  255 => 137,  252 => 136,  248 => 134,  246 => 133,  238 => 127,  231 => 123,  227 => 121,  225 => 120,  221 => 119,  217 => 117,  210 => 116,  208 => 113,  202 => 111,  199 => 110,  195 => 108,  193 => 107,  185 => 101,  178 => 97,  174 => 95,  172 => 94,  168 => 93,  164 => 91,  157 => 90,  151 => 88,  148 => 87,  144 => 85,  142 => 84,  134 => 78,  127 => 74,  123 => 72,  121 => 71,  117 => 70,  113 => 68,  106 => 67,  100 => 65,  97 => 64,  93 => 62,  91 => 61,  80 => 52,  77 => 51,  73 => 185,  70 => 51,  68 => 50,  62 => 49,  60 => 46,  59 => 45,  58 => 44,  57 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hestiag/templates/sections/Componente-promo/paragraph--componente-promo.html.twig", "/app/themes/custom/hestiag/templates/sections/Componente-promo/paragraph--componente-promo.html.twig");
    }
}
