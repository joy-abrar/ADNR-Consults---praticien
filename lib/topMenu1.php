<div id="topMenuNav">
	<div>
		<img id="logoImage" src="images/logo.png" alt="logo_png">
	</div>

	<div id="usernameTopNav">
	      <ul class="navbar">
	        <li>
	          <a id="usernameTopNavLink" href="#"><?= base64_decode($_SESSION['userName']) ?></a>
	        </li>
	      </ul>
	</div>

	<div id="voiceRecognitionBloc" class="mt-3">
		<i id="mic" onclick="runSpeechRecognition()" class="fa-solid fa-microphone"></i>
	</div>

	<div id="searchBox">
		<form method="POST" action="../../index.php?action=searchMyKalyaResult">
			<input id="searchBoxTopNav" type="search" name="searchBox" autocomplete="off" placeholder="Logiciel de veille ou de recherche scientifique...">
			<button><img src="../../lib/css/images/Kalya.png"></button>
		</form>
	</div>


	<?php
		if ($numberOfNotifications > 0) 
		{
	?>
			<i id="bellNotification" class="fa-solid fa-circle-exclamation"></i>
	<?php
		}
	?>
		<div class="icon" id="bell"> <img src="../../lib/css/images/bell.png" alt=""> </div>
	    <div class="notifications" id="box">
	        <h2>Notifications  <span><?= $numberOfNotifications ?></span></h2>
	  		
	  		<?php     
	  			while ($rows7 = $getNotifications->fetch()) 
	  			{
	  				
	  		?> 
			        <div class="notifications-item" id="notification_id_<?= $rows7['id'] ?>"> <img src="../../lib/css/images/user.png" alt="img">
			            <div class="text">
			                <h4><?= $rows7['notificationSenderName'] ?></h4>
			                <p><?= $rows7['notificationMessage'] ?></p>
			                <p><a id="<?= $rows7['id'] ?>" class="delete_button" style="text-decoration: none; color: grey;">Effacer</a></p>
			            </div>
			        </div>
			<?php
				}
			?>
	    </div>

	    <script>
	    	$(document).ready(function() 
		    {
		        $('.delete_button').click(function() 
		        {
		            var id = $(this).attr("id");

		            $.ajax({
		                type: "POST",
		                url: "../../index.php?action=deleteNotification",
		                data: ({
		                    id: id
		                }),
		                cache: false,
		                success: function(html)
		                {
		                    $("#notification_id_" + id).fadeOut('slow');
		                }
		            });
		        });
		    });
	    </script>

	<div id="timeClock">
	 	<i id="clock" class="fa-solid fa-clock"></i>&nbsp;
		<p id="time"></p>&nbsp;
		<p id="day"></p>&nbsp;&nbsp;
		<p id="date"></p>
	</div>

	<div id="agenda">	
		<!--<a id="agendaLink" href="../../index.php?action=agenda"><i class="fa-solid fa-calendar-days" onclick="dashboardAppearence('rendezvous')"></i></a>-->
	</div>

	<div id="username">	
		<a id="usernameLink" href="../../index.php"><i class="fa-solid fa-user-tie"></i> <?= base64_decode($_SESSION['userName']) ?> </i></a>
	</div>

	<div id="logout">
		<a id="logoutLink" href="../../index.php?action=logout"><i class="fa-solid fa-power-off"></i></a>
	</div>
</div>

<script type="text/javascript" src="../../lib/main.js"></script>
<script type="text/javascript" src="../../lib/voiceRecognition.js"></script>
<script type="text/javascript" src="../../lib/dictionary1.js"></script>