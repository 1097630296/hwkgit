<?php

/* index.html */
class __TwigTemplate_1d591efbc70079e2562fe248de5a1e8e9cb83782812c2182f38c4c71cea5eed1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "index.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<html>
<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"http://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.css\">
    <script src=\"http://apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js\"></script>
    <script src=\"http://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.js\"></script>
</head>
<body>

<div data-role=\"page\">
    <div data-role=\"header\">
        <h1>欢迎来到我的主页</h1>
    </div>

    <div data-role=\"main\" class=\"ui-content\">
        <p>我现在是一个移动端开发者!!</p>
    </div>

    <div data-role=\"footer\" data-position=\"fixed\">
        <div data-role=\"navbar\" >
            <ul>
                <li><a href=\"/index/lists\">列表</a></li>
                <li><a href=\"#\">待开发</a></li>
                <li><a href=\"/index/first\">个人中心</a></li>
            </ul>
        </div>
    </div>
</div>

</body>
</html>

";
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
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"layout.html\" %}
{% block content %}
<html>
<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"http://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.css\">
    <script src=\"http://apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js\"></script>
    <script src=\"http://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.js\"></script>
</head>
<body>

<div data-role=\"page\">
    <div data-role=\"header\">
        <h1>欢迎来到我的主页</h1>
    </div>

    <div data-role=\"main\" class=\"ui-content\">
        <p>我现在是一个移动端开发者!!</p>
    </div>

    <div data-role=\"footer\" data-position=\"fixed\">
        <div data-role=\"navbar\" >
            <ul>
                <li><a href=\"/index/lists\">列表</a></li>
                <li><a href=\"#\">待开发</a></li>
                <li><a href=\"/index/first\">个人中心</a></li>
            </ul>
        </div>
    </div>
</div>

</body>
</html>

{% endblock %}";
    }
}
