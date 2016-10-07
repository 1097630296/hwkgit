<?php

/* add.html */
class __TwigTemplate_11be6f50d88c473e07cc9ada860eeaa5c586b4902d1f65d3418e56c3b3a405b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "add.html", 1);
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
        echo "<center>
    <form action=\"/index/save\" method=\"post\">
        <table>
            <tr>
                <td>标题</td>
                <td><input type=\"text\" name=\"title\"/></td>
            </tr>
            <tr>
                <td>内容</td>
                <td><textarea name=\"content\" id=\"\" cols=\"30\" rows=\"10\"></textarea></td>
            </tr>
            <tr>
                <td><input type=\"submit\" value=\"提交\"/></td>
                <td></td>
            </tr>
        </table>
    </form>
</center>
";
    }

    public function getTemplateName()
    {
        return "add.html";
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
<center>
    <form action=\"/index/save\" method=\"post\">
        <table>
            <tr>
                <td>标题</td>
                <td><input type=\"text\" name=\"title\"/></td>
            </tr>
            <tr>
                <td>内容</td>
                <td><textarea name=\"content\" id=\"\" cols=\"30\" rows=\"10\"></textarea></td>
            </tr>
            <tr>
                <td><input type=\"submit\" value=\"提交\"/></td>
                <td></td>
            </tr>
        </table>
    </form>
</center>
{% endblock %}";
    }
}
