<?php
session_start();

include_once ('../../vendor/autoload.php');

use University\garage\show_service;
$show_service = new show_service();
$all_service = $show_service->showService();

$countService = count($all_service);

include_once ('view/head.php');

include_once ('view/header.php');
?>
<div class="card" style="margin-top: 50px">
    <div class="card-header" style="font-size: 20px;font-weight: bold">
        <div class="text-left">
        All Service List
        </div>
    </div>
    <div class="card-body">
        <table class="table">
            <thead style="text-align: center">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Mobile</th>
                <th scope="col">Worker</th>
                <th scope="col">Service</th>
                <th scope="col">Price</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody style="text-align: center">
            <?php
            $counter = 0;
            foreach ($all_service as $allServiceOne)
            {
                ?>
                <tr>
                    <td><?= ++$counter; ?></td>
                    <td><?= $allServiceOne['full_name']; ?></td>
                    <td>0<?= $allServiceOne['phone']; ?></td>
                    <td><?= $allServiceOne['worker_name']; ?></td>
                    <td><?= $allServiceOne['service_name']; ?></td>
                    <td><?= $allServiceOne['cost']; ?></td>
                    <td><?= $allServiceOne['service_time']; ?></td>
                    <td>
                        <a href="../../elements/garage/delete_service.php?id=<?= $allServiceOne['id']; ?>" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a>
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
