<div id="border">
	<form name="login" method="post" action="login.php">
		<table cellspacing="0">
			<tbody>
				<tr>
					<td>
						<label for="email">User Name</label>
					</td>
					<td>
						<label for="pass">Password</label>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="username" value="username">
					</td>
					<td>
						<input type="password" name="password" value="password">
					</td>
					<td>
						<input type="submit" value="Login">
					</td>
				</tr>
				<tr>
					<td>
						<div>
							<input id="persist_box" type="checkbox" name="persistent" value="1">
							<label for="persist_box">Remember me</label>
						</div>
						<input type="hidden" name="default_persistent" value="0">
					</td>
					<td>
						<a href="forgot.php">Forgot Your Password</a>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</div>