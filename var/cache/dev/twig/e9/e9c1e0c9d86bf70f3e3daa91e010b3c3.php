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

/* img/base.html.twig */
class __TwigTemplate_6e0aa3e3cebfee0c625fb58e816fc69b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "img/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "img/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to Symfony!</title>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
        integrity=\"sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi\" crossorigin=\"anonymous\">
    </head>
    <body>


        <nav class=\"navbar navbar-expand-lg navbar navbar-dark bg-dark\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand\" href=\"#\">Navbar</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\"
                    data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\"
                    aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\"
                                aria-expanded=\"false\">
                                Dropdown
                            </a>
                            <ul class=\"dropdown-menu\">
                                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\ImageController::menu"));
        echo "
                            </ul>
                        </li>
                    </ul>
                </div>
                <ul class=\"nav text-secondary\">
                    ";
        // line 33
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 34
            echo "                        <li class=\"nav-item\"><a href=\"#\" class=\"text-decoration-none text-secondary px-2\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34), "email", [], "any", false, false, false, 34), "html", null, true);
            echo "</a></li>
                    ";
        } else {
            // line 36
            echo "                        <li class=\"nav-item\"><a href=\"/login\" class=\"text-decoration-none text-secondary px-2\">Login</a></li>
                        <li class=\"nav-item\"><a href=\"/register\" class=\"text-decoration-none text-secondary px-2\">Sign up</a></li>
                    ";
        }
        // line 39
        echo "                </ul>
            </div>
        </nav>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "                </div>
            </div>

    </body>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3\" crossorigin=\"anonymous\"></script>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 46
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 47
        echo "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "img/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 47,  121 => 46,  105 => 48,  103 => 46,  94 => 39,  89 => 36,  83 => 34,  81 => 33,  72 => 27,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to Symfony!</title>
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
        integrity=\"sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi\" crossorigin=\"anonymous\">
    </head>
    <body>


        <nav class=\"navbar navbar-expand-lg navbar navbar-dark bg-dark\">
            <div class=\"container-fluid\">
                <a class=\"navbar-brand\" href=\"#\">Navbar</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\"
                    data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\"
                    aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\"
                                aria-expanded=\"false\">
                                Dropdown
                            </a>
                            <ul class=\"dropdown-menu\">
                                {{ render(controller( 'App\\\\Controller\\\\ImageController::menu' )) }}
                            </ul>
                        </li>
                    </ul>
                </div>
                <ul class=\"nav text-secondary\">
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                        <li class=\"nav-item\"><a href=\"#\" class=\"text-decoration-none text-secondary px-2\">{{ app.user.email }}</a></li>
                    {% else %}
                        <li class=\"nav-item\"><a href=\"/login\" class=\"text-decoration-none text-secondary px-2\">Login</a></li>
                        <li class=\"nav-item\"><a href=\"/register\" class=\"text-decoration-none text-secondary px-2\">Sign up</a></li>
                    {% endif %}
                </ul>
            </div>
        </nav>

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    {% block body %}
                    {% endblock %}
                </div>
            </div>

    </body>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3\" crossorigin=\"anonymous\"></script>

</html>", "img/base.html.twig", "/Users/asgarrrr/Desktop/ExoSym/symfony/templates/img/base.html.twig");
    }
}
