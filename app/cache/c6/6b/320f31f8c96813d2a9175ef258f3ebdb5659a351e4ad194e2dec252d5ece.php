<?php

/* leftsidebar.html.twig */
class __TwigTemplate_c66b320f31f8c96813d2a9175ef258f3ebdb5659a351e4ad194e2dec252d5ece extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "   <table border=0> 
    <tr>
     <td bgcolor=\"D8DED5\" width=\"162\" height=\"400\" valign=\"top\">
      <table valign=\"top\" border=0> 
        <tr><td>
\t    <b>Store Categories</b>
        </td></tr>
\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groupCategories"]) ? $context["groupCategories"] : $this->getContext($context, "groupCategories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 9
            echo "\t  <tr>
           <td>
\t\t<a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prodList", array("catId" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "category_id"))), "html", null, true);
            echo " \">
\t\t  <b>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
            echo "</b>
\t\t</a>
           </td>\t
          </tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "       </table>
      </td>
    </tr>
   </table>
";
    }

    public function getTemplateName()
    {
        return "leftsidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 17,  36 => 11,  19 => 1,  69 => 20,  66 => 19,  56 => 26,  54 => 25,  48 => 21,  46 => 19,  42 => 17,  40 => 12,  34 => 12,  32 => 9,  20 => 1,  28 => 8,);
    }
}
