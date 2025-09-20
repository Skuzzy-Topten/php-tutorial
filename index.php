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
                <input type="number" name="age" placeholder="age">
            </div>
            <div>
                <textarea name="message" placeholder="message"></textarea>
            </div>
            <div>
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female
            </div>
            <div>
                <input type="checkbox" name="occupation[]" value="web-developer"> Web Developer
                <input type="checkbox" name="occupation[]" value="web-designer"> Web Designer
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