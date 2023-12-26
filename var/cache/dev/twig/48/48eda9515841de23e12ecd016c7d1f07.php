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

/* changeLangue.html.twig */
class __TwigTemplate_afdf33d1bd1c135a789180f6a484b437 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "changeLangue.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "changeLangue.html.twig"));

        // line 1
        echo "<style>
\t.lstIconesLanguage{
\t\twidth:100%;
\t\ttext-align:center;
\t}
\t.iconeLanguage{
\t\tdisplay:inline-block;
\t\tpadding-top:6px;}
\t.flag
\t{
\t\tborder-radius:50%;
\t\twidth:40px;
\t\theight:40px;
\t\tpadding:3px;
\t\topacity: .8;
\t\tbackground-color:white;
\t\tborder: solid 1px gray;
\t}
\t.flag:hover{
\t\topacity: .9;
\t\tborder: solid 2px #3e4582;

\t}
</style>

<ul class=\"lstIconesLanguage\">
\t<li class=\"iconeLanguage\" id='frLang'>
\t\t<a href=\"#\">
\t\t\t<img class=\"flag\" value=\"fr_FR\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/fr.png"), "html", null, true);
        echo "\" alt=\"Version Française\">
\t\t</a>
\t</li>
\t<li class=\"iconeLanguage\" id='enLang'>
\t\t<a href=\"#\">
\t\t\t<img class=\"flag\" value=\"en_EN\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/en.png"), "html", null, true);
        echo "\" alt=\"English Version\">
\t\t</a>
\t</li>
\t<li class=\"iconeLanguage\" id='allLang'>
\t\t<a href=\"#\">
\t\t\t<img class=\"flag\" value=\"all_ALL\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/all.png"), "html", null, true);
        echo "\" alt=\"Deutsche Version\">
\t\t</a>
\t</li>
\t<li class=\"iconeLanguage\" id='esLang'>
\t\t<a href=\"#\">
\t\t\t<img class=\"flag\" value=\"es_ES\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/es.png"), "html", null, true);
        echo "\" alt=\"Versión española\">
\t\t</a>
\t</li>
</ul>


";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("langues");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "changeLangue.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  126 => 51,  107 => 50,  98 => 44,  90 => 39,  82 => 34,  74 => 29,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
\t.lstIconesLanguage{
\t\twidth:100%;
\t\ttext-align:center;
\t}
\t.iconeLanguage{
\t\tdisplay:inline-block;
\t\tpadding-top:6px;}
\t.flag
\t{
\t\tborder-radius:50%;
\t\twidth:40px;
\t\theight:40px;
\t\tpadding:3px;
\t\topacity: .8;
\t\tbackground-color:white;
\t\tborder: solid 1px gray;
\t}
\t.flag:hover{
\t\topacity: .9;
\t\tborder: solid 2px #3e4582;

\t}
</style>

<ul class=\"lstIconesLanguage\">
\t<li class=\"iconeLanguage\" id='frLang'>
\t\t<a href=\"#\">
\t\t\t<img class=\"flag\" value=\"fr_FR\" src=\"{{ asset('build/images/fr.png') }}\" alt=\"Version Française\">
\t\t</a>
\t</li>
\t<li class=\"iconeLanguage\" id='enLang'>
\t\t<a href=\"#\">
\t\t\t<img class=\"flag\" value=\"en_EN\" src=\"{{ asset('build/images/en.png') }}\" alt=\"English Version\">
\t\t</a>
\t</li>
\t<li class=\"iconeLanguage\" id='allLang'>
\t\t<a href=\"#\">
\t\t\t<img class=\"flag\" value=\"all_ALL\" src=\"{{ asset('build/images/all.png') }}\" alt=\"Deutsche Version\">
\t\t</a>
\t</li>
\t<li class=\"iconeLanguage\" id='esLang'>
\t\t<a href=\"#\">
\t\t\t<img class=\"flag\" value=\"es_ES\" src=\"{{ asset('build/images/es.png') }}\" alt=\"Versión española\">
\t\t</a>
\t</li>
</ul>


{% block javascripts %}
\t{{ encore_entry_script_tags('langues') }}
{% endblock %}
", "changeLangue.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/GestionExams/templates/changeLangue.html.twig");
    }
}
