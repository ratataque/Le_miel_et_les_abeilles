<form action="/gestion/administration.php?content=bidouille_karl" method="post">
    <div class="form-group">
        <label>Fruits :</label>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="fruit1" value="apple">
            <label class="form-check-label">Apple</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="fruit2" value="banana">
            <label class="form-check-label">Banana</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="fruit3" value="cherry">
            <label class="form-check-label">Cherry</label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
echo ("<pre>");
var_dump($_POST);
echo ("</pre>");
?>