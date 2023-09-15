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

/* themes/tara/templates/layout/maintenance-page.html.twig */
class __TwigTemplate_d6b359a479989c3d73b6c84f6eb5a08b extends Template
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
        // line 11
        echo "<header class=\"header header-maintenance\" role=\"banner\">
  <div class=\"container\">
    <div class=\"site-branding\">
      ";
        // line 14
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 15
            echo "        <div class=\"site-name-slogan\">
      ";
            // line 16
            if (($context["site_name"] ?? null)) {
                // line 17
                echo "      <div class=\"site-name\">
        <a href=\"";
                // line 18
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" rel=\"home\"><strong>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 18, $this->source), "html", null, true);
                echo "</strong></a>
      </div>
    ";
            }
            // line 21
            echo "    ";
            if (($context["site_slogan"] ?? null)) {
                // line 22
                echo "      <div class=\"site-slogan\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 22, $this->source), "html", null, true);
                echo "</div>
    ";
            }
            // line 24
            echo "    </div> <!--/.site-name-slogan -->
    ";
        }
        // line 26
        echo "    </div> <!-- /.site-branding -->
  </div><!--/.container -->
</header>
<main role=\"main\">
  <div class=\"container\">
    <div class=\"maintenance-main\">
      ";
        // line 32
        if (($context["title"] ?? null)) {
            // line 33
            echo "        <h1 class=\"title\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 33, $this->source), "html", null, true);
            echo "</h1>
      ";
        }
        // line 35
        echo "      <div class=\"maintenance-icon\">";
        $this->loadTemplate("@tara/../images/maintenance.svg", "themes/tara/templates/layout/maintenance-page.html.twig", 35)->display($context);
        echo "</div>
    ";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        echo "
    </div>
  </div>
</main>";
    }

    public function getTemplateName()
    {
        return "themes/tara/templates/layout/maintenance-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  93 => 35,  87 => 33,  85 => 32,  77 => 26,  73 => 24,  67 => 22,  64 => 21,  54 => 18,  51 => 17,  49 => 16,  46 => 15,  44 => 14,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/tara/templates/layout/maintenance-page.html.twig", "/var/www/drupal/themes/tara/templates/layout/maintenance-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 14, "include" => 35);
        static $filters = array("t" => 18, "escape" => 18);
        static $functions = array("path" => 18);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'include'],
                ['t', 'escape'],
                ['path']
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
