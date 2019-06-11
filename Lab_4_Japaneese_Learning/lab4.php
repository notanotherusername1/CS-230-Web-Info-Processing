<!-- REFRENCES of sources that were used to aid with the assignment -->
<!-- http://jsfiddle.net/xwrvxser/1/ -->
<!-- https://www.ikhtabirni.com/how-to-create-a-simple-random-quiz.html -->
<!-- https://www.ikhtabirni.com/how-to-make-a-simple-quiz-using-html-javasript-and-css.html -->
<!-- https://stackoverflow.com/help/referencing -->
<!-- https://www.sitepoint.com/simple-javascript-quiz/#demo -->
<!-- https://stackoverflow.com/questions/8810927/showing-an-image-from-an-array-of-images-javascript -->
<!-- http://jsfiddle.net/hP3JH/ -->
<!-- https://stackoverflow.com/questions/33378148/how-do-i-use-javascript-to-select-audio-file-from-button-value -->
<!-- https://developer.mozilla.org/en-US/docs/Learn/JavaScript/First_steps/Useful_string_methods -->
<!-- https://www.w3schools.com/jsref/met_document_createelement.asp -->
<!-- https://www.w3schools.com/jsref/tryit.asp?filename=tryjsref_substring -->
<!-- https://www.w3schools.com/jsref/jsref_substring.asp -->
<!-- https://www.sitepoint.com/community/t/createelement-and-array/265172/6 -->
<!-- https://www.w3schools.com/js/js_arrays.asp -->


<!DOCTYPE HTML>
<html>
	<body>
        <h1> Lab 6-8 / Assignment 4 </h1>
        <br/>
		<table id="zeeTable">
		<tr>
			<th id="westernLetters" bgcolor="#FFF55A">  </th>
			<th id="westernLetters" bgcolor="#FFF55A"> a </th>
			<th id="westernLetters" bgcolor="#FFF55A"> i </th>
			<th id="westernLetters" bgcolor="#FFF55A"> u </th>
			<th id="westernLetters" bgcolor="#FFF55A"> e </th>
			<th id="westernLetters" bgcolor="#FFF55A"> o </th>

		</tr>
		<tr>
			<td span style="font-weight:bold">
				<div>a Row</div>      	    
        	</td>

        	<td>
				<div class="card">
        	        <audio id="sounda" src="resources/sounds/a.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('sounda').play();">
        	        <img src="resources/letters/a.png" ><br><div align = "center">a</div>
        	        <img src="resources/lettersStroke/a.gif" class="img-top" ></a>
				</div>      	    
        	</td>
			<td>
				<div class="card">
        	        <audio id="soundi" src="resources/sounds/i.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundi').play();">
        	        <img src="resources/letters/i.png" ><br><div align = "center">i</div>
        	        <img src="resources/lettersStroke/i.gif" class="img-top" ></a>
        	    </div>
			</td>
			<td>
				<div class="card">
        	        <audio id="soundu" src="resources/sounds/u.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundu').play();">
        	        <img src="resources/letters/u.png" ><br><div align = "center">u</div>
        	        <img src="resources/lettersStroke/u.gif" class="img-top" ></a>
        	    </div>
			</td>
			<td>
				<div class="card">
        	        <audio id="sounde" src="resources/sounds/e.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('sounde').play();">
        	        <img src="resources/letters/e.png" ><br><div align = "center">e</div>
        	        <img src="resources/lettersStroke/e.gif" class="img-top" ></a>
        	    </div>
			</td>
			<td>
				<div class="card">
        	        <audio id="soundo" src="resources/sounds/o.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundo').play();">
        	        <img src="resources/letters/o.png" ><br><div align = "center">o</div>
        	        <img src="resources/lettersStroke/o.gif" class="img-top" ></a>
        	    </div>
			</td>
		</tr>

		<tr>
			<td span style="font-weight:bold">
				<div>ka Row</div>      	    
        	</td>

        	<td>
				<div class="card">
        	        <audio id="soundka" src="resources/sounds/ka.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundka').play();">
        	        <img src="resources/letters/ka.png" ><br><div align = "center">ka</div>
        	        <img src="resources/lettersStroke/ka.gif" class="img-top" ></a>
				</div>      	    
        	</td>
        	<td>
				<div class="card">
        	        <audio id="soundki" src="resources/sounds/ki.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundki').play();">
        	        <img src="resources/letters/ki.png" ><br><div align = "center">ki</div>
        	        <img src="resources/lettersStroke/ki.gif" class="img-top" ></a>
				</div>      	    
        	</td>
        	<td>
				<div class="card">
        	        <audio id="soundku" src="resources/sounds/ku.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundku').play();">
        	        <img src="resources/letters/ku.png" ><br><div align = "center">ku</div>
        	        <img src="resources/lettersStroke/ku.gif" class="img-top" ></a>
				</div>      	    
        	</td>
        	<td>
				<div class="card">
        	        <audio id="soundke" src="resources/sounds/ke.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundke').play();">
        	        <img src="resources/letters/ke.png" ><br><div align = "center">ke</div>
        	        <img src="resources/lettersStroke/ke.gif" class="img-top" ></a>
				</div>      	    
        	</td>
        	<td>
				<div class="card">
        	        <audio id="soundko" src="resources/sounds/ko.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundko').play();">
        	        <img src="resources/letters/ko.png" ><br><div align = "center">ko</div>
        	        <img src="resources/lettersStroke/ko.gif" class="img-top" ></a>
				</div>      	    
        	</td>
		</tr>

		<tr>
			<td span style="font-weight:bold">
				<div>sa Row</div>      	    
        	</td>

        	<td>
				<div class="card">
        	        <audio id="soundsa" src="resources/sounds/sa.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundsa').play();">
        	        <img src="resources/letters/sa.png" ><br><div align = "center">sa</div>
        	        <img src="resources/lettersStroke/sa.gif" class="img-top" ></a>
				</div>      	    
        	</td>
        	<td>
				<div class="card">
        	        <audio id="soundshi" src="resources/sounds/shi.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundshi').play();">
        	        <img src="resources/letters/shi.png" ><br><div align = "center">shi</div>
        	        <img src="resources/lettersStroke/shi.gif" class="img-top" ></a>
				</div>      	    
        	</td>
        	<td>
				<div class="card">
        	        <audio id="soundsu" src="resources/sounds/su.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundsu').play();">
        	        <img src="resources/letters/su.png" ><br><div align = "center">su</div>
        	        <img src="resources/lettersStroke/su.gif" class="img-top" ></a>
				</div>      	    
        	</td>
        	<td>
				<div class="card">
        	        <audio id="soundse" src="resources/sounds/se.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundse').play();">
        	        <img src="resources/letters/se.png" ><br><div align = "center">se</div>
        	        <img src="resources/lettersStroke/se.gif" class="img-top" ></a>
				</div>      	    
        	</td>
        	<td>
				<div class="card">
        	        <audio id="soundso" src="resources/sounds/so.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundso').play();">
        	        <img src="resources/letters/so.png" ><br><div align = "center">so</div>
        	        <img src="resources/lettersStroke/so.gif" class="img-top" ></a>
				</div>      	    
        	</td>
		</tr>

		<tr>
			<td span style="font-weight:bold">
				<div>ta Row</div>      	    
        	</td>

        	<td>
				<div class="card">
        	        <audio id="soundta" src="resources/sounds/ta.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundta').play();">
        	        <img src="resources/letters/ta.png" ><br><div align = "center">ta</div>
        	        <img src="resources/lettersStroke/ta.gif" class="img-top" ></a>
				</div>      	    
        	</td>
        	<td>
				<div class="card">
        	        <audio id="soundchi" src="resources/sounds/chi.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundchi').play();">
        	        <img src="resources/letters/chi.png" ><br><div align = "center">chi</div>
        	        <img src="resources/lettersStroke/chi.gif" class="img-top" ></a>
				</div>      	    
        	</td>
        	<td>
				<div class="card">
        	        <audio id="soundtsu" src="resources/sounds/tsu.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundtsu').play();">
        	        <img src="resources/letters/tsu.png" ><br><div align = "center">tsu</div>
        	        <img src="resources/lettersStroke/tsu.gif" class="img-top" ></a>
				</div>      	    
        	</td>
        	<td>
				<div class="card">
        	        <audio id="soundte" src="resources/sounds/te.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundte').play();">
        	        <img src="resources/letters/te.png" ><br><div align = "center">te</div>
        	        <img src="resources/lettersStroke/te.gif" class="img-top" ></a>
				</div>      	    
        	</td>
        	<td>
				<div class="card">
        	        <audio id="soundto" src="resources/sounds/to.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundto').play();">
        	        <img src="resources/letters/to.png" ><br><div align = "center">to</div>
        	        <img src="resources/lettersStroke/to.gif" class="img-top" ></a>
				</div>      	    
        	</td>
		</tr>
		
		<tr>
			<td span style="font-weight:bold">
				<div>na Row</div>      	    
        	</td>

        	<td>
				<div class="card">
        	        <audio id="soundna" src="resources/sounds/na.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundna').play();">
        	        <img src="resources/letters/na.png" ><br><div align = "center">na</div>
        	        <img src="resources/lettersStroke/na.gif" class="img-top" ></a>
				</div>      	    
        	</td>
        	<td>
				<div class="card">
        	        <audio id="soundni" src="resources/sounds/ni.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundni').play();">
        	        <img src="resources/letters/ni.png" ><br><div align = "center">ni</div>
        	        <img src="resources/lettersStroke/ni.gif" class="img-top" ></a>
				</div>      	    
        	</td>
        	<td>
				<div class="card">
        	        <audio id="soundnu" src="resources/sounds/nu.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundnu').play();">
        	        <img src="resources/letters/nu.png" ><br><div align = "center">nu</div>
        	        <img src="resources/lettersStroke/nu.gif" class="img-top" ></a>
				</div>      	    
        	</td>
        	<td>
				<div class="card">
        	        <audio id="soundne" src="resources/sounds/ne.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundne').play();">
        	        <img src="resources/letters/ne.png" ><br><div align = "center">ne</div>
        	        <img src="resources/lettersStroke/ne.gif" class="img-top" ></a>
				</div>      	    
        	</td>
        	<td>
				<div class="card">
        	        <audio id="soundno" src="resources/sounds/no.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundno').play();">
        	        <img src="resources/letters/no.png" ><br><div align = "center">no</div>
        	        <img src="resources/lettersStroke/no.gif" class="img-top" ></a>
				</div>      	    
        	</td>
		</tr>

		<tr>
			<td span style="font-weight:bold">
				<div>ha Row</div>      	    
        	</td>

        	<td>
				<div class="card">
        	        <audio id="soundha" src="resources/sounds/ha.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundha').play();">
        	        <img src="resources/letters/ha.png" ><br><div align = "center">ha</div>
        	        <img src="resources/lettersStroke/ha.gif" class="img-top" ></a>
				</div>      	    
        	</td>
        	<td>
				<div class="card">
        	        <audio id="soundhi" src="resources/sounds/hi.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundhi').play();">
        	        <img src="resources/letters/hi.png" ><br><div align = "center">hi</div>
        	        <img src="resources/lettersStroke/hi.gif" class="img-top" ></a>
				</div>      	    
        	</td>
        	<td>
				<div class="card">
        	        <audio id="soundfu" src="resources/sounds/fu.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundfu').play();">
        	        <img src="resources/letters/fu.png" ><br><div align = "center">fu</div>
        	        <img src="resources/lettersStroke/fu.gif" class="img-top" ></a>
				</div>      	    
        	</td>
        	<td>
				<div class="card">
        	        <audio id="soundhe" src="resources/sounds/he.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundhe').play();">
        	        <img src="resources/letters/he.png" ><br><div align = "center">he</div>
        	        <img src="resources/lettersStroke/he.gif" class="img-top" ></a>
				</div>      	    
        	</td>
        	<td>
				<div class="card">
        	        <audio id="soundho" src="resources/sounds/ho.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundho').play();">
        	        <img src="resources/letters/ho.png" ><br><div align = "center">ho</div>
        	        <img src="resources/lettersStroke/ho.gif" class="img-top" ></a>
				</div>      	    
        	</td>
		</tr>
		
		<tr>
			<td span style="font-weight:bold">
				<div>ma Row</div>      	    
        	</td>

        	<td>
				<div class="card">
        	        <audio id="soundma" src="resources/sounds/ma.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundma').play();">
        	        <img src="resources/letters/ma.png" ><br><div align = "center">ma</div>
        	        <img src="resources/lettersStroke/ma.gif" class="img-top" ></a>
				</div>      	    
        	</td>
        	<td>
				<div class="card">
        	        <audio id="soundmi" src="resources/sounds/mi.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundmi').play();">
        	        <img src="resources/letters/mi.png" ><br><div align = "center">mi</div>
        	        <img src="resources/lettersStroke/mi.gif" class="img-top" ></a>
				</div>      	    
        	</td>
        	<td>
				<div class="card">
        	        <audio id="soundmu" src="resources/sounds/mu.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundmu').play();">
        	        <img src="resources/letters/mu.png" ><br><div align = "center">mu</div>
        	        <img src="resources/lettersStroke/mu.gif" class="img-top" ></a>
				</div>      	    
        	</td>
        	<td>
				<div class="card">
        	        <audio id="soundme" src="resources/sounds/me.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundme').play();">
        	        <img src="resources/letters/me.png" ><br><div align = "center">me</div>
        	        <img src="resources/lettersStroke/me.gif" class="img-top" ></a>
				</div>      	    
        	</td>
        	<td>
				<div class="card">
        	        <audio id="soundmo" src="resources/sounds/mo.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundmo').play();">
        	        <img src="resources/letters/mo.png" ><br><div align = "center">mo</div>
        	        <img src="resources/lettersStroke/mo.gif" class="img-top" ></a>
				</div>      	    
        	</td>
		</tr>

		<tr>
			<td span style="font-weight:bold">
				<div>ya Row</div>      	    
        	</td>

        	<td>
				<div class="card">
        	        <audio id="soundya" src="resources/sounds/ya.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundya').play();">
        	        <img src="resources/letters/ya.png" ><br><div align = "center">ya</div>
        	        <img src="resources/lettersStroke/ya.gif" class="img-top" ></a>
				</div>      	    
        	</td>
        	<td>
				<div class="card"></div>      	    
        	</td>
        	<td>
				<div class="card">
        	        <audio id="soundyu" src="resources/sounds/yu.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundyu').play();">
        	        <img src="resources/letters/yu.png" ><br><div align = "center">yu</div>
        	        <img src="resources/lettersStroke/yu.gif" class="img-top" ></a>
				</div>      	    
        	</td>
        	<td>
				<div class="card"></div>      	    
        	</td>
        	<td>
				<div class="card">
        	        <audio id="soundyo" src="resources/sounds/yo.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundyo').play();">
        	        <img src="resources/letters/yo.png" ><br><div align = "center">yo</div>
        	        <img src="resources/lettersStroke/yo.gif" class="img-top" ></a>
				</div>      	    
        	</td>
		</tr>


		<tr>
			<td span style="font-weight:bold">
				<div>ra Row</div>      	    
        	</td>

        	<td>
				<div class="card">
        	        <audio id="soundra" src="resources/sounds/ra.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundra').play();">
        	        <img src="resources/letters/ra.png" ><br><div align = "center">ra</div>
        	        <img src="resources/lettersStroke/ra.gif" class="img-top" ></a>
				</div>      	    
        	</td>
        	<td>
				<div class="card">
        	        <audio id="soundri" src="resources/sounds/ri.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundri').play();">
        	        <img src="resources/letters/ri.png" ><br><div align = "center">ri</div>
        	        <img src="resources/lettersStroke/ri.gif" class="img-top" ></a>
				</div>       	    
        	</td>
        	<td>
				<div class="card">
        	        <audio id="soundru" src="resources/sounds/ru.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundru').play();">
        	        <img src="resources/letters/ru.png" ><br><div align = "center">ru</div>
        	        <img src="resources/lettersStroke/ru.gif" class="img-top" ></a>
				</div>      	    
        	</td>
        	<td>
			<div class="card">
        	        <audio id="soundre" src="resources/sounds/re.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundre').play();">
        	        <img src="resources/letters/re.png" ><br><div align = "center">re</div>
        	        <img src="resources/lettersStroke/re.gif" class="img-top" ></a>
				</div>     	    
        	</td>
        	<td>
				<div class="card">
        	        <audio id="soundro" src="resources/sounds/ro.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundro').play();">
        	        <img src="resources/letters/ro.png" ><br><div align = "center">ro</div>
        	        <img src="resources/lettersStroke/ro.gif" class="img-top" ></a>
				</div>      	    
        	</td>
		</tr>

		<tr>
			<td span style="font-weight:bold">
				<div>wa Row</div>      	    
        	</td>

        	<td>
				<div class="card">
        	        <audio id="soundwa" src="resources/sounds/wa.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundwa').play();">
        	        <img src="resources/letters/wa.png" ><br><div align = "center">wa</div>
        	        <img src="resources/lettersStroke/wa.gif" class="img-top" ></a>
				</div>      	    
        	</td>
        	<td>
				<div class="card"></div>       	    
        	</td>
        	<td>
				<div class="card"></div>      	    
        	</td>
        	<td>
			<div class="card"></div>     	    
        	</td>
        	<td>
				<div class="card">
        	        <audio id="soundwo" src="resources/sounds/wo.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundwo').play();">
        	        <img src="resources/letters/wo.png" ><br><div align = "center">wo</div>
        	        <img src="resources/lettersStroke/wo.gif" class="img-top" ></a>
				</div>      	    
        	</td>
		</tr>

		<tr>
			<td span style="font-weight:bold">
				<div></div>      	    
        	</td>
			<td>
				<div class="card" >
					<audio id="soundn" src="resources/sounds/n.mp3" preload="auto"></audio>
        	        <a onclick="document.getElementById('soundn').play();">
        	        <img id ="nLet" src="resources/letters/n.png" ><br><div align = "center">n</div>
        	        <img src="resources/lettersStroke/n.gif" class="img-top" ></a>
				</div>     	    
        	</td>
			<td>
				<div class="card"></div>       	    
        	</td>
        	<td>
				<div class="card"></div>      	    
        	</td>
        	<td>
			<div class="card"></div>     	    
        	</td>
			<td>
			<div class="card"></div>     	    
        	</td>
		</tr>
		</table>

		<div id ="quizOneBox">
		<div id="disappearPlz"><button id="myBtn" name = "kanaQuiz" onclick=starrtQuiz()>Kana Quiz 1</button></div>
		<br>
		<!-- a holder for the quiz when user clicks to start the quiz -->
		<div id = "quizHolder"> </div>
		</div>
		<br>

		<div id=quiz2>
		<div id=disappearPlz2><button id="myBtn2" name = "romajiQuiz" onclick=starrtQuiz2()>Romaji Quiz 2</button></div>
		<br>
		<div id = "quizHolder2"> </div>
		</div>
		<br>


<script> 
	//Global variables declaration
	var kanaObjects = new Array;
	kanaObjects[0] = new Image();
	kanaObjects[0].src = "resources/lettersStroke/n.gif";
	kanaObjects[1] = new Image();
	kanaObjects[1].src = "resources/lettersStroke/o.gif";
	kanaObjects[2] = new Image();
	kanaObjects[2].src = "resources/lettersStroke/a.gif";
	kanaObjects[3] = new Image();
	kanaObjects[3].src = "resources/lettersStroke/i.gif";
	kanaObjects[4] = new Image();
	kanaObjects[4].src = "resources/lettersStroke/u.gif";
	kanaObjects[5] = new Image();
	kanaObjects[5].src = "resources/lettersStroke/e.gif";
	kanaObjects[6] = new Image();
	kanaObjects[6].src = "resources/lettersStroke/ka.gif";
	kanaObjects[7] = new Image();
	kanaObjects[7].src = "resources/lettersStroke/ki.gif";
	kanaObjects[8] = new Image();
	kanaObjects[8].src = "resources/lettersStroke/ku.gif";
	kanaObjects[9] = new Image();
	kanaObjects[9].src = "resources/lettersStroke/ke.gif";

	var romajiSounds = ["n", "o", "a", "i", "u", "e", "ka", "ki", "ku", "ke"];
	var random001 = 0;

	function starrtQuiz(){
		document.getElementById("quiz2").innerHTML = "";
		kanaQuiz(random001);
	}

	function tableHide(){
		const tableRuling = document.getElementById("zeeTable");
		tableRuling.style.display = "none";
	}
	
	function tableHide1(){
		const tableRuling = document.getElementById("zeeTable");
		if (tableRuling.style.display === "none") {
			tableRuling.style.display = "block";
			document.getElementById("hideDiv").innerHTML = "";
			//********FOR now this funct will exit quiz when its done by: -Show table, - puts back button "kana Quiz" , - creates div for quizHolder
			/* */
			document.getElementById("disappearPlz").innerHTML = "";
			document.getElementById("quiz2").innerHTML = "<div id=quiz2><div id=disappearPlz2><button id=myBtn2 name = romajiQuiz onclick=starrtQuiz2()>Romaji Quiz 2</button></div><br>" +
			"<div id = quizHolder2> </div><br></div>";
			//document.getElementById("disappearPlz").innerHTML = "<div id=disappearPlz2><button id=myBtn2 name = romajiQuiz onclick=starrtQuiz2()>Romaji Quiz 2</button></div><br>" +
			//"<div id = quizHolder2> </div><br>";
		} else {
		    tableRuling.style.display = "none";
		}
	}

		var correct = 0;
		var incorrect = 0;
		var qAttempt = 0;
		qAttempt++;
		var percentageQ= 0;

	function kanaQuiz(x){
		console.log("$$$ KANA QUIZ  entered ");
		tableHide();
		document.getElementById("disappearPlz").innerHTML = "";
		console.log("x "+ x);
		console.log("percentageQ %%%%"+ percentageQ);
		const quizHolder = document.getElementById("quizHolder");
		var qNum = x+1;

		if (qNum<5){
			quizHolder.innerHTML = "Correct: <text id=score></text>" + correct + "  Attempt: <text id=attempt></text>"  + qAttempt +  "  Incorrect: <text id=incorrect></text>" + incorrect +
			"<p id=message001>" + "  Q" + qNum + ":  What is the romaji of the following Kana <text id=name001 alt=JapaneeseLetter style=width:50px;height:50px;></text>?</p>" +
			"<div id=disappear001><button id=input001 onclick=submit001('n')>n</button><button id=input001 onclick=submit001('o')>o</button>" +
			"<button id=input001 onclick=submit001('a')>a</button><button id=input001 onclick=submit001('i')>i</button></div>"+
			"<p id=answer001></p>" +
			"<p id=button001></p>" ;
			document.getElementById("name001").appendChild(kanaObjects[x]);
			console.log("x second time "+ x);
			console.log("name001 "+ name001.innerHTML);
		} else if (qNum<9){
			quizHolder.innerHTML = "Correct: <text id=score></text>"+ correct + "  Attempt: <text id=attempt></text>"  + qAttempt +  "  Incorrect: <text id=incorrect></text>"  + incorrect+ 
			"<p id=message001>" + "  Q" + qNum + ":  What is the romaji of the following Kana <text id=name001 alt=JapaneeseLetter style=width:50px;height:50px;></text>?</p>" +
			"<div id=disappear001><button id=input001 onclick=submit001('u')>u</button><button id=input001 onclick=submit001('e')>e</button>" +
			"<button id=input001 onclick=submit001('ka')>ka</button><button id=input001 onclick=submit001('ki')>ki</button></div>"+
			"<p id=answer001></p>" +
			"<p id=button001></p>" ;
			document.getElementById("name001").appendChild(kanaObjects[x]);
			console.log("x second time "+ x);
			console.log("name001 "+ name001.innerHTML);
		} else if(qNum<11){
			quizHolder.innerHTML = "Correct: <text id=score></text>"+ correct + "  Attempt: <text id=attempt></text>"  + qAttempt +  "  Incorrect: <text id=incorrect></text>"+ incorrect +
			"<p id=message001>" + "  Q" + qNum + ":  What is the romaji of the following Kana <text id=name001 alt=JapaneeseLetter style=width:50px;height:50px;></text>?</p>" +
			"<div id=disappear001><button id=input001 onclick=submit001('ku')>ku</button><button id=input001 onclick=submit001('ke')>ke</button>" +
			"<button id=input001 onclick=submit001('ka')>ka</button><button id=input001 onclick=submit001('ki')>ki</button></div>"+
			"<p id=answer001></p>" +
			"<p id=button001></p>" ;
			document.getElementById("name001").appendChild(kanaObjects[x]);
			console.log("x second time "+ x);
			console.log("name001 "+ name001.innerHTML);
		}  else if(qNum<12){
			console.log("percentage is " + (correct/10)*100);
			percentageQ = (correct/10)*100;
			quizHolder.innerHTML = "<b>Quiz:1 </b> Kana Elements Recognition</br><b>Correct  </b>"+ correct + "</br><b>Incorrect  </b>" + incorrect + "<br/><b>Percentage </b> of Kana Elements Recognition   <b>"
			+ percentageQ +"%" + "<div id=hideDiv></br><button onclick=tableHide1()>Back to harigana</button></div>";
			console.log("x second time "+ x);
		}
	}

	function submit001(b){
		console.log("b : " +b);
		console.log("random001 : " +random001);
		console.log("correctb : " +correct);
		console.log("incorrect XX : " +incorrect);
		console.log("qAttempt : " +qAttempt);
        if (random001 === 0 && b == romajiSounds[0]){
			correct++;
			qAttempt++;
            document.getElementById("answer001").innerHTML = "Correct..";
            document.getElementById("button001").innerHTML = "<button onclick=kanaQuiz(1)>Next</button>";
            document.getElementById("disappear001").innerHTML = "";
        }else if (random001 == 1 && b == romajiSounds[1]){
			correct++;
			qAttempt++;
            document.getElementById("answer001").innerHTML = "Correct..";
           	document.getElementById("button001").innerHTML = "<button onclick=kanaQuiz(2)>Next</button>";
            document.getElementById("disappear001").innerHTML = "";
		}else if (random001 == 2 && b == romajiSounds[2]){
			correct++;
			qAttempt++;
             document.getElementById("answer001").innerHTML = "Correct..";
             document.getElementById("button001").innerHTML = "<button onclick=kanaQuiz(3)>Next</button>";
             document.getElementById("disappear001").innerHTML = "";
		}else if (random001 == 3 && b == romajiSounds[3]){
			correct++;
			qAttempt++;
            document.getElementById("answer001").innerHTML = "Correct..";
            document.getElementById("button001").innerHTML = "<button onclick=kanaQuiz(4)>Next</button>";
			document.getElementById("disappear001").innerHTML = "";
        }else if (random001 == 4 && b == romajiSounds[4]){
			correct++;
			qAttempt++;
            document.getElementById("answer001").innerHTML = "Correct..";
           	document.getElementById("button001").innerHTML = "<button onclick=kanaQuiz(5)>Next</button>";
            document.getElementById("disappear001").innerHTML = "";
		}else if (random001 == 5 && b == romajiSounds[5]){
			correct++;
			qAttempt++; 
			document.getElementById("answer001").innerHTML = "Correct..";
            document.getElementById("button001").innerHTML = "<button onclick=kanaQuiz(6)>Next</button>";
            document.getElementById("disappear001").innerHTML = "";
		}else if (random001 == 6 && b == romajiSounds[6]){
			correct++;
			qAttempt++;
			document.getElementById("answer001").innerHTML = "Correct..";
            document.getElementById("button001").innerHTML = "<button onclick=kanaQuiz(7)>Next</button>";
			document.getElementById("disappear001").innerHTML = "";
        } else if (random001 == 7 && b == romajiSounds[7]){
			correct++;
			qAttempt++;
			document.getElementById("answer001").innerHTML = "Correct..";
           	document.getElementById("button001").innerHTML = "<button onclick=kanaQuiz(8)>Next</button>";
            document.getElementById("disappear001").innerHTML = "";
		}else if (random001 == 8 && b == romajiSounds[8]){
			correct++;
			qAttempt++; 
			document.getElementById("answer001").innerHTML = "Correct..";
            document.getElementById("button001").innerHTML = "<button onclick=kanaQuiz(9)>Next</button>";
            document.getElementById("disappear001").innerHTML = "";
		}else if (random001 == 9 && b == romajiSounds[9]){
			correct++;
			qAttempt++;
			document.getElementById("answer001").innerHTML = "Correct..";
            document.getElementById("button001").innerHTML = "<button onclick=kanaQuiz(10)>End the Quiz</button>";
			document.getElementById("disappear001").innerHTML = "";
        }else{
			qAttempt++;
			incorrect++;
            document.getElementById("answer001").innerHTML = "Incorrect..";
            document.getElementById("button001").innerHTML = "<button onclick=kanaQuiz(random001)>Next</button>";
            document.getElementById("disappear001").innerHTML = "";
		}
		random001++;
	}		



	// ***QUIZ TOO***
	//Global variables declaration
	var kanaObjects2 = new Array;
	kanaObjects2[0] = new Image();
	kanaObjects2[0].src = "resources/lettersStroke/n.gif";
	kanaObjects2[1] = new Image();
	kanaObjects2[1].src = "resources/lettersStroke/o.gif";
	kanaObjects2[2] = new Image();
	kanaObjects2[2].src = "resources/lettersStroke/a.gif";
	kanaObjects2[3] = new Image();
	kanaObjects2[3].src = "resources/lettersStroke/i.gif";
	kanaObjects2[4] = new Image();
	kanaObjects2[4].src = "resources/lettersStroke/u.gif";
	kanaObjects2[5] = new Image();
	kanaObjects2[5].src = "resources/lettersStroke/e.gif";
	kanaObjects2[6] = new Image();
	kanaObjects2[6].src = "resources/lettersStroke/ka.gif";
	kanaObjects2[7] = new Image();
	kanaObjects2[7].src = "resources/lettersStroke/ki.gif";
	kanaObjects2[8] = new Image();
	kanaObjects2[8].src = "resources/lettersStroke/ku.gif";
	kanaObjects2[9] = new Image();
	kanaObjects2[9].src = "resources/lettersStroke/ke.gif";

	var newDiv0 = document.createElement("p");
	newDiv0.innerHTML = 'n';
	var newDiv1 = document.createElement("p");
	newDiv1.innerHTML = 'o';
	var newDiv2 = document.createElement("p");
	newDiv2.innerHTML = 'a';
	var newDiv3 = document.createElement("p");
	newDiv3.innerHTML = 'i';
	var newDiv4 = document.createElement("p");
	newDiv4.innerHTML = 'u';
	var newDiv5 = document.createElement("p");
	newDiv5.innerHTML = 'e';
	var newDiv6 = document.createElement("p");
	newDiv6.innerHTML = 'ka';
	var newDiv7 = document.createElement("p");
	newDiv7.innerHTML = 'ki';
	var newDiv8 = document.createElement("p");
	newDiv8.innerHTML = 'ku';
	var newDiv9 = document.createElement("p");
	newDiv9.innerHTML = 'ke';
	//(n,o,a,i,u,e,ka,ki,ku,ke);
	
	//var romajiSounds2 = document.createTextNode("[n, o, a, i, u, e, ka, ki, ku, ke]"); 
	//newDiv.appendChild(romajiSounds2);

	//var romajiSounds2 = ["n", "o", "a", "i", "u", "e", "ka", "ki", "ku", "ke"];

	var random = 0;

	function starrtQuiz2(){
		document.getElementById("quizOneBox").innerHTML = "";
		romajiQuizTwo(random);
	}

	function tableHideTwo(){
			const tableRulingTwo = document.getElementById("zeeTable");
			tableRulingTwo.style.display = "none";
	}

	function tableHide2Again(){
		const tableRulingTwo = document.getElementById("zeeTable");
		//tableRuling.style.display='none';
		// tableRuling.innerHTML = "";
		if (tableRulingTwo.style.display === "none") {
			tableRulingTwo.style.display = "block";
			document.getElementById("disappearPlz2").innerHTML = "";
			document.getElementById("quizOneBox").innerHTML = "<div id =quizOneBox><div id=disappearPlz>" + "<div id = quizHolder> </div>" +
			"<button id=myBtn name = kanaQuiz onclick=starrtQuiz()>Kana Quiz 1</button></div>" +
			"<br><div id = quizHolder> </div></div><br>";
			document.getElementById("hideDivTwo").innerHTML = "";
		} else {
		    tableRulingTwo.style.display = "none";
		}
	}

	var correct2 = 0;
	var incorrect2 = 0;
	var qAttempt2 = 0;
	qAttempt2++;
	var percentageQ2= 0;

	function romajiQuizTwo(y){
		console.log("$$$ ROMAJI quiz entered ");
		
		tableHideTwo();
		document.getElementById("disappearPlz2").innerHTML = "";
		const quizHolder2 = document.getElementById("quizHolder2");
		var qNumTwo = y+1;

		if (qNumTwo<=1){
			quizHolder2.innerHTML = "Correct: <text id=scoreTwo></text>" + correct2 + "  Attempt: <text id=attemptTwo></text>"  + qAttempt2 +  "  Incorrect: <text id=incorrect2></text>" + incorrect2 +
			"<p id=message2>" + "  Q" + qNumTwo + ":  What is the kana of the following romaji <text id=name2></text>?</p></br></br>" +
			// "<img id =nLet src=resources/letters/n.png >"+
			"<div id=disappear2><button id=input2 onclick=submit002('n')><img id =nLet src=resources/letters/n.png ></button><button id=input2 onclick=submit002('o')>" +
			"<img id =nLet src=resources/letters/o.png ></button><br/><br/><br/>" +
			"<button id=input2 onclick=submit002('a')><img id =nLet src=resources/letters/a.png ></button><button id=input2 onclick=submit002('i')><img id =nLet src=resources/letters/i.png ></button></div>"+
			"<p id=answer002></p>" +
			"<p id=button002></p>" ;
			//document.body.appendChild(newDiv);
			document.getElementById("name2").appendChild(newDiv0);
			console.log("y second time "+ y);
			console.log("name2 "+ name2.innerHTML);
		}else if(qNumTwo<=2){
			quizHolder2.innerHTML = "Correct: <text id=scoreTwo></text>" + correct2 + "  Attempt: <text id=attemptTwo></text>"  + qAttempt2 +  "  Incorrect: <text id=incorrect2></text>" + incorrect2 +
			"<p id=message2>" + "  Q" + qNumTwo + ":  What is the kana of the following romaji <text id=name2></text>?</p></br></br>" +
			// "<img id =nLet src=resources/letters/n.png >"+
			"<div id=disappear2><button id=input2 onclick=submit002('n')><img id =nLet src=resources/letters/n.png ></button><button id=input2 onclick=submit002('o')>" +
			"<img id =nLet src=resources/letters/o.png ></button><br/><br/><br/>" +
			"<button id=input2 onclick=submit002('a')><img id =nLet src=resources/letters/a.png ></button><button id=input2 onclick=submit002('i')><img id =nLet src=resources/letters/i.png ></button></div>"+
			"<p id=answer002></p>" +
			"<p id=button002></p>" ;
			//document.body.appendChild(newDiv);
			document.getElementById("name2").appendChild(newDiv1);
			console.log("y second time "+ y);
			console.log("name2 "+ name2.innerHTML);
		}else if(qNumTwo<=3){
			quizHolder2.innerHTML = "Correct: <text id=scoreTwo></text>" + correct2 + "  Attempt: <text id=attemptTwo></text>"  + qAttempt2 +  "  Incorrect: <text id=incorrect2></text>" + incorrect2 +
			"<p id=message2>" + "  Q" + qNumTwo + ":  What is the kana of the following romaji <text id=name2></text>?</p></br></br>" +
			// "<img id =nLet src=resources/letters/n.png >"+
			"<div id=disappear2><button id=input2 onclick=submit002('n')><img id =nLet src=resources/letters/n.png ></button><button id=input2 onclick=submit002('o')>" +
			"<img id =nLet src=resources/letters/o.png ></button><br/><br/><br/>" +
			"<button id=input2 onclick=submit002('a')><img id =nLet src=resources/letters/a.png ></button><button id=input2 onclick=submit002('i')><img id =nLet src=resources/letters/i.png ></button></div>"+
			"<p id=answer002></p>" +
			"<p id=button002></p>" ;
			//document.body.appendChild(newDiv);
			document.getElementById("name2").appendChild(newDiv2);
			console.log("y second time "+ y);
			console.log("name2 "+ name2.innerHTML);
		}else if(qNumTwo<=4){
			quizHolder2.innerHTML = "Correct: <text id=scoreTwo></text>" + correct2 + "  Attempt: <text id=attemptTwo></text>"  + qAttempt2 +  "  Incorrect: <text id=incorrect2></text>" + incorrect2 +
			"<p id=message2>" + "  Q" + qNumTwo + ":  What is the kana of the following romaji <text id=name2></text>?</p></br></br>" +
			// "<img id =nLet src=resources/letters/n.png >"+
			"<div id=disappear2><button id=input2 onclick=submit002('n')><img id =nLet src=resources/letters/n.png ></button><button id=input2 onclick=submit002('o')>" +
			"<img id =nLet src=resources/letters/o.png ></button><br/><br/><br/>" +
			"<button id=input2 onclick=submit002('a')><img id =nLet src=resources/letters/a.png ></button><button id=input2 onclick=submit002('i')><img id =nLet src=resources/letters/i.png ></button></div>"+
			"<p id=answer002></p>" +
			"<p id=button002></p>" ;
			//document.body.appendChild(newDiv);
			document.getElementById("name2").appendChild(newDiv3);
			console.log("y second time "+ y);
			console.log("name2 "+ name2.innerHTML);
		}else if(qNumTwo<=5){
			quizHolder2.innerHTML = "Correct: <text id=scoreTwo></text>" + correct2 + "  Attempt: <text id=attemptTwo></text>"  + qAttempt2 +  "  Incorrect: <text id=incorrect2></text>" + incorrect2 +
			"<p id=message2>" + "  Q" + qNumTwo + ":  What is the kana of the following romaji <text id=name2></text>?</p></br></br>" +
			// "<img id =nLet src=resources/letters/n.png >"+
			"<div id=disappear2><button id=input2 onclick=submit002('u')><img id =nLet src=resources/letters/u.png ></button><button id=input2 onclick=submit002('e')>" +
			"<img id =nLet src=resources/letters/e.png ></button><br/><br/><br/>" +
			"<button id=input2 onclick=submit002('ka')><img id =nLet src=resources/letters/ka.png ></button><button id=input2 onclick=submit002('ki')><img id =nLet src=resources/letters/ki.png ></button></div>"+
			"<p id=answer002></p>" +
			"<p id=button002></p>" ;
			//document.body.appendChild(newDiv);
			document.getElementById("name2").appendChild(newDiv4);
			console.log("y second time "+ y);
			console.log("name2 "+ name2.innerHTML);
		}else if(qNumTwo<=6){
			quizHolder2.innerHTML = "Correct: <text id=scoreTwo></text>" + correct2 + "  Attempt: <text id=attemptTwo></text>"  + qAttempt2 +  "  Incorrect: <text id=incorrect2></text>" + incorrect2 +
			"<p id=message2>" + "  Q" + qNumTwo + ":  What is the kana of the following romaji <text id=name2></text>?</p></br></br>" +
			// "<img id =nLet src=resources/letters/n.png >"+
			"<div id=disappear2><button id=input2 onclick=submit002('u')><img id =nLet src=resources/letters/u.png ></button><button id=input2 onclick=submit002('e')>" +
			"<img id =nLet src=resources/letters/e.png ></button><br/><br/><br/>" +
			"<button id=input2 onclick=submit002('ka')><img id =nLet src=resources/letters/ka.png ></button><button id=input2 onclick=submit002('ki')><img id =nLet src=resources/letters/ki.png ></button></div>"+
			"<p id=answer002></p>" +
			"<p id=button002></p>" ;
			//document.body.appendChild(newDiv);
			document.getElementById("name2").appendChild(newDiv5);
			console.log("y second time "+ y);
			console.log("name2 "+ name2.innerHTML);
		}else if(qNumTwo<=7){
			quizHolder2.innerHTML = "Correct: <text id=scoreTwo></text>" + correct2 + "  Attempt: <text id=attemptTwo></text>"  + qAttempt2 +  "  Incorrect: <text id=incorrect2></text>" + incorrect2 +
			"<p id=message2>" + "  Q" + qNumTwo + ":  What is the kana of the following romaji <text id=name2></text>?</p></br></br>" +
			// "<img id =nLet src=resources/letters/n.png >"+
			"<div id=disappear2><button id=input2 onclick=submit002('u')><img id =nLet src=resources/letters/u.png ></button><button id=input2 onclick=submit002('e')>" +
			"<img id =nLet src=resources/letters/e.png ></button><br/><br/><br/>" +
			"<button id=input2 onclick=submit002('ka')><img id =nLet src=resources/letters/ka.png ></button><button id=input2 onclick=submit002('ki')><img id =nLet src=resources/letters/ki.png ></button></div>"+
			"<p id=answer002></p>" +
			"<p id=button002></p>" ;
			//document.body.appendChild(newDiv);
			document.getElementById("name2").appendChild(newDiv6);
			console.log("y second time "+ y);
			console.log("name2 "+ name2.innerHTML);
		}else if(qNumTwo<=8){
			quizHolder2.innerHTML = "Correct: <text id=scoreTwo></text>" + correct2 + "  Attempt: <text id=attemptTwo></text>"  + qAttempt2 +  "  Incorrect: <text id=incorrect2></text>" + incorrect2 +
			"<p id=message2>" + "  Q" + qNumTwo + ":  What is the kana of the following romaji <text id=name2></text>?</p></br></br>" +
			// "<img id =nLet src=resources/letters/n.png >"+
			"<div id=disappear2><button id=input2 onclick=submit002('u')><img id =nLet src=resources/letters/u.png ></button><button id=input2 onclick=submit002('e')>" +
			"<img id =nLet src=resources/letters/e.png ></button><br/><br/><br/>" +
			"<button id=input2 onclick=submit002('ka')><img id =nLet src=resources/letters/ka.png ></button><button id=input2 onclick=submit002('ki')><img id =nLet src=resources/letters/ki.png ></button></div>"+
			"<p id=answer002></p>" +
			"<p id=button002></p>" ;
			//document.body.appendChild(newDiv);
			document.getElementById("name2").appendChild(newDiv7);
			console.log("y second time "+ y);
			console.log("name2 "+ name2.innerHTML);
		}else if(qNumTwo<=9){
			quizHolder2.innerHTML = "Correct: <text id=scoreTwo></text>" + correct2 + "  Attempt: <text id=attemptTwo></text>"  + qAttempt2 +  "  Incorrect: <text id=incorrect2></text>" + incorrect2 +
			"<p id=message2>" + "  Q" + qNumTwo + ":  What is the kana of the following romaji <text id=name2></text>?</p></br></br>" +
			// "<img id =nLet src=resources/letters/n.png >"+
			"<div id=disappear2><button id=input2 onclick=submit002('ku')><img id =nLet src=resources/letters/ku.png ></button><button id=input2 onclick=submit002('ke')>" +
			"<img id =nLet src=resources/letters/o.png ></button><br/><br/><br/>" +
			"<button id=input2 onclick=submit002('a')><img id =nLet src=resources/letters/a.png ></button><button id=input2 onclick=submit002('i')><img id =nLet src=resources/letters/i.png ></button></div>"+
			"<p id=answer002></p>" +
			"<p id=button002></p>" ;
			//document.body.appendChild(newDiv);
			document.getElementById("name2").appendChild(newDiv8);
			console.log("y second time "+ y);
			console.log("name2 "+ name2.innerHTML);
		}else if(qNumTwo<=10){
			quizHolder2.innerHTML = "Correct: <text id=scoreTwo></text>" + correct2 + "  Attempt: <text id=attemptTwo></text>"  + qAttempt2 +  "  Incorrect: <text id=incorrect2></text>" + incorrect2 +
			"<p id=message2>" + "  Q" + qNumTwo + ":  What is the kana of the following romaji <text id=name2></text>?</p></br></br>" +
			// "<img id =nLet src=resources/letters/n.png >"+
			"<div id=disappear2><button id=input2 onclick=submit002('ku')><img id =nLet src=resources/letters/ku.png ></button><button id=input2 onclick=submit002('ke')>" +
			"<img id =nLet src=resources/letters/o.png ></button><br/><br/><br/>" +
			"<button id=input2 onclick=submit002('a')><img id =nLet src=resources/letters/a.png ></button><button id=input2 onclick=submit002('i')><img id =nLet src=resources/letters/i.png ></button></div>"+
			"<p id=answer002></p>" +
			"<p id=button002></p>" ;
			//document.body.appendChild(newDiv);
			document.getElementById("name2").appendChild(newDiv9);
			console.log("y second time "+ y);
			console.log("name2 "+ name2.innerHTML);
		}else if(qNumTwo<=11){
			console.log("percentage is " + (correct2/10)*100);
			percentageQ2 = (correct2/10)*100;
			quizHolder2.innerHTML = "<b>Quiz:2 </b> Romaji Recognition</br><b>Correct  </b>"+ correct2 + "</br><b>Incorrect  </b>" +
			incorrect2 + "<br/><b>Percentage </b> of Romaji Recognition   <b>"
			+ percentageQ2 +"%" + "<div id=hideDivTwo></br><button onclick=tableHide2Again()>Back to harigana</button></div>";
			console.log("y second time "+ y);
		}
	}

	function submit002(a) {
		console.log("a : " +a);
		console.log("random : " +random);
		console.log("correct2 : " +correct2);
		console.log("incorrect2 XX : " +incorrect2);
		console.log("qAttempt2 : " +qAttempt2);
		console.log("newDiv0.innerHtml : " +newDiv0.innerHTML);
        if (random === 0 && a === newDiv0.innerHTML) {
			correct2++;
			qAttempt2++;
            document.getElementById("answer002").innerHTML = "Correct..";
            document.getElementById("button002").innerHTML = "<button onclick=romajiQuizTwo(1)>Next</button>";
            document.getElementById("disappear2").innerHTML = "";
        } else if (random == 1 && a == newDiv1.innerHTML) {
			correct2++;
			qAttempt2++;
            document.getElementById("answer002").innerHTML = "Correct..";
           	document.getElementById("button002").innerHTML = "<button onclick=romajiQuizTwo(2)>Next</button>";
            document.getElementById("disappear2").innerHTML = "";
		} else if (random == 2 && a == newDiv2.innerHTML) {
			correct2++;
			qAttempt2++;
             document.getElementById("answer002").innerHTML = "Correct..";
             document.getElementById("button002").innerHTML = "<button onclick=romajiQuizTwo(3)>Next</button>";
             document.getElementById("disappear2").innerHTML = "";
		} else if (random == 3 && a == newDiv3.innerHTML) {
			correct2++;
			qAttempt2++;
            document.getElementById("answer002").innerHTML = "Correct..";
            document.getElementById("button002").innerHTML = "<button onclick=romajiQuizTwo(4)>Next</button>";
			document.getElementById("disappear2").innerHTML = "";
        } else if (random == 4 && a == newDiv4.innerHTML) {
			correct2++;
			qAttempt2++;
            document.getElementById("answer002").innerHTML = "Correct..";
           	document.getElementById("button002").innerHTML = "<button onclick=romajiQuizTwo(5)>Next</button>";
            document.getElementById("disappear2").innerHTML = "";
		} else if (random == 5 && a == newDiv5.innerHTML) {
			correct2++;
			qAttempt2++; 
			document.getElementById("answer002").innerHTML = "Correct..";
            document.getElementById("button002").innerHTML = "<button onclick=romajiQuizTwo(6)>Next</button>";
            document.getElementById("disappear2").innerHTML = "";
		} else if (random == 6 && a == newDiv6.innerHTML) {
			correct2++;
			qAttempt2++;
			document.getElementById("answer002").innerHTML = "Correct..";
            document.getElementById("button002").innerHTML = "<button onclick=romajiQuizTwo(7)>Next</button>";
			document.getElementById("disappear2").innerHTML = "";
        }  else if (random == 7 && a == newDiv7.innerHTML) {
			correct2++;
			qAttempt2++;

			document.getElementById("answer002").innerHTML = "Correct..";
           	document.getElementById("button002").innerHTML = "<button onclick=romajiQuizTwo(8)>Next</button>";
            document.getElementById("disappear2").innerHTML = "";
		} else if (random == 8 && a == newDiv8.innerHTML) {
			correct2++;
			qAttempt2++; 
			document.getElementById("answer002").innerHTML = "Correct..";
            document.getElementById("button002").innerHTML = "<button onclick=romajiQuizTwo(9)>Next</button>";
            document.getElementById("disappear2").innerHTML = "";
		} else if (random == 9 && a == newDiv9.innerHTML) {
			correct2++;
			qAttempt2++;
			document.getElementById("answer002").innerHTML = "Correct..";
            document.getElementById("button002").innerHTML = "<button onclick=romajiQuizTwo(10)>End the Quiz</button>";
			document.getElementById("disappear2").innerHTML = "";
        }
        else {
			qAttempt2++;
			incorrect2++;
            document.getElementById("answer002").innerHTML = "Incorrect..";
            document.getElementById("button002").innerHTML = "<button onclick=romajiQuizTwo(random)>Next</button>";
            document.getElementById("disappear2").innerHTML = "";
		}
		random++;
	}		


</script>
      
    <style>
		img {
    		max-width: 100%;
    		max-height: 100%;
		}
		/* .heading{
			text: bold;
		} */
        .card {
            width: 100px;
            height: 100px;
            position: relative;
            display: inline-block;
			/* margin: 50px; */
			margin-right: 30px;
			margin-left: 20px;
			margin-top: 30px; */
			margin-bottom: 30px;
			float: left;
  			/* padding: 5px; */
			/* width: 33.33%; */
        }
        .card .img-top {
            display: none;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 99;
			align: center;
        }
        .card:hover .img-top {
            display: inline;
        }
	    h2{
	    	text-align: center;
	    }
	    body{
	    	font-size: 19px;
	    }
	    table{
			border-spacing: 10px;
	    	width: 50%;
	    	margin: 30px auto;
	    	border-collapse: collapse;
	    	text-align: left;
	    }
	    tr{
	    	border-bottom: 1px solid #cbcbcb;
	    }
	    th{
			text-align : center;
	        height: 30px;
			border: 1px solid;
  			padding: 10px;
	    }
		td{
			/* width: 50px;
            height: 50px;
	        /* border: none; */
	        /* height: 30px; */
	        padding: 2px; 
			border: 1px solid;
  			/* padding: 10px; */
  			box-shadow: 5px 10px #888888;
			text-align : center;
			/* text: bold; */
	    }
	    tr:hover{
	        background: #F5F5F5;
	    }
	    form{
	        width: 250px;
	        margin: 0 auto;
	        text-align: left;
	    }
		body{
    font-size: 20px;
    font-family: sans-serif;
    color: #333;
}
	</style>
	</body>
</html>