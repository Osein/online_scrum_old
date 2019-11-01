<?php
include "config.php";
?>
<!-- Introduction -->     
<div class="row">
  <div class="container">
    <!-- Create session panel -->
    <div ng-controller="CreateController as create">
      <div class="portlet portlet-default">
        <div class="portlet-body">  
          <form role="form">
            <div class="form-group" ng-class="{'has-error': create.nameError}">
              <label for="sessionName" style="color: white">Session name:</label>
              <div class="has-feedback">
                <input type="text" class="form-control" ng-model="create.name" placeholder="My session">
                <span ng-if="create.nameError" class="glyphicon glyphicon-remove form-control-feedback"></span>
              </div>
            </div>
            <div class="form-group">
              <label style="color: white">Cards: <a target="_blank" href="<?= $src ?>/src/sample-config.php#L17">?</a></label>
              <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" style="color: black;" type="button" data-toggle="dropdown">
                  <span style="color: black;" ng-bind-html="create.selectedSet.value"></span>
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                  <li ng-repeat="set in create.cardSets" ng-class="{'active': set == create.selectedSet}">
                    <a class="selectable" style="color: black;" ng-click="create.selectedSet = set" ng-bind-html="set.value"></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="form-group">
              <label style="color: white"><input type="checkbox" ng-model="create.isPrivate"> is private</label> 
            </div>
            <div class="form-group" ng-if="create.isPrivate" ng-class="{'has-error': create.pwdError}">
              <label for="password" style="color: white">Password:</label>
              <div class="has-feedback">
                <input type="password" class="form-control" ng-model="create.password">
                <span ng-if="create.pwdError" class="glyphicon glyphicon-remove form-control-feedback"></span>
              </div>
            </div>
            <input type="button" class="btn btn-default" value="Create" ng-click="create.createSession()">
          </form>
        </div>
      </div>        
    </div>
  </div>
</div>
