<h1>Dashboard</h1>

<style>

    .thumbnail{
        border:1px solid red;
    }
</style>
<div class="container">
    <div class="row">
        
        <div class="col-md-4">
            <div class="thumbnail">
                <img data-src="#" alt="">
                <div class="caption">
                    <h3 style="color:yellow">Employees</h3>
                    <p>
                        Total: <?=$total[0]?> people
                    </p>
                    <p>
                        <a href="/MVC1/employeeController/index" class="btn btn-primary">View details >></a>
                        
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="thumbnail">
                <img data-src="#" alt="">
                <div class="caption">
                    <h3 style="color:violet">Workers</h3>
                    <p>
                    Total: <?=$total[1]?> people
                    </p>
                    <p>
                        <a href="/MVC1/workerController/index" class="btn btn-primary">View details >></a>
                       
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="thumbnail">
                <img data-src="#" alt="">
                <div class="caption">
                    <h3 style="color:green">Engineers</h3>
                    <p>
                    Total: <?=$total[2]?> people
                    </p>
                    <p>
                        <a href="/MVC1/engineerController/index" class="btn btn-primary">View details >></span></a>
                       
                    </p>
                </div>
            </div>
        </div>
        
    </div>
</div>