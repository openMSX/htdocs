<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <?php
    $current="Documentation";
    require "head.div";
?>
</head>
<body>
  <?php require "title.div"; ?>
  <?php require "navigation.div"; ?>
  
  <div id="content">
    <h1>Documentation</h1>

    <h2>Most Frequently Asked Questions</h2>

    <dl>
      <dt class="toc">
        <a href="http://en.wikipedia.org/wiki/OpenMSX">What is openMSX?</a>
      </dt>
      <dd>
        openMSX is emulator for the MSX home computer system. Its goal is to emulate all
        aspects of the MSX with 100% accuracy: perfection in emulation. 
	You can find everything you ever wanted to know about MSX, and more, in
        <a href="http://faq.msxnet.org/">the Ultimate MSX FAQ</a>.
      </dd>
      
      <dt class="toc">
        <a href="http://openmsx.sourceforge.net/manual/faq.html#c-bios">
          All I get is "Cartridge not found." What's wrong?
        </a>
      </dt>
      <dd>
        Nothing, actually. Your openMSX is running a machine named 'C-BIOS'.
        <a href="http://cbios.sourceforge.net/">C-BIOS</a> is a GPL'ed BIOS
        for MSX, which&mdash;like openMSX&mdash;is still in development, and
        therefore doesn't provide all functionality to run a complete MSX
        machine, yet. 
        Read the <a href="http://openmsx.sourceforge.net/manual/setup.html">Setup Guide</a>
        to learn how to make openMSX emulate real MSX machines.
      </dd>
      
      <dt class="toc">
        <a href="http://openmsx.sourceforge.net/manual/faq.html">More Frequenty Asked Questions<!-- &raquo; --></a>
      </dt>
      <dd>
        The openMSX FAQ answers more frequently asked questions. 
      </dd>
    </dl>

    <h2>Installing And Running openMSX</h2>

    <dl>
      <dt class="toc"><a href="http://openmsx.sourceforge.net/manual/compile.html">Compilation Guide</a></dt>
      <dd>
        This guide describes how you can get the openMSX sources and compile
        them. If you downloaded a binary release, you can skip this.
      </dd>

      <dt class="toc"><a href="http://openmsx.sourceforge.net/manual/setup.html">Setup Guide</a></dt>
      <dd>
        This guide describes how you can configure openMSX to emulate
        actual MSX machines.  It also describes how you can have openMSX
        start up with your personal settings, how you can configure openMSX
        and your system for optimal performance, and several other
        configuration related topics.
      </dd>

      <dt class="toc"><a href="http://openmsx.sourceforge.net/manual/user.html">User's Manual</a></dt>
      <dd>
        This manual describes all the things you can do with openMSX once
        it is fully running.
      </dd>
    </dl>

    <h2>Installing And Running Catapult</h2>
    
    <dl>
      <dt class="toc"><a href="http://openmsx.sourceforge.net/catapult-manual/compile.html">Compilation Guide</a></dt>
      <dd>
        This guide describes how you can get the Catapult sources and
        compile them. If you downloaded a binary release, you can skip this.
      </dd>

      <dt class="toc"><a href="http://openmsx.sourceforge.net/catapult-manual/user.html">User's Manual</a></dt>
      <dd>
        This manual describes all the things you can do with Catapult
        once it is fully running.
      </dd>
    </dl>
    
    <h2>Documentation For Developers</h2>
    
    <dl>
      <dt class="toc"><a href="http://openmsx.sourceforge.net/html">Source Code Documentation</a></dt>
      <dd>
        Source code documentation generated using Doxygen.
      </dd>
    </dl>
  </div>
  <div id="footer">
    $Id$
  </div>
</body>
</html>
