
<style>
	table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 80%;
  margin-left:15%;
  border: 1px solid black;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
<div style="overflow-x:auto;">
<table class="table">
	<h1 style='margin-left:10em'>Registered Users</h1><hr>
	<tr>
	<td colspan="8"><a href="dashboard.php?option=add_rooms" class="btn btn-primary">Add New User</a></td>
	</tr>
	<tr style="height:40">
		<th>SN</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Address</th>
		<th>Gender</th>
	</tr> 
	<?php 
    $i=1;
    $sql=mysqli_query($con,"select * from create_account");
    while($res=mysqli_fetch_assoc($sql))
    {
    ?>
    <tr>
            <td><?php echo $i;$i++; ?></td>
            <td><?php echo $res['name']; ?></td>
            <td><?php echo $res['email']; ?></td>
            <td><?php echo $res['mobile']; ?></td>
            <td><?php echo $res['address']; ?></td>
            <td><?php echo $res['gender']; ?></td>
        </td>
        </tr>	
    <?php 	
    }
    ?>
    </table>