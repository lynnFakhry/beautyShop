<!doctype html>
<html>

<meta charset="utf-8">

<meta name="author" content="Amsul - http://amsul.ca">
<meta name="viewport" content="width=device-width,user-scalable=no">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">

<title>Pickadate.js</title>

<link rel="stylesheet" href="../../lib/themes/default.css">
<link rel="stylesheet" href="../../lib/themes/default.date.css">
<link rel="stylesheet" href="../../lib/themes/default.time.css">

<!--[if lt IE 9]>
    <script>document.createElement('section')</script>
    <style type="text/css">
        .holder {
            position: relative;
            z-index: 10000;
        }
        .datepicker {
            display: block;
        }
    </style>
<![endif]-->


<body>
<?php
require 'connect-db.php';

try{
  $stmt = $db->query("SELECT date FROM disabledate");
  $db_ddates = $stmt->fetchAll(\PDO::FETCH_ASSOC);

  $js_ddates = "";
  foreach ($db_ddates as $row => $record) {
    $js_ddates .= '"' . $record['date'] . '",';
  }

}
catch(\PDOException $e) {
  echo $e->getMessage();
}
    
   ?>




    <section class="section">

        <form>
            <fieldset>
                <h3><label for="datepicker_id">Pick a date.</label></h3>

                <input
                    id="datepicker_id"
                    class="datepicker"
                    name="date"
                    type="text"
                    value=""
                    data-value="">
             
                <br><br><br><br><br>


                <h3><label for="timepicker_id">Pick a time</label></h3>
                <input
                    id="timepicker_id"
                    class="timepicker"
                    value=""
                    type="time"
                    name="time">
                    <!-- valuee="2:30 AM"
                    data-value="0:00" -->
                       
                <!-- <button type="button">Disable all dates</button>
                <input class="button" type="submit" value="open"> -->
            </fieldset>
        </form>

        
        <div id="container"></div>

      

    </section>


    <script src="../jquery.1.9.1.js"></script>
    <script src="../../lib/picker.js"></script>
    <script src="../../lib/picker.date.js"></script>
    <script src="../../lib/picker.time.js"></script>
    <script src="../../lib/legacy.js"></script>



    <script type="text/javascript">
    //datepicker
    // take dates as array of strings from db
var ddates_str_arr = [ <?php echo $js_ddates; ?> ];
// build dates array for picker
var disdates = [];
for (var i = 0; i < ddates_str_arr.length; i++) {
  disdates.push(new Date(ddates_str_arr[i]));
}
    
var $input = $( '.datepicker' ).pickadate({
  formatSubmit: 'yyyy/mm/dd',
  min: true,
  container: '#container',
  // editable: true,
  closeOnSelect: true,
  closeOnClear: false,
  disable: disdates
});





        var picker = $input.pickadate('picker')




        // picker.set('select', '14 October, 2014')
        // picker.open()

        // $('button').on('click', function() {
        //     picker.set('disable', true);
        // });

    </script>



<script type="text/javascript">
//timepicker

		var dtimes = new Date(2015,11,28,5,30);
        var $timeinput = $( '.timepicker' ).pickatime({
        	disable: [
    [2,0],
    dtimes


    ]


        })
        var timepicker = $timeinput.pickatime('picker')
        
    </script>



</body>
</html>