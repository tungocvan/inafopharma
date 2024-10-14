<?php 
  global $wpdb;
  $id= 1;
   $query = $wpdb->prepare("SELECT * FROM `wp_ems_form_data` WHERE 1=%d ",$id);
   $employees = $wpdb->get_results( $query ,ARRAY_A);
//   print_r($employees);
   // die('oki');
?>
<div style="margin-right:30px">
     <table id="list_employees" class="display" style="width:100%">
        <thead>
            <tr>
                <th>STT</th>
                <th>Email</th>
                <th>Name</th>
                <th>Age</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
               if(count($employees) > 0) {
                $stt = 1;
                foreach ($employees as $employee) {
                    ?>
                    
                    <tr>
                        <td><?php echo $stt++ ?></td>
                        <td><?php echo $employee['email'] ?></td>
                        <td><?php echo $employee['name'] ?></td>
                        <td><?php echo $employee['age'] ?></td>
                        <td><?php echo $employee['phone'] ?></td>
                        <td><?php echo $employee['address'] ?></td>
                        <td><?php echo $employee['gender'] == 'nu' ? 'nữ' : 'nam' ?></td>
                        <td>
                            <a href="/wp-admin/admin.php?page=edit-employee&id=<?php echo $employee['id'] ?>" class="btn btn-warning">Edit</a>
                            <a href="javascript:void(0)" class="btn btn-danger deletedata" data-id="<?php echo $employee['id'] ?>">Delete</a>
                        </td>
                    </tr>
                    <?php
                }
               }
            
            ?>

            
        </tbody>
        <tfoot>
            
        </tfoot>
    </table>

</div>

