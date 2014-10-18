<?php

/* IntranetEtudiantBundle:Default:index.html.twig */
class __TwigTemplate_e3d2d44c7491160abc7cf945b239275ccafacdc9bb9a2a27e4614e4aba5728b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IntranetEtudiantBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IntranetEtudiantBundle::layout.html.twig";
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
\t\t\t<div class=\"text-right col-md-x4\">
\t\t\t\t<i class=\" fa fa-arrow-circle-o-right\"></i>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"panel-body\">
\t\t\tEspace Etudiant

\t\t\t
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "IntranetEtudiantBundle:Default:index.html.twig";
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
