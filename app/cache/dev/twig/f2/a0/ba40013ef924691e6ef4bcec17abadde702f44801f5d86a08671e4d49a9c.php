<?php

/* IntranetAdminBundle:Default:paramtre.html.twig */
class __TwigTemplate_f2a0ba40013ef924691e6ef4bcec17abadde702f44801f5d86a08671e4d49a9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("IntranetAdminBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IntranetAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Parametage";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<p >
";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 6
            echo "<p class=\"alert span6 alert-info alert-block\" style=\"text-align:center;margin-left:auto;margin-right:auto\" > ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</p>
<div class=\"row\">
<div class=\"well col-md-6\">
<h3>Ajouter une année scolaire</h3>
  ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "

    ";
        // line 15
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"form-group col-md-8\">
\t    ";
        // line 19
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annee", array()), 'label', array("label" => "Année scolaire"));
        echo "

\t    ";
        // line 22
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annee", array()), 'errors');
        echo "

\t    ";
        // line 25
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annee", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Exemple: 2012-2013")));
        echo "
    </div>

    
    <div class=\"form-group col-md-4\">
\t    ";
        // line 31
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "encours", array()), 'label', array("label" => "Année en cours"));
        echo "

\t    ";
        // line 34
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "encours", array()), 'errors');
        echo "

\t    ";
        // line 37
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "encours", array()), 'widget', array("attr" => array("class" => "form-control", "disabled" => "disabled")));
        echo "
    </div>
    <div class=\"form-group col-md-6\">
      ";
        // line 41
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datedebut", array()), 'label', array("label" => "date de debut"));
        echo "
 
      ";
        // line 44
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datedebut", array()), 'errors');
        echo "

      ";
        // line 47
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datedebut", array()), 'widget');
        echo "
    </div>
     <div class=\"form-group col-md-6\">
      ";
        // line 51
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datefin", array()), 'label', array("label" => "date de fin"));
        echo "
 
      ";
        // line 54
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datefin", array()), 'errors');
        echo "

      ";
        // line 57
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datefin", array()), 'widget');
        echo "
    </div>
  ";
        // line 62
        echo "  ";
        // line 63
        echo "  
  ";
        // line 65
        echo "  ";
        // line 66
        echo "  
  <div class=\"col-lg-12-\">
  \t<input type=\"submit\" value=\"Ajouter\" class=\"btn btn-primary \">
  <input type=\"reset\" value=\"Annuler\" class=\"btn btn-default\">

  </div>
  
  ";
        // line 74
        echo "  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
<div class=\"col-md-6\">
\t <div class=\"col-lg-12 col-md-12\">
                        <div class=\"panel panel-primary\">
                            <div class=\"panel-heading\">
                                <div class=\"row\">
                                    <div class=\"col-xs-3\">
                                        <i class=\"fa fa-calendar fa-5x\"></i>
                                    </div>
                                    <div class=\"col-xs-9 text-right\">
                                        <div class=\"huge\">
                                        \t";
        // line 86
        if ((!(null === (isset($context["annee"]) ? $context["annee"] : $this->getContext($context, "annee"))))) {
            // line 87
            echo "                                        \t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annee"]) ? $context["annee"] : $this->getContext($context, "annee")), "annee", array()), "html", null, true);
            echo "
                                        \t";
        } else {
            // line 89
            echo "                                        \t\tpas d'année en cours
                                        \t";
        }
        // line 91
        echo "                                        </div>
                                        <div>Année Scolaire en cours</div>
                                    </div>
                                </div>
                            </div>
                            <a href=\" ";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_details_annee", array("annee" => $this->getAttribute((isset($context["annee"]) ? $context["annee"] : $this->getContext($context, "annee")), "annee", array()))), "html", null, true);
        // line 97
        echo " \">
                                <div class=\"panel-footer\">
                                    <span class=\"pull-left\">Voir Details</span>
                                    <span class=\"pull-right\"><i class=\"fa fa-arrow-circle-right\"></i></span>
                                    <div class=\"clearfix\"></div>
                                </div>
                            </a>
                        </div>
                    </div>
</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "IntranetAdminBundle:Default:paramtre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 97,  200 => 96,  193 => 91,  189 => 89,  183 => 87,  181 => 86,  165 => 74,  156 => 66,  154 => 65,  151 => 63,  149 => 62,  143 => 57,  137 => 54,  131 => 51,  124 => 47,  118 => 44,  112 => 41,  105 => 37,  99 => 34,  93 => 31,  84 => 25,  78 => 22,  72 => 19,  65 => 15,  60 => 12,  54 => 8,  45 => 6,  41 => 5,  38 => 4,  35 => 3,  29 => 2,);
    }
}
