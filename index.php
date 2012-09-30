<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php 
  $current="Home";
  require "head.div";
?>
<body>
<?php require "title.div"; ?>
<?php require "navigation.div"; ?>

  <div id="content">
    <h1>News</h1>
    <h2>
      <span class="date">2012 September 30</span>
      openMSX 0.9.1 released
    </h2>
    <p>
    openMSX 0.9.1&mdash;Enigma Take Two&mdash;mostly fixes a bug in dir-as-disk that was introduced in openMSX 0.9.0, when adding support for the DMK format and low level disk emulation. We not only fixed that bug, we rewrote dir-as-disk almost completely, making it a lot more robust. Together with openMSX an updated version of Catapult, our user-friendly GUI, was released. Please <a href="http://sourceforge.net/projects/openmsx/files/openmsx/0.9.1/README_release-notes.txt/view">read the release notes</a> for details.
    </p>
    <h2>
      <span class="date">2012 August 12</span>
      openMSX 0.9.0 released
    </h2>
    <p>
    openMSX 0.9.0&mdash;Enigma&mdash;improves a lot on accuracy of floppy support, especially by the introduction of support for the DMK format. This means it should be possible to run all MSX disk software without patching it. Furthermore, our efforts to improve performance has some results: start up time has almost halved on a Dingoo A320! Together with openMSX an updated version of Catapult, our user-friendly GUI, was released. Please <a href="http://sourceforge.net/projects/openmsx/files/openmsx/0.9.0/README_release-notes.txt/view">read the release notes</a> for details.
    </p>
    <h2>
      <span class="date">2012 January 25</span>
      openMSX 0.8.2 released
    </h2>
    <p>
    openMSX 0.8.2&mdash;Small Guy&mdash;mostly fixes loads of bugs and adds many smaller features and improvements. Together with openMSX an updated version of Catapult, our user-friendly GUI, was released. Please <a href="http://sourceforge.net/projects/openmsx/files/openmsx/0.8.2/README_release-notes.txt/view">read the release notes</a> for details.
    </p>
    <h2>
      <span class="date">2011 March 12</span>
      openMSX 0.8.1 released
    </h2>
    <p>
    openMSX 0.8.1&mdash;Tasmania&mdash;builds on the previous release, in the sense that we worked out the features a little more. We added a lot of scripts to help you with Tool Assisted Speedruns (TAS), one of the reasons openMSX got <a href="http://tasvideos.org/forum/viewtopic.php?p=249886#249886">officially approved</a> as a TAS capable emulator on <a href="http://tasvideos.org/">tasvideos.org</a>. The reverse feature also got some updates while doing this. For the rest we have again mostly fixed smaller issues and added smaller features. Together with openMSX an updated version of Catapult, our user-friendly GUI, was released. Please <a href="http://sourceforge.net/projects/openmsx/files/openmsx/0.8.1/README_release-notes.txt/view">read the release notes</a> for details.
    </p>
    <h2>
      <span class="date">2010 October 17</span>
      openMSX approved for TAS
    </h2>
    <p>
    <a href="http://tasvideos.org/WelcomeToTASVideos.html">TASing</a>&mdash;Tool-Assisted-Speedrun&mdash;is the hobby of creating run-throughs of video games that resemble superhuman-like playing sessions. Its main community web site is <a href="http://tasvideos.org/">tasvideos.org</a> and it has a <a href="http://tasvideos.org/EmulatorResources.html">limited list of approved emulators</a> which can be used to create a new TAS and is accepted for <a href="http://tasvideos.org/Subs-List.html">submission</a>. Today, the site <a href="http://tasvideos.org/forum/viewtopic.php?p=249886#249886">announced</a> that openMSX is now officially approved to submit TASes! The <a href="http://tasvideos.org/2884S.html">first MSX TAS</a> has already <a href="http://tasvideos.org/forum/viewtopic.php?p=249884">been submitted</a> by our team member Vampier, which is of course no surprise. Neither is the game: Metal Gear. Who will improve his speedrun and submit a better TAS? The game is on!
    </p>
    <h2>
      <span class="date">2010 June 6</span>
      openMSX 0.8.0 released
    </h2>
    <p>
    openMSX 0.8.0&mdash;CSI Dresal&mdash;includes two major new features: reverse and Laserdisc. Reverse is similar to what you can do in meisei: you can 'rewind' time with your finger tip, to correct game playing mistakes or inspect what caused a crash. Laserdisc is the Palcom system introduced by Pioneer in 1984: now you can play all the Palcom MSX Laserdisc games in openMSX! With this release we also provide a first official binary package for Dingux on your Dingoo hand held. For the rest we have mostly fixed smaller issues and added smaller features. Together with openMSX an updated version of Catapult, our user-friendly GUI, was released. Please <a href="http://sourceforge.net/projects/openmsx/files/openmsx/0.8.0/release-notes.txt/view">read the release notes</a> for details.
    </p>
    <h2>
      <span class="date">2009 June 30</span>
      openMSX 0.7.2 released
    </h2>
    <p>
    As promised, openMSX 0.7.2 is now available, identical to 0.7.1, except for the already mentioned bug fix. Enjoy!
    </p>
     <h2>
      <span class="date">2009 June 29</span>
      openMSX 0.7.2 will be here soon...
    </h2>
    <p>
    Oops, we found a problem in openMSX 0.7.1, just after we had released it... Due to a small bug in a Tcl script,
openMSX wasn't able to load savestates with paths that contain spaces, which is the most common case on standard Windows installations. 0.7.2 will be available very soon to fix that.
    </p>
    <h2>
      <span class="date">2009 June 28</span>
      openMSX 0.7.1 released
    </h2>
    <p>
    openMSX 0.7.1&mdash;IWCA approved&mdash;includes a brand new installer with binaries which have been created in a brand new way, using Microsoft Visual C++ 2008. This means smaller binaries and also support for 64-bit Windows operating systems. Also, several long standing problems have been fixed in the Windows release of openMSX. E.g., it now includes full support for unicode! For the rest we have mostly fixed smaller issues and added some cool demonstrations of what one can do with the combination of (Tcl) scripting, the debug command and the OSD. Together with openMSX an updated version of Catapult, our user-friendly GUI, was released. Please <a href="http://sourceforge.net/project/shownotes.php?group_id=38274&release_id=693184">read the release notes</a> for details.
    </p>
     <h2>
      <span class="date">2009 January 7</span>
      openMSX 0.7.0 released
    </h2>
    <p>
    openMSX 0.7.0&mdash;Lazarus&mdash;includes the long awaited save states feature, fully automatic host to MSX keyboard mapping and an improved dir-as-disk feature with full transparency. Furthermore, we have added a technology preview of our new On-Screen-Display. Also we have an even better performance and several other enhancements and bug fixes on many places. Together with openMSX an updated version of Catapult, our user-friendly GUI, was released. Please <a href="http://sourceforge.net/project/shownotes.php?group_id=38274&release_id=652096">read the release notes</a> for details.
    </p>
    <h2>
      <span class="date">2007 December 11</span>
      openMSX 0.6.3 released
    </h2>
    <p>
    openMSX 0.6.3&mdash;Crystal Clear&mdash;includes advanced resampling for aliasing-free sound, a stereo balance setting for each sound chip, recording of separate channels, PSG detune and vibrato and some non-sound-related improvements as well. Also, a hang on Windows PCs with multi-core/HT CPUs is fixed. Together with openMSX an updated version of Catapult, our user-friendly GUI, was released. Please <a href="http://sourceforge.net/project/shownotes.php?group_id=38274&release_id=560483">read the release notes</a> for details.
    </p>
     <h2>
      <span class="date">2007 August 27</span>
      No Windows support anymore?? 
    </h2>
    <p>
    We've said it before: we need someone in our team to help us maintain the Windows port of openMSX. At the moment there is no one who provides us structural support for the Windows port. Without a person who can very regularly build and test openMSX and help in case of (rare) Windows specific issues, we cannot maintain the Windows port any longer. We may find a way to build the next release, but even that is uncertain; if we can manage, it will most likely be released (much) later than the Source and Mac versions. If you care and you want to help: please <a href="http://openmsx.sourceforge.net/contact.php">contact us</a> as soon as possible!
    </p>
     <h2>
      <span class="date">2007 April 15</span>
      openMSX 0.6.2 released
    </h2>
    <p>
    openMSX 0.6.2&mdash;Oscar&mdash;includes video recording, more realistic PSG and SCC sound, significant optimizations, easier to use game trainers, as well as a lot of other improvements and bugfixes. Together with openMSX a new version of Catapult, our user-friendly GUI, was released. Please <a href="http://sourceforge.net/project/shownotes.php?group_id=38274&release_id=501347">read the release notes</a> for details.
    </p>
    <h2>
      <span class="date">2006 September 17</span>
      openMSX moves to Subversion
    </h2>
    <p>
    Today we moved the main openMSX project to Subversion (SVN). This means that you have to use a different way to get the latest openMSX sources now. It is explained in the updated online manual, in the <a href="http://openmsx.sf.net/manual/compile.html">Compilation Guide</a>. Snapshots are now also taken from SVN. We removed the snapshot of Catapult, because Catapult as has been released so far is pronounced dead. A rewrite using Python and Qt4 is in the works though. You can get a snapshot of that project, instead.
    </p>
    <p>
    Other news that we forgot to post here: there is a universal binary available for Mac OS X users, see the download section.
    </p>
     <h2>
      <span class="date">2006 July 31</span>
      openMSX 0.6.1 released
    </h2>
    <p>
    openMSX 0.6.1&mdash;Chernoton Meltdown&mdash;includes runtime switchable machines and extensions, a lot of new video filters (some of which use pixel shaders), as well as a lot of other improvements and bugfixes. Together with openMSX a new version of Catapult, our user-friendly GUI, was released. Please <a href="http://sourceforge.net/project/shownotes.php?release_id=435794&group_id=38274">read the release notes</a> for details.
    </p>
    <h2>
      <span class="date">2006 July 23</span>
      Web site restyled
    </h2>
    <p>
      A redesign of the openMSX web site was long overdue. And with the
      restructuring of the site, we've also included 2 different layouts.
      Hurray for CSS :-)
    </p>
    <h2>
      <span class="date">2006 July 23</span>
      openMSX needs <em>you</em>!
    </h2>
    <p>
      That is, if you've got some spare time and want to develop
      fun software for Windows. The openMSX team desperately needs Windows
      developers, both for coding on the openMSX code itself, and also for
      Catapult. Don't hesitate! Fire up you IRC client and visit us at
      #openmsx on Freenode.net. We won't bite. Really!
    </p>

  </div>
  <div id="footer">
    $Id$
  </div>

<!-- Piwik -->
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://apps.sourceforge.net/piwik/openmsx/" : "http://apps.sourceforge.net/piwik/openmsx/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
piwik_action_name = '';
piwik_idsite = 1;
piwik_url = pkBaseURL + "piwik.php";
piwik_log(piwik_action_name, piwik_idsite, piwik_url);
</script>
<object><noscript><p><img src="http://apps.sourceforge.net/piwik/openmsx/piwik.php?idsite=1" alt="piwik"/></p></noscript></object>
<!-- End Piwik Tag -->

</body>
</html>
