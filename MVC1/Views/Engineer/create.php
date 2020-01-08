<h1>Add new engineer</h1>

<a href="/MVC1/engineerController/index" class="btn btn-success btn-xs pull-left">Go back</a>
<form method='post' action='#'>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter a name" name="name">
    </div>

    <div class="form-group">
        <label for="description">Birthdate</label>
        <input type="text" class="form-control" id="birth" placeholder="Enter a birthdate" name="birth">
    </div>

    <div class="form-group">
        <label for="description">Gender</label>
        <input type="radio" value="Nam" name="gender" id="gender" checked>
        <input type="radio" value="Nữ" name="gender" id="gender">
    </div>

    <div class="form-group">
        <label for="description">Address</label>
        <input type="text" value="" name="address" id="address"  placeholder="Enter address" class="form-control">
      
    </div>

    <div class="form-group">
        <label for="description">Major</label>
        <input type="text" value="" name="major" id="major"  placeholder="Enter position" class="form-control">
      
    </div>

    <div class="form-group">
        <label for="description">Date salary up</label>
        <input type="text" value="" name="date" id="date"  placeholder="Enter date" class="form-control">
      
    </div>

    <div class="form-group">
        <label for="description">Salary range</label>
        <input type="text" value="" name="range" id="range"  placeholder="Enter range" class="form-control">
      
    </div>
    <button type="submit" class="btn btn-primary" id="send">Submit</button>
    <button type="reset" class="btn btn-warning" >Cancel</button>
</form>