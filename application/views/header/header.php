<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>
    <?php echo $title;?>
  </title>
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/main.min.css');?>" media="print"
    onload="this.media='all'">
  <link rel="stylesheet" href="<?php echo base_url('node_modules\purecss\build\pure.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('node_modules\claymorphism-css\dist\clay.css');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <script>
  let FF_FOUC_FIX;
 </script>
</head>