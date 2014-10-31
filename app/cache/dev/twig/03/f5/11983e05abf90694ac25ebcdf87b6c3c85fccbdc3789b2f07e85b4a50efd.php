<?php

/* IntranetAdminBundle:Etudiant:ajoutCompte.html.twig */
class __TwigTemplate_03f511983e05abf90694ac25ebcdf87b6c3c85fccbdc3789b2f07e85b4a50efd extends Twig_Template
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
        echo "modifié un étudiant";
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
<h3>Modifier d'un étudiant</h3>

<div class=\"well\">
  ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "

    ";
        // line 15
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"form-group col-md-6\">
\t    ";
        // line 19
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label" => "Nom de l'étudiant"));
        echo "

\t    ";
        // line 22
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "

\t    ";
        // line 25
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom de l'étudiant")));
        echo "
    </div>

    <div class=\"form-group col-md-6\">
\t    ";
        // line 30
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label', array("label" => "Prenom de l'étudiant"));
        echo "

\t    ";
        // line 33
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "

\t    ";
        // line 36
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Prenom de l'étudiant")));
        echo "
    </div>
    <div class=\"form-group col-md-4\">
\t    ";
        // line 40
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datenaissance", array()), 'label', array("label" => "La date naissance de l'étudiant"));
        echo "

\t    ";
        // line 43
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datenaissance", array()), 'errors');
        echo "

\t    ";
        // line 46
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datenaissance", array()), 'widget', array("attr" => array("class" => "form-control-", "placeholder" => "La date naissance de l'étudiant")));
        echo "

    </div>
    <div class=\"form-group col-md-4\">
\t    ";
        // line 51
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label" => "L'email de l'étudiant"));
        echo "

\t    ";
        // line 54
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "

\t    ";
        // line 57
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "L'email de l'étudiant")));
        echo "
    </div>
    <!-- <div class=\"form-group col-md-3\">
\t    ";
        // line 61
        echo "\t    ";
        // line 68
        echo "    </div> -->
    <div class=\"form-group col-md-4\">
\t    ";
        // line 71
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'label', array("label" => "Le telephone de l'étudiant"));
        echo "

\t    ";
        // line 74
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'errors');
        echo "

\t    ";
        // line 77
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Le telephone de l'étudiant")));
        echo "
    </div>

  

  ";
        // line 85
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  
  ";
        // line 88
        echo "  ";
        // line 89
        echo "  <!-- <div class=\"col-md-12\">
  \t<label for=\"creer-compte\">Créer le compte : </label>
  \t<label for=\"creer-compte-oui\"> oui :
  \t\t<input type=\"radio\" value=\"oui\" name=\"compte\" checked=\"checked\" id=\"creer-compte-oui\">
  \t</label>
  \t<label for=\"creer-compte-non\"> Non :
  \t\t<input type=\"radio\" value=\"non\" name=\"compte\"  id=\"creer-compte-non\">
  \t</label>
  \t
  </div> -->
  <div class=\"\">
  \t<input type=\"submit\" value=\"Modifier\" class=\"btn btn-success btn-xs\">
  <input type=\"reset\" value=\"Annuler\" class=\"btn btn-default btn-xs\">

  </div>
  
  ";
        // line 106
        echo "  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "IntranetAdminBundle:Etudiant:ajoutCompte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 106,  185 => 89,  183 => 88,  177 => 85,  168 => 77,  162 => 74,  156 => 71,  152 => 68,  150 => 61,  143 => 57,  137 => 54,  131 => 51,  123 => 46,  117 => 43,  111 => 40,  104 => 36,  98 => 33,  92 => 30,  84 => 25,  78 => 22,  72 => 19,  65 => 15,  60 => 12,  54 => 8,  45 => 6,  41 => 5,  38 => 4,  35 => 3,  29 => 2,);
    }
}
