<?php require_once "../layouts/default.php" ?>
<title>New Category</title>
</head>
<body>
	<div class="container">
		<h2>New Category</h2>
    <button type="button" class="btn btn-primary mt-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
     New Category
    </button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
              <label for="category_name" class="form-label">Category name</label>
              <input type="text" class="form-control" id="category_name" placeholder="Sport">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button id="save-category" type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>



	</div>

</body>
</html>