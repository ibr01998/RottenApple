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

/* themes/contrib/electra/templates/user/page--user--login.html.twig */
class __TwigTemplate_63a8592c51ed419626c018b0ad21a7bd2b7e743afac05ce49b0dc94a0784df8b extends \Twig\Template
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
        // line 1
        echo "<div class=\"d-md-flex flex-row-reverse electra-signin\">
    <!-- section-right -->
    <div class=\"section-right\">
        <div class=\"c-box\">
            <h2 class=\"title\">Welcome back!</h2>
            <h3 class=\"sub-title\">Sign in to continue.</h3>

            ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null), 8, $this->source), "html", null, true);
        echo "

            ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "

            <p class=\"mt-3 mb-0\">Forgot Password?
                <a href=\"/user/password\">Reset Now</a>
            </p>
            <p class=\"mt-3 mb-0\">Don't have an account?
                <a href=\"/user/register\">Create account</a>
            </p>
        </div>
    </div>
    <!-- section-left -->
    <div class=\"section-left\">
        <div class=\"c-box\">
            <h2 class=\"slim-logo\">
                <a href=\"/\">";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sitename"] ?? null), 24, $this->source), "html", null, true);
        echo "
                    <span>.</span></a>
            </h2>
            ";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electra"] ?? null), "user_page_intro", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "
            <p class=\"mt-4\">
                ";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["electra"] ?? null), "copyright_text", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "</p>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/electra/templates/user/page--user--login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 29,  76 => 27,  70 => 24,  53 => 10,  48 => 8,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"d-md-flex flex-row-reverse electra-signin\">
    <!-- section-right -->
    <div class=\"section-right\">
        <div class=\"c-box\">
            <h2 class=\"title\">Welcome back!</h2>
            <h3 class=\"sub-title\">Sign in to continue.</h3>

            {{ messages }}

            {{ page.content }}

            <p class=\"mt-3 mb-0\">Forgot Password?
                <a href=\"/user/password\">Reset Now</a>
            </p>
            <p class=\"mt-3 mb-0\">Don't have an account?
                <a href=\"/user/register\">Create account</a>
            </p>
        </div>
    </div>
    <!-- section-left -->
    <div class=\"section-left\">
        <div class=\"c-box\">
            <h2 class=\"slim-logo\">
                <a href=\"/\">{{ sitename }}
                    <span>.</span></a>
            </h2>
            {{ electra.user_page_intro }}
            <p class=\"mt-4\">
                {{ electra.copyright_text }}</p>
        </div>
    </div>
</div>
", "themes/contrib/electra/templates/user/page--user--login.html.twig", "/var/www/html/web/themes/contrib/electra/templates/user/page--user--login.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
