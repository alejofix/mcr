<?php

/* neon/body/menulateral.html.twig */
class __TwigTemplate_61a2d3b6e5a4b8124ce72e24f722185552f47c69f8ecce9aad1a00011bdc9817 extends Twig_Template
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
        echo "                <!-- Inicio -->
            \t\t\t<li class=\"active\">
            \t\t\t\t<a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("inicio");
        echo "\">
            \t\t\t\t\t<i class=\"entypo-home\"></i>
            \t\t\t\t\t<span class=\"title\">Inicio</span>
            \t\t\t\t</a>
            \t\t\t</li>
                
                <!-- ServiceCo -->
                        <li>
                            <a href=\"javascript:;\">
                                <i class=\"entypo-megaphone\"></i>
                                <span class=\"title\">ServiceCo</span>
                            </a>
                        </li>
                <!-- Administración -->
                        <li>
        \t\t\t\t\t<a href=\"javascript:;\">
        \t\t\t\t\t\t<i class=\"entypo-database\"></i>
        \t\t\t\t\t\t<span class=\"title\">Administración</span>
        \t\t\t\t\t</a>
            \t\t\t\t\t<ul>
            \t\t\t\t\t\t<!-- Administración Usuarios -->
            \t\t\t\t\t\t<li>
            \t\t\t\t\t\t\t<a href=\"javascript:;\">
            \t\t\t\t\t\t\t\t<i class=\"entypo-user\"></i>
            \t\t\t\t\t\t\t\t<span class=\"title\">Usuarios</span>
            \t\t\t\t\t\t\t</a>
            \t\t\t\t\t\t\t<ul>
            \t\t\t\t\t\t\t\t<li>
            \t\t\t\t\t\t\t\t\t<a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("indexUsuarios");
        echo "\">
            \t\t\t\t\t\t\t\t\t\t<i class=\"entypo-users\"></i>
            \t\t\t\t\t\t\t\t\t\t<span class=\"title\">Lista Usuarios</span>
                                  \t\t\t\t</a>
            \t\t\t\t\t\t\t\t</li>
                                            <li>
            \t\t\t\t\t\t\t\t\t<a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("agregarUsuario");
        echo "\">
            \t\t\t\t\t\t\t\t\t\t<i class=\"entypo-user-add\"></i>
            \t\t\t\t\t\t\t\t\t\t<span class=\"title\">Nuevo Usuario</span>
            \t\t\t\t\t\t\t\t\t</a>
            \t\t\t\t\t\t\t\t</li>
            \t\t\t\t\t\t\t</ul>
            \t\t\t\t\t\t</li>
                                    <!-- Administración Formularios -->
                                    <li>
            \t\t\t\t\t\t\t<a href=\"javascript:;\">
            \t\t\t\t\t\t\t\t<i class=\"entypo-doc-text\"></i>
            \t\t\t\t\t\t\t\t<span class=\"title\">Formularios</span>
            \t\t\t\t\t\t\t</a>
                                        <ul>
            \t\t\t\t\t\t\t\t<li>
            \t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">
            \t\t\t\t\t\t\t\t\t\t<i class=\"entypo-list\"></i>
            \t\t\t\t\t\t\t\t\t\t<span class=\"title\">Lista Formularios</span>
                                  \t\t\t\t</a>
            \t\t\t\t\t\t\t\t</li>
                                            <li>
            \t\t\t\t\t\t\t\t\t<a href=\"javascript:;\">
            \t\t\t\t\t\t\t\t\t\t<i class=\"entypo-list-add\"></i>
            \t\t\t\t\t\t\t\t\t\t<span class=\"title\">Nuevo Formulario</span>
            \t\t\t\t\t\t\t\t\t</a>
            \t\t\t\t\t\t\t\t</li>
            \t\t\t\t\t\t\t</ul>
            \t\t\t\t\t\t</li>
                                    
            \t\t\t\t\t</ul>
    \t\t\t\t    </li>
                <!-- Chat -->
                        <li>
    \t\t\t\t\t\t<a href=\"#\" data-toggle=\"chat\" data-collapse-sidebar=\"1\">
    \t\t\t\t\t\t\t<i class=\"entypo-chat\"></i>
    \t\t\t\t\t\t\tChat
    \t\t\t\t\t\t\t<span class=\"badge badge-success chat-notifications-badge is-hidden\">0</span>
    \t\t\t\t\t\t</a>
    \t\t\t\t\t</li>
                <!-- Cerrar Sesión --> 
            \t\t\t<li>
            \t\t\t\t<a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("logout");
        echo "\">
            \t\t\t\t\t<i class=\"entypo-flight\"></i>
            \t\t\t\t\t<span class=\"title\">Cerrar Sesión</span>
            \t\t\t\t</a>
            \t\t\t</li>
                        
            ";
    }

    public function getTemplateName()
    {
        return "neon/body/menulateral.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 78,  63 => 37,  54 => 31,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "neon/body/menulateral.html.twig", "D:\\xampp\\htdocs\\_fix\\mcr\\app\\Resources\\views\\neon\\body\\menulateral.html.twig");
    }
}
