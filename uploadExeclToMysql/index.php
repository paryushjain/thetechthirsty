<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UPLOAD DATA FROM EXCEL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body>
    <div class="container">
        <h5>add mutiple employees to mysql using php and excel</h5>
        <form id="upload_file">
            <div class="file-field input-field">
                <div class="btn">
                    <span>File</span>
                    <input type="file" name="employee_file">
                </div>
                <div class="file-path-wrapper">
                    <input type="text" class="file-path validate">
                </div>
                <input type="submit" class="btn" value="Add employees">
            </div>
        </form>
    </div>
  </body>
  <script type="text/javascript">
      $(document).ready(function(){
        $('#upload_file').on("submit",function(e){
            e.preventDefault();
            $.ajax({
                url:"import.php",
                method:"POST",
                data: new FormData(this),
                contentType:false,
                cache:false,
                processData:false,
                success: function(data){
                    if(data=='Error1'){
                        alert("Invalid File");
                    }else if(data =='Error2'){
                        alert("Please Select file");
                    }else{
                        console.log("Success");

                    }
                }
            })

        });

      });
  </script>
</html>  
