<?php

/* IntranetAdminBundle:Etudiant:ajout.html.twig */
class __TwigTemplate_c8cf96cae0c1bcfcfcac8ce58c1c36b74e587db677a9164a11204ba20aabb69d extends Twig_Template
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
        echo "ajout un étudiant";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h3>Ajout d'un étudiant</h3>

<div class=\"well\">
  ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "

    ";
        // line 10
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"form-group col-md-6\">
\t    ";
        // line 14
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label" => "Nom de l'étudiant"));
        echo "

\t    ";
        // line 17
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "

\t    ";
        // line 20
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom de l'étudiant")));
        echo "
    </div>

    <div class=\"form-group col-md-6\">
\t    ";
        // line 25
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label', array("label" => "Prenom de l'étudiant"));
        echo "

\t    ";
        // line 28
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "

\t    ";
        // line 31
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Prenom de l'étudiant")));
        echo "
    </div>
    <div class=\"form-group col-md-3\">
\t    ";
        // line 35
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datenaissance", array()), 'label', array("label" => "La date naissance de l'étudiant"));
        echo "

\t    ";
        // line 38
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datenaissance", array()), 'errors');
        echo "

\t    ";
        // line 41
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datenaissance", array()), 'widget', array("attr" => array("class" => "form-control-", "placeholder" => "La date naissance de l'étudiant")));
        echo "
    </div>
    <div class=\"form-group col-md-3\">
\t    ";
        // line 45
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label" => "L'email de l'étudiant"));
        echo "

\t    ";
        // line 48
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "

\t    ";
        // line 51
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "L'email de l'étudiant")));
        echo "
    </div>
    <div class=\"form-group col-md-3\">
\t    ";
        // line 55
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matricule", array()), 'label', array("label" => "Le matricule de l'étudiant"));
        echo "

\t    ";
        // line 58
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matricule", array()), 'errors');
        echo "

\t    ";
        // line 61
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matricule", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Le matricule de l'étudiant")));
        echo "
    </div>
    <div class=\"form-group col-md-3\">
\t    ";
        // line 65
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'label', array("label" => "Le telephone de l'étudiant"));
        echo "

\t    ";
        // line 68
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'errors');
        echo "

\t    ";
        // line 71
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Le telephone de l'étudiant")));
        echo "
    </div>

  

  ";
        // line 79
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  
  ";
        // line 82
        echo "  ";
        // line 83
        echo "  <div class=\"\">
  \t<input type=\"submit\" value=\"Ajouter\" class=\"btn btn-primary\">
  <input type=\"reset\" value=\"Annuler\" class=\"btn btn-default\">

  </div>
  
  ";
        // line 90
        echo "  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "IntranetAdminBundle:Etudiant:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 90,  180 => 83,  178 => 82,  172 => 79,  163 => 71,  157 => 68,  151 => 65,  144 => 61,  138 => 58,  132 => 55,  125 => 51,  119 => 48,  113 => 45,  106 => 41,  100 => 38,  94 => 35,  87 => 31,  81 => 28,  75 => 25,  67 => 20,  61 => 17,  55 => 14,  48 => 10,  43 => 7,  38 => 4,  35 => 3,  29 => 2,);
    }
}
