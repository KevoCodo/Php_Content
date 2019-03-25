<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP & AJAX</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
    <script>
        function showSuggestion(str){
            if(str.length == 0){
                document.getElementById('output').textContent = '';
            }else{
                // AJAX 
                var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("output").textContent = this.responseText;
                        }
                    };
                    xhttp.open("GET", "suggest.php?q="+str, true);
                    xhttp.send();
                }
            }
    </script>
</head>
<body>
    <div class='container'>
        <h1>Search Users</h1>
        <form action="">
            <input type="text" class="form-control"
            onkeyup='showSuggestion(this.value)'>
        </form>
        <p>Suggestion(s): <span id='output' style='font-weight:bold'></span></p>    
    </div>
</body>
</html>