<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <?php
    $current="Documentation";
    require "head.div";
?>
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
        openMSX is an emulator for the MSX home computer system. Its goal is to emulate all
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
        <a href="http://cbios.sourceforge.net/">C-BIOS</a> is a free BIOS
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

    <h2>Installing and Running openMSX</h2>

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

      <dt class="toc"><a class="external" href="http://openmsx.sourceforge.net/manual/commands.html">Console Command Reference</a></dt>
      <dd>
      An overview of all commands and settings that can be used from the openMSX built in console. Check this if you want to know exactly how to control openMSX. Because the current openMSX Catapult GUI is running behind in functionality, it is also useful to read this for some common settings not supported in Catapult yet.
      </dd>

      <dt class="toc"><a class="external" href="http://openmsx.sourceforge.net/manual/diskmanipulator.html">Diskmanipulator</a></dt>
      <dd>
      The <code>diskmanipulator</code> command is so powerful that we made a separate
      manual for it. Use it to create (hard)disk images, import files to them, export
      files from them, etc.
      </dd>

    </dl>

    <h2>Installing and Running Catapult</h2>

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
      <dt class="toc"><a href="http://openmsx.sourceforge.net/manual/openmsx-control.html">Controlling openMSX from External Applications</a></dt>
      <dd>
	A guide for application developers who want to control openMSX from their own programs. Very useful if you're planning to make a launcher, GUI, debugger or another kind of external program that needs to control openMSX.
      </dd>
      <dt class="toc"><a href="http://openmsx.sourceforge.net/doxygen">Source Code Documentation</a></dt>
      <dd>
        Source code documentation generated using Doxygen.
      </dd>
    </dl>
    <p>
    There is additional documentation for (would-be) developers in <a class="external" href="http://svn.sourceforge.net/viewvc/openmsx/openmsx/trunk/doc/">the
<code>doc</code> directory in the openMSX SVN tree</a>.
    </p>
  </div>
  <div id="footer">
    $Id$
  </div>
</body>
</html>
