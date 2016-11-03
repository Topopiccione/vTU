<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!--
#
# virtual Transcoding Unit
# Author of this file: Marco Beccari
# Italtel and Universita' degli studi di Milano, 2015-6
#
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php  echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
</head>
<body>
<div id="container">
<div id="header">
        <jdoc:include type="modules" name="top" />
    </div>

    <div id="sidebar_left" class="float">
        <jdoc:include type="modules" name="left"/>
    </div>

    <div id="content" class="float">
        <jdoc:include type="component" />
    </div>

    <div id="sidebar_right"class="float">
        <jdoc:include type="modules" name="right"/>
    </div>

    <div id="footer" class="clear">
        <jdoc:include type="modules" name="footer" />
    </div>

</div>
    </body>
</html>
