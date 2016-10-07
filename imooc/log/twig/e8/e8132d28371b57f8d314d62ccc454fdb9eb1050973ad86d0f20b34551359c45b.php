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
        echo "<center>
    <h1>简单的留言板</h1>
    <a href=\"/\">搜有留言</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"/index/add\">添加留言</a>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 7
            echo "    <div style=\"border: 1px red solid\">
        <ul>
            <li>标题：";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "title", array()), "html", null, true);
            echo "</li>
            <li>内容：";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "content", array()), "html", null, true);
            echo "</li>
            <li><a href=\"/index/del/id/";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "id", array()), "html", null, true);
            echo "\">删除</a></li>
        </ul>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    <h3>@2016超简单留言板</h3>
</center>
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
        return array (  62 => 15,  52 => 11,  48 => 10,  44 => 9,  40 => 7,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"layout.html\" %}
{% block content %}
<center>
    <h1>简单的留言板</h1>
    <a href=\"/\">搜有留言</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"/index/add\">添加留言</a>
    {% for val in data%}
    <div style=\"border: 1px red solid\">
        <ul>
            <li>标题：{{val.title}}</li>
            <li>内容：{{val.content}}</li>
            <li><a href=\"/index/del/id/{{val.id}}\">删除</a></li>
        </ul>
    </div>
    {% endfor%}
    <h3>@2016超简单留言板</h3>
</center>
{% endblock %}";
    }
}
