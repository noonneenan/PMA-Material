<?php
// Unplanned execution path
if (!defined('PMA_MINIMUM_COMMON') && !defined('TESTSUITE')) {
    exit();
} ?>
/* ----------------------------------------------------- */

/* Designer */

.input_tab {
  background-color: #efefef;
  color: #000;
  border: 1px solid #ccc
}

.content_fullscreen {
  position: relative;
  overflow: auto
}

#canvas_outer {
  position: relative;
  width: 100%;
  display: block
}

#canvas {
  background-color: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>;
  color: #000
}

canvas.designer {
  display: inline-block;
  overflow: hidden;
  text-align: left
}

canvas.designer * {
  behavior: url(#default#VML)
}

.designer_tab {
  width: auto;
  color: #333;
  border-collapse: collapse;
  border: 1px solid #ccc;
  z-index: 1;
  -moz-user-select: none
}

.designer_tab .header {
  background-color: #f6f6f6
}

.tab_zag, .tab_zag_2 {
  text-align: center;
  cursor: move;
  font-size: 13px
}

.tab_field {
  background: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>;
  color: #000;
  cursor: default
}

.tab_field_2 {
  background-color: #CCFFCC;
  color: #000;
  background-repeat: repeat-x;
  cursor: default
}

.tab_field_3 {
  background-color: #e6f9ff;
  color: #000;
  cursor: default
}

#designer_hint {
  white-space: nowrap;
  position: absolute;
  background-color: #99ff99;
  color: #000;
  z-index: 3;
  border: #00CC66 solid 1px;
  display: none
}

.scroll_tab {
  overflow: auto;
  width: 100%;
  height: 500px
}

.designer_Tabs {
  cursor: default;
  color: #333;
  white-space: nowrap;
  text-decoration: none;
  text-indent: 3px;
  margin-left: 2px;
  text-align: left;
  border: #ccc solid 0
}

.designer_Tabs2 {
  cursor: default;
  color: #666;
  background: #eee;
  text-indent: 3px;
  white-space: nowrap;
  text-decoration: none;
  border: #eee solid 0;
  text-align: left
}

.owner {
  font-weight: normal;
}

.option_tab {
  padding-left: 2px;
  padding-right: 2px;
  width: 5px
}

.select_all {
  vertical-align: top;
  padding-left: 2px;
  padding-right: 2px;
  cursor: default;
  width: 1px;
  color: #000;
  background-repeat: repeat-x
}

.small_tab, .small_tab2 {
  cursor: default;
  text-align: center
}

.small_tab_pref {
  background-color: #f6f6f6;
  text-align: center;
  width: 1px
}

.small_tab_pref2 {
  vertical-align: top;
  color: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>;
  background-color: #ff9966;
  cursor: default;
  text-align: center;
  font-weight: bold;
  width: 1px;
  text-decoration: none
}

.L_butt2_1 {
  padding-left: 5px;
  text-decoration: none;
  vertical-align: middle;
  cursor: default
}

.L_butt2_2 {
  padding-left: 5px;
  color: #000;
  text-decoration: none;
  vertical-align: middle;
  cursor: default
}
/* ---------------------------------------------------------------------------*/

.bor {
  width: 10px;
  height: 10px
}

#osn_tab {
  background-color: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>;
  color: #000;
  width: 100% !important;
}

.designer_header {
  background-color: #f6f6f6;
  border-top: 20px solid <?php echo $GLOBALS['cfg']['WhiteColor'] ?>;
  color: #333;
  display: block;
  height: 28px;
  margin-left: -20px;
  margin-top: -60px;
  padding: 5px 20px;
  position: fixed;
  text-align: center;
  width: 100%;
  z-index: 101
}

.designer_header a {
  display: block;
  float: left;
  margin: 3px 1px 4px;
  height: 20px
}

.designer_header .M_bord {
  display: block;
  float: left;
  margin: 4px;
  height: 20px;
  width: 2px
}

.designer_header a.first {
  margin-right: 1em
}

.designer_header a.last {
  margin-left: 1em
}

a.M_butt_Selected_down_IE, a.M_butt_Selected_down {
  background-color: #eee;
  color: #000
}

a.M_butt_Selected_down_IE:hover, a.M_butt_Selected_down:hover, a.M_butt:hover {
  background-color: #eee;
  color: #000
}

#layer_menu {
  z-index: 98;
  position: relative;
  float: right;
  ;
  background-color: #f6f6f6;
  border: #ccc solid 1px;
  border-top: 0;
  margin-right: -20px
}

.content_fullscreen #layer_menu {
  margin-right: 0
}

#layer_menu.left {
  float: left;
  margin-left: -20px
}

.content_fullscreen #layer_menu.left {
  margin-left: 0
}

#layer_upd_relation {
  position: absolute;
  left: 637px;
  top: 224px;
  z-index: 100
}

#layer_new_relation {
  position: absolute;
  left: 636px;
  top: 85px;
  z-index: 100;
  width: 153px
}

#designer_optionse {
  position: absolute;
  left: 636px;
  top: 85px;
  z-index: 100;
  width: 153px
}

#layer_menu_sizer {
  background-image: url(<?php echo $theme->getImgPath('designer/resize.png') ?>);
  cursor: ew-resize
}

#layer_menu_sizer .icon {
  margin: 0
}

.panel {
  position: fixed;
  top: 90px;
  right: 0;
  width: 350px;
  max-height: 500px;
  display: none;
  overflow: auto;
  padding-top: 34px;
  z-index: 102
}

a.trigger {
  position: fixed;
  text-decoration: none;
  top: 90px;
  right: 0;
  color: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>;
  padding: 10px 40px 10px 15px;
  background: #333 url(<?php echo $theme->getImgPath('designer/plus.png') ?>) 85% 55% no-repeat;
  border: 1px solid #444;
  display: block;
  z-index: 102
}

a.trigger:hover {
  color: #080808;
  background: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>696 url(<?php echo $theme->getImgPath('designer/plus.png') ?>) 85% 55% no-repeat;
  border: 1px solid #999
}

a.active.trigger {
  background: #222 url(<?php echo $theme->getImgPath('designer/minus.png') ?>) 85% 55% no-repeat;
  z-index: 999
}

a.active.trigger:hover {
  background: <?php echo $GLOBALS['cfg']['WhiteColor'] ?>696 url(<?php echo $theme->getImgPath('designer/minus.png') ?>) 85% 55% no-repeat
}

.toggle_container .block {
  background-color: <?php echo $GLOBALS['cfg']['BrowseMarkerBackground'] ?>;
  border-top: 1px solid #999
}

.toggle_container .block .ic_s_info {
  -webkit-filter: invert(70%);
  filter: invert(70%)
}

.history_table {
  opacity: 1.0;
  cursor: pointer
}

.history_table2 {
  opacity: 0.7
}

#ab {
  min-width: 300px
}

#ab .ui-accordion-content {
  padding: 0
}

#box {
  display: none
}

#foreignkeychk {
  text-align: left;
  position: absolute;
  cursor: pointer
}

.side-menu {
  float: left;
  position: fixed;
  width: auto;
  height: auto;
  border: none;
  box-shadow: <?php echo $GLOBALS['cfg']['Shadow'] ?>;
  overflow: hidden;
  z-index: 50;
  padding: 6px;
  margin-top: 0;
  margin-left: -20px
}

.content_fullscreen .side-menu {
  margin-left: 0
}

.side-menu.right {
  float: right;
  right: 0
}

.content_fullscreen .side-menu.right {
  margin-right: 0
}

.side-menu .hide {
  display: none
}

.side-menu a {
  display: block;
  float: none;
  overflow: hidden
}

.side-menu img, .side-menu span, .side-menu .text {
  float: left;
  padding-left: 2px
}

#name-panel {
  border-bottom: 1px solid #ccc;
  text-align: center;
  background: #efefef;
  font-size: 1.2em;
  padding: 10px;
  font-weight: bold;
  margin-top: -20px;
  margin-left: -20px;
  margin-right: -20px
}

.content_fullscreen #name-panel {
  margin-top: 0;
  margin-left: 0;
  margin-right: 0
}
