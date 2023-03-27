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

/* modules/contrib/rate/templates/form-element--rating.html.twig */
class __TwigTemplate_4a4ee6954952f7c8cdb68637dc912d53dace393f1a97075c57e47bf789452493 extends \Twig\Template
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
        // line 49
        $context["classes"] = [0 => "form-item", 1 => "js-form-item", 2 => ("form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 52
($context["type"] ?? null), 52, $this->source))), 3 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 53
($context["type"] ?? null), 53, $this->source))), 4 => ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 54
($context["name"] ?? null), 54, $this->source))), 5 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 55
($context["name"] ?? null), 55, $this->source))), 6 => ((!twig_in_filter(        // line 56
($context["title_display"] ?? null), [0 => "after", 1 => "before"])) ? ("form-no-label") : ("")), 7 => (((        // line 57
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), 8 => ((        // line 58
($context["is_form_group"] ?? null)) ? ("form-group") : ("")), 9 => ((        // line 59
($context["is_checkbox"] ?? null)) ? ("checkbox") : ("")), 10 => ((        // line 60
($context["is_autocomplete"] ?? null)) ? ("form-autocomplete") : ("")), 11 => ((        // line 61
($context["has_error"] ?? null)) ? ("error has-error") : (""))];
        // line 64
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 64), 64, $this->source), "html", null, true);
        echo ">
  <label";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => twig_get_attribute($this->env, $this->source, ($context["label_attributes"] ?? null), "class", [], "any", false, false, true, 65)], "method", false, false, true, 65), 65, $this->source), "html", null, true);
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 65, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 65, $this->source), "html", null, true);
        echo "
  </label>
  ";
        // line 67
        if ( !twig_test_empty(($context["option_result"] ?? null))) {
            // line 68
            echo "    <div class=\"rating-option-result\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["option_result"] ?? null), 68, $this->source), "html", null, true);
            echo "</div>
  ";
        }
        // line 70
        echo "  ";
        if (($context["errors"] ?? null)) {
            // line 71
            echo "    <div class=\"form-item--error-message\">
      <strong>";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 72, $this->source), "html", null, true);
            echo "</strong>
    </div>
  ";
        }
        // line 75
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/rate/templates/form-element--rating.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 75,  78 => 72,  75 => 71,  72 => 70,  66 => 68,  64 => 67,  56 => 65,  51 => 64,  49 => 61,  48 => 60,  47 => 59,  46 => 58,  45 => 57,  44 => 56,  43 => 55,  42 => 54,  41 => 53,  40 => 52,  39 => 49,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for a form element.
 *
 * Available variables:
 * - attributes: HTML attributes for the containing element.
 * - errors: (optional) Any inline error messages to display for this form
 *   element; may not be set.
 * - required: The required marker, or empty if the associated form element is
 *   not required.
 * - type: The type of the element.
 * - name: The name of the element.
 * - label: A rendered label element.
 * - label_display: Label display setting. It can have these values:
 *   - before: The label is output before the element. This is the default.
 *     The label includes the #title and the required marker, if #required.
 *   - after: The label is output after the element. For example, this is used
 *     for radio and checkbox #type elements. If the #title is empty but the
 *     field is #required, the label will contain only the required marker.
 *   - invisible: Labels are critical for screen readers to enable them to
 *     properly navigate through forms but can be visually distracting. This
 *     property hides the label for everyone except screen readers.
 *   - attribute: Set the title attribute on the element to create a tooltip but
 *     output no label element. This is supported only for checkboxes and radios
 *     in \\Drupal\\Core\\Render\\Element\\CompositeFormElementTrait::preRenderCompositeFormElement().
 *     It is used where a visual label is not needed, such as a table of
 *     checkboxes where the row and column provide the context. The tooltip will
 *     include the title and required marker.
 * - description: (optional) A list of description properties containing:
 *    - content: A description of the form element, may not be set.
 *    - attributes: (optional) A list of HTML attributes to apply to the
 *      description content wrapper. Will only be set when description is set.
 * - description_display: Description display setting. It can have these values:
 *   - before: The description is output before the element.
 *   - after: The description is output after the element. This is the default
 *     value.
 *   - invisible: The description is output after the element, hidden visually
 *     but available to screen readers.
 * - disabled: True if the element is disabled.
 * - title_display: Title display setting.
 *
 * @ingroup templates
 *
 * @see template_preprocess_form_element()
 */
#}
{%
  set classes = [
    'form-item',
    'js-form-item',
    'form-type-' ~ type|clean_class,
    'js-form-type-' ~ type|clean_class,
    'form-item-' ~ name|clean_class,
    'js-form-item-' ~ name|clean_class,
    title_display not in ['after', 'before'] ? 'form-no-label',
    disabled == 'disabled' ? 'form-disabled',
    is_form_group ? 'form-group',
    is_checkbox ? 'checkbox',
    is_autocomplete ? 'form-autocomplete',
    has_error ? 'error has-error'
  ]
%}
<div{{ attributes.addClass(classes) }}>
  <label{{ attributes.addClass(label_attributes.class)}}>{{ children }}{{ title }}
  </label>
  {% if option_result is not empty %}
    <div class=\"rating-option-result\">{{ option_result }}</div>
  {% endif %}
  {% if errors %}
    <div class=\"form-item--error-message\">
      <strong>{{ errors }}</strong>
    </div>
  {% endif %}
</div>
", "modules/contrib/rate/templates/form-element--rating.html.twig", "/var/www/html/web/modules/contrib/rate/templates/form-element--rating.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 49, "if" => 67);
        static $filters = array("clean_class" => 52, "escape" => 64);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
