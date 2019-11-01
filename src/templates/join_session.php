<?php
include "config.php";
?>
<!-- Introduction -->     
<div class="row">
  <div class="container">
    <!-- Join session panel -->
    <div ng-controller="JoinController as join">
      <div class="portlet card-dark">
        <div class="portlet-body">
          <form role="form">
            <div class="form-group" ng-class="{'has-error': join.idError}">
              <label style="color: white;">Session id:</label>
              <div class="has-feedback">
                <input type="text" class="form-control" ng-model="join.id" ng-change="join.passwordCheck()" placeholder="4711">
                <span ng-if="join.idError" class="glyphicon glyphicon-remove form-control-feedback"></span>
              </div>
            </div>
            <div class="form-group" ng-class="{'has-error': join.nameError}">
              <label style="color: white;">Your name:</label>
              <div class="has-feedback" ng-init="join.name = '<?= isset($_COOKIE['scrum_member_name']) ? $_COOKIE['scrum_member_name'] : "" ?>'">
                <input type="text" class="form-control"  ng-model="join.name" placeholder="John">
                <span ng-if="join.nameError" class="glyphicon glyphicon-remove form-control-feedback"></span>
              </div>
            </div>
            <div class="form-group" ng-if="join.requiresPassword">
              <label style="color: white;">Password:</label>
              <div class="has-feedback">
                <input type="password" class="form-control"  ng-model="join.password">
                <span ng-if="join.passwordError" class="glyphicon glyphicon-remove form-control-feedback"></span>
              </div>
            </div>
            <input type="button" class="btn btn-default" value="Join" ng-click="join.joinSession()">
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
