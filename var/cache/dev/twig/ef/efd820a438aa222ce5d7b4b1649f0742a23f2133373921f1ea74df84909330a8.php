<?php

/* @EasyAdmin/css/easyadmin.css.twig */
class __TwigTemplate_8aaefed42fe38d96a8e9787ae80b92ca17538b72fecc6ca5763f3f3d95f51375 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/css/easyadmin.css.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/css/easyadmin.css.twig"));

        // line 4
        echo "
";
        // line 5
        $context["color_schemes"] = array("dark" => array("danger" => "#D42124", "success" => "#006B2E", "text" => "#222222", "text_muted" => "#737373", "link" => "#205081", "black" => "#111111", "white" => "#FFFFFF", "gray_darker" => "#252525", "gray_dark" => "#444", "gray" => "#AAA", "gray_light" => "#CCC", "gray_lighter" => "#F5F5F5", "page_background" => "#F5F5F5", "table_header" => "#EEE", "table_border" => "#CCC", "table_row_border" => "#DDD"), "light" => array("danger" => "#D42124", "success" => "#006B2E", "text" => "#444444", "text_muted" => "#737373", "link" => "#205081", "black" => "#333333", "white" => "#FFFFFF", "gray_darker" => "#444", "gray_dark" => "#AAA", "gray" => "#CCC", "gray_light" => "#F5F5F5", "gray_lighter" => "#FAFAFA", "page_background" => "#FFFFFF", "table_header" => "#FAFAFA", "table_border" => "#FFFFFF", "table_row_border" => "#E5E5E5"));
        // line 43
        echo "
";
        // line 44
        $context["colors"] = twig_get_attribute($this->env, $this->source, (isset($context["color_schemes"]) || array_key_exists("color_schemes", $context) ? $context["color_schemes"] : (function () { throw new Twig_Error_Runtime('Variable "color_schemes" does not exist.', 44, $this->source); })()), (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 44, $this->source); })()), array(), "array");
        // line 45
        echo "
";
        // line 52
        echo ".sf-toolbarreset {
    -webkit-font-smoothing: subpixel-antialiased;
    -moz-osx-font-smoothing: auto;
}

";
        // line 60
        echo "body {
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif;
}

";
        // line 66
        echo "a        { color: ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 66, $this->source); })()), "link", array());
        echo "; }
a:hover  { opacity: 0.9; }
a:active { outline: 0; }

#main a:active {
    position: relative;
    top: 1px;
}

a.text-primary,
a.text-primary:focus {
    color: ";
        // line 77
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 77, $this->source); })()), "link", array());
        echo ";
}
a.text-danger,
a.text-danger:focus {
    color: ";
        // line 81
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 81, $this->source); })()), "danger", array());
        echo ";
}
a.text-primary:hover,
a.text-danger:hover {
    opacity: 0.9;
}

";
        // line 90
        echo "ul, ol {
    margin: 1em 0 1em 1em;
    padding: 0;
}
li {
    margin-bottom: 1em;
}

ul.inline {
    list-style: none;
    margin: 0;
}
ul.inline li {
    margin: 0;
}

";
        // line 108
        echo "div.flash {
    padding: .5em;
}
div.flash-success {
    background: ";
        // line 112
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 112, $this->source); })()), "success", array());
        echo ";
    color: ";
        // line 113
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 113, $this->source); })()), "white", array());
        echo ";
}
div.flash-error {
    background: ";
        // line 116
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 116, $this->source); })()), "danger", array());
        echo ";
    color: ";
        // line 117
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 117, $this->source); })()), "white", array());
        echo ";
}
div.flash-error strong {
    padding-right: .5em;
}

";
        // line 126
        echo ".label:not([class*=label-]) {
    background: ";
        // line 127
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 127, $this->source); })()), "gray_darker", array());
        echo ";
}
.label {
    color: ";
        // line 130
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 130, $this->source); })()), "white", array());
        echo ";
    display: inline-block;
    font-size: 11px;
    padding: 4px;
    text-transform: uppercase;
}

.label-success {
    ";
        // line 139
        echo "    background: ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 139, $this->source); })()), "success", array());
        echo " !important;
}
.label-danger {
    ";
        // line 143
        echo "    background: ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 143, $this->source); })()), "danger", array());
        echo " !important;
}
.label-empty {
    background: transparent;
    border: 2px dotted;
    border-radius: 4px;
    color: ";
        // line 149
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 149, $this->source); })()), "gray_light", array());
        echo ";
    padding: 4px 8px;
}

";
        // line 154
        echo ".boolean .label,
.toggle .label {
    min-width: 33px;
}

";
        // line 163
        echo ".toggle { position: initial; }
.toggle:not(th) { position: relative; }

.toggle.btn-xs {
 width: 44px;
}
.toggle-group .btn,
.toggle-group .btn:hover {
   border-radius: 3px;
   font-size: 10px;
   font-weight: bold;
   text-transform: uppercase;
}
.toggle-group .btn {
   padding: 4px 6px;
}
.toggle-group .btn:hover {
    border: 0;
}
.toggle-group .btn + .btn {
    margin-left: 0;
}
.toggle-group .toggle-on,
.toggle-group .toggle-on.btn-xs,
.toggle-group .toggle-on:hover,
.toggle-group .toggle-on:active,
.toggle-group .toggle-on:active:hover {
    padding: 4px 5px 4px 0;
    border: 0;
}
.toggle-group .toggle-off,
.toggle-group .toggle-off.btn-xs,
.toggle-group .toggle-off:hover,
.toggle-group .toggle-off:active,
.toggle-group .toggle-off:active:hover {
    padding: 4px 0 4px 5px;
    border: 0;
}
.toggle-group .toggle-handle,
.toggle-group .toggle-handle:hover,
.toggle-group .toggle-handle:active,
.toggle-group .toggle-handle:active:hover {
    background: ";
        // line 205
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 205, $this->source); })()), "gray_lighter", array());
        echo ";
    border: 0;
    border-radius: 2px;
    height: 19px;
    margin-top: 2px;
    padding: 5px;
}
.toggle .btn-success .toggle-handle {
    box-shadow: -2px 0 1px rgba(0, 0, 0, .2);
}
.toggle .btn-danger .toggle-handle {
    box-shadow: 2px 0 1px rgba(0, 0, 0, .2);
}

";
        // line 221
        echo "span.badge {
    background-color: ";
        // line 222
        echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new Twig_Error_Runtime('Variable "brand_color" does not exist.', 222, $this->source); })());
        echo ";
}

";
        // line 227
        echo ".btn:focus {
    outline: none;
}
.btn + .btn {
    margin-left: 5px;
}

button.btn:active {
    position: relative;
    top: 1px;
}

.btn,
.btn:hover,
.btn:active,
.btn:focus,
.btn:active:hover  {
";
        // line 244
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 244, $this->source); })()))) {
            // line 245
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 245, $this->source); })()), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 246
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 246, $this->source); })()))) {
            // line 247
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 247, $this->source); })()), "gray", array());
            echo ";
";
        }
        // line 249
        echo "    border: 1px solid transparent;
    border-radius: 4px;
    box-shadow: none;
    color: ";
        // line 252
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 252, $this->source); })()), "text", array());
        echo ";
    display: inline-block;
    line-height: 1.42857143;
    opacity: 1;
    outline: none;
    padding: 6px 12px;
    text-align: center;
}
.btn-xs,
.btn-xs:hover,
.btn-xs:active,
.btn-xs:focus,
.btn-xs:active:hover {
    padding: 1px 5px;
}

.btn-primary,
.btn-primary:hover,
.btn-primary:active,
.btn-primary:focus,
.btn-primary:active:hover {
    background-color: ";
        // line 273
        echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new Twig_Error_Runtime('Variable "brand_color" does not exist.', 273, $this->source); })());
        echo ";
    border-color: transparent;
    color: ";
        // line 275
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 275, $this->source); })()), "white", array());
        echo ";
}
.btn-info,
.btn-info:hover,
.btn-info:active,
.btn-info:focus,
.btn-info:active:hover {
    background-color: #39a0ed;
    border-color: transparent;
    color: ";
        // line 284
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 284, $this->source); })()), "white", array());
        echo ";
}
.btn-default,
.btn-default:hover,
.btn-default:active,
.btn-default:focus,
.btn-default:active:hover {
    border-color: transparent;
}

.btn-danger,
.btn-danger:hover,
.btn-danger:active,
.btn-danger:focus,
.btn-danger:active:hover {
    background-color: ";
        // line 299
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 299, $this->source); })()), "danger", array());
        echo ";
    border-color: transparent;
    color: ";
        // line 301
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 301, $this->source); })()), "white", array());
        echo ";
}

.btn-success,
.btn-success:hover,
.btn-success:active,
.btn-success:focus,
.btn-success:active:hover {
    background-color: ";
        // line 309
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 309, $this->source); })()), "success", array());
        echo ";
    border-color: transparent;
    color: ";
        // line 311
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 311, $this->source); })()), "white", array());
        echo ";
}

";
        // line 315
        echo ".btn-secondary,
.btn-secondary:hover,
.btn-secondary:active,
.btn-secondary:focus,
.btn-secondary:active:hover {
    background: transparent;
    color: ";
        // line 321
        echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new Twig_Error_Runtime('Variable "brand_color" does not exist.', 321, $this->source); })());
        echo ";
    text-decoration: underline;
}
.btn-secondary:hover {
    text-decoration: none;
}

.btn-primary,
.btn-danger,
.btn-success,
.btn-info {
    font-weight: bold;
}

.btn i {
    font-size: 16px;
    margin-right: 2px;
}

.btn-flat,
.btn-flat:hover,
.btn-flat:active,
.btn-flat:focus,
.btn-flat:active:hover {
    border-radius: 0;
}

";
        // line 350
        echo ".form-inline .form-control {
    margin-bottom: 5px;
}
.form-control,
.form-inline .form-control {
    border: 1px solid ";
        // line 355
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 355, $this->source); })()), "gray", array());
        echo ";
    border-radius: 0;
";
        // line 357
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 357, $this->source); })()))) {
            // line 358
            echo "    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
";
        }
        // line 360
        echo "    color: ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 360, $this->source); })()), "text", array());
        echo ";
    -webkit-transition: none;
    transition: none;
}
.form-control:focus {
";
        // line 365
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 365, $this->source); })()))) {
            // line 366
            echo "    border-color: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 366, $this->source); })()), "gray_dark", array());
            echo ";
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
";
        } elseif (("light" ==         // line 368
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 368, $this->source); })()))) {
            // line 369
            echo "    border-color: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 369, $this->source); })()), "gray_darker", array());
            echo ";
";
        }
        // line 371
        echo "}

.has-error .error-block {
    color: ";
        // line 374
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 374, $this->source); })()), "danger", array());
        echo ";
    font-weight: bold;
    padding-top: 5px;
}
.has-error .error-block .label-danger {
    margin-right: 3px;
}
.has-error .error-block ul {
    margin: .5em 0 .5em 1.5em;
}
.has-error .error-block ul li {
    margin-bottom: .5em;
}

.help-block,
.has-error .help-block {
    color: ";
        // line 390
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 390, $this->source); })()), "text_muted", array());
        echo ";
    font-size: 13px;
}
.nullable-control {
   padding-top: 5px;
}

.form-actions.stuck {
    bottom: 0;
    position: fixed;
";
        // line 400
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 400, $this->source); })()))) {
            // line 401
            echo "    background-color: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 401, $this->source); })()), "gray_lighter", array());
            echo ";
    box-shadow: 0 -1px 4px ";
            // line 402
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 402, $this->source); })()), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 403
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 403, $this->source); })()))) {
            // line 404
            echo "    background-color: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 404, $this->source); })()), "gray_light", array());
            echo ";
    box-shadow: 0 -1px 4px ";
            // line 405
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 405, $this->source); })()), "gray", array());
            echo ";
";
        }
        // line 407
        echo "    height: 52px;
    padding-top: 10px;
";
        // line 409
        if (((array_key_exists("kernel_debug", $context)) ? (_twig_default_filter((isset($context["kernel_debug"]) || array_key_exists("kernel_debug", $context) ? $context["kernel_debug"] : (function () { throw new Twig_Error_Runtime('Variable "kernel_debug" does not exist.', 409, $this->source); })()), false)) : (false))) {
            // line 410
            echo "    height: 85px;
    padding-bottom: 45px;
";
        }
        // line 413
        echo "    z-index: 9999;
}

";
        // line 418
        echo ".field-collection .collection-empty {
    margin: .5em 0;
}

";
        // line 424
        echo ".field-divider hr {
    margin-top: 15px;
    margin-bottom: 26px;
    border: 0;
    border-top: 1px solid;
";
        // line 429
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 429, $this->source); })()))) {
            // line 430
            echo "    border-top-color: #DDD;
";
        } elseif (("light" ==         // line 431
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 431, $this->source); })()))) {
            // line 432
            echo "    border-top-color: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 432, $this->source); })()), "gray_lighter", array());
            echo ";
";
        }
        // line 434
        echo "}
.field-group .field-divider hr {
";
        // line 436
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 436, $this->source); })()))) {
            // line 437
            echo "    border-top-color: #DDD;
";
        } elseif (("light" ==         // line 438
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 438, $this->source); })()))) {
            // line 439
            echo "    border-top-color: #EEE;
";
        }
        // line 441
        echo "}

.field-section {
    margin: 16px 0 15px;
}
.field-section h2 {
";
        // line 447
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 447, $this->source); })()))) {
            // line 448
            echo "    border-bottom: 1px solid ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 448, $this->source); })()), "gray_light", array());
            echo ";
    color: ";
            // line 449
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 449, $this->source); })()), "gray_dark", array());
            echo ";
";
        } elseif (("light" ==         // line 450
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 450, $this->source); })()))) {
            // line 451
            echo "    border-bottom: 1px solid #EEE;
    color: ";
            // line 452
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 452, $this->source); })()), "gray_darker", array());
            echo ";
";
        }
        // line 454
        echo "    font-size: 16px;
    padding-bottom: 6px;
}
.field-section h2 i {
";
        // line 458
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 458, $this->source); })()))) {
            // line 459
            echo "    color: #555;
";
        } elseif (("light" ==         // line 460
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 460, $this->source); })()))) {
            // line 461
            echo "    color: #777;
";
        }
        // line 463
        echo "    margin-right: 2px;
}
.field-section p.help-block {
    margin: 8px 0 0;
}

.field-group .box {
";
        // line 470
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 470, $this->source); })()))) {
            // line 471
            echo "    border: 1px solid #DDD;
";
        } elseif (("light" ==         // line 472
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 472, $this->source); })()))) {
            // line 473
            echo "    border: 1px solid #EEE;
";
        }
        // line 475
        echo "    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
}
.field-group .box-header i {
";
        // line 478
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 478, $this->source); })()))) {
            // line 479
            echo "    color: #555;
";
        } elseif (("light" ==         // line 480
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 480, $this->source); })()))) {
            // line 481
            echo "    color: #777;
";
        }
        // line 483
        echo "    margin-right: 2px;
}
.field-group .box-header.with-border {
";
        // line 486
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 486, $this->source); })()))) {
            // line 487
            echo "    background: #F0F0F0;
    border-bottom-color: #DDD;
";
        } elseif (("light" ==         // line 489
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 489, $this->source); })()))) {
            // line 490
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 490, $this->source); })()), "gray_light", array());
            echo ";
    border-bottom-color: #EEE;
    color: ";
            // line 492
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 492, $this->source); })()), "gray_darker", array());
            echo ";
";
        }
        // line 494
        echo "    padding: 11px 10px 9px;
}
";
        // line 496
        if (("light" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 496, $this->source); })()))) {
            // line 497
            echo ".field-group .box-header .box-title {
    color: #777;
}
";
        }
        // line 501
        echo ".field-group .box-body {
    padding: 15px 15px 5px;
}
.field-group .box-body > .help-block {
    margin-top: 0;
}

";
        // line 511
        echo ".select2-container {
    width: 100% !important;
}
.select2-container--bootstrap .select2-selection {
    border: 1px solid ";
        // line 515
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 515, $this->source); })()), "gray", array());
        echo ";
    border-radius: 0;
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
    color: ";
        // line 518
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 518, $this->source); })()), "text", array());
        echo ";
    -webkit-transition: none;
    transition: none;
}
.select2-container--bootstrap .select2-selection .select2-search--inline {
    margin: 0;
}
.select2-container--bootstrap .select2-selection--single .select2-selection__rendered {
    color: ";
        // line 526
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 526, $this->source); })()), "text", array());
        echo ";
    padding-top: 4px;
}
.select2-container--bootstrap .select2-results__option {
    margin-bottom: 0;
}
.select2-container--bootstrap .select2-results__option[aria-selected=true] {
    background-color: ";
        // line 533
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 533, $this->source); })()), "gray_light", array());
        echo ";
    font-weight: bold;
}
.select2-container--bootstrap .select2-results__option--highlighted[aria-selected] {
    background-color: ";
        // line 537
        echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new Twig_Error_Runtime('Variable "brand_color" does not exist.', 537, $this->source); })());
        echo ";
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice {
    color: ";
        // line 540
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 540, $this->source); })()), "text", array());
        echo ";
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice__remove {
    color: ";
        // line 543
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 543, $this->source); })()), "danger", array());
        echo ";
    font-weight: bold;
    position: relative;
    top: -1px;
}
.select2-container--bootstrap .select2-search--dropdown .select2-search__field {
    border: 1px solid ";
        // line 549
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 549, $this->source); })()), "gray_dark", array());
        echo ";
    border-radius: 0;
    margin: 5px 10px;
    padding: 6px;
    width: 96%;
}
.select2-search--inline .select2-search__field:focus {
    outline: 0;
    border: 0;
}

";
        // line 562
        echo ".easyadmin-vich-image img {
    border: 3px solid ";
        // line 563
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 563, $this->source); })()), "white", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 564
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 564, $this->source); })()), "gray", array());
        echo ";
    max-height: 300px;
    max-width: 400px;
}
.easyadmin-vich-image input[type=\"file\"],
.easyadmin-vich-file input[type=\"file\"] {
    padding-top: 7px;
}
.easyadmin-vich-file a {
    display: inline-block;
    padding-top: 7px;
}
";
        // line 577
        echo ".easyadmin-vich-file .field-checkbox {
    margin-bottom: 0;
}
.easyadmin-vich-file .field-checkbox .col-sm-2,
.easyadmin-vich-image .field-checkbox .col-sm-2 {
    display: none;
}

";
        // line 587
        echo ".easyadmin-thumbnail img {
    border: 3px solid ";
        // line 588
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 588, $this->source); })()), "white", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 589
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 589, $this->source); })()), "gray", array());
        echo ";
    max-height: 100px;
    max-width: 100%;
}
.easyadmin-thumbnail img:hover {
    cursor: zoom-in;
}
.featherlight .easyadmin-lightbox:hover {
    cursor: zoom-out;
}
.easyadmin-lightbox {
    display: none;
}
.featherlight .easyadmin-lightbox {
    display: block;
}
.easyadmin-lightbox img {
    max-width: 100%;
}

";
        // line 611
        echo ".modal-dialog .modal-content {
    border-radius: 0;
}
.modal-dialog .modal-content .modal-body h4 {
    font-size: 21px;
    margin: .5em 0;
}
.modal-dialog .modal-footer {
    background: ";
        // line 619
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 619, $this->source); })()), "gray_lighter", array());
        echo ";
    border-top: 1px solid ";
        // line 620
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 620, $this->source); })()), "gray_light", array());
        echo ";
    margin-top: 1.5em;
}

";
        // line 626
        echo ".newrow, .new-row {
    clear: both;
    display: block;
}

";
        // line 634
        echo "
";
        // line 637
        echo ".content-wrapper {
    background: ";
        // line 638
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 638, $this->source); })()), "page_background", array());
        echo ";
}
.fixed .content-wrapper {
    padding-top: 50px;
}

";
        // line 646
        echo ".main-header {
    background: ";
        // line 647
        echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new Twig_Error_Runtime('Variable "brand_color" does not exist.', 647, $this->source); })());
        echo ";
    position: relative;
}
.main-header .logo {
    color: ";
        // line 651
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 651, $this->source); })()), "white", array());
        echo ";
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif; ";
        // line 653
        echo "    font-size: 18px;
    font-weight: bold;
    height: 45px;
    line-height: 45px;
    padding: 0;
}
.main-header .logo-long .logo-lg {
    font-size: 16px;
}
.main-header .logo-lg {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.main-header #header-logo {
}
.main-header img {
    margin-top: -2px;
    max-height: 36px;
}
.main-header li {
    margin-bottom: 0;
}

.main-header > .navbar {
    background-color: ";
        // line 678
        echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new Twig_Error_Runtime('Variable "brand_color" does not exist.', 678, $this->source); })());
        echo ";
    color: rgba(255, 255, 255, 0.9);
    margin-left: 0;
    min-height: 40px;
}

.main-header .navbar .sidebar-toggle {
    color: rgba(255, 255, 255, 0.8);
    display: inline-block;
    font-size: 16px;
    height: 35px;
    left: 0;
    line-height: 35px;
    padding: 0 15px;
    position: absolute;
    text-align: center;
    top: 45px;
}
.sidebar-mini.sidebar-collapse .sidebar-toggle {
    color: ";
        // line 697
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 697, $this->source); })()), "white", array());
        echo ";
}

.navbar-custom-menu,
.navbar-custom-menu ul.navbar-nav,
.navbar-custom-menu ul.navbar-nav .user-menu {
    float: none;
}
.navbar-custom-menu {
    background: rgba(255, 255, 255, 0.1);
    color: rgba(255, 255, 255, 0.8);
    font-size: 13px;
    font-weight: bold;
    height: 35px;
    line-height: 35px;
    padding: 0 15px;
    text-align: right;
    width: 100%;
}

.main-header .navbar .user-menu .btn {
    background: rgba(255, 255, 255, 0.05);
    border-color: transparent;
    color: #fff;
}
.main-header .navbar .user-menu .btn:active {
    top: 0;
}
.main-header .navbar .user-menu .btn.dropdown-toggle {
    padding: 6px 8px;
}
.main-header .navbar .user-menu .btn-group:hover .btn {
    background: rgba(255, 255, 255, 0.1);
}
.main-header .navbar .user-menu .btn-group {
    height: 35px;
}
.main-header .navbar .user-menu .btn-group .btn {
    border-radius: 0;
}
.main-header .navbar .user-menu .dropdown-menu {
    background: #fff;
    box-shadow: 1px 1px 3px #ccc;
    border-radius: 2px;
    position: absolute;
    left: auto;
    right: 0;
}
.main-header .navbar .user-menu .dropdown-menu i {
    margin: 0;
}
.main-header .navbar .user-menu .dropdown-menu a {
    color: #777;
}

";
        // line 754
        echo "#content #main {
    padding-bottom: 3em;
}
.content {
    padding-top: 10px;
}
.content-header {
    padding: 12px 15px 0 15px;
}
.content-header h1 {
    margin: 0;
    font-size: 24px;
}

";
        // line 770
        echo ".main-sidebar,
.wrapper {
";
        // line 772
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 772, $this->source); })()))) {
            // line 773
            echo "    background-color: #333;
";
        } elseif (("light" ==         // line 774
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 774, $this->source); })()))) {
            // line 775
            echo "    background-color: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 775, $this->source); })()), "gray_light", array());
            echo ";
";
        }
        // line 777
        echo "}
.main-sidebar {
    padding-top: 80px;
}

.sidebar-menu li.header {
";
        // line 783
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 783, $this->source); })()))) {
            // line 784
            echo "    color: #777;
";
        } elseif (("light" ==         // line 785
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 785, $this->source); })()))) {
            // line 786
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 786, $this->source); })()), "gray_dark", array());
            echo ";
";
        }
        // line 788
        echo "    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
}
.treeview-menu > li.header {
";
        // line 793
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 793, $this->source); })()))) {
            // line 794
            echo "    background: #404040;
";
        } elseif (("light" ==         // line 795
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 795, $this->source); })()))) {
            // line 796
            echo "    background-color: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 796, $this->source); })()), "gray_lighter", array());
            echo ";
";
        }
        // line 798
        echo "    padding-left: 28px;
}

.sidebar-menu li a,
.sidebar-menu li a span,
.sidebar-menu li.header,
.sidebar-mini.sidebar-collapse .sidebar-menu .treeview-menu a {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.sidebar-mini.sidebar-collapse .sidebar-menu li a {
    overflow: visible;
}

.sidebar-menu > li > a,
.sidebar-menu .treeview-menu > li > a {
";
        // line 815
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 815, $this->source); })()))) {
            // line 816
            echo "    background: #333;
    color: #CCC;
";
        } elseif (("light" ==         // line 818
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 818, $this->source); })()))) {
            // line 819
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 819, $this->source); })()), "gray_darker", array());
            echo ";
";
        }
        // line 821
        echo "    border-left: 3px solid transparent;
    display: block;
    font-weight: bold;
    opacity: 1;
}
.sidebar-menu .treeview-menu > li > a {
";
        // line 827
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 827, $this->source); })()))) {
            // line 828
            echo "    background: #404040;
";
        } elseif (("light" ==         // line 829
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 829, $this->source); })()))) {
            // line 830
            echo "    background-color: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 830, $this->source); })()), "gray_lighter", array());
            echo ";
";
        }
        // line 832
        echo "    font-size: 13px;
    padding: 8px 5px 8px 25px;
}
.sidebar-menu > li:hover > a,
.sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu > li.active > a,
.sidebar-menu .treeview-menu > li.active > a,
.sidebar-collapse .sidebar-menu > li.active.submenu-active > a,
.sidebar-collapse .sidebar-menu > li:hover .treeview-menu > li.active > a {
";
        // line 841
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 841, $this->source); })()))) {
            // line 842
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 842, $this->source); })()), "white", array());
            echo ";
    background: #4D4D4D;
    border-left-color: #BBB;
";
        } elseif (("light" ==         // line 845
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 845, $this->source); })()))) {
            // line 846
            echo "    background: #DCDCDC;
    border-left-color: #808080;
";
        }
        // line 849
        echo "}
.sidebar-menu > li > a > .fa {
    width: 22px;
}
.sidebar-menu .treeview-menu {
    padding: 0;
}

";
        // line 858
        echo ".sidebar-menu li > a > .pull-right {
    font-weight: bold;
    text-align: right;
}
";
        // line 863
        echo ".sidebar-menu li.active > a > .fa-angle-left {
    top: 30px;
    right: 0;
}

";
        // line 869
        echo ".sidebar-collapse .sidebar-menu > li > a {
    padding: 12px 5px 12px 12px;
}
.sidebar-collapse .sidebar-menu > li .treeview-menu > li > a {
    padding-left: 12px;
}
.sidebar-collapse .sidebar-menu > li > a > i.fa {
    font-size: 18px;
}
.sidebar-mini.sidebar-collapse .sidebar-menu > li > .treeview-menu {
    padding: 0;
}
.sidebar-collapse .sidebar-menu > li:hover > a,
.sidebar-collapse .sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu > li.active.submenu-active > a,
.sidebar-collapse .sidebar-menu > li.active.submenu-active:hover > a {
    border-left-color: transparent;
";
        // line 886
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 886, $this->source); })()))) {
            // line 887
            echo "    background: #333;
";
        } elseif (("light" ==         // line 888
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 888, $this->source); })()))) {
            // line 889
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 889, $this->source); })()), "gray_light", array());
            echo ";
";
        }
        // line 891
        echo "}

";
        // line 894
        echo ".sidebar-mini.sidebar-collapse .sidebar-menu li.header {
";
        // line 895
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 895, $this->source); })()))) {
            // line 896
            echo "    border-bottom: 1px solid #777;
";
        } elseif (("light" ==         // line 897
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 897, $this->source); })()))) {
            // line 898
            echo "    border-bottom: 1px solid #BBB;
";
        }
        // line 900
        echo "    display: block !important;
    font-size: 0;
    height: 1px;
    margin: 0;
    padding: 0;
}

";
        // line 910
        echo "body.easyadmin h1.title {
    margin-bottom: 10px;
}

.help-entity {
";
        // line 915
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 915, $this->source); })()))) {
            // line 916
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 916, $this->source); })()), "gray_dark", array());
            echo ";
";
        } elseif (("light" ==         // line 917
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 917, $this->source); })()))) {
            // line 918
            echo "    border: 1px solid #EEE;
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
    color: ";
            // line 920
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 920, $this->source); })()), "text_muted", array());
            echo ";
";
        }
        // line 922
        echo "    margin: 10px 0 5px;
}

";
        // line 928
        echo "
body.list .global-actions {
    display: table;
    width: 100%;
}
body.list .global-actions .button-action {
    display: table-cell;
    padding-left: 10px;
    vertical-align: middle;
    width: 120px;
}
body.list .global-actions .button-action a {
    float: right;
}
body.list .global-actions .form-action {
    display: table-cell;
    width: 100%;
}
body.list .global-actions .form-action .input-group {
    width: 100%;
}

body.list .global-actions .form-control {
    box-shadow: none;
}
body.list .global-actions .input-group-btn > button.btn:not(:last-child) {
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
}
body.list .global-actions .input-group-btn a.btn {
    border-radius: 3px;
    margin-left: 10px;
}

";
        // line 964
        echo "body.list .table-responsive,
body.list table {
    background: transparent;
    border: 0;
}
body.list table thead {
    display: none;
}
body.list .table tbody {
    background: transparent;
    border: 0;
}
body.list table tbody tr {
    background: ";
        // line 977
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 977, $this->source); })()), "white", array());
        echo ";
";
        // line 978
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 978, $this->source); })()))) {
            // line 979
            echo "    border: 1px solid ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 979, $this->source); })()), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 980
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 980, $this->source); })()))) {
            // line 981
            echo "    border: 1px solid ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 981, $this->source); })()), "gray", array());
            echo ";
";
        }
        // line 983
        echo "    display: block;
    margin-bottom: 1em;
}
body.list table tbody td {
    border-bottom: 1px solid ";
        // line 987
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 987, $this->source); })()), "table_row_border", array());
        echo ";
    border-top: 0;
    display: block;
    vertical-align: middle;
}
body.list table tbody td:last-child {
    border-bottom: 0;
}
table td:before {
    content: attr(data-label);
    float: left;
    font-weight: bold;
}
table td:after {
    clear: both;
    content: \"\";
    display: block;
}
/* needed because the responsive tables require contents aligned to the right */
body.list table td,
body.list table .text-center,
body.list table .text-left,
body.list table .text-right {
    text-align: right;
}

body.list table tbody td.image .easyadmin-thumbnail img {
    border-width: 2px;
    max-height: 50px;
    max-width: 150px;
}
body.list table tbody td.association .badge {
    font-size: 13px;
}
body.list table tbody td.actions a {
    font-weight: bold;
    margin-left: 10px;
}

";
        // line 1028
        echo "body.list .table tbody span.highlight {
    background: #FF9;
    border-radius: 2px;
    padding: 1px;
}
body.list .table tbody .no-results span.highlight,
body.list .table tbody .actions span.highlight {
    background: 0;
    border-radius: 0;
}

";
        // line 1041
        echo "body.list .pagination {
    float: right;
    margin: 0;
}
body.list .pagination > .disabled > span {
    background: transparent;
    border: 1px solid transparent;
";
        // line 1048
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 1048, $this->source); })()))) {
            // line 1049
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1049, $this->source); })()), "text_muted", array());
            echo ";
";
        } elseif (("light" ==         // line 1050
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 1050, $this->source); })()))) {
            // line 1051
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1051, $this->source); })()), "gray", array());
            echo ";
";
        }
        // line 1053
        echo "}
body.list .pagination > li > a {
    background: ";
        // line 1055
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1055, $this->source); })()), "white", array());
        echo ";
    border-color: ";
        // line 1056
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1056, $this->source); })()), "gray_light", array());
        echo ";
    border-radius: 0;
    color: ";
        // line 1058
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1058, $this->source); })()), "text", array());
        echo ";
}
body.list .pagination > li > a:hover {
    background: ";
        // line 1061
        echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new Twig_Error_Runtime('Variable "brand_color" does not exist.', 1061, $this->source); })());
        echo ";
    color: ";
        // line 1062
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1062, $this->source); })()), "white", array());
        echo ";
}
.pagination > li > a,
.pagination > li > span {
    padding: 6px 8px;
}
body.list .pagination > li i {
    padding: 0 3px;
}
";
        // line 1074
        echo "body.list .pagination.last-page li:nth-child(2) {
    position: relative;
    z-index: 1;
}

";
        // line 1082
        echo "form label.control-label.required:after {
    content: \"\\00a0*\";
    color: ";
        // line 1084
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1084, $this->source); })()), "danger", array());
        echo ";
    font-size: 16px;
}

";
        // line 1091
        echo "body.new textarea {
    min-height: 250px;
}
body.new .field-collection-action {
    margin: -15px 0 10px;
}
body.new .field-collection-item-action {
    margin: 5px 0 0;
}

body.new #form-actions-row button,
body.new #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.new .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

";
        // line 1113
        echo "body.edit textarea {
    min-height: 250px;
}
body.edit .field-collection-action {
    margin: -15px 0 10px;
}
body.edit .field-collection-item-action {
    margin: 5px 0 0;
}

body.edit #form-actions-row button,
body.edit #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.edit .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

";
        // line 1135
        echo "body.show .form-control {
";
        // line 1136
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 1136, $this->source); })()))) {
            // line 1137
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1137, $this->source); })()), "white", array());
            echo ";
";
        } elseif (("light" ==         // line 1138
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 1138, $this->source); })()))) {
            // line 1139
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1139, $this->source); })()), "gray_lighter", array());
            echo ";
";
        }
        // line 1141
        echo "    border: 0;
    border-radius: 0;
    box-shadow: none;
    height: auto;
}
body.show .form-control.text {
    min-height: 34px;
    max-height: 250px;
    overflow-y: auto;
}

";
        // line 1155
        echo "body.error .content-wrapper {
    align-items: center;
    display: flex;
}
body.error .error-description {
    background: ";
        // line 1160
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1160, $this->source); })()), "white", array());
        echo ";
    border: 1px solid ";
        // line 1161
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1161, $this->source); })()), "gray_lighter", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 1162
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1162, $this->source); })()), "gray_light", array());
        echo ";
    max-width: 96%;
    padding: 0;
}
body.error .error-description h1 {
    background: ";
        // line 1167
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1167, $this->source); })()), "danger", array());
        echo ";
    color: ";
        // line 1168
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1168, $this->source); })()), "white", array());
        echo ";
    font-size: 18px;
    font-weight: bold;
    margin: 0;
    padding: 10px;
    text-transform: uppercase;
}
body.error .error-message {
    font-size: 16px;
    padding: 45px 30px;
    text-align: center;
}

";
        // line 1184
        echo "
";
        // line 1188
        echo "@media (min-width: 768px) {
    ul, ol {
        margin-left: 2em;
    }

    .main-header > .navbar {
      min-height: 50px;
    }
    .sidebar-mini.sidebar-collapse .main-header .navbar {
        margin-left: 0;
    }
    .main-header #header-logo {
        float: left;
    }
    .main-header .logo {
        font-size: 21px;
        height: 50px;
        line-height: 50px;
        text-align: left;
        transition: padding-left .3s linear;
    }
    .sidebar-mini.sidebar-collapse .main-header .logo {
        padding-left: 15px;
        width: auto; ";
        // line 1212
        echo "        transition: padding-left .3s linear;
    }

    .main-header .navbar .sidebar-toggle {
        height: 50px;
        line-height: 50px;
        position: static;
        padding: 0 12px 0 18px;
    }
    .sidebar-mini.sidebar-collapse .sidebar-toggle {
        background: rgba(0, 0, 0, 0.15);
        font-size: 18px;
        padding-left: 12px;
        width: 50px;
    }

    .navbar-custom-menu,
    .navbar-custom-menu ul.navbar-nav,
    .navbar-custom-menu ul.navbar-nav .user-menu {
        float: right;
    }
    .navbar-custom-menu {
        background: inherit;
        height: 50px;
        line-height: 50px;
        width: auto;
    }
    .navbar-custom-menu .user-menu i {
        padding-right: 4px;
    }

    .main-header .navbar .user-menu .btn {
        background: rgba(255, 255, 255, 0.1);
    }
    .main-header .navbar .user-menu .btn-group:hover .btn {
        background: rgba(255, 255, 255, 0.2);
    }

    .main-sidebar {
        padding-top: 50px;
    }

    .sidebar-mini.sidebar-collapse .sidebar-menu > li:hover > a > span {
        padding-left: 5px;
    }

    ";
        // line 1259
        echo "    body.list table {
        background: ";
        // line 1260
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1260, $this->source); })()), "white", array());
        echo ";
        border: 1px solid ";
        // line 1261
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1261, $this->source); })()), "table_border", array());
        echo ";
    }
    body.list table thead {
        display: table-header-group;
    }
    body.list table thead th {
        background: ";
        // line 1267
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1267, $this->source); })()), "table_header", array());
        echo ";
        padding: 0;
    }
    body.list table thead th i {
        color: ";
        // line 1271
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1271, $this->source); })()), "gray", array());
        echo ";
        padding: 0 3px;
    }
    body.list table thead th a,
    body.list table thead th span {
        color: ";
        // line 1276
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1276, $this->source); })()), "text", array());
        echo ";
        display: block;
        padding: 10px 6px;
        white-space: nowrap;
    }
    body.list table thead th a:hover {
        background: ";
        // line 1282
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1282, $this->source); })()), "gray_light", array());
        echo ";
        text-decoration: none;
    }
    body.list table thead th.sorted,
    body.list table thead th.sorted a {
";
        // line 1287
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 1287, $this->source); })()))) {
            // line 1288
            echo "        background: ";
            echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new Twig_Error_Runtime('Variable "brand_color" does not exist.', 1288, $this->source); })());
            echo ";
        color: ";
            // line 1289
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1289, $this->source); })()), "white", array());
            echo ";
";
        }
        // line 1291
        echo "    }
    body.list table thead th.sorted a:hover i,
    body.list table thead th.sorted i {
";
        // line 1294
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 1294, $this->source); })()))) {
            // line 1295
            echo "        color: ";
            echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1295, $this->source); })()), "white", array());
            echo ";
";
        } elseif (("light" ==         // line 1296
(isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 1296, $this->source); })()))) {
            // line 1297
            echo "        color: ";
            echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new Twig_Error_Runtime('Variable "brand_color" does not exist.', 1297, $this->source); })());
            echo ";
";
        }
        // line 1299
        echo "    }
    body.list th.boolean, body.list td.boolean,
    body.list th.toggle, body.list td.toggle,
    body.list td.image {
        text-align: center;
    }

    body.list .table thead tr th {
        border-bottom: 2px solid ";
        // line 1307
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1307, $this->source); })()), "gray_light", array());
        echo ";
    }
    body.list .table thead tr th.sorted {
        border-bottom: 2px outset ";
        // line 1310
        echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new Twig_Error_Runtime('Variable "brand_color" does not exist.', 1310, $this->source); })());
        echo ";
    }
    ";
        // line 1313
        echo "    body.list .table thead tr th:first-child.sorted {
";
        // line 1314
        if (("dark" == (isset($context["color_scheme"]) || array_key_exists("color_scheme", $context) ? $context["color_scheme"] : (function () { throw new Twig_Error_Runtime('Variable "color_scheme" does not exist.', 1314, $this->source); })()))) {
            // line 1315
            echo "        border-left: 1px solid ";
            echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new Twig_Error_Runtime('Variable "brand_color" does not exist.', 1315, $this->source); })());
            echo ";
        border-top: 1px solid ";
            // line 1316
            echo (isset($context["brand_color"]) || array_key_exists("brand_color", $context) ? $context["brand_color"] : (function () { throw new Twig_Error_Runtime('Variable "brand_color" does not exist.', 1316, $this->source); })());
            echo ";
";
        }
        // line 1318
        echo "    }
    body.list .table tbody {
        border-bottom: 2px double ";
        // line 1320
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1320, $this->source); })()), "gray_light", array());
        echo ";
    }
    body.list table tbody tr {
        border: 0;
        display: table-row;
        margin-bottom: 0;
    }
    body.list table tbody td {
        border-bottom: 0;
        border-top: 1px solid ";
        // line 1329
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1329, $this->source); })()), "table_row_border", array());
        echo ";
        display: table-cell;
    }
    body.list table tbody td:last-child {
        white-space: nowrap;
        width: 1%;
    }
    table td:before {
        content: none;
        float: none;
    }
    body.list table tbody td.sorted {
        background: ";
        // line 1341
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1341, $this->source); })()), "gray_lighter", array());
        echo ";
        border-color: ";
        // line 1342
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1342, $this->source); })()), "table_row_border", array());
        echo ";
    }
    body.list .table tbody tr:hover td {
        background: ";
        // line 1345
        echo twig_get_attribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new Twig_Error_Runtime('Variable "colors" does not exist.', 1345, $this->source); })()), "gray_lighter", array());
        echo ";
    }
    body.list table tbody td.actions a {
        margin-left: 0;
        margin-right: 10px;
    }
    body.list table td { text-align: left; }
    body.list table .text-center { text-align: center; }
    body.list table .text-left   { text-align: left; }
    body.list table .text-right  { text-align: right; }

    .field-date select + select,
    .field-time select + select,
    .field-datetime select + select {
        margin-left: 2px;
    }

    body.error .error-description {
        max-width: 550px;
    }

    .pagination > li > a,
    .pagination > li > span {
        padding: 6px 12px;
    }

    .form-inline .form-control {
        margin-bottom: 0;
    }

    body.new .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    body.edit .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    ";
        // line 1385
        echo "    .form-vertical .field-checkbox label {
        padding-top: 23px;
    }
    .form-vertical .field-group .field-checkbox label {
        padding-top: 0;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/css/easyadmin.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1871 => 1385,  1830 => 1345,  1824 => 1342,  1820 => 1341,  1805 => 1329,  1793 => 1320,  1789 => 1318,  1784 => 1316,  1779 => 1315,  1777 => 1314,  1774 => 1313,  1769 => 1310,  1763 => 1307,  1753 => 1299,  1747 => 1297,  1745 => 1296,  1740 => 1295,  1738 => 1294,  1733 => 1291,  1728 => 1289,  1723 => 1288,  1721 => 1287,  1713 => 1282,  1704 => 1276,  1696 => 1271,  1689 => 1267,  1680 => 1261,  1676 => 1260,  1673 => 1259,  1625 => 1212,  1600 => 1188,  1597 => 1184,  1581 => 1168,  1577 => 1167,  1569 => 1162,  1565 => 1161,  1561 => 1160,  1554 => 1155,  1541 => 1141,  1535 => 1139,  1533 => 1138,  1528 => 1137,  1526 => 1136,  1523 => 1135,  1502 => 1113,  1481 => 1091,  1474 => 1084,  1470 => 1082,  1463 => 1074,  1451 => 1062,  1447 => 1061,  1441 => 1058,  1436 => 1056,  1432 => 1055,  1428 => 1053,  1422 => 1051,  1420 => 1050,  1415 => 1049,  1413 => 1048,  1404 => 1041,  1391 => 1028,  1349 => 987,  1343 => 983,  1337 => 981,  1335 => 980,  1330 => 979,  1328 => 978,  1324 => 977,  1309 => 964,  1273 => 928,  1268 => 922,  1263 => 920,  1259 => 918,  1257 => 917,  1252 => 916,  1250 => 915,  1243 => 910,  1234 => 900,  1230 => 898,  1228 => 897,  1225 => 896,  1223 => 895,  1220 => 894,  1216 => 891,  1210 => 889,  1208 => 888,  1205 => 887,  1203 => 886,  1184 => 869,  1177 => 863,  1171 => 858,  1161 => 849,  1156 => 846,  1154 => 845,  1147 => 842,  1145 => 841,  1134 => 832,  1128 => 830,  1126 => 829,  1123 => 828,  1121 => 827,  1113 => 821,  1107 => 819,  1105 => 818,  1101 => 816,  1099 => 815,  1080 => 798,  1074 => 796,  1072 => 795,  1069 => 794,  1067 => 793,  1060 => 788,  1054 => 786,  1052 => 785,  1049 => 784,  1047 => 783,  1039 => 777,  1033 => 775,  1031 => 774,  1028 => 773,  1026 => 772,  1022 => 770,  1006 => 754,  948 => 697,  926 => 678,  899 => 653,  895 => 651,  888 => 647,  885 => 646,  876 => 638,  873 => 637,  870 => 634,  863 => 626,  856 => 620,  852 => 619,  842 => 611,  819 => 589,  815 => 588,  812 => 587,  802 => 577,  787 => 564,  783 => 563,  780 => 562,  766 => 549,  757 => 543,  751 => 540,  745 => 537,  738 => 533,  728 => 526,  717 => 518,  711 => 515,  705 => 511,  696 => 501,  690 => 497,  688 => 496,  684 => 494,  679 => 492,  673 => 490,  671 => 489,  667 => 487,  665 => 486,  660 => 483,  656 => 481,  654 => 480,  651 => 479,  649 => 478,  644 => 475,  640 => 473,  638 => 472,  635 => 471,  633 => 470,  624 => 463,  620 => 461,  618 => 460,  615 => 459,  613 => 458,  607 => 454,  602 => 452,  599 => 451,  597 => 450,  593 => 449,  588 => 448,  586 => 447,  578 => 441,  574 => 439,  572 => 438,  569 => 437,  567 => 436,  563 => 434,  557 => 432,  555 => 431,  552 => 430,  550 => 429,  543 => 424,  537 => 418,  532 => 413,  527 => 410,  525 => 409,  521 => 407,  516 => 405,  511 => 404,  509 => 403,  505 => 402,  500 => 401,  498 => 400,  485 => 390,  466 => 374,  461 => 371,  455 => 369,  453 => 368,  447 => 366,  445 => 365,  436 => 360,  432 => 358,  430 => 357,  425 => 355,  418 => 350,  388 => 321,  380 => 315,  374 => 311,  369 => 309,  358 => 301,  353 => 299,  335 => 284,  323 => 275,  318 => 273,  294 => 252,  289 => 249,  283 => 247,  281 => 246,  276 => 245,  274 => 244,  255 => 227,  249 => 222,  246 => 221,  229 => 205,  185 => 163,  178 => 154,  171 => 149,  161 => 143,  154 => 139,  143 => 130,  137 => 127,  134 => 126,  125 => 117,  121 => 116,  115 => 113,  111 => 112,  105 => 108,  87 => 90,  77 => 81,  70 => 77,  55 => 66,  49 => 60,  42 => 52,  39 => 45,  37 => 44,  34 => 43,  32 => 5,  29 => 4,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#  ========================================================================
    EasyAdmin Default Theme | (c) 2015 Javier Eguiluz | MIT License
    ======================================================================== #}

{% set color_schemes = {
    'dark': {
        danger: '#D42124',
        success: '#006B2E',
        text: '#222222',
        text_muted: '#737373',
        link: '#205081',
        black: '#111111',
        white: '#FFFFFF',
        gray_darker: '#252525',
        gray_dark: '#444',
        gray: '#AAA',
        gray_light: '#CCC',
        gray_lighter: '#F5F5F5',
        page_background: '#F5F5F5',
        table_header: '#EEE',
        table_border: '#CCC',
        table_row_border: '#DDD',
    },
    'light': {
        danger: '#D42124',
        success: '#006B2E',
        text: '#444444',
        text_muted: '#737373',
        link: '#205081',
        black: '#333333',
        white: '#FFFFFF',
        gray_darker: '#444',
        gray_dark: '#AAA',
        gray: '#CCC',
        gray_light: '#F5F5F5',
        gray_lighter: '#FAFAFA',
        page_background: '#FFFFFF',
        table_header: '#FAFAFA',
        table_border: '#FFFFFF',
        table_row_border: '#E5E5E5',
    }
} %}

{% set colors = color_schemes[color_scheme] %}

{% autoescape false %}
{# -------------------------------------------------------------------------
   RESET STYLES
   ------------------------------------------------------------------------- #}
{# make the Symfony Web Toolbar look nice by neutralizing the aliasing applied
   globally by the AdminLTE template styles #}
.sf-toolbarreset {
    -webkit-font-smoothing: subpixel-antialiased;
    -moz-osx-font-smoothing: auto;
}

{# -------------------------------------------------------------------------
   BASIC STYLES
   ------------------------------------------------------------------------- #}
body {
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif;
}

{# Links
   ------------------------------------------------------------------------- #}
a        { color: {{ colors.link }}; }
a:hover  { opacity: 0.9; }
a:active { outline: 0; }

#main a:active {
    position: relative;
    top: 1px;
}

a.text-primary,
a.text-primary:focus {
    color: {{ colors.link }};
}
a.text-danger,
a.text-danger:focus {
    color: {{ colors.danger }};
}
a.text-primary:hover,
a.text-danger:hover {
    opacity: 0.9;
}

{# Lists
   ------------------------------------------------------------------------- #}
ul, ol {
    margin: 1em 0 1em 1em;
    padding: 0;
}
li {
    margin-bottom: 1em;
}

ul.inline {
    list-style: none;
    margin: 0;
}
ul.inline li {
    margin: 0;
}

{# Flash messages
   ------------------------------------------------------------------------- #}
div.flash {
    padding: .5em;
}
div.flash-success {
    background: {{ colors.success }};
    color: {{ colors.white }};
}
div.flash-error {
    background: {{ colors.danger }};
    color: {{ colors.white }};
}
div.flash-error strong {
    padding-right: .5em;
}

{# Labels
   ------------------------------------------------------------------------- #}
{# this prevents overriding default styles for labels (label-info, label-primary, etc.) #}
.label:not([class*=label-]) {
    background: {{ colors.gray_darker }};
}
.label {
    color: {{ colors.white }};
    display: inline-block;
    font-size: 11px;
    padding: 4px;
    text-transform: uppercase;
}

.label-success {
    {# !important is required to override AdminLTE styles #}
    background: {{ colors.success }} !important;
}
.label-danger {
    {# !important is required to override AdminLTE styles #}
    background: {{ colors.danger }} !important;
}
.label-empty {
    background: transparent;
    border: 2px dotted;
    border-radius: 4px;
    color: {{ colors.gray_light }};
    padding: 4px 8px;
}

{# this makes boolean labels to be of the same width for most languages #}
.boolean .label,
.toggle .label {
    min-width: 33px;
}

{# Switches / toggles
   ------------------------------------------------------------------------- #}
{# needed to neutralize the default .toggle styles applied by Bootstrap Toggle
   which collide with the .toggle class applied to <th> too #}
.toggle { position: initial; }
.toggle:not(th) { position: relative; }

.toggle.btn-xs {
 width: 44px;
}
.toggle-group .btn,
.toggle-group .btn:hover {
   border-radius: 3px;
   font-size: 10px;
   font-weight: bold;
   text-transform: uppercase;
}
.toggle-group .btn {
   padding: 4px 6px;
}
.toggle-group .btn:hover {
    border: 0;
}
.toggle-group .btn + .btn {
    margin-left: 0;
}
.toggle-group .toggle-on,
.toggle-group .toggle-on.btn-xs,
.toggle-group .toggle-on:hover,
.toggle-group .toggle-on:active,
.toggle-group .toggle-on:active:hover {
    padding: 4px 5px 4px 0;
    border: 0;
}
.toggle-group .toggle-off,
.toggle-group .toggle-off.btn-xs,
.toggle-group .toggle-off:hover,
.toggle-group .toggle-off:active,
.toggle-group .toggle-off:active:hover {
    padding: 4px 0 4px 5px;
    border: 0;
}
.toggle-group .toggle-handle,
.toggle-group .toggle-handle:hover,
.toggle-group .toggle-handle:active,
.toggle-group .toggle-handle:active:hover {
    background: {{ colors.gray_lighter }};
    border: 0;
    border-radius: 2px;
    height: 19px;
    margin-top: 2px;
    padding: 5px;
}
.toggle .btn-success .toggle-handle {
    box-shadow: -2px 0 1px rgba(0, 0, 0, .2);
}
.toggle .btn-danger .toggle-handle {
    box-shadow: 2px 0 1px rgba(0, 0, 0, .2);
}

{# Badges
   ------------------------------------------------------------------------- #}
span.badge {
    background-color: {{ brand_color }};
}

{# Buttons
   ------------------------------------------------------------------------- #}
.btn:focus {
    outline: none;
}
.btn + .btn {
    margin-left: 5px;
}

button.btn:active {
    position: relative;
    top: 1px;
}

.btn,
.btn:hover,
.btn:active,
.btn:focus,
.btn:active:hover  {
{% if 'dark' == color_scheme %}
    background: {{ colors.gray_light }};
{% elseif 'light' == color_scheme %}
    background: {{ colors.gray }};
{% endif %}
    border: 1px solid transparent;
    border-radius: 4px;
    box-shadow: none;
    color: {{ colors.text }};
    display: inline-block;
    line-height: 1.42857143;
    opacity: 1;
    outline: none;
    padding: 6px 12px;
    text-align: center;
}
.btn-xs,
.btn-xs:hover,
.btn-xs:active,
.btn-xs:focus,
.btn-xs:active:hover {
    padding: 1px 5px;
}

.btn-primary,
.btn-primary:hover,
.btn-primary:active,
.btn-primary:focus,
.btn-primary:active:hover {
    background-color: {{ brand_color }};
    border-color: transparent;
    color: {{ colors.white }};
}
.btn-info,
.btn-info:hover,
.btn-info:active,
.btn-info:focus,
.btn-info:active:hover {
    background-color: #39a0ed;
    border-color: transparent;
    color: {{ colors.white }};
}
.btn-default,
.btn-default:hover,
.btn-default:active,
.btn-default:focus,
.btn-default:active:hover {
    border-color: transparent;
}

.btn-danger,
.btn-danger:hover,
.btn-danger:active,
.btn-danger:focus,
.btn-danger:active:hover {
    background-color: {{ colors.danger }};
    border-color: transparent;
    color: {{ colors.white }};
}

.btn-success,
.btn-success:hover,
.btn-success:active,
.btn-success:focus,
.btn-success:active:hover {
    background-color: {{ colors.success }};
    border-color: transparent;
    color: {{ colors.white }};
}

{# .bnt-secondary is for 'buttons' displayed as text links #}
.btn-secondary,
.btn-secondary:hover,
.btn-secondary:active,
.btn-secondary:focus,
.btn-secondary:active:hover {
    background: transparent;
    color: {{ brand_color }};
    text-decoration: underline;
}
.btn-secondary:hover {
    text-decoration: none;
}

.btn-primary,
.btn-danger,
.btn-success,
.btn-info {
    font-weight: bold;
}

.btn i {
    font-size: 16px;
    margin-right: 2px;
}

.btn-flat,
.btn-flat:hover,
.btn-flat:active,
.btn-flat:focus,
.btn-flat:active:hover {
    border-radius: 0;
}

{# Forms
   ------------------------------------------------------------------------- #}
.form-inline .form-control {
    margin-bottom: 5px;
}
.form-control,
.form-inline .form-control {
    border: 1px solid {{ colors.gray }};
    border-radius: 0;
{% if 'dark' == color_scheme %}
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
{% endif %}
    color: {{ colors.text }};
    -webkit-transition: none;
    transition: none;
}
.form-control:focus {
{% if 'dark' == color_scheme %}
    border-color: {{ colors.gray_dark }};
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
{% elseif 'light' == color_scheme %}
    border-color: {{ colors.gray_darker }};
{% endif %}
}

.has-error .error-block {
    color: {{ colors.danger }};
    font-weight: bold;
    padding-top: 5px;
}
.has-error .error-block .label-danger {
    margin-right: 3px;
}
.has-error .error-block ul {
    margin: .5em 0 .5em 1.5em;
}
.has-error .error-block ul li {
    margin-bottom: .5em;
}

.help-block,
.has-error .help-block {
    color: {{ colors.text_muted }};
    font-size: 13px;
}
.nullable-control {
   padding-top: 5px;
}

.form-actions.stuck {
    bottom: 0;
    position: fixed;
{% if 'dark' == color_scheme %}
    background-color: {{ colors.gray_lighter }};
    box-shadow: 0 -1px 4px {{ colors.gray_light }};
{% elseif 'light' == color_scheme %}
    background-color: {{ colors.gray_light }};
    box-shadow: 0 -1px 4px {{ colors.gray }};
{% endif %}
    height: 52px;
    padding-top: 10px;
{% if kernel_debug|default(false) %}
    height: 85px;
    padding-bottom: 45px;
{% endif %}
    z-index: 9999;
}

{# Field: collection
   ------------------------------------------------------------------------- #}
.field-collection .collection-empty {
    margin: .5em 0;
}

{# Field: special Form Fields (dividers, groups, sections)
   ------------------------------------------------------------------------- #}
.field-divider hr {
    margin-top: 15px;
    margin-bottom: 26px;
    border: 0;
    border-top: 1px solid;
{% if 'dark' == color_scheme %}
    border-top-color: #DDD;
{% elseif 'light' == color_scheme %}
    border-top-color: {{ colors.gray_lighter }};
{% endif %}
}
.field-group .field-divider hr {
{% if 'dark' == color_scheme %}
    border-top-color: #DDD;
{% elseif 'light' == color_scheme %}
    border-top-color: #EEE;
{% endif %}
}

.field-section {
    margin: 16px 0 15px;
}
.field-section h2 {
{% if 'dark' == color_scheme %}
    border-bottom: 1px solid {{ colors.gray_light }};
    color: {{ colors.gray_dark }};
{% elseif 'light' == color_scheme %}
    border-bottom: 1px solid #EEE;
    color: {{ colors.gray_darker }};
{% endif %}
    font-size: 16px;
    padding-bottom: 6px;
}
.field-section h2 i {
{% if 'dark' == color_scheme %}
    color: #555;
{% elseif 'light' == color_scheme %}
    color: #777;
{% endif %}
    margin-right: 2px;
}
.field-section p.help-block {
    margin: 8px 0 0;
}

.field-group .box {
{% if 'dark' == color_scheme %}
    border: 1px solid #DDD;
{% elseif 'light' == color_scheme %}
    border: 1px solid #EEE;
{% endif %}
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
}
.field-group .box-header i {
{% if 'dark' == color_scheme %}
    color: #555;
{% elseif 'light' == color_scheme %}
    color: #777;
{% endif %}
    margin-right: 2px;
}
.field-group .box-header.with-border {
{% if 'dark' == color_scheme %}
    background: #F0F0F0;
    border-bottom-color: #DDD;
{% elseif 'light' == color_scheme %}
    background: {{ colors.gray_light }};
    border-bottom-color: #EEE;
    color: {{ colors.gray_darker }};
{% endif %}
    padding: 11px 10px 9px;
}
{% if 'light' == color_scheme %}
.field-group .box-header .box-title {
    color: #777;
}
{% endif %}
.field-group .box-body {
    padding: 15px 15px 5px;
}
.field-group .box-body > .help-block {
    margin-top: 0;
}

{# Select2 widget
   ------------------------------------------------------------------------- #}
{# these styles must be applied after loading the default select2 styles #}
.select2-container {
    width: 100% !important;
}
.select2-container--bootstrap .select2-selection {
    border: 1px solid {{ colors.gray }};
    border-radius: 0;
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
    color: {{ colors.text }};
    -webkit-transition: none;
    transition: none;
}
.select2-container--bootstrap .select2-selection .select2-search--inline {
    margin: 0;
}
.select2-container--bootstrap .select2-selection--single .select2-selection__rendered {
    color: {{ colors.text }};
    padding-top: 4px;
}
.select2-container--bootstrap .select2-results__option {
    margin-bottom: 0;
}
.select2-container--bootstrap .select2-results__option[aria-selected=true] {
    background-color: {{ colors.gray_light }};
    font-weight: bold;
}
.select2-container--bootstrap .select2-results__option--highlighted[aria-selected] {
    background-color: {{ brand_color }};
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice {
    color: {{ colors.text }};
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice__remove {
    color: {{ colors.danger }};
    font-weight: bold;
    position: relative;
    top: -1px;
}
.select2-container--bootstrap .select2-search--dropdown .select2-search__field {
    border: 1px solid {{ colors.gray_dark }};
    border-radius: 0;
    margin: 5px 10px;
    padding: 6px;
    width: 96%;
}
.select2-search--inline .select2-search__field:focus {
    outline: 0;
    border: 0;
}

{# VichUploaderBundle files and images
   ------------------------------------------------------------------------- #}
.easyadmin-vich-image img {
    border: 3px solid {{ colors.white }};
    box-shadow: 0 0 3px {{ colors.gray }};
    max-height: 300px;
    max-width: 400px;
}
.easyadmin-vich-image input[type=\"file\"],
.easyadmin-vich-file input[type=\"file\"] {
    padding-top: 7px;
}
.easyadmin-vich-file a {
    display: inline-block;
    padding-top: 7px;
}
{# the checkbox to delete the image/file #}
.easyadmin-vich-file .field-checkbox {
    margin-bottom: 0;
}
.easyadmin-vich-file .field-checkbox .col-sm-2,
.easyadmin-vich-image .field-checkbox .col-sm-2 {
    display: none;
}

{# Thumbnails and image lightbox
   ------------------------------------------------------------------------- #}
.easyadmin-thumbnail img {
    border: 3px solid {{ colors.white }};
    box-shadow: 0 0 3px {{ colors.gray }};
    max-height: 100px;
    max-width: 100%;
}
.easyadmin-thumbnail img:hover {
    cursor: zoom-in;
}
.featherlight .easyadmin-lightbox:hover {
    cursor: zoom-out;
}
.easyadmin-lightbox {
    display: none;
}
.featherlight .easyadmin-lightbox {
    display: block;
}
.easyadmin-lightbox img {
    max-width: 100%;
}

{# Modal windows
   ------------------------------------------------------------------------- #}
.modal-dialog .modal-content {
    border-radius: 0;
}
.modal-dialog .modal-content .modal-body h4 {
    font-size: 21px;
    margin: .5em 0;
}
.modal-dialog .modal-footer {
    background: {{ colors.gray_lighter }};
    border-top: 1px solid {{ colors.gray_light }};
    margin-top: 1.5em;
}

{# Utils
   ------------------------------------------------------------------------- #}
.newrow, .new-row {
    clear: both;
    display: block;
}

{# -------------------------------------------------------------------------
   LAYOUT
   ------------------------------------------------------------------------- #}

{# Wrapper
   ------------------------------------------------------------------------- #}
.content-wrapper {
    background: {{ colors.page_background }};
}
.fixed .content-wrapper {
    padding-top: 50px;
}

{# Header
   ------------------------------------------------------------------------- #}
.main-header {
    background: {{ brand_color }};
    position: relative;
}
.main-header .logo {
    color: {{ colors.white }};
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif; {# needed to override AdminLTE styles #}
    font-size: 18px;
    font-weight: bold;
    height: 45px;
    line-height: 45px;
    padding: 0;
}
.main-header .logo-long .logo-lg {
    font-size: 16px;
}
.main-header .logo-lg {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.main-header #header-logo {
}
.main-header img {
    margin-top: -2px;
    max-height: 36px;
}
.main-header li {
    margin-bottom: 0;
}

.main-header > .navbar {
    background-color: {{ brand_color }};
    color: rgba(255, 255, 255, 0.9);
    margin-left: 0;
    min-height: 40px;
}

.main-header .navbar .sidebar-toggle {
    color: rgba(255, 255, 255, 0.8);
    display: inline-block;
    font-size: 16px;
    height: 35px;
    left: 0;
    line-height: 35px;
    padding: 0 15px;
    position: absolute;
    text-align: center;
    top: 45px;
}
.sidebar-mini.sidebar-collapse .sidebar-toggle {
    color: {{ colors.white }};
}

.navbar-custom-menu,
.navbar-custom-menu ul.navbar-nav,
.navbar-custom-menu ul.navbar-nav .user-menu {
    float: none;
}
.navbar-custom-menu {
    background: rgba(255, 255, 255, 0.1);
    color: rgba(255, 255, 255, 0.8);
    font-size: 13px;
    font-weight: bold;
    height: 35px;
    line-height: 35px;
    padding: 0 15px;
    text-align: right;
    width: 100%;
}

.main-header .navbar .user-menu .btn {
    background: rgba(255, 255, 255, 0.05);
    border-color: transparent;
    color: #fff;
}
.main-header .navbar .user-menu .btn:active {
    top: 0;
}
.main-header .navbar .user-menu .btn.dropdown-toggle {
    padding: 6px 8px;
}
.main-header .navbar .user-menu .btn-group:hover .btn {
    background: rgba(255, 255, 255, 0.1);
}
.main-header .navbar .user-menu .btn-group {
    height: 35px;
}
.main-header .navbar .user-menu .btn-group .btn {
    border-radius: 0;
}
.main-header .navbar .user-menu .dropdown-menu {
    background: #fff;
    box-shadow: 1px 1px 3px #ccc;
    border-radius: 2px;
    position: absolute;
    left: auto;
    right: 0;
}
.main-header .navbar .user-menu .dropdown-menu i {
    margin: 0;
}
.main-header .navbar .user-menu .dropdown-menu a {
    color: #777;
}

{# Main body
   ------------------------------------------------------------------------- #}
#content #main {
    padding-bottom: 3em;
}
.content {
    padding-top: 10px;
}
.content-header {
    padding: 12px 15px 0 15px;
}
.content-header h1 {
    margin: 0;
    font-size: 24px;
}

{# Sidebar
   ------------------------------------------------------------------------- #}
.main-sidebar,
.wrapper {
{% if 'dark' == color_scheme %}
    background-color: #333;
{% elseif 'light' == color_scheme %}
    background-color: {{ colors.gray_light }};
{% endif %}
}
.main-sidebar {
    padding-top: 80px;
}

.sidebar-menu li.header {
{% if 'dark' == color_scheme %}
    color: #777;
{% elseif 'light' == color_scheme %}
    color: {{ colors.gray_dark }};
{% endif %}
    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
}
.treeview-menu > li.header {
{% if 'dark' == color_scheme %}
    background: #404040;
{% elseif 'light' == color_scheme %}
    background-color: {{ colors.gray_lighter }};
{% endif %}
    padding-left: 28px;
}

.sidebar-menu li a,
.sidebar-menu li a span,
.sidebar-menu li.header,
.sidebar-mini.sidebar-collapse .sidebar-menu .treeview-menu a {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
.sidebar-mini.sidebar-collapse .sidebar-menu li a {
    overflow: visible;
}

.sidebar-menu > li > a,
.sidebar-menu .treeview-menu > li > a {
{% if 'dark' == color_scheme %}
    background: #333;
    color: #CCC;
{% elseif 'light' == color_scheme %}
    color: {{ colors.gray_darker }};
{% endif %}
    border-left: 3px solid transparent;
    display: block;
    font-weight: bold;
    opacity: 1;
}
.sidebar-menu .treeview-menu > li > a {
{% if 'dark' == color_scheme %}
    background: #404040;
{% elseif 'light' == color_scheme %}
    background-color: {{ colors.gray_lighter }};
{% endif %}
    font-size: 13px;
    padding: 8px 5px 8px 25px;
}
.sidebar-menu > li:hover > a,
.sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu > li.active > a,
.sidebar-menu .treeview-menu > li.active > a,
.sidebar-collapse .sidebar-menu > li.active.submenu-active > a,
.sidebar-collapse .sidebar-menu > li:hover .treeview-menu > li.active > a {
{% if 'dark' == color_scheme %}
    color: {{ colors.white }};
    background: #4D4D4D;
    border-left-color: #BBB;
{% elseif 'light' == color_scheme %}
    background: #DCDCDC;
    border-left-color: #808080;
{% endif %}
}
.sidebar-menu > li > a > .fa {
    width: 22px;
}
.sidebar-menu .treeview-menu {
    padding: 0;
}

{# icon displayed for collapsed submenus #}
.sidebar-menu li > a > .pull-right {
    font-weight: bold;
    text-align: right;
}
{# icon displayed for revealed submenus #}
.sidebar-menu li.active > a > .fa-angle-left {
    top: 30px;
    right: 0;
}

{# when the sidebar is collapsed #}
.sidebar-collapse .sidebar-menu > li > a {
    padding: 12px 5px 12px 12px;
}
.sidebar-collapse .sidebar-menu > li .treeview-menu > li > a {
    padding-left: 12px;
}
.sidebar-collapse .sidebar-menu > li > a > i.fa {
    font-size: 18px;
}
.sidebar-mini.sidebar-collapse .sidebar-menu > li > .treeview-menu {
    padding: 0;
}
.sidebar-collapse .sidebar-menu > li:hover > a,
.sidebar-collapse .sidebar-menu .treeview-menu > li:hover > a,
.sidebar-menu > li.active.submenu-active > a,
.sidebar-collapse .sidebar-menu > li.active.submenu-active:hover > a {
    border-left-color: transparent;
{% if 'dark' == color_scheme %}
    background: #333;
{% elseif 'light' == color_scheme %}
    background: {{ colors.gray_light }};
{% endif %}
}

{# when collapsed, menu dividers are displayed as a straight line #}
.sidebar-mini.sidebar-collapse .sidebar-menu li.header {
{% if 'dark' == color_scheme %}
    border-bottom: 1px solid #777;
{% elseif 'light' == color_scheme %}
    border-bottom: 1px solid #BBB;
{% endif %}
    display: block !important;
    font-size: 0;
    height: 1px;
    margin: 0;
    padding: 0;
}

{# -------------------------------------------------------------------------
   COMMON ADMIN PAGES
   ------------------------------------------------------------------------- #}
body.easyadmin h1.title {
    margin-bottom: 10px;
}

.help-entity {
{% if 'dark' == color_scheme %}
    color: {{ colors.gray_dark }};
{% elseif 'light' == color_scheme %}
    border: 1px solid #EEE;
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
    color: {{ colors.text_muted }};
{% endif %}
    margin: 10px 0 5px;
}

{# -------------------------------------------------------------------------
   LIST PAGE
   ------------------------------------------------------------------------- #}

body.list .global-actions {
    display: table;
    width: 100%;
}
body.list .global-actions .button-action {
    display: table-cell;
    padding-left: 10px;
    vertical-align: middle;
    width: 120px;
}
body.list .global-actions .button-action a {
    float: right;
}
body.list .global-actions .form-action {
    display: table-cell;
    width: 100%;
}
body.list .global-actions .form-action .input-group {
    width: 100%;
}

body.list .global-actions .form-control {
    box-shadow: none;
}
body.list .global-actions .input-group-btn > button.btn:not(:last-child) {
    border-bottom-right-radius: 3px;
    border-top-right-radius: 3px;
}
body.list .global-actions .input-group-btn a.btn {
    border-radius: 3px;
    margin-left: 10px;
}

{# Responsive tables
   ------------------------------------------------------------------------- #}
body.list .table-responsive,
body.list table {
    background: transparent;
    border: 0;
}
body.list table thead {
    display: none;
}
body.list .table tbody {
    background: transparent;
    border: 0;
}
body.list table tbody tr {
    background: {{ colors.white }};
{% if 'dark' == color_scheme %}
    border: 1px solid {{ colors.gray_light }};
{% elseif 'light' == color_scheme %}
    border: 1px solid {{ colors.gray }};
{% endif %}
    display: block;
    margin-bottom: 1em;
}
body.list table tbody td {
    border-bottom: 1px solid {{ colors.table_row_border }};
    border-top: 0;
    display: block;
    vertical-align: middle;
}
body.list table tbody td:last-child {
    border-bottom: 0;
}
table td:before {
    content: attr(data-label);
    float: left;
    font-weight: bold;
}
table td:after {
    clear: both;
    content: \"\";
    display: block;
}
/* needed because the responsive tables require contents aligned to the right */
body.list table td,
body.list table .text-center,
body.list table .text-left,
body.list table .text-right {
    text-align: right;
}

body.list table tbody td.image .easyadmin-thumbnail img {
    border-width: 2px;
    max-height: 50px;
    max-width: 150px;
}
body.list table tbody td.association .badge {
    font-size: 13px;
}
body.list table tbody td.actions a {
    font-weight: bold;
    margin-left: 10px;
}

{# Search results
   ------------------------------------------------------------------------- #}
body.list .table tbody span.highlight {
    background: #FF9;
    border-radius: 2px;
    padding: 1px;
}
body.list .table tbody .no-results span.highlight,
body.list .table tbody .actions span.highlight {
    background: 0;
    border-radius: 0;
}

{# Pagination
   ------------------------------------------------------------------------- #}
body.list .pagination {
    float: right;
    margin: 0;
}
body.list .pagination > .disabled > span {
    background: transparent;
    border: 1px solid transparent;
{% if 'dark' == color_scheme %}
    color: {{ colors.text_muted }};
{% elseif 'light' == color_scheme %}
    color: {{ colors.gray }};
{% endif %}
}
body.list .pagination > li > a {
    background: {{ colors.white }};
    border-color: {{ colors.gray_light }};
    border-radius: 0;
    color: {{ colors.text }};
}
body.list .pagination > li > a:hover {
    background: {{ brand_color }};
    color: {{ colors.white }};
}
.pagination > li > a,
.pagination > li > span {
    padding: 6px 8px;
}
body.list .pagination > li i {
    padding: 0 3px;
}
{# this hack is needed to avoid the last pagination page from showing wrong
   borders for the second pagination element (we need to put this element above
   the third element) #}
body.list .pagination.last-page li:nth-child(2) {
    position: relative;
    z-index: 1;
}

{# -------------------------------------------------------------------------
   FORM PAGE
   ------------------------------------------------------------------------- #}
form label.control-label.required:after {
    content: \"\\00a0*\";
    color: {{ colors.danger }};
    font-size: 16px;
}

{# -------------------------------------------------------------------------
   NEW PAGE
   ------------------------------------------------------------------------- #}
body.new textarea {
    min-height: 250px;
}
body.new .field-collection-action {
    margin: -15px 0 10px;
}
body.new .field-collection-item-action {
    margin: 5px 0 0;
}

body.new #form-actions-row button,
body.new #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.new .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

{# -------------------------------------------------------------------------
   EDIT PAGE
   ------------------------------------------------------------------------- #}
body.edit textarea {
    min-height: 250px;
}
body.edit .field-collection-action {
    margin: -15px 0 10px;
}
body.edit .field-collection-item-action {
    margin: 5px 0 0;
}

body.edit #form-actions-row button,
body.edit #form-actions-row a.btn {
    margin-bottom: 10px;
}
body.edit .form-horizontal #form-actions-row {
    padding-left: 15px;
    padding-right: 15px;
}

{# -------------------------------------------------------------------------
   SHOW PAGE
   ------------------------------------------------------------------------- #}
body.show .form-control {
{% if 'dark' == color_scheme %}
    background: {{ colors.white }};
{% elseif 'light' == color_scheme %}
    background: {{ colors.gray_lighter }};
{% endif %}
    border: 0;
    border-radius: 0;
    box-shadow: none;
    height: auto;
}
body.show .form-control.text {
    min-height: 34px;
    max-height: 250px;
    overflow-y: auto;
}

{# -------------------------------------------------------------------------
   ERROR PAGES
   ------------------------------------------------------------------------- #}
body.error .content-wrapper {
    align-items: center;
    display: flex;
}
body.error .error-description {
    background: {{ colors.white }};
    border: 1px solid {{ colors.gray_lighter }};
    box-shadow: 0 0 3px {{ colors.gray_light }};
    max-width: 96%;
    padding: 0;
}
body.error .error-description h1 {
    background: {{ colors.danger }};
    color: {{ colors.white }};
    font-size: 18px;
    font-weight: bold;
    margin: 0;
    padding: 10px;
    text-transform: uppercase;
}
body.error .error-message {
    font-size: 16px;
    padding: 45px 30px;
    text-align: center;
}

{# =========================================================================
   RESPONSIVE
   ========================================================================= #}

{# -------------------------------------------------------------------------
   VERTICAL TABLETS and LANDSCAPE SMARTPHONES
   ------------------------------------------------------------------------- #}
@media (min-width: 768px) {
    ul, ol {
        margin-left: 2em;
    }

    .main-header > .navbar {
      min-height: 50px;
    }
    .sidebar-mini.sidebar-collapse .main-header .navbar {
        margin-left: 0;
    }
    .main-header #header-logo {
        float: left;
    }
    .main-header .logo {
        font-size: 21px;
        height: 50px;
        line-height: 50px;
        text-align: left;
        transition: padding-left .3s linear;
    }
    .sidebar-mini.sidebar-collapse .main-header .logo {
        padding-left: 15px;
        width: auto; {# neutralizes AdminLTE styles #}
        transition: padding-left .3s linear;
    }

    .main-header .navbar .sidebar-toggle {
        height: 50px;
        line-height: 50px;
        position: static;
        padding: 0 12px 0 18px;
    }
    .sidebar-mini.sidebar-collapse .sidebar-toggle {
        background: rgba(0, 0, 0, 0.15);
        font-size: 18px;
        padding-left: 12px;
        width: 50px;
    }

    .navbar-custom-menu,
    .navbar-custom-menu ul.navbar-nav,
    .navbar-custom-menu ul.navbar-nav .user-menu {
        float: right;
    }
    .navbar-custom-menu {
        background: inherit;
        height: 50px;
        line-height: 50px;
        width: auto;
    }
    .navbar-custom-menu .user-menu i {
        padding-right: 4px;
    }

    .main-header .navbar .user-menu .btn {
        background: rgba(255, 255, 255, 0.1);
    }
    .main-header .navbar .user-menu .btn-group:hover .btn {
        background: rgba(255, 255, 255, 0.2);
    }

    .main-sidebar {
        padding-top: 50px;
    }

    .sidebar-mini.sidebar-collapse .sidebar-menu > li:hover > a > span {
        padding-left: 5px;
    }

    {# these table styles are needed to override the \"responsive tables\" styles #}
    body.list table {
        background: {{ colors.white }};
        border: 1px solid {{ colors.table_border }};
    }
    body.list table thead {
        display: table-header-group;
    }
    body.list table thead th {
        background: {{ colors.table_header }};
        padding: 0;
    }
    body.list table thead th i {
        color: {{ colors.gray }};
        padding: 0 3px;
    }
    body.list table thead th a,
    body.list table thead th span {
        color: {{ colors.text }};
        display: block;
        padding: 10px 6px;
        white-space: nowrap;
    }
    body.list table thead th a:hover {
        background: {{ colors.gray_light }};
        text-decoration: none;
    }
    body.list table thead th.sorted,
    body.list table thead th.sorted a {
{% if 'dark' == color_scheme %}
        background: {{ brand_color }};
        color: {{ colors.white }};
{% endif %}
    }
    body.list table thead th.sorted a:hover i,
    body.list table thead th.sorted i {
{% if 'dark' == color_scheme %}
        color: {{ colors.white }};
{% elseif 'light' == color_scheme %}
        color: {{ brand_color }};
{% endif %}
    }
    body.list th.boolean, body.list td.boolean,
    body.list th.toggle, body.list td.toggle,
    body.list td.image {
        text-align: center;
    }

    body.list .table thead tr th {
        border-bottom: 2px solid {{ colors.gray_light }};
    }
    body.list .table thead tr th.sorted {
        border-bottom: 2px outset {{ brand_color }};
    }
    {# these styles are needed to fix some visual glitches when the sort field is the first column #}
    body.list .table thead tr th:first-child.sorted {
{% if 'dark' == color_scheme %}
        border-left: 1px solid {{ brand_color }};
        border-top: 1px solid {{ brand_color }};
{% endif %}
    }
    body.list .table tbody {
        border-bottom: 2px double {{ colors.gray_light }};
    }
    body.list table tbody tr {
        border: 0;
        display: table-row;
        margin-bottom: 0;
    }
    body.list table tbody td {
        border-bottom: 0;
        border-top: 1px solid {{ colors.table_row_border }};
        display: table-cell;
    }
    body.list table tbody td:last-child {
        white-space: nowrap;
        width: 1%;
    }
    table td:before {
        content: none;
        float: none;
    }
    body.list table tbody td.sorted {
        background: {{ colors.gray_lighter }};
        border-color: {{ colors.table_row_border }};
    }
    body.list .table tbody tr:hover td {
        background: {{ colors.gray_lighter }};
    }
    body.list table tbody td.actions a {
        margin-left: 0;
        margin-right: 10px;
    }
    body.list table td { text-align: left; }
    body.list table .text-center { text-align: center; }
    body.list table .text-left   { text-align: left; }
    body.list table .text-right  { text-align: right; }

    .field-date select + select,
    .field-time select + select,
    .field-datetime select + select {
        margin-left: 2px;
    }

    body.error .error-description {
        max-width: 550px;
    }

    .pagination > li > a,
    .pagination > li > span {
        padding: 6px 12px;
    }

    .form-inline .form-control {
        margin-bottom: 0;
    }

    body.new .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    body.edit .form-horizontal #form-actions-row {
        margin-left: 16.66666667%;
    }

    {# Field: checkbox
       ------------------------------------------------------------------------- #}
    .form-vertical .field-checkbox label {
        padding-top: 23px;
    }
    .form-vertical .field-group .field-checkbox label {
        padding-top: 0;
    }
}
{% endautoescape %}
", "@EasyAdmin/css/easyadmin.css.twig", "/Users/ericzeidan/Sites/task-projekt/vendor/easycorp/easyadmin-bundle/src/Resources/views/css/easyadmin.css.twig");
    }
}
