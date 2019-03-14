<form>
    <div  class="from-group">
        <label for="firstname">First name</label>
        <input type="text" name="firstname" id="firstname" class="form-control">
    </div>
    <div class="from-group">
        <label for="chouse">Селект</label>
        <select name="chouse" id="chouse" class="form-control">
            <option value="value1">1</option>
            <option value="value2">2</option>
            <option value="value3">3</option>
            <option value="value4">4</option>
        </select>
    </div>
    <div class="form-check">
        <input type="checkbox" class="from-check-input" value="1" id="1" name="checkboxes[]">
        <label for="1"> 1</label>
        <input type="checkbox" class="from-check-input" value="2" id="2" name="checkboxes[]">
        <label for="2"> 2</label>
        <input type="checkbox" class="from-check-input" value="3" id="3" name="checkboxes[]">
        <label for="3"> 3 </label>
    </div>
    <button type="submit" class="btn btn-primary">Отравить</button>
</form>