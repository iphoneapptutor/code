<article class="first last">

	<h3>The following Questions were incorrectly answered in this Quiz . . .</h3>
	<h4>Refer to the respective Sections for correct answers</h4>
	<br>

	<p>
		<?php
		//foreach ($_POST as $key => $value) {
		//if($key == "full") {
		//	print "before = " . unserialize(htmlspecialchars($value));
		//	$full = unserialize(htmlspecialchars($value));
		//}
		// echo htmlspecialchars($key)."<br>".htmlspecialchars($value)."<br>";
		//}
		$full=unserialize(base64_decode($_POST['full']));
		//print "full = " . $full;
		print "<table>";
		$max=$_POST['maximum'];
		$wronCtr=0;
		for($i=1;$i<=$max;$i++) {
		if(isset($_POST['option'.$i])) {
		$varOptName=$_POST['option'.$i];
		$varCorrectName=$_POST['correct'.$i];
		$varSectionName=$_POST['section'.$i];
		$varSectionLink=$_POST['sectionLink'.$i];
		$varQuestionName=$_POST['question'.$i];
		// print "Opted = " . $varOptName . " - ";
		// print "Corre = " . $varCorrectName . "<br>";
		// print "Opted = " . $full[$i][$varCorrectName] . " - ";
		// print "Corre = " . $full[$i][$varOptName] . "<br>";
		if($varOptName<>$varCorrectName) {
		print "<tr><td>";
		print "Question: ".$varQuestionName."<br>";
		print "Correct Answer: ".$full[$i][$varCorrectName]."<br>";
		print "Selected Answer: ".$full[$i][$varOptName]."<br>";
		print "Section to Refer: <a href=".$varSectionLink.">".$varSectionName."</a><br>";
		print "<br></td></tr>";
		} else {
		$wronCtr++;
		}
		}
		}
		print "<tr><td>";
		print $wronCtr." out of ".$max." are correct";
		print "<br></td></tr>";
		print "</table>";
		?>
	</p>
</article>