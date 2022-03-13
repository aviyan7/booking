
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
  border: 1px solid black;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
<div style="overflow-x:auto;">
<table class="table">
	<h1 style='margin-left:10em'>Registered Users</h1><hr>
	<tr>
	<td colspan="8"><a href="createuser.php"><button>Add New User</button></a></td>
	</tr>
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
            <td><a href="edituser.php?id=<?php echo $res['id'];?>">E</a>&emsp;<a href="deleteuser.php?id=<?php echo $res['id'];?>">D</a></td>
        </td>
        </tr>	
    <?php 	
    }
    ?>
    </table>
