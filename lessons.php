			<div class="size1">
				<h2 class="h2">Lecciones</h2>
			</div>
			<div class="module05 size4">
				<div class="inner_module transition05 hovermodule">
					<div class="icon05">
						<i class="fa fa-plus" aria-hidden="true"></i>
					</div>
					<div class="text05">Nueva Lección</div>
				</div>
			</div>
			<div class="module05 size4">
				<div class="inner_module transition05 hovermodule">
					<div class="icon05">
						<i class="fa fa-refresh" aria-hidden="true"></i>
					</div>
					<div class="text05">Actualizar</div>
				</div>
			</div>
			<div class="module05 size4">
				<div class="inner_module transition05 hovermodule">
					<div class="icon05">
						<i class="fa fa-ban" aria-hidden="true"></i>
					</div>
					<div class="text05">Inactivos</div>
				</div>
			</div>
			<div class="module05 size4">
				<div class="inner_module transition05 hovermodule">
					<div class="icon05">
						<i class="fa fa-book" aria-hidden="true"></i>
					</div>
					<div class="text05">3 Lecciones</div>
				</div>
			</div>
			<div class="module05 size1">
				<div class="inner_module" style="text-align:center">
					<select name="module_select" id="module_select">
						<option value="1">Home Objects</option>
						<option value="2">Greeting People</option>
						<option value="3">Directions</option>
					</select>
				</div>
			</div>
			<div class="modulefull size1">
				<div class="inner_module">
					<div class="table_view">
						<div class="table_view_head">
							<div class="table_row">
								<div class="table_col col1">Id</div>
								<div class="table_col col4">Nombre</div>
								<div class="table_col col2">Autor</div>
								<div class="table_col col1">Color</div>
								<div class="table_col col1">Icon</div>
								<div class="table_col col1">Acciones</div>
							</div>
						</div>
						<div class="table_view_content" id="sortable">
							<div class="table_row">
								<div class="table_col col1">1</div>
								<div class="table_col col4">Home Objects</div>
								<div class="table_col col2">adminod</div>
								<div class="table_col col1"> <div class="color_m" style="background:#418bca;"></div> </div>
								<div class="table_col col1"> <i class="fa fa-car" aria-hidden="true"></i> </div>
								<div class="table_col col1"> <div class="actions"> <div class="action1 transition05 hovering"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </div> <div class="action2 transition05 hovering"> <i class="fa fa-trash-o" aria-hidden="true"></i> </div> </div> </div>
							</div>
							<div class="table_row">
								<div class="table_col col1">2</div>
								<div class="table_col col4">Greeting People</div>
								<div class="table_col col2">adminod</div>
								<div class="table_col col1"> <div class="color_m" style="background:#418bca;"></div> </div>
								<div class="table_col col1"> <i class="fa fa-car" aria-hidden="true"></i> </div>
								<div class="table_col col1"> <div class="actions"> <div class="action1 transition05 hovering"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </div> <div class="action2 transition05 hovering"> <i class="fa fa-trash-o" aria-hidden="true"></i> </div> </div> </div>
							</div>
							<div class="table_row">
								<div class="table_col col1">3</div>
								<div class="table_col col4">Directions</div>
								<div class="table_col col2">adminod</div>
								<div class="table_col col1"> <div class="color_m" style="background:#418bca;"></div> </div>
								<div class="table_col col1"> <i class="fa fa-car" aria-hidden="true"></i> </div>
								<div class="table_col col1"> <div class="actions"> <div class="action1 transition05 hovering"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </div> <div class="action2 transition05 hovering"> <i class="fa fa-trash-o" aria-hidden="true"></i> </div> </div> </div>
							</div>

						</div>
					</div>
				</div>
			</div>
<script>
	$( "#sortable" ).sortable({
		axis: "y"
	});
    $( "#sortable" ).disableSelection();
</script>