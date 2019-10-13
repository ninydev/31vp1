<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Send</h3>
			</div>
			<div class="card-body">
				<form method="GET" action="<?=$_SERVER['PHP_SELF']?>">
                    <input type="hidden" name="controller" value="contacts">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="email" name="email">
						
					</div>

					<div class="form-group">
						<input type="submit" value="Send" class="btn float-right login_btn">
					</div>
				</form>
			</div>

		</div>
	</div>
</div>