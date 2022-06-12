<!DOCTYPE html>
<html>
<?php
  $current="Features";
  require "head.div";
?>
<body>
  <?php require "title.div"; ?>
  <?php require "navigation.div"; ?>

  <div id="content">
    <h1>Features</h1>
    <p>
      Here are some highlights of the features of the latest release (18.0).
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
           this feature and we're proud of it</span>
      </li>
      <li>
        <span class="cool">Cool!</span>
        <span class="descript">Particularly cool feature</span>
      </li>
    </ul>

    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

    <h2>General</h2>
    <ul class="features">
     <li>
        <span class="uniq">Unique!</span>
        <span class="descript">
          Command interface via pipes or a (UNIX domain) socket:
          control openMSX with any external application
        </span>
      </li>
      <li><span class="uniq">Unique!</span>
        <span class="descript">
          TCL scripting: enhance openMSX with powerful scripts. There are dozens of scripts included with various purposes: SCC viewer, cheat finder, VGM recorder, audio channel recorder, VU-meters, FPS display, game HUDs/overlays, sprite viewer, info panel, music keyboard display of sound being played, TAS tools, debugging tools, session management, etc. etc.
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
          Timestamped on-demand sync timing: maximum accuracy at the best performance
        </span>
      </li>
      <li>
        <span class="uniq">Unique!</span>
        <span class="descript">
          Cycle accurate VDP command engine timing
        </span>
      </li>
      <li>
        <span class="uniq">Unique!</span>
        <span class="descript">
          Accurate VDP VRAM access timing: like on real hardware, accessing the VDP too fast will result in VRAM corruption. Includes a Tcl callback to debug your programs on this phenomenon
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Emulation of most differences between the different MSX1 VDP's
        </span>
      </li>
      <li>
        <span class="first">1st!</span>
        <span class="descript">
          Pixel accurate rendering: horizontal screen splits are rendered
          (almost) correctly (Unknown Reality, Verti-demo)
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
          On-Screen-Display, with LEDs for e.g. power, FDD, capsLock and
          Rensha Turbo, icons showing openMSX state, graphics shown by
          auxiliary scripts and a completely programmable OSD menu, with many
          common actions/settings in it.)
      </span></li>
       <li>
        <span class="uniq">Unique!</span>
        <span class="descript">
           Fully automatic host to MSX keyboard mapping. You can type on any
           machine with any keyboard layout with any PC keyboard layout. Very
           easy on a Japanese machine, for example!
        </span>
      </li>
       <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
           Save states, which are designed to be fully backwards compatible in future releases and interchangeable between platforms/OS/machines
        </span>
      </li>
       <li>
        <span class="cool">Cool!</span>
        <span class="descript">
           Reverse: go back in time to correct mistakes, replay your actions,
           or step back in time with the debugger to find the cause of a crash.
           Optionally save the full event history to a file. Also with quite
           complete support for <a href="http://www.tasvideos.org/">TAS</a>
        </span>
      </li>
       <li>
        <span class="uniq">Unique!</span>
        <span class="descript">
           Possibility to run multiple machines in one openMSX instance ("tabbed" MSXing!)
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          For Linux, Windows (7+), macOS, (Android 4.1+ up to openMSX 0.15.0), FreeBSD, NetBSD, OpenBSD and OpenDingux (GCW Zero) systems
        </span>
      </li>
      <li>
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
          More than 210 MSX machine (and similar) hardware configurations included
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          More than 100 MSX (and similar) extension hardware configurations included
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          SSE2 optimisations for rendering and resampling
        </span>
      </li>
    </ul>

    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

    <h2>MSX hardware emulated</h2>
    <ul class="features">
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Almost all MSX systems: MSX, MSX2, MSX2+ and turboR generation
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Initial/experimental emulation of the ColecoVision video game system. Includes support for the Super Game Module and the MegaCart mapper, used by many modern homebrew games.
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Initial/experimental emulation of the MSX-precursor system Spectravideo SVI-318 and SVI-328. Note that we are no SVI enthusiasts ourselves, so we rely on others to support these systems properly.
        </span>
      </li>
      <li>
        <span class="new">New!</span>
        <span class="descript">
          Initial/experimental emulation of the Sega SG-1000 console. Note that we are no Sega enthusiasts ourselves, so we rely on others to support these systems properly.
        </span>
      </li>
      <li>
        <span class="first">1st!</span>
        <span class="descript">
          Sunrise GFX9000 and part of Video 9000
        </span>
      </li>
      <li>
        <span class="uniq">Unique!</span>
        <span class="descript">
          Pioneer Palcom Laserdisc system
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
          Almost all known cartridge mapper types via auto detection or the
          included ROM database, including:
        </span>
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
              Korean multi-game ROMs: Zemmix 126, Game's 80, Zemmix 64, Zemina 25-in-1
              and MSX90-collection
            </span>
          </li>
          <li>
            <span class="none">&nbsp;</span>
            <span class="descript">
              Playball and Moero!! Nettou Yakyuu '88 with sample replay
            </span>
          </li>
          <li>
            <span class="none">&nbsp;</span>
            <span class="descript">
              Super Lode Runner
            </span>
          </li>
          <li>
            <span class="none">&nbsp;</span>
            <span class="descript">
              Halnote
            </span>
          </li>
          <li>
            <span class="none">&nbsp;</span>
            <span class="descript">
              Ink (Matra)
            </span>
          </li>
          <li>
            <span class="none">&nbsp;</span>
            <span class="descript">
              Manbow 2 (also 2nd release)
            </span>
          </li>
          <li>
            <span class="uniq">Unique!</span>
            <span class="descript">
              Arc
            </span>
          </li>
          <li>
            <span class="uniq">Unique!</span>
            <span class="descript">
              Super Swangi (a.k.a. Super Altered Beast)
            </span>
          </li>
          <li>
            <span class="uniq">Unique!</span>
            <span class="descript">
              MSXtra (a debugging tool released by PTC which has its own RAM)
            </span>
          </li>
          <li>
            <span class="uniq">Unique!</span>
            <span class="descript">
              MultiROM Collection
            </span>
          </li>
          <li>
            <span class="none">&nbsp;</span>
            <span class="descript">
              ASCII Japanese MSX-Write and MSX-Write II
            </span>
          </li>
          <li>
            <span class="new">New!</span>
            <span class="descript">
              Konami EC-701
            </span>
          </li>
        </ul>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          (Almost) all MSX sound devices:
        </span>
        <ul class="features">
          <li>
            <span class="uniq">Unique!</span>
            <span class="descript">
              Philips NMS1205 Music Module, including MIDI in/out
            </span>
          </li>
          <li>
            <span class="first">1st!</span>
            <span class="descript">
              MSX-MIDI (turboR)
            </span>
          </li>
          <li>
            <span class="uniq">Unique!</span>
            <span class="descript">
              mu-PACK (MIDI module to upgrade turboR ST)
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
              Moonsound (and the Brazilian OPL3 cartridge)
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
              Checkmark FM Stereo PAK, including stereo effect
            </span>
          </li>
          <li>
            <span class="none">&nbsp;</span>
            <span class="descript">
              VLM5030, the chip used in the unreleased Konami game Keyboard Master
            </span>
          </li>
          <li>
            <span class="none">&nbsp;</span>
            <span class="descript">
              Yamaha SFG-01/05, which has an YM2151 OPM/YM2164 OPP and YM2148 for MIDI
            </span>
          </li>
          <li>
            <span class="uniq">Unique!</span>
            <span class="descript">
              FAC MIDI Interface
            </span>
          </li>
          <li>
            <span class="uniq">Unique!</span>
            <span class="descript">
              JVC MSX MIDI
            </span>
          </li>
          <li>
            <span class="uniq">Unique!</span>
            <span class="descript">
              Musical Memory Mapper (with SN76489 DCSG sound chip)
            </span>
          </li>
          <li>
            <span class="uniq">Unique!</span>
            <span class="descript">
              Popolon Sound Cartridge (with configurable size)
            </span>
          </li>
        </ul>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Many MSX storage (disk/SRAM) systems:
        </span>
        <ul class="features">
          <li>
            <span class="first">1st!</span>
            <span class="descript">
              Sunrise IDE interface with harddisk and CD-ROM (audio tracks not supported yet)
            </span>
          </li>
          <li>
            <span class="uniq">Unique!</span>
            <span class="descript">MegaRAM Disk</span>
          </li>
          <li>
            <span class="first">1st!</span>
            <span class="descript">
              PAC (Panasonic SW-M001)
            </span>
          </li>
          <li>
            <span class="first">1st!</span>
            <span class="descript">
              Sony HBI-55 datacartridge
            </span>
          </li>
          <li>
            <span class="none">&nbsp;</span>
            <span class="descript">MegaRAM (512kB and 2MB versions)</span>
          </li>
          <li>
            <span class="none">&nbsp;</span>
            <span class="descript">
              MSX-DOS2</span>
          </li>
          <li>
            <span class="none">&nbsp;</span>
            <span class="descript">
              Floppy disk controller (WD2793 and compatibles, TC8566AF, ) fully
              supported, including formatting); also support several ways the FDC's
              are connected to the MSX (Microsol, National, Sanyo, AVT, Spectravideo, Canon and Victor styles). The WD2793 emulation is highly accurate: all copy protections (stored in a DMK disk image) we know are supported.
            </span>
          </li>
          <li>
            <span class="none">&nbsp;</span>
            <span class="descript">
              Experimental: Gouda SCSI (Novaxis), MEGA-SCSI, ESE-SCC, WAVE-SCSI and ESE RAMdisk
            </span>
          </li>
          <li>
            <span class="uniq">Unique!</span>
            <span class="descript">
              MegaFlashROM SCC / MegaFlashROM SCC+ / MegaFlashROM SCC+ SD
            </span>
          </li>
          <li>
            <span class="uniq">Unique!</span>
            <span class="descript">
              Carnivore 2
            </span>
          </li>
          <li>
            <span class="uniq">Unique!</span>
            <span class="descript">
              Konami Ultimate Collection
            </span>
          </li>
          <li>
            <span class="none">&nbsp;</span>
            <span class="descript">
              BeerIDE interface with harddisk (experimental)
            </span>
          </li>
          <li>
            <span class="none">&nbsp;</span>
            <span class="descript">
              Nowind (mostly useful for developers)
            </span>
          </li>
          <li>
            <span class="uniq">Unique!</span>
            <span class="descript">
              Tecall TM220 MSX-RAMFILE
            </span>
          </li>
        </ul>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Mouse, joystick (with option to use the keyboard as joystick), the Arkanoid pad, ASCII paddle (1 and 2), trackball and additionally the ninja-tap multiplayer controller, so that you can use up to 4 joysticks for software that supports it
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
       <li><span class="none">&nbsp;</span>
        <span class="descript">
          192kB VRAM (extended VRAM)
        </span>
      </li>
      <li><span class="none">&nbsp;</span>
        <span class="descript">
          ADVRAM
        </span>
      </li>
      <li><span class="none">&nbsp;</span>
        <span class="descript">
          Magic key dongle
        </span>
      </li>
<!--      <li>
        <span class="uniq">Unique!</span>
        <span class="descript">
          JoyNet (experimental; connected to TCP/IP of host OS)
        </span>
      </li>-->
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
          MSX RS-232 (8255 UART)
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          MSX printer support for characters by logging them to a file
        </span>
      </li>
       <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Dot-matrix graphical printer emulation
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
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          run time insertion and removal of cartridges and other extensions
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          support to emulate any non-colour monitor, like monochrome-green, amber or white
        </span>
      </li>
      <li>
        <span class="uniq">Unique!</span>
        <span class="descript">
          Neos MA-20 Version-Up Adapter (cartridge to adapt MSX1 to MSX2 with separate video output)
        </span>
      </li>
      <li>
        <span class="uniq">Unique!</span>
        <span class="descript">
          Sharp/Epcom HB-4000 80 column cartridge extension
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Sony/Dempa's Sensor Kid cartridge
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Epson's Chakkari Copy cartridge
        </span>
      </li>
      <li>
        <span class="uniq">Unique!</span>
        <span class="descript">
          ROM Hunter Mk2 cartridge
        </span>
      </li>


    </ul>

    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

    <h2>Emulator Extras</h2>
    <ul class="features">
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Optional automatical speed up during disk, cassette and laserdisc (load) action
        </span>
      </li>
      <li>
        <span class="uniq">Unique!</span>
        <span class="descript">
          Optional automatical loading of cassettes in CAS format
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
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
          Console with alpha-blended background, true type fonts and file and command
          completion and built in help for (almost) all commands
        </span>
      </li>
      <li>
        <span class="uniq">Unique!</span>
        <span class="descript">
          Support for .dmk diskimages, making it possible to run any MSX disk based software, without removing copy protections
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
          disk as disk image in openMSX (with full read and write transparency),
          including support for sub directories
        </span>
      </li>
      <li>
        <span class="cool">Cool!</span>
        <span class="descript">
          Debug command (including conditional break points, watch points,
          an UMR detector and even a way to step one instruction <strong>back</strong>):
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
       </span>
       <ul class="features">
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
             OpenGL 2.1 based renderer that makes advantage of the processor
             of advanced modern graphics cards. Supports scaling factors up to 4 (=1280&times;960).
             Extra features: TV scaler, afterglow and a 3D monitor effect.
             Does not support SaI scale algorithm.
           </span>
         </li>
       </ul>
     </li>
     <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Horizontal stretch (to get the correct aspect ratio)
        </span>
       </li>
       <li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Scanlines, blur and noise for TV emulation
        </span>
       </li>
       <li>
         <span class="cool">Cool!</span>
         <span class="descript">
           Gamma, brightness and contrast adjustment setting
         </span>
       </li>
       <li>
         <span class="none">&nbsp;</span>
         <span class="descript">
           Deflicker filter, for removing flickering in cases like the dvik demos where 105 colors are simulated on MSX1 by alternating different native colors.
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
          Tunable volumes and stereo balance for the individual sound chips
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          All read-only input files (ROM images, disk images, background
          pictures, XML) can be gzipped or zipped and will be transparently
          decompressed by openMSX <!-- Note that some games require write
          access to their disk in order to run
          (for example, Seed of Dragon) -->
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Screen shot feature (with or without OSD)
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
          Recording a video (with sound) of your openMSX actions
        </span>
      </li>
       <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          All channels of all sound chips can be recorded separately
        </span>
      </li>
        <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Vibrato and detune sound effects (for PSG only)
        </span>
      </li>
      <li>
        <span class="cool">Cool!</span>
        <span class="descript">
          Extended hot keys: you can bind any host event to any TCL command, which means you can e.g. let openMSX push the MSX F1 key if you press a certain button on your PC game pad
        </span>
      </li>
      <li>
        <span class="uniq">Unique!</span>
        <span class="descript">
          Interleaving with black frame for monitors with LightBoost support
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Configurable host-to-MSX joystick mapping (e.g. bind the
  crawl command (button A+B) in Metal Gear 2 to a single PC joystick button)
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          MIDI connectivity to host frameworks for Windows, Mac and Linux (ALSA): connect to the MIDI of your emulated MSX device with applications running on your host
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Copy from the MSX screen and paste to the MSX (and paste to console)
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Drag and drop support (drop files on openMSX window)
        </span>
      </li>
    </ul>

    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

    <h2>Coming Up &hellip;</h2>
    <p>
    Here are some highlights of features and improvements that are already in our source code and are likely to be in the next release (see our <a href="https://github.com/openMSX/openMSX/commits/master">commit log</a> for details and history):
    </p>
    <ul class="features">
      <li>(nothing added here yet, perhaps we just released 18.0? Either that or we were too lazy to add stuff here; just check that commit log instead!)</li>
     </ul>
  </div>
</body>
</html>
