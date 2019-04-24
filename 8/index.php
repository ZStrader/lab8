<?php


?>

<html>
    <head>
        <title> </title>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

        <style>
        body {
            text-align: center;
        }

        #results {
            text-align: left;
            padding-left: 20px;
        }
        
        .heart {
            padding-left: 100px;
            padding-right: 100px;
        }
        </style>
        
        <script>
        
        $(document).ready(function() {

            $.ajax({
                type: "GET",
                url: "api/getCurl.php",
                dataType: "json",
                data: {
                        "tags": $("#search").val(),
                    },
                
                success: function(data, status) {
                    console.log(data.totalHits);
                    
                    
                }
            });
            
             $("#heart1").on("click", function(){
                console.log("click");
                var imagesrc = $("#heart1").attr("src");
                console.log(imagesrc);
                if(imagesrc=='clearHeart.png') {
                    console.log("if");
                    $("#heart1").attr("src", "redHeart.png");
                } else if (imagesrc=="redHeart.png"){
                    console.log("elif");
                    $("#heart1").attr("src", "clearHeart.png");
                }
                
        
            });
            
            $("#heart2").on("click", function(){
                console.log("click");
                var imagesrc = $("#heart2").attr("src");
                console.log(imagesrc);
                if(imagesrc=='clearHeart.png') {
                    console.log("if");
                    $("#heart2").attr("src", "redHeart.png");
                } else if (imagesrc=="redHeart.png"){
                    console.log("elif");
                    $("#heart2").attr("src", "clearHeart.png");
                }
        
            });
            
            $("#heart3").on("click", function(){
                console.log("click");
                var imagesrc = $("#heart3").attr("src");
                console.log(imagesrc);
                if(imagesrc=='clearHeart.png') {
                    console.log("if");
                    $("#heart3").attr("src", "redHeart.png");
                } else if (imagesrc=="redHeart.png"){
                    console.log("elif");
                    $("#heart3").attr("src", "clearHeart.png");
                }
        
            });
            
            $("#heart4").on("click", function(){
                console.log("click");
                var imagesrc = $("#heart4").attr("src");
                console.log(imagesrc);
                if(imagesrc=='clearHeart.png') {
                    console.log("if");
                    $("#heart4").attr("src", "redHeart.png");
                } else if (imagesrc=="redHeart.png"){
                    console.log("elif");
                    $("#heart4").attr("src", "clearHeart.png");
                }
        
            });
            
            $("#heart5").on("click", function(){
                console.log("click");
                var imagesrc = $("#heart5").attr("src");
                console.log(imagesrc);
                if(imagesrc=='clearHeart.png') {
                    console.log("if");
                    $("#heart5").attr("src", "redHeart.png");
                } else if (imagesrc=="redHeart.png"){
                    console.log("elif");
                    $("#heart5").attr("src", "clearHeart.png");
                }
        
            });
            
            $("#heart6").on("click", function(){
                console.log("click");
                var imagesrc = $("#heart6").attr("src");
                console.log(imagesrc);
                if(imagesrc=='clearHeart.png') {
                    console.log("if");
                    $("#heart6").attr("src", "redHeart.png");
                } else if (imagesrc=="redHeart.png"){
                    console.log("elif");
                    $("#heart6").attr("src", "clearHeart.png");
                }
        
            });
            
            $("#heart7").on("click", function(){
                console.log("click");
                var imagesrc = $("#heart7").attr("src");
                console.log(imagesrc);
                if(imagesrc=='clearHeart.png') {
                    console.log("if");
                    $("#heart7").attr("src", "redHeart.png");
                } else if (imagesrc=="redHeart.png"){
                    console.log("elif");
                    $("#heart7").attr("src", "clearHeart.png");
                }
        
            });
            
            $("#heart8").on("click", function(){
                console.log("click");
                var imagesrc = $("#heart8").attr("src");
                console.log(imagesrc);
                if(imagesrc=='clearHeart.png') {
                    console.log("if");
                    $("#heart8").attr("src", "redHeart.png");
                } else if (imagesrc=="redHeart.png"){
                    console.log("elif");
                    $("#heart8").attr("src", "clearHeart.png");
                }
        
            });
            
            $("#heart9").on("click", function(){
                console.log("click");
                var imagesrc = $("#heart9").attr("src");
                console.log(imagesrc);
                if(imagesrc=='clearHeart.png') {
                    console.log("if");
                    $("#heart9").attr("src", "redHeart.png");
                } else if (imagesrc=="redHeart.png"){
                    console.log("elif");
                    $("#heart9").attr("src", "clearHeart.png");
                }
        
            });
            
             $("#searchForm").on("click", function() {
                $.ajax({
                type: "GET",
                url: "api/getCurl.php",
                dataType: "json",
                data: {
                        "tags": $("#tags").val(),
                    },
                
                success: function(data, status) {
                    console.log(data.totalHits);
                    console.log(tags);
                    for(var i = 1; i < 9; i+=3){
                        $("#results1").append("<img src='" + data.hits[i].webformatURL + "' height='290' width='320'> ");
                        //$("#redHeart1").append("<img src='clearHeart.png'>");
                        $("#results2").append("<img src='" + data.hits[i+1].webformatURL + "' height='290' width='320'> ");
                        //$("#redHeart2").append("<img src='clearHeart.png'>");
                        $("#results3").append("<img src='" + data.hits[i+2].webformatURL + "' height='290' width='320'> ");
                        //$("#redHeart3").append("<img src='clearHeart.png'>");
                        $("#tag").append("<p>" + data.hits[i].tags + "</p><br /> ");
                    }
                }
            });
            });
            
            
        });
        
       
        
       
        
        </script>
        <link ref="stylesheet" src="style.css">
        <!--" + key['webFormatURL'] + "-->
    </head>
    <body>
        
        <main id="main">
            <header>
                <h3>Results:</h3>
                <form>
                    Search: <input type="text" name="tags" id="tags" />
                </form>
                <button id="searchForm">Search</button>
            </header>
            
            <content id="content">
                
            
            <article id="results1">
                <div id="redHeart1">
                   <img class="heart" id="heart1" src="clearHeart.png"> <img class="heart" id="heart2" src='clearHeart.png'> <img class="heart" id="heart3" src='clearHeart.png'>
                </div>
            </article>
            <article id="results2">
                <div id="redHeart2">
                    <img class="heart" id="heart4" src="clearHeart.png"> <img class="heart" id="heart5" src='clearHeart.png'> <img class="heart" id="heart6" src='clearHeart.png'>
                </div>
            </article>
            <article id="results3">
                <div id="redHeart3">
                    <img class="heart" id="heart7" src='clearHeart.png'> <img class="heart" id="heart8" src='clearHeart.png'> <img class="heart" id="heart9" src='clearHeart.png'>
                </div>
            </article>
            
            <div id="tags"></div>
            
            </content>
        </main>
    </body>
</html>