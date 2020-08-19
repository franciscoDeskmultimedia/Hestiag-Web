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

/* themes/custom/hestiag/templates/navigation/menu--main.html.twig */
class __TwigTemplate_4209722d08722020446bf4f75b2a7eb88db677584805bf32cca81f692bcf779f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 21, "macro" => 29, "if" => 31, "for" => 39, "set" => 41];
        $filters = ["escape" => 50, "join" => 55, "clean_class" => 56];
        $functions = ["link" => 59];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape', 'join', 'clean_class'],
                ['link']
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
        // line 21
        $context["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0));
        echo "

";
    }

    // line 29
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 30
            echo "  ";
            $context["menus"] = $this;
            // line 31
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 32
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 33
                    echo "      ";
                    // line 34
                    echo "      <ul class=\"nav navbar-nav menu_nav ml-auto\">
    ";
                } else {
                    // line 36
                    echo "      ";
                    // line 37
                    echo "      <ul class=\"dropdown-menu\">
    ";
                }
                // line 39
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 40
                    echo "      ";
                    // line 41
                    $context["classes"] = [0 => "nav-item", 1 => (($this->getAttribute(                    // line 43
$context["item"], "is_expanded", [])) ? ("menu-item--expanded") : ("")), 2 => (($this->getAttribute(                    // line 44
$context["item"], "is_collapsed", [])) ? ("menu-item--collapsed") : ("")), 3 => (($this->getAttribute(                    // line 45
$context["item"], "in_active_trail", [])) ? ("menu-item--active-trail") : ("")), 4 => (($this->getAttribute(                    // line 46
$context["item"], "in_active_trail", [])) ? ("active") : ("")), 5 => (($this->getAttribute(                    // line 47
$context["item"], "below", [])) ? ("submenu dropdown") : (""))];
                    // line 50
                    echo "      <li";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
                    echo ">
        ";
                    // line 52
                    $context["link_classes"] = [0 => "nav-link", 1 => (($this->getAttribute(                    // line 54
$context["item"], "in_active_trail", [])) ? ("active") : ("")), 2 => (($this->getAttribute($this->getAttribute($this->getAttribute(                    // line 55
$context["item"], "url", []), "getOption", [0 => "attributes"], "method"), "class", [])) ? (twig_join_filter($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "url", []), "getOption", [0 => "attributes"], "method"), "class", [])), "")) : ("")), 3 => ("nav-link-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(                    // line 56
$context["item"], "url", []), "toString", [], "method"))))];
                    // line 59
                    echo "        ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", [])), ["class" => ($context["link_classes"] ?? null)]), "html", null, true);
                    echo "
        ";
                    // line 60
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 61
                        echo "            ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)));
                        echo "
        ";
                    }
                    // line 63
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "    </ul>
    
  ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/custom/hestiag/templates/navigation/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 65,  139 => 63,  133 => 61,  131 => 60,  126 => 59,  124 => 56,  123 => 55,  122 => 54,  121 => 52,  116 => 50,  114 => 47,  113 => 46,  112 => 45,  111 => 44,  110 => 43,  109 => 41,  107 => 40,  102 => 39,  98 => 37,  96 => 36,  92 => 34,  90 => 33,  87 => 32,  84 => 31,  81 => 30,  67 => 29,  60 => 27,  57 => 22,  55 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/hestiag/templates/navigation/menu--main.html.twig", "/app/themes/custom/hestiag/templates/navigation/menu--main.html.twig");
    }
}
