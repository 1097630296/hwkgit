<?php

/* layout.html */
class __TwigTemplate_a13bfb6be70ed40e330fc839d3c7cf9b85766291c207921db4816a2360b037fd extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\"
        \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\">
    <title>Document</title>
</head>
<body>
";
        // line 9
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "</body>
</html>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  41 => 10,  38 => 9,  32 => 12,  30 => 9,  20 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\"
        \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\">
    <title>Document</title>
</head>
<body>
{% block content %}

{% endblock %}
</body>
</html>
";
    }
}
