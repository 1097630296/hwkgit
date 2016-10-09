<?php

/* first.html */
class __TwigTemplate_36df86a00bdc2544db3954ba46d7a37152293d7b2bc5c2f7f44cb1f4b399f864 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "first.html", 1);
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 4
            echo "    头像:</br>
    昵称：";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "username", array()), "html", null, true);
            echo "</br>
    电话：";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "phone", array()), "html", null, true);
            echo "</br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "first.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  38 => 5,  35 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"layout.html\"%}
{% block content%}
{% for val in data%}
    头像:</br>
    昵称：{{val.username}}</br>
    电话：{{val.phone}}</br>
{% endfor%}
{% endblock%}";
    }
}
