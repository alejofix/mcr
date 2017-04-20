<?php

/* neon/body/menuusuario.html.twig */
class __TwigTemplate_8e04b58b87329fe4dd25c1df2144757513fbf16ed771decfb992c6b4fe86c855 extends Twig_Template
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
        echo "                    \t
                        <ul class=\"user-info pull-left pull-none-xsm\">
                    \t\t<li class=\"profile-info dropdown\">
                    \t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    \t\t\t\t<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/images/fix/niño.png"), "html", null, true);
        echo "\" alt=\"\" width=\"50\"  />
                                 \tAlejo&nbsp;Fix
                    \t\t\t</a>
                    \t\t\t<ul class=\"dropdown-menu\">
                    \t\t\t\t<li class=\"caret\"></li>
                    \t\t\t\t<li>
                    \t\t\t\t\t<a href=\"javascript:;\">
                    \t\t\t\t\t\t<i class=\"entypo-user\"></i>
                    \t\t\t\t\t\tEditar Perfil
                    \t\t\t\t\t</a>
                    \t\t\t\t</li>
                    \t\t\t</ul>
                    \t\t</li>
                    \t</ul>";
    }

    public function getTemplateName()
    {
        return "neon/body/menuusuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "neon/body/menuusuario.html.twig", "D:\\xampp\\htdocs\\_fix\\mcr\\app\\Resources\\views\\neon\\body\\menuusuario.html.twig");
    }
}
