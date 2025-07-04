<?php
    session_start();
    $_SESSION["page"] = basename($_SERVER['PHP_SELF']);
    $_SESSION["pageName"] = "Alarms";

    readfile('header.html');
    include('nav.php');
?>
<div id="blok2">
    <?php include("header-content.php"); ?>
    <div class="alarmContent">
        <div class="alarmWidget">
            <h5>[12] Refrigerator</h5>
            <p class="alarmWidgetP">Alarm: test alarm SMS en email</p>
            <p class="alarmWidgetP mobile">Trigger: Temperature < 25 C</p>
            <p class="alarmWidgetP mobile">Triggered on:</p>
            <p class="alarmWidgetP mobile">2024-09-16 08:36:52</p>
            <p class="alarmWidgetP mobile">current: 11.1 C</p>
        </div>
        <div class="alarmWidget">
            <h5>[12] Refrigerator</h5>
            <p class="alarmWidgetP">Alarm: test alarm SMS en email</p>
            <p class="alarmWidgetP mobile">Trigger: Temperature < 25 C</p>
            <p class="alarmWidgetP mobile">Triggered on:</p>
            <p class="alarmWidgetP mobile">2024-09-16 08:36:52</p>
            <p class="alarmWidgetP mobile">current: 11.1 C</p>
        </div>
        <div class="alarmWidget">
            <h5>[12] Refrigerator</h5>
            <p class="alarmWidgetP">Alarm: test alarm SMS en email</p>
            <p class="alarmWidgetP mobile">Trigger: Temperature < 25 C</p>
            <p class="alarmWidgetP mobile">Triggered on:</p>
            <p class="alarmWidgetP mobile">2024-09-16 08:36:52</p>
            <p class="alarmWidgetP mobile">current: 11.1 C</p>
        </div>
        <div class="alarmWidget">
            <h5>[12] Refrigerator</h5>
            <p class="alarmWidgetP">Alarm: test alarm SMS en email</p>
            <p class="alarmWidgetP mobile">Trigger: Temperature < 25 C</p>
            <p class="alarmWidgetP mobile">Triggered on:</p>
            <p class="alarmWidgetP mobile">2024-09-16 08:36:52</p>
            <p class="alarmWidgetP mobile">current: 11.1 C</p>
        </div>
        <div class="alarmWidget">
            <h5>[12] Refrigerator</h5>
            <p class="alarmWidgetP">Alarm: test alarm SMS en email</p>
            <p class="alarmWidgetP mobile">Trigger: Temperature < 25 C</p>
            <p class="alarmWidgetP mobile">Triggered on:</p>
            <p class="alarmWidgetP mobile">2024-09-16 08:36:52</p>
            <p class="alarmWidgetP mobile">current: 11.1 C</p>
        </div>
        <div class="alarmWidget">
            <h5>[12] Refrigerator</h5>
            <p class="alarmWidgetP">Alarm: test alarm SMS en email</p>
            <p class="alarmWidgetP mobile">Trigger: Temperature < 25 C</p>
            <p class="alarmWidgetP mobile">Triggered on:</p>
            <p class="alarmWidgetP mobile">2024-09-16 08:36:52</p>
            <p class="alarmWidgetP mobile">current: 11.1 C</p>
        </div>
    </div>
</div>
<?php 
    include('pop-up-nav.php');
    readfile('footer.html');
?>