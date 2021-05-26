<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Insert</title>
</head>
<body>

<div class="container mt-5 p-5" style="margin-left: 500px;">
<form action="" method="post">
<h5 class="text-secondary" style="margin-left: 130px;">Insert Data</h5>
<div class="form-group mt-4">
<label>Name</label>
    <input type="text" id="name" name="name" class="form-control col-4" placeholder="Name"> 

</div>
<div class="form-group">
<label>Email</label>
    <input type="text" id="email" name="email" class="form-control col-4" placeholder="Email">

</div>
<div class="form-group">

<label>GitHub</label>
    <input type="text" id="github" name="github" class="form-control col-4"placeholder="GitHub">
</div>
<div class="form-group">

<button type="submit" id="button" class="btn btn-outline-info">SAVE</button>  
<button type="button" id="update_btn"  class="btn btn-danger"style="">View</button>

</div>

    </form>
</div>    
    <script>

        //Save DATA
        $(document).ready(function(){
            $("#button").click(function(){
                var name=$("#name").val();
                var email=$("#email").val();
                var github=$("#github").val();
                $.ajax({
                    url:'http://192.168.0.27:8081/web_api/insert.php',
                    method:'POST',
                    data:{
                        name:name,
                        email:email,
                        github:github
                    },
                   success:function(data){
                       alert(data);
                
                

                   }
                });
                
            });
            $("#update_btn").click(function(){
                window.location.href = "view.php"
            })
        });
        

    </script>
</body>
</html>