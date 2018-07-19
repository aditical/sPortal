<?php
// require connection
session_start();
//$_SESSION['assignment_id']="9";
require_once '../connections/db.php';
$partial_query = "SELECT batch_id FROM users where id = ".$_SESSION['loggedUser'];
$query = mysqli_query($con, "SELECT * FROM assignment JOIN batch ON assignment.batch_id = batch.id where assignment.batch_id = (".$partial_query.")");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Student Dashboard</title>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
        <style>
            .color{
                background: #ffffff            !important;
                color: #337ab7               !important;
                padding: 3px               !important;
                border-radius: 5px         !important;
                border: 1px #ffffff    !important;
                font-family: "Helvetica Neue",Helvetica,Arial,sans-serif ;
                font-size: 14px !important;

               /* For good measure */     
               text-decoration: none      !important; 
            }
        </style>
    </head>
    <body>
       
        <div class="container">
            <h1 class="text-center">Assignments</h1>
            <a href="../actions/logout.php" class="float-right">Logout</a>
            <div class="table-responsive">  
                <table class="table "> 
                    <thead>
                        <tr>
                            <th>Subject</th>
                            <th>Batch</th>
                            <th>Action</th>
                            <th>Teacher</th>
                            <th>Due date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_assoc($query)) { ?>
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['batch']; ?></td>
                            <td><a href="../<?php echo $row['file']; ?>">View</a> | <a href="submit_assignment.php?id=<?php echo $row['aid']; ?>">Submit</a> | <input type="button" name="view" value="Feedback" id="<?php echo $row["aid"]; ?>" class="btn btn-info btn-xs view_data color" /></td>
                            <td><?php echo $row['teacher_name']; ?></td>
                            <td><?php echo $row['due_date']; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
   </body>
</html>

<!-- For Modal -->
<div id="dataModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">  
    <div class="modal-dialog" role="document">  
       <div class="modal-content">  
            <div class="modal-header" style="background-color:#091834 !important ;">  
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>  
                 <h4 class="modal-title" style="color: #ffffff !important; size: 4px !important;">FEEDBACK</h4>  
            </div>  
            <div class="modal-body">
                <p id="feedbackContent"></p>  
            </div>  
            <div class="modal-footer">  
                 <button type="button" style="background-color:   #091834 !important ;color:#ffffff !important;" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>  
       </div>  
    </div> 
</div> 
<!-- Scripts -->   


<script type="text/javascript">
$(document).ready(function(){  
    $('.view_data').click(function(){  
        var assignment_id = $(this).attr("id"); 
        //alert(assignment_id); 
        $.ajax({  
            url:"../actions/get_feedback.php",  
            method:"post",  
            data:{
                assignment_id:assignment_id,
                student_id:<?php echo $_SESSION['loggedUser']; ?>  
            },  
            success:function(data){  
                $('#feedbackContent').html(data);  
                $('#dataModal').modal("show");  
            }  
        });  
    });  
});    
</script>
 

