<h1 style="color:red;">Engineers Management</h1>

<div class="container" style="margin-top:30px">
    <div class="row">
        <div class="col-md-6">
        <h3>Number: <strong style="color:green"><?=isset($number)?$number :''?>&nbsp;people(s)</strong></h3>
        </div>
        <a href="/MVC1/engineerController/addEngineer"><span class="btn btn-xs btn-primary pull-right">+ Add new engineer</span></a>
    </div>

    
    <div class="row" style="margin-top:10px">
        <div class="col-md-6">
            
            <form action="" method="POST" role="form">
           
                    <label>Search:&nbsp;&nbsp;&nbsp;</label><input type="text" id="nameS" placeholder="Type..." name="nameS" value="<?=isset($_POST['nameS'])? $_POST['nameS']:''?>"> 
                    <input type="submit" value="Search" class="btn  btn-info">
                    <input type="reset" value="Cancel" class="btn  btn-warning">
            </form>
            
        </div>
    </div>
    
    <table class="table table-striped table-hover" style="margin-top:10px;">
        <thead>
            <tr>
                <th>STT</th>
                <th>Name</th>
                <th>Birthdate</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Major</th>
                <th>Date_salary_up</th>
                <th>Salary_range</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if(isset($engineer)){
                $i=0;
               foreach($engineer as $emp)
               {
                   echo "<tr>";
                   $i++;
                   echo "<td>".$i."</td>";
                   echo "<td>".$emp->getName()."</td>";
                   echo "<td>".$emp->getBirthdate()."</td>";
                   echo "<td>".$emp->getGender()."</td>";
                   echo "<td>".$emp->getAdress()."</td>";
                   echo "<td>".$emp->getMajor()."</td>";
                   echo "<td>".$emp->getDate()."</td>";
                   echo "<td>".$emp->getRange()."</td>";
                   echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/MVC1/engineerController/edit/" . $emp->getId() . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/MVC1/engineerController/remove/" . $emp->getId() . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
                   echo"</tr>";
               }
            }
            ?>
        </tbody>
    </table>
    
    <div class="alert alert-danger " style="display:none">
            <?php 
                if(isset($error)){
                 echo '<script>document.getElementsByClassName("alert")[0].style.display="block"</script>';
                 echo $error;
                }
            
            ?>
    </div>
</div>
