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
'Give it to me quick,' said Della.
Oh, and the next two hours tripped by on rosy wings. Forget
the hashed metaphor. She was ransacking the stores for Jim's
present.
She found it at last. It surely had been made for Jim and no one
else. There was no other like it in any of the stores, and she had
turned all of them inside out. It was a platinum fob chain simple
and chaste in design, properly proclaiming its value by substance
alone and not by meretricious ornamentation - as all good things
should do. It was even worthy of The Watch. As soon as she saw it
she knew that it must be Jim's. It was like him. Quietness and
value - the description applied to both. Twenty-one dollars they
took from her for it, and she hurried home with the 87 cents.
With that chain on his watch Jim might be properly anxious about
the time in any company. Grand as the watch was, he sometimes
looked at it on the sly on account of the old leather strap that he
used in place of a chain.
When Della reached home her intoxication gave way a little to
prudence and reason. She got out her curling irons and lighted the
gas and went to work repairing the ravages made by generosity
added to love. Which is always a tremendous task, dear friends - a
mammoth task.
Within forty minutes her head was covered with tiny, closelying curls that made her look wonderfully like a truant schoolboy.
She looked at her reflection in the mirror long, carefully, and
critically.
'If Jim doesn't kill me,' she said to herself, 'before he takes a
second look at me, he'll say I look like a Coney Island chorus girl.
But what could I do - oh! what could I do with a dollar and
eighty-seven cents?'
At seven o'clock the coffee was made and the frying-pan was on
the back of the stove, hot and ready to cook the chops.
Jim was never late. Della doubled the fob chain in her hand and
sat on the corner of the table near the door that he always entered.
Then she heard his step on the stair away down on the first flight,
and she turned white for just a moment. She had a habit of saying
little silent prayers about the simplest everyday things, and now
she whispered: 'Please God, make him think I am still pretty.'
The door opened and Jim stepped in and closed it. He looked
thin and very serious. Poor fellow, he was only twenty-two - and
to be burdened with a family! He needed a new overcoat and he
was without gloves. 
   .",
		"page" => 1
		
	),
);

echo "" . $string[0] ["story"]; 
	
?>
<br></br>
<div>
<a href = "next.php">Previous</a>
<a href = "next2.php">Next</a>

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
