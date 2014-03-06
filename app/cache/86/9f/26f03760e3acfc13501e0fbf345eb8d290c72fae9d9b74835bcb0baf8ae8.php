<?php

/* template.html.twig */
class __TwigTemplate_869f26f03760e3acfc13501e0fbf345eb8d290c72fae9d9b74835bcb0baf8ae8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<head>
    <meta charset=\"utf-8\">
    <title>JK Store</title>
</head>

<body>
    <table border=\"0\">
\t<tr>
\t\t<td colspan=\"3\" align=\"left\" valign=\"top\">
\t\t    ";
        // line 11
        $this->env->loadTemplate("header.html.twig")->display($context);
        // line 12
        echo "\t        </td>
\t</tr>
        <tr>
\t\t<td align=\"left\" valign=\"top\" width=\"162\">  
\t\t        ";
        // line 16
        $this->env->loadTemplate("leftsidebar.html.twig")->display($context);
        // line 17
        echo "\t\t</td>
\t\t<td align=\"left\" valign=\"top\" width=\"596\" >
\t\t\t";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 21
        echo "\t\t</td>
\t</tr>
\t<tr align=\"left\" valign=\"top\">
\t\t<td colspan=\"3\" valign=\"top\">
\t\t    ";
        // line 25
        $this->env->loadTemplate("footer.html.twig")->display($context);
        // line 26
        echo "\t\t</td>
\t</tr>
   </table>

</body>
</html>
";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "\t\t        ";
    }

    public function getTemplateName()
    {
        return "template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 20,  66 => 19,  56 => 26,  54 => 25,  48 => 21,  46 => 19,  42 => 17,  40 => 16,  34 => 12,  32 => 11,  20 => 1,  28 => 3,);
    }
}
