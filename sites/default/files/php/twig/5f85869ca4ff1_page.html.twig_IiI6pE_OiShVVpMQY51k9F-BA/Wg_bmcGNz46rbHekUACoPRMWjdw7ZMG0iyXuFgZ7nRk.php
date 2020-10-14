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

/* themes/custom/blog_template/template/layout/page.html.twig */
class __TwigTemplate_ad4b3bd0fed8672e1f5e80d96e6e31dc3cd01948d6698b69f79c3b93ca0f779c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 46, "set" => 77];
        $filters = ["escape" => 49];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
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
        // line 45
        echo "
  ";
        // line 46
        if ((($this->getAttribute(($context["page"] ?? null), "nav_branding", []) || $this->getAttribute(($context["page"] ?? null), "nav_main", [])) || $this->getAttribute(($context["page"] ?? null), "nav_additional", []))) {
            // line 47
            echo "  <nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
    <div class=\"container\">
      ";
            // line 49
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "nav_branding", [])), "html", null, true);
            echo "
      <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        Menu
        <i class=\"fas fa-bars\"></i>
      </button>
      <div class=\"collapse navbar-collapse col-12 col-md-auto p-0 justify-content-end\" id=\"navbarResponsive\">
        ";
            // line 55
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "nav_main", [])), "html", null, true);
            echo "
        ";
            // line 56
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "nav_additional", [])), "html", null, true);
            echo "
      </div>
    </div>
  </nav>
  ";
        }
        // line 61
        echo "
  <header class=\"masthead\" style=\"background-image: url('";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["background_image"] ?? null)), "html", null, true);
        echo "')\">
    <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8 col-md-10 mx-auto\">
              ";
        // line 67
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
            </div>
          </div>
        </div>
  </header>

<main role=\"main\">
  <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 75
        echo "
  ";
        // line 77
        $context["sidebar_first_classes"] = ((($this->getAttribute(($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-12 col-sm-6 col-lg-3") : ("col-12 col-lg-3"));
        // line 79
        echo "
  ";
        // line 81
        $context["sidebar_second_classes"] = ((($this->getAttribute(($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-12 col-sm-6 col-lg-3") : ("col-12 col-lg-3"));
        // line 83
        echo "
  ";
        // line 85
        $context["content_classes"] = ((($this->getAttribute(($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-12 col-lg-6") : (((($this->getAttribute(($context["page"] ?? null), "sidebar_first", []) || $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-12 col-lg-9") : ("col-12"))));
        // line 87
        echo "

  <div class=\"";
        // line 89
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b4_top_container"] ?? null)), "html", null, true);
        echo "\">
    ";
        // line 90
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])) {
            // line 91
            echo "      ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "
    ";
        }
        // line 93
        echo "    <div class=\"row no-gutters\">
      ";
        // line 94
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 95
            echo "        <div class=\"order-2 order-lg-1 ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_classes"] ?? null)), "html", null, true);
            echo "\">
          ";
            // line 96
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 99
        echo "      <div class=\"order-1 order-lg-2 ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_classes"] ?? null)), "html", null, true);
        echo "\">
        ";
        // line 100
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
      </div>
      ";
        // line 102
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 103
            echo "        <div class=\"order-3 ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_classes"] ?? null)), "html", null, true);
            echo "\">
          ";
            // line 104
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 107
        echo "    </div>
  </div>

</main>

";
        // line 112
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 113
            echo "<footer class=\"mt-auto ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_classes"] ?? null)), "html", null, true);
            echo "\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-md-10 mx-auto\">
        <ul class=\"list-inline text-center\">
          <li class=\"list-inline-item\">
            <a href=\"https://twitter.com/\">
              <span class=\"fa-stack fa-lg\">
                <i class=\"fas fa-circle fa-stack-2x\"></i>
                <i class=\"fab fa-twitter fa-stack-1x fa-inverse\"></i>
              </span>
            </a>
          </li>
          <li class=\"list-inline-item\">
            <a href=\"https://www.facebook.com/\">
              <span class=\"fa-stack fa-lg\">
                <i class=\"fas fa-circle fa-stack-2x\"></i>
                <i class=\"fab fa-facebook-f fa-stack-1x fa-inverse\"></i>
              </span>
            </a>
          </li>
          <li class=\"list-inline-item\">
            <a href=\"https://github.com/\">
              <span class=\"fa-stack fa-lg\">
                <i class=\"fas fa-circle fa-stack-2x\"></i>
                <i class=\"fab fa-github fa-stack-1x fa-inverse\"></i>
              </span>
            </a>
          </li>
        </ul>
        <p class=\"copyright text-muted\">Copyright &copy; Your Website 2020</p>
      </div>
    </div>
  </div>
</footer>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/blog_template/template/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 113,  183 => 112,  176 => 107,  170 => 104,  165 => 103,  163 => 102,  158 => 100,  153 => 99,  147 => 96,  142 => 95,  140 => 94,  137 => 93,  131 => 91,  129 => 90,  125 => 89,  121 => 87,  119 => 85,  116 => 83,  114 => 81,  111 => 79,  109 => 77,  106 => 75,  96 => 67,  88 => 62,  85 => 61,  77 => 56,  73 => 55,  64 => 49,  60 => 47,  58 => 46,  55 => 45,);
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
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}

  {% if page.nav_branding or page.nav_main or page.nav_additional %}
  <nav class=\"navbar navbar-expand-lg navbar-light fixed-top\" id=\"mainNav\">
    <div class=\"container\">
      {{ page.nav_branding }}
      <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        Menu
        <i class=\"fas fa-bars\"></i>
      </button>
      <div class=\"collapse navbar-collapse col-12 col-md-auto p-0 justify-content-end\" id=\"navbarResponsive\">
        {{ page.nav_main }}
        {{ page.nav_additional }}
      </div>
    </div>
  </nav>
  {% endif %}

  <header class=\"masthead\" style=\"background-image: url('{{ background_image }}')\">
    <div class=\"overlay\"></div>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-8 col-md-10 mx-auto\">
              {{ page.header }}
            </div>
          </div>
        </div>
  </header>

<main role=\"main\">
  <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}

  {%
  set sidebar_first_classes = (page.sidebar_first and page.sidebar_second) ? 'col-12 col-sm-6 col-lg-3' : 'col-12 col-lg-3'
  %}

  {%
  set sidebar_second_classes = (page.sidebar_first and page.sidebar_second) ? 'col-12 col-sm-6 col-lg-3' : 'col-12 col-lg-3'
  %}

  {%
  set content_classes = (page.sidebar_first and page.sidebar_second) ? 'col-12 col-lg-6' : ((page.sidebar_first or page.sidebar_second) ? 'col-12 col-lg-9' : 'col-12' )
   %}


  <div class=\"{{ b4_top_container }}\">
    {% if page.breadcrumb %}
      {{ page.breadcrumb }}
    {% endif %}
    <div class=\"row no-gutters\">
      {% if page.sidebar_first %}
        <div class=\"order-2 order-lg-1 {{ sidebar_first_classes }}\">
          {{ page.sidebar_first }}
        </div>
      {% endif %}
      <div class=\"order-1 order-lg-2 {{ content_classes }}\">
        {{ page.content }}
      </div>
      {% if page.sidebar_second %}
        <div class=\"order-3 {{ sidebar_second_classes }}\">
          {{ page.sidebar_second }}
        </div>
      {% endif %}
    </div>
  </div>

</main>

{% if page.footer %}
<footer class=\"mt-auto {{ footer_classes }}\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-md-10 mx-auto\">
        <ul class=\"list-inline text-center\">
          <li class=\"list-inline-item\">
            <a href=\"https://twitter.com/\">
              <span class=\"fa-stack fa-lg\">
                <i class=\"fas fa-circle fa-stack-2x\"></i>
                <i class=\"fab fa-twitter fa-stack-1x fa-inverse\"></i>
              </span>
            </a>
          </li>
          <li class=\"list-inline-item\">
            <a href=\"https://www.facebook.com/\">
              <span class=\"fa-stack fa-lg\">
                <i class=\"fas fa-circle fa-stack-2x\"></i>
                <i class=\"fab fa-facebook-f fa-stack-1x fa-inverse\"></i>
              </span>
            </a>
          </li>
          <li class=\"list-inline-item\">
            <a href=\"https://github.com/\">
              <span class=\"fa-stack fa-lg\">
                <i class=\"fas fa-circle fa-stack-2x\"></i>
                <i class=\"fab fa-github fa-stack-1x fa-inverse\"></i>
              </span>
            </a>
          </li>
        </ul>
        <p class=\"copyright text-muted\">Copyright &copy; Your Website 2020</p>
      </div>
    </div>
  </div>
</footer>
{% endif %}
", "themes/custom/blog_template/template/layout/page.html.twig", "/Applications/MAMP/htdocs/d8-bs-blog/themes/custom/blog_template/template/layout/page.html.twig");
    }
}
