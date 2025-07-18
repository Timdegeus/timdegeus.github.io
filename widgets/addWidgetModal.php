<div id="addWidgetModal" class="widgetModal">
  <div class="widgetModal-content">
    <div class="widgetModal-header">
        <h3>New Widget</h3>
        <p class="close">Close</p>
    </div>    
    <div class="widget-section">
      <h5>Graphs</h5>
      <div class="widget-options">
        <button class="widgetOption" data-widget="line">Line Chart</button>
      </div>
    </div>
  </div>
</div>

<div id="widgetNameModal" class="widgetModal">
  <div class="widgetModal-content">
    <div class="widgetModal-header">
      <button id="backButton">Back</button>
      <p class="close">Close</p>
    </div>
    <div class="widget-properties">
      <h4 class="widget-type-title">Widget Type</h4>
      <div class="widget-input">     
        <label for="widgetNameInput"><b>Widget Name</b></label>
        <input type="text" id="widgetNameInput" class="widget-input-field" placeholder="Name of the widget">
        <label for="widgetTypeInput"><b>Widget Type</b></label>
        <select id="widgetTypeInput" class="widget-input-field" name="widgetType">
          <option value="graph" selected>Graph</option>
        </select>
        <label for="widgetTimeInput"><b>Graph Period</b></label>
        <select id="widgetTimeInput" class="widget-input-field" name="widgetTime">
          <option value="minute">Minute</option>
          <option value="hour">Hour</option>
          <option value="day" selected>Day</option>
          <option value="week">Week</option>
          <option value="month">Month</option>
          <option value="year">Year</option>
        </select>
        <label for="widgetPoint1Input"><b>Time Point 1</b></label>
        <input type="text" id="widgetPoint1Input" class="widget-input-field" placeholder="Point 1">
        <label for="widgetPoint2Input"><b>Time Point 2</b></label>
        <input type="text" id="widgetPoint2Input" class="widget-input-field" placeholder="Point 2">
      </div>
      <div class="widget-size">
        <p><b>Widget Size</b></p>
        <div id="widgetSizeSelection">test</div>
      </div>
    </div>
    
    
    <!-- <button id="confirmAddWidget">Toevoegen</button> -->
  </div>
</div>