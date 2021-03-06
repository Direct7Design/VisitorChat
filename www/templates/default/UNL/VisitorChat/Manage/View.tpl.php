<script type="text/javascript" src="<?php echo \UNL\VisitorChat\Controller::$url ?>js/chat.php?for=operator"></script>

<div id="operatorOptions">
    <a id="toggleOperatorStatus" href="#"><span id="currentOperatorStatus"></span></a>
</div>

<div id="visitorChat_rightSide">
  <h2>Conversations</h2>
  <div id="clientList"></div>
</div>

<div id='clientChatContainer'>
    <div id="clientChat">
    </div>
    <div id="clientChatInfoContainer">
        <div id="clientChat_Invitations">
        </div>
    </div>
</div>

<div id="chatRequest" title="Incoming Chat Request">
    You have an incoming chat request.
    This request will expire in <span id="chatRequestCountDown">10</span> seconds.
</div>

<div id="alert" title="Alert">
</div>

<div id="shareChat" title="Share">
</div>

<div id='visitorChat_sound_container'>
    <audio id='visitorChat_sound' src='<?php echo \UNL\VisitorChat\Controller::$url ?>audio/message.wav'></audio>
</div>

<div id="notificationOptions">
    <a href="#" id="requestNotifications">Show Desktop Notifications</a>
</div>

<div id="visitorChat_brightBox">
  <p>Hello all!</p>
</div>