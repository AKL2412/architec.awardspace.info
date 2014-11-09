<?php

/* IntranetAdminBundle:Default:details.html.twig */
class __TwigTemplate_4394185aebf716fab946288f587ca62f57f4a6373a5f27f77bafe1851e0f1ad6 extends Twig_Template
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
        // line 3
        if ((!(null === (isset($context["annee"]) ? $context["annee"] : $this->getContext($context, "annee"))))) {
            // line 4
            echo "\tDétails  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annee"]) ? $context["annee"] : $this->getContext($context, "annee")), "annee", array()), "html", null, true);
            echo " 
";
        } else {
            // line 6
            echo "\tErreeur
";
        }
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "\t";
        if ((!(null === (isset($context["annee"]) ? $context["annee"] : $this->getContext($context, "annee"))))) {
            // line 11
            echo "
\t\t<p >
";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                echo "<p class=\"alert span6 alert-info alert-block\" style=\"text-align:center;margin-left:auto;margin-right:auto\" > ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</p>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "</p>
annee : ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annee"]) ? $context["annee"] : $this->getContext($context, "annee")), "annee", array()), "html", null, true);
            echo "

<br>

Classes : ";
            // line 21
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["annee"]) ? $context["annee"] : $this->getContext($context, "annee")), "classes", array())), "html", null, true);
            echo "
\t";
        }
        // line 23
        echo "

\t

\t
";
    }

    public function getTemplateName()
    {
        return "IntranetAdminBundle:Default:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 23,  79 => 21,  72 => 17,  69 => 16,  60 => 14,  56 => 13,  52 => 11,  49 => 10,  46 => 9,  40 => 6,  34 => 4,  32 => 3,  29 => 2,);
    }
}
