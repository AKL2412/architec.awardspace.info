<?php

/* IntranetAdminBundle:Default:ajoutfiliere.html.twig */
class __TwigTemplate_95697be26b2a73b3975b6e22a9c8237624a42affe1e39a3a7a97acb797a548da extends Twig_Template
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
        echo " Ajout de filières ";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"row\">
\t\t\t<p >
";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 7
            echo "<p class=\"alert span6 alert-info alert-block\" style=\"text-align:center;margin-left:auto;margin-right:auto\" > ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</p>
</div>
\t<div class=\"row\">
\t\t
\t\t\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filieres"]) ? $context["filieres"] : $this->getContext($context, "filieres")));
        foreach ($context['_seq'] as $context["_key"] => $context["fil"]) {
            // line 14
            echo "
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h3><i class=\"fa fa-cube\"></i>
\t\t\t\t\t\t<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_admin_voir_filière", array("id" => $this->getAttribute($context["fil"], "id", array()))), "html", null, true);
            echo " \"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["fil"], "nom", array()), "html", null, true);
            echo " </a>
\t\t\t\t\t\t</h3>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t";
            // line 23
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["fil"], "description", array()), 0, 100), "html", null, true);
            echo "...
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- <div class=\"panel-footer\">
\t\t\t\t\t\t<i class=\"fa fa-cubes\"></i>\t";
            // line 26
            echo " matière(s)
\t\t\t\t\t\t</div> -->
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fil'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t
\t</div>
\t<div class=\"row\">


<div class=\"panel panel-default\">
  <div class=\"panel-heading\"><h3>
  <i class=\"fa fa-plus-circle\"></i>
  Ajout d'une nouvelle filière </h3></div>
  ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
  ";
        // line 43
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
  <div class=\"panel-body\">
  <div class=\"form-group col-md-12\">
      ";
        // line 47
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label" => "Le nom de la filière"));
        echo "

      ";
        // line 50
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "

      ";
        // line 53
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom de la filière")));
        echo "
    </div>
    <div class=\"form-group col-md-12\">
      ";
        // line 57
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label', array("label" => "Description de la filière"));
        echo "

      ";
        // line 60
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "

      ";
        // line 63
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Description de la Filière")));
        echo "
    </div>
  
  ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
 </div>
 
  <div class=\"panel-footer\">
    <input type=\"submit\" value=\"Ajouter\" class=\"btn btn-primary \">
    <input type=\"reset\" value=\"Annuler\" class=\"btn btn-default \">
  </div>
   ";
        // line 74
        echo "  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "IntranetAdminBundle:Default:ajoutfiliere.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 74,  158 => 66,  151 => 63,  145 => 60,  139 => 57,  132 => 53,  126 => 50,  120 => 47,  113 => 43,  109 => 41,  98 => 32,  87 => 26,  81 => 23,  72 => 19,  65 => 14,  61 => 13,  55 => 9,  46 => 7,  42 => 6,  38 => 4,  35 => 3,  29 => 2,);
    }
}
