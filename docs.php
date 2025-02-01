<!DOCTYPE html>
<html>
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
        <a href="/manual/faq.html#c-bios">
          All I get is "Cartridge not found." What's wrong?
        </a>
      </dt>
      <dd>
        Nothing, actually. Your openMSX is running a machine named 'C-BIOS'.
        <a href="http://cbios.sourceforge.net/">C-BIOS</a> is a free BIOS
        for MSX, which&mdash;like openMSX&mdash;is still in development, and
        therefore doesn't provide all functionality to run a complete MSX
        machine, yet. <br />
	<br />
	It can, however, still load and run ROM files,
	such as homebrew games obtained from the
	<a href="https://www.msxdev.org/">MSXdev competition</a>, or
	<a href="https://www.msx.org/wiki/Copying_cartridge_software">dumped</a>
	from your own cartridges.<br />
	To run these files, just drag-and-drop them onto the open openMSX
	window or shortcut, or watch this video showcasing one of the other
	<a href="https://www.youtube.com/watch?v=H7nPJdsRaRM">ways to load ROMs</a>.<br />
	<br />
        Read the <a href="/manual/setup.html">Setup Guide</a>
        to learn how to make openMSX emulate real MSX machines.
      </dd>

      <dt class="toc">
        <a href="/manual/faq.html">More Frequenty Asked Questions<!-- &raquo; --></a>
      </dt>
      <dd>
        The openMSX FAQ answers more frequently asked questions. 
      </dd>
    </dl>

    <h2>Installing and Running openMSX</h2>

    <dl>
      <dt class="toc"><a href="/manual/compile.html">Compilation Guide</a></dt>
      <dd>
        This guide describes how you can get the openMSX sources and compile
        them. If you downloaded a binary release, you can skip this.
      </dd>

      <dt class="toc"><a href="/manual/setup.html">Setup Guide</a></dt>
      <dd>
        This guide describes how you can configure openMSX to emulate
        actual MSX machines.  It also describes how you can have openMSX
        start up with your personal settings, how you can configure openMSX
        and your system for optimal performance, and several other
        configuration related topics.
      </dd>

      <dt class="toc"><a href="/manual/user.html">User's Manual</a></dt>
      <dd>
        This manual describes all the things you can do with openMSX once
        it is fully running.
      </dd>

      <dt class="toc"><a class="external" href="/manual/commands.html">Console Command Reference</a></dt>
      <dd>
      An overview of all commands and settings that can be used from the openMSX built in console. Check this if you want to know exactly how to control openMSX. Because the current openMSX Catapult GUI is running behind in functionality, it is also useful to read this for some common settings not supported in Catapult yet.
      </dd>

      <dt class="toc"><a class="external" href="/manual/diskmanipulator.html">Diskmanipulator</a></dt>
      <dd>
      The <code>diskmanipulator</code> command is so powerful that we made a separate
      manual for it. Use it to create (hard)disk images, import files to them, export
      files from them, etc.
      </dd>

    </dl>

    <h2>Installing and Running Catapult</h2>

    <p>
    Please note that Catapult isn't maintained anymore. We encourage you to use the built-in GUI in openMSX 20.0 and later instead. Use the documentation below only as a historic reference or when you insist on using Catapult.
    </p>

    <dl>
      <dt class="toc"><a href="/catapult-manual/compile.html">Compilation Guide</a></dt>
      <dd>
        This guide describes how you can get the Catapult sources and
        compile them. If you downloaded a binary release, you can skip this.
      </dd>

      <dt class="toc"><a href="/catapult-manual/user.html">User's Manual</a></dt>
      <dd>
        This manual describes all the things you can do with Catapult
        once it is fully running.
      </dd>
    </dl>

    <h2>Documentation For Developers</h2>

    <dl>
      <dt class="toc"><a href="/manual/openmsx-control.html">Controlling openMSX from External Applications</a></dt>
      <dd>
	A guide for application developers who want to control openMSX from their own programs. Very useful if you're planning to make a launcher, GUI, debugger or another kind of external program that needs to control openMSX.
      </dd>
      <!--<dt class="toc"><a href="/doxygen">Source Code Documentation</a></dt>
      <dd>
        Source code documentation generated using Doxygen.
      </dd>-->
      <dt class="toc"><a href="/vdp-vram-timing/vdp-timing.html">V9938 VRAM timings</a></dt>
      <dd>
        Specific V9938 timing information as measured and analyzed by some openMSX Team members. Part 1.
      </dd>
      <dt class="toc"><a href="/vdp-vram-timing/vdp-timing-2.html">V9938 VRAM timings, part II</a></dt>
      <dd>
        Specific V9938 timing information as measured and analyzed by some openMSX Team members. Part 2.
      </dd>
    </dl>
    <p>
    There is additional documentation for (would-be) developers in <a class="external" href="https://github.com/openMSX/openMSX/tree/master/doc">the <code>doc</code> directory in the openMSX code tree</a>.
    </p>
  </div>
</body>
</html>
