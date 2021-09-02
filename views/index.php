<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MVC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h1>Tasks:</h1>
        <a href="/create">create</a>
        <table>
            <thead>
                <tr>
                    <th><a href="?sortBy=id&direction=<?=(($sortBy != 'id' || ($sortBy == 'id' && $direction != 'asc')) ? 'asc' : 'desc')?>">ID</a></th>
                    <th><a href="?sortBy=username&direction=<?=(($sortBy != 'username' || ($sortBy == 'username' && $direction != 'asc')) ? 'asc' : 'desc')?>">Username</a></th>
                    <th><a href="?sortBy=email&direction=<?=(($sortBy != 'email' || ($sortBy == 'email' && $direction != 'asc')) ? 'asc' : 'desc')?>">E-mail</a></th>
                    <th><a href="?sortBy=desciption&direction=<?=(($sortBy != 'desciption' || ($sortBy == 'desciption' && $direction != 'asc')) ? 'asc' : 'desc')?>">Desciption</a></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($tasks as $task): ?>
                <tr>
                    <td><?=$task->id?></td>
                    <td><?=$task->username?></td>
                    <td><?=$task->email?></td>
                    <td><?=$task->description?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>

        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <?php for ($i = 1; $i <= $tasks->lastPage(); $i ++): ?>
            <li class="page-item"><a class="page-link" href="?page=<?=$i?>&sortBy=<?=$sortBy?>&direction=<?=$direction?>"><?=$i?></a></li>
            <?php endfor ?>
          </ul>
        </nav>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>