<?php

/* IntranetProfesseurBundle:Default:index.html.twig */
class __TwigTemplate_26923969c2ddaf34d485ad823f6d74a25a0b0a4403cea3d86210a621081e09a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IntranetProfesseurBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "\t<div class=\"panel panel-success\">
\t\t<div class=\"panel-heading\">
\t\t\t<i class=\"fa fa-user fa-3x\"></i>
\t\t\t
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\tEspace Professeur

\t\t\t
\t\t</div>
\t\t<div class=\"panel-footer text-right\">
\t\t\t
\t\t\t\t<i class=\" fa fa-arrow-circle-o-right\"></i>

\t\t</div>
\t</div>
";
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
        return array (  31 => 3,  28 => 2,);
    }
}
