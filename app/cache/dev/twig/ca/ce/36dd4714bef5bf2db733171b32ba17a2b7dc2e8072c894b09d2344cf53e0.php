<?php

/* IntranetProfesseurBundle::layout.html.twig */
class __TwigTemplate_cace36dd4714bef5bf2db733171b32ba17a2b7dc2e8072c894b09d2344cf53e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::intranet-layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::intranet-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil de l'administrateur";
    }

    // line 4
    public function block_menu($context, array $blocks = array())
    {
        // line 5
        echo "
<div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav side-nav\">
                    <li class=\"active\">
                        <a href=\"index.html\"><i class=\"fa fa-fw fa-dashboard\"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href=\"charts.html\"><i class=\"fa fa-fw fa-bar-chart-o\"></i> Charts</a>
                    </li>
                    <li>
                        <a href=\"tables.html\"><i class=\"fa fa-fw fa-table\"></i> Tables</a>
                    </li>
                    <li>
                        <a href=\"forms.html\"><i class=\"fa fa-fw fa-edit\"></i> Forms</a>
                    </li>
                    <li>
                        <a href=\"bootstrap-elements.html\"><i class=\"fa fa-fw fa-desktop\"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href=\"bootstrap-grid.html\"><i class=\"fa fa-fw fa-wrench\"></i> Bootstrap Grid</a>
                    </li>
                    <li>
                        <a href=\"javascript:;\" data-toggle=\"collapse\" data-target=\"#demo\"><i class=\"fa fa-fw fa-arrows-v\"></i> Dropdown <i class=\"fa fa-fw fa-caret-down\"></i></a>
                        <ul id=\"demo\" class=\"collapse\">
                            <li>
                                <a href=\"#\">Dropdown Item</a>
                            </li>
                            <li>
                                <a href=\"#\">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"blank-page.html\"><i class=\"fa fa-fw fa-file\"></i> Blank Page</a>
                    </li>
                </ul>
            </div>
     ";
    }

    public function getTemplateName()
    {
        return "IntranetProfesseurBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  35 => 4,  29 => 2,);
    }
}
