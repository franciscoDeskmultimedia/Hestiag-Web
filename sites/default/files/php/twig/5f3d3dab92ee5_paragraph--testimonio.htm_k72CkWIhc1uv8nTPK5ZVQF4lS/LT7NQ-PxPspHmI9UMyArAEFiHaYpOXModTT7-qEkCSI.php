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

/* themes/custom/hestiag/templates/sections/Testimonios/paragraph--testimonio.html.twig */
class __TwigTemplate_481dae6e96874ade0fa2743a8cb45cf1b8439e81ff6944c33c471cdcb4f8fb87 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 42, "block" => 49, "if" => 57];
        $filters = ["clean_class" => 44, "trim" => 57, "striptags" => 57, "render" => 57, "escape" => 58];
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
        echo " <!-- single exclusive carousel -->
\t\t\t\t\t\t<div class=\"single-exclusive-slider pr-5 pl-5 col-md-6 m-auto\">
\t\t\t\t\t\t";
        // line 57
        if (twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_imagen_testimonio", []))))) {
            // line 58
            echo "\t\t\t\t\t\t\t<img class=\"img-fluid\" style=\"max-width:100px;margin: 20px auto;border-radius: 70px;\" src=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_imagen_testimonio", []))))), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t\t\t";
        } else {
            // line 60
            echo "\t\t\t\t\t\t\t<div class='testimonio-iniciales'><h4>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_iniciales", []))))), "html", null, true);
            echo "</h4></div>
\t\t\t\t\t\t";
        }
        // line 62
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<h5>";
        // line 65
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_nombre_", []))))), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t\t\t\t";
        // line 68
        echo "\t\t\t\t\t\t\t\t\t<h6 class=\"\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_cargo", []))))), "html", null, true);
        echo "</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p>";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_testimonio", []))))), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t";
        // line 75
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/hestiag/templates/sections/Testimonios/paragraph--testimonio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 75,  103 => 70,  97 => 68,  92 => 65,  87 => 62,  81 => 60,  75 => 58,  73 => 57,  69 => 55,  67 => 50,  61 => 49,  59 => 46,  58 => 45,  57 => 44,  56 => 42,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hestiag/templates/sections/Testimonios/paragraph--testimonio.html.twig", "/app/themes/custom/hestiag/templates/sections/Testimonios/paragraph--testimonio.html.twig");
    }
}
