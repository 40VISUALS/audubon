<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Audubon Society Capture Form</title>
    </head>
    <body style='text-align: center; border-width:5px; border-style:solid; color:black; width:fit-content'>
        <img src="https://sacajaweaaudubon.org/wp-content/uploads/2023/03/national-audubon-society-logo-e1569340135306.png" alt="Audubon Society Logo">
        <br><br>
        <h2>Bird Sighting Form</h2>
        <br>
        <p style='color:red;'><strong>NOTE: The National Audubon Society will never give your personal information out to anyone!<br>This information will only be used if more data about your bird sighting is needed by the Audubon Society!</strong></p>
        <br>
        <form action="/save-sighting" method="post">
            {{csrf_field()}}
            <label>Name: <input type="text" name="name" placeholder="Optional Field"></label>
            <br><br>
            <label>Email: <input type="email" name="email" placeholder="Optional Field"></label>
            <br><br>
            <label>Phone Number: <input type="text" name="phone_number" placeholder="Optional Field"></label>
            <br><br>
            <label>Date: <input type="date" name="date" required></label>
            <br><br>
            <label>Time: <input type="time" name="time" required></label>
            <br><br>
            <label>Location: <input type="text" name="location" required></label>
            <br><br>
            <label>Species: <input type="text" name="species" required></label>
            <br><br>
            <label>Description: <input type="text" name="description" required></label>
            <br><br>
            <input type="submit" value="Submit" name="submit">
            <br><br>
        </form>
    </body>
</html>