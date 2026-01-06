<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cintact</title>
</head>
<body>
    <h1>Contact Us</h1>
    <form method="POST" action="{{ route('contact.store') }}">
    @csrf
    <div>
            <label>Name</label><br>
            <input type="text" name="name" required>
        </div>

        <br>

        <div>
            <label>Email</label><br>
            <input type="email" name="email" required>
        </div>

        <br>

        <div>
            <label>Message</label><br>
            <textarea name="message" rows="5" required></textarea>
        </div>

        <br>

        <button type="submit">Send</button>
    
</form>


</body>
</html>

