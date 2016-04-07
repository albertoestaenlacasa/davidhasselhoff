<?php

/* @WebProfiler/Collector/form.html.twig */
class __TwigTemplate_84a0f68a261dba410950a5b7137ef7a915abe519e8cc049e38b321fc6bd1e7ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/form.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'head' => array($this, 'block_head'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_b41c4fd43ac10a238768a9a186bae8c15cdf7c49c787eadfe881ae9e6359ebfe"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if ((($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "nb_errors", array()) > 0) || twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "forms", array())))) {
            // line 7
            echo "        ";
            $context["status_color"] = (($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "nb_errors", array())) ? ("red") : (""));
            // line 8
            echo "        ";
            ob_start();
            // line 9
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/form.svg");
            echo "
            <span class=\"sf-toolbar-value\">
                ";
            // line 11
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "nb_errors", array())) ? ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "nb_errors", array())) : (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "forms", array())))), "html", null, true);
            echo "
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 14
            echo "
        ";
            // line 15
            ob_start();
            // line 16
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Number of forms</b>
                <span class=\"sf-toolbar-status\">";
            // line 18
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "forms", array())), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Number of errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 22
            echo ((($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "nb_errors", array()) > 0)) ? ("red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "nb_errors", array()), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 25
            echo "
        ";
            // line 26
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : null), "status" => (isset($context["status_color"]) ? $context["status_color"] : null)));
            echo "
    ";
        }
    }

    // line 30
    public function block_menu($context, array $blocks = array())
    {
        // line 31
        echo "    <span class=\"label label-status-";
        echo (($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "nb_errors", array())) ? ("error") : (""));
        echo " ";
        echo ((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "forms", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 32
        echo twig_include($this->env, $context, "@WebProfiler/Icon/form.svg");
        echo "</span>
        <strong>Forms</strong>
        ";
        // line 34
        if (($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "nb_errors", array()) > 0)) {
            // line 35
            echo "            <span class=\"count\">
                <span>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "nb_errors", array()), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 39
        echo "    </span>
";
    }

    // line 42
    public function block_head($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "

    <style>
        #tree-menu {
            float: left;
            padding-right: 10px;
            width: 230px;
        }
        #tree-menu ul {
            list-style: none;
            margin: 0;
            padding-left: 0;
        }
        #tree-menu li {
            margin: 0;
            padding: 0;
            width: 100%;
        }
        #tree-menu .empty {
            border: 0;
            mmargin: 0;
            padding: 0;
        }
        #tree-details-container {
            border-left: 1px solid #DDD;
            margin-left: 250px;
            padding-left: 20px;
        }
        .tree-details {
            padding-bottom: 40px;
        }
        .tree-details h3 {
            font-size: 18px;
            position: relative;
        }

        .toggle-icon {
            display: inline-block;
            background: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAgBAMAAADpp+X/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDgwx4LcKwAAAABVQTFRFAAAA////////////////ZmZm////bvjBwAAAAAV0Uk5TABZwsuCVEUjgAAAAAWJLR0QF+G/pxwAAAE1JREFUGNNjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBmwgTQgQGWgA7h2uIFwK+CWwp1BpHvYEqDuATEYkBlY3IOmBq6dCPcAAIT5Eg2IksjQAAAAAElFTkSuQmCC\") no-repeat top left #5eb5e0;
        }
        .closed .toggle-icon, .closed.toggle-icon {
            background-position: bottom left;
        }
        .toggle-icon.empty {
            background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABmJLR0QAZgBmAGYHukptAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhIf6CA40AAAAFRJREFUOMvtk7ENACEMA61vfx767MROWfO+AdGBHlNyTZrYUZRYDBII4NWE1pNdpFarfgLUbpDaBEgBYRiEVjsvDLa1l6O4Z3wkFWN+OfLKdpisOH/TlICzukmUJwAAAABJRU5ErkJggg==\");
        }

        .tree .tree-inner {
            cursor: pointer;
            padding: 5px 7px 5px 22px;
            position: relative;

        }
        .tree .toggle-button {
            /* provide a bigger clickable area than just 10x10px */
            width: 16px;
            height: 16px;
            /* vertically center the button */
            position: absolute;
            top: 50%;
            margin-top: -8px;
            margin-left: -18px;
        }
        .tree .toggle-icon {
            width: 10px;
            height: 10px;
            /* position the icon in the center of the clickable area */
            margin-left: 3px;
            margin-top: 3px;
            background-size: 10px 20px;
            background-color: #ccc;
        }
        .tree .toggle-icon.empty {
            width: 10px;
            height: 10px;
            position: absolute;
            top: 50%;
            margin-top: -5px;
            margin-left: -15px;
            background-size: 10px 10px;
        }
        .tree ul ul .tree-inner {
            padding-left: 37px;
        }
        .tree ul ul ul .tree-inner {
            padding-left: 52px;
        }
        .tree ul ul ul ul .tree-inner {
            padding-left: 67px;
        }
        .tree ul ul ul ul ul .tree-inner {
            padding-left: 82px;
        }
        .tree .tree-inner:hover {
            background: #dfdfdf;
        }
        .tree .tree-inner.active, .tree .tree-inner.active:hover {
            background: #E0E0E0;
            font-weight: bold;
        }
        .tree .tree-inner.active .toggle-icon, .tree .tree-inner:hover .toggle-icon, .tree .tree-inner.active:hover .toggle-icon {
            background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAgBAMAAADpp+X/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhEYXWn+sAAAABhQTFRFAAAA39/f39/f39/f39/fZmZm39/f////gc3YPwAAAAV0Uk5TAAtAc6ZeVyCYAAAAAWJLR0QF+G/pxwAAAE1JREFUGNNjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBmwgXIgQGWgA7h2uIFwK+CWwp1BpHvYC6DuATEYkBlY3IOmBq6dCPcAADqLE4MnBi/fAAAAAElFTkSuQmCC\");
            background-color: #999;
        }
        .tree .tree-inner.active .toggle-icon.empty, .tree .tree-inner:hover .toggle-icon.empty, .tree .tree-inner.active:hover .toggle-icon.empty {
            background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQBAMAAADt3eJSAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhoucSey4gAAABVQTFRFAAAA39/f39/f39/f39/fZmZm39/fD5Dx2AAAAAV0Uk5TAAtAc6ZeVyCYAAAAAWJLR0QF+G/pxwAAADJJREFUCNdjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBnIA3DtcAPhVsAthTkDAFOfBKW9C1iqAAAAAElFTkSuQmCC\");
        }
        .tree-details .toggle-icon {
            width: 16px;
            height: 16px;
            /* vertically center the button */
            position: absolute;
            top: 50%;
            margin-top: -9px;
            margin-left: 6px;
        }
        .form-type {
            color: #999;
        }
        .badge-error {
            float: right;
            background: #B0413E;
            color: #FFF;
            padding: 1px 4px;
            font-size: 10px;
            font-weight: bold;
            vertical-align: middle;
        }
        .errors h3 {
            color: #B0413E;
        }
        .errors th {
            background: #B0413E;
            color: #FFF;
        }
        .errors .toggle-icon {
            background-color: #B0413E;
        }
        h3 a, h3 a:hover, h3 a:focus {
            color: inherit;
            text-decoration: inherit;
        }
    </style>
";
    }

    // line 188
    public function block_panel($context, array $blocks = array())
    {
        // line 189
        echo "    <h2>Forms</h2>

    ";
        // line 191
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "forms", array()))) {
            // line 192
            echo "        <div id=\"tree-menu\" class=\"tree\">
            <ul>
            ";
            // line 194
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "forms", array()));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 195
                echo "                ";
                echo $context["__internal_b41c4fd43ac10a238768a9a186bae8c15cdf7c49c787eadfe881ae9e6359ebfe"]->getform_tree_entry($context["formName"], $context["formData"], true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "            </ul>
        </div>

        <div id=\"tree-details-container\">
            ";
            // line 201
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "forms", array()));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 202
                echo "                ";
                echo $context["__internal_b41c4fd43ac10a238768a9a186bae8c15cdf7c49c787eadfe881ae9e6359ebfe"]->getform_tree_details($context["formName"], $context["formData"], $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "forms_by_hash", array()));
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 204
            echo "        </div>
    ";
        } else {
            // line 206
            echo "        <div class=\"empty\">
            <p>No forms were submitted for this request.</p>
        </div>
    ";
        }
        // line 210
        echo "
    <script>
    function Toggler(storage) {
        \"use strict\";

        var STORAGE_KEY = 'sf_toggle_data',

            states = {},

            isCollapsed = function (button) {
                return Sfjs.hasClass(button, 'closed');
            },

            isExpanded = function (button) {
                return !isCollapsed(button);
            },

            expand = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isCollapsed(button)) {
                    Sfjs.removeClass(button, 'closed');
                    Sfjs.removeClass(target, 'hidden');

                    states[targetId] = 1;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            collapse = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isExpanded(button)) {
                    Sfjs.addClass(button, 'closed');
                    Sfjs.addClass(target, 'hidden');

                    states[targetId] = 0;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            toggle = function (button) {
                if (Sfjs.hasClass(button, 'closed')) {
                    expand(button);
                } else {
                    collapse(button);
                }
            },

            initButtons = function (buttons) {
                states = storage.getItem(STORAGE_KEY, {});

                // must be an object, not an array or anything else
                // `typeof` returns \"object\" also for arrays, so the following
                // check must be done
                // see http://stackoverflow.com/questions/4775722/check-if-object-is-array
                if ('[object Object]' !== Object.prototype.toString.call(states)) {
                    states = {};
                }

                for (var i = 0, l = buttons.length; i < l; ++i) {
                    var targetId = buttons[i].dataset.toggleTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Toggle target \" + targetId + \" does not exist\";
                    }

                    // correct the initial state of the button
                    if (Sfjs.hasClass(target, 'hidden')) {
                        Sfjs.addClass(buttons[i], 'closed');
                    }

                    // attach listener for expanding/collapsing the target
                    clickHandler(buttons[i], toggle);

                    if (states.hasOwnProperty(targetId)) {
                        // open or collapse based on stored data
                        if (0 === states[targetId]) {
                            collapse(buttons[i]);
                        } else {
                            expand(buttons[i]);
                        }
                    }
                }
            };

        return {
            initButtons: initButtons,

            toggle: toggle,

            isExpanded: isExpanded,

            isCollapsed: isCollapsed,

            expand: expand,

            collapse: collapse
        };
    }

    function JsonStorage(storage) {
        var setItem = function (key, data) {
                storage.setItem(key, JSON.stringify(data));
            },

            getItem = function (key, defaultValue) {
                var data = storage.getItem(key);

                if (null !== data) {
                    try {
                        return JSON.parse(data);
                    } catch(e) {
                    }
                }

                return defaultValue;
            };

        return {
            setItem: setItem,

            getItem: getItem
        };
    }

    function TabView() {
        \"use strict\";

        var activeTab = null,

            activeTarget = null,

            select = function (tab) {
                var targetId = tab.dataset.tabTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Tab target \" + targetId + \" does not exist\";
                }

                if (activeTab) {
                    Sfjs.removeClass(activeTab, 'active');
                }

                if (activeTarget) {
                    Sfjs.addClass(activeTarget, 'hidden');
                }

                Sfjs.addClass(tab, 'active');
                Sfjs.removeClass(target, 'hidden');

                activeTab = tab;
                activeTarget = target;
            },

            initTabs = function (tabs) {
                for (var i = 0, l = tabs.length; i < l; ++i) {
                    var targetId = tabs[i].dataset.tabTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Tab target \" + targetId + \" does not exist\";
                    }

                    clickHandler(tabs[i], select);

                    Sfjs.addClass(target, 'hidden');
                }

                if (tabs.length > 0) {
                    select(tabs[0]);
                }
            };

        return {
            initTabs: initTabs,

            select: select
        };
    }

    var tabTarget = new TabView(),
        toggler = new Toggler(new JsonStorage(sessionStorage)),
        clickHandler = function (element, callback) {
            Sfjs.addEventListener(element, 'click', function (e) {
                if (!e) {
                    e = window.event;
                }

                callback(this);

                if (e.preventDefault) {
                    e.preventDefault();
                } else {
                    e.returnValue = false;
                }

                e.stopPropagation();

                return false;
            });
        };

    tabTarget.initTabs(document.querySelectorAll('.tree .tree-inner'));
    toggler.initButtons(document.querySelectorAll('a.toggle-button'));
    </script>
";
    }

    // line 430
    public function getform_tree_entry($__name__ = null, $__data__ = null, $__expanded__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "data" => $__data__,
            "expanded" => $__expanded__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 431
            echo "    ";
            $context["tree"] = $this;
            // line 432
            echo "    <li>
        <div class=\"tree-inner\" data-tab-target-id=\"";
            // line 433
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
            echo "-details\">
            ";
            // line 434
            if ( !twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "children", array()))) {
                // line 435
                echo "                <a class=\"toggle-button\" data-toggle-target-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
                echo "-children\" href=\"#\"><span class=\"toggle-icon\"></span></a>
            ";
            } else {
                // line 437
                echo "                <div class=\"toggle-icon empty\"></div>
            ";
            }
            // line 439
            echo "
            ";
            // line 440
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter((isset($context["name"]) ? $context["name"] : null), "(no name)")) : ("(no name)")), "html", null, true);
            echo " ";
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "type_class", array(), "any", true, true) && $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "type", array(), "any", true, true))) {
                echo "[<abbr title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "type_class", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "type", array()), "html", null, true);
                echo "</abbr>]";
            }
            // line 441
            echo "
            ";
            // line 442
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "errors", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "errors", array())) > 0))) {
                // line 443
                echo "                <div class=\"badge-error\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "errors", array())), "html", null, true);
                echo "</div>
            ";
            }
            // line 445
            echo "        </div>

        ";
            // line 447
            if ( !twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "children", array()))) {
                // line 448
                echo "            <ul id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
                echo "-children\" ";
                if ( !(isset($context["expanded"]) ? $context["expanded"] : null)) {
                    echo "class=\"hidden\"";
                }
                echo ">
                ";
                // line 449
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "children", array()));
                foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                    // line 450
                    echo "                    ";
                    echo $context["tree"]->getform_tree_entry($context["childName"], $context["childData"], false);
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 452
                echo "            </ul>
        ";
            }
            // line 454
            echo "    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 457
    public function getform_tree_details($__name__ = null, $__data__ = null, $__forms_by_hash__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "data" => $__data__,
            "forms_by_hash" => $__forms_by_hash__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 458
            echo "    ";
            $context["tree"] = $this;
            // line 459
            echo "    <div class=\"tree-details\" ";
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array(), "any", true, true)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
                echo "-details\"";
            }
            echo ">
        <h2>
            ";
            // line 461
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter((isset($context["name"]) ? $context["name"] : null), "(no name)")) : ("(no name)")), "html", null, true);
            echo "
            ";
            // line 462
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "type_class", array(), "any", true, true) && $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "type", array(), "any", true, true))) {
                // line 463
                echo "            <span class=\"form-type\">[<abbr title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "type_class", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "type", array()), "html", null, true);
                echo "</abbr>]</span>
            ";
            }
            // line 465
            echo "        </h2>

        ";
            // line 467
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "errors", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "errors", array())) > 0))) {
                // line 468
                echo "        <div class=\"errors\">
            <h3>
                <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 470
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
                echo "-errors\" href=\"#\">
                    Errors <span class=\"toggle-icon\"></span>
                </a>
            </h3>

            <table id=\"";
                // line 475
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
                echo "-errors\">
                <thead>
                    <tr>
                        <th>Message</th>
                        <th>Origin</th>
                        <th>Cause</th>
                    </tr>
                </thead>
                <tbody>
                ";
                // line 484
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "errors", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 485
                    echo "                <tr>
                    <td>";
                    // line 486
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "</td>
                    <td>
                        ";
                    // line 488
                    if (twig_test_empty($this->getAttribute($context["error"], "origin", array()))) {
                        // line 489
                        echo "                            <em>This form.</em>
                        ";
                    } elseif ( !$this->getAttribute(                    // line 490
(isset($context["forms_by_hash"]) ? $context["forms_by_hash"] : null), $this->getAttribute($context["error"], "origin", array()), array(), "array", true, true)) {
                        // line 491
                        echo "                            <em>Unknown.</em>
                        ";
                    } else {
                        // line 493
                        echo "                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["forms_by_hash"]) ? $context["forms_by_hash"] : null), $this->getAttribute($context["error"], "origin", array()), array(), "array"), "name", array()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 495
                    echo "                    </td>
                    <td>
                        ";
                    // line 497
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["error"], "trace", array()));
                    $context['_iterated'] = false;
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                        // line 498
                        echo "                            ";
                        if ( !$this->getAttribute($context["loop"], "first", array())) {
                            // line 499
                            echo "                                <span class=\"newline\">Caused by:</span>
                            ";
                        }
                        // line 501
                        echo "
                            ";
                        // line 502
                        if ($this->getAttribute($context["trace"], "root", array(), "any", true, true)) {
                            // line 503
                            echo "                                <strong class=\"newline\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "class", array()), "html", null, true);
                            echo "</strong>
                                <pre>";
                            // line 505
                            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "root", array()), "html", null, true);
                            // line 506
                            if ( !twig_test_empty($this->getAttribute($context["trace"], "path", array()))) {
                                // line 507
                                if ((twig_first($this->env, $this->getAttribute($context["trace"], "path", array())) != "[")) {
                                    echo ".";
                                }
                                // line 508
                                echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "path", array()), "html", null, true);
                            }
                            // line 509
                            echo " = ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "value", array()), "html", null, true);
                            // line 510
                            echo "</pre>
                            ";
                        } elseif ($this->getAttribute(                        // line 511
$context["trace"], "message", array(), "any", true, true)) {
                            // line 512
                            echo "                                <strong class=\"newline\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "class", array()), "html", null, true);
                            echo "</strong>
                                <pre>";
                            // line 513
                            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "message", array()), "html", null, true);
                            echo "</pre>
                            ";
                        } else {
                            // line 515
                            echo "                                <pre>";
                            echo twig_escape_filter($this->env, $context["trace"], "html", null, true);
                            echo "</pre>
                            ";
                        }
                        // line 517
                        echo "                        ";
                        $context['_iterated'] = true;
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    if (!$context['_iterated']) {
                        // line 518
                        echo "                            <em>Unknown.</em>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 520
                    echo "                    </td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 523
                echo "                </tbody>
            </table>
        </div>
        ";
            }
            // line 527
            echo "
        ";
            // line 528
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "default_data", array(), "any", true, true)) {
                // line 529
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 530
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
                echo "-default_data\" href=\"#\">
                Default Data <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 535
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
                echo "-default_data\">
            <table>
                <thead>
                    <tr>
                        <th width=\"180\">Property</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class=\"font-normal\" scope=\"row\">Model Format</th>
                        <td>
                            ";
                // line 547
                if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "default_data", array(), "any", false, true), "model", array(), "any", true, true)) {
                    // line 548
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "default_data", array()), "model", array()), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 550
                    echo "                                <em class=\"font-normal text-muted\">same as normalized format</em>
                            ";
                }
                // line 552
                echo "                        </td>
                    </tr>
                    <tr>
                        <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                        <td>";
                // line 556
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "default_data", array()), "norm", array()), "html", null, true);
                echo "</td>
                    </tr>
                    <tr>
                        <th class=\"font-normal\" scope=\"row\">View Format</th>
                        <td>
                            ";
                // line 561
                if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "default_data", array(), "any", false, true), "view", array(), "any", true, true)) {
                    // line 562
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "default_data", array()), "view", array()), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 564
                    echo "                                <em class=\"font-normal text-muted\">same as normalized format</em>
                            ";
                }
                // line 566
                echo "                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        ";
            }
            // line 572
            echo "
        ";
            // line 573
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array(), "any", true, true)) {
                // line 574
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 575
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
                echo "-submitted_data\" href=\"#\">
                Submitted Data <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 580
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
                echo "-submitted_data\">
        ";
                // line 581
                if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array(), "any", false, true), "norm", array(), "any", true, true)) {
                    // line 582
                    echo "            <table>
                <thead>
                    <tr>
                        <th width=\"180\">Property</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class=\"font-normal\" scope=\"row\">View Format</th>
                        <td>
                            ";
                    // line 593
                    if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array(), "any", false, true), "view", array(), "any", true, true)) {
                        // line 594
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array()), "view", array()), "html", null, true);
                        echo "
                            ";
                    } else {
                        // line 596
                        echo "                                <em class=\"font-normal text-muted\">same as normalized format</em>
                            ";
                    }
                    // line 598
                    echo "                        </td>
                    </tr>
                    <tr>
                        <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                        <td>";
                    // line 602
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array()), "norm", array()), "html", null, true);
                    echo "</td>
                    </tr>
                    <tr>
                        <th class=\"font-normal\" scope=\"row\">Model Format</th>
                        <td>
                            ";
                    // line 607
                    if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array(), "any", false, true), "model", array(), "any", true, true)) {
                        // line 608
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array()), "model", array()), "html", null, true);
                        echo "
                            ";
                    } else {
                        // line 610
                        echo "                                <em class=\"font-normal text-muted\">same as normalized format</em>
                            ";
                    }
                    // line 612
                    echo "                        </td>
                    </tr>
                </tbody>
            </table>
        ";
                } else {
                    // line 617
                    echo "            <div class=\"empty\">
                <p>This form was not submitted.</p>
            </div>
        ";
                }
                // line 621
                echo "        </div>
        ";
            }
            // line 623
            echo "
        ";
            // line 624
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "passed_options", array(), "any", true, true)) {
                // line 625
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 626
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
                echo "-passed_options\" href=\"#\">
                Passed Options <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 631
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
                echo "-passed_options\">
            ";
                // line 632
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "passed_options", array()))) {
                    // line 633
                    echo "            <table>
                <thead>
                    <tr>
                        <th width=\"180\">Option</th>
                        <th>Passed Value</th>
                        <th>Resolved Value</th>
                    </tr>
                </thead>
                <tbody>
                ";
                    // line 642
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "passed_options", array()));
                    foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                        // line 643
                        echo "                <tr>
                    <th>";
                        // line 644
                        echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                        echo "</th>
                    <td>";
                        // line 645
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "</td>
                    <td>
                        ";
                        // line 647
                        if (($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "resolved_options", array()), $context["option"], array(), "array") === $context["value"])) {
                            // line 648
                            echo "                            <em class=\"font-normal text-muted\">same as passed value</em>
                        ";
                        } else {
                            // line 650
                            echo "                            ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "resolved_options", array()), $context["option"], array(), "array"), "html", null, true);
                            echo "
                        ";
                        }
                        // line 652
                        echo "                    </td>
                </tr>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 655
                    echo "                </tbody>
            </table>
            ";
                } else {
                    // line 658
                    echo "                <div class=\"empty\">
                    <p>No options where passed when constructing this form.</p>
                </div>
            ";
                }
                // line 662
                echo "        </div>
        ";
            }
            // line 664
            echo "
        ";
            // line 665
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "resolved_options", array(), "any", true, true)) {
                // line 666
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 667
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
                echo "-resolved_options\" href=\"#\">
                Resolved Options <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 672
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
                echo "-resolved_options\" class=\"hidden\">
            <table>
                <thead>
                    <tr>
                        <th width=\"180\">Option</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                ";
                // line 681
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "resolved_options", array()));
                foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                    // line 682
                    echo "                <tr>
                    <th scope=\"row\">";
                    // line 683
                    echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                    echo "</th>
                    <td>";
                    // line 684
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 687
                echo "                </tbody>
            </table>
        </div>
        ";
            }
            // line 691
            echo "
        ";
            // line 692
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "view_vars", array(), "any", true, true)) {
                // line 693
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 694
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
                echo "-view_vars\" href=\"#\">
                View Variables <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 699
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
                echo "-view_vars\" class=\"hidden\">
            <table>
                <thead>
                    <tr>
                        <th width=\"180\">Variable</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                ";
                // line 708
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "view_vars", array()));
                foreach ($context['_seq'] as $context["variable"] => $context["value"]) {
                    // line 709
                    echo "                <tr>
                    <th scope=\"row\">";
                    // line 710
                    echo twig_escape_filter($this->env, $context["variable"], "html", null, true);
                    echo "</th>
                    <td>";
                    // line 711
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['variable'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 714
                echo "                </tbody>
            </table>
        </div>
        ";
            }
            // line 718
            echo "    </div>

    ";
            // line 720
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "children", array()));
            foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                // line 721
                echo "        ";
                echo $context["tree"]->getform_tree_details($context["childName"], $context["childData"], (isset($context["forms_by_hash"]) ? $context["forms_by_hash"] : null));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1231 => 721,  1227 => 720,  1223 => 718,  1217 => 714,  1208 => 711,  1204 => 710,  1201 => 709,  1197 => 708,  1185 => 699,  1177 => 694,  1174 => 693,  1172 => 692,  1169 => 691,  1163 => 687,  1154 => 684,  1150 => 683,  1147 => 682,  1143 => 681,  1131 => 672,  1123 => 667,  1120 => 666,  1118 => 665,  1115 => 664,  1111 => 662,  1105 => 658,  1100 => 655,  1092 => 652,  1086 => 650,  1082 => 648,  1080 => 647,  1075 => 645,  1071 => 644,  1068 => 643,  1064 => 642,  1053 => 633,  1051 => 632,  1047 => 631,  1039 => 626,  1036 => 625,  1034 => 624,  1031 => 623,  1027 => 621,  1021 => 617,  1014 => 612,  1010 => 610,  1004 => 608,  1002 => 607,  994 => 602,  988 => 598,  984 => 596,  978 => 594,  976 => 593,  963 => 582,  961 => 581,  957 => 580,  949 => 575,  946 => 574,  944 => 573,  941 => 572,  933 => 566,  929 => 564,  923 => 562,  921 => 561,  913 => 556,  907 => 552,  903 => 550,  897 => 548,  895 => 547,  880 => 535,  872 => 530,  869 => 529,  867 => 528,  864 => 527,  858 => 523,  850 => 520,  843 => 518,  830 => 517,  824 => 515,  819 => 513,  814 => 512,  812 => 511,  809 => 510,  806 => 509,  803 => 508,  799 => 507,  797 => 506,  795 => 505,  790 => 503,  788 => 502,  785 => 501,  781 => 499,  778 => 498,  760 => 497,  756 => 495,  750 => 493,  746 => 491,  744 => 490,  741 => 489,  739 => 488,  734 => 486,  731 => 485,  727 => 484,  715 => 475,  707 => 470,  703 => 468,  701 => 467,  697 => 465,  689 => 463,  687 => 462,  683 => 461,  673 => 459,  670 => 458,  656 => 457,  644 => 454,  640 => 452,  631 => 450,  627 => 449,  618 => 448,  616 => 447,  612 => 445,  606 => 443,  604 => 442,  601 => 441,  591 => 440,  588 => 439,  584 => 437,  578 => 435,  576 => 434,  572 => 433,  569 => 432,  566 => 431,  552 => 430,  330 => 210,  324 => 206,  320 => 204,  311 => 202,  307 => 201,  301 => 197,  292 => 195,  288 => 194,  284 => 192,  282 => 191,  278 => 189,  275 => 188,  126 => 43,  123 => 42,  118 => 39,  112 => 36,  109 => 35,  107 => 34,  102 => 32,  95 => 31,  92 => 30,  85 => 26,  82 => 25,  74 => 22,  67 => 18,  63 => 16,  61 => 15,  58 => 14,  52 => 11,  46 => 9,  43 => 8,  40 => 7,  37 => 6,  34 => 5,  30 => 1,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% from _self import form_tree_entry, form_tree_details %}*/
/* */
/* {% block toolbar %}*/
/*     {% if collector.data.nb_errors > 0 or collector.data.forms|length %}*/
/*         {% set status_color = collector.data.nb_errors ? 'red' : '' %}*/
/*         {% set icon %}*/
/*             {{ include('@WebProfiler/Icon/form.svg') }}*/
/*             <span class="sf-toolbar-value">*/
/*                 {{ collector.data.nb_errors ?: collector.data.forms|length }}*/
/*             </span>*/
/*         {% endset %}*/
/* */
/*         {% set text %}*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Number of forms</b>*/
/*                 <span class="sf-toolbar-status">{{ collector.data.forms|length }}</span>*/
/*             </div>*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Number of errors</b>*/
/*                 <span class="sf-toolbar-status sf-toolbar-status-{{ collector.data.nb_errors > 0 ? 'red' }}">{{ collector.data.nb_errors }}</span>*/
/*             </div>*/
/*         {% endset %}*/
/* */
/*         {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label label-status-{{ collector.data.nb_errors ? 'error' }} {{ collector.data.forms is empty ? 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/form.svg') }}</span>*/
/*         <strong>Forms</strong>*/
/*         {% if collector.data.nb_errors > 0 %}*/
/*             <span class="count">*/
/*                 <span>{{ collector.data.nb_errors }}</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block head %}*/
/*     {{ parent() }}*/
/* */
/*     <style>*/
/*         #tree-menu {*/
/*             float: left;*/
/*             padding-right: 10px;*/
/*             width: 230px;*/
/*         }*/
/*         #tree-menu ul {*/
/*             list-style: none;*/
/*             margin: 0;*/
/*             padding-left: 0;*/
/*         }*/
/*         #tree-menu li {*/
/*             margin: 0;*/
/*             padding: 0;*/
/*             width: 100%;*/
/*         }*/
/*         #tree-menu .empty {*/
/*             border: 0;*/
/*             mmargin: 0;*/
/*             padding: 0;*/
/*         }*/
/*         #tree-details-container {*/
/*             border-left: 1px solid #DDD;*/
/*             margin-left: 250px;*/
/*             padding-left: 20px;*/
/*         }*/
/*         .tree-details {*/
/*             padding-bottom: 40px;*/
/*         }*/
/*         .tree-details h3 {*/
/*             font-size: 18px;*/
/*             position: relative;*/
/*         }*/
/* */
/*         .toggle-icon {*/
/*             display: inline-block;*/
/*             background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAgBAMAAADpp+X/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDgwx4LcKwAAAABVQTFRFAAAA////////////////ZmZm////bvjBwAAAAAV0Uk5TABZwsuCVEUjgAAAAAWJLR0QF+G/pxwAAAE1JREFUGNNjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBmwgTQgQGWgA7h2uIFwK+CWwp1BpHvYEqDuATEYkBlY3IOmBq6dCPcAAIT5Eg2IksjQAAAAAElFTkSuQmCC") no-repeat top left #5eb5e0;*/
/*         }*/
/*         .closed .toggle-icon, .closed.toggle-icon {*/
/*             background-position: bottom left;*/
/*         }*/
/*         .toggle-icon.empty {*/
/*             background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABmJLR0QAZgBmAGYHukptAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhIf6CA40AAAAFRJREFUOMvtk7ENACEMA61vfx767MROWfO+AdGBHlNyTZrYUZRYDBII4NWE1pNdpFarfgLUbpDaBEgBYRiEVjsvDLa1l6O4Z3wkFWN+OfLKdpisOH/TlICzukmUJwAAAABJRU5ErkJggg==");*/
/*         }*/
/* */
/*         .tree .tree-inner {*/
/*             cursor: pointer;*/
/*             padding: 5px 7px 5px 22px;*/
/*             position: relative;*/
/* */
/*         }*/
/*         .tree .toggle-button {*/
/*             /* provide a bigger clickable area than just 10x10px *//* */
/*             width: 16px;*/
/*             height: 16px;*/
/*             /* vertically center the button *//* */
/*             position: absolute;*/
/*             top: 50%;*/
/*             margin-top: -8px;*/
/*             margin-left: -18px;*/
/*         }*/
/*         .tree .toggle-icon {*/
/*             width: 10px;*/
/*             height: 10px;*/
/*             /* position the icon in the center of the clickable area *//* */
/*             margin-left: 3px;*/
/*             margin-top: 3px;*/
/*             background-size: 10px 20px;*/
/*             background-color: #ccc;*/
/*         }*/
/*         .tree .toggle-icon.empty {*/
/*             width: 10px;*/
/*             height: 10px;*/
/*             position: absolute;*/
/*             top: 50%;*/
/*             margin-top: -5px;*/
/*             margin-left: -15px;*/
/*             background-size: 10px 10px;*/
/*         }*/
/*         .tree ul ul .tree-inner {*/
/*             padding-left: 37px;*/
/*         }*/
/*         .tree ul ul ul .tree-inner {*/
/*             padding-left: 52px;*/
/*         }*/
/*         .tree ul ul ul ul .tree-inner {*/
/*             padding-left: 67px;*/
/*         }*/
/*         .tree ul ul ul ul ul .tree-inner {*/
/*             padding-left: 82px;*/
/*         }*/
/*         .tree .tree-inner:hover {*/
/*             background: #dfdfdf;*/
/*         }*/
/*         .tree .tree-inner.active, .tree .tree-inner.active:hover {*/
/*             background: #E0E0E0;*/
/*             font-weight: bold;*/
/*         }*/
/*         .tree .tree-inner.active .toggle-icon, .tree .tree-inner:hover .toggle-icon, .tree .tree-inner.active:hover .toggle-icon {*/
/*             background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAgBAMAAADpp+X/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhEYXWn+sAAAABhQTFRFAAAA39/f39/f39/f39/fZmZm39/f////gc3YPwAAAAV0Uk5TAAtAc6ZeVyCYAAAAAWJLR0QF+G/pxwAAAE1JREFUGNNjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBmwgXIgQGWgA7h2uIFwK+CWwp1BpHvYC6DuATEYkBlY3IOmBq6dCPcAADqLE4MnBi/fAAAAAElFTkSuQmCC");*/
/*             background-color: #999;*/
/*         }*/
/*         .tree .tree-inner.active .toggle-icon.empty, .tree .tree-inner:hover .toggle-icon.empty, .tree .tree-inner.active:hover .toggle-icon.empty {*/
/*             background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQBAMAAADt3eJSAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhoucSey4gAAABVQTFRFAAAA39/f39/f39/f39/fZmZm39/fD5Dx2AAAAAV0Uk5TAAtAc6ZeVyCYAAAAAWJLR0QF+G/pxwAAADJJREFUCNdjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBnIA3DtcAPhVsAthTkDAFOfBKW9C1iqAAAAAElFTkSuQmCC");*/
/*         }*/
/*         .tree-details .toggle-icon {*/
/*             width: 16px;*/
/*             height: 16px;*/
/*             /* vertically center the button *//* */
/*             position: absolute;*/
/*             top: 50%;*/
/*             margin-top: -9px;*/
/*             margin-left: 6px;*/
/*         }*/
/*         .form-type {*/
/*             color: #999;*/
/*         }*/
/*         .badge-error {*/
/*             float: right;*/
/*             background: #B0413E;*/
/*             color: #FFF;*/
/*             padding: 1px 4px;*/
/*             font-size: 10px;*/
/*             font-weight: bold;*/
/*             vertical-align: middle;*/
/*         }*/
/*         .errors h3 {*/
/*             color: #B0413E;*/
/*         }*/
/*         .errors th {*/
/*             background: #B0413E;*/
/*             color: #FFF;*/
/*         }*/
/*         .errors .toggle-icon {*/
/*             background-color: #B0413E;*/
/*         }*/
/*         h3 a, h3 a:hover, h3 a:focus {*/
/*             color: inherit;*/
/*             text-decoration: inherit;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Forms</h2>*/
/* */
/*     {% if collector.data.forms|length %}*/
/*         <div id="tree-menu" class="tree">*/
/*             <ul>*/
/*             {% for formName, formData in collector.data.forms %}*/
/*                 {{ form_tree_entry(formName, formData, true) }}*/
/*             {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/* */
/*         <div id="tree-details-container">*/
/*             {% for formName, formData in collector.data.forms %}*/
/*                 {{ form_tree_details(formName, formData, collector.data.forms_by_hash) }}*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="empty">*/
/*             <p>No forms were submitted for this request.</p>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     <script>*/
/*     function Toggler(storage) {*/
/*         "use strict";*/
/* */
/*         var STORAGE_KEY = 'sf_toggle_data',*/
/* */
/*             states = {},*/
/* */
/*             isCollapsed = function (button) {*/
/*                 return Sfjs.hasClass(button, 'closed');*/
/*             },*/
/* */
/*             isExpanded = function (button) {*/
/*                 return !isCollapsed(button);*/
/*             },*/
/* */
/*             expand = function (button) {*/
/*                 var targetId = button.dataset.toggleTargetId,*/
/*                     target = document.getElementById(targetId);*/
/* */
/*                 if (!target) {*/
/*                     throw "Toggle target " + targetId + " does not exist";*/
/*                 }*/
/* */
/*                 if (isCollapsed(button)) {*/
/*                     Sfjs.removeClass(button, 'closed');*/
/*                     Sfjs.removeClass(target, 'hidden');*/
/* */
/*                     states[targetId] = 1;*/
/*                     storage.setItem(STORAGE_KEY, states);*/
/*                 }*/
/*             },*/
/* */
/*             collapse = function (button) {*/
/*                 var targetId = button.dataset.toggleTargetId,*/
/*                     target = document.getElementById(targetId);*/
/* */
/*                 if (!target) {*/
/*                     throw "Toggle target " + targetId + " does not exist";*/
/*                 }*/
/* */
/*                 if (isExpanded(button)) {*/
/*                     Sfjs.addClass(button, 'closed');*/
/*                     Sfjs.addClass(target, 'hidden');*/
/* */
/*                     states[targetId] = 0;*/
/*                     storage.setItem(STORAGE_KEY, states);*/
/*                 }*/
/*             },*/
/* */
/*             toggle = function (button) {*/
/*                 if (Sfjs.hasClass(button, 'closed')) {*/
/*                     expand(button);*/
/*                 } else {*/
/*                     collapse(button);*/
/*                 }*/
/*             },*/
/* */
/*             initButtons = function (buttons) {*/
/*                 states = storage.getItem(STORAGE_KEY, {});*/
/* */
/*                 // must be an object, not an array or anything else*/
/*                 // `typeof` returns "object" also for arrays, so the following*/
/*                 // check must be done*/
/*                 // see http://stackoverflow.com/questions/4775722/check-if-object-is-array*/
/*                 if ('[object Object]' !== Object.prototype.toString.call(states)) {*/
/*                     states = {};*/
/*                 }*/
/* */
/*                 for (var i = 0, l = buttons.length; i < l; ++i) {*/
/*                     var targetId = buttons[i].dataset.toggleTargetId,*/
/*                         target = document.getElementById(targetId);*/
/* */
/*                     if (!target) {*/
/*                         throw "Toggle target " + targetId + " does not exist";*/
/*                     }*/
/* */
/*                     // correct the initial state of the button*/
/*                     if (Sfjs.hasClass(target, 'hidden')) {*/
/*                         Sfjs.addClass(buttons[i], 'closed');*/
/*                     }*/
/* */
/*                     // attach listener for expanding/collapsing the target*/
/*                     clickHandler(buttons[i], toggle);*/
/* */
/*                     if (states.hasOwnProperty(targetId)) {*/
/*                         // open or collapse based on stored data*/
/*                         if (0 === states[targetId]) {*/
/*                             collapse(buttons[i]);*/
/*                         } else {*/
/*                             expand(buttons[i]);*/
/*                         }*/
/*                     }*/
/*                 }*/
/*             };*/
/* */
/*         return {*/
/*             initButtons: initButtons,*/
/* */
/*             toggle: toggle,*/
/* */
/*             isExpanded: isExpanded,*/
/* */
/*             isCollapsed: isCollapsed,*/
/* */
/*             expand: expand,*/
/* */
/*             collapse: collapse*/
/*         };*/
/*     }*/
/* */
/*     function JsonStorage(storage) {*/
/*         var setItem = function (key, data) {*/
/*                 storage.setItem(key, JSON.stringify(data));*/
/*             },*/
/* */
/*             getItem = function (key, defaultValue) {*/
/*                 var data = storage.getItem(key);*/
/* */
/*                 if (null !== data) {*/
/*                     try {*/
/*                         return JSON.parse(data);*/
/*                     } catch(e) {*/
/*                     }*/
/*                 }*/
/* */
/*                 return defaultValue;*/
/*             };*/
/* */
/*         return {*/
/*             setItem: setItem,*/
/* */
/*             getItem: getItem*/
/*         };*/
/*     }*/
/* */
/*     function TabView() {*/
/*         "use strict";*/
/* */
/*         var activeTab = null,*/
/* */
/*             activeTarget = null,*/
/* */
/*             select = function (tab) {*/
/*                 var targetId = tab.dataset.tabTargetId,*/
/*                     target = document.getElementById(targetId);*/
/* */
/*                 if (!target) {*/
/*                     throw "Tab target " + targetId + " does not exist";*/
/*                 }*/
/* */
/*                 if (activeTab) {*/
/*                     Sfjs.removeClass(activeTab, 'active');*/
/*                 }*/
/* */
/*                 if (activeTarget) {*/
/*                     Sfjs.addClass(activeTarget, 'hidden');*/
/*                 }*/
/* */
/*                 Sfjs.addClass(tab, 'active');*/
/*                 Sfjs.removeClass(target, 'hidden');*/
/* */
/*                 activeTab = tab;*/
/*                 activeTarget = target;*/
/*             },*/
/* */
/*             initTabs = function (tabs) {*/
/*                 for (var i = 0, l = tabs.length; i < l; ++i) {*/
/*                     var targetId = tabs[i].dataset.tabTargetId,*/
/*                         target = document.getElementById(targetId);*/
/* */
/*                     if (!target) {*/
/*                         throw "Tab target " + targetId + " does not exist";*/
/*                     }*/
/* */
/*                     clickHandler(tabs[i], select);*/
/* */
/*                     Sfjs.addClass(target, 'hidden');*/
/*                 }*/
/* */
/*                 if (tabs.length > 0) {*/
/*                     select(tabs[0]);*/
/*                 }*/
/*             };*/
/* */
/*         return {*/
/*             initTabs: initTabs,*/
/* */
/*             select: select*/
/*         };*/
/*     }*/
/* */
/*     var tabTarget = new TabView(),*/
/*         toggler = new Toggler(new JsonStorage(sessionStorage)),*/
/*         clickHandler = function (element, callback) {*/
/*             Sfjs.addEventListener(element, 'click', function (e) {*/
/*                 if (!e) {*/
/*                     e = window.event;*/
/*                 }*/
/* */
/*                 callback(this);*/
/* */
/*                 if (e.preventDefault) {*/
/*                     e.preventDefault();*/
/*                 } else {*/
/*                     e.returnValue = false;*/
/*                 }*/
/* */
/*                 e.stopPropagation();*/
/* */
/*                 return false;*/
/*             });*/
/*         };*/
/* */
/*     tabTarget.initTabs(document.querySelectorAll('.tree .tree-inner'));*/
/*     toggler.initButtons(document.querySelectorAll('a.toggle-button'));*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% macro form_tree_entry(name, data, expanded) %}*/
/*     {% import _self as tree %}*/
/*     <li>*/
/*         <div class="tree-inner" data-tab-target-id="{{ data.id }}-details">*/
/*             {% if data.children is not empty %}*/
/*                 <a class="toggle-button" data-toggle-target-id="{{ data.id }}-children" href="#"><span class="toggle-icon"></span></a>*/
/*             {% else %}*/
/*                 <div class="toggle-icon empty"></div>*/
/*             {% endif %}*/
/* */
/*             {{ name|default('(no name)') }} {% if data.type_class is defined and data.type is defined %}[<abbr title="{{ data.type_class }}">{{ data.type }}</abbr>]{% endif %}*/
/* */
/*             {% if data.errors is defined and data.errors|length > 0 %}*/
/*                 <div class="badge-error">{{ data.errors|length }}</div>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         {% if data.children is not empty %}*/
/*             <ul id="{{ data.id }}-children" {% if not expanded %}class="hidden"{% endif %}>*/
/*                 {% for childName, childData in data.children %}*/
/*                     {{ tree.form_tree_entry(childName, childData, false) }}*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         {% endif %}*/
/*     </li>*/
/* {% endmacro %}*/
/* */
/* {% macro form_tree_details(name, data, forms_by_hash) %}*/
/*     {% import _self as tree %}*/
/*     <div class="tree-details" {% if data.id is defined %}id="{{ data.id }}-details"{% endif %}>*/
/*         <h2>*/
/*             {{ name|default('(no name)') }}*/
/*             {% if data.type_class is defined and data.type is defined %}*/
/*             <span class="form-type">[<abbr title="{{ data.type_class }}">{{ data.type }}</abbr>]</span>*/
/*             {% endif %}*/
/*         </h2>*/
/* */
/*         {% if data.errors is defined and data.errors|length > 0 %}*/
/*         <div class="errors">*/
/*             <h3>*/
/*                 <a class="toggle-button" data-toggle-target-id="{{ data.id }}-errors" href="#">*/
/*                     Errors <span class="toggle-icon"></span>*/
/*                 </a>*/
/*             </h3>*/
/* */
/*             <table id="{{ data.id }}-errors">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Message</th>*/
/*                         <th>Origin</th>*/
/*                         <th>Cause</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for error in data.errors %}*/
/*                 <tr>*/
/*                     <td>{{ error.message }}</td>*/
/*                     <td>*/
/*                         {% if error.origin is empty %}*/
/*                             <em>This form.</em>*/
/*                         {% elseif forms_by_hash[error.origin] is not defined %}*/
/*                             <em>Unknown.</em>*/
/*                         {% else %}*/
/*                             {{ forms_by_hash[error.origin].name }}*/
/*                         {% endif %}*/
/*                     </td>*/
/*                     <td>*/
/*                         {% for trace in error.trace %}*/
/*                             {% if not loop.first %}*/
/*                                 <span class="newline">Caused by:</span>*/
/*                             {% endif %}*/
/* */
/*                             {% if trace.root is defined %}*/
/*                                 <strong class="newline">{{ trace.class }}</strong>*/
/*                                 <pre>*/
/*                                     {{- trace.root -}}*/
/*                                     {%- if trace.path is not empty -%}*/
/*                                         {%- if trace.path|first != '[' %}.{% endif -%}*/
/*                                         {{- trace.path -}}*/
/*                                     {%- endif %} = {{ trace.value -}}*/
/*                                 </pre>*/
/*                             {% elseif trace.message is defined %}*/
/*                                 <strong class="newline">{{ trace.class }}</strong>*/
/*                                 <pre>{{ trace.message }}</pre>*/
/*                             {% else %}*/
/*                                 <pre>{{ trace }}</pre>*/
/*                             {% endif %}*/
/*                         {% else %}*/
/*                             <em>Unknown.</em>*/
/*                         {% endfor %}*/
/*                     </td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         {% if data.default_data is defined %}*/
/*         <h3>*/
/*             <a class="toggle-button" data-toggle-target-id="{{ data.id }}-default_data" href="#">*/
/*                 Default Data <span class="toggle-icon"></span>*/
/*             </a>*/
/*         </h3>*/
/* */
/*         <div id="{{ data.id }}-default_data">*/
/*             <table>*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th width="180">Property</th>*/
/*                         <th>Value</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     <tr>*/
/*                         <th class="font-normal" scope="row">Model Format</th>*/
/*                         <td>*/
/*                             {% if data.default_data.model is defined %}*/
/*                                 {{ data.default_data.model }}*/
/*                             {% else %}*/
/*                                 <em class="font-normal text-muted">same as normalized format</em>*/
/*                             {% endif %}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th class="font-normal" scope="row">Normalized Format</th>*/
/*                         <td>{{ data.default_data.norm }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th class="font-normal" scope="row">View Format</th>*/
/*                         <td>*/
/*                             {% if data.default_data.view is defined %}*/
/*                                 {{ data.default_data.view }}*/
/*                             {% else %}*/
/*                                 <em class="font-normal text-muted">same as normalized format</em>*/
/*                             {% endif %}*/
/*                         </td>*/
/*                     </tr>*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         {% if data.submitted_data is defined %}*/
/*         <h3>*/
/*             <a class="toggle-button" data-toggle-target-id="{{ data.id }}-submitted_data" href="#">*/
/*                 Submitted Data <span class="toggle-icon"></span>*/
/*             </a>*/
/*         </h3>*/
/* */
/*         <div id="{{ data.id }}-submitted_data">*/
/*         {% if data.submitted_data.norm is defined %}*/
/*             <table>*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th width="180">Property</th>*/
/*                         <th>Value</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     <tr>*/
/*                         <th class="font-normal" scope="row">View Format</th>*/
/*                         <td>*/
/*                             {% if data.submitted_data.view is defined %}*/
/*                                 {{ data.submitted_data.view }}*/
/*                             {% else %}*/
/*                                 <em class="font-normal text-muted">same as normalized format</em>*/
/*                             {% endif %}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th class="font-normal" scope="row">Normalized Format</th>*/
/*                         <td>{{ data.submitted_data.norm }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th class="font-normal" scope="row">Model Format</th>*/
/*                         <td>*/
/*                             {% if data.submitted_data.model is defined %}*/
/*                                 {{ data.submitted_data.model }}*/
/*                             {% else %}*/
/*                                 <em class="font-normal text-muted">same as normalized format</em>*/
/*                             {% endif %}*/
/*                         </td>*/
/*                     </tr>*/
/*                 </tbody>*/
/*             </table>*/
/*         {% else %}*/
/*             <div class="empty">*/
/*                 <p>This form was not submitted.</p>*/
/*             </div>*/
/*         {% endif %}*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         {% if data.passed_options is defined %}*/
/*         <h3>*/
/*             <a class="toggle-button" data-toggle-target-id="{{ data.id }}-passed_options" href="#">*/
/*                 Passed Options <span class="toggle-icon"></span>*/
/*             </a>*/
/*         </h3>*/
/* */
/*         <div id="{{ data.id }}-passed_options">*/
/*             {% if data.passed_options|length %}*/
/*             <table>*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th width="180">Option</th>*/
/*                         <th>Passed Value</th>*/
/*                         <th>Resolved Value</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for option, value in data.passed_options %}*/
/*                 <tr>*/
/*                     <th>{{ option }}</th>*/
/*                     <td>{{ value }}</td>*/
/*                     <td>*/
/*                         {% if data.resolved_options[option] is same as(value) %}*/
/*                             <em class="font-normal text-muted">same as passed value</em>*/
/*                         {% else %}*/
/*                             {{ data.resolved_options[option] }}*/
/*                         {% endif %}*/
/*                     </td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*             {% else %}*/
/*                 <div class="empty">*/
/*                     <p>No options where passed when constructing this form.</p>*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         {% if data.resolved_options is defined %}*/
/*         <h3>*/
/*             <a class="toggle-button" data-toggle-target-id="{{ data.id }}-resolved_options" href="#">*/
/*                 Resolved Options <span class="toggle-icon"></span>*/
/*             </a>*/
/*         </h3>*/
/* */
/*         <div id="{{ data.id }}-resolved_options" class="hidden">*/
/*             <table>*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th width="180">Option</th>*/
/*                         <th>Value</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for option, value in data.resolved_options %}*/
/*                 <tr>*/
/*                     <th scope="row">{{ option }}</th>*/
/*                     <td>{{ value }}</td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         {% if data.view_vars is defined %}*/
/*         <h3>*/
/*             <a class="toggle-button" data-toggle-target-id="{{ data.id }}-view_vars" href="#">*/
/*                 View Variables <span class="toggle-icon"></span>*/
/*             </a>*/
/*         </h3>*/
/* */
/*         <div id="{{ data.id }}-view_vars" class="hidden">*/
/*             <table>*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th width="180">Variable</th>*/
/*                         <th>Value</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for variable, value in data.view_vars %}*/
/*                 <tr>*/
/*                     <th scope="row">{{ variable }}</th>*/
/*                     <td>{{ value }}</td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/*     {% for childName, childData in data.children %}*/
/*         {{ tree.form_tree_details(childName, childData, forms_by_hash) }}*/
/*     {% endfor %}*/
/* {% endmacro %}*/
/* */
