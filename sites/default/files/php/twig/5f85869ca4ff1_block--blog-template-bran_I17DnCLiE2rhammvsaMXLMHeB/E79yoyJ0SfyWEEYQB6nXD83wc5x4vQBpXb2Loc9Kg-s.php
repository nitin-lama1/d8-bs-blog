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

/* themes/custom/blog_template/template/block/block--blog-template-branding.html.twig */
class __TwigTemplate_e4f097e25c60ddef110026792c910316a6d8686379580fc3341361ee322b5edd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 19];
        $filters = ["t" => 20, "escape" => 21];
        $functions = ["path" => 20];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
                ['path']
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

    protected function doGetParent(array $context)
    {
        // line 1
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("block.html.twig", "themes/custom/blog_template/template/block/block--blog-template-branding.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        // line 17
        echo "<div class=\"navbar-brand d-flex align-items-center\">

  ";
        // line 19
        if (($context["site_logo"] ?? null)) {
            // line 20
            echo "  <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
            echo "\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\" rel=\"home\" class=\"site-logo d-block\">
    <img src=\"";
            // line 21
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null)), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\" />
  </a>
  ";
        }
        // line 24
        echo "
  <div>
    ";
        // line 26
        if (($context["site_name"] ?? null)) {
            // line 27
            echo "    <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
            echo "\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\" rel=\"home\" class=\"navbar-brand\">
      ";
            // line 28
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
            echo "
    </a>
    ";
        }
        // line 31
        echo "
    ";
        // line 32
        if (($context["site_slogan"] ?? null)) {
            // line 33
            echo "    <div class=\"site-slogan\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null)), "html", null, true);
            echo "</div>
    ";
        }
        // line 35
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/blog_template/template/block/block--blog-template-branding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 35,  112 => 33,  110 => 32,  107 => 31,  101 => 28,  94 => 27,  92 => 26,  88 => 24,  80 => 21,  73 => 20,  71 => 19,  67 => 17,  64 => 16,  54 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"block.html.twig\" %}
{#
/**
 * @file
 * Theme override for a branding block.
 *
 * Each branding element variable (logo, name, slogan) is only available if
 * enabled in the block configuration.
 *
 * Available variables:
 * - site_logo: Logo for site as defined in Appearance or theme settings.
 * - site_name: Name for site as defined in Site information settings.
 * - site_slogan: Slogan for site as defined in Site information settings.
 */
#}
{% block content %}
<div class=\"navbar-brand d-flex align-items-center\">

  {% if site_logo %}
  <a href=\"{{ path('<front>') }}\" title=\"{{ 'Home'|t }}\" rel=\"home\" class=\"site-logo d-block\">
    <img src=\"{{ site_logo }}\" alt=\"{{ 'Home'|t }}\" />
  </a>
  {% endif %}

  <div>
    {% if site_name %}
    <a href=\"{{ path('<front>') }}\" title=\"{{ 'Home'|t }}\" rel=\"home\" class=\"navbar-brand\">
      {{ site_name }}
    </a>
    {% endif %}

    {% if site_slogan %}
    <div class=\"site-slogan\">{{ site_slogan }}</div>
    {% endif %}
  </div>
</div>
{% endblock %}
", "themes/custom/blog_template/template/block/block--blog-template-branding.html.twig", "/Applications/MAMP/htdocs/d8-bs-blog/themes/custom/blog_template/template/block/block--blog-template-branding.html.twig");
    }
}
