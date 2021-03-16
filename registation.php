<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>registation</title>
<head>
<body>
    <h1>Basic Information</h1>
   <form action="">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" id=""></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <input type="radio" name="male" id="">Male 
                <input type="radio" name="female">Female
            </td>
        </tr>
        <tr>
            <td>Date of Birth</td>
            <td>
                <input type="text" name="dob">
            </td>
        </tr>
        <tr>
            <td>Religion</td>
            <td>
                <section>
                    <option>Islam</option>
                    <option>Hindu</option>
                    <option>Buddiest</option>
                

                </section>
            </td>
        </tr>
        <tr>
            <td>Father Name</td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Mother Name</td>
            <td><input type="text"></td>
        </tr>

    </table>
    <br>
    <h2>Contract Information</h2>
    <table>
        <tr>
            <td>Present Address</td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Permanent Address</td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="tel" ></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email"></td>
        </tr>
        <tr>
            <td>Personal Website</td>
            <td><a href="https://www.google.com/">Ragib website</a></td>
        </tr>
    </table>
    <h1>Academic Information</h1>
    <table>
        <tr>
            <td>SSC year</td>
            <td><input type="number"></td>
        </tr>
        <tr>
            <td>SSC institution</td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td>HSC year</td>
            <td><input type="number"></td>
        </tr>
        <tr>
            <td>HSC institution</td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="" id=""></td>
        </tr>
    </table>

   </form>
</body>
</html>

<?php

  $NameErr = $DobErr = $ReligionErr = $genderErr = $FatherNameErr = $MotherNameErr = $recoveryEmailErr =  $PresentAddressErr = $PermanentAddressErr = $PhoneErr = $EmailErr = $PersonalWebsiteErr = $SSCyearErr = $SSCinstitutionErr= $HSCyearErr= $HSCinstitutionErr= "";
       $Name = $Dob = $Religion = $gender = $FatherName = $MotherName = $recoveryEmail =  $PresentAddress = $PermanentAddress = $Phone = $Email = $PersonalWebsite = $SSCyear = $SSCinstitution= $HSCyear= $HSCinstitution= "";
        $count = 0;


        if ($_SERVER["REQUEST_METHOD"] =="POST" ) 
        {
            if(empty($_POST['name'])) 
            {
                $NameErr = "Please Fill Up the Name";
            }
            else
            {
                $Name = $_POST['name'];
                $count++;
            }

            if(empty($_POST['Dob'])) 
            {
                $DobErr = "Please Fill Up the Dob";
            }
            else
            {
                $Dob = $_POST['dob'];
                $count++;
            }

            if(empty($_POST['Religion'])) 
            {
                $ReligionErr = "Please Fill Up the Religion";
            }
            else
            {
                $Religion = $_POST['Religion'];
                $count++;
            }

         

            if(isset($_POST['gender']))
            {
                $gender = $_POST['gender'];
                $count++;
                
                if ($gender == "Male")
                {
                    $gender = "Male";
                }
                else
                {
                    $gender = "Female";
                }


                
            }


            else {
                $genderErr = "Please Check the Gender";
            }


            if(empty($_POST['FatherName'])) 
            {
                $FatherNameErr = "Please Fill Up the FatherName";
            }
            else
            {
                $FatherName = $_POST['FatherName'];
                $count++;
            }

            if(empty($_POST['MotherName'])) 
            {
                $MotherNameErr = "Please Fill Up the MotherName";
            }
            else
            {
                $MotherName = $_POST['MotherName'];
                $count++;
            }

            if(empty($_POST['remail'])) 
            {
                $recoveryEmailErr = "Please Fill Up the Recovery Email";
            }
            else
            {
                $recoveryEmail = $_POST['remail'];
                $count++;
            }

             if(empty($_POST['PresentAddress'])) 
            {
                $PresentAddressErr = "Please Fill Up the PresentAddress";
            }
            else
            {
                $PresentAddress = $_POST['PresentAddress'];
                $count++;
            }

             if(empty($_POST['PermanentAddress'])) 
            {
                $PermanentAddressErr = "Please Fill Up the PermanentAddress";
            }
            else
            {
                $PermanentAddress = $_POST['PermanentAddress'];
                $count++;
            }

             if(empty($_POST['Phone'])) 
            {
                $PhoneErr = "Please Fill Up the Phone";
            }
            else
            {
                $Phone = $_POST['Phone'];
                $count++;
            }

            if(empty($_POST['PersonalWebsite'])) 
            {
                $PersonalWebsiteErr = "Please Fill Up the PersonalWebsite";
            }
            else
            {
                $PersonalWebsite = $_POST['PersonalWebsite'];
                $count++;
            }


            if(empty($_POST['SSCyear'])) 
            {
                $SSCyearErr = "Please Fill Up the SSCyear";
            }
            else
            {
                $SSCyear = $_POST['SSCyear'];
                $count++;
            }


            if(empty($_POST['SSCinstitution'])) 
            {
                $SSCinstitutionErr = "Please Fill Up the SSCinstitution";
            }
            else
            {
                $SSCinstitution = $_POST['SSCinstitution'];
                $count++;
            }


            if(empty($_POST['HSCyear'])) 
            {
                $HSCyearErr = "Please Fill Up the HSCyear";
            }
            else
            {
                $HSCyear = $_POST['HSCyear'];
                $count++;
            }


            if(empty($_POST['HSCinstitution'])) 
            {
                $HSCinstitutionErr = "Please Fill Up the HSCinstitution";
            }
            else
            {
                $HSCinstitution = $_POST['HSCinstitution'];
                $count++;
            }


        



            if ($count >= 16)
            {
            






            $arr1 = array('Name' => $Name, 'Dob' => $Dob, 'ReligionName' => $ReligionName, 'genderName' => $genderName, 'FatherName' => $FatherName, 'MotherName' => $MotherName, 'recoveryEmail' => $recoveryEmail, 'PresentAddress' => $PresentAddress, 'PermanentAddress' => $PermanentAddress, 'Phone' => $Phone, 'Email' => $Email, 'PersonalWebsite' => $PersonalWebsite, 'SSCyear' => $SSCyear, 'SSCinstitution' => $SSCinstitution, 'HSCyear' => $HSCyear, 'HSCinstitution' => $HSCinstitution,);


            $json_encoded_text =  json_encode($arr1); 
            $filepath = "data.txt";
            $f = fopen($filepath,'a');
            fwrite($f,$json_encoded_text);
            fwrite($f,"\n");
            fclose($f);


            }

            header("Location:registation.php");
            






        }




    ?>


       
