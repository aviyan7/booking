
<div style="overflow-x:auto;">
<table class="table">
	<h1 style='margin-left:10em'>Registered Users</h1><hr>
	<tr style="height:40">
		<th>SN</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Address</th>
		<th>Gender</th>
        <th>Action</th>
	</tr> 
	<?php 
    $sql=mysqli_query($con,"select * from create_account");
    while($res=mysqli_fetch_assoc($sql))
    {
    ?>
    <tr>
            <td><?php echo $res['id']; ?></td>
            <td><?php echo $res['name']; ?></td>
            <td><?php echo $res['email']; ?></td>
            <td><?php echo $res['mobile']; ?></td>
            <td><?php echo $res['address']; ?></td>
            <td><?php echo $res['gender']; ?></td>
            <td><a href="deleteuser.php?id=<?php echo $res['id'];?>"><i class="fa fa-trash" style="color:red"></i></a></td>
        </td>
        </tr>	
    <?php 	
    }
    ?>
    </table>
