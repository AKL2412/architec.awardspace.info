<?php

/* IntranetEtudiantBundle::layout.html.twig */
class __TwigTemplate_6df9bbbe59235a769aa7109ed4f83430433f35146643c9707d4adb8a9c7c4431 extends Twig_Template
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
        echo "Accueil de l'étudiant";
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
        return "IntranetEtudiantBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 189,  260 => 207,  248 => 201,  233 => 189,  202 => 164,  53 => 21,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 164,  278 => 12,  268 => 209,  264 => 208,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 204,  243 => 88,  240 => 86,  238 => 85,  235 => 190,  230 => 82,  227 => 186,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 165,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 17,  67 => 15,  63 => 15,  59 => 24,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 14,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  28 => 3,  38 => 5,  24 => 3,  87 => 25,  25 => 3,  21 => 2,  31 => 4,  26 => 6,  19 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  44 => 12,  27 => 4,  79 => 18,  72 => 16,  69 => 25,  47 => 18,  40 => 7,  37 => 8,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 24,  55 => 15,  52 => 21,  50 => 10,  43 => 11,  41 => 15,  35 => 4,  32 => 4,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 14,  60 => 6,  57 => 11,  54 => 10,  51 => 14,  48 => 8,  45 => 17,  42 => 7,  39 => 9,  36 => 7,  33 => 4,  30 => 7,);
    }
}
