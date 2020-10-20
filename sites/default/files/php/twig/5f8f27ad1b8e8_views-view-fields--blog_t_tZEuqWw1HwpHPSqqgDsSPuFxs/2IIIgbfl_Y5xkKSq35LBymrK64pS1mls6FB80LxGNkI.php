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

/* themes/custom/blog_template/template/views/views-view-fields--blog_teaser.html.twig */
class __TwigTemplate_0ad35d9cd3bffd0c01b4d936d1f96840cd54a46915f7e7a88827b7b074d6201c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 6];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
        // line 1
        echo "<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-lg-8 col-md-10 mx-auto\">
      <div class=\"post-preview\">
            <h2 class=\"post-title\">
              ";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "title", []), "content", [])), "html", null, true);
        echo "
            </h2>
          <p class=\"post-meta\">Posted by
            ";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "uid", []), "content", [])), "html", null, true);
        echo " on
            ";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["fields"] ?? null), "created", []), "content", [])), "html", null, true);
        echo "
          </p>
       </div>
       <hr>
     </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/blog_template/template/views/views-view-fields--blog_teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 10,  68 => 9,  62 => 6,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-lg-8 col-md-10 mx-auto\">
      <div class=\"post-preview\">
            <h2 class=\"post-title\">
              {{ fields.title.content }}
            </h2>
          <p class=\"post-meta\">Posted by
            {{ fields.uid.content }} on
            {{ fields.created.content }}
          </p>
       </div>
       <hr>
     </div>
    </div>
  </div>
", "themes/custom/blog_template/template/views/views-view-fields--blog_teaser.html.twig", "/Applications/MAMP/htdocs/d8-bs-blog/themes/custom/blog_template/template/views/views-view-fields--blog_teaser.html.twig");
    }
}
