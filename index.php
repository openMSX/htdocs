<!DOCTYPE html>
<html>
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
      <span class="date">2017 August 3</span>
      openMSX 0.14.0 released
    </h2>
    <p>
    openMSX 0.14.0&mdash;Blasphemy&mdash;is another mix of some new features and additions and a lot of smaller fixes and improvements. This release adds support for Konami Ultimate Collection and basic emulation for the Spectravideo SVI-318 and SVI-328 pre-MSX computers, increases FDC accuracy in such a way that we think all copy protections (captured in a DMK file) should now run in openMSX. Moreover, we now put the SDLGL-PP renderer as the default, so let us know how that works for you. You can of course always set the old default setting for your system if you don't like SDLGL-PP. But then we would really like to know why... We also removed the Windows DirectX sound driver, as it was buggy and caused a lot of complaints. And finally, we added a button in the top left corner to easily invoke the OSD menu.Together with openMSX an updated version of Catapult, our user-friendly GUI, was released. We again made a small amount of improvements: added noise control to Video Control Page, fixed the browse extension for the openMSX executable and some build support improvements. Please <a href="https://raw.githubusercontent.com/openMSX/openMSX/RELEASE_0_14_0/doc/release-notes.txt">read the release notes</a> for details of the openMSX changes.
    </p>
    <h2>
      <span class="date">2016 July 31</span>
      openMSX 0.13.0 released
    </h2>
    <p>
    openMSX 0.13.0&mdash;Black Cat&mdash;again was meant to be (mostly) a bug fix release, but again it also has some nice additions and improvements to enjoy. Important improvements are much better support for VDP I/O delay in turbo machines (fixing graphics issues due to too fast VDP access there), more accurate MSX1 color palette, progress reporting for long operations and ALSA MIDI-out support for Linux. This is also one of the first releases that drops support for older platforms: Windows XP, Dingoo A320 (but introducing support for GCW Zero) and non-64-bit MacOSX. If you still want to run openMSX on these, you'll be stuck on using a previous release or start maintaining these platforms yourself. Together with openMSX an updated version of Catapult, our user-friendly GUI, was released. We again made a small amount of improvements: fixed Catapult interrupting replay directly after loading it, performance improvements while reversing, fixed drag-and-drop for media and some smaller bug fixes. Please <a href="https://raw.githubusercontent.com/openMSX/openMSX/RELEASE_0_13_0/doc/release-notes.txt">read the release notes</a> for details of the openMSX changes.
    </p>
    <h2>
      <span class="date">2015 September 15</span>
      openMSX 0.12.0 released
    </h2>
    <p>
    openMSX 0.12.0&mdash;Mulligan&mdash;was going to be (mostly) a bug fix release. But at the end we also got inspired by Grauw to add a lot of MIDI devices. And, reviewing what we changed the last 10 months, we saw that we also got loads of help from several people to add many new machine configurations and added some fun stuff like Sensor Kid and (experimental) Beer IDE emulation. On the emulator features category we give you stuff like triplesize video recording, some TAS enhancements and a callback for too fast VRAM access. So, enjoy this 'various features and bug fixes' release! Together with openMSX an updated version of Catapult, our user-friendly GUI, was released. We again made a small amount of improvements: no need to specify the share dir anymore, automatically fetch the list of supported mappers from openMSX, fix handling of MIDI connectors and some small bug fixes. Please <a href="https://raw.githubusercontent.com/openMSX/openMSX/RELEASE_0_12_0/doc/release-notes.txt">read the release notes</a> for details of the openMSX changes.
    </p>
    <h2>
      <span class="date">2015 June 25</span>
      openMSX on the move
    </h2>
    <p>
    As some core openMSX developers felt uncomfortable at SourceForge.net given the <a href="http://arstechnica.com/information-technology/2015/05/sourceforge-grabs-gimp-for-windows-account-wraps-installer-in-bundle-pushing-adware/">recent events</a>, we decided to say goodbye to them after 14 years. So far we have moved our code and tickets to GitHub and our website to private hosting. With that, please update your git clones and links to our website! Our GitHub project page (where you can find the code and the ticket system) is at <a href="https://github.com/openMSX/">https://github.com/openMSX/</a> and the official URL of our web site is now <a href="http://openmsx.org/">http://openmsx.org</a>. The coming weeks we will see if and how we will move the rest of our stuff off of SourceForge.net.
    </p>
    <h2>
      <span class="date">2014 November 8</span>
      openMSX 0.11.0 released
    </h2>
    <p>
    openMSX 0.11.0&mdash;NotOneButDoubleOne&mdash;brings you the following important new features: VDP access timing now also for MSX1 modes (corruption with too fast VRAM access will be visible now), implementation of most defailed differences between all used VDP chips and emulation of MegaFlashROM SCC+ SD. On top of that, there are some important (long standing) bug fixes, like the proper implementation of envelopes for MSX-AUDIO, fixing for example "Copy is Crime" by Impact. And last but not least, a lot of work was done under the bonnet, giving you even better performance and preparations for the future. Together with openMSX an updated version of Catapult, our user-friendly GUI, was released. We only made some minor improvements to it this time. Please <a href="http://sourceforge.net/projects/openmsx/files/openmsx/0.11.0/README_release-notes.txt/view">read the release notes</a> for details of the openMSX changes.
    </p>
     <h2>
      <span class="date">2014 May 1</span>
      openMSX 0.10.1 released
    </h2>
    <p>
    openMSX 0.10.1&mdash;StillNotOneToo&mdash;mostly fixes bugs we introduced with 0.10.0 or were already present for a bit longer... sorry for those, but most should be fixed now :) There are also some small but nice additions, like much extended MIDI support on Mac (thanks Grauw!), support for harddisk images in the OSD menu and more fine grained control in which slots carts and extensions will end up. Together with openMSX an updated version of Catapult, our user-friendly GUI, was released. Again, we actually made some improvements to it this time, mostly more code cleanups to enable quite some bug fixes (mainly in the settings tab), but also some features, like ability to change cartridges at run time and support for hard disks. Please <a href="http://sourceforge.net/projects/openmsx/files/openmsx/0.10.1/README_release-notes.txt/view">read the release notes</a> for details of the openMSX changes.
    </p>
    <h2>
      <span class="date">2014 January 5</span>
      openMSX 0.10.0 released
    </h2>
    <p>
    openMSX 0.10.0&mdash;StillNotOne&mdash;adds many larger and smaller features, but most outstanding are: cycle accurate VDP command engine timing, an Android port, subdirectory support for dir-as-disk and Neos MA-20 support. These features meant a lot of work was done in practically all parts of the code, but at the same time we also freshened up much of the code using many of the new C++11 language features. All in all, it was time to release this stuff officially... Together with openMSX an updated version of Catapult, our user-friendly GUI, was released. We actually made some improvements to it this time, mostly code cleanups to make it easier to help us with this subproject, but also some small features, like ability to set up multiple IPS files, control video source and disable sprite settings and DMK support in the file filters, next to some smaller bug fixes. Please <a href="http://sourceforge.net/projects/openmsx/files/openmsx/0.10.0/README_release-notes.txt/view">read the release notes</a> for details of the openMSX changes.
    </p>
    <h2>
      <span class="date">2013 April 23</span>
      openMSX moves to Git
    </h2>
    <p>
    Today we moved all openMSX projects to Git (still on SourceForge.net), after having used Subversion for about 6 and a half years. Git is now the state of the art on source code management and rapidly getting more popular. Anyway, this means that you have to use a different way to get the latest openMSX sources now: click on <a href="https://sourceforge.net/p/openmsx/_list/git">one of the repos</a> to see the instructions at the top. The Subversion repository will be deleted soon. Also, we've converted the project on SF.net from classic to Allura. You'll notice that when visiting <a href="https://sourceforge.net/projects/openmsx/">the project page</a>, especially when you check the new Tickets system, e.g. the <a href="https://sourceforge.net/p/openmsx/bugs/">bug tracker</a>.
    </p>
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
    openMSX 0.7.1&mdash;IWCA approved&mdash;includes a brand new installer with binaries which have been created in a brand new way, using Microsoft Visual C++ 2008. This means smaller binaries and also support for 64-bit Windows operating systems. Also, several long standing problems have been fixed in the Windows release of openMSX. E.g., it now includes full support for unicode! For the rest we have mostly fixed smaller issues and added some cool demonstrations of what one can do with the combination of (Tcl) scripting, the debug command and the OSD. Together with openMSX an updated version of Catapult, our user-friendly GUI, was released. Please <a href="http://sourceforge.net/project/shownotes.php?group_id=38274&amp;release_id=693184">read the release notes</a> for details.
    </p>
     <h2>
      <span class="date">2009 January 7</span>
      openMSX 0.7.0 released
    </h2>
    <p>
    openMSX 0.7.0&mdash;Lazarus&mdash;includes the long awaited save states feature, fully automatic host to MSX keyboard mapping and an improved dir-as-disk feature with full transparency. Furthermore, we have added a technology preview of our new On-Screen-Display. Also we have an even better performance and several other enhancements and bug fixes on many places. Together with openMSX an updated version of Catapult, our user-friendly GUI, was released. Please <a href="http://sourceforge.net/project/shownotes.php?group_id=38274&amp;release_id=652096">read the release notes</a> for details.
    </p>
    <h2>
      <span class="date">2007 December 11</span>
      openMSX 0.6.3 released
    </h2>
    <p>
    openMSX 0.6.3&mdash;Crystal Clear&mdash;includes advanced resampling for aliasing-free sound, a stereo balance setting for each sound chip, recording of separate channels, PSG detune and vibrato and some non-sound-related improvements as well. Also, a hang on Windows PCs with multi-core/HT CPUs is fixed. Together with openMSX an updated version of Catapult, our user-friendly GUI, was released. Please <a href="http://sourceforge.net/project/shownotes.php?group_id=38274&amp;release_id=560483">read the release notes</a> for details.
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
    openMSX 0.6.2&mdash;Oscar&mdash;includes video recording, more realistic PSG and SCC sound, significant optimizations, easier to use game trainers, as well as a lot of other improvements and bugfixes. Together with openMSX a new version of Catapult, our user-friendly GUI, was released. Please <a href="http://sourceforge.net/project/shownotes.php?group_id=38274&amp;release_id=501347">read the release notes</a> for details.
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
    openMSX 0.6.1&mdash;Chernoton Meltdown&mdash;includes runtime switchable machines and extensions, a lot of new video filters (some of which use pixel shaders), as well as a lot of other improvements and bugfixes. Together with openMSX a new version of Catapult, our user-friendly GUI, was released. Please <a href="http://sourceforge.net/project/shownotes.php?release_id=435794&amp;group_id=38274">read the release notes</a> for details.
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

</body>
</html>
