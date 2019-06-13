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

/* index.twig */
class __TwigTemplate_d36c188d17b9c39ffd24d2bec54299c7c688029d2436962106398f2e8fd67252 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
        <meta content=\"ie=edge\" http-equiv=\"X-UA-Compatible\">
        <title>Php Template by ÁngelCabrera</title>
    </head>
    <body>
        <h1>Vamos a comprobar la base de datos y las consultas</h1>
        <form action=\"/curriculum/\" method=\"post\">
            <label for=\"title\">Título:</label><br><br>
            <input id=\"tile\" name=\"title\" placeholder=\"Ingresa el Título\" type=\"text\"><br><br>
            <button type=\"submit\">Guardar</button>
        </form>

        <h2>Datos Guardados</h2>
        <ul>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tools"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tool"]) {
            // line 20
            echo "                <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tool"], "title", [], "any", false, false, false, 20), "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tool'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </ul>
    </body>
</html></body></html>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 22,  61 => 20,  57 => 19,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
        <meta content=\"ie=edge\" http-equiv=\"X-UA-Compatible\">
        <title>Php Template by ÁngelCabrera</title>
    </head>
    <body>
        <h1>Vamos a comprobar la base de datos y las consultas</h1>
        <form action=\"/curriculum/\" method=\"post\">
            <label for=\"title\">Título:</label><br><br>
            <input id=\"tile\" name=\"title\" placeholder=\"Ingresa el Título\" type=\"text\"><br><br>
            <button type=\"submit\">Guardar</button>
        </form>

        <h2>Datos Guardados</h2>
        <ul>
            {% for tool in tools %}
                <li>{{ tool.title }}</li>
            {% endfor %}
        </ul>
    </body>
</html></body></html>
", "index.twig", "C:\\xampp2\\htdocs\\curriculum\\resources\\views\\index.twig");
    }
}
