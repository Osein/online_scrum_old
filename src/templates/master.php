<?php
include __DIR__ . "/../config.php";

?>
<!-- Headline -->
<div class="row">
  <div class="container">
    <div class="portlet portlet-dark" style="margin-top: 1rem">
      <div class="portlet-header">{{ master.id }} - {{ master.name }}</div>
      <div class="portlet-body">
        <div class="ticketing" ng-include="master.current.view"></div>
      </div>
    </div>
  </div>
</div>

<!-- Live poll view and statistics -->
<div class="row" style="margin-top: 2rem;" ng-if="master.teamComplete">
  <div class="container">
  <div class="portlet portlet-dark">
    <div class="portlet-body">
    <div class="">
    <div ng-repeat="vote in master.votes track by vote.id">        
      <div class="col-xs-6 col-md-4" style="margin-bottom: 1rem">
        <div class="">
          <div class="card-flip" ng-class="{flipped: master.flipped}">
            <div class="card front" ng-class="{active: vote.active}">
              <div ng-if="vote.placed" class="inner"><span class="card-label">?</span></div>
            </div>
            <div class="card back" ng-class="{active: vote.active, confirmed: master.consensus}">
              <div class="inner"><span class="card-label" ng-bind-html="vote.value"></span></div>
            </div>
          </div>
          <div ng-if="vote.canDelete" class="delete-member remove selectable" ng-click="master.remove(vote.id)">
            <span class="glyphicon glyphicon-remove"></span>
          </div>
        </div>
        <h2 ng-bind="vote.name"></h2>
      </div>            
    </div>
  </div>
    </div>
  </div>
  </div>
</div>     

<div class="row" style="margin-top: 2rem;" ng-if="!master.teamComplete">
  <div class="container">
    <div class="portlet portlet-dark">
      <div class="portlet-header">
        Team
      </div>
      <div class="portlet-body">
        <ul class="list-group">
          <!-- Iterate over votes as they represent members as well -->
          <li class="list-group-item" style="background-color: transparent; border: 0;" ng-repeat="member in master.votes track by member.id">{{$index + 1}}. {{member.name}}</li>
        </ul>
        <button class="btn btn-success" ng-click="master.teamComplete = true">Team complete</button>
      </div>
    </div>
  </div>
</div>
