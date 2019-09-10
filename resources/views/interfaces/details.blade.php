<div class="row">
	<table class="table table-striped table-responsive table-striped table-bordered">
		<thead>
			<tr>
				<th colspan="3">
					Today's Congestion details on {{$details->first()->route}}
				</th>
			</tr>
		</thead>
		<tbody>
		<?php 
		$total = count($details); 
		?>
		@foreach($details as $detailed)

		@if(substr($detailed->startTime, 0, -3) < 12 || substr($detailed->endTime, 0, -3) < 12)
		<?php	
		$morning[] = $detailed->startTime;
		if(substr($detailed->endTime, 0, -3) < 12){
		$morning2[] = $detailed->endTime;
		$countMorning = count($morning); 
		$countReturn = count($morning2);
		$countMorning = $countMorning + $countReturn;
		}else{
			$countMorning = count($morning);
		}
		?>
			<tr>
			<th>Morning hours</th>
				<td>
					<?php 
						$morningRate = ($countMorning/$total)*100;
						if($morningRate > 100){
							$morningRate = 100;
						}
						?>
						{{$morningRate}}%

				</td>
				<td>
					@if($morningRate > 70)
					<p>The Route is too congested. Advised to take a public Service Vehicle to reduce Rate of Congestion.<br> Or Take an alternative route. </p>

					@elseif($morningRate < 70 && $morningRate > 49)

					<p> The route is Partially congested. If you are in a hurry, Be advised to take an alternative route.<br> To reduce rate of congestion, please take a PSV vehicles. </p>

					@elseif($morningRate < 50)
					<p> The route is Not congested today. Be free to take this route since you will arrive in time to your destination. </p>
					@endif
				</td>
			</tr>
			@elseif(substr($detailed->startTime, 0, -3) >= 12 || substr($detailed->endTime, 0, -3) >= 12)
			<?php
			if(substr($detailed->startTime, 0, -3) >= 12){	
			$afternoon[] = $detailed->startTime; 
			$afternoon2[] = $detailed->endTime;
			$countAfternoon = count($afternoon);
			$countAfternoon2 = count($afternoon2);
			$countAfternoon = $countAfternoon + $countAfternoon2; 
			}else{
				$afternoon[] = $detailed->endTime;
				$countAfternoon = count($afternoon);
			}
		?>
			<tr>
			<th>Afternoon hours</th>
				<td>
					<?php 
						$afternoonRate = ($countAfternoon/$total)*100;
						if($afternoonRate > 100){
							$afternoonRate = 100;
						}
						?>
						{{$afternoonRate}}%

				</td>
				<td>
					@if($afternoonRate > 70)
					<p>The Route is too congested. Advised to take a public Service Vehicle to reduce Rate of Congestion.<br> Or Take an alternative route. </p>

					@elseif($afternoonRate < 70 && $morningRate > 49)

					<p> The route is Partially congested. If you are in a hurry, Be advised to take an alternative route.<br> To reduce rate of congestion, please take a PSV vehicles. </p>

					@elseif($afternoonRate < 50)
					<p> The route is Not congested today. Be free to take this route since you will arrive in time to your destination. </p>
					@endif
				</td>
			</tr>
			@endif

		@endforeach
		</tbody>
	</table>
</div>