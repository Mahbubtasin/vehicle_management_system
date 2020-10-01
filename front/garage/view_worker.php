<?php
session_start();

include_once ('../../vendor/autoload.php');
use University\garage\worker;
$worker = new worker();
$workers = $worker->show_worker();

include_once ('view/head.php');

include_once ('view/header.php');
?>


<form method="post" enctype="multipart/form-data" action="../../elements/garage/add_worker_process.php">
    <div class="card" style="margin-left: 300px;margin-right: 300px;margin-top: 50px">
        <div class="card-header" style="font-weight: bolder;font-size: 20px">
            Add Worker
        </div>
        <div class="card-body">
            <div class="row form-group">
                <label for="exampleInputWorkerName" style="font-weight: bolder;font-size: 15px;margin-left: 15px">Worker Name</label>
                <input type="text" class="form-control" id="exampleInputWorkerName" aria-describedby="nameHelp" name="workerName" style="margin-left: 15px;margin-right: 15px">
                <!--        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
            </div>
            <div class="row form-group">
                <label for="exampleInputWorkerNumber" style="font-weight: bolder;font-size: 15px;margin-left: 15px">Mobile Number</label>
                <input type="text" class="form-control" id="exampleInputWorkerNumber" aria-describedby="numberHelp" name="workerNumber" style="margin-left: 15px;margin-right: 15px">
                <!--        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

    <div class="card" style="margin-top: 40px">
        <div class="card-header" style="font-weight: bolder;font-size: 20px">
            List of Worker's
        </div>
        <div class="card-body">
            <table class="table">
                <thead style="text-align: center">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Joining Date</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody style="text-align: center">
                <?php
                $counter = 0;
                foreach ($workers as $allWorkers)
                {
                    ?>
                    <tr>
                        <td><?= ++$counter; ?></td>
                        <td><?= $allWorkers['worker_name']; ?></td>
                        <td><?= $allWorkers['worker_number']; ?></td>
                        <td><?= $allWorkers['created_at']; ?></td>
                        <td>
                            <a class="btn btn-outline-dark" href="edit_workers.php?id=<?= $allWorkers['worker_id']; ?>"><i class="fas fa-edit" style="margin-right: -3px"></i></a>
                            <a href="../../elements/garage/delete_worker_process.php?id=<?= $allWorkers['worker_id']; ?>" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <?php
                }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
<?php
include_once ('../view/footer.php');

include_once ('../view/script.php');