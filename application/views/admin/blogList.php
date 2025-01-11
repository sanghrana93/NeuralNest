<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Blog List</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Video</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($blogs as $blog): ?>
                <tr>
                    <td><?= $blog->id ?></td>
                    <td><?= $blog->title ?></td>
                    <td><?= $blog->image ? '<img src="' . base_url('uploads/images/' . $blog->image) . '" width="100">' : 'N/A' ?></td>
                    <td><?= $blog->video ? '<a href="' . base_url('uploads/videos/' . $blog->video) . '" target="_blank">View Video</a>' : 'N/A' ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
