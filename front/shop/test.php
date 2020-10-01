<?php
session_start();
include_once ('../view/head.php');
include_once ('../view/header.php');

?>


<div class="container">
    <h2>Form control: select</h2>
    <p>The form below contains two dropdown menus (select lists):</p>
    <form>
        <div class="form-group">
            <label for="sel1">Select list (select one):</label>
            <select class="form-control" id="sel1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
            <br>
            <label for="sel2">Mutiple select list (hold shift to select more than one):</label>
            <select multiple class="form-control" id="sel2">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
    </form>
</div>
<?php
include_once ('../view/footer.php');
//include_once ('../view/script.php');
?>
</body>
</html>
