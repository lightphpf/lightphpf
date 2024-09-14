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

/* index.twig */
class __TwigTemplate_c65ee2eda7e92a41bd413db0308275a0 extends Template
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
        yield from         $this->loadTemplate("/partials/head.twig", "index.twig", 4)->unwrap()->yield($context);
        // line 5
        yield "  </head>
  <body>
    ";
        // line 7
        yield from         $this->loadTemplate("/partials/nav.twig", "index.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "    <div class=\"container my-5\">
      <h1>";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</h1>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate iusto
        saepe minima aliquid quae commodi ex molestias dolores perferendis,
        assumenda iure facilis sint? Voluptatem voluptate placeat soluta magnam,
        porro commodi autem. Modi, voluptate nesciunt. Repellat, aut cumque
        dolorum, debitis eligendi neque porro id voluptates quos error explicabo
        ut excepturi sint.
      </p>
    </div>
    ";
        // line 19
        yield from         $this->loadTemplate("/partials/footer.twig", "index.twig", 19)->unwrap()->yield($context);
        // line 20
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
        return "index.twig";
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
        return array (  73 => 20,  71 => 19,  58 => 9,  55 => 8,  53 => 7,  49 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "index.twig", "/opt/lampp/htdocs/php/xsessions/lightphpf/app/Views/index.twig");
    }
}
