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

/* @tara/../images/maintenance.svg */
class __TwigTemplate_a1a2b482283408df1e7dfd9bca00092e extends Template
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
        echo "<svg width=\"517\" height=\"374\" viewBox=\"0 0 517 374\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
<g clip-path=\"url(#clip0_228_2)\">
<rect width=\"491.802\" height=\"286.719\" rx=\"10.6192\" fill=\"#D9D9D9\"/>
<rect x=\"233.623\" y=\"286.719\" width=\"19.911\" height=\"66.3701\" fill=\"#D9D9D9\"/>
<rect x=\"112.829\" y=\"353.089\" width=\"265.48\" height=\"19.911\" rx=\"6.63701\" fill=\"#D9D9D9\"/>
<path d=\"M84.877 161.697V157.172L162.372 106.829V112.202L89.1194 159.717L89.9679 158.303V160.566L89.1194 159.152L162.372 206.667V212.04L84.877 161.697ZM409.51 161.697L332.015 212.04V206.667L405.267 159.152L404.419 160.566V158.303L405.267 159.717L332.015 112.202V106.829L409.51 157.172V161.697Z\" fill=\"#272223\"/>
<path d=\"M301.028 64.4046L254.361 237.778H249.553L296.22 64.4046H301.028Z\" fill=\"#F1426C\"/>
<g clip-path=\"url(#clip1_228_2)\">
<path d=\"M484.577 328.066V287.533C484.577 286.339 484.103 285.193 483.258 284.349C482.414 283.504 481.268 283.029 480.074 283.029H408.015C406.82 283.029 405.675 283.504 404.83 284.349C403.986 285.193 403.511 286.339 403.511 287.533V328.066C403.511 332.844 405.409 337.426 408.787 340.805C412.166 344.183 416.748 346.081 421.526 346.081H466.563C471.34 346.081 475.923 344.183 479.301 340.805C482.679 337.426 484.577 332.844 484.577 328.066ZM484.577 328.066H493.585C498.363 328.066 502.945 326.168 506.323 322.79C509.702 319.411 511.599 314.829 511.599 310.052C511.599 305.274 509.702 300.692 506.323 297.313C502.945 293.935 498.363 292.037 493.585 292.037H484.577M394.504 368.599H511.599M417.022 251.504V260.511M462.059 251.504V260.511M439.541 251.504V260.511\" stroke=\"#F1426C\" stroke-width=\"9.00737\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
</g>
</g>
<defs>
<clipPath id=\"clip0_228_2\">
<rect width=\"517\" height=\"374\" fill=\"white\"/>
</clipPath>
<clipPath id=\"clip1_228_2\">
<rect width=\"126.103\" height=\"126.103\" fill=\"white\" transform=\"translate(390 247)\"/>
</clipPath>
</defs>
</svg>
";
    }

    public function getTemplateName()
    {
        return "@tara/../images/maintenance.svg";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@tara/../images/maintenance.svg", "/var/www/drupal/themes/tara/images/maintenance.svg");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
