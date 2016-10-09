<?php

/* lists.html */
class __TwigTemplate_8d4c54a084b4f81183302bac33d763d91bb380674dfe53dd23cd570cabf52d04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "lists.html", 1);
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
        echo "
<html>
<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"http://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.css\">
    <script src=\"http://apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js\"></script>
    <script src=\"http://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.js\"></script>
    <script type=\"text/javascript\" src=\"/public/jquery-1.7.2.min.js\"></script>
    <style>
        #mark{ display:none; position:fixed; top:0; left:0; width:100%; height:100%; z-index:9999; background-color:#3c3c3c; opacity: 0.9;}
        .tabs,#closezc{ width:700px; margin:0 auto; background:#fff; }
        .tabs{ height:80%;}
        #closezc{ text-align:right; margin-top:50px;}
        #closezc a{ text-decoration:none;}
    </style>

</head>
<body>

<div data-role=\"page\" id=\"pageone\">
    <div data-role=\"main\" class=\"ui-content\">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href=\"javascript:void(0)\" id=\"zc\">添加</a>
        <div id=\"mark\">
            <div id=\"closezc\"><a href=\"javascript:void(0)\">关闭</a></div>
            <div class=\"tabs\">
                <form action=\"/index/commit\" method=\"post\" data-ajax='false'>
                    <table>
                        <tr>
                            <td>标题：</td>
                            <td><input type=\"text\" name=\"title\"/></td>
                        </tr>
                        <tr>
                            <td>内容：</td>
                            <td><textarea name=\"content\" id=\"\" cols=\"30\" rows=\"10\"></textarea></td>
                        </tr>
                        <tr>
                            <td><input type=\"submit\" value=\"提交\"/></td>
                            <td></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <center><h2>信息列表</h2></center>
        <ol data-role=\"listview\">
            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 50
            echo "            <li>
                <a href=\"/index/add/id/";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "id", array()), "html", null, true);
            echo "\">标题：";
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "title", array()), "html", null, true);
            echo "     添加时间：";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["val"], "times", array()), "Y-m-d"), "html", null, true);
            echo "</a>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        </ol>
    </div>
    <div data-role=\"footer\" data-position=\"fixed\">
        <div data-role=\"navbar\" >
            <ul>
                <li><a href=\"/index/lists\" data-ajax='false'>列表</a></li>
                <li><a href=\"#\">待开发</a></li>
                <li><a href=\"/index/first\">个人中心</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>

<script type=\"text/javascript\">
    \$(function(){
        \$('#zc').click(function(){
            \$('#mark').show();
        })
        \$(\"#closezc a\").click(function(){
            \$(\"#mark\").hide();
        })

    })
</script>
";
    }

    public function getTemplateName()
    {
        return "lists.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 54,  86 => 51,  83 => 50,  79 => 49,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"layout.html\"%}
{% block content%}

<html>
<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"http://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.css\">
    <script src=\"http://apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js\"></script>
    <script src=\"http://apps.bdimg.com/libs/jquerymobile/1.4.5/jquery.mobile-1.4.5.min.js\"></script>
    <script type=\"text/javascript\" src=\"/public/jquery-1.7.2.min.js\"></script>
    <style>
        #mark{ display:none; position:fixed; top:0; left:0; width:100%; height:100%; z-index:9999; background-color:#3c3c3c; opacity: 0.9;}
        .tabs,#closezc{ width:700px; margin:0 auto; background:#fff; }
        .tabs{ height:80%;}
        #closezc{ text-align:right; margin-top:50px;}
        #closezc a{ text-decoration:none;}
    </style>

</head>
<body>

<div data-role=\"page\" id=\"pageone\">
    <div data-role=\"main\" class=\"ui-content\">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href=\"javascript:void(0)\" id=\"zc\">添加</a>
        <div id=\"mark\">
            <div id=\"closezc\"><a href=\"javascript:void(0)\">关闭</a></div>
            <div class=\"tabs\">
                <form action=\"/index/commit\" method=\"post\" data-ajax='false'>
                    <table>
                        <tr>
                            <td>标题：</td>
                            <td><input type=\"text\" name=\"title\"/></td>
                        </tr>
                        <tr>
                            <td>内容：</td>
                            <td><textarea name=\"content\" id=\"\" cols=\"30\" rows=\"10\"></textarea></td>
                        </tr>
                        <tr>
                            <td><input type=\"submit\" value=\"提交\"/></td>
                            <td></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <center><h2>信息列表</h2></center>
        <ol data-role=\"listview\">
            {% for val in data%}
            <li>
                <a href=\"/index/add/id/{{val.id}}\">标题：{{val.title}}     添加时间：{{val.times|date('Y-m-d')}}</a>
            </li>
            {% endfor%}
        </ol>
    </div>
    <div data-role=\"footer\" data-position=\"fixed\">
        <div data-role=\"navbar\" >
            <ul>
                <li><a href=\"/index/lists\" data-ajax='false'>列表</a></li>
                <li><a href=\"#\">待开发</a></li>
                <li><a href=\"/index/first\">个人中心</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>

<script type=\"text/javascript\">
    \$(function(){
        \$('#zc').click(function(){
            \$('#mark').show();
        })
        \$(\"#closezc a\").click(function(){
            \$(\"#mark\").hide();
        })

    })
</script>
{% endblock%}";
    }
}
