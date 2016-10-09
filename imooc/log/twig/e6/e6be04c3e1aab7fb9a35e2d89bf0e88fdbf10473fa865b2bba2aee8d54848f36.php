<?php

/* login.html */
class __TwigTemplate_8526a063d8cbbb0b315030618e64c7506b5fd45bf657c9c3c0c9145881891ce0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "login.html", 1);
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
        echo "<form action=\"/index/islogin\" method=\"post\">
    <table>
        <tr>
            <td>用户名：</td>
            <td><input type=\"text\" name=\"username\"/></td>
        </tr>
        <tr>
            <td>密码：</td>
            <td><input type=\"password\" name=\"pwd\"/></td>
        </tr>
        <tr>
            <td><input type=\"submit\" value=\"登录\"/></td>
            <td></td>
        </tr>
    </table>
</form>
";
    }

    public function getTemplateName()
    {
        return "login.html";
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
        return "{% extends \"layout.html\"%}
{% block content%}
<form action=\"/index/islogin\" method=\"post\">
    <table>
        <tr>
            <td>用户名：</td>
            <td><input type=\"text\" name=\"username\"/></td>
        </tr>
        <tr>
            <td>密码：</td>
            <td><input type=\"password\" name=\"pwd\"/></td>
        </tr>
        <tr>
            <td><input type=\"submit\" value=\"登录\"/></td>
            <td></td>
        </tr>
    </table>
</form>
{% endblock%}";
    }
}
