<?
	#
	# edit these two numbers to change what we're testing:
	#

	$chance = 10000;
	$trials = 10000;

	#
	# no need to edit below this point!
	#

	echo "World of dropcraft\n";
	echo "Drop chance is 1/$chance, running $trials trials\n";

	$drops = array();
	$d = 0;

	for ($i=0; $i<$trials; $i++){

		$c = 0;
		while (1){
			$c++;
			$test = rand(1,$chance);
			if ($test == 1){
				$d++;
				if ($d % 100 == 0) echo "."; flush();
				$drops[] = $c;
				break;
			}
		}
	}
	echo "\n";

	$average = array_sum($drops) / count($drops);
	$min = min($drops);
	$max = max($drops);

	sort($drops);
	$idx = floor(count($drops) / 2);
	$median = $drops[$idx];


	echo "\n";
	echo "Mean loots per drop: $average\n";
	echo "Median loots per drop: $median\n";
	echo "\n";
	echo "Luckiest loots: $min\n";
	echo "Unluckiest loots: $max\n";
