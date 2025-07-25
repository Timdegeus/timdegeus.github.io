<?php

// Dashboard
$dashboard1 = array("Name"=>"Dashboard 1", "Link"=>"dashboard.php");
$dashboard2 = array("Name"=>"Dashboard 2", "Link"=>"dashboard2.php");
$dashboard3 = array("Name"=>"Dashboard 3", "Link"=>"dashboard3.php");

$subMenuDashboard = array($dashboard1, $dashboard2, $dashboard3);

$dashboard = array("Name"=>"Dashboard", "Link"=>"dashboard.php", "Icon"=>"fa-solid fa-layer-group", "Submenu"=>null, "Hide"=>null);

// Agri
$agri1 = array("Name"=>"Climate", "Link"=>"agriClimate.php");
$agri2 = array("Name"=>"Homogenity", "Link"=>"agriHomogenity.php");
$agri3 = array("Name"=>"Weight", "Link"=>"agriWeight.php");
$agri4 = array("Name"=>"Soil", "Link"=>"agriSoil.php");
$agri5 = array("Name"=>"Light", "Link"=>"agriLight.php");

$subMenuAgri = array($agri1, $agri2, $agri3, $agri4, $agri5);

$agri = array("Name"=>"Agri", "Link"=>"agriClimate.php", "Icon"=>"fa-solid fa-seedling", "Submenu"=>$subMenuAgri, "Hide"=>null);

// Devices
$devices1 = array("Name"=>"Cards", "Link"=>"devicesCards.php");
$devices2 = array("Name"=>"List", "Link"=>"devicesList.php");
$devices3 = array("Name"=>"Maps", "Link"=>"devicesMaps.php");
$devices4 = array("Name"=>"Connections", "Link"=>"devicesConnections.php");

$subMenuDevices = array($devices1, $devices2, $devices3, $devices4);

$devices = array("Name"=>"Devices", "Link"=>"devicesCards.php", "Icon"=>"fa-solid fa-tower-cell", "Submenu"=>$subMenuDevices, "Hide"=>null);

// Analyse
$analyse1 = array("Name"=>"Graph", "Link"=>"analyseGraph.php");
$analyse2 = array("Name"=>"List", "Link"=>"analyseList.php");

$subMenuAnalyse = array($analyse1, $analyse2);

$analyse = array("Name"=>"Analyse", "Link"=>"analyseGraph.php", "Icon"=>"fa-solid fa-chart-simple", "Submenu"=>$subMenuAnalyse, "Hide"=>"mobile");

// Alarms
$alarms1 = array("Name"=>"Alarms", "Link"=>"alarmsAlarms.php");
$alarms2 = array("Name"=>"Logbook", "Link"=>"alarmsLogbook.php");
$alarms3 = array("Name"=>"Settings", "Link"=>"alarmsSettings.php");

$subMenuAlarms = array($alarms1, $alarms2, $alarms3);

$alarms = array("Name"=>"Alarms", "Link"=>"alarmsAlarms.php", "Icon"=>"fa-solid fa-bell", "Submenu"=>$subMenuAlarms, "Hide"=>"mobile");

// Control room
$controlRoom = array("Name"=>"Control Room", "Link"=>"control.php", "Icon"=>"fa-solid fa-display", "Submenu"=>null, "Hide"=>"mobile");

// Settings
$settings = array("Name"=>"Settings", "Link"=>"settings.php", "Icon"=>"fa-solid fa-gear", "Submenu"=>null, "Hide"=>"mobile");

// Profile
$profile = array("Name"=>"Profile", "Link"=>"profile.php", "Icon"=>"fa-solid fa-user", "Submenu"=>null, "Hide"=>"hide");


// Add menu item array to this array list to put it in the menu

$menuItems = array($dashboard, $agri, $devices, $analyse, $alarms, $controlRoom, $settings, $profile);

?>