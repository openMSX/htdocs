<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <?php
    $current="Features";
    require "head.div";
?>
</head>
<body>
  <?php require "title.div"; ?>
  <?php require "navigation.div"; ?>
  
  <div id="content">
    <h1>Features</h1>
    <p>
      Here are some highlights of the features of the latest release (0.6.0).
    </p>
    
    <h2>Legend</h2>
    <ul class="features">
      <li>
        <span class="new">New!</span>
        <span class="descript">New feature since last release</span>
      </li>
      <li>
        <span class="uniq">Unique!</span>
        <span class="descript">Unique feature for an MSX emulator</span>
      </li>
      <li>
        <span class="first">1st!</span>
        <span class="descript">openMSX was the first MSX emulator to have
           this feature</span>
      </li>
      <li>
        <span class="cool">Cool!</span>
        <span class="descript">Particularly cool feature</span>
      </li>
    </ul>
    
    <!-- ------------------------------------------------------------- -->
    
    <h2>General</h2>
    <ul class="features">
      <li>
        <span class="new">New!</span>
        <span class="descript">Binary for Mac OS X</span>
      </li>
      <li>
        <span class="uniq">Unique!</span> 
        <span class="descript">
          Command interface via pipes or a (UNIX domain) socket:
          control openMSX with any external application
        </span>
      </li>
      <li><span class="uniq">Unique!</span>
        <span class="descript">
          TCL scripting: enhance openMSX with powerful scripts
        </span>
      </li>
      <li>
        <span class="uniq">Unique!</span>
        <span class="descript">
          System ROMs are specified and found with their SHA1 sums or
          file names as a fall back
        </span>
      </li>
      <li>
        <span class="first">1st!</span>
        <span class="descript">
          `Real time timing', using the specially developed EmuTime model
        </span>
      </li>
      <li>
        <span class="first">1st!</span>
        <span class="descript">
          Pixel accurate rendering: horizontal screensplits are rendered
          almost correctly (Unknown Reality, Verti-demo)
        </span>
      </li>
      <li>
        <span class="cool">Cool!</span>
        <span class="descript">
          Debian and Gentoo packaging, shortly after the release
        </span>
      </li>
      <li>
        <span class="cool">Cool!</span>
        <span class="descript">
          openMSX Catapult: the optional GUI for openMSX
        </span>
        </li>
      <li>
        <span class="cool">Cool!</span>
        <span class="descript">
          On Screen Display, with LEDs for e.g. power, FDD, capsLock and 
          Rensha Turbo
      </span></li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          For Linux, Windows, MacOS X (also support for Tiger with GCC 4),
          FreeBSD, NetBSD and OpenBSD systems
        </span>
      </li> 
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Installer for Windows
        </span>
      </li> 
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Advanced build system
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Manuals online and in distribution
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          More than 75 MSX machine hardware configurations included
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          More than 30 MSX extension hardware configurations included
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          MMX and extended-MMX optimisations for rendering
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          DirectSound sound driver for MS Windows
        </span>
      </li>
    </ul>
    
    <!-- ------------------------------------------------------------- -->

    <h2>MSX hardware emulated</h2>
    <ul class="features">
      <li><span class="new">New!</span>
        <span class="descript">
          192kB VRAM (extended VRAM)
        </span>
      </li>
      <li><span class="new">New!</span>
        <span class="descript">
          ADVRAM
        </span>
      </li>
      <li><span class="new">New!</span>
        <span class="descript">
          Magic key dongle
        </span>
      </li>
      <li>
        <span class="uniq">Unique!</span>
        <span class="descript">
          JoyNet (experimental; connected to TCP/IP of host OS)
        </span>
      </li>
      <li>
        <span class="uniq">Unique!</span>
        <span class="descript">
          Sunrise GFX9000
        </span>
      </li>
      <li>
        <span class="uniq">Unique!</span>
        <span class="descript">
          Slot expander
        </span>
      </li>
      <li>
        <span class="first">1st!</span>
        <span class="descript">
          Tetris II Special Edition dongle
        </span>
      </li>
      <li>
        <span class="first">1st!</span>
        <span class="descript">
          MSX Bunsetsu Henkan Jisyo ROM (National FS-SR021/FS-4000/FS-4500/4700F)
        </span>
      </li>
      <li>
        <span class="first">1st!</span>
        <span class="descript">
           12&times;12 dot kanji (National FS-4600)
        </span>
      </li>
      <li>
        <span class="cool">Cool!</span>
        <span class="descript">
          Interlacing, real or deinterlaced
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Almost all MSX systems
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Different CPU clock speeds, including those for the Panasonic
          MSX2+ machines
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Almost all known cartridge mapper types via autodetection or the
          included ROM database, including:
          <ul class="features">
            <li>
              <span class="first">1st!</span>
              <span class="descript">
                Panasonic FS-CA1 MSX Audio
              </span>
            </li>
            <li>
              <span class="first">1st!</span>
              <span class="descript">
                National mapper type used for internal software
              </span>
            </li>
            <li>
              <span class="none">&nbsp;</span>
              <span class="descript">
                Panasonic FS-A1FM internal mapper, with firmware switch
              </span>
            </li>
            <li>
              <span class="none">&nbsp;</span>
              <span class="descript">
                Panasonic mapper type used for internal software
                (e.g. MSX-View)
              </span>
            </li>
            <li>
              <span class="none">&nbsp;</span>
              <span class="descript">
                ROMs with special headers or which start from basic,
                like Nausicaa, Pairs, etc.
              </span>
            </li>
            <li>
              <span class="none">&nbsp;</span>
              <span class="descript">
                All (?) ROMs with SRAM (Hydlide 2, Xanadu, Wizardry,
                many Koei games, Daisenryaku, etc.)
              </span>
            </li>
            <li>
              <span class="none">&nbsp;</span>
              <span class="descript">
                 Cross Blaim
              </span>
            </li>
            <li>
              <span class="none">&nbsp;</span>
              <span class="descript">
                R-Type
              </span>
            </li>
            <li>
              <span class="none">&nbsp;</span>
              <span class="descript">
                Harry Fox Yuki No Maou-Hen
              </span>
            </li>
            <li>
              <span class="none">&nbsp;</span>
              <span class="descript">
                Korean multi-game ROMs: Zemmix 126, Game's 80, Zemmix 64
                and MSX90-collection
              </span>
            </li>
          </ul>
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Almost all MSX sound devices:
          <ul class="features">
            <li>
              <span class="first">1st!</span>
              <span class="descript">
                MSX-MIDI (turboR)
              </span>
            </li>
            <li>
              <span class="uniq">Unique!</span>
              <span class="descript">
                PCM input (sampling) for turbo R via a .wav file
              </span>
            </li>
            <li>
              <span class="first">1st!</span>
              <span class="descript">
                PCM output and hardware PCM mute (turboR)
              </span>
            </li>
            <li>
              <span class="first">1st!</span>
              <span class="descript">
                SIMPL/Covox (sound via the printer port)
              </span>
            </li>
            <li>
              <span class="cool">Cool!</span>
              <span class="descript">
                Moonsound
              </span>
            </li>
            <li>
              <span class="cool">Cool!</span>
              <span class="descript">
                "Moonblaster Stereo": MSX Music on one channel,
                MSX Audio on the other
              </span>
            </li>
            <li>
              <span class="none">&nbsp;</span>
              <span class="descript">
                Konami's Majutsushi and Synthesizer DAC
              </span>
            </li>
            <li>
              <span class="none">&nbsp;</span>
              <span class="descript">
                SCC and SCC+
              </span>
            </li>
            <li>
              <span class="none">&nbsp;</span>
              <span class="descript">
                Checkmark FM Stereo PAK
              </span>
            </li>
          </ul>
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Many MSX storage (disk/SRAM) systems:
          <ul class="features">
            <li>
              <span class="first">1st!</span>
              <span class="descript">
                Sunrise IDE interface with harddisk <!-- CD-ROM is unique! -->
              </span>
            </li>
            <li>
              <span class="uniq">Unique!</span>
              <span class="descript">MegaRAM Disk</span>
            </li> 
            <li>
              <span class="first">1st!</span>
              <span "class="descript">
                PAC (Panasonic SW-M001)
              </span>
            </li>
            <li>
              <span class="first">1st!</span>
              <span "class="descript">
                Sony HBI-55 datacartridge
              </span>
            </li>
            <li>
              <span class="none">&nbsp;</span>
              <span class="descript">MegaRAM</span>
            </li>
            <li>
              <span class="none">&nbsp;</span>
              <span class="descript">
                MSX-DOS2</span>
            </li>
            <li>
              <span class="none">&nbsp;</span>
              <span class="descript">
                Floppy disk controller (WD2793 and National MB8877A fully
                supported, including formatting); also partial support for
                TC8566AF and Microsol based FDCs
              </span>
            </li>
          </ul>
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Overscan
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Kanji JIS ROM 1 and 2
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Mouse and joystick (with option to use the keyboard as joystick)
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Tape via CAS and WAV files (real recorded tape image);
          CAS files can be converted to WAV on the fly, cassette sounds
          are audible, cassettes can be rewinded and one can record to
          a new WAV cassette image
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          MSX RS-232 (8255 UART)
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          MSX printer support by logging the output to a file
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Joystick emulation for mouse (a feature that the Philips SBC-3810
          and Sony MOS-1 and similar mice have)
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Rensha turbo auto fire support
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          turboR pause (button and hardware) support
        </span>
      </li>
    </ul>
    
    <!-- ------------------------------------------------------------- -->

    <h2>Emulator Extras</h2>
    <ul class="features>
      <li>
        <span class="new">New!</span>
        <span class="descript">
          Optional automatical speed up during disk or cassette action
        </span>
      </li>
      <li>
        <span class="new">New!</span>
        <span class="descript">
          Optional automatical loading of cassettes in CAS format
        </span>
      </li>
      <li>
        <span class="uniq">Unique!</span>
        <span class="descript">
          XML files to specify the hardware to be emulated, so you actually
          emulate specific MSX machines
        </span>
      </li>
      <li>
        <span class="uniq">Unique!</span>
        <span class="descript">
          Debug device: write data to special I/O ports and it gets logged
          to stdout or a file in a format you specify. Very useful if you
          develop MSX assembly programs in openMSX
        </span>
      </li>
      <li>
        <span class="uniq">Unique!</span>
        <span class="descript">
          Console with alpha-blended background and file and command
          completion
        </span>
      </li>
      <li>
        <span class="uniq">Unique!</span>
        <span class="descript">
          Support for .xsa (compressed) diskimages
        </span>
      </li>
      <li>
        <span class="uniq">Unique!</span>
        <span class="descript">
          Keymatrixdown/up commands to automatically push keys
          (like pressing CTRL at boot automatically)
        </span>
      </li>
      <li>
        <span class="uniq">Unique!</span>
        <span class="descript">
          Console commands to enable demo play with timers
        </span>
      </li>
      <li>
        <span class="first">1st!</span>
        <span class="descript">
          Dir-as-disk feature: Use a directory on your hard
          disk as disk image in openMSX (experimental)
        </span>
      </li>
      <li>
        <span class="cool">Cool!</span>
        <span class="descript">
          Debug command (including conditional break points):
          read/write many parts of the MSX system; mainly useful to be used
          in external debug applications via the stdin/socket command
          interface
        </span>
      </li>
      <li>
        <span class="cool">Cool!</span>
        <span class="descript">
          Disk manipulator toolkit; transfer files from the host OS to the MSX
          disks (disk images and hard disk images with partitions are all
          supported) and vice versa, create new (hard) disk images and format
          them, etc.
        </span>
      </li>
      <li>
       <span class="none">&nbsp;</span>
       <span class="descript">
         Various screen renderers available:
         <ul class="features>
           <li>
             <span class="none">&nbsp;</span>
             <span class="descript">
               Plain SDL renderer, with support for 3 different scaling
               factors (1&times;=320&times;240, 2&times;=640&times;480
               and 3&times;=960&times;720) and several scaling algorithms
               like: <a href="http://www.hiend3d.com/">hq</a>, hqlite,
               <a href="http://elektron.its.tudelft.nl/~dalikifa/">SaI</a>
               and <a href="http://scale2x.sf.net/">scaleNx</a>
             </span>
           </li>
           <li>
             <span class="cool">Cool!</span>
             <span class="descript">
               640&times;480 openGL renderer that makes advantage of
               video hardware acceleration and has an extra special effect:
               afterglow
             </span>
           </li>
         </ul>
       </span>
     </li>
     <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Scanlines and blur for TV emulation
        </span>
       </li>
       <li>
         <span class="cool">Cool!</span>
         <span class="descript">
           Gamma adjustment setting
         </span>
       </li>
       <li>
         <span class="none">&nbsp;</span>
         <span class="descript">
           Option to run at maximum possible speed
         </span>
       </li>
       <li>
         <span class="none">&nbsp;</span>
         <span class="descript">
           Full screen rendering
         </span>
       </li>
       <li>
         <span class="none">&nbsp;</span>
         <span class="descript">
           (Auto) Frameskip
         </span>
       </li>
       <li>
         <span class="none">&nbsp;</span>
         <span class="descript">
           Speed setting (in percent)
         </span>
       </li>
       <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Mouse cursor grabbing, for windowed mode
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Tunable volumes and channel modes for the individual sound chips
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          All read-only input files (ROM images, disk images, background
          pictures, XML) can be gzipped or zipped and will be transparently
          decompressed by openMSX. <!-- Note that some games require write
          access to their disk in order to run
          (for example, Seed of Dragon) -->
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Adjustable keymap (e.g. for Japanese PC keyboards or to use
          Russian MSX keyboards on a US English PC keyboard)
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Screen shot feature
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Support for IPS patches for ROMs and disks
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Sound logger
        </span>
      </li>
    </ul>    

    <!-- ------------------------------------------------------------- -->

    <h2>Coming Up &hellip;</h2>
    <p>
    Here are some highlights of features and improvements that are already in CVS and are likely to be in the next release: 
    </p>
    
    <ul class="features>
    <!--  <li>(nothing yet, we just released 0.6.0) -->
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Fixed all (de)interlacing issues
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Suport for building a redistributable binary for Mac OS X
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Added run-time insertion and removal of cartridges and other extensions
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Added joytap multiplayer controller support
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Improvements on accuracy of Konami mapper
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Added noise video effect
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Added basic Uninitialized Memory Read detector (for MSX programs)
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Added brightness and contrast video settings
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Added run-time switchable machines
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Fixed Microsol FDC to support DDX 3.0 diskROM
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Fixed a bug in MegaRAM, so that it supports 2048kB as well
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          New experimental renderer: SDLGL2, based on OpenGL 2.0 features, including fragment (pixel) shaders
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          New renderer: SDLGL-PP: based on SDL, but implements all post-processing in OpenGL, mostly using fragment (pixel) shaders; features: simple and ScaleNx scalers, noise effect, 4x scaling, "TV" scaler
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Improved help for TCL based commands and added tab-completion support for them
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Added support to emulate any non-colour monitor, like monochrome-green, amber or white
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Added warning when a DI/HALT hangup occurred
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Added meta-data to extensions (not used yet)
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Several V9990 fixes, including basic timing
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          New boot-sector setting, to let DirAsDsk use a DOS1 or a DOS2 boot-sector
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Added support for single-sided disk drives
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Added I/O and memory watch points to the debugger
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Fixed bug in the IDE hard disk size setting on Windows: before this, when you specify a bigger size than the current one, the hard disk image would get corrupted!
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Improvements on VDP timing accuracy: length of horizontal blank
        </span>
      </li>
    </ul>
  </div>
  <div id="footer">
    $Id$
  </div>
</body>
</html>
