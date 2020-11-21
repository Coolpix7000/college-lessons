<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Queues</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
</head>
<body>
	<?php
		echo('<h2>FIFO/LILO queues:</h2>');
	
		//Create the queue
		$q = new SplQueue();
	
		//Add values to the queue
		$q->enqueue('1');
		$q->enqueue('2');
		$q->enqueue('3');
		$q->dequeue();
	
		//Print the queue information
		print_r($q);
	
		echo('<br><br>'); // Add spacing
		
		echo('<h3>Iterating over queues:</h3>');
	
		$q1 = new SplQueue();
	
		$q1->enqueue('1st');
		$q1->enqueue('2nd');
		$q1->enqueue('3rd');
		$q1->rewind(); //Always rewind queue, so that PHP starts at 1st position
	
		while($q1->valid()) {
			echo($q1->current()); //Shows 1st element
			$q1->next(); //Show next element
			echo('<br>');
		}
	
		echo('<h2>LIFO/FILO queues:</h2>');
		
		//Create the stack
		$st = new SplQueue();
		
		$st->push(1);
		$st->push(2);
		$st->push(3);
		$st->pop();
	
		print_r($st);
	
		echo('<br><br>'); // Add spacing
		
		//Create the stack
		$st1 = new SplQueue();
		
		$st1->push(1);
		$st1->push(2);
		$st1->push(3);
		$st1->pop(); //Pop the last added element out 
		$st1->rewind(); //Rewind to start of queue	
	
		while($st1->valid()) {
			echo($st1->current()); //Shows 1st element
			$st1->next(); //Show next element
			echo('<br>');
		}
	
		echo('<h2>Linked Lists:</h2>');
	
		$LL = new SplDoublyLinkedList();
		$LL->push('Red');
		$LL->push('Blue');
		$LL->push('Green');
	
		echo('Complete list:<br>');
			
		for($LL->rewind(); $LL->valid(); $LL->next()) {
			echo($LL->current());
			echo('<br>');
		}
		echo('<br>Removed green:<br>');
		$LL->pop();
	
		for($LL->rewind(); $LL->valid(); $LL->next()) {
			echo($LL->current());
			echo('<br>');
		}
	
		echo('<br>Added yellow:<br>');
		$LL->push('Yellow');
	
		for($LL->rewind(); $LL->valid(); $LL->next()) {
			echo($LL->current());
			echo('<br>');
		}
	?>
</body>
</html>
