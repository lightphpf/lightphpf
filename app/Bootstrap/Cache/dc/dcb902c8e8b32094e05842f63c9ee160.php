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

/* auth/login.twig */
class __TwigTemplate_812a417cc6ba4d3e2667998b0c210aa2 extends Template
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
        yield from         $this->loadTemplate("/partials/head.twig", "auth/login.twig", 4)->unwrap()->yield($context);
        // line 5
        yield "  </head>
  <body>
    ";
        // line 7
        yield from         $this->loadTemplate("/partials/nav.twig", "auth/login.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "    <div class=\"container my-5\">
      <h1>";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</h1>

      <form method=\"POST\" action=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["app_url"] ?? null), "html", null, true);
        yield "/login\">
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
        <div class=\"form-group mb-2 form-check\">
          <input type=\"checkbox\" class=\"form-check-input\" id=\"rememberMe\" />
          <label class=\"form-check-label\" for=\"rememberMe\">Remember me</label>
        </div>
        <button type=\"submit\" class=\"btn btn-sm btn-dark\">Login</button>
      </form>
    </div>
    ";
        // line 41
        yield from         $this->loadTemplate("/partials/footer.twig", "auth/login.twig", 41)->unwrap()->yield($context);
        // line 42
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
        return "auth/login.twig";
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
        return array (  98 => 42,  96 => 41,  63 => 11,  58 => 9,  55 => 8,  53 => 7,  49 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "auth/login.twig", "/opt/lampp/htdocs/php/xsessions/lightphpf/app/Views/auth/login.twig");
    }
}
