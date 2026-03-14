<?php

/* @CoreHome/_javaScriptDisabled.twig */
class __TwigTemplate_0c4421012d8d2110e0b05c3d19919b4da9c83b418e537300cd857de13655d273 extends Twig_Template
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
        echo "<noscript>
    <div id=\"javascriptDisabled\">";
        // line 2
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_JavascriptDisabled", "<a href=\"\">", "</a>"));
        echo "</div>
</noscript>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_javaScriptDisabled.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<noscript>
    <div id=\"javascriptDisabled\">{{ 'CoreHome_JavascriptDisabled'|translate('<a href=\"\">','</a>')|raw }}</div>
</noscript>
", "@CoreHome/_javaScriptDisabled.twig", "/home/gatewayclinics/public_html/stats/plugins/CoreHome/templates/_javaScriptDisabled.twig");
    }
}
