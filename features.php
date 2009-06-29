<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
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
      Here are some highlights of the features of the latest release (0.7.1 and 0.7.2).
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
          Pixel accurate rendering: horizontal screen splits are rendered
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
          On-Screen-Display, with LEDs for e.g. power, FDD, capsLock and
          Rensha Turbo, icons showing openMSX state, graphics shown by auxiliary scripts and as of openMSX 0.7.0, a proof-of-concept of a completely programmable OSD menu, with some common actions in it (mostly meant for full screen usage on e.g. a GP2X handheld)
      </span></li>
       <li>
        <span class="uniq">Unique!</span>
        <span class="descript">
           Fully automatic host to MSX keyboard mapping. You can type on any machine with any keyboard layout with any PC keyboard layout. Very easy on a Japanese machine, for example!
        </span>
      </li>
       <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
           Save states, which are designed to be fully backwards compatible in future releases and interchangeable between platforms/OS/machines
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
          For Linux, Windows, MacOS X (also support for Tiger with GCC 4),
          FreeBSD, NetBSD and OpenBSD systems
        </span>
      </li>
      <li>
        <span class="new">New!</span>
        <span class="descript">
          Installer for Windows (also 64 bit binaries available)
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
          About 85 MSX machine hardware configurations included
        </span>
      </li>
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          About 45 MSX extension hardware configurations included
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

    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

    <h2>MSX hardware emulated</h2>
    <ul class="features">
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
          Almost all known cartridge mapper types via auto detection or the
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
                Manbow 2
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
                Checkmark FM Stereo PAK
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
                Yamaha SFG-05 (partial/experimental), which has an YM2151 chip
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
                TC8566AF and Microsol based FDCs (DDX 3.0 diskROM works, e.g.)
              </span>
            </li>
            <li>
              <span class="none">&nbsp;</span>
              <span class="descript">
                Experimental: Gouda SCSI (Novaxis), MEGA-SCSI, ESE-SCC, WAVE-SCSI and ESE RAMdisk
              </span>
            </li>
            <li>
              <span class="none">&nbsp;</span>
              <span class="descript">
                MegaFlashROM SCC
              </span>
            </li>
            <li>
              <span class="new">New!</span>
              <span class="descript">
                Nowind (mostly useful for developers)
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
          Mouse, joystick (with option to use the keyboard as joystick), the Arkanoid pad and additionally the ninja-tap multiplayer controller, so that you can use up to 4 joysticks for software that supports it
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

    </ul>

    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

    <h2>Emulator Extras</h2>
    <ul class="features">
      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Optional automatical speed up during disk or cassette action
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
          disk as disk image in openMSX (with full read and write transparency)
        </span>
      </li>
      <li>
        <span class="cool">Cool!</span>
        <span class="descript">
          Debug command (including conditional break points, watch points, an UMR detector):
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
	       OpenGL 2.0 based renderer that makes advantage of the processor
	       of advanced modern graphics cards. Supports scaling factors up to 4 (=1280&times;960).
	       Extra features: TV scaler, afterglow, horizontal stretch (to
	       get the correct aspect ratio) and a 3D monitor effect.
	       Does not support SaI scale algorithm.
             </span>
           </li>
         </ul>
       </span>
     </li>
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
<!--      <li>
        <span class="none">&nbsp;</span>
        <span class="descript">
          Adjustable keymap (e.g. for Japanese PC keyboards or to use
          Russian MSX keyboards on a US English PC keyboard)
        </span>
      </li> -->
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
        <span class="none">&nbsp;</span>
        <span class="descript">
          Event recording and replaying: record and reply entire gaming sessions (experimental)
        </span>
      </li>
    </ul>

    <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

    <h2>Coming Up &hellip;</h2>
    <p>
    Here are some highlights of features and improvements that are already in Subversion and are likely to be in the next release (see our <a href="http://openmsx.svn.sourceforge.net/viewvc/openmsx/openmsx/trunk/ChangeLog">ChangeLog</a> for details and history):
    </p>

    <ul class="features">
      <li>(nothing yet, we just released 0.7.2)</li>
     </ul>
  </div>
  <div id="footer">
    $Id$
  </div>
</body>
</html>
