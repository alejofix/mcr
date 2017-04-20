<?php

/* FixServicemeBundle:Usuarios:index.html.twig */
class __TwigTemplate_36489b628d4952d3cac62e649e7e136562cdf76c8d94c14a4e70d815d3fad081 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("neon/base.html.twig", "FixServicemeBundle:Usuarios:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "neon/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 5
        echo twig_include($this->env, $context, "FixServicemeBundle:Usuarios:mensajes/exito.html.twig");
        echo "
    
            <h3>
                <span class=\"label label-warning\">Administrador</span> 
                Lista Usuarios
                <span class=\"badge badge-success\">";
        // line 10
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getTotalItemCount", array()) - 1), "html", null, true);
        echo "</span>
\t\t    </h3>
            <hr />

    \t\t<table class=\"table table-bordered datatable\" id=\"table-usuarios\">
                                                
                <thead>
    \t\t\t\t<tr class=\"replace-inputs\">
    \t\t\t\t\t<th>";
        // line 18
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "Usuario", "u.usuario");
        echo " </th>
                        <th>";
        // line 19
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "Nombres", "u.nombres");
        echo " </th>                               
                        <th>";
        // line 20
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "Apellidos", "u.apellidos");
        echo " </th> 
                        <th>";
        // line 21
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "Correo", "u.correo");
        echo " </th> 
    \t\t\t        <th>";
        // line 22
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "Fecha Creado", "u.fechaCreado");
        echo " </th>  
    \t\t\t        <th>";
        // line 23
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "Cargo/Rol", "u.cargo");
        echo " </th>
                        <th><b>Empresa</b> </th> 
    \t\t\t        <th>Acción</th>                        
                  \t</tr>
    \t\t\t</thead>
    \t\t\t
                <tbody>
    \t\t\t\t
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 32
            echo "                        ";
            if (($this->getAttribute($context["usuario"], "role", array()) != "ROLE_ROOT")) {
                // line 33
                echo "                        <tr class=\"gradeU\">
        \t\t\t\t\t<td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "usuario", array()), "html", null, true);
                echo "</td>
        \t\t\t\t\t<td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nombres", array()), "html", null, true);
                echo "</td>
        \t\t\t\t\t<td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "apellidos", array()), "html", null, true);
                echo "</td>
        \t\t\t\t\t<td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "correo", array()), "html", null, true);
                echo "</td>
        \t\t\t\t\t<td class=\"center\">";
                // line 38
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["usuario"], "fechaCreado", array()), "d-m-Y H:i"), "html", null, true);
                echo "</td>
                            <td class=\"center\">";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "cargo", array()), "html", null, true);
                echo "
                                ";
                // line 40
                if (($this->getAttribute($context["usuario"], "role", array()) == "ROLE_ADMIN")) {
                    // line 41
                    echo "                                    /Administrador
                                ";
                } elseif (($this->getAttribute(                // line 42
$context["usuario"], "role", array()) == "ROLE_MCR")) {
                    // line 43
                    echo "                                    /Mejoramiento
                                ";
                } elseif (($this->getAttribute(                // line 44
$context["usuario"], "role", array()) == "ROLE_SD")) {
                    // line 45
                    echo "                                    /Service Desk
                                ";
                } elseif (($this->getAttribute(                // line 46
$context["usuario"], "role", array()) == "ROLE_EXP")) {
                    // line 47
                    echo "                                    /Experto
                                ";
                } elseif (($this->getAttribute(                // line 48
$context["usuario"], "role", array()) == "ROLE_INV")) {
                    // line 49
                    echo "                                    /Invitado
                                ";
                }
                // line 50
                echo "       
                            </td>
                           <td></td>
                            <td>
                                ";
                // line 54
                if (($this->getAttribute($context["usuario"], "activo", array()) == "1")) {
                    // line 55
                    echo "                                <a class=\"btn btn-primary\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verUsuario", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
                    echo "\"><i class=\"entypo-info\"></i></a>
                                <a class=\"btn btn-blue\"    href=\"";
                    // line 56
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("editarUsuario", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
                    echo "\"><i class=\"entypo-pencil\"></i></a>
                                <a class=\"btn btn-red\" href=\"javascript:;\"><i class=\"entypo-cancel\"></i></a>
                                ";
                } elseif (($this->getAttribute(                // line 58
$context["usuario"], "activo", array()) == "0")) {
                    // line 59
                    echo "                                <a class=\"btn btn-primary\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("verUsuario", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
                    echo "\"><i class=\"entypo-info\"></i></a>
                                ";
                }
                // line 61
                echo "                            </td>
        \t\t\t\t</tr>
                        ";
            }
            // line 64
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                    
    \t\t\t</tbody>
                
    \t\t</table>
            
            <!-- display Navigation KNP --> 
            <div class=\"pagination-container\">
\t\t\t\t";
        // line 72
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : null));
        echo "
            </div>

    ";
    }

    // line 78
    public function block_javascripts($context, array $blocks = array())
    {
        // line 79
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "



";
    }

    public function getTemplateName()
    {
        return "FixServicemeBundle:Usuarios:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 79,  201 => 78,  193 => 72,  184 => 65,  178 => 64,  173 => 61,  167 => 59,  165 => 58,  160 => 56,  155 => 55,  153 => 54,  147 => 50,  143 => 49,  141 => 48,  138 => 47,  136 => 46,  133 => 45,  131 => 44,  128 => 43,  126 => 42,  123 => 41,  121 => 40,  117 => 39,  113 => 38,  109 => 37,  105 => 36,  101 => 35,  97 => 34,  94 => 33,  91 => 32,  87 => 31,  76 => 23,  72 => 22,  68 => 21,  64 => 20,  60 => 19,  56 => 18,  45 => 10,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FixServicemeBundle:Usuarios:index.html.twig", "D:\\xampp\\htdocs\\_fix\\mcr\\src\\Fix\\ServicemeBundle/Resources/views/Usuarios/index.html.twig");
    }
}
