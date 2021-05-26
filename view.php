<?php
header('Access-Control-Allow-Origin: *');

// header('location: allow-access-origin');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Ajax</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container mt-5">
  <h2>View data</h2>
  <button class="btn btn-outline-info" style="margin-left: 90%;" id="addBTN">Add Data</button>
    <table class="table mt-5" >
    <thead>
      <tr>
      <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>GitHub</th>
        <th>Actions</th>
    
      </tr>
    </thead>
    <tbody id="table">
      
    </tbody>
  </table>
</div>
<!-- Modal Update-->
<div class="modal fade" id="update" role="dialog">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header" style="color:#fff;background-color: #e35f14;padding:6px;">
              <h5 class="modal-title"><i class="fa fa-edit"></i> Update</h5>
             
            </div>
            <div class="modal-body">
            
                <!--1-->
                <div class="row">
                    <div class="col-md-3">
                        <label>Name</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="name" id="name_modal" class="form-control-sm" required>
                    </div>  
                </div>
                <!--2-->
                <div class="row">
                    <div class="col-md-3">
                        <label>Email</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="email" id="email_modal" class="form-control-sm" required>
                    </div>  
                </div>
                <!--3-->
                <div class="row">
                    <div class="col-md-3">
                        <label>GitHub</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" name="github" id="github_modal" class="form-control-sm" required>
                    </div>  
                </div>
                <input type="hidden" name="id" id="id_modal" class="form-control-sm">
            </div>
            <div class="modal-footer" style="padding-bottom:0px !important;text-align:center !important;">
            <p style="text-align:center;float:center;"><button type="submit" id="update_data" class="btn btn-default btn-sm" style="background-color: #e35f14;color:#fff;">Save</button>
            <button type="button" class="btn btn-default btn-sm" data-dismiss="modal" style="background-color: #e35f14;color:#fff;">Close</button></p>
            
          </div>
          </div>
        </div>
    </div>
<!-- Modal End-->

<script>
$(document).ready(function(){
    $.ajax({
        url: "http://192.168.0.27:8081/web_api/view.php?user",
        type: "GET",
        cache: false,
        success: function(data){
            // $('#table').html(data);
            $data=(JSON.parse(data)) 
            $.each($data, (index,ele)=>{
              $('#table').append(`
              <tr>
              <td class="id">${ele.id}</td>
              
              <td class="name">${ele.Name}</td>
              <td class="email">${ele.Email}</td>
              <td class="github">${ele.GitHub}</td>
              <td>
              <button type="button"class="btn btn-primary edit" id="${ele.id}" >EDIT</button>
              <button class="btn btn-danger deleteButton">DELETE</button>
              </td>

              </tr>
              `)
              // console.log(ele.Name)
            })
            
        }
    });
    $("#addBTN").on('click',function(){
        window.location.href="create.php";
    })
    $(function () {
      // $("#update").modal('shows')
      $(document).on('click', '.edit',function(){
        // alert('sada')
        
        $('#update').modal('show');
        console.log("reacheds")
          var button = $(event.relatedTarget); /*Button that triggered the modal*/
          var id = this.id;
          // var id = button.data('id');
          //var name = button.data('name');
          var name = $(this).parent().siblings('.name').html();
          console.log(id+name)
          var email = $(this).parent().siblings('.email').html();
          var github = $(this).parent().siblings('.github').html();
          // var modal = $(this);
          $('#name_modal').val(name);
          $('#email_modal').val(email);
          $('#github_modal').val(github);
        
          $('#id_modal').val(id);
        });
    });
    // function update(){



    // }
    $(document).on("click", "#update_data", function() { 
      console.log($('#id_modal').val())
      console.log($('#name_modal').val())
        $.ajax({
            url: "http://192.168.0.27:8081/web_api/update_ajax.php",
            type: "POST",
            cache: false,
            data:{
                id: $('#id_modal').val(),
                name: $('#name_modal').val(),
                email: $('#email_modal').val(),
                github: $('#github_modal').val()
                
            },
            success: function(data){
        // $("#update_data").html(data);
        window.location.replace('./view.php');
        
            }
        });
  }); 
  

  $(document).on("click", ".deleteButton", function() { 
        $ele = $(this).parent().siblings('.id').html();
        console.log($ele)
        $.ajax({
            url: "http://192.168.0.27:8081/web_api/delete_ajax.php",
            type: "POST",
            cache: false,
            data:{
                id: $ele
            },
            success: function(data){
                // $("#deleteBTN").html(data);
                window.location.replace('./view.php');
            
            }
        });
    });

})

</script>
</body>
</html>
