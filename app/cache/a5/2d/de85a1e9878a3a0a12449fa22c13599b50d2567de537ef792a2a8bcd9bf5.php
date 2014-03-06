<?php

/* prodlist.html.twig */
class __TwigTemplate_a52dde85a1e9878a3a0a12449fa22c13599b50d2567de537ef792a2a8bcd9bf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("template.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        echo "\t
      <table valign=\"top\" border=0> 
        <tr>
        <td></td>\t
\t<td>
\t    <ul><b>Product List</b></ul>
        </td></tr>
\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groupProductList"]) ? $context["groupProductList"] : $this->getContext($context, "groupProductList")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 11
            echo "\t  <tr>
\t  <td>
     \t    <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "basepath"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "img"), "html", null, true);
            echo "_sm.gif\">
\t   </td>
           <td>
\t\t<a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prod", array("prodId" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "product_id"))), "html", null, true);
            echo " \">
\t\t  <b>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name"), "html", null, true);
            echo "</b>
\t\t</a>
           </td>\t
          </tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "       </table>
";
    }

    public function getTemplateName()
    {
        return "prodlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 22,  59 => 17,  55 => 16,  47 => 13,  43 => 11,  39 => 10,  28 => 3,);
    }
}
