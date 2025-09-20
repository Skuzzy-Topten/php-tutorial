<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
</head>
<body>
    <main>
        <form action="/create.php" method="post">
            <div>
                <input type="text" name="name" placeholder="Name">
            </div>
            <div>
                <input type="password" name="password" placeholder="Password">
            </div>
            <div>
                <button>
                    Submit
                </button>
            </div>
        </form>
    </main>
</body>
</html>