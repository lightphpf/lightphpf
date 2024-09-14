<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* auth/register.twig */
class __TwigTemplate_8239586fb6c69b662ca6e7c7e3140436 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    ";
        // line 4
        yield from         $this->loadTemplate("/partials/head.twig", "auth/register.twig", 4)->unwrap()->yield($context);
        // line 5
        yield "  </head>
  <body>
    ";
        // line 7
        yield from         $this->loadTemplate("/partials/nav.twig", "auth/register.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "
    <div class=\"container my-5\">
      <h1>";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</h1>

      <form method=\"POST\" action=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["app_url"] ?? null), "html", null, true);
        yield "/register\">
        <div class=\"form-group mb-2\">
          <label for=\"name\">Full Name</label>
          <input
            type=\"text\"
            class=\"form-control\"
            id=\"name\"
            name=\"name\"
            placeholder=\"Enter your full name\"
            required
          />
        </div>
        <div class=\"form-group mb-2\">
          <label for=\"email\">Email address</label>
          <input
            type=\"email\"
            class=\"form-control\"
            id=\"email\"
            name=\"email\"
            placeholder=\"Enter email\"
            required
          />
        </div>
        <div class=\"form-group mb-2\">
          <label for=\"password\">Password</label>
          <input
            type=\"password\"
            class=\"form-control\"
            id=\"password\"
            name=\"password\"
            placeholder=\"Password\"
            required
          />
        </div>
        <div class=\"form-group mb-2\">
          <label for=\"confirmPassword\">Confirm Password</label>
          <input
            type=\"password\"
            class=\"form-control\"
            id=\"confirmPassword\"
            name=\"confirmPassword\"
            placeholder=\"Confirm Password\"
            required
          />
        </div>
        <button type=\"submit\" class=\"btn btn-sm btn-dark\">Register</button>
      </form>
    </div>

    ";
        // line 61
        yield from         $this->loadTemplate("/partials/footer.twig", "auth/register.twig", 61)->unwrap()->yield($context);
        // line 62
        yield "  </body>
</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "auth/register.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  118 => 62,  116 => 61,  64 => 12,  59 => 10,  55 => 8,  53 => 7,  49 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "auth/register.twig", "/opt/lampp/htdocs/php/xsessions/lightphpf/app/Views/auth/register.twig");
    }
}
