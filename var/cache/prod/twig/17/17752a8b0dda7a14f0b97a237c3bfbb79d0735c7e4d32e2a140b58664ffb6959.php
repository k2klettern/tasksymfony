<?php

/* @EasyAdmin/css/easyadmin.css.twig */
class __TwigTemplate_f32203c7633ca51ae69695f6335b437d860652f927d412f1d38f574933dd3bc9 extends Twig_Template
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
        // line 4
        echo "
";
        // line 5
        $context["color_schemes"] = array("dark" => array("danger" => "#D42124", "success" => "#006B2E", "text" => "#222222", "text_muted" => "#737373", "link" => "#205081", "black" => "#111111", "white" => "#FFFFFF", "gray_darker" => "#252525", "gray_dark" => "#444", "gray" => "#AAA", "gray_light" => "#CCC", "gray_lighter" => "#F5F5F5", "page_background" => "#F5F5F5", "table_header" => "#EEE", "table_border" => "#CCC", "table_row_border" => "#DDD"), "light" => array("danger" => "#D42124", "success" => "#006B2E", "text" => "#444444", "text_muted" => "#737373", "link" => "#205081", "black" => "#333333", "white" => "#FFFFFF", "gray_darker" => "#444", "gray_dark" => "#AAA", "gray" => "#CCC", "gray_light" => "#F5F5F5", "gray_lighter" => "#FAFAFA", "page_background" => "#FFFFFF", "table_header" => "#FAFAFA", "table_border" => "#FFFFFF", "table_row_border" => "#E5E5E5"));
        // line 43
        echo "
";
        // line 44
        $context["colors"] = (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["color_schemes"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[($context["color_scheme"] ?? null)] ?? null) : null);
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
    -webkit-font-smoothing: antialiased;
}

h1, h2, h3, h4, h5, h6 {
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif;
}

";
        // line 71
        echo "a        { color: ";
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "link", array());
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
        // line 82
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "link", array());
        echo ";
}
a.text-danger,
a.text-danger:focus {
    color: ";
        // line 86
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "danger", array());
        echo ";
}
a.text-primary:hover,
a.text-danger:hover {
    opacity: 0.9;
}

";
        // line 95
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
        // line 113
        echo "div.flash {
    padding: .5em;
}
div.flash-success {
    background: ";
        // line 117
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "success", array());
        echo ";
    color: ";
        // line 118
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
        echo ";
}
div.flash-error {
    background: ";
        // line 121
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "danger", array());
        echo ";
    color: ";
        // line 122
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
        echo ";
}
div.flash-error strong {
    padding-right: .5em;
}

";
        // line 131
        echo ".label:not([class*=label-]) {
    background: ";
        // line 132
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_darker", array());
        echo ";
}
.label {
    color: ";
        // line 135
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
        echo ";
    display: inline-block;
    font-size: 11px;
    padding: 4px;
    text-transform: uppercase;
}

.label-success {
    ";
        // line 144
        echo "    background: ";
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "success", array());
        echo " !important;
}
.label-danger {
    ";
        // line 148
        echo "    background: ";
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "danger", array());
        echo " !important;
}
.label-empty {
    background: transparent;
    border: 2px dotted;
    border-radius: 4px;
    color: ";
        // line 154
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_light", array());
        echo ";
    padding: 4px 8px;
}

";
        // line 159
        echo ".boolean .label,
.toggle .label {
    min-width: 33px;
}

";
        // line 168
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
        // line 210
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_lighter", array());
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
        // line 226
        echo "span.badge {
    background-color: ";
        // line 227
        echo ($context["brand_color"] ?? null);
        echo ";
}

";
        // line 232
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
        // line 249
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 250
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 251
($context["color_scheme"] ?? null))) {
            // line 252
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray", array());
            echo ";
";
        }
        // line 254
        echo "    border: 1px solid transparent;
    border-radius: 4px;
    box-shadow: none;
    color: ";
        // line 257
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "text", array());
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
        // line 278
        echo ($context["brand_color"] ?? null);
        echo ";
    border-color: transparent;
    color: ";
        // line 280
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
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
        // line 289
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
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
        // line 304
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "danger", array());
        echo ";
    border-color: transparent;
    color: ";
        // line 306
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
        echo ";
}

.btn-success,
.btn-success:hover,
.btn-success:active,
.btn-success:focus,
.btn-success:active:hover {
    background-color: ";
        // line 314
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "success", array());
        echo ";
    border-color: transparent;
    color: ";
        // line 316
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
        echo ";
}

";
        // line 320
        echo ".btn-secondary,
.btn-secondary:hover,
.btn-secondary:active,
.btn-secondary:focus,
.btn-secondary:active:hover {
    background: transparent;
    color: ";
        // line 326
        echo ($context["brand_color"] ?? null);
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
        // line 355
        echo ".form-inline .form-control {
    margin-bottom: 5px;
}
.form-control,
.form-inline .form-control {
    border: 1px solid ";
        // line 360
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray", array());
        echo ";
    border-radius: 0;
";
        // line 362
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 363
            echo "    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
";
        }
        // line 365
        echo "    color: ";
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "text", array());
        echo ";
    -webkit-transition: none;
    transition: none;
}
.form-control:focus {
";
        // line 370
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 371
            echo "    border-color: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_dark", array());
            echo ";
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
";
        } elseif (("light" ==         // line 373
($context["color_scheme"] ?? null))) {
            // line 374
            echo "    border-color: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_darker", array());
            echo ";
";
        }
        // line 376
        echo "}

.has-error .error-block {
    color: ";
        // line 379
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "danger", array());
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
        // line 395
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "text_muted", array());
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
        // line 405
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 406
            echo "    background-color: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_lighter", array());
            echo ";
    box-shadow: 0 -1px 4px ";
            // line 407
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 408
($context["color_scheme"] ?? null))) {
            // line 409
            echo "    background-color: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_light", array());
            echo ";
    box-shadow: 0 -1px 4px ";
            // line 410
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray", array());
            echo ";
";
        }
        // line 412
        echo "    height: 52px;
    padding-top: 10px;
";
        // line 414
        if (((array_key_exists("kernel_debug", $context)) ? (_twig_default_filter(($context["kernel_debug"] ?? null), false)) : (false))) {
            // line 415
            echo "    height: 85px;
    padding-bottom: 45px;
";
        }
        // line 418
        echo "    z-index: 9999;
}

.field-group .box-header a i {
    font-size: 21px;
}

.field-group .box-header a[aria-expanded=true] .fa-plus-square-o {
   display: none;
}
.field-group .box-header a[aria-expanded=false] .fa-minus-square-o {
   display: none;
}

";
        // line 434
        echo ".field-collection .collection-empty {
    margin: .5em 0;
}

";
        // line 440
        echo ".field-divider hr {
    margin-top: 15px;
    margin-bottom: 26px;
    border: 0;
    border-top: 1px solid;
";
        // line 445
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 446
            echo "    border-top-color: #DDD;
";
        } elseif (("light" ==         // line 447
($context["color_scheme"] ?? null))) {
            // line 448
            echo "    border-top-color: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_lighter", array());
            echo ";
";
        }
        // line 450
        echo "}
.field-group .field-divider hr {
";
        // line 452
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 453
            echo "    border-top-color: #DDD;
";
        } elseif (("light" ==         // line 454
($context["color_scheme"] ?? null))) {
            // line 455
            echo "    border-top-color: #EEE;
";
        }
        // line 457
        echo "}

.field-section {
    margin: 16px 0 15px;
}
.field-section h2 {
";
        // line 463
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 464
            echo "    border-bottom: 1px solid ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_light", array());
            echo ";
    color: ";
            // line 465
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_dark", array());
            echo ";
";
        } elseif (("light" ==         // line 466
($context["color_scheme"] ?? null))) {
            // line 467
            echo "    border-bottom: 1px solid #EEE;
    color: ";
            // line 468
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_darker", array());
            echo ";
";
        }
        // line 470
        echo "    font-size: 16px;
    padding-bottom: 6px;
}
.field-section h2 i {
";
        // line 474
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 475
            echo "    color: #555;
";
        } elseif (("light" ==         // line 476
($context["color_scheme"] ?? null))) {
            // line 477
            echo "    color: #777;
";
        }
        // line 479
        echo "    margin-right: 2px;
}
.field-section p.help-block {
    margin: 8px 0 0;
}

.field-group .box {
";
        // line 486
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 487
            echo "    border: 1px solid #DDD;
";
        } elseif (("light" ==         // line 488
($context["color_scheme"] ?? null))) {
            // line 489
            echo "    border: 1px solid #EEE;
";
        }
        // line 491
        echo "    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
}
.field-group .box-header i {
";
        // line 494
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 495
            echo "    color: #555;
";
        } elseif (("light" ==         // line 496
($context["color_scheme"] ?? null))) {
            // line 497
            echo "    color: #777;
";
        }
        // line 499
        echo "    margin-right: 2px;
}
.field-group .box-header.with-border {
";
        // line 502
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 503
            echo "    background: #F0F0F0;
    border-bottom-color: #DDD;
";
        } elseif (("light" ==         // line 505
($context["color_scheme"] ?? null))) {
            // line 506
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_light", array());
            echo ";
    border-bottom-color: #EEE;
    color: ";
            // line 508
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_darker", array());
            echo ";
";
        }
        // line 510
        echo "    padding: 11px 10px 9px;
}
";
        // line 512
        if (("light" == ($context["color_scheme"] ?? null))) {
            // line 513
            echo ".field-group .box-header .box-title {
    color: #777;
}
";
        }
        // line 517
        echo ".field-group .box-body {
    padding: 15px 15px 5px;
}
.field-group .box-body > .help-block {
    margin-top: 0;
}

";
        // line 527
        echo ".select2-container {
    width: 100% !important;
}
.select2-container--bootstrap .select2-selection {
    border: 1px solid ";
        // line 531
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray", array());
        echo ";
    border-radius: 0;
    box-shadow: 0 0 3px rgba(0, 0, 0, .15);
    color: ";
        // line 534
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "text", array());
        echo ";
    -webkit-transition: none;
    transition: none;
}
.select2-container--bootstrap .select2-selection .select2-search--inline {
    margin: 0;
}
.select2-container--bootstrap .select2-selection--single .select2-selection__rendered {
    color: ";
        // line 542
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "text", array());
        echo ";
    padding-top: 4px;
}
.select2-container--bootstrap .select2-results__option {
    margin-bottom: 0;
}
.select2-container--bootstrap .select2-results__option[aria-selected=true] {
    background-color: ";
        // line 549
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_light", array());
        echo ";
    font-weight: bold;
}
.select2-container--bootstrap .select2-results__option--highlighted[aria-selected] {
    background-color: ";
        // line 553
        echo ($context["brand_color"] ?? null);
        echo ";
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice {
    color: ";
        // line 556
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "text", array());
        echo ";
}
.select2-container--bootstrap .select2-selection--multiple .select2-selection__choice__remove {
    color: ";
        // line 559
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "danger", array());
        echo ";
    font-weight: bold;
    position: relative;
    top: -1px;
}
.select2-container--bootstrap .select2-search--dropdown .select2-search__field {
    border: 1px solid ";
        // line 565
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_dark", array());
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
        // line 578
        echo ".easyadmin-vich-image img {
    border: 3px solid ";
        // line 579
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 580
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray", array());
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
        // line 593
        echo ".easyadmin-vich-file .field-checkbox {
    margin-bottom: 0;
}
.easyadmin-vich-file .field-checkbox .col-sm-2,
.easyadmin-vich-image .field-checkbox .col-sm-2 {
    display: none;
}

";
        // line 603
        echo ".easyadmin-thumbnail img {
    border: 3px solid ";
        // line 604
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 605
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray", array());
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
        // line 627
        echo ".modal-dialog .modal-content {
    border-radius: 0;
}
.modal-dialog .modal-content .modal-body h4 {
    font-size: 21px;
    margin: .5em 0;
}
.modal-dialog .modal-footer {
    background: ";
        // line 635
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_lighter", array());
        echo ";
    border-top: 1px solid ";
        // line 636
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_light", array());
        echo ";
    margin-top: 1.5em;
}

";
        // line 642
        echo ".newrow, .new-row {
    clear: both;
    display: block;
}

";
        // line 650
        echo "
";
        // line 653
        echo ".content-wrapper {
    background: ";
        // line 654
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "page_background", array());
        echo ";
}
.fixed .content-wrapper {
    padding-top: 50px;
}

";
        // line 662
        echo ".main-header {
    background: ";
        // line 663
        echo ($context["brand_color"] ?? null);
        echo ";
    position: relative;
}
.main-header .logo {
    color: ";
        // line 667
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
        echo ";
    font-family: Helvetica, \"Helvetica Neue\", Arial, sans-serif; ";
        // line 669
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
        // line 694
        echo ($context["brand_color"] ?? null);
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
        // line 713
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
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
        // line 770
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
        // line 786
        echo ".main-sidebar,
.wrapper {
";
        // line 788
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 789
            echo "    background-color: #333;
";
        } elseif (("light" ==         // line 790
($context["color_scheme"] ?? null))) {
            // line 791
            echo "    background-color: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_light", array());
            echo ";
";
        }
        // line 793
        echo "}
.main-sidebar {
    padding-top: 80px;
}

.sidebar-menu li.header {
";
        // line 799
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 800
            echo "    color: #777;
";
        } elseif (("light" ==         // line 801
($context["color_scheme"] ?? null))) {
            // line 802
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_dark", array());
            echo ";
";
        }
        // line 804
        echo "    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
}
.treeview-menu > li.header {
";
        // line 809
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 810
            echo "    background: #404040;
";
        } elseif (("light" ==         // line 811
($context["color_scheme"] ?? null))) {
            // line 812
            echo "    background-color: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_lighter", array());
            echo ";
";
        }
        // line 814
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
        // line 831
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 832
            echo "    background: #333;
    color: #CCC;
";
        } elseif (("light" ==         // line 834
($context["color_scheme"] ?? null))) {
            // line 835
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_darker", array());
            echo ";
";
        }
        // line 837
        echo "    border-left: 3px solid transparent;
    display: block;
    font-weight: bold;
    opacity: 1;
}
.sidebar-menu .treeview-menu > li > a {
";
        // line 843
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 844
            echo "    background: #404040;
";
        } elseif (("light" ==         // line 845
($context["color_scheme"] ?? null))) {
            // line 846
            echo "    background-color: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_lighter", array());
            echo ";
";
        }
        // line 848
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
        // line 857
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 858
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
            echo ";
    background: #4D4D4D;
    border-left-color: #BBB;
";
        } elseif (("light" ==         // line 861
($context["color_scheme"] ?? null))) {
            // line 862
            echo "    background: #DCDCDC;
    border-left-color: #808080;
";
        }
        // line 865
        echo "}
.sidebar-menu > li > a > .fa {
    width: 22px;
}
.sidebar-menu .treeview-menu {
    padding: 0;
}

";
        // line 874
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
        // line 891
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 892
            echo "    background: #333;
";
        } elseif (("light" ==         // line 893
($context["color_scheme"] ?? null))) {
            // line 894
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_light", array());
            echo ";
";
        }
        // line 896
        echo "}

";
        // line 899
        echo ".sidebar-mini.sidebar-collapse .sidebar-menu li.header {
";
        // line 900
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 901
            echo "    border-bottom: 1px solid #777;
";
        } elseif (("light" ==         // line 902
($context["color_scheme"] ?? null))) {
            // line 903
            echo "    border-bottom: 1px solid #BBB;
";
        }
        // line 905
        echo "    display: block !important;
    font-size: 0;
    height: 1px;
    margin: 0;
    padding: 0;
}

";
        // line 915
        echo "body.easyadmin h1.title {
    margin-bottom: 10px;
}

.help-entity {
";
        // line 920
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 921
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_dark", array());
            echo ";
";
        } elseif (("light" ==         // line 922
($context["color_scheme"] ?? null))) {
            // line 923
            echo "    border: 1px solid #EEE;
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
    color: ";
            // line 925
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "text_muted", array());
            echo ";
";
        }
        // line 927
        echo "    margin: 10px 0 5px;
}

";
        // line 933
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
        // line 969
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
        // line 982
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
        echo ";
";
        // line 983
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 984
            echo "    border: 1px solid ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_light", array());
            echo ";
";
        } elseif (("light" ==         // line 985
($context["color_scheme"] ?? null))) {
            // line 986
            echo "    border: 1px solid ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray", array());
            echo ";
";
        }
        // line 988
        echo "    display: block;
    margin-bottom: 1em;
}
body.list table tbody td {
    border-bottom: 1px solid ";
        // line 992
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "table_row_border", array());
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
        // line 1033
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
        // line 1046
        echo "body.list .pagination {
    float: right;
    margin: 0;
}
body.list .pagination > .disabled > span {
    background: transparent;
    border: 1px solid transparent;
";
        // line 1053
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 1054
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "text_muted", array());
            echo ";
";
        } elseif (("light" ==         // line 1055
($context["color_scheme"] ?? null))) {
            // line 1056
            echo "    color: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray", array());
            echo ";
";
        }
        // line 1058
        echo "}
body.list .pagination > li > a {
    background: ";
        // line 1060
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
        echo ";
    border-color: ";
        // line 1061
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_light", array());
        echo ";
    border-radius: 0;
    color: ";
        // line 1063
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "text", array());
        echo ";
}
body.list .pagination > li > a:hover {
    background: ";
        // line 1066
        echo ($context["brand_color"] ?? null);
        echo ";
    color: ";
        // line 1067
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
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
        // line 1079
        echo "body.list .pagination.last-page li:nth-child(2) {
    position: relative;
    z-index: 1;
}

";
        // line 1087
        echo "form label.control-label.required:after {
    content: \"\\00a0*\";
    color: ";
        // line 1089
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "danger", array());
        echo ";
    font-size: 16px;
}

";
        // line 1096
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
        // line 1118
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
        // line 1140
        echo "body.show .form-control {
";
        // line 1141
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 1142
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
            echo ";
";
        } elseif (("light" ==         // line 1143
($context["color_scheme"] ?? null))) {
            // line 1144
            echo "    background: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_lighter", array());
            echo ";
";
        }
        // line 1146
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
        // line 1160
        echo "body.error .content-wrapper {
    align-items: center;
    display: flex;
}
body.error .error-description {
    background: ";
        // line 1165
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
        echo ";
    border: 1px solid ";
        // line 1166
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_lighter", array());
        echo ";
    box-shadow: 0 0 3px ";
        // line 1167
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_light", array());
        echo ";
    max-width: 96%;
    padding: 0;
}
body.error .error-description h1 {
    background: ";
        // line 1172
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "danger", array());
        echo ";
    color: ";
        // line 1173
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
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
        // line 1189
        echo "
";
        // line 1193
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
        // line 1217
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
        // line 1264
        echo "    body.list table {
        background: ";
        // line 1265
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
        echo ";
        border: 1px solid ";
        // line 1266
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "table_border", array());
        echo ";
    }
    body.list table thead {
        display: table-header-group;
    }
    body.list table thead th {
        background: ";
        // line 1272
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "table_header", array());
        echo ";
        padding: 0;
    }
    body.list table thead th i {
        color: ";
        // line 1276
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray", array());
        echo ";
        padding: 0 3px;
    }
    body.list table thead th a,
    body.list table thead th span {
        color: ";
        // line 1281
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "text", array());
        echo ";
        display: block;
        padding: 10px 6px;
        white-space: nowrap;
    }
    body.list table thead th a:hover {
        background: ";
        // line 1287
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_light", array());
        echo ";
        text-decoration: none;
    }
    body.list table thead th.sorted,
    body.list table thead th.sorted a {
";
        // line 1292
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 1293
            echo "        background: ";
            echo ($context["brand_color"] ?? null);
            echo ";
        color: ";
            // line 1294
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
            echo ";
";
        }
        // line 1296
        echo "    }
    body.list table thead th.sorted a:hover i,
    body.list table thead th.sorted i {
";
        // line 1299
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 1300
            echo "        color: ";
            echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "white", array());
            echo ";
";
        } elseif (("light" ==         // line 1301
($context["color_scheme"] ?? null))) {
            // line 1302
            echo "        color: ";
            echo ($context["brand_color"] ?? null);
            echo ";
";
        }
        // line 1304
        echo "    }
    body.list th.boolean, body.list td.boolean,
    body.list th.toggle, body.list td.toggle,
    body.list td.image {
        text-align: center;
    }

    body.list .table thead tr th {
        border-bottom: 2px solid ";
        // line 1312
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_light", array());
        echo ";
    }
    body.list .table thead tr th.sorted {
        border-bottom: 2px outset ";
        // line 1315
        echo ($context["brand_color"] ?? null);
        echo ";
    }
    ";
        // line 1318
        echo "    body.list .table thead tr th:first-child.sorted {
";
        // line 1319
        if (("dark" == ($context["color_scheme"] ?? null))) {
            // line 1320
            echo "        border-left: 1px solid ";
            echo ($context["brand_color"] ?? null);
            echo ";
        border-top: 1px solid ";
            // line 1321
            echo ($context["brand_color"] ?? null);
            echo ";
";
        }
        // line 1323
        echo "    }
    body.list .table tbody {
        border-bottom: 2px double ";
        // line 1325
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_light", array());
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
        // line 1334
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "table_row_border", array());
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
        // line 1346
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_lighter", array());
        echo ";
        border-color: ";
        // line 1347
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "table_row_border", array());
        echo ";
    }
    body.list .table tbody tr:hover td {
        background: ";
        // line 1350
        echo twig_get_attribute($this->env, $this->source, ($context["colors"] ?? null), "gray_lighter", array());
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
        // line 1390
        echo "    .form-vertical .field-checkbox label {
        padding-top: 23px;
    }
    .form-vertical .field-group .field-checkbox label {
        padding-top: 0;
    }
}
";
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
        return array (  1868 => 1390,  1827 => 1350,  1821 => 1347,  1817 => 1346,  1802 => 1334,  1790 => 1325,  1786 => 1323,  1781 => 1321,  1776 => 1320,  1774 => 1319,  1771 => 1318,  1766 => 1315,  1760 => 1312,  1750 => 1304,  1744 => 1302,  1742 => 1301,  1737 => 1300,  1735 => 1299,  1730 => 1296,  1725 => 1294,  1720 => 1293,  1718 => 1292,  1710 => 1287,  1701 => 1281,  1693 => 1276,  1686 => 1272,  1677 => 1266,  1673 => 1265,  1670 => 1264,  1622 => 1217,  1597 => 1193,  1594 => 1189,  1578 => 1173,  1574 => 1172,  1566 => 1167,  1562 => 1166,  1558 => 1165,  1551 => 1160,  1538 => 1146,  1532 => 1144,  1530 => 1143,  1525 => 1142,  1523 => 1141,  1520 => 1140,  1499 => 1118,  1478 => 1096,  1471 => 1089,  1467 => 1087,  1460 => 1079,  1448 => 1067,  1444 => 1066,  1438 => 1063,  1433 => 1061,  1429 => 1060,  1425 => 1058,  1419 => 1056,  1417 => 1055,  1412 => 1054,  1410 => 1053,  1401 => 1046,  1388 => 1033,  1346 => 992,  1340 => 988,  1334 => 986,  1332 => 985,  1327 => 984,  1325 => 983,  1321 => 982,  1306 => 969,  1270 => 933,  1265 => 927,  1260 => 925,  1256 => 923,  1254 => 922,  1249 => 921,  1247 => 920,  1240 => 915,  1231 => 905,  1227 => 903,  1225 => 902,  1222 => 901,  1220 => 900,  1217 => 899,  1213 => 896,  1207 => 894,  1205 => 893,  1202 => 892,  1200 => 891,  1181 => 874,  1171 => 865,  1166 => 862,  1164 => 861,  1157 => 858,  1155 => 857,  1144 => 848,  1138 => 846,  1136 => 845,  1133 => 844,  1131 => 843,  1123 => 837,  1117 => 835,  1115 => 834,  1111 => 832,  1109 => 831,  1090 => 814,  1084 => 812,  1082 => 811,  1079 => 810,  1077 => 809,  1070 => 804,  1064 => 802,  1062 => 801,  1059 => 800,  1057 => 799,  1049 => 793,  1043 => 791,  1041 => 790,  1038 => 789,  1036 => 788,  1032 => 786,  1016 => 770,  958 => 713,  936 => 694,  909 => 669,  905 => 667,  898 => 663,  895 => 662,  886 => 654,  883 => 653,  880 => 650,  873 => 642,  866 => 636,  862 => 635,  852 => 627,  829 => 605,  825 => 604,  822 => 603,  812 => 593,  797 => 580,  793 => 579,  790 => 578,  776 => 565,  767 => 559,  761 => 556,  755 => 553,  748 => 549,  738 => 542,  727 => 534,  721 => 531,  715 => 527,  706 => 517,  700 => 513,  698 => 512,  694 => 510,  689 => 508,  683 => 506,  681 => 505,  677 => 503,  675 => 502,  670 => 499,  666 => 497,  664 => 496,  661 => 495,  659 => 494,  654 => 491,  650 => 489,  648 => 488,  645 => 487,  643 => 486,  634 => 479,  630 => 477,  628 => 476,  625 => 475,  623 => 474,  617 => 470,  612 => 468,  609 => 467,  607 => 466,  603 => 465,  598 => 464,  596 => 463,  588 => 457,  584 => 455,  582 => 454,  579 => 453,  577 => 452,  573 => 450,  567 => 448,  565 => 447,  562 => 446,  560 => 445,  553 => 440,  547 => 434,  531 => 418,  526 => 415,  524 => 414,  520 => 412,  515 => 410,  510 => 409,  508 => 408,  504 => 407,  499 => 406,  497 => 405,  484 => 395,  465 => 379,  460 => 376,  454 => 374,  452 => 373,  446 => 371,  444 => 370,  435 => 365,  431 => 363,  429 => 362,  424 => 360,  417 => 355,  387 => 326,  379 => 320,  373 => 316,  368 => 314,  357 => 306,  352 => 304,  334 => 289,  322 => 280,  317 => 278,  293 => 257,  288 => 254,  282 => 252,  280 => 251,  275 => 250,  273 => 249,  254 => 232,  248 => 227,  245 => 226,  228 => 210,  184 => 168,  177 => 159,  170 => 154,  160 => 148,  153 => 144,  142 => 135,  136 => 132,  133 => 131,  124 => 122,  120 => 121,  114 => 118,  110 => 117,  104 => 113,  86 => 95,  76 => 86,  69 => 82,  54 => 71,  43 => 60,  36 => 52,  33 => 45,  31 => 44,  28 => 43,  26 => 5,  23 => 4,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@EasyAdmin/css/easyadmin.css.twig", "/Users/chia/Sites/tasksymfony/vendor/easycorp/easyadmin-bundle/src/Resources/views/css/easyadmin.css.twig");
    }
}
