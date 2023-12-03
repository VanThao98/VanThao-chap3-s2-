
<form action ="process.php" method="post">
    <div class="row mb-3 mt-3">
        <div class="col">
            <input type="text" class="form-control" placeholder="Enter Name" name="name">
        </div>
        <div class="col">
            <input type="number" class="form-control" placeholder="Enter number" name="number">
        </div>
    </div>
    <div class="row mb-3 mt-3">
        <div class="col">
            <input type="email" class="form-control" placeholder="Enter email"name="email" >
        </div>
        <div class="col">
            <input type="password" class="form-control" placeholder="Enter password" name="pass" >
        </div>
    </div>
    <div class="mb-3">
        <textarea  placeholder="Enter message" class="form-control" name="mess"></textarea>
    </div>
    <div class="mb-3">
        <select class="form-control" name="user">
            <option selected disabled>Choose province</option>
            <option value="Banteay Mean Chey">Banteay Mean Chey</option>
            <option value="Battambang">Battambang</option>
            <option value="Siem Riep">Siem Riep</option>
            <option value="Prey Veng">Prey Veng</option>
        </select>
    </div>
    <div class="mb-3">
        <input type="checkbox" class="form-control-check" id="html"  value="HTML" name="check-html">
        <label for="html" class="form-label">HTML</label>

        <input type="checkbox" class="form-control-check" id="css"  value="CSS" name="check-css">
        <label for="css" class="form-label">CSS</label>

        <input type="checkbox" class="form-control-check" id="js"  value="JavaScript" name="check-js">
        <label for="js" class="form-label">Javascript</label>

        <input type="checkbox" class="form-control-check" id="php"  value="PHP" name="check-js">
        <label for="php" class="form-label">PHP</label>

    </div>
    <div class="mb-3">
        <input type="radio" class="form-control-check" id="Female"  value="Female" name="female">
        <label for="Female" class="form-label">Female</label>

        <input type="radio" class="form-control-check" id="Male"  value="Male" name="male">
        <label for="Male" class="form-label">Male</label>
    </div>
   
    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>