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

/* pages/contact.twig */
class __TwigTemplate_966b8c9abd9572d4f05cf0c6d5a22ea9 extends Template
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
        yield from         $this->loadTemplate("/partials/head.twig", "pages/contact.twig", 4)->unwrap()->yield($context);
        // line 5
        yield "  </head>
  <body>
    ";
        // line 7
        yield from         $this->loadTemplate("/partials/nav.twig", "pages/contact.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "    <div class=\"container my-5\">
      <h1>";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "</h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam totam
        suscipit cum nobis dignissimos aliquid magnam labore mollitia tempora
        numquam. Corrupti veniam voluptas ratione aliquid earum nostrum, natus
        eaque accusamus totam et nihil? Soluta omnis velit aperiam perferendis
        expedita quos ad facilis quas incidunt ex nemo necessitatibus consectetur,
        dignissimos magnam.
      </p>
    </div>
    ";
        // line 19
        yield from         $this->loadTemplate("/partials/footer.twig", "pages/contact.twig", 19)->unwrap()->yield($context);
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
        return "pages/contact.twig";
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
        return new Source("", "pages/contact.twig", "/opt/lampp/htdocs/php/xsessions/lightphpf/app/Views/pages/contact.twig");
    }
}
