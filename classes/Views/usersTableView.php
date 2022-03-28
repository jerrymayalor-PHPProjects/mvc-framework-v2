<table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>

    <tbody>
        <?php  foreach ( $datas as $data ) : ?>
            <tr>
                <td><?php echo  $data['id'] ?></td>
                <td><?php echo  $data['name'] ?></td>
                <td><?php echo  $data['age'] ?></td>
                <td><a href='' class='btn btn-sm btn-success'>View</a></td>
                <td><a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editUser" data-id="<?php echo  $data['id'] ?>">Edit</a></td>
                <td><a href="#" class="btn btn-sm btn-danger">Delete</a></td></td>
            </tr>
        <?php  endforeach; ?>
    </tbody>
</table>
     
<script src="assets/php/custom-php-scripts.php"></script>