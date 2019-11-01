<div class="row" style="margin-top: 2rem;">
  <div class="container">
    <div class="portlet portlet-dark">
      <div class="portlet-header" ng-bind="member.topic"></div>
      <div class="portlet-body" ng-bind-html="member.description"></div>
    </div>
  </div>
</div>

<div class="row" style="margin-top: 2rem;">
  <div class="container">
    <div class="portlet portlet-dark">
      <div class="portlet-body" style="padding: 0.5rem;">
        <div class="card-container col-xs-4 col-md-3" style="padding: 0 4px;" ng-repeat="card in member.cards">
          <div class="card selectable" style="width: auto; height: auto;" ng-class="{active: card.active, confirmed: card.confirmed}" ng-click="member.selectCard(card)">
            <div class="inner">
              <span class="card-label" ng-bind-html="card.value"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row" style="margin-top: 2rem; margin-bottom: 2rem;">
  <div class="container">
    <div class="portlet portlet-dark">
      <div class="portlet-header">How to:</div>
      <div class="portlet-body">
        <p class="col-xs-12">
          Votes can only be placed during an active poll.That means as long as the master has not started a poll or all votes have been placed, you can not vote!
          When you select a card it is highlighted in red, meaning that you vote is processed by the server. If it was placed successfully the card is highlighted
          green as feedback. Until everyone has placed their vote you can still change it. When the last person votes the poll is closed.
        </p>
      </div>
    </div>
  </div>
</div>
