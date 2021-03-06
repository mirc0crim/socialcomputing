<?php 
$level = $_GET["level"];
$title = $_GET["title"];
?>
<!DOCTYPE html><html><head><link type='text/css' rel='stylesheet' href='../stylesheet.css'/><title>My Page</title></head><body>
<script type="text/javascript" src="../recording/recorder.js"></script>
<script>
			function timecode(ms) {
				var hms = {
					h : Math.floor(ms / (60 * 60 * 1000)),
					m : Math.floor((ms / 60000) % 60),
					s : Math.floor((ms / 1000) % 60)
				};
				var tc = [];
				// Timecode array to be joined with '.'

				if (hms.h > 0) {
					tc.push(hms.h);
				}

				tc.push((hms.m < 10 && hms.h > 0 ? "0" + hms.m : hms.m));
				tc.push((hms.s < 10 ? "0" + hms.s : hms.s));

				return tc.join(':');
			}


			Recorder.initialize({
				swfSrc : "../recording/recorder.swf"
			});

			function record() {
				Recorder.record({
					start : function() {
						//alert("recording starts now. press stop when youre done. and then play or upload if you want.");
					},
					progress : function(milliseconds) {
						document.getElementById("recording").style.visibility = 'visible';
						document.getElementById("time").innerHTML = timecode(milliseconds);
					}
				});
			}

			function play() {
				Recorder.stop();
				Recorder.play({
					progress : function(milliseconds) {
						document.getElementById("time").innerHTML = timecode(milliseconds);
					}
				});
			}

			function stop() {
				document.getElementById("recording").style.visibility = 'hidden';
				Recorder.stop();
			}

			function upload(filename, title, level) {
				document.getElementById("uploading").style.visibility = 'visible';
				Recorder.upload({
					method : "POST",
					url : "http://lala.bugs3.com/recording/recorder_server.php",
					audioParam : "audio",
					params : {
						"name" : filename,
						"title" : title,
						"level" : level
					},
					success : function() {
						alert("Your file was uploaded!");
						document.getElementById("uploading").style.visibility = 'hidden';
					}
				});
			}
		</script>


<?php
$pageName = "Project Social Computing - Lessons";
include ('../header.php');
include ('../menu.php');

echo "<div class='right' style='padding-top:20px;'>";
include '../db/dbconnect.php';

echo getLevelLesson($level, str_replace("_", " ", $title)) . "<div class='backLink'><button type='button' onclick = 'location.href=&#39;Level" . $level . ".html&#39;'>Level " . $level . "</button></div>";
?>
<div style="height:450px;">
			<div id="wrapper">
				<div style="text-align:center;">
					<a href="javascript:record()" id="record" ><img src="../img/Record.gif"/></a>
					<a href="javascript:play()" id="play" ><img src="../img/Play.gif"/></a>
					<a href="javascript:stop()" id="stop" ><img src="../img/Stop.gif"/></a>
					<?php $uploadString= "javascript:upload('audio','".$title."',".$level.")" ?>
					<a href=<?=$uploadString?> id="upload" ><img src="../img/Submit.gif"/></a>
				</div>

				<div id="recording" style="visibility: hidden; text-align:center;">
					Recording ...
				</div>
				<div id="uploading" style="visibility: hidden; text-align:center;">
					Uploading ...
				</div>
				<div id="time" style="text-align:center;">
					0:00
				</div>
			</div>
		</div>

<?php
echo "</div>";
include ('../footer.php');
echo "</body></html>";
?>