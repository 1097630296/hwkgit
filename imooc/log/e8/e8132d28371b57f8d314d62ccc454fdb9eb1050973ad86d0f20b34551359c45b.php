<?php

/* index.html */
class __TwigTemplate_1d591efbc70079e2562fe248de5a1e8e9cb83782812c2182f38c4c71cea5eed1 extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\">
    <title>Document</title>
</head>
<body>
<h1>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : null), "html", null, true);
        echo "</h1>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 8,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\">
    <title>Document</title>
</head>
<body>
<h1>{{data}}</h1>

</body>
</html>";
    }
}
