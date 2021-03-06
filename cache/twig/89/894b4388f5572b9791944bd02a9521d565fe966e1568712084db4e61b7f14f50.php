<?php

/* partials/blog_item.html.twig */
class __TwigTemplate_75b4477f3611f239fd01b10a24394ceffebc11c9d40a9aa79c3566eb24485552 extends Twig_Template
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
        echo "<article ";
        if ($this->getAttribute(($context["loop"] ?? null), "index", array())) {
            echo "id=\"post-";
            echo $this->getAttribute(($context["loop"] ?? null), "index", array());
            echo "\"";
        }
        echo " class=\"clearfix ";
        if ($this->getAttribute(($context["loop"] ?? null), "index", array())) {
            echo "post-";
            echo $this->getAttribute(($context["loop"] ?? null), "index", array());
        }
        echo " post type-post format-standard has-post-thumbnail ";
        if (($context["truncate"] ?? null)) {
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "post_class", array())) {
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "post_class", array());
            }
        }
        echo " hentry category-featured\">
  <div class=\"featured-image\">
    ";
        // line 3
        echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array())), "cropZoom", array(0 => 356, 1 => 356), "method"), "html", array());
        echo "
  </div>
  <header class=\"entry-header\">
    <h3 class=\"entry-title\">
      ";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array())) {
            // line 8
            echo "      <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "link", array());
            echo "\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "</a>
      ";
        } else {
            // line 10
            echo "      <a href=\"";
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">";
            echo $this->getAttribute(($context["page"] ?? null), "title", array());
            echo "</a>
      ";
        }
        // line 12
        echo "    </h3>
    ";
        // line 13
        if (($context["truncate"] ?? null)) {
            // line 14
            echo "    <div class=\"entry-date\">
      ";
            // line 15
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translateArray("MONTHS_OF_THE_YEAR", (twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "n") - 1));
            echo " ";
            echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "d, Y");
            echo "
    </div>
    ";
        }
        // line 18
        echo "
    ";
        // line 19
        if ( !($context["truncate"] ?? null)) {
            // line 20
            echo "    <div class=\"entry-meta\">
      <span class=\"posted-on\">Posted on
        <a href=\"";
            // line 22
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\" rel=\"bookmark\">
          <time class=\"entry-date published\" datetime=\"";
            // line 23
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translateArray("MONTHS_OF_THE_YEAR", (twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "n") - 1));
            echo " ";
            echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "d, Y");
            echo "\">
            ";
            // line 24
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translateArray("MONTHS_OF_THE_YEAR", (twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "n") - 1));
            echo " ";
            echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "d, Y");
            echo "
          </time>
        </a>
      </span>
      <span class=\"byline\"> by
        <span class=\"author vcard\">
          ";
            // line 30
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "author", array());
            echo "
        </span>
      </span>
    </div>
    ";
        }
        // line 35
        echo "  </header>

  <div class=\"entry-content\">
    ";
        // line 38
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "continue_link", array()) === false)) {
            // line 39
            echo "    <p>";
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "</p>
    ";
            // line 40
            if ( !($context["truncate"] ?? null)) {
                // line 41
                echo "    ";
                $context["show_prev_next"] = true;
                // line 42
                echo "    ";
            }
            // line 43
            echo "    ";
        } elseif ((($context["truncate"] ?? null) && (($context["readmore"] ?? null) === false))) {
            // line 44
            echo "    ";
            echo \Grav\Common\Utils::truncate($this->getAttribute(($context["page"] ?? null), "content", array()), 200, true);
            echo "
    ";
        } elseif ((        // line 45
($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "summary", array()) != $this->getAttribute(($context["page"] ?? null), "content", array())))) {
            // line 46
            echo "    <p>
      ";
            // line 47
            echo strip_tags($this->getAttribute(($context["page"] ?? null), "summary", array()));
            echo "
      <a href=\"";
            // line 48
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("HEADER_SUB_TEXT");
            echo "</a>
    </p>
    ";
        } elseif (        // line 50
($context["truncate"] ?? null)) {
            // line 51
            echo "    <p>
      ";
            // line 52
            echo strip_tags(\Grav\Common\Utils::truncate($this->getAttribute(($context["page"] ?? null), "content", array()), 550));
            echo "
      <a href=\"";
            // line 53
            echo $this->getAttribute(($context["page"] ?? null), "url", array());
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("HEADER_SUB_TEXT");
            echo "</a>
    </p>
    ";
        } else {
            // line 56
            echo "
    ";
            // line 57
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "progressbar", array())) {
                // line 58
                echo "    <hr class=\"rescue-spacing \" style=\"height: 10px\">
    <div class=\"rescue-column rescue-all\">
    ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "progressbar", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["bar"]) {
                    // line 61
                    echo "        ";
                    if (($this->getAttribute($context["bar"], "position", array()) == "top")) {
                        // line 62
                        echo "       <div class=\"rescue-progressbar rescue-clearfix  rescue-all\" data-percent=\"";
                        echo $this->getAttribute($context["bar"], "percent", array());
                        echo "%\">
          <div class=\"rescue-progressbar-title\" style=\"background: ";
                        // line 63
                        echo $this->getAttribute($context["bar"], "background", array());
                        echo ";\"><span>";
                        echo $this->getAttribute($context["bar"], "title", array());
                        echo "</span></div>
          <div class=\"rescue-progressbar-bar\" style=\"background: ";
                        // line 64
                        echo $this->getAttribute($context["bar"], "background", array());
                        echo ";\"></div>
          <div class=\"rescue-progress-bar-percent\">";
                        // line 65
                        echo $this->getAttribute($context["bar"], "percent", array());
                        echo "%</div>
       </div>
       ";
                    }
                    // line 68
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bar'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "    </div>
    <hr class=\"rescue-spacing \" style=\"height: 10px\">
    ";
            }
            // line 72
            echo "
    ";
            // line 73
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "toggles", array())) {
                // line 74
                echo "    <hr class=\"rescue-spacing \" style=\"height: 30px\">
      ";
                // line 75
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "toggles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["toggle"]) {
                    // line 76
                    echo "        ";
                    if (($this->getAttribute($context["toggle"], "position", array()) == "top")) {
                        // line 77
                        echo "          <div class=\"rescue-toggle  rescue-all\">
            <h3 class=\"rescue-toggle-trigger\">";
                        // line 78
                        echo $this->getAttribute($context["toggle"], "title", array());
                        echo "</h3>
            <div class=\"rescue-toggle-container\">";
                        // line 79
                        echo $this->getAttribute($context["toggle"], "description", array());
                        echo "</div>
          </div>
        ";
                    }
                    // line 82
                    echo "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['toggle'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                echo "    <hr class=\"rescue-spacing \" style=\"height: 30px\">
    ";
            }
            // line 85
            echo "    <p>";
            echo $this->getAttribute(($context["page"] ?? null), "content", array());
            echo "</p>
    <div class=\"entry-content\">

      ";
            // line 88
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "progressbar", array())) {
                // line 89
                echo "      <hr class=\"rescue-spacing \" style=\"height: 10px\">
      <div class=\"rescue-column rescue-all\">
      ";
                // line 91
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "progressbar", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["bar"]) {
                    // line 92
                    echo "          ";
                    if (($this->getAttribute($context["bar"], "position", array()) == "bottom")) {
                        // line 93
                        echo "         <div class=\"rescue-progressbar rescue-clearfix  rescue-all\" data-percent=\"";
                        echo $this->getAttribute($context["bar"], "percent", array());
                        echo "%\">
            <div class=\"rescue-progressbar-title\" style=\"background: ";
                        // line 94
                        echo $this->getAttribute($context["bar"], "background", array());
                        echo ";\"><span>";
                        echo $this->getAttribute($context["bar"], "title", array());
                        echo "</span></div>
            <div class=\"rescue-progressbar-bar\" style=\"background: ";
                        // line 95
                        echo $this->getAttribute($context["bar"], "background", array());
                        echo ";\"></div>
            <div class=\"rescue-progress-bar-percent\">";
                        // line 96
                        echo $this->getAttribute($context["bar"], "percent", array());
                        echo "%</div>
         </div>
         ";
                    }
                    // line 99
                    echo "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bar'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                echo "      </div>
      <hr class=\"rescue-spacing \" style=\"height: 10px\">
      ";
            }
            // line 103
            echo "
      ";
            // line 104
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "toggles", array())) {
                // line 105
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "toggles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["toggle"]) {
                    // line 106
                    echo "          ";
                    if (($this->getAttribute($context["toggle"], "position", array()) == "bottom")) {
                        // line 107
                        echo "            <div class=\"rescue-toggle  rescue-all\">
              <h3 class=\"rescue-toggle-trigger\">";
                        // line 108
                        echo $this->getAttribute($context["toggle"], "title", array());
                        echo "</h3>
              <div class=\"rescue-toggle-container\">";
                        // line 109
                        echo $this->getAttribute($context["toggle"], "description", array());
                        echo "</div>
            </div>
          ";
                    }
                    // line 112
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['toggle'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "      <hr class=\"rescue-spacing \" style=\"height: 30px\">
      ";
            }
            // line 115
            echo "    ";
            $context["show_prev_next"] = true;
            // line 116
            echo "    ";
        }
        // line 117
        echo "

    ";
        // line 119
        if ( !($context["truncate"] ?? null)) {
            // line 120
            echo "      <div class=\"sharedaddy sd-sharing-enabled\">
        <div class=\"robots-nocontent sd-block sd-social sd-social-icon-text sd-sharing\">
          <h3 class=\"sd-title\">";
            // line 122
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("SHARE");
            echo "</h3>
          <div class=\"sd-content\">
            <ul>
              <li class=\"share-facebook\">
                <a rel=\"nofollow\" data-shared=\"sharing-facebook-368\" class=\"share-facebook sd-button share-icon\" href=\"https://www.facebook.com/sharer/sharer.php?u=";
            // line 126
            echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
            echo "\" target=\"_blank\" title=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
            echo "\"><span>Facebook</span></a>
              </li>
              <li class=\"share-twitter\">
                <a rel=\"nofollow\" data-shared=\"sharing-twitter-368\" class=\"share-twitter sd-button share-icon\" href=\"http://twitter.com/home?status=";
            // line 129
            echo twig_replace_filter($this->getAttribute(($context["page"] ?? null), "title", array()), array(" " => "%20"));
            echo "-";
            echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
            echo "\" target=\"_blank\" title=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
            echo "\"><span>Twitter</span></a>
              </li>
              <li class=\"share-google-plus-1\">
                <a rel=\"nofollow\" data-shared=\"sharing-google-368\" class=\"share-google-plus-1 sd-button share-icon\" href=\"https://plus.google.com/share?url=";
            // line 132
            echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
            echo "\" target=\"_blank\" title=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
            echo "\"><span>Google</span></a>
              </li>
              <li class=\"share-pinterest\">
                <a rel=\"nofollow\" data-shared=\"sharing-pinterest-368\" class=\"share-pinterest sd-button share-icon\" href=\"https://www.pinterest.com/pin/create/button/?url=";
            // line 135
            echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true), "method");
            echo "\" target=\"_blank\" title=\"";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
            echo "\"><span>Pinterest</span></a>
              </li>
              <li class=\"share-end\"></li>
            </ul>
          </div>
        </div>
      </div>
      <script type=\"text/javascript\">var windowOpen;jQuery(document).on('ready post-load',function(){jQuery('a.share-facebook').on('click',function(){if('undefined'!==typeof windowOpen){windowOpen.close();}
      windowOpen=window.open(jQuery(this).attr('href'),'wpcomfacebook','menubar=1,resizable=1,width=600,height=400');return false;});});</script>
      <script type=\"text/javascript\">var windowOpen;jQuery(document).on('ready post-load',function(){jQuery('a.share-twitter').on('click',function(){if('undefined'!==typeof windowOpen){windowOpen.close();}
      windowOpen=window.open(jQuery(this).attr('href'),'wpcomtwitter','menubar=1,resizable=1,width=600,height=350');return false;});});</script>
      <script type=\"text/javascript\">var windowOpen;jQuery(document).on('ready post-load',function(){jQuery('a.share-google-plus-1').on('click',function(){if('undefined'!==typeof windowOpen){windowOpen.close();}
      windowOpen=window.open(jQuery(this).attr('href'),'wpcomgoogle-plus-1','menubar=1,resizable=1,width=480,height=550');return false;});});</script>
      ";
        }
        // line 149
        echo "
      ";
        // line 150
        if ( !($context["truncate"] ?? null)) {
            // line 151
            echo "    <div id=\"jp-relatedposts\" class=\"jp-relatedposts\" style=\"display: block;\">
      <h3 class=\"jp-relatedposts-headline\"><em>";
            // line 152
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("RELATED_POSTS");
            echo "</em></h3>
      <div class=\"jp-relatedposts-items jp-relatedposts-items-visual\">
        ";
            // line 154
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/blog_item.html.twig", 154)->display($context);
            // line 155
            echo "      </div>
    </div>
    <hr/>
    ";
        }
        // line 159
        echo "  </div>

  <footer class=\"entry-footer clearfix\">
    <span class=\"left\">
      <a href=\"";
        // line 163
        echo $this->getAttribute(($context["page"] ?? null), "url", array());
        echo "#comments\"><i class=\"fa fa-comment\"></i></a>
      <a href=\"";
        // line 164
        echo $this->getAttribute(($context["page"] ?? null), "url", array());
        echo "\"><i class=\"fa fa-link\"></i></a>
    </span>
    <span class=\"right\">
      ";
        // line 167
        if ( !($context["truncate"] ?? null)) {
            // line 168
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array())) {
                // line 169
                echo "        <span class=\"tags-links\">
          ";
                // line 170
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 171
                    echo "            <a href=\"";
                    echo ($context["base_url"] ?? null);
                    echo "/tag";
                    echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array());
                    echo $context["tag"];
                    echo "\">";
                    echo twig_capitalize_string_filter($this->env, $context["tag"]);
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        echo ",";
                    }
                    echo "</a>
          ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 173
                echo "        </span>
        ";
            }
            // line 175
            echo "      ";
        }
        // line 176
        echo "    </span>
  </footer>
</article>

";
        // line 180
        if (($context["show_prev_next"] ?? null)) {
            // line 181
            echo "<nav class=\"navigation post-navigation clearfix\" role=\"navigation\">
  <h1 class=\"screen-reader-text\">Post navigation</h1>
  <div class=\"nav-links clearfix\">
    <div class=\"nav-previous\"><a href=\"";
            // line 184
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", array()), "url", array());
            echo "\" rel=\"prev\"><span class=\"meta-nav\">←</span>&nbsp;";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "prevSibling", array()), "header", array()), "title", array());
            echo "</a></div>
    <div class=\"nav-next\"><a href=\"";
            // line 185
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", array()), "url", array());
            echo "\" rel=\"next\">";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "nextSibling", array()), "header", array()), "title", array());
            echo "&nbsp;<span class=\"meta-nav\">→</span></a></div>
  </div>
</nav>
";
        }
        // line 189
        echo "
";
        // line 190
        if ( !($context["truncate"] ?? null)) {
            // line 191
            echo "  ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "jscomments", array()), "enabled", array()) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "jscomments", array()), "provider", array()))) {
                // line 192
                echo "  <div class=\"comments-area-wrapper\">
    <div class=\"comments-area\">
    <h2 class=\"comments-title\">Comments:</h2>
      ";
                // line 195
                echo call_user_func_array($this->env->getFunction('jscomments')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "jscomments", array()), "provider", array())));
                echo "
    </div>
  </div>
  ";
            }
            // line 199
            echo "
  ";
            // line 200
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "comments", array()), "enabled", array())) {
                // line 201
                echo "  <div class=\"comments-area-wrapper\" id=\"comments\">
    <div class=\"comments-area\">
      <h2 class=\"comments-title\">";
                // line 203
                echo twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "comments", array()));
                echo " Comments:</h2>
      ";
                // line 204
                $this->loadTemplate("partials/comments.html.twig", "partials/blog_item.html.twig", 204)->display(array_merge($context, array("page" => ($context["page"] ?? null))));
                // line 205
                echo "    </div>
  </div>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "partials/blog_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  579 => 205,  577 => 204,  573 => 203,  569 => 201,  567 => 200,  564 => 199,  557 => 195,  552 => 192,  549 => 191,  547 => 190,  544 => 189,  535 => 185,  529 => 184,  524 => 181,  522 => 180,  516 => 176,  513 => 175,  509 => 173,  484 => 171,  467 => 170,  464 => 169,  461 => 168,  459 => 167,  453 => 164,  449 => 163,  443 => 159,  437 => 155,  435 => 154,  430 => 152,  427 => 151,  425 => 150,  422 => 149,  403 => 135,  395 => 132,  385 => 129,  377 => 126,  370 => 122,  366 => 120,  364 => 119,  360 => 117,  357 => 116,  354 => 115,  350 => 113,  344 => 112,  338 => 109,  334 => 108,  331 => 107,  328 => 106,  323 => 105,  321 => 104,  318 => 103,  313 => 100,  307 => 99,  301 => 96,  297 => 95,  291 => 94,  286 => 93,  283 => 92,  279 => 91,  275 => 89,  273 => 88,  266 => 85,  262 => 83,  256 => 82,  250 => 79,  246 => 78,  243 => 77,  240 => 76,  236 => 75,  233 => 74,  231 => 73,  228 => 72,  223 => 69,  217 => 68,  211 => 65,  207 => 64,  201 => 63,  196 => 62,  193 => 61,  189 => 60,  185 => 58,  183 => 57,  180 => 56,  172 => 53,  168 => 52,  165 => 51,  163 => 50,  156 => 48,  152 => 47,  149 => 46,  147 => 45,  142 => 44,  139 => 43,  136 => 42,  133 => 41,  131 => 40,  126 => 39,  124 => 38,  119 => 35,  111 => 30,  100 => 24,  94 => 23,  90 => 22,  86 => 20,  84 => 19,  81 => 18,  73 => 15,  70 => 14,  68 => 13,  65 => 12,  57 => 10,  49 => 8,  47 => 7,  40 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<article {% if loop.index %}id=\"post-{{ loop.index }}\"{% endif %} class=\"clearfix {% if loop.index %}post-{{ loop.index }}{% endif %} post type-post format-standard has-post-thumbnail {% if truncate %}{% if page.header.post_class %}{{ page.header.post_class }}{% endif %}{% endif %} hentry category-featured\">
  <div class=\"featured-image\">
    {{ page.media.images|first.cropZoom(356,356).html }}
  </div>
  <header class=\"entry-header\">
    <h3 class=\"entry-title\">
      {% if page.header.link %}
      <a href=\"{{ page.header.link }}\">{{ page.title }}</a>
      {% else %}
      <a href=\"{{ page.url }}\">{{ page.title }}</a>
      {% endif %}
    </h3>
    {% if truncate %}
    <div class=\"entry-date\">
      {{ 'MONTHS_OF_THE_YEAR'|ta(page.date|date('n') - 1) }} {{ page.date|date('d, Y') }}
    </div>
    {% endif %}

    {% if not truncate %}
    <div class=\"entry-meta\">
      <span class=\"posted-on\">Posted on
        <a href=\"{{ page.url }}\" rel=\"bookmark\">
          <time class=\"entry-date published\" datetime=\"{{ 'MONTHS_OF_THE_YEAR'|ta(page.date|date('n') - 1) }} {{ page.date|date('d, Y') }}\">
            {{ 'MONTHS_OF_THE_YEAR'|ta(page.date|date('n') - 1) }} {{ page.date|date('d, Y') }}
          </time>
        </a>
      </span>
      <span class=\"byline\"> by
        <span class=\"author vcard\">
          {{ page.header.author }}
        </span>
      </span>
    </div>
    {% endif %}
  </header>

  <div class=\"entry-content\">
    {% if page.header.continue_link is sameas(false) %}
    <p>{{ page.content }}</p>
    {% if not truncate %}
    {% set show_prev_next = true %}
    {% endif %}
    {% elseif truncate and readmore is sameas(false) %}
    {{ page.content|truncate(200, true) }}
    {% elseif truncate and page.summary != page.content %}
    <p>
      {{ page.summary|striptags }}
      <a href=\"{{ page.url }}\">{{ 'HEADER_SUB_TEXT'|t }}</a>
    </p>
    {% elseif truncate %}
    <p>
      {{ page.content|truncate(550)|striptags }}
      <a href=\"{{ page.url }}\">{{ 'HEADER_SUB_TEXT'|t }}</a>
    </p>
    {% else %}

    {% if page.header.progressbar %}
    <hr class=\"rescue-spacing \" style=\"height: 10px\">
    <div class=\"rescue-column rescue-all\">
    {% for bar in page.header.progressbar %}
        {% if bar.position == 'top' %}
       <div class=\"rescue-progressbar rescue-clearfix  rescue-all\" data-percent=\"{{ bar.percent }}%\">
          <div class=\"rescue-progressbar-title\" style=\"background: {{ bar.background }};\"><span>{{ bar.title }}</span></div>
          <div class=\"rescue-progressbar-bar\" style=\"background: {{ bar.background }};\"></div>
          <div class=\"rescue-progress-bar-percent\">{{ bar.percent }}%</div>
       </div>
       {% endif %}
    {% endfor %}
    </div>
    <hr class=\"rescue-spacing \" style=\"height: 10px\">
    {% endif %}

    {% if page.header.toggles %}
    <hr class=\"rescue-spacing \" style=\"height: 30px\">
      {% for toggle in page.header.toggles %}
        {% if toggle.position == 'top' %}
          <div class=\"rescue-toggle  rescue-all\">
            <h3 class=\"rescue-toggle-trigger\">{{ toggle.title }}</h3>
            <div class=\"rescue-toggle-container\">{{ toggle.description }}</div>
          </div>
        {% endif %}
      {% endfor %}
    <hr class=\"rescue-spacing \" style=\"height: 30px\">
    {% endif %}
    <p>{{ page.content }}</p>
    <div class=\"entry-content\">

      {% if page.header.progressbar %}
      <hr class=\"rescue-spacing \" style=\"height: 10px\">
      <div class=\"rescue-column rescue-all\">
      {% for bar in page.header.progressbar %}
          {% if bar.position == 'bottom' %}
         <div class=\"rescue-progressbar rescue-clearfix  rescue-all\" data-percent=\"{{ bar.percent }}%\">
            <div class=\"rescue-progressbar-title\" style=\"background: {{ bar.background }};\"><span>{{ bar.title }}</span></div>
            <div class=\"rescue-progressbar-bar\" style=\"background: {{ bar.background }};\"></div>
            <div class=\"rescue-progress-bar-percent\">{{ bar.percent }}%</div>
         </div>
         {% endif %}
      {% endfor %}
      </div>
      <hr class=\"rescue-spacing \" style=\"height: 10px\">
      {% endif %}

      {% if page.header.toggles %}
        {% for toggle in page.header.toggles %}
          {% if toggle.position == 'bottom' %}
            <div class=\"rescue-toggle  rescue-all\">
              <h3 class=\"rescue-toggle-trigger\">{{ toggle.title }}</h3>
              <div class=\"rescue-toggle-container\">{{ toggle.description }}</div>
            </div>
          {% endif %}
        {% endfor %}
      <hr class=\"rescue-spacing \" style=\"height: 30px\">
      {% endif %}
    {% set show_prev_next = true %}
    {% endif %}


    {% if not truncate %}
      <div class=\"sharedaddy sd-sharing-enabled\">
        <div class=\"robots-nocontent sd-block sd-social sd-social-icon-text sd-sharing\">
          <h3 class=\"sd-title\">{{ 'SHARE'|t }}</h3>
          <div class=\"sd-content\">
            <ul>
              <li class=\"share-facebook\">
                <a rel=\"nofollow\" data-shared=\"sharing-facebook-368\" class=\"share-facebook sd-button share-icon\" href=\"https://www.facebook.com/sharer/sharer.php?u={{ page.url(true) }}\" target=\"_blank\" title=\"{{ page.header.title }}\"><span>Facebook</span></a>
              </li>
              <li class=\"share-twitter\">
                <a rel=\"nofollow\" data-shared=\"sharing-twitter-368\" class=\"share-twitter sd-button share-icon\" href=\"http://twitter.com/home?status={{ page.title|replace({' ': \"%20\"}) }}-{{ page.url(true) }}\" target=\"_blank\" title=\"{{ page.header.title }}\"><span>Twitter</span></a>
              </li>
              <li class=\"share-google-plus-1\">
                <a rel=\"nofollow\" data-shared=\"sharing-google-368\" class=\"share-google-plus-1 sd-button share-icon\" href=\"https://plus.google.com/share?url={{ page.url(true) }}\" target=\"_blank\" title=\"{{ page.header.title }}\"><span>Google</span></a>
              </li>
              <li class=\"share-pinterest\">
                <a rel=\"nofollow\" data-shared=\"sharing-pinterest-368\" class=\"share-pinterest sd-button share-icon\" href=\"https://www.pinterest.com/pin/create/button/?url={{ page.url(true) }}\" target=\"_blank\" title=\"{{ page.header.title }}\"><span>Pinterest</span></a>
              </li>
              <li class=\"share-end\"></li>
            </ul>
          </div>
        </div>
      </div>
      <script type=\"text/javascript\">var windowOpen;jQuery(document).on('ready post-load',function(){jQuery('a.share-facebook').on('click',function(){if('undefined'!==typeof windowOpen){windowOpen.close();}
      windowOpen=window.open(jQuery(this).attr('href'),'wpcomfacebook','menubar=1,resizable=1,width=600,height=400');return false;});});</script>
      <script type=\"text/javascript\">var windowOpen;jQuery(document).on('ready post-load',function(){jQuery('a.share-twitter').on('click',function(){if('undefined'!==typeof windowOpen){windowOpen.close();}
      windowOpen=window.open(jQuery(this).attr('href'),'wpcomtwitter','menubar=1,resizable=1,width=600,height=350');return false;});});</script>
      <script type=\"text/javascript\">var windowOpen;jQuery(document).on('ready post-load',function(){jQuery('a.share-google-plus-1').on('click',function(){if('undefined'!==typeof windowOpen){windowOpen.close();}
      windowOpen=window.open(jQuery(this).attr('href'),'wpcomgoogle-plus-1','menubar=1,resizable=1,width=480,height=550');return false;});});</script>
      {% endif %}

      {% if not truncate %}
    <div id=\"jp-relatedposts\" class=\"jp-relatedposts\" style=\"display: block;\">
      <h3 class=\"jp-relatedposts-headline\"><em>{{ 'RELATED_POSTS'|t }}</em></h3>
      <div class=\"jp-relatedposts-items jp-relatedposts-items-visual\">
        {% include 'partials/relatedpages.html.twig' %}
      </div>
    </div>
    <hr/>
    {% endif %}
  </div>

  <footer class=\"entry-footer clearfix\">
    <span class=\"left\">
      <a href=\"{{ page.url }}#comments\"><i class=\"fa fa-comment\"></i></a>
      <a href=\"{{ page.url }}\"><i class=\"fa fa-link\"></i></a>
    </span>
    <span class=\"right\">
      {% if not truncate %}
        {% if page.taxonomy.tag %}
        <span class=\"tags-links\">
          {% for tag in page.taxonomy.tag %}
            <a href=\"{{ base_url }}/tag{{ config.system.param_sep }}{{ tag }}\">{{ tag|capitalize }}{% if not loop.last %},{% endif %}</a>
          {% endfor %}
        </span>
        {% endif %}
      {% endif %}
    </span>
  </footer>
</article>

{% if show_prev_next %}
<nav class=\"navigation post-navigation clearfix\" role=\"navigation\">
  <h1 class=\"screen-reader-text\">Post navigation</h1>
  <div class=\"nav-links clearfix\">
    <div class=\"nav-previous\"><a href=\"{{ page.prevSibling.url }}\" rel=\"prev\"><span class=\"meta-nav\">←</span>&nbsp;{{ page.prevSibling.header.title }}</a></div>
    <div class=\"nav-next\"><a href=\"{{ page.nextSibling.url }}\" rel=\"next\">{{ page.nextSibling.header.title }}&nbsp;<span class=\"meta-nav\">→</span></a></div>
  </div>
</nav>
{% endif %}

{% if not truncate %}
  {% if config.plugins.jscomments.enabled and config.plugins.jscomments.provider %}
  <div class=\"comments-area-wrapper\">
    <div class=\"comments-area\">
    <h2 class=\"comments-title\">Comments:</h2>
      {{ jscomments(config.plugins.jscomments.provider) }}
    </div>
  </div>
  {% endif %}

  {% if config.plugins.comments.enabled %}
  <div class=\"comments-area-wrapper\" id=\"comments\">
    <div class=\"comments-area\">
      <h2 class=\"comments-title\">{{ grav.twig.comments|length }} Comments:</h2>
      {% include 'partials/comments.html.twig' with {'page': page} %}
    </div>
  </div>
  {% endif %}
{% endif %}
", "partials/blog_item.html.twig", "/Volumes/Dados/workspace/partner-wod.com/user/themes/gateway/templates/partials/blog_item.html.twig");
    }
}
