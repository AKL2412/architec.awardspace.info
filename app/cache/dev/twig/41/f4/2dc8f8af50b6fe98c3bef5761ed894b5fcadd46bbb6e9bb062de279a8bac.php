<?php

/* IntranetAdminBundle:Classe:ajout.html.twig */
class __TwigTemplate_41f42dc8f8af50b6fe98c3bef5761ed894b5fcadd46bbb6e9bb062de279a8bac extends Twig_Template
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
        echo "ajout d'une classe";
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

<div class=\"panel panel-default\">
  <div class=\"panel-heading\"><h3>Ajout d'une classe</h3></div>
  ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
  ";
        // line 14
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
  <div class=\"panel-body\">
  <div class=\"form-group col-md-6\">
      ";
        // line 18
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "filiere", array()), 'label', array("label" => "Filière de la classe"));
        echo "

      ";
        // line 21
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "filiere", array()), 'errors');
        echo "

      ";
        // line 24
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "filiere", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom de la classe")));
        echo "
    </div>
    <div class=\"form-group col-md-6\">
      ";
        // line 28
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau", array()), 'label', array("label" => "Niveau de la classe"));
        echo "

      ";
        // line 31
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau", array()), 'errors');
        echo "

      ";
        // line 34
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "niveau", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom de la classe")));
        echo "
    </div>
    <div class=\"form-group col-md-6\">
      ";
        // line 38
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label" => "Nom de la classe"));
        echo "

      ";
        // line 41
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "

      ";
        // line 44
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom de la classe")));
        echo "
    </div>

    <div class=\"form-group col-md-12\">
      ";
        // line 49
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label', array("label" => "Description"));
        echo "

      ";
        // line 52
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "

      ";
        // line 55
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
 </div>
 
  <div class=\"panel-footer\">
    <input type=\"submit\" value=\"Ajouter\" class=\"btn btn-primary \">
    <input type=\"reset\" value=\"Annuler\" class=\"btn btn-default \">
  </div>
   ";
        // line 65
        echo "  ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "IntranetAdminBundle:Classe:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 65,  147 => 57,  141 => 55,  135 => 52,  129 => 49,  121 => 44,  115 => 41,  109 => 38,  102 => 34,  96 => 31,  90 => 28,  83 => 24,  77 => 21,  71 => 18,  64 => 14,  60 => 12,  54 => 8,  45 => 6,  41 => 5,  38 => 4,  35 => 3,  29 => 2,);
    }
}
