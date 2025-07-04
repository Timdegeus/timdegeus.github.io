<?php
    session_start();
    $_SESSION["page"] = basename($_SERVER['PHP_SELF']);
    $_SESSION["pageName"] = "Dashboard";

    readfile('header.html');
    include('nav.php');
?>
<div id="blok2">
    <?php include("header-content.php"); ?>
    <div id="pageContent">
        <div class="contentChanger">
            <div style="display: flex;">
                <select name="teelt" id="teeltSelector">
                    <option value="teelt1">Teelt 1</option>
                    <option value="teelt2">Teelt 2</option>
                    <option value="teelt3">Teelt 3</option>
                </select> 
                <label for="refreshData" class="refreshCheck">
                    <input type="checkbox" id="refreshData">
                    <p>Refresh data</p>
                </label>
            </div>
            <button id="addWidgetButton">+ Add Widget</button>
        </div>
        <div class="widgetContent">
            <div class="widget">
                <h4><i class="fa-solid fa-temperature-three-quarters"></i>24h Temperature</h4>
            </div> 
            <div class="widget">
                <h4><i class="fa-solid fa-droplet"></i>Water Management</h4>
            </div>
            <div class="widget">
                <h4><i class="fa-solid fa-droplet"></i>Water Management</h4>
            </div>
            <div class="widget">
                <h4><i class="fa-solid fa-droplet"></i>Water Management</h4>
            </div>
        </div>
    </div>
</div>
<?php 
    include('pop-up-nav.php');
    readfile('footer.html');
?>

<!-- <div class="widget marginRight">
    <h4><i class="fa-solid fa-temperature-three-quarters"></i>24h Temperature</h4>
    <img src="img/temperature.PNG" alt="Temperature"> 
</div> 
<div class="widget marginLeft">
    <h4><i class="fa-solid fa-droplet"></i>Water Management</h4>
    <img src="img/water.PNG" alt="Water management">  
</div> -->