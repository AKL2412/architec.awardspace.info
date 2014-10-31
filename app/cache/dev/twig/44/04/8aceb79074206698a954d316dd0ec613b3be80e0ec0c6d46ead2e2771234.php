<?php

/* IntranetAdminBundle:Professeur:ajout.html.twig */
class __TwigTemplate_44048aceb79074206698a954d316dd0ec613b3be80e0ec0c6d46ead2e2771234 extends Twig_Template
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
        echo "ajouter un professeur";
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
<h3>Ajout d'un professeur</h3>

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label" => "Nom du professeur"));
        echo "

\t    ";
        // line 22
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "

\t    ";
        // line 25
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom du professeur")));
        echo "
    </div>

    <div class=\"form-group col-md-6\">
\t    ";
        // line 30
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label', array("label" => "Prenom du professeur"));
        echo "

\t    ";
        // line 33
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "

\t    ";
        // line 36
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Prenom du professeur")));
        echo "
    </div>
    <div class=\"form-group col-md-3\">
\t    ";
        // line 40
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datenaissance", array()), 'label', array("label" => "La date naissance du professeur"));
        echo "

\t    ";
        // line 43
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datenaissance", array()), 'errors');
        echo "

\t    ";
        // line 46
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datenaissance", array()), 'widget', array("attr" => array("class" => "form-control-", "placeholder" => "La date naissance du professeur")));
        echo "
    </div>
    <div class=\"form-group col-md-3\">
\t    ";
        // line 50
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label" => "L'email du professeur"));
        echo "

\t    ";
        // line 53
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "

\t    ";
        // line 56
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "L'email du professeur")));
        echo "
    </div>
    <div class=\"form-group col-md-3\">
\t    ";
        // line 60
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matricule", array()), 'label', array("label" => "Le matricule du professeur"));
        echo "

\t    ";
        // line 63
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matricule", array()), 'errors');
        echo "

\t    ";
        // line 66
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "matricule", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Le matricule du professeur")));
        echo "
    </div>
    <div class=\"form-group col-md-3\">
\t    ";
        // line 70
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'label', array("label" => "Le telephone du professeur"));
        echo "

\t    ";
        // line 73
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'errors');
        echo "

\t    ";
        // line 76
        echo "\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Le telephone du professeur")));
        echo "
    </div>

  

  ";
        // line 84
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  
  ";
        // line 87
        echo "  ";
        // line 88
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
  \t<input type=\"submit\" value=\"Ajouter\" class=\"btn btn-primary btn-xs\">
  <input type=\"reset\" value=\"Annuler\" class=\"btn btn-default btn-xs\">

  </div>
  
  ";
        // line 105
        echo "  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "IntranetAdminBundle:Professeur:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 105,  197 => 88,  195 => 87,  189 => 84,  180 => 76,  174 => 73,  168 => 70,  161 => 66,  155 => 63,  149 => 60,  142 => 56,  136 => 53,  130 => 50,  123 => 46,  117 => 43,  111 => 40,  104 => 36,  98 => 33,  92 => 30,  84 => 25,  78 => 22,  72 => 19,  65 => 15,  60 => 12,  54 => 8,  45 => 6,  41 => 5,  38 => 4,  35 => 3,  29 => 2,);
    }
}
