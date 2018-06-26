<?php

/* home.twig */
class __TwigTemplate_956e50889af33ca8b5a157fe8de8aac92a665c0e88fd162c2409f3adddb714d7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Home template 

";
        // line 3
        echo twig_var_dump($this->env, $context, ($context["user"] ?? null));
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Home template 

{{ dump(user) }}", "home.twig", "/Users/timm/Documents/Personal/www/framework/views/home.twig");
    }
}
