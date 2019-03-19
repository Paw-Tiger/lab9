<form action="<?=$_SERVER['hostname']."/lab9/helpers/form.php"?>">
    <div class="form-group">
        <label for="name">Name</label>
        <input name="name" value="<?=$currentSession->read('name')?>" type="text" class="form-control" id="name" placeholder="Ivan" >
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input  name="email" value="<?=$currentSession->read('email')?>" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Example select</label>
        <select name="select" class="form-control" id="exampleFormControlSelect1">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect2">Example multiple select</label>
        <select name="multiplySelect[]" multiple class="form-control" id="exampleFormControlSelect2">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Example textarea</label>
        <textarea name="textarea" class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Send</button>
</form>