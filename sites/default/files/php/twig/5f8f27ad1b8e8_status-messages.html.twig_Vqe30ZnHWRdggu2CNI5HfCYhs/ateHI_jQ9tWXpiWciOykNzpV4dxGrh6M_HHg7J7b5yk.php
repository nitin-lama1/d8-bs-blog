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

/* themes/contrib/bootstrap4/templates/misc/status-messages.html.twig */
class __TwigTemplate_b225ac9880ff55b9abab33820e3c73cd75b061acd9d3c6658191aa47ee1e8f1d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 24, "for" => 25, "set" => 27, "if" => 38];
        $filters = ["escape" => 37, "without" => 37, "length" => 41, "first" => 48];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'for', 'set', 'if'],
                ['escape', 'without', 'length', 'first'],
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
        // line 24
        $this->displayBlock('messages', $context, $blocks);
    }

    public function block_messages($context, array $blocks = [])
    {
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 26
            echo "  ";
            // line 27
            $context["classes"] = [0 => "alert", 1 => ("alert-" . $this->sandbox->ensureToStringAllowed(            // line 29
$context["type"])), 2 => (((            // line 30
$context["type"] == "error")) ? ("alert-danger") : ("")), 3 => (((            // line 31
$context["type"] == "status")) ? ("alert-success") : ("")), 4 => "alert-dismissible", 5 => "fade", 6 => "show"];
            // line 37
            echo "  <div aria-label=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")), "html", null, true);
            echo "\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "aria-label"), "html", null, true);
            echo " role=\"alert\">
    ";
            // line 38
            if ($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")) {
                // line 39
                echo "      <h2 class=\"visually-hidden\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["status_headings"] ?? null), $context["type"], [], "array")), "html", null, true);
                echo "</h2>
    ";
            }
            // line 41
            echo "    ";
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 42
                echo "      <ul class=\"messages__list\">
        ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 44
                    echo "          <li class=\"messages__item\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"]), "html", null, true);
                    echo "</li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "      </ul>
    ";
            } else {
                // line 48
                echo "      ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"])), "html", null, true);
                echo "
    ";
            }
            // line 50
            echo "  </div>
  ";
            // line 52
            echo "  ";
            $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method");
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap4/templates/misc/status-messages.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  120 => 52,  117 => 50,  111 => 48,  107 => 46,  98 => 44,  94 => 43,  91 => 42,  88 => 41,  82 => 39,  80 => 38,  73 => 37,  71 => 31,  70 => 30,  69 => 29,  68 => 27,  66 => 26,  62 => 25,  56 => 24,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for status messages.
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
 */
#}
{% block messages %}
{% for type, messages in message_list %}
  {%
    set classes = [
      'alert',
      'alert-' ~ type,
      type == 'error' ? 'alert-danger',
      type == 'status' ? 'alert-success',
      'alert-dismissible',
      'fade',
      'show'
    ]
  %}
  <div aria-label=\"{{ status_headings[type] }}\"{{ attributes.addClass(classes)|without('aria-label') }} role=\"alert\">
    {% if status_headings[type] %}
      <h2 class=\"visually-hidden\">{{ status_headings[type] }}</h2>
    {% endif %}
    {% if messages|length > 1 %}
      <ul class=\"messages__list\">
        {% for message in messages %}
          <li class=\"messages__item\">{{ message }}</li>
        {% endfor %}
      </ul>
    {% else %}
      {{ messages|first }}
    {% endif %}
  </div>
  {# Remove type specific classes. #}
  {% set attributes = attributes.removeClass(classes) %}
{% endfor %}
{% endblock messages %}
", "themes/contrib/bootstrap4/templates/misc/status-messages.html.twig", "/Applications/MAMP/htdocs/d8-bs-blog/themes/contrib/bootstrap4/templates/misc/status-messages.html.twig");
    }
}
