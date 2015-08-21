<?php

namespace ZfcTwig\View;

use Twig_Environment;
use Twig_Error_Loader;
use Twig_Error_Syntax;
use Twig_TemplateInterface;
use Zend\View\Resolver\ResolverInterface;
use Zend\View\Renderer\RendererInterface as Renderer;

class TwigResolver implements ResolverInterface
{
    /**
     * @var Twig_Environment
     */
    protected $environment;

    /**
     * Constructor.
     *
     * @param Twig_Environment $environment
     */
    public function __construct(Twig_Environment $environment)
    {
        $this->environment = $environment;
    }

    /**
     * Resolve a template/pattern name to a resource the renderer can consume
     *
     * @param  string $name
     * @param  null|Renderer $renderer
     * @return Twig_TemplateInterface
     *
     * @throws Twig_Error_Loader When the template cannot be found
     * @throws Twig_Error_Syntax When an error occurred during compilation
     */
    public function resolve($name, Renderer $renderer = null)
    {
        return $this->environment->loadTemplate($name);
    }
}
