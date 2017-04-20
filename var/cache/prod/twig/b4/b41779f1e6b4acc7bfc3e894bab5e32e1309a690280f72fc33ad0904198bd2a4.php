<?php

/* neon/body/menucesion.html.twig */
class __TwigTemplate_d3ed27472766536eac8c38151be96762721456ff0544b8a2d4278597c27468e8 extends Twig_Template
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
        echo "                        
            \t\t\t<ul class=\"list-inline links-list pull-right\">
            \t\t\t\t<!-- Service Co -->
            \t\t\t\t<li class=\"dropdown language-selector\">
            \t\t\t\t\t<a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" data-close-others=\"true\">
            \t\t\t\t\t   <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/neon/assets/images/fix/service_CO.png"), "html", null, true);
        echo "\" width=\"82\"/>
                                </a>
            \t\t\t\t\t<ul class=\"dropdown-menu pull-left\">
            \t\t\t\t\t\t<li>
            \t\t\t\t\t\t\t<a href=\"javascript:;\">
            \t\t\t\t\t\t\t\t<i class=\"entypo-monitor\"></i>
            \t\t\t\t\t\t\t\t<span>Vista Televisor</span>
            \t\t\t\t\t\t\t\t
            \t\t\t\t\t\t\t</a>
            \t\t\t\t\t\t</li>
            \t\t\t\t\t\t<li>
            \t\t\t\t\t\t\t<a href=\"javascript:;\">
            \t\t\t\t\t\t\t\t<i class=\"entypo-mobile\"></i>
            \t\t\t\t\t\t\t\t<span>Vista Tablet</span>
            \t\t\t\t\t\t\t\t
            \t\t\t\t\t\t\t</a>
            \t\t\t\t\t\t</li>
            \t\t\t\t\t</ul>
            \t\t\t\t</li>
            \t\t\t\t<li class=\"sep\"></li>
            \t\t\t\t<!-- Chat -->
                            
                            <li>
        \t\t\t\t\t\t<a href=\"#\" data-toggle=\"chat\" data-collapse-sidebar=\"1\">
        \t\t\t\t\t\t\t<i class=\"entypo-chat\"></i>
        \t\t\t\t\t\t\tChat
        \t\t
        \t\t\t\t\t\t\t<span class=\"badge badge-success chat-notifications-badge is-hidden\">0</span>
        \t\t\t\t\t\t</a>
        \t\t\t\t\t</li>
                                    
                  \t\t\t<li class=\"sep\"></li>
            \t\t\t\t<!-- Cerrar Cesión -->
            \t\t\t\t<li>
            \t\t\t\t\t<a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("logout");
        echo "\">
            \t\t\t\t\tCerrar Cesión <i class=\"entypo-flight right\"></i>
            \t\t\t\t\t</a>
            \t\t\t\t</li>
                            
            \t\t\t</ul>";
    }

    public function getTemplateName()
    {
        return "neon/body/menucesion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 40,  26 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "neon/body/menucesion.html.twig", "D:\\xampp\\htdocs\\_fix\\mcr\\app\\Resources\\views\\neon\\body\\menucesion.html.twig");
    }
}
