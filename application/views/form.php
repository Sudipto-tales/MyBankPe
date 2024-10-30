<!DOCTYPE html>
<html lang="en">

<head>
    <title>GFG- Store Data</title>
</head>

<body>
    <center>
        <h1>Storing Form data in Database</h1>
        <form action="<?= base_url()?>email/submit" method="post">

            <p>
                <label for="firstName">Email:</label>
                <input type="text" name="first_name" id="firstName">
            </p>

            <input type="submit" value="Submit">
        </form>
    </center>
</body>

</html>