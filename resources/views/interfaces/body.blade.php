@extends("layouts.app")
@section('content')
<!-- /.parallax full screen background image -->
        <div class="fullscreen landing parallax" style="background-color: grey;">

            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">

                            <!-- /.logo -->
                            <div class="logo wow fadeInDown"> <a href=""><img src="{{url('/')}}/img/th2.jpg" alt="logo" height="300px"></a></div>

                            <!-- /.main title -->
                            <h1 class="wow fadeInLeft">
                                Welcome Traffic Congestion & Control Site
                            </h1>

                            <!-- /.header paragraph -->
                            <div class="landing-text wow fadeInUp" style="background-image: url('{{url('/')}}/img/th.jpg'); background-size: cover; background-repeat: no-repeat;">
                                <p>
                                    A web site to improve the urban environment by enabling neighbors to a city and reduce the amount of cars on the roads, thereby reducing traffic congestion and air pollution. Visitors to the site will be able to register with the site as members and provide information about their daily commute; starting point, destination, times and whether they are looking to obtain or provide a lift, or both. 
                                </p>
                                <p>
                                    Casual visitors to the site will be able to search through the posts to see if anyone faces a similar commute to theirs. Full details of other commuters and their journeys will only be available after registering.
                                </p>
                            </div>				  

                            <!-- /.header button -->
                            <div class="head-btn wow fadeInLeft">               
                                <table class="example22 table table-responsive table-white table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th colspan="3">Route Name and Rate of Traffic Congestions</th>
                                        </tr>
                                        <tr>
                                            <th>#</th>
                                            <th>Route Name</th>
                                            <th>Today's Rate of Congestion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    $count=1; 
                                    ?>
                                       <script>
                                        var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
                                        var d = new Date();
                                        var dayName = days[d.getDay()];
                                        </script>
                                        
                                        <?php 
                                        // $days = \Cookie::get('days');
                                            $query = \DB::table('frequencies')->select(DB::raw('route,frequency,monday,tuesday,wednesday,thursday,friday,saturday,sunday,startTime,endTime'))->get();
                                        ?>
                                    @foreach($Frequency as $lists)
                                        <tr>
                                            <td>
                                                {{$count++}}
                                            </td>
                                            <td>
                                                <a href="javascript:void(0);" onclick="show_popup('{{url('/routeDetails/'.$lists->route)}}')"> 
                                                {{$lists->route}}
                                                </a>
                                            </td>
                                            <td>
                                            <?php 
                                            $currentRoute = \App\Frequency::where('route',$lists->route)->where('monday','Monday')->count();
                                            if($currentRoute>0){
                                                $counts = \App\Frequency::count();
                                                $mondayRoute = \App\Frequency::where('route',$lists->route)->where('monday','Monday')->first();
                                                $rate = ($currentRoute/$counts)*100;
                                                $Mondayrate = $rate." % ". $query[0]->route;
                                                $monday = $mondayRoute->monday;
                                                }else{
                                                    $currentRoute = 0; 
                                                    $monday = 'Monday';
                                                }

                                             $currentRoute2 = \App\Frequency::where('route',$lists->route)->where('tuesday','Tuesday')->count();
                                             if($currentRoute2>0){
                                             $counts = \App\Frequency::count();
                                             $tuesdayRoute = \App\Frequency::where('route',$lists->route)->where('tuesday','Tuesday')->first();
                                                $rate2 = ($currentRoute2/$counts)*100;
                                                $Tuesdayrate = $rate2." % ". $query[0]->route; 
                                                $tuesday = $tuesdayRoute->tuesday;  
                                            }else{
                                                $currentRoute2 = 0;
                                                $tuesday = 'Tuesday';
                                                $Tuesdayrate = 0;
                                            }

                                            $currentRoute3 = \App\Frequency::where('route',$lists->route)->where('wednesday','Wednesday')->count();
                                             if($currentRoute3)
                                             {
                                                $counts = \App\Frequency::count();
                                                 $wednesdayRoute = \App\Frequency::where('route',$lists->route)->where('wednesday','Wednesday')->first();
                                                 $rate3 = ($currentRoute3/$counts)*100;
                                                $Wednesdayrate = $rate3." % ". $query[0]->route;
                                                $wednesday = $wednesdayRoute->wednesday;
                                             }else{
                                                $currentRoute3 = 0;
                                                $wednesday = 'Wednesday';
                                                $Wednesdayrate= 0;
                                             }

                                             $currentRoute4 = \App\Frequency::where('route',$lists->route)->where('thursday','Thursday')->count();
                                             if($currentRoute4>0)
                                             {
                                            $counts = \App\Frequency::count();
                                            $thursdayRoute = \App\Frequency::where('route',$lists->route)->where('thursday','Thursday')->first();
                                            $rate4 = ($currentRoute4/$counts)*100;
                                            $Thursdayrate = $rate4." % ". $query[0]->route;
                                            $thursday = $thursdayRoute->thursday;
                                            }else{
                                                $Thursdayrate = 0;
                                                $currentRoute4 = 0;
                                                $thursday = 'Thursday';
                                            }

                                            $currentRoute5 = \App\Frequency::where('route',$lists->route)->where('friday','Friday')->count();
                                             if($currentRoute5>0)
                                             {
                                                $counts = \App\Frequency::count();
                                                $fridayRoute = \App\Frequency::where('route',$lists->route)->where('friday','Friday')->first();
                                                $rate5 = ($currentRoute2/$counts)*100;
                                                $Fridayrate = $rate5." % ". $query[0]->route;
                                                $friday = $fridayRoute->friday;
                                            }else{
                                                $fridayRoute = 0;
                                                $friday = 'Friday';
                                                $Fridayrate = 0;
                                            }

                                            $currentRoute6 = \App\Frequency::where('route',$lists->route)->where('saturday','Saturday')->count();
                                             if($currentRoute6>0)
                                             {
                                            $counts = \App\Frequency::count();
                                            $saturdayRoute = \App\Frequency::where('route',$lists->route)->where('saturday','Saturday')->first();
                                            $rate6 = ($currentRoute6/$counts)*100;
                                            $Saturdayrate = $rate6." % ". $query[0]->route;
                                            $saturday = $saturdayRoute->saturday; 
                                            }else{
                                                $currentRoute6 = 0;
                                                $saturday = 'Saturday';
                                                $Saturdayrate = 0;
                                            }

                                            $currentRoute7 = \App\Frequency::where('route',$lists->route)->where('sunday','Sunday')->count();
                                             if($currentRoute7>0)
                                             {
                                                $counts = \App\Frequency::count();
                                                $sundayRoute = \App\Frequency::where('route',$lists->route)->where('sunday','Sunday')->first();
                                                $rate7 = ($currentRoute7/$counts)*100;
                                                $Sundayrates = $rate7." % ". $query[0]->route;
                                                $sunday = $sundayRoute->sunday;
                                            }else{
                                                $currentRoute7 = 0 ; 
                                                $sunday = 'Sunday';
                                                $Sundayrates = 0;
                                            }                                            
                                            ?>
                                             <script> 
                                             var day, day2, day3, day4, day5, day6, day7;
                                             day = '<?php echo  $monday; ?>';
                                             day2 = '<?php echo $tuesday; ?>';
                                             day3 = '<?php echo $wednesday; ?>';
                                             day4 = '<?php echo  $thursday; ?>';
                                             day5 = '<?php echo  $friday; ?>';
                                             day6 = '<?php echo $saturday; ?>';
                                             day7 = '<?php echo $sunday; ?>';

                                             if (day == dayName) {
                                               document.write('<?php echo round($Mondayrate,2); ?> % of total City population. For details, click on the Route');
                                             }else if(day2 == dayName){
                                               document.write('<?php echo round($Tuesdayrate,2); ?> % of total City population. For details, click on the Route');
                                             }else if(day3 == dayName){
                                                document.write('<?php echo round($Wednesdayrate,2); ?> % of total City population. For details, click on the Route');
                                             }else if(day4 == dayName){
                                                document.write('<?php echo round($Thursdayrate,2); ?> % of total City population. For details, click on the Route');
                                             }else if(day5 == dayName){
                                                document.write('<?php echo round($Fridayrate,2); ?> % of total City population. For details, click on the Route');
                                             }else if(day6 == dayName){
                                                document.write('<?php echo round($Saturdayrate,2); ?> % of total City population. For details, click on the Route');
                                             }else if(day7 == dayName){
                                                document.write('<?php echo round($Sundayrates,2); ?> % of total City population. For details, click on the Route');
                                             }
                                               </script>
                                             
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>



                        </div> 

                        <!-- /.signup form -->
                        <div class="col-md-5" >
                        <div id="searchPart">
                            <div class="signup-header wow fadeInUp" >
                            <div id="searchDiv">
                                <h3 class="form-title text-center">GET STARTED</h3>
                                <br>
                                <div class="response" style="display: none;"></div>
                                
                                <p>
                                    Let us know about you daily routing and travel mode so that we can help others plan in evading traffic congestion, Reduce air polution and have seamless flow of business by having fast flow of goods through use of alternative routes.
                                </p>

  <form class="form-header" action="{{url('/submit')}}" role="form" method="POST" id="searchForm">
  {{csrf_field()}}
        <div class="form-group">
            <input class="form-control" name="departurePoint" id="merge"  type="text" placeholder="Enter the Departure Point" required>
        </div>
        <div class="form-group">
            <input class="form-control" name="arrivalPoint" id="merge2"  type="text" placeholder="Enter the Arrival Point" required>
        </div>
         <div class="form-group">
            <input class="form-control" name="route" id="route" type="text" placeholder="Enter Route To use" required/>
        </div>
        <div class="form-group">
           <label for="recurence"><font color="white"> Occurance Every</font></label><br/>
           <input type="checkbox" name="monday" value="Monday"> &nbsp; <font color="white">Monday |</font>
           <input type="checkbox" name="tuesday" value="Tuesday">&nbsp; <font color="white">Tuesday |</font>
           <input type="checkbox" name="wednesday" value="Wednesday"> &nbsp; <font color="white">Wednesday</font><br>
           <input type="checkbox" name="thursday" value="Thursday">&nbsp; <font color="white">Thursday |</font>
           <input type="checkbox" name="friday" value="Friday">&nbsp; <font color="white">Friday |</font>
           <input type="checkbox" name="saturday" value="Saturday">&nbsp; <font color="white">Saturday</font><br>
           <input type="checkbox" name="sunday" value="Sunday">&nbsp; <font color="white">Sunday</font>
        </div>
        <div class="form-group">
            <input class="form-control" name="startTime" id="sTime" type="time" placeholder="Enter Start time" required />
        </div>
        <div class="form-group">
            <input class="form-control" name="endTime" id="eTime" type="time" placeholder="Enter Return time" required />
        </div>
        <div class="form-group">
            <input class="form-control" name="description" id="describe" type="text" placeholder="Enter Description Here"/>
        </div>
        <div class="form-group last">
            <input type="submit" class="btn btn-warning btn-block btn-lg" value="SUBMIT"  id="searchBtn">
        </div>
        <p class="privacy text-center">We will not share your Information. Read our <a href="privacy.php">privacy policy</a>.</p>
  </form>

 </div>
 
 
                            </div>				
                            </div>
                            
                        </div>
                    </div>
                </div> 
            </div> 
        </div>
@include('interfaces.modals')
@include("interfaces.footer")
@endsection