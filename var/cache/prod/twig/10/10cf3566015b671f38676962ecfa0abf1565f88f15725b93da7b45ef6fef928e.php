<?php

/* FixServicemeBundle:Serviceme:mensajes/bienvenida.html.twig */
class __TwigTemplate_61f151af88bcd6c0b5a884c9865343ddc25d166cd7df2aeb1469a2108e3a2824 extends Twig_Template
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
    <script type=\"text/javascript\">
\t\tjQuery(document).ready(function(\$)
\t\t{
\t\t\tsetTimeout(function()
\t\t\t{
\t\t\t\tvar opts = {
\t\t\t\t\t\"closeButton\": true,
\t\t\t\t\t\"debug\": false,
\t\t\t\t\t//\"positionClass\": \"toast-top-full-width\",
                    //\"positionClass\": rtl() || public_vars.\$pageContainer.hasClass('right-sidebar') ? \"toast-bottom-right\" : \"toast-bottom-right\",
\t\t\t\t\t\"toastClass\": \"black\",
\t\t\t\t\t\"onclick\": null,
\t\t\t\t\t\"showDuration\": \"300\",
\t\t\t\t\t\"hideDuration\": \"1000\",
\t\t\t\t\t\"timeOut\": \"5000\",
\t\t\t\t\t\"extendedTimeOut\": \"1000\",
\t\t\t\t\t\"showEasing\": \"swing\",
\t\t\t\t\t\"hideEasing\": \"linear\",
\t\t\t\t\t\"showMethod\": \"fadeIn\",
\t\t\t\t\t\"hideMethod\": \"fadeOut\"
\t\t\t\t};
\t\t
\t\t\t\ttoastr.info(\"Si no usas Chrome tu Navegación puede ser Turbulenta. \", \"Bienvenido al APP de MCR\", opts);
\t\t\t}, 700);
\t\t
\t\t\tvar seriesData = [ [], [] ];
\t\t
\t\t\tvar random = new Rickshaw.Fixtures.RandomData(50);
\t\t
\t\t\tfor (var i = 0; i < 50; i++)
\t\t\t{
\t\t\t\trandom.addData(seriesData);
\t\t\t}
\t\t
\t\t\tvar graph = new Rickshaw.Graph( {
\t\t\t\telement: document.getElementById(\"rickshaw-chart-demo\"),
\t\t\t\theight: 193,
\t\t\t\trenderer: 'area',
\t\t\t\tstroke: false,
\t\t\t\tpreserve: true,
\t\t\t\tseries: [{
\t\t\t\t\t\tcolor: '#73c8ff',
\t\t\t\t\t\tdata: seriesData[0],
\t\t\t\t\t\tname: 'Upload'
\t\t\t\t\t}, {
\t\t\t\t\t\tcolor: '#e0f2ff',
\t\t\t\t\t\tdata: seriesData[1],
\t\t\t\t\t\tname: 'Download'
\t\t\t\t\t}
\t\t\t\t]
\t\t\t} );
\t\t
\t\t\tgraph.render();
\t\t
\t\t\tvar hoverDetail = new Rickshaw.Graph.HoverDetail( {
\t\t\t\tgraph: graph,
\t\t\t\txFormatter: function(x) {
\t\t\t\t\treturn new Date(x * 1000).toString();
\t\t\t\t}
\t\t\t} );
\t\t
\t\t\tvar legend = new Rickshaw.Graph.Legend( {
\t\t\t\tgraph: graph,
\t\t\t\telement: document.getElementById('rickshaw-legend')
\t\t\t} );
\t\t
\t\t\tvar highlighter = new Rickshaw.Graph.Behavior.Series.Highlight( {
\t\t\t\tgraph: graph,
\t\t\t\tlegend: legend
\t\t\t} );
\t\t
\t\t\tsetInterval( function() {
\t\t\t\trandom.removeData(seriesData);
\t\t\t\trandom.addData(seriesData);
\t\t\t\tgraph.update();
    \t\t
\t\t\t}, 500 );
\t\t});
    </script>
";
    }

    public function getTemplateName()
    {
        return "FixServicemeBundle:Serviceme:mensajes/bienvenida.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FixServicemeBundle:Serviceme:mensajes/bienvenida.html.twig", "D:\\xampp\\htdocs\\_fix\\mcr\\src\\Fix\\ServicemeBundle/Resources/views/Serviceme/mensajes/bienvenida.html.twig");
    }
}
