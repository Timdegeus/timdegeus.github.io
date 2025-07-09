<?php
    session_start();
    $_SESSION["page"] = basename($_SERVER['PHP_SELF']);
    $_SESSION["pageName"] = "Dashboard";

    readfile('header.html');
    include('nav.php');
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.0/Sortable.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.0/plugins/Swap/Sortable.swap.min.js"></script>
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
                <button id="editWidgetButton">Edit Widgets</button> 
                <button id="addWidgetButton"><b>+</b> <p>Add Widget</p></button>
            </div>
            <?php include("widgets/addWidgetModal.php"); ?>
        </div>
        <div class="widgetContent">
            <?php include("widgets/widgetContainer.php"); ?>
        </div>
    </div>
</div>
<?php 
    include('pop-up-nav.php');
    readfile('footer.html');
?>
