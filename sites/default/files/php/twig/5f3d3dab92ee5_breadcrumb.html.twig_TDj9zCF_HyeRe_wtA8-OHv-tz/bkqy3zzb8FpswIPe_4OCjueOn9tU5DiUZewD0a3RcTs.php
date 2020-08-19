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

/* themes/custom/hestiag/templates/breadcrumb.html.twig */
class __TwigTemplate_4ca4d8df819b2c77e0d22e8aa15ff202b7f855ddafc6a58feb9cc0ed1b27d496 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 12, "for" => 15];
        $filters = ["escape" => 10, "length" => 19];
        $functions = ["attach_library" => 10];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'length'],
                ['attach_library']
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
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("bootstrap_barrio/breadcrumb"), "html", null, true);
        echo "

";
        // line 12
        if (($context["breadcrumb"] ?? null)) {
            // line 13
            echo "  ";
            // line 15
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumb"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 16
                echo "      ";
                if ($this->getAttribute($context["item"], "url", [])) {
                    // line 17
                    echo "        ";
                    // line 18
                    echo "        <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "text", [])), "html", null, true);
                    echo "
          ";
                    // line 19
                    if (($this->getAttribute($context["loop"], "index", []) < twig_length_filter($this->env, ($context["breadcrumb"] ?? null)))) {
                        // line 20
                        echo "            <span class=\"lnr lnr-arrow-right\"></span>
          ";
                    }
                    // line 22
                    echo "        </a>
          ";
                    // line 24
                    echo "        ";
                    // line 25
                    echo "      ";
                } else {
                    // line 26
                    echo "        ";
                    // line 27
                    echo "          ";
                    // line 28
                    echo "          <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), "html", null, true);
                    echo "\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "text", [])), "html", null, true);
                    echo "
          ";
                    // line 29
                    if (($this->getAttribute($context["loop"], "index", []) < twig_length_filter($this->env, ($context["breadcrumb"] ?? null)))) {
                        // line 30
                        echo "            <span class=\"lnr lnr-arrow-right\"></span>
          ";
                    }
                    // line 32
                    echo "        </a>
        ";
                    // line 34
                    echo "      ";
                }
                // line 35
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "    ";
            // line 37
            echo "  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/hestiag/templates/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 37,  145 => 36,  131 => 35,  128 => 34,  125 => 32,  121 => 30,  119 => 29,  112 => 28,  110 => 27,  108 => 26,  105 => 25,  103 => 24,  100 => 22,  96 => 20,  94 => 19,  87 => 18,  85 => 17,  82 => 16,  64 => 15,  62 => 13,  60 => 12,  55 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hestiag/templates/breadcrumb.html.twig", "/app/themes/custom/hestiag/templates/breadcrumb.html.twig");
    }
}
