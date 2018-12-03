<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Leduc Blueberries Log') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- JS -->
    <script type="text/javascript">
    function populate_sublocation(s1,s2){
        var s1 = document.getElementById(s1);
        var s2 = document.getElementById(s2);
        s2.innerHTML = " ";
        if(s1.value == "Packing"){
            var optionArray = 
            ["|",
             "cr 653|C.R. 653", 
             "30th st|30th St."
            ]
        }
        if(s1.value == "Retail"){
            var optionArray = 
            ["|", 
             "30th st|30th St.",
             "m40|M-40"
            ]
        }
        if(s1.value == "Maintenance Shop"){
            var optionArray = 
            ["|",
             "Main Shop (Home Farm)|Main Shop (Home Farm)", 
             "Main Shop (Horse Farm)|Main Shop (Horse Farm)",
             "Shop (Dixie Lee)|Shop (Dixie Lee)"
            ]
        }
        if(s1.value == "Home Farm"){
            var optionArray = 
            ["|",
             "1G|1G", 
             "1A|1A",
             "1T|1T",
             "1J|1J",
             "1F|1F"
            ]
        }
        if(s1.value == "Farm 2 (38th) - West"){
            var optionArray = 
            ["|",
             "2A|2A", 
             "2B|2B",
             "2C|2C",
             "2G|2G",
             "2R|2R",
             "2S|2S"
            ]
        }
        if(s1.value == "Farm 3"){
            var optionArray = 
            ["|",
             "3A|3A", 
             "3G|3G",
             "3N|3N"
            ]
        }
        if(s1.value == "35 1/2 St."){
            var optionArray = 
            [
             "|",
             "4P|4P", 
             "4F|4F",
             "4V|4V",
             "4W|4W"
            ]
        }
        if(s1.value == "Wolf Lake Farm"){
            var optionArray = 
            [
             "|",
             "5F|5F"
            ]
        }
        if(s1.value == "38 Ave South"){
            var optionArray = 
            [
             "|",
             "6J|6J"
            ]
        }
        if(s1.value == "Farm 2 (30th) Retail-East"){
            var optionArray = 
            [
             "|",
             "7A|4P", 
             "7B|7B",
             "7G|7G",
             "7J|7J"
            ]
        }
        if(s1.value == "Bakers"){
            var optionArray = 
            [
             "|",
             "8F|8F", 
             "8J|8J"
            ]
        }
        if(s1.value == "Elliot-Spartans"){
            var optionArray = 
            [
             "|",
             "9L|9L", 
             "9J|9J"
            ]
        }
        if(s1.value == "M-40 Farm"){
            var optionArray = 
            [
             "|",
             "10A|10A", 
             "10B|10B",
             "10J|10J",
             "10T|10T",
             "10F|10F"
            ]
        }
        if(s1.value == "Dixie Lee"){
            var optionArray = 
            [
             "|",
             "11A|11A", 
             "11B|11B",
             "11K|11K",
             "11G|11G",
             "11J|11J",
             "11M|11M"
            ]
        }
        if(s1.value == "Farm 3 North Franks"){
            var optionArray = 
            [
             "|",
             "12A|12A", 
             "12G|12G",
             "12I|12I",
             "12J|12J",
             "12P|12P",
             "12V|12V"
            ]
        }
        if(s1.value == "M-43 Farm U-Pick"){
            var optionArray = 
            [
             "|",
             "13A|13A", 
             "13F|13F",
             "13J|13J",
             "13I|13I",
             "13V|13V"
            ]
        }
        if(s1.value == "42 Ave. Farm"){
            var optionArray = 
            [
             "|",
             "14J|14J"
            ]
        }
        if(s1.value == "Campbell Creek"){
            var optionArray = 
            [
             "|",
             "17A|17A", 
             "17F|17F",
             "17G|17G",
             "17H|17H",
             "17C|17C",
             "17J|17J",
             "17I|17I",
             "17T|17T"
            ]
        }
        if(s1.value == "Sandy Slope Farm"){
            var optionArray = 
            [
             "|",
             "18V|18V"
            ]
        }
        for(var option in optionArray){
            var pair = optionArray[option].split("|");
            var newOption = document.createElement("option");
            newOption.value = pair[0];
            newOption.innerHTML= pair[1];
            s2.options.add(newOption);
        }
    }

    function populate_subwork(s3,s4){
        var s3 = document.getElementById(s3);
        var s4 = document.getElementById(s4);
        s4.innerHTML = " ";
        if(s3.value == "Farm Work"){
            var optionArray = ["|",
             "landscaping|Landscaping", 
             "irrigation|Irrigation",
             "prunning|Prunning",
             "weed control|Weed Control",
             "cultivating|Cultivating",
             "other|Other"]
        }
        if(s3.value == "Housing"){
            var optionArray = ["|",
             "cleaning|Cleaning", 
             "painting|Painting",
             "winterizing|Winterizing",
             "maintenance|Maintenance",
             "remodeling|Remodeling",
             "pest control|Pest Control",
             "other|Other"]
        }
        for(var option in optionArray){
            var pair = optionArray[option].split("|");
            var newOption = document.createElement("option");
            newOption.value = pair[0];
            newOption.innerHTML= pair[1];
            s4.options.add(newOption);
        }
    }

    </script>
</head>
<body>
    <div id="app">
        @include('inc.navbar')
        <div class='container'>
            @include('inc.messages')
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
</body>
</html>
