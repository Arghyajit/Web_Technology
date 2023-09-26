<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
   
</head>
<body>
    <h1>Registration Form</h1>
    <Form >
    <table>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="fname"></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="lname"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="pass"></td>
        </tr>
        <tr>
            <td>Date of Birth</td>
            <td><input type="date" name="dob"></td>
        </tr>
        
        <tr>
            <td>Gender</td>
            <td><input type="radio" value="Male" name="gender"> Male</td>
            <td><input type="radio" value="Female" name="gender"> Female</td>
            <td><input type="radio" value="Custom" name="gender">Custom</td>
        </tr>

        <tr>
            <td>Country</td>
            <td>
               <select name="Country">
                <option value ="Bangladesh" name="Country">Bangladesh</option>
                <option value ="India" name="Country">India</option>
                <option value ="United States" name="Country"> United States</option>
                <option value ="Germany" name="Country"> Germany</option>
                <option value ="United Kingdom" name="Country">United Kingdom</option>

            </select>
         </td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td><input type="text" name="phone"></td>
        </tr>
        <tr>
            <td>Profile Picture</td>
            <td><input type="file" name="profilepic"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Submit" name="Submit"></td>
        </tr>
        <tr>
            <td><input type="Reset" value="Reset" name="Reset"></td>
        </tr>
</table>
        
</Form>
        
        

</body>
</html>