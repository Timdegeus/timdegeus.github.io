<?php
    session_start();
    $_SESSION["page"] = basename($_SERVER['PHP_SELF']);
    $_SESSION["pageName"] = "Dashboard";

    readfile('header.html');
    include('nav.php');
?>

<script src="node_modules/gridstack/dist/gridstack-all.js"></script>
<link href="node_modules/gridstack/dist/gridstack.min.css" rel="stylesheet"/>
<script src="js/dashboard.js"></script>

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
            <div style="display: flex;">
                <button id="saveLayoutButton">Save Dashboard</button>
                <button id="loadLayoutButton">Load Dashboard</button>
                <button id="editWidgetButton">Edit Widgets</button> 
                <button id="addWidgetButton"><b>+</b> <p>Add Widget</p></button>
            </div>
            <?php include("widgets/addWidgetModal.php"); ?>
        </div>
        <?php include("widgets/widgetContainer.php"); ?>
    </div>
</div>
<?php 
    include('pop-up-nav.php');
    readfile('footer.html');
?>
