<h1>Edit</h1>

<a class="btn btn-danger" href="/MVC1/workerController/index">Go back</a>
<form method='post' action='#'>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter a name" name="name" value="<?=$edits->getName()?>">
    </div>

    <div class="form-group">
        <label for="description">Birthdate</label>
        <input type="text" class="form-control" id="birth" placeholder="Enter a birthdate" name="birth" value="<?=$edits->getBirthdate()?>">
    </div>

    <div class="form-group">
        <label for="description">Gender</label>
        <input type="radio" value="Nam" name="gender" id="gender" checked>
        <input type="radio" value="Nữ" name="gender" id="gender">
    </div>

    <div class="form-group">
        <label for="description">Address</label>
        <input type="text" class="form-control" name="address" id="address"  placeholder="Enter address"  value="<?=$edits->getAdress()?>">
      
    </div>

    <div class="form-group">
        <label for="description">Level</label>
        <input type="text"  name="level" id="level"  placeholder="Enter level" class="form-control" value="<?=$edits->getLevel()?>">
      
    </div>

    <div class="form-group">
        <label for="description">Date level up</label>
        <input type="text"  name="date" id="date"  placeholder="Enter date" class="form-control" value="<?=$edits->getDate()?>">
      
    </div>

    <div class="form-group">
        <label for="description">Salary range</label>
        <input type="text"  name="range" id="range"  placeholder="Enter range" class="form-control" value="<?=$edits->getRange()?>">
      
    </div>
    <button type="submit" class="btn btn-primary" id="send">Submit</button>
    <button type="reset" class="btn btn-warning" >Cancel</button>
</form>