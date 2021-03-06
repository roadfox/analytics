<?php
/**
 * Analytics
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the LICENSE.md file.
 *
 * @author Marcel Scherello <audioplayer@scherello.de>
 * @copyright 2020 Marcel Scherello
 */
?>
<div id="analytics-content" style="width:100%; padding: 20px 5%;" hidden>
    <input type="hidden" name="sharingToken" value="<?php p($_['token']); ?>" id="sharingToken">
    <input type="hidden" name="dataset" value="" id="datasetId">
    <input type="hidden" name="advanced" value="false" id="advanced">
    <h2 id="reportHeader"></h2>
    <h3 id="reportSubHeader" style="display: none"></h3>
    <div id="reportPlaceholder"></div>
    <div id="filterBar" style="">
        <div id="optionContainer" style="display: none">
            <div id="saveIcon" class="icon-analytics-save-warning has-tooltip"
                 title="<?php p($l->t('Report was changed - Press here to save the current state')); ?>"></div>
            <div id="optionsIcon" class="icon-analytics-options has-tooltip"
                 title="<?php p($l->t('Options')); ?>"></div>
        </div>
        <div id="filterContainer" style="display: none">
            <div id="drilldownIcon" class="icon-analytics-drilldown has-tooltip"
                 title="<?php p($l->t('Drilldown')); ?>"></div>
            <div id="addFilterIcon" class="icon-analytics-filter-add has-tooltip"
                 title="<?php p($l->t('Filter')); ?>"></div>
            <div id="filterVisualisation" style="display: inline-block; float: right;">
            </div>
        </div>
    </div>
    <div id="chartContainer">
        <canvas id="myChart"></canvas>
    </div>
    <div id="chartMenuContainer">
        <div id="chartLegend" class="icon icon-menu"><?php p($l->t('Legend')); ?></div>
    </div>
    <table id="tableContainer"></table>
    <div id="noDataContainer" style="display: none">
        <?php p($l->t('No data found')); ?>
    </div>
</div>
<div id="analytics-intro" style="padding: 30px" hidden>
    <h2><?php p($l->t('Analytics')); ?></h2>
    <br>
    <h3><?php p($l->t('Favorites')); ?></h3>
    <div>
        <ul id="ulAnalytics" style="width: 100%;"></ul>
    </div>
    <br>
    <h3><?php p($l->t('Templates')); ?></h3>
    <a href="#" id="createDemoReport">-&nbsp;<?php p($l->t('German population from external datasource')); ?></a><br>
    <a href="#" id="createDemoGithubReport">-&nbsp;<?php p($l->t('Monitor GitHub downloads in realtime')); ?></a>
</div>
<div id="analytics-warning" style="width:50%; padding: 50px">
    <h2><?php p($l->t('Analytics')); ?></h2>
    <br>
    <h3>Javascript issue</h3>
    <span>If you see this message, please disable AdBlock/uBlock for this domain (only).</span>
    <br>
    <span>The EasyPrivacy list is blocking some scripts because of a wildcard filter for "analytics"</span>
    <br>
    <br>
    <a href="https://github.com/Rello/analytics/wiki/EasyPrivacy-Blocklist"
       target="_blank"><?php p($l->t('More Information ...')); ?></a>
</div>
