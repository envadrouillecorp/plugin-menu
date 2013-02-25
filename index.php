<?php
/*
 * Copyright (c) 2013 Baptiste Lepers
 * Released under MIT License
 *
 * Feedback - Entry point
 */

class Pages_Menu_Index {
   public static $description = "Menu Plugin";
   public static $isOptional = true;
   public static $showOnMenu = false;

   public static function setupAutoload() {
      AutoLoader::$autoload_path[] = "./pages/menu/php/";
   }

   static public function getOptions() {
      return array(
      );
   }

   static public function getUserScripts() {
      return array('./admin/pages/menu/scripts/jgallery.menu.js');
   }

   static public function mainAction() {
   }
};



