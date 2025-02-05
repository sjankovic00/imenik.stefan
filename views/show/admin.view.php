<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin strana</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 80%; margin: auto; }
        .member { border: 1px solid #ddd; padding: 15px; margin: 10px 0; display: flex; justify-content: space-between; }

        .btn {
            background: #f44336;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: block;
            text-align: center;
            margin: 5px 0;
            width: 120px;
        }

        .btn:hover {
            background: #d32f2f;
        }

        .btn-action {
            background-color: #4CAF50;
        }

        .btn-action:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div style="position: absolute; top: 20px; right: 20px;">
    <a href="/logout" class="btn">Log Out</a>
    <a href="#" class="btn btn-action">Add</a>
    <a href="#" class="btn btn-action">Edit</a>
</div>


<div class="container">
    <h1>Prijavljeni ste kao admin.</h1>

    <?php foreach ($members as $member): ?>
        <div class="member">
            <div>
                <a href="/member?id=<?=$member['id'] ?>">
                    <strong><?= htmlspecialchars($member['ime']) . ' ' .  htmlspecialchars($member['prezime']) ?></strong><br>
                    Broj telefona: <?= htmlspecialchars($member['br_telefona']) ?>
                </a>
            </div>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>
