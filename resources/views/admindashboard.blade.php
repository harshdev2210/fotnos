<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f9f9f9; margin: 0; padding: 0; display: flex; flex-direction: column; min-height: 100vh;">
    <header style="background-color: #333; color: #fff; padding: 2px 5px; text-align: center;">
        <h1>Admin Dashboard</h1>
    </header>
    <div style="display: flex; flex-grow: 1;">
        <nav style="width: 250px; background-color: #2c3e50; padding: 20px; color: #ecf0f1;">
            <h2 style="font-size: 1.5em; margin-bottom: 20px;">Menu</h2>
            <ul style="list-style-type: none; padding: 0;">
                <li style="margin-bottom: 10px; display: flex; align-items: center;">
                    <i class="fas fa-light fa-gauge" style="margin-right: 10px;"></i>
                    <a href="/dashboard" style="color: #ecf0f1; text-decoration: none;">Dashboard</a>
                </li>
                <li style="margin-bottom: 10px; display: flex; align-items: center;">
                    <i class="fas fa-plus-circle" style="margin-right: 10px;"></i>
                    <a href="/create" style="color: #ecf0f1; text-decoration: none;">Create</a>
                </li>
                <li style="margin-bottom: 10px; display: flex; align-items: center;">
                    <i class="fas fa-cogs" style="margin-right: 10px;"></i>
                    <a href="/settings" style="color: #ecf0f1; text-decoration: none;">Settings</a>
                </li>
                <li style="margin-bottom: 10px; display: flex; align-items: center;">
                    <i class="fas fa-sign-out-alt" style="margin-right: 10px;"></i>
                    <a href="/logout" style="color: #e74c3c; text-decoration: none;">Logout</a>
                </li>
            </ul>
        </nav>
        <main style="flex-grow: 1; padding: 20px; background-color: #ecf0f1;">
            <!-- Main content goes here -->
        </main>
    </div>
    <footer style="background-color: #333; color: #fff; text-align: center; padding: 10px 20px;">
        &copy; 2023 Your Company
    </footer>
</body>

</html>
