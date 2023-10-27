<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/output.css">
    <title>Register</title>
</head>
<body class="">
    <!-- Register Form -->
    <form action="../handlers/register_process.php"
            method="POST"
            class="gap-y-2 border-2 border-black flex flex-col p-10 pt-3 mx-auto w-96">
        <h1 class="text-xl text-center">Register</h1>
            <span class="flex w-full">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" class="border border-black ml-auto w-44" required>
        </span>

        <span class="flex w-full">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="border border-black ml-auto w-44" required>
        </span>

        <button type="submit" class="w-44 h-12 bg-slate-600 text-white ml-auto">Register</button>
    </form>
</body>
</html>