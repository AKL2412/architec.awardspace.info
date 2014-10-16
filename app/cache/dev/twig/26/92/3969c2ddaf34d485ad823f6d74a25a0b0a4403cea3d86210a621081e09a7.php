<?php

/* IntranetProfesseurBundle:Default:index.html.twig */
class __TwigTemplate_26923969c2ddaf34d485ad823f6d74a25a0b0a4403cea3d86210a621081e09a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IntranetProfesseurBundle::layout.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "IntranetProfesseurBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "IntranetProfesseurBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array ();
    }
}
