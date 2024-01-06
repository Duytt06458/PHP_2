<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tên danh mục</th>
      <th scope="col">Ngày tạo</th>
      <th scope="col">Tùy chỉnh</th>
    </tr>
  </thead>
  <tbody>
    <?php if(isset($categories)): ?>
        <?php foreach ($categories as $key): ?>
          <tr>
            <th scope="row"><?php echo $key['id'] ?></th>
            <td><?php echo $key['name'] ?></td>
            <td><?php echo $key['created_at'] ?></td>
            <td>
              <button type="button" class="btn btn-success">Sửa</button>
              <button type="button" class="btn btn-danger">Xóa</button>
            </td>
          </tr>
        <?php endforeach;?>
    <?php endif; ?>
  </tbody>
</table>
</div>
</body>
</html>