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
                    <option value="teelt1">Dashboard 1</option>
                    <option value="teelt2">Dashboard 2</option>
                    <option value="teelt3">Dashboard 3</option>
                </select> 
                <button id="showDashboardsButton">Show</button>
                <label for="refreshData" class="refreshCheck">
                    <input type="checkbox" id="refreshData">
                    <p>Refresh data</p>
                </label>
            </div>
            <div style="display: flex;">
                <button id="discardChangesButton">Discard Changes</button>
                <button id="editWidgetButton">Edit Widgets</button> 
                <button id="addWidgetButton"><b>+</b> <p>Add Widget</p></button>
            </div>
            <?php include("widgets/addWidgetModal.php"); ?>
        </div>
        <div id="dashboardMenu">
            <div class="dashboardMenuHeader">
                <h5>Dashboards</h5>
                <div>
                    <button><i class="fa fa-search" aria-hidden="true"></i></button>
                    <button><i class="fa fa-plus" aria-hidden="true"></i></button>
                </div>
            </div>
            <div class="dashboardButtons">
                <button class="dashboardButton selectedDashboard" id=""><h6>Dashboard 1</h6><i class="fa fa-ellipsis-v" aria-hidden="true"></i></button>
                <button class="dashboardButton" id=""><h6>Dashboard 1</h6><i class="fa fa-ellipsis-v" aria-hidden="true"></i></button>
            </div>
        </div>
        <?php include("widgets/widgetContainer.php"); ?>
    </div>
</div>
<?php 
    include('pop-up-nav.php');
    readfile('footer.html');
?>
