<?php

/* ucp_groups_manage.html */
class __TwigTemplate_be0185c755d33b2910b3f9c6b6fabffb765bd1abd4967d4838c49004d2e0b7f8 extends Twig_Template
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
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_groups_manage.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2";
        // line 3
        if ((isset($context["GROUP_COLOR"]) ? $context["GROUP_COLOR"] : null)) {
            echo " style=\"color:#";
            echo (isset($context["GROUP_COLOR"]) ? $context["GROUP_COLOR"] : null);
            echo ";\"";
        }
        echo ">";
        echo $this->env->getExtension('phpbb')->lang("USERGROUPS");
        if ((isset($context["GROUP_NAME"]) ? $context["GROUP_NAME"] : null)) {
            echo " :: ";
            echo (isset($context["GROUP_NAME"]) ? $context["GROUP_NAME"] : null);
        }
        echo "</h2>

<form id=\"ucp\" method=\"post\" action=\"";
        // line 5
        echo (isset($context["S_UCP_ACTION"]) ? $context["S_UCP_ACTION"] : null);
        echo "\"";
        echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
        echo ">

<div class=\"panel\">
\t<div class=\"inner\">

\t";
        // line 10
        if ((isset($context["S_ERROR"]) ? $context["S_ERROR"] : null)) {
            // line 11
            echo "\t<fieldset>
\t\t<p class=\"error\">";
            // line 12
            echo (isset($context["ERROR_MSG"]) ? $context["ERROR_MSG"] : null);
            echo "</p>
\t</fieldset>
\t";
        }
        // line 15
        echo "
\t<p>";
        // line 16
        echo $this->env->getExtension('phpbb')->lang("GROUPS_EXPLAIN");
        echo "</p>

\t";
        // line 18
        if ((isset($context["S_EDIT"]) ? $context["S_EDIT"] : null)) {
            // line 19
            echo "\t\t<h3>";
            echo $this->env->getExtension('phpbb')->lang("GROUP_DETAILS");
            echo "</h3>

\t\t<fieldset>
\t\t<dl>
\t\t\t<dt><label for=\"group_name\">";
            // line 23
            echo $this->env->getExtension('phpbb')->lang("GROUP_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd>";
            // line 24
            if ((isset($context["S_SPECIAL_GROUP"]) ? $context["S_SPECIAL_GROUP"] : null)) {
                echo "<strong";
                if ((isset($context["GROUP_COLOUR"]) ? $context["GROUP_COLOUR"] : null)) {
                    echo " style=\"color: #";
                    echo (isset($context["GROUP_COLOUR"]) ? $context["GROUP_COLOUR"] : null);
                    echo ";\"";
                }
                echo ">";
                echo (isset($context["GROUP_NAME"]) ? $context["GROUP_NAME"] : null);
                echo "</strong> <input name=\"group_name\" type=\"hidden\" value=\"";
                echo (isset($context["GROUP_INTERNAL_NAME"]) ? $context["GROUP_INTERNAL_NAME"] : null);
                echo "\" />
\t\t\t\t";
            } else {
                // line 25
                echo "<input name=\"group_name\" type=\"text\" id=\"group_name\" value=\"";
                echo (isset($context["GROUP_INTERNAL_NAME"]) ? $context["GROUP_INTERNAL_NAME"] : null);
                echo "\" class=\"inputbox\" />";
            }
            echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"group_desc\">";
            // line 28
            echo $this->env->getExtension('phpbb')->lang("GROUP_DESC");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><textarea id=\"group_desc\" name=\"group_desc\" rows=\"5\" cols=\"45\" class=\"inputbox\">";
            // line 29
            echo (isset($context["GROUP_DESC"]) ? $context["GROUP_DESC"] : null);
            echo "</textarea></dd>
\t\t\t<dd><label for=\"desc_parse_bbcode\"><input type=\"checkbox\" class=\"radio\" name=\"desc_parse_bbcode\" id=\"desc_parse_bbcode\"";
            // line 30
            if ((isset($context["S_DESC_BBCODE_CHECKED"]) ? $context["S_DESC_BBCODE_CHECKED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("PARSE_BBCODE");
            echo "</label>&nbsp;<label for=\"desc_parse_smilies\"><input type=\"checkbox\" class=\"radio\" name=\"desc_parse_smilies\" id=\"desc_parse_smilies\"";
            if ((isset($context["S_DESC_SMILIES_CHECKED"]) ? $context["S_DESC_SMILIES_CHECKED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("PARSE_SMILIES");
            echo "</label>&nbsp;<label for=\"desc_parse_urls\"><input type=\"checkbox\" class=\"radio\" name=\"desc_parse_urls\" id=\"desc_parse_urls\"";
            if ((isset($context["S_DESC_URLS_CHECKED"]) ? $context["S_DESC_URLS_CHECKED"] : null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb')->lang("PARSE_URLS");
            echo "</label></dd>
\t\t</dl>
\t\t";
            // line 32
            if ( !(isset($context["S_SPECIAL_GROUP"]) ? $context["S_SPECIAL_GROUP"] : null)) {
                // line 33
                echo "\t\t<dl>
\t\t\t<dt><label for=\"group_type1\">";
                // line 34
                echo $this->env->getExtension('phpbb')->lang("GROUP_TYPE");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb')->lang("GROUP_TYPE_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<label for=\"group_type1\"><input type=\"radio\" class=\"radio\" name=\"group_type\" id=\"group_type1\" value=\"";
                // line 36
                echo (isset($context["GROUP_TYPE_FREE"]) ? $context["GROUP_TYPE_FREE"] : null);
                echo "\"";
                echo (isset($context["GROUP_FREE"]) ? $context["GROUP_FREE"] : null);
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("GROUP_OPEN");
                echo "</label> 
\t\t\t\t<label for=\"group_type2\"><input type=\"radio\" class=\"radio\" name=\"group_type\" id=\"group_type2\" value=\"";
                // line 37
                echo (isset($context["GROUP_TYPE_OPEN"]) ? $context["GROUP_TYPE_OPEN"] : null);
                echo "\"";
                echo (isset($context["GROUP_OPEN"]) ? $context["GROUP_OPEN"] : null);
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("GROUP_REQUEST");
                echo "</label> 
\t\t\t\t<label for=\"group_type3\"><input type=\"radio\" class=\"radio\" name=\"group_type\" id=\"group_type3\" value=\"";
                // line 38
                echo (isset($context["GROUP_TYPE_CLOSED"]) ? $context["GROUP_TYPE_CLOSED"] : null);
                echo "\"";
                echo (isset($context["GROUP_CLOSED"]) ? $context["GROUP_CLOSED"] : null);
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("GROUP_CLOSED");
                echo "</label> 
\t\t\t\t<label for=\"group_type4\"><input type=\"radio\" class=\"radio\" name=\"group_type\" id=\"group_type4\" value=\"";
                // line 39
                echo (isset($context["GROUP_TYPE_HIDDEN"]) ? $context["GROUP_TYPE_HIDDEN"] : null);
                echo "\"";
                echo (isset($context["GROUP_HIDDEN"]) ? $context["GROUP_HIDDEN"] : null);
                echo " /> ";
                echo $this->env->getExtension('phpbb')->lang("GROUP_HIDDEN");
                echo "</label>
\t\t\t</dd>
\t\t</dl>
\t\t";
            } else {
                // line 43
                echo "\t\t\t<input name=\"group_type\" type=\"hidden\" value=\"";
                echo (isset($context["GROUP_TYPE_SPECIAL"]) ? $context["GROUP_TYPE_SPECIAL"] : null);
                echo "\" />
\t\t";
            }
            // line 45
            echo "\t\t</fieldset>

\t</div>
</div>

<div class=\"panel\">
\t<div class=\"inner\">
\t<h3>";
            // line 52
            echo $this->env->getExtension('phpbb')->lang("GROUP_SETTINGS_SAVE");
            echo "</h3>

\t<fieldset>
\t<dl>
\t\t<dt><label for=\"group_colour\">";
            // line 56
            echo $this->env->getExtension('phpbb')->lang("GROUP_COLOR");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("GROUP_COLOR_EXPLAIN");
            echo "</span></dt>
\t\t<dd>
\t\t\t<input name=\"group_colour\" type=\"text\" id=\"group_colour\" value=\"";
            // line 58
            echo (isset($context["GROUP_COLOUR"]) ? $context["GROUP_COLOUR"] : null);
            echo "\" size=\"6\" maxlength=\"6\" class=\"inputbox narrow\" />
\t\t\t<span style=\"background-color: #";
            // line 59
            echo (isset($context["GROUP_COLOUR"]) ? $context["GROUP_COLOUR"] : null);
            echo ";\">&nbsp;&nbsp;&nbsp;</span>
\t\t\t[ <a href=\"#\" id=\"color_palette_toggle\">";
            // line 60
            echo $this->env->getExtension('phpbb')->lang("COLOUR_SWATCH");
            echo "</a> ]
\t\t\t<div id=\"color_palette_placeholder\" class=\"hidden\" data-orientation=\"h\" data-height=\"12\" data-width=\"15\" data-target=\"#group_colour\"></div>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"group_rank\">";
            // line 65
            echo $this->env->getExtension('phpbb')->lang("GROUP_RANK");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select name=\"group_rank\" id=\"group_rank\">";
            // line 66
            echo (isset($context["S_RANK_OPTIONS"]) ? $context["S_RANK_OPTIONS"] : null);
            echo "</select></dd>
\t</dl>
\t</fieldset>

\t</div>
</div>

";
            // line 73
            $location = "ucp_avatar_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("ucp_avatar_options.html", "ucp_groups_manage.html", 73)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 74
            echo "
<fieldset class=\"submit-buttons\">
\t";
            // line 76
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t<input type=\"reset\" value=\"";
            // line 77
            echo $this->env->getExtension('phpbb')->lang("RESET");
            echo "\" name=\"reset\" class=\"button2\" />&nbsp; 
\t<input type=\"submit\" name=\"update\" value=\"";
            // line 78
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" class=\"button1\" />
\t";
            // line 79
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
</fieldset>

";
        } elseif (        // line 82
(isset($context["S_LIST"]) ? $context["S_LIST"] : null)) {
            // line 83
            echo "
\t";
            // line 84
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "leader", array()))) {
                // line 85
                echo "\t<table class=\"table1\">
\t<thead>
\t<tr>
\t\t<th class=\"name\">";
                // line 88
                echo $this->env->getExtension('phpbb')->lang("GROUP_LEAD");
                echo "</th>
\t\t<th class=\"info\">";
                // line 89
                echo $this->env->getExtension('phpbb')->lang("GROUP_DEFAULT");
                echo "</th>
\t\t<th class=\"posts\">";
                // line 90
                echo $this->env->getExtension('phpbb')->lang("POSTS");
                echo "</th>
\t\t<th class=\"joined\">";
                // line 91
                echo $this->env->getExtension('phpbb')->lang("JOINED");
                echo "</th>
\t\t<th class=\"mark\">";
                // line 92
                echo $this->env->getExtension('phpbb')->lang("MARK");
                echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
                // line 96
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "leader", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["leader"]) {
                    // line 97
                    echo "\t\t<tr class=\"";
                    if (($this->getAttribute($context["leader"], "S_ROW_COUNT", array()) % 2 == 0)) {
                        echo "bg1";
                    } else {
                        echo "bg2";
                    }
                    echo "\">
\t\t\t<td class=\"name\">";
                    // line 98
                    echo $this->getAttribute($context["leader"], "USERNAME_FULL", array());
                    echo "</td>
\t\t\t<td>";
                    // line 99
                    if ($this->getAttribute($context["leader"], "S_GROUP_DEFAULT", array())) {
                        echo $this->env->getExtension('phpbb')->lang("YES");
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("NO");
                    }
                    echo "</td>
\t\t\t<td class=\"posts\">";
                    // line 100
                    echo $this->getAttribute($context["leader"], "USER_POSTS", array());
                    echo "</td>
\t\t\t<td class=\"joined\">";
                    // line 101
                    echo $this->getAttribute($context["leader"], "JOINED", array());
                    echo "</td>
\t\t\t<td class=\"mark\">&nbsp;</td>
\t\t</tr>
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leader'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 105
                echo "\t</tbody>
\t</table>
\t";
            }
            // line 108
            echo "
\t";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "member", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 110
                echo "\t\t";
                if ($this->getAttribute($context["member"], "S_PENDING", array())) {
                    // line 111
                    echo "\t\t\t<table class=\"table1\">
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"name\">";
                    // line 114
                    echo $this->env->getExtension('phpbb')->lang("GROUP_PENDING");
                    echo "</th>
\t\t\t\t<th class=\"info\">";
                    // line 115
                    echo $this->env->getExtension('phpbb')->lang("GROUP_DEFAULT");
                    echo "</th>
\t\t\t\t<th class=\"posts\">";
                    // line 116
                    echo $this->env->getExtension('phpbb')->lang("POSTS");
                    echo "</th>
\t\t\t\t<th class=\"joined\">";
                    // line 117
                    echo $this->env->getExtension('phpbb')->lang("JOINED");
                    echo "</th>
\t\t\t\t<th class=\"mark\">";
                    // line 118
                    echo $this->env->getExtension('phpbb')->lang("MARK");
                    echo "</th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t";
                } elseif ($this->getAttribute(                // line 122
$context["member"], "S_APPROVED", array())) {
                    // line 123
                    echo "\t\t\t";
                    if ((isset($context["S_PENDING_SET"]) ? $context["S_PENDING_SET"] : null)) {
                        // line 124
                        echo "\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t";
                    }
                    // line 127
                    echo "\t\t\t<table class=\"table1\">
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"name\">";
                    // line 130
                    echo $this->env->getExtension('phpbb')->lang("GROUP_APPROVED");
                    echo "</th>
\t\t\t\t<th class=\"info\">";
                    // line 131
                    echo $this->env->getExtension('phpbb')->lang("GROUP_DEFAULT");
                    echo "</th>
\t\t\t\t<th class=\"posts\">";
                    // line 132
                    echo $this->env->getExtension('phpbb')->lang("POSTS");
                    echo "</th>
\t\t\t\t<th class=\"joined\">";
                    // line 133
                    echo $this->env->getExtension('phpbb')->lang("JOINED");
                    echo "</th>
\t\t\t\t<th class=\"mark\">";
                    // line 134
                    echo $this->env->getExtension('phpbb')->lang("MARK");
                    echo "</th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t";
                } else {
                    // line 139
                    echo "\t\t\t<tr class=\"";
                    if (($this->getAttribute($context["member"], "S_ROW_COUNT", array()) % 2 == 0)) {
                        echo "bg1";
                    } else {
                        echo "bg2";
                    }
                    echo "\">
\t\t\t\t<td class=\"name\">";
                    // line 140
                    echo $this->getAttribute($context["member"], "USERNAME_FULL", array());
                    echo "</td>
\t\t\t\t<td>";
                    // line 141
                    if ($this->getAttribute($context["member"], "S_GROUP_DEFAULT", array())) {
                        echo $this->env->getExtension('phpbb')->lang("YES");
                    } else {
                        echo $this->env->getExtension('phpbb')->lang("NO");
                    }
                    echo "</td>
\t\t\t\t<td class=\"posts\">";
                    // line 142
                    echo $this->getAttribute($context["member"], "USER_POSTS", array());
                    echo "</td>
\t\t\t\t<td class=\"joined\">";
                    // line 143
                    echo $this->getAttribute($context["member"], "JOINED", array());
                    echo "</td>
\t\t\t\t<td class=\"mark\"><input type=\"checkbox\" name=\"mark[]\" value=\"";
                    // line 144
                    echo $this->getAttribute($context["member"], "USER_ID", array());
                    echo "\" /></td>
\t\t\t</tr>
\t\t";
                }
                // line 147
                echo "\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 148
                echo "\t\t<table class=\"table1\">
\t\t<thead>
\t\t<tr>
\t\t\t<th class=\"name\">";
                // line 151
                echo $this->env->getExtension('phpbb')->lang("MEMBERS");
                echo "</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t<tr>
\t\t\t<td class=\"bg1\">";
                // line 156
                echo $this->env->getExtension('phpbb')->lang("GROUPS_NO_MEMBERS");
                echo "</td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "\t</tbody>
\t</table>

\t";
            // line 162
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 163
                echo "\t<div class=\"action-bar bottom\">
\t\t<div class=\"pagination\"> 
\t\t\t";
                // line 165
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "ucp_groups_manage.html", 165)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 166
                echo "\t\t</div>
\t</div>
\t";
            }
            // line 169
            echo "
\t</div>
</div>

<fieldset class=\"display-actions\">\t
\t<select name=\"action\"><option value=\"\">";
            // line 174
            echo $this->env->getExtension('phpbb')->lang("SELECT_OPTION");
            echo "</option>";
            echo (isset($context["S_ACTION_OPTIONS"]) ? $context["S_ACTION_OPTIONS"] : null);
            echo "</select>
\t<input class=\"button2\" type=\"submit\" name=\"update\" value=\"";
            // line 175
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />
\t<div><a href=\"#\" onclick=\"marklist('ucp', 'mark', true); return false;\">";
            // line 176
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "</a> &bull; <a href=\"#\" onclick=\"marklist('ucp', 'mark', false); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "</a></div>
</fieldset>

<div class=\"panel\">
\t<div class=\"inner\">

\t<h3>";
            // line 182
            echo $this->env->getExtension('phpbb')->lang("ADD_USERS");
            echo "</h3>

\t<p>";
            // line 184
            echo $this->env->getExtension('phpbb')->lang("ADD_USERS_UCP_EXPLAIN");
            echo "</p>

\t<fieldset>
\t<dl>
\t\t<dt><label for=\"default0\">";
            // line 188
            echo $this->env->getExtension('phpbb')->lang("USER_GROUP_DEFAULT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("USER_GROUP_DEFAULT_EXPLAIN");
            echo "</span></dt>
\t\t<dd>
\t\t\t<label for=\"default1\"><input type=\"radio\" name=\"default\" id=\"default1\" value=\"1\" /> ";
            // line 190
            echo $this->env->getExtension('phpbb')->lang("YES");
            echo "</label> 
\t\t\t<label for=\"default0\"><input type=\"radio\" name=\"default\" id=\"default0\" value=\"0\" checked=\"checked\" /> ";
            // line 191
            echo $this->env->getExtension('phpbb')->lang("NO");
            echo "</label>
\t\t</dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"usernames\">";
            // line 195
            echo $this->env->getExtension('phpbb')->lang("USERNAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb')->lang("USERNAMES_EXPLAIN");
            echo "</span></dt>
\t\t<dd><textarea name=\"usernames\" id=\"usernames\" rows=\"3\" cols=\"30\" class=\"inputbox\"></textarea></dd>
\t\t<dd><strong><a href=\"";
            // line 197
            echo (isset($context["U_FIND_USERNAME"]) ? $context["U_FIND_USERNAME"] : null);
            echo "\" onclick=\"find_username(this.href); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
            echo "</a></strong></dd>
\t</dl>
\t</fieldset>

\t</div>
</div>

<fieldset class=\"submit-buttons\">
\t<input class=\"button1\" type=\"submit\" name=\"addusers\" value=\"";
            // line 205
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" />
\t";
            // line 206
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
</fieldset>

";
        } else {
            // line 210
            echo "
\t";
            // line 211
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "leader", array()))) {
                // line 212
                echo "\t\t<ul class=\"topiclist two-long-columns\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl>
\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 215
                echo $this->env->getExtension('phpbb')->lang("GROUP_LEADER");
                echo "</div></dt>
\t\t\t\t\t<dd class=\"info\"><span>";
                // line 216
                echo $this->env->getExtension('phpbb')->lang("OPTIONS");
                echo "</span></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist cplist two-long-columns responsive-show-all\">

\t\t";
                // line 222
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "leader", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["leader"]) {
                    // line 223
                    echo "\t\t<li class=\"row";
                    if (($this->getAttribute((isset($context["attachrow"]) ? $context["attachrow"] : null), "S_ROW_COUNT", array()) % 2 == 1)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t<dl>
\t\t\t\t<dt>
\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t<a href=\"";
                    // line 227
                    echo $this->getAttribute($context["leader"], "U_EDIT", array());
                    echo "\" class=\"topictitle\"";
                    if ($this->getAttribute($context["leader"], "GROUP_COLOUR", array())) {
                        echo " style=\"color: #";
                        echo $this->getAttribute($context["leader"], "GROUP_COLOUR", array());
                        echo ";\"";
                    }
                    echo ">";
                    echo $this->getAttribute($context["leader"], "GROUP_NAME", array());
                    echo "</a>
\t\t\t\t\t\t";
                    // line 228
                    if ($this->getAttribute($context["leader"], "GROUP_DESC", array())) {
                        echo "<br />";
                        echo $this->getAttribute($context["leader"], "GROUP_DESC", array());
                    }
                    // line 229
                    echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"option\"><span><a href=\"";
                    // line 231
                    echo $this->getAttribute($context["leader"], "U_EDIT", array());
                    echo "\" >";
                    echo $this->env->getExtension('phpbb')->lang("EDIT");
                    echo "</a></span></dd>
\t\t\t\t<dd class=\"option\"><span><a href=\"";
                    // line 232
                    echo $this->getAttribute($context["leader"], "U_LIST", array());
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("GROUP_LIST");
                    echo "</a></span></dd>
\t\t\t</dl>
\t\t</li>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['leader'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 236
                echo "\t\t</ul>
\t";
            } else {
                // line 238
                echo "\t\t<p><strong>";
                echo $this->env->getExtension('phpbb')->lang("NO_LEADERS");
                echo "</strong></p>
\t";
            }
            // line 240
            echo "
\t</div>
</div>

";
        }
        // line 245
        echo "</form>

";
        // line 247
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_groups_manage.html", 247)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_groups_manage.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  727 => 247,  723 => 245,  716 => 240,  710 => 238,  706 => 236,  694 => 232,  688 => 231,  684 => 229,  679 => 228,  667 => 227,  655 => 223,  651 => 222,  642 => 216,  638 => 215,  633 => 212,  631 => 211,  628 => 210,  621 => 206,  617 => 205,  604 => 197,  596 => 195,  589 => 191,  585 => 190,  577 => 188,  570 => 184,  565 => 182,  554 => 176,  550 => 175,  544 => 174,  537 => 169,  532 => 166,  520 => 165,  516 => 163,  514 => 162,  509 => 159,  500 => 156,  492 => 151,  487 => 148,  482 => 147,  476 => 144,  472 => 143,  468 => 142,  460 => 141,  456 => 140,  447 => 139,  439 => 134,  435 => 133,  431 => 132,  427 => 131,  423 => 130,  418 => 127,  413 => 124,  410 => 123,  408 => 122,  401 => 118,  397 => 117,  393 => 116,  389 => 115,  385 => 114,  380 => 111,  377 => 110,  372 => 109,  369 => 108,  364 => 105,  354 => 101,  350 => 100,  342 => 99,  338 => 98,  329 => 97,  325 => 96,  318 => 92,  314 => 91,  310 => 90,  306 => 89,  302 => 88,  297 => 85,  295 => 84,  292 => 83,  290 => 82,  284 => 79,  280 => 78,  276 => 77,  272 => 76,  268 => 74,  256 => 73,  246 => 66,  241 => 65,  233 => 60,  229 => 59,  225 => 58,  217 => 56,  210 => 52,  201 => 45,  195 => 43,  184 => 39,  176 => 38,  168 => 37,  160 => 36,  152 => 34,  149 => 33,  147 => 32,  126 => 30,  122 => 29,  117 => 28,  108 => 25,  93 => 24,  88 => 23,  80 => 19,  78 => 18,  73 => 16,  70 => 15,  64 => 12,  61 => 11,  59 => 10,  49 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE ucp_header.html -->*/
/* */
/* <h2<!-- IF GROUP_COLOR --> style="color:#{GROUP_COLOR};"<!-- ENDIF -->>{L_USERGROUPS}<!-- IF GROUP_NAME --> :: {GROUP_NAME}<!-- ENDIF --></h2>*/
/* */
/* <form id="ucp" method="post" action="{S_UCP_ACTION}"{S_FORM_ENCTYPE}>*/
/* */
/* <div class="panel">*/
/* 	<div class="inner">*/
/* */
/* 	<!-- IF S_ERROR -->*/
/* 	<fieldset>*/
/* 		<p class="error">{ERROR_MSG}</p>*/
/* 	</fieldset>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<p>{L_GROUPS_EXPLAIN}</p>*/
/* */
/* 	<!-- IF S_EDIT -->*/
/* 		<h3>{L_GROUP_DETAILS}</h3>*/
/* */
/* 		<fieldset>*/
/* 		<dl>*/
/* 			<dt><label for="group_name">{L_GROUP_NAME}{L_COLON}</label></dt>*/
/* 			<dd><!-- IF S_SPECIAL_GROUP --><strong<!-- IF GROUP_COLOUR --> style="color: #{GROUP_COLOUR};"<!-- ENDIF -->>{GROUP_NAME}</strong> <input name="group_name" type="hidden" value="{GROUP_INTERNAL_NAME}" />*/
/* 				<!-- ELSE --><input name="group_name" type="text" id="group_name" value="{GROUP_INTERNAL_NAME}" class="inputbox" /><!-- ENDIF --></dd>*/
/* 		</dl>*/
/* 		<dl>*/
/* 			<dt><label for="group_desc">{L_GROUP_DESC}{L_COLON}</label></dt>*/
/* 			<dd><textarea id="group_desc" name="group_desc" rows="5" cols="45" class="inputbox">{GROUP_DESC}</textarea></dd>*/
/* 			<dd><label for="desc_parse_bbcode"><input type="checkbox" class="radio" name="desc_parse_bbcode" id="desc_parse_bbcode"<!-- IF S_DESC_BBCODE_CHECKED --> checked="checked"<!-- ENDIF --> /> {L_PARSE_BBCODE}</label>&nbsp;<label for="desc_parse_smilies"><input type="checkbox" class="radio" name="desc_parse_smilies" id="desc_parse_smilies"<!-- IF S_DESC_SMILIES_CHECKED --> checked="checked"<!-- ENDIF --> /> {L_PARSE_SMILIES}</label>&nbsp;<label for="desc_parse_urls"><input type="checkbox" class="radio" name="desc_parse_urls" id="desc_parse_urls"<!-- IF S_DESC_URLS_CHECKED --> checked="checked"<!-- ENDIF --> /> {L_PARSE_URLS}</label></dd>*/
/* 		</dl>*/
/* 		<!-- IF not S_SPECIAL_GROUP -->*/
/* 		<dl>*/
/* 			<dt><label for="group_type1">{L_GROUP_TYPE}{L_COLON}</label><br /><span>{L_GROUP_TYPE_EXPLAIN}</span></dt>*/
/* 			<dd>*/
/* 				<label for="group_type1"><input type="radio" class="radio" name="group_type" id="group_type1" value="{GROUP_TYPE_FREE}"{GROUP_FREE} /> {L_GROUP_OPEN}</label> */
/* 				<label for="group_type2"><input type="radio" class="radio" name="group_type" id="group_type2" value="{GROUP_TYPE_OPEN}"{GROUP_OPEN} /> {L_GROUP_REQUEST}</label> */
/* 				<label for="group_type3"><input type="radio" class="radio" name="group_type" id="group_type3" value="{GROUP_TYPE_CLOSED}"{GROUP_CLOSED} /> {L_GROUP_CLOSED}</label> */
/* 				<label for="group_type4"><input type="radio" class="radio" name="group_type" id="group_type4" value="{GROUP_TYPE_HIDDEN}"{GROUP_HIDDEN} /> {L_GROUP_HIDDEN}</label>*/
/* 			</dd>*/
/* 		</dl>*/
/* 		<!-- ELSE -->*/
/* 			<input name="group_type" type="hidden" value="{GROUP_TYPE_SPECIAL}" />*/
/* 		<!-- ENDIF -->*/
/* 		</fieldset>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <div class="panel">*/
/* 	<div class="inner">*/
/* 	<h3>{L_GROUP_SETTINGS_SAVE}</h3>*/
/* */
/* 	<fieldset>*/
/* 	<dl>*/
/* 		<dt><label for="group_colour">{L_GROUP_COLOR}{L_COLON}</label><br /><span>{L_GROUP_COLOR_EXPLAIN}</span></dt>*/
/* 		<dd>*/
/* 			<input name="group_colour" type="text" id="group_colour" value="{GROUP_COLOUR}" size="6" maxlength="6" class="inputbox narrow" />*/
/* 			<span style="background-color: #{GROUP_COLOUR};">&nbsp;&nbsp;&nbsp;</span>*/
/* 			[ <a href="#" id="color_palette_toggle">{L_COLOUR_SWATCH}</a> ]*/
/* 			<div id="color_palette_placeholder" class="hidden" data-orientation="h" data-height="12" data-width="15" data-target="#group_colour"></div>*/
/* 		</dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="group_rank">{L_GROUP_RANK}{L_COLON}</label></dt>*/
/* 		<dd><select name="group_rank" id="group_rank">{S_RANK_OPTIONS}</select></dd>*/
/* 	</dl>*/
/* 	</fieldset>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <!-- INCLUDE ucp_avatar_options.html -->*/
/* */
/* <fieldset class="submit-buttons">*/
/* 	{S_HIDDEN_FIELDS}*/
/* 	<input type="reset" value="{L_RESET}" name="reset" class="button2" />&nbsp; */
/* 	<input type="submit" name="update" value="{L_SUBMIT}" class="button1" />*/
/* 	{S_FORM_TOKEN}*/
/* </fieldset>*/
/* */
/* <!-- ELSEIF S_LIST -->*/
/* */
/* 	<!-- IF .leader -->*/
/* 	<table class="table1">*/
/* 	<thead>*/
/* 	<tr>*/
/* 		<th class="name">{L_GROUP_LEAD}</th>*/
/* 		<th class="info">{L_GROUP_DEFAULT}</th>*/
/* 		<th class="posts">{L_POSTS}</th>*/
/* 		<th class="joined">{L_JOINED}</th>*/
/* 		<th class="mark">{L_MARK}</th>*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	<!-- BEGIN leader -->*/
/* 		<tr class="<!-- IF leader.S_ROW_COUNT is even -->bg1<!-- ELSE -->bg2<!-- ENDIF -->">*/
/* 			<td class="name">{leader.USERNAME_FULL}</td>*/
/* 			<td><!-- IF leader.S_GROUP_DEFAULT -->{L_YES}<!-- ELSE -->{L_NO}<!-- ENDIF --></td>*/
/* 			<td class="posts">{leader.USER_POSTS}</td>*/
/* 			<td class="joined">{leader.JOINED}</td>*/
/* 			<td class="mark">&nbsp;</td>*/
/* 		</tr>*/
/* 	<!-- END leader -->*/
/* 	</tbody>*/
/* 	</table>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- BEGIN member -->*/
/* 		<!-- IF member.S_PENDING -->*/
/* 			<table class="table1">*/
/* 			<thead>*/
/* 			<tr>*/
/* 				<th class="name">{L_GROUP_PENDING}</th>*/
/* 				<th class="info">{L_GROUP_DEFAULT}</th>*/
/* 				<th class="posts">{L_POSTS}</th>*/
/* 				<th class="joined">{L_JOINED}</th>*/
/* 				<th class="mark">{L_MARK}</th>*/
/* 			</tr>*/
/* 			</thead>*/
/* 			<tbody>*/
/* 		<!-- ELSEIF member.S_APPROVED -->*/
/* 			<!-- IF S_PENDING_SET -->*/
/* 				</tbody>*/
/* 				</table>*/
/* 			<!-- ENDIF -->*/
/* 			<table class="table1">*/
/* 			<thead>*/
/* 			<tr>*/
/* 				<th class="name">{L_GROUP_APPROVED}</th>*/
/* 				<th class="info">{L_GROUP_DEFAULT}</th>*/
/* 				<th class="posts">{L_POSTS}</th>*/
/* 				<th class="joined">{L_JOINED}</th>*/
/* 				<th class="mark">{L_MARK}</th>*/
/* 			</tr>*/
/* 			</thead>*/
/* 			<tbody>*/
/* 		<!-- ELSE -->*/
/* 			<tr class="<!-- IF member.S_ROW_COUNT is even -->bg1<!-- ELSE -->bg2<!-- ENDIF -->">*/
/* 				<td class="name">{member.USERNAME_FULL}</td>*/
/* 				<td><!-- IF member.S_GROUP_DEFAULT -->{L_YES}<!-- ELSE -->{L_NO}<!-- ENDIF --></td>*/
/* 				<td class="posts">{member.USER_POSTS}</td>*/
/* 				<td class="joined">{member.JOINED}</td>*/
/* 				<td class="mark"><input type="checkbox" name="mark[]" value="{member.USER_ID}" /></td>*/
/* 			</tr>*/
/* 		<!-- ENDIF -->*/
/* 	<!-- BEGINELSE -->*/
/* 		<table class="table1">*/
/* 		<thead>*/
/* 		<tr>*/
/* 			<th class="name">{L_MEMBERS}</th>*/
/* 		</tr>*/
/* 		</thead>*/
/* 		<tbody>*/
/* 		<tr>*/
/* 			<td class="bg1">{L_GROUPS_NO_MEMBERS}</td>*/
/* 		</tr>*/
/* 	<!-- END member -->*/
/* 	</tbody>*/
/* 	</table>*/
/* */
/* 	<!-- IF .pagination -->*/
/* 	<div class="action-bar bottom">*/
/* 		<div class="pagination"> */
/* 			<!-- INCLUDE pagination.html -->*/
/* 		</div>*/
/* 	</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <fieldset class="display-actions">	*/
/* 	<select name="action"><option value="">{L_SELECT_OPTION}</option>{S_ACTION_OPTIONS}</select>*/
/* 	<input class="button2" type="submit" name="update" value="{L_SUBMIT}" />*/
/* 	<div><a href="#" onclick="marklist('ucp', 'mark', true); return false;">{L_MARK_ALL}</a> &bull; <a href="#" onclick="marklist('ucp', 'mark', false); return false;">{L_UNMARK_ALL}</a></div>*/
/* </fieldset>*/
/* */
/* <div class="panel">*/
/* 	<div class="inner">*/
/* */
/* 	<h3>{L_ADD_USERS}</h3>*/
/* */
/* 	<p>{L_ADD_USERS_UCP_EXPLAIN}</p>*/
/* */
/* 	<fieldset>*/
/* 	<dl>*/
/* 		<dt><label for="default0">{L_USER_GROUP_DEFAULT}{L_COLON}</label><br /><span>{L_USER_GROUP_DEFAULT_EXPLAIN}</span></dt>*/
/* 		<dd>*/
/* 			<label for="default1"><input type="radio" name="default" id="default1" value="1" /> {L_YES}</label> */
/* 			<label for="default0"><input type="radio" name="default" id="default0" value="0" checked="checked" /> {L_NO}</label>*/
/* 		</dd>*/
/* 	</dl>*/
/* 	<dl>*/
/* 		<dt><label for="usernames">{L_USERNAME}{L_COLON}</label><br /><span>{L_USERNAMES_EXPLAIN}</span></dt>*/
/* 		<dd><textarea name="usernames" id="usernames" rows="3" cols="30" class="inputbox"></textarea></dd>*/
/* 		<dd><strong><a href="{U_FIND_USERNAME}" onclick="find_username(this.href); return false;">{L_FIND_USERNAME}</a></strong></dd>*/
/* 	</dl>*/
/* 	</fieldset>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <fieldset class="submit-buttons">*/
/* 	<input class="button1" type="submit" name="addusers" value="{L_SUBMIT}" />*/
/* 	{S_FORM_TOKEN}*/
/* </fieldset>*/
/* */
/* <!-- ELSE -->*/
/* */
/* 	<!-- IF .leader -->*/
/* 		<ul class="topiclist two-long-columns">*/
/* 			<li class="header">*/
/* 				<dl>*/
/* 					<dt><div class="list-inner">{L_GROUP_LEADER}</div></dt>*/
/* 					<dd class="info"><span>{L_OPTIONS}</span></dd>*/
/* 				</dl>*/
/* 			</li>*/
/* 		</ul>*/
/* 		<ul class="topiclist cplist two-long-columns responsive-show-all">*/
/* */
/* 		<!-- BEGIN leader -->*/
/* 		<li class="row<!-- IF attachrow.S_ROW_COUNT is odd --> bg1<!-- ELSE --> bg2<!-- ENDIF -->">*/
/* 			<dl>*/
/* 				<dt>*/
/* 					<div class="list-inner">*/
/* 						<a href="{leader.U_EDIT}" class="topictitle"<!-- IF leader.GROUP_COLOUR --> style="color: #{leader.GROUP_COLOUR};"<!-- ENDIF -->>{leader.GROUP_NAME}</a>*/
/* 						<!-- IF leader.GROUP_DESC --><br />{leader.GROUP_DESC}<!-- ENDIF -->*/
/* 					</div>*/
/* 				</dt>*/
/* 				<dd class="option"><span><a href="{leader.U_EDIT}" >{L_EDIT}</a></span></dd>*/
/* 				<dd class="option"><span><a href="{leader.U_LIST}">{L_GROUP_LIST}</a></span></dd>*/
/* 			</dl>*/
/* 		</li>*/
/* 		<!-- END leader -->*/
/* 		</ul>*/
/* 	<!-- ELSE -->*/
/* 		<p><strong>{L_NO_LEADERS}</strong></p>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <!-- ENDIF -->*/
/* </form>*/
/* */
/* <!-- INCLUDE ucp_footer.html -->*/
/* */
