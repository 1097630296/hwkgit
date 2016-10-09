<?php

/* message.html */
class __TwigTemplate_fd887948a07a6cdf9dc96fbbd26b95cd617b0ff56b027a8418d070200139db62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "message.html", 1);
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
        echo "<!DOCTYPE html>
<html>
<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"http://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.css\">
    <script src=\"http://apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js\"></script>
    <script src=\"http://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.js\"></script>
</head>
<body>

<div data-role=\"page\" id=\"pageone\">


    <div data-role=\"main\" class=\"ui-content\">
        <a href=\"/index/lists\">返回</a>
        <center>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 20
            echo "        标题：";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "title", array()), "html", null, true);
            echo "<br/>
        内容：";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "content", array()), "html", null, true);
            echo "<br/>
        时间：";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "times", array()), "html", null, true);
            echo "<br/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </center>
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
        return "message.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 24,  62 => 22,  58 => 21,  53 => 20,  49 => 19,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"layout.html\" %}
{% block content %}
<!DOCTYPE html>
<html>
<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"http://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.css\">
    <script src=\"http://apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js\"></script>
    <script src=\"http://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.js\"></script>
</head>
<body>

<div data-role=\"page\" id=\"pageone\">


    <div data-role=\"main\" class=\"ui-content\">
        <a href=\"/index/lists\">返回</a>
        <center>
        {% for val in data%}
        标题：{{val.title}}<br/>
        内容：{{val.content}}<br/>
        时间：{{val.times}}<br/>
        {% endfor%}
        </center>
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
