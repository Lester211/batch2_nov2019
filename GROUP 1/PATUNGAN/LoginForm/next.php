<html>
<title>HTML Tutorial</title>
<body>  



<?php
	session_start();
	
	echo '<h1 class = "text-center ">The Gift of the Magi</h1>';
	
	$string = array(
	
  array(
  "title" => "",
  "story" => " 
  months, with this result. Twenty dollars a week doesn't go far.
Expenses had been greater than she had calculated. They always
are. Only $1.87 to buy a present for Jim. Her Jim. Many a happy
hour she had spent planning for something nice for him. Something fine and rare and sterling - something just a little bit near to
being worthy of the honour of being owned by Jim.
There was a pier-glass between the windows of the room. Perhaps you have seen a pier-glass in an $8 flat. A very thin and very
agile person may, by observing his reflection in a rapid sequence
of longitudinal strips, obtain a fairly accurate conception of his
looks. Della, being slender, had mastered the art.
Suddenly she whirled from the window and stood before the
glass. Her eyes were shining brilliantly, but her face had lost its
colour within twenty seconds. Rapidly she pulled down her hair
and let it fall to its full length.
Now, there were two possessions of the James Dillingham
Youngs in which they both took a mighty pride. One was Jim's gold
watch that had been his father's and his grandfather's. The other
was Della's hair. Had the Queen of Sheba lived in the flat across the
airshaft, Della would have let her hair hang out the window some
day to dry just to depreciate Her Majesty's jewels and gifts. Had
King Solomon been the janitor, with all his treasures piled up in the
basement, Jim would have pulled out his watch every time he
passed, just to see him pluck at his beard from envy.
So now Della's beautiful hair fell about her, rippling and shining like a cascade of brown waters. It reached below her knee and
made itself almost a garment for her. And then she did it up again
nervously and quickly. Once she faltered for a minute and stood
still while a tear or two splashed on the worn red carpet.
On went her old brown jacket; on went her old brown hat.
With a whirl of skirts and with the brilliant sparkle still in her
eyes, she fluttered out of the door and down the stairs to the
street.
Where she stopped the sign read: 'Mme. Sofronie. Hair Goods
of All Kinds.' One flight up Della ran, and collected herself, panting. Madame, large, too white, chilly, hardly looked the 'Sofronie.'
'Will you buy my hair?' asked Della.
'I buy hair,' said Madame. 'Take yer hat off and let's have a
sight at the looks of it.'
Down rippled the brown cascade.
'Twenty dollars,' said Madame, lifting the mass with a practised
hand.  .",
		"page" => 1
		
	),
);

echo "" . $string[0] ["story"]; 
	
?>
<br></br>
<div>
<a href = "product.php">Previous</a>
<a href = "next1.php">Next</a>
</div>

</body>
</html>
<style>
body{
	background-image: url("white.png");
	font-size: 20px;
	text-align: center;
	color: black;
	padding: 100px;
	margin: 10px;
}
h1{
	text-align:center;
	color: black;
}


td { 
    border:0px;
	padding: 10px;
}
</style>