
<?php
	#Задание 1 пункт 1
	$name = "Artem";
	$age = 26;
	echo "Меня зовут: $name<br>" ;
	echo "Мне $age лет <br>";
	echo "&quot;&#451;&#448;&#92;&#47;&prime;&quot;&#92;<br><br><br>"
?>



<?php
#Задание 1 пункт 2
	$School = 12;
	$pictures = 80;
	$marker = 23;
	$pen = 40;
	$paint = $pictures - ($marker + $pen);
	echo "Всем привет и с вами &#148;Мега математик.&#147; <br> И сегодня мы решим нехилую такую задачку.<br>
	 Что нам известно?<br> Ходят слухи, что в Школе номер $School прошла выставка и на ней было $pictures рисунков.
	 <br>Как мне доложили $marker из них были нарисованы маркером, $pen карандашами, а остальные были нарисованы красками. <br>
	 Мои разведчики не смогли разузнать сколько нарисовано красками но мы сейчас вычислим.<br>
	 Нам нужно из общего количества рисунков вычесть те данные которые нам известны. Приступим<br>
	 $pictures 	&#8211; &#40;$marker &#43; $pen&#41; &#61; $paint;<br>
	 Ха ха глупцы красками нарисовано $paint рисунков. <br><br><br>";
?>


<?php
	#Задание 1 пункт 3
	define("Президент", "Путин");
	if(defined("Президент")){
		echo "Константа существует <br>";
	}
	echo Президент . "<br><br><br>";
	define("Президент", "Навельный");
	echo Президент . "<br><br><br>";
?>

<?php
	#Задание 1 пункт 4
	$age = mt_rand(0, 200);
	echo $age . "<br>";
	if($age>0 and $age<18){
		 echo "Вам   ещё   рано   работать";
	} elseif($age>17 and $age<65){
		  echo "Вам   еще работать   и   работать";
	} elseif($age>64 and $age<100){
		  echo "Вам   пора   на   пенсию";
	}else {
		  echo "Неизвестный   возраст";
	}
?>


<?php
	#Задание 1 пункт 5
	$day = mt_rand(1, 10);
	echo "<br><br><br>" . $day . "<br>";
	switch ($day){
		case 1:
		case 2:
		case 3:
		case 4:
		case 5:
			echo "Это   рабочий   день";
			break;
		case 6:
		case 7:
			echo "Это   выходной   день";
			break;
		case 8:
		case 9:
		case 10:
				echo "Неизвестный   день";
				break;
	}	
?>

<?php
	#Задание 1 пункт 6
	$bmw['model'] = "x5";
	$bmw['speed'] = 120;
	$bmw['doors'] = 5;
	$bmw['year'] = "2015";
	
	$toyota = [
		'model' => 'crown',
		'speed' => 180,
		'doors' => 4,
		'year' => '1993'
	];
	
	$opel = [
		'model' => 'vesta',
		'speed' => 180,
		'doors' => 5,
		'year' => '2006'
	];

	$cars['bmw'] = $bmw;
	$cars['toyota'] = $toyota;
	$cars['opel'] = $opel;
	
	foreach($cars as $key => $value){
		echo "<br><br><br>car $key <br>" ;
		foreach($value as $key=>$value){
			 echo $value . "&nbsp;" ;
		}
	}	
?>


<?php
	#Задание 1 пункт 7
	echo "<br><br><br><table border='2px' style='text-align: center;'>";
	for($i = 1; $i <= 10; $i++){
		echo '<tr>';
		for($k = 1; $k <= 10; $k++){
			if($i % 2 === 0 && $k % 2 === 0){
				echo "<td>(" . ($i * $k) . ")</td>";
			}elseif($i % 2 === 1 && $k % 2 === 1){
				echo "<td>[" . ($i * $k) . "]</td>";
			}else{
				echo "<td>" . ($i * $k) . "</td>";
			}
		}
		echo '</tr>';
	}
echo "</table><br><br><br>";
?>

<?php
	#Задание 1 пункт 8
	$str = "php js mysql html css";
	echo $str;
	$explode = explode(' ', $str);
	echo '<br>';
	echo print_r($explode, true);
	$allstr = count($explode);
	

	while ($allstr) {
		$asarray[] = $explode[$allstr - 1];
		$allstr--;
		$asarrayrev = array_reverse($asarray);
	}

	$newstr = implode(' \ ', $asarrayrev);
	echo '<br>';
	echo $newstr;
?>
