<?php

/* neon/body/header.html.twig */
class __TwigTemplate_e076f64d12ae3179bf6f19380ac8fb7994e9d9120b98ef45bcb58b47700f62b8 extends Twig_Template
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
        echo "            \t\t\t
                        <div class=\"logo\">
            \t\t\t\t<a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("inicio");
        echo "\">
            \t\t\t\t    <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/images/fix/FINAL_SERVICE-ME.png"), "html", null, true);
        echo "\" width=\"175\" alt=\"\" />
                            </a>
            \t\t\t</div>
            \t\t\t<div class=\"sidebar-collapse\">
            \t\t\t\t<a href=\"javascript:;\" class=\"sidebar-collapse-icon\">
            \t\t\t\t\t<i class=\"entypo-menu\"></i>
            \t\t\t\t</a>
            \t\t\t</div>
            \t\t\t<div class=\"sidebar-mobile-menu visible-xs\">
            \t\t\t<a href=\"javascript:;\" class=\"with-animation\">
            \t\t\t\t<i class=\"entypo-menu\"></i>
            \t\t\t</a>
            \t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "neon/body/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "neon/body/header.html.twig", "D:\\xampp\\htdocs\\_fix\\mcr\\app\\Resources\\views\\neon\\body\\header.html.twig");
    }
}
