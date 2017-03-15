<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60b558f13f212622b71429dd386fc723affe025f7fe41bce03aef6d62d5c4bda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70eb587914d6a7b85f003fe770eaaba2ac4060eed74ab7397e98ad499e95078d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70eb587914d6a7b85f003fe770eaaba2ac4060eed74ab7397e98ad499e95078d->enter($__internal_70eb587914d6a7b85f003fe770eaaba2ac4060eed74ab7397e98ad499e95078d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9888fd01eea2bc567a81d29448c53b316469371b2306ef8ac16ef1311fe8f3a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9888fd01eea2bc567a81d29448c53b316469371b2306ef8ac16ef1311fe8f3a1->enter($__internal_9888fd01eea2bc567a81d29448c53b316469371b2306ef8ac16ef1311fe8f3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70eb587914d6a7b85f003fe770eaaba2ac4060eed74ab7397e98ad499e95078d->leave($__internal_70eb587914d6a7b85f003fe770eaaba2ac4060eed74ab7397e98ad499e95078d_prof);

        
        $__internal_9888fd01eea2bc567a81d29448c53b316469371b2306ef8ac16ef1311fe8f3a1->leave($__internal_9888fd01eea2bc567a81d29448c53b316469371b2306ef8ac16ef1311fe8f3a1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5172cf55bd19355aa9c4f2afe902fbce88c945a84d6a8dfbdbecd5a0d218f832 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5172cf55bd19355aa9c4f2afe902fbce88c945a84d6a8dfbdbecd5a0d218f832->enter($__internal_5172cf55bd19355aa9c4f2afe902fbce88c945a84d6a8dfbdbecd5a0d218f832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fb68652b447adec15bc92d017a19f83890bc1866b49876cbc760256b034840a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb68652b447adec15bc92d017a19f83890bc1866b49876cbc760256b034840a9->enter($__internal_fb68652b447adec15bc92d017a19f83890bc1866b49876cbc760256b034840a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fb68652b447adec15bc92d017a19f83890bc1866b49876cbc760256b034840a9->leave($__internal_fb68652b447adec15bc92d017a19f83890bc1866b49876cbc760256b034840a9_prof);

        
        $__internal_5172cf55bd19355aa9c4f2afe902fbce88c945a84d6a8dfbdbecd5a0d218f832->leave($__internal_5172cf55bd19355aa9c4f2afe902fbce88c945a84d6a8dfbdbecd5a0d218f832_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_978659787ac28f0e0632810078e1c0b8a8b034cc78cbf8f50b75e3f7f06df392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_978659787ac28f0e0632810078e1c0b8a8b034cc78cbf8f50b75e3f7f06df392->enter($__internal_978659787ac28f0e0632810078e1c0b8a8b034cc78cbf8f50b75e3f7f06df392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c57f4182190e1d1715b30e3211d53be01fe71687a2571012232111d813ac238d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c57f4182190e1d1715b30e3211d53be01fe71687a2571012232111d813ac238d->enter($__internal_c57f4182190e1d1715b30e3211d53be01fe71687a2571012232111d813ac238d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c57f4182190e1d1715b30e3211d53be01fe71687a2571012232111d813ac238d->leave($__internal_c57f4182190e1d1715b30e3211d53be01fe71687a2571012232111d813ac238d_prof);

        
        $__internal_978659787ac28f0e0632810078e1c0b8a8b034cc78cbf8f50b75e3f7f06df392->leave($__internal_978659787ac28f0e0632810078e1c0b8a8b034cc78cbf8f50b75e3f7f06df392_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e25eba79bf55c738287ef03a0ba1d0af18c10047430dca743ff32f00daddf7af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e25eba79bf55c738287ef03a0ba1d0af18c10047430dca743ff32f00daddf7af->enter($__internal_e25eba79bf55c738287ef03a0ba1d0af18c10047430dca743ff32f00daddf7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0920f1f2af2ab7f8bc5b5242792320963a4266e95c188a4999c7c0b0c11e9103 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0920f1f2af2ab7f8bc5b5242792320963a4266e95c188a4999c7c0b0c11e9103->enter($__internal_0920f1f2af2ab7f8bc5b5242792320963a4266e95c188a4999c7c0b0c11e9103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0920f1f2af2ab7f8bc5b5242792320963a4266e95c188a4999c7c0b0c11e9103->leave($__internal_0920f1f2af2ab7f8bc5b5242792320963a4266e95c188a4999c7c0b0c11e9103_prof);

        
        $__internal_e25eba79bf55c738287ef03a0ba1d0af18c10047430dca743ff32f00daddf7af->leave($__internal_e25eba79bf55c738287ef03a0ba1d0af18c10047430dca743ff32f00daddf7af_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\Servidor\\xampp\\htdocs\\_fix\\mcr\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
