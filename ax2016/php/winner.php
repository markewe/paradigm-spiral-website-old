<html>
<head>
<script>
	var mainarray = [
<?php
	// Insert into db
	$servername = "dba.paradigmspiral.com";
	$username = "dreyc";
	$password = "Mordos60";
	$dbname = "paradigmspiral_giveaways";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		$insert = false;
		//die("Connection failed: " . $conn->connect_error);
	} 
	
	$sql = "select ID, Email, (GrandPrizeTickets + PrizeTickets) as 'Tickets' from ax2016";
	$result = $conn->query($sql);
	$count = 0;
	
	while($row = mysqli_fetch_assoc($result))
	{
		if($count != 0)
		{
		 echo ",";
		}
		
	   echo "{ID:".$row['ID'].",";
	   echo "Email:'".$row['Email']."',";
	   echo "Tickets:".$row['Tickets']."}";
	   $count++;
	}
	
	$conn->close();
?>
];
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		var tickets = [];
		
		for(var i=0;i<mainarray.length;i++)
		{
			for(var j=0; j<mainarray[i]['Tickets']; j++)
			{
				tickets.push(mainarray[i]['Email']);
			}
		}
		
		console.log(tickets);
		
		var winners = [];
		
		for(var i=0; i<11; i++)
		{
			var winner = Math.floor((Math.random() * tickets.length));
			var picked = false;
			
			for(var j=0; j<winners.length; j++)
			{
				if(winners[winner] == tickets[winner])
				{
					picked = true;
					break;
				}
			}
			
			if(picked == false)
			{
				winners.push(tickets[winner]);
				console.log(tickets[winner]);
			}
			
		}
		
		console.log(winners);
	});
</script>
</head>
<body>
</body>
</html>