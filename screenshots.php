<!DOCTYPE html>
<html>
<?php
  $current="Screenshots";
  require "head.div";
?>
<body>
<?php require "title.div"; ?>
<?php require "navigation.div"; ?>

  <div id="content">
    <h1>Screenshots</h1>
<?php 
  // The no-ca$h image database:
  //
  // Let's have some categories...
  
  $categories = array (
    "sar" => "Scalers and Renderers",
    "vdp" => "VDP Features",
    "g9k" => "Graphics 9000",
    "tR"  => "MSX turbo R",
    "ld"  => "Palcom Laserdisc",
    "spc" => "Special Machines and Extensions",
    "emu" => "Emulator Extras",
//    "ext" => "Extensions",
//    "misc" => "Miscellaneous"
  );
  
  // And all the images 
  $images = array (
    1 => array ("tR",
           "a1gt1_thumb.png", "a1gt1.png",
           "MWP, Panasonic FS-A1GT turbo-R internal software"),
    array ("tR", 
           "a1gt2_thumb.png", "a1gt2.png",
           "MSX-View, Panasonic FS-A1GT Turbo-R internal software"),
    array ("vdp",
           "arkanoah_game_thumb.png","arkanoah_game.png",
           "Ark-A-Noah showing V9938 overscan, 224 lines"),
    array ("spc",
           "fs4600f3_thumb.png",     "fs4600f3.png",
           "WordPro III, National FS-4600F internal software"),
    array ("g9k",
           "hispec_thumb.png", "hispec.png",
           "TNI's HiSpec Demo on Gfx9000 in Bx mode"),
    array ("ld",
           "badlands_thumb.png", "badlands.png",
           "Konami's Badlands on a Pioneer PX-7 with laserdisc player"),
    array ("ld",
           "rollingblaster_thumb.png", "rollingblaster.png",
           "Rolling Blaster on a Pioneer PX-7 with laserdisc player"),
    array ("spc",
           "ide_thumb.png", "ide.png",
           "Sunrise IDE interface emulation: IDEFDISK running in DOS2"),
    array ("g9k",
           "magic_thumb.png", "magic.png",
           "NWO's MAGIC MWM Replayer on Gfx9000 in Bx mode"),
    array ("emu",
           "mlimit3_thumb.png", "mlimit3.png",
           "Metal Limit, Copper Shock II, with alpha-blended console"),
    array ("noshow",
           "nemesis1_thumb.png", "nemesis1.png",
           "Intro screen of Nemesis 1 rendered by AAlib"),
    array ("misc",
           "nemesis3_phoenix_thumb.png", "nemesis3_phoenix.png",
           "Nemesis 3 ..."),
    array ("misc",
           "sandstone_game_thumb.png", "sandstone_game.png",
           "Sandstone"),
    array ("sar",
           "sbb-3d_thumb.png", "sbb-3d.png",
           "Sex Bomb Bunny in the latest SDLGL-PP renderer, showing the 3D arcade effect!<br>(Image scaled down)"),
    array ("sar",
           "scalers-mog_thumb.png", "scalers-mog.gif",
           "Maze of Galious, showing some of the available scale algorithms"),
    array ("sar",
           "scalers-usas_thumb.png", "scalers-usas.gif",
           "Treasure of Usas, showing some of the available scale algorithms"),
    array ("misc",
           "space_mambow_thumb.png", "space_mambow.png",
           "Space Mambow..."),
    array ("tR",
           "swissdemo_thumb.png", "swissdemo.png",
           "Swiss Demo, showing screen 12 capabilities"),
    array ("g9k",
           "tb-underwater_thumb.png", "tb-underwater.png",
           "Team Bomba Underwater Demo on Gfx9000 Bx mode"),
    array ("misc",
           "undeadline_title_thumb.png", "undeadline_title.png",
           "Undeadline..."),
    array ("vdp",
           "ur1_thumb.png", "ur1.png",
           "Unknown Reality, deinterlaced and showing overscan"),
    array ("vdp",
           "ur2_thumb.png", "ur2.png",
           "Unknown Reality, real-time scope, using a horizontal screen split"),
    array ("emu",
           "cheatfinder_thumb.png", "cheatfinder.png",
           "Finding cheats for Metal Gear in the console"),
  );

  $i_cat = 0;
  $i_thumb = 1;
  $i_image = 2;
  $i_descrip = 3;

  function showThumbs() {
    global $categories, $images;
    global $i_cat, $i_thumb, $i_image, $i_descrip;
    
//    echo '    <p><a href="screenshots.php?n=all" class="button">'."\n";
//    echo '      Show all images</a></p>'."\n";
    
    foreach($categories as $v => $category) {
      echo '      <h2>'.$category.'</h2>'."\n";
      echo '      <div class="screenshot_thumbs">'."\n";
      
      foreach($images as $id => $imginfo) {
        if($imginfo[$i_cat] == $v) {
          $thumb = $imginfo[$i_thumb];
          echo '    <span class="thumb" id="thumb'.$id.'">'."\n";
          echo '      <a href="screenshots.php?n='.$id.'">'."\n";
          echo '        <img src="images/screenshots/'.$thumb.'" alt="'.$thumb.'">'."\n";
          echo '      </a>'."\n";
          echo '    </span>'."\n";
        }
      }

      echo '      </div>'."\n";
    }
  }
  
  function showImage($show) {
    global $categories, $images;
    global $i_cat, $i_thumb, $i_image, $i_descrip;

    if(!isset($images[$show])) {
      showThumbs();
    } else {
      $imginfo = $images[$show];
      $image = $imginfo[$i_image];
      $text = $imginfo[$i_descrip];
      echo '    <img src="images/screenshots/'.$image.'" alt="'.$image.'">'."\n";
      echo '    <p>'.$text.'</p>'."\n";
    }
  }
  
  function showAll() {
    global $categories, $images;
    global $i_cat, $i_thumb, $i_image, $i_descrip;

    foreach($images as $id => $imginfo) {
      $image = $imginfo[$i_image];
      $text = $imginfo[$i_descrip];
      echo '    <p><img src="images/screenshots/'.$image.'" alt="'.$image.'">'."\n";
      echo '    </p><p>'.$text.'</p>'."\n";
    }
  }  
  
  // ---------------------------------------
  
  $show = $_GET["n"]; // if _GET["n"] is not set, $show will be 0
  
  switch($show) {
  case 0:
    showThumbs();
    break;
  case -1:
    showAll();
    break;
  default:
    showImage($show);
    break;
  }
?>

  </div>
</body>
</html>
