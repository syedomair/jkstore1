<?php

/* product.html.twig */
class __TwigTemplate_b2e69de01bd26f6b23e428fc8815d7598671b2a7616e73e411e476c7679286c5 extends Twig_Template
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
        <tr><td align=\"left\">
\t    <b>Product Display</b>
        </td></tr>
\t  <tr>
           <td>
\t\t<table border=\"0\">
\t\t  <tr>
\t\t\t<td>
\t\t\t  <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "basepath"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aProduct"]) ? $context["aProduct"] : $this->getContext($context, "aProduct")), "img"), "html", null, true);
        echo ".gif\">
\t\t\t</td>
\t\t\t<td>
\t\t\t <table border=\"0\">
\t\t\t   <tr><td>Name:<b>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aProduct"]) ? $context["aProduct"] : $this->getContext($context, "aProduct")), "name"), "html", null, true);
        echo "</b></td></tr>
\t\t\t   <tr><td>Description:";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aProduct"]) ? $context["aProduct"] : $this->getContext($context, "aProduct")), "desc"), "html", null, true);
        echo "</td></tr>
\t\t\t   <tr><td>Price:";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["aProduct"]) ? $context["aProduct"] : $this->getContext($context, "aProduct")), "price"), "html", null, true);
        echo "</td></tr>
\t\t\t </table>\t
\t\t\t</td>
                  </tr>
\t\t</table>
           </td>\t
          </tr>
       </table>
";
    }

    public function getTemplateName()
    {
        return "product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 19,  55 => 18,  51 => 17,  42 => 13,  28 => 3,);
    }
}
