<!doctype html>
<html>
<meta charset="utf-8">

<meta name="author" content="Amsul - http://amsul.ca">
<meta name="viewport" content="width=device-width">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">

<title>Pickadate.js</title>

<link rel="stylesheet" href="../../lib/themes/default.css">
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
?>
    <section class="section">

        <form>
            <fieldset>
                <h3><label for="input_01">Pick a time. Go ahead...</label></h3>
                <input
                    id="input_from"
                    class="datepicker"
                    type="time"
                    name="time">
                    <!-- valuee="2:30 AM"
                    data-value="0:00" -->
            </fieldset>
        </form>

        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    </section>


    <script src="../jquery.1.9.1.js"></script>
    <script src="../../lib/picker.js"></script>
    <script src="../../lib/picker.time.js"></script>
    <script src="../../lib/legacy.js"></script>

    <script type="text/javascript">

        var $input = $( '.datepicker' ).pickatime({
        })
        var picker = $input.pickatime('picker')
       

    </script>


</body>
</html>


