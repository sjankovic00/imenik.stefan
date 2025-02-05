<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Korisnik strana</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 80%; margin: auto; }
        .member { border: 1px solid #ddd; padding: 15px; margin: 10px 0; }
        .logout { position: absolute; top: 20px; right: 20px; background: #f44336; color: white; padding: 8px 12px; text-decoration: none; border-radius: 5px; }
        .logout:hover { background: #d32f2f; }
    </style>
</head>
<body>

<a href="/logout" class="logout">Log Out</a>

<div class="container">
    <h1>Prijavljeni ste kao korisnik!</h1>

    <?php foreach ($members as $member): ?>
        <div class="member">
            <a href="/member?id=<?=$member['id'] ?>">
                <strong><?= htmlspecialchars($member['ime']) . ' ' . htmlspecialchars($member['prezime']) ?></strong><br>
            Broj telefona: <?= htmlspecialchars($member['br_telefona']) ?>
            </a>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>
