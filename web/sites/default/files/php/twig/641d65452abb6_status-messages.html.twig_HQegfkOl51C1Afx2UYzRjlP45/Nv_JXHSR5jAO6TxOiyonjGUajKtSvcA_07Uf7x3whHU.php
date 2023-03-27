<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/contrib/electra/templates/system/status-messages.html.twig */
class __TwigTemplate_c6bfb2887f029e64fed24389049d0a5b814513559ee43e846c836dad1450cbe8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        $context["classes"] = ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "offsetGet", [0 => "class"], "method", true, true, true, 28)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "offsetGet", [0 => "class"], "method", false, false, true, 28), 28, $this->source), [])) : ([]));
        // line 30
        $context["status_heading"] = ["status" => t("Status message"), "error" => t("Error message"), "warning" => t("Warning message"), "info" => t("Informative message")];
        // line 38
        $context["status_classes"] = ["status" => "success", "error" => "danger", "warning" => "warning", "info" => "info"];
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 46
            echo "  ";
            // line 47
            $context["message_classes"] = [0 => "alert", 1 => ("alert-" . $this->sandbox->ensureToStringAllowed((($__internal_compile_0 =             // line 49
($context["status_classes"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["type"]] ?? null) : null), 49, $this->source)), 2 => "alert-dismissible"];
            // line 53
            echo "  ";
            // line 54
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", [0 => "class", 1 => ($context["classes"] ?? null)], "method", false, false, true, 54), "addClass", [0 => ($context["message_classes"] ?? null)], "method", false, false, true, 54), "setAttribute", [0 => "role", 1 => "alert"], "method", false, false, true, 54), 54, $this->source), "html", null, true);
            echo ">
    <button role=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Close"));
            echo "\"><span aria-hidden=\"true\">&times;</span></button>
    ";
            // line 56
            if ((($__internal_compile_1 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["type"]] ?? null) : null)) {
                // line 57
                echo "      <h4 class=\"sr-only\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["type"]] ?? null) : null), 57, $this->source), "html", null, true);
                echo "</h4>
    ";
            }
            // line 59
            echo "    ";
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 60
                echo "      <ul class=\"item-list item-list--messages\">
        ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 62
                    echo "          <li class=\"item item--message\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 62, $this->source), "html", null, true);
                    echo "</li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "      </ul>
    ";
            } else {
                // line 66
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"], 66, $this->source)), "html", null, true);
                echo "
    ";
            }
            // line 68
            echo "  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/contrib/electra/templates/system/status-messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 68,  96 => 66,  92 => 64,  83 => 62,  79 => 61,  76 => 60,  73 => 59,  67 => 57,  65 => 56,  61 => 55,  56 => 54,  54 => 53,  52 => 49,  51 => 47,  49 => 46,  45 => 45,  43 => 38,  41 => 30,  39 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for status messages.
 *
 * Displays status, error, and warning messages, grouped by type.
 *
 * An invisible heading identifies the messages for assistive technology.
 * Sighted users see a colored box. See http://www.w3.org/TR/WCAG-TECHS/H69.html
 * for info.
 *
 * Add an ARIA label to the contentinfo area so that assistive technology
 * user agents will better describe this landmark.
 *
 * Available variables:
 * - message_list: List of messages to be displayed, grouped by type.
 * - status_headings: List of all status types.
 * - display: (optional) May have a value of 'status' or 'error' when only
 *   displaying messages of that specific type.
 * - attributes: HTML attributes for the element, including:
 *   - class: HTML classes.
 *
 * @ingroup templates
 *
 * @see template_preprocess_status_messages()
 */
#}
{% set classes = attributes.offsetGet('class')|default({}) %}
{%
  set status_heading = {
    'status': 'Status message'|t,
    'error': 'Error message'|t,
    'warning': 'Warning message'|t,
    'info': 'Informative message'|t,
  }
%}
{%
  set status_classes = {
    'status': 'success',
    'error': 'danger',
    'warning': 'warning',
    'info': 'info',
  }
%}
{% for type, messages in message_list %}
  {%
    set message_classes = [
      'alert',
      'alert-' ~ status_classes[type],
      'alert-dismissible',
    ]
  %}
  {# Reset the attribute classes and then add the message specific classes. #}
  <div{{ attributes.setAttribute('class', classes).addClass(message_classes).setAttribute('role', 'alert') }}>
    <button role=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"{{ 'Close'|t }}\"><span aria-hidden=\"true\">&times;</span></button>
    {% if status_headings[type] %}
      <h4 class=\"sr-only\">{{ status_headings[type] }}</h4>
    {% endif %}
    {% if messages|length > 1 %}
      <ul class=\"item-list item-list--messages\">
        {% for message in messages %}
          <li class=\"item item--message\">{{ message }}</li>
        {% endfor %}
      </ul>
    {% else %}
      {{ messages|first }}
    {% endif %}
  </div>
{% endfor %}
", "themes/contrib/electra/templates/system/status-messages.html.twig", "/var/www/html/web/themes/contrib/electra/templates/system/status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 28, "for" => 45, "if" => 56);
        static $filters = array("default" => 28, "t" => 31, "escape" => 54, "length" => 59, "first" => 66);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['default', 't', 'escape', 'length', 'first'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
