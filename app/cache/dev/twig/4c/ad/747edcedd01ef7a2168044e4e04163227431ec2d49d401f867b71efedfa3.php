<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4cad747edcedd01ef7a2168044e4e04163227431ec2d49d401f867b71efedfa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Redirection Intercepted";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 330,  354 => 329,  351 => 328,  307 => 287,  65 => 11,  70 => 24,  97 => 41,  58 => 18,  127 => 60,  110 => 22,  90 => 32,  84 => 29,  76 => 27,  34 => 8,  288 => 189,  260 => 207,  248 => 201,  233 => 189,  202 => 164,  53 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 340,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 288,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 164,  278 => 12,  268 => 209,  264 => 208,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 12,  273 => 96,  269 => 94,  254 => 204,  243 => 88,  240 => 86,  238 => 85,  235 => 190,  230 => 82,  227 => 186,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 165,  179 => 69,  159 => 61,  143 => 56,  135 => 62,  119 => 42,  102 => 33,  71 => 13,  67 => 15,  63 => 19,  59 => 13,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 79,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 19,  105 => 18,  91 => 27,  62 => 23,  49 => 13,  94 => 34,  89 => 20,  85 => 23,  75 => 17,  68 => 12,  56 => 11,  28 => 3,  38 => 6,  24 => 3,  87 => 32,  25 => 35,  21 => 2,  31 => 8,  26 => 6,  19 => 1,  93 => 28,  88 => 31,  78 => 18,  46 => 34,  44 => 11,  27 => 4,  79 => 18,  72 => 16,  69 => 25,  47 => 8,  40 => 6,  37 => 6,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 43,  111 => 37,  108 => 19,  101 => 43,  98 => 34,  96 => 30,  83 => 31,  74 => 27,  66 => 24,  55 => 38,  52 => 14,  50 => 10,  43 => 11,  41 => 10,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 45,  103 => 32,  99 => 31,  95 => 28,  92 => 28,  86 => 28,  82 => 28,  80 => 30,  73 => 16,  64 => 21,  60 => 6,  57 => 39,  54 => 10,  51 => 37,  48 => 9,  45 => 8,  42 => 8,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
