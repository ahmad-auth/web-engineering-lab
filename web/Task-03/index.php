<?php

function getInput($name, $default="")
{
    if(isset($_POST[$name]))
    {
        return $_POST[$name];
    } else {
        return $default;
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    echo "1. Post Applied For: " . getInput('post') . "<br />";
    echo "2. Department: " . getInput('department') . "<br />";
    echo "3. Campus: " . getInput('campus') . "<br />";
    echo "4. Full Name: " . getInput('full_name') . "<br />";
    echo "5. Father's Name: " . getInput('father_name') . "<br />";
    echo "6. CNIC: " . getInput('cnic') . "<br />";
    echo "7. Date of Birth: " . getInput('dob') . "<br />";
    echo "8. E-Mail: " . getInput('email') . "<br />";
    echo "9. Gender: " . getInput('gender') . "<br />";
    echo "10. City: " . getInput('city') . "<br />";
    echo "11. Postal Address: " . getInput('postal') . "<br />";
    die();
} 
?><!DOCTYPE html>
<html>
    <head>
        <title>Task 03 - Job Form with PHP</title>
        <link rel="stylesheet" href="/Task-03/style.css" />
    </head>
    <body>
        <div class="container">
            <div class="section head-section">
                <div class="left logo">
                    <img src="/Task-03/220px-COMSATS_new_logo.jpg" alt="COMSATS Logo" />
                </div>
                <div class="left text-center heading">
                    <h3>Non-Faculty Job Application Form</h3>
                    <h3 style="line-height: 0;">COMSATS Institute of Information Technology</h3>
                </div>
                <div class="right image-place">
                    <p class="text-center">Affix a recent photograph 3cm x 5cm</p>
                </div>
            </div>
            
            <form method="POST">
                <div class="section body-section font-normal">
                    
                    <div class="table">
                        <table>
                            <tr>
                                <td class="numbering">1.</td>
                                <td class="label"> 
                                    Post Applied for:
                                </td>
                                <td>
                                    <input type="text" name="post" />
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><i class="input-helper">(mention only one position)</i></td>
                            </tr>

                            <tr>
                                <td class="numbering">2.</td>
                                <td class="label"> 
                                    Department:
                                </td>
                                <td>
                                    <input type="text" name="department" />
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><i class="input-helper">(Mention department if required only)</i></td>
                            </tr>

                            
                            <tr>
                                <td class="numbering">3.</td>
                                <td class="label"> 
                                    Campus:
                                </td>
                                <td>
                                    <i class="font-normal">Lahore</i> <input type="checkbox" name="campus" value="Lahore" > <i class="font-normal">Attock</i> <input type="checkbox" name="campus" value="Attock" >
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><i class="input-helper">(Please tick only one choice)</i></td>
                            </tr>
                            
                        </table>
                    </div>
                    
                    <hr style="clear:both">

                    <div class="table">
                        <table>
                            <tr>
                                <td class="numbering">4.</td>
                                <td class="label"> 
                                    Name in Full:
                                </td>
                                <td>
                                    <input type="text" name="full_name" />
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><i class="input-helper">(USE CAPITAL LETTERS)</i></td>
                            </tr>
                            
                            <tr>
                                <td class="numbering">5.</td>
                                <td class="label"> 
                                    Father's Name:
                                </td>
                                <td>
                                    <input type="text" name="father_name" />
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><i class="input-helper">(USE CAPITAL LETTERS)</i></td>
                            </tr>
                            
                            <tr>
                                <td class="numbering">6.</td>
                                <td class="label"> 
                                    CNIC:
                                </td>
                                <td>
                                    <input type="text" name="cnic" />
                                </td>
                            </tr>
                            
                            <tr>
                                <td class="numbering">7.</td>
                                <td class="label"> 
                                    Date of Birth:
                                </td>
                                <td>
                                    <input type="date" name="dob" />
                                </td>
                            </tr>
                            
                            <tr>
                                <td class="numbering">8.</td>
                                <td class="label"> 
                                    E-Mail:
                                </td>
                                <td>
                                    <input type="text" name="email" />
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><i class="input-helper">(Mondatory, most of the future correspondence will be done using email address)</i></td>
                            </tr>
                            
                            <tr>
                                <td class="numbering">9.</td>
                                <td class="label"> 
                                    Gender:
                                </td>
                                <td>
                                    <i class="font-normal">Male</i> <input type="checkbox" name="gender" value="Male" > <i class="font-normal">Female</i> <input type="checkbox" name="gender" value="Female" >
                                </td>
                            </tr>

                            <tr>
                                <td class="numbering">10.</td>
                                <td class="label"> 
                                    City:
                                </td>
                                <td>
                                    <input type="text" name="city" />
                                </td>
                            </tr>
                            
                            <tr>
                                <td class="numbering">11.</td>
                                <td class="label"> 
                                    Postal Address:
                                </td>
                                <td>
                                    <input type="text" name="postal" />
                                </td>
                            </tr>
                            
                            <tr>
                                <td class="numbering">12.</td>
                                <td class="label"> 
                                    Academic Record:
                                </td>
                                <td>
                                    <input type="text" name="postal" />
                                </td>
                            </tr>
                            
                    
                        </table>
                    </div>
                    
                    <hr style="clear:both">

                    <div class="table">
                        <table>
                            <tr>
                                <table border="1">
                                    <tr>
                                        <th>Degree Held</th>
                                        <th>Year of Award</th>
                                        <th>Field</th>
                                        <th>Board/University</th>
                                        <th>Grade/Division</th>  
                                    </tr>
                
                                    <tr>
                                        <td></td>
                                        <td><pre> </pre></td>
                                        <td><pre> </pre></td>
                                        <td><pre> </pre></td>
                                        <td></td>  
                                    </tr>
                
                                    <tr>
                                        <td></td>
                                        <td><pre> </pre></td>
                                        <td><pre> </pre></td>
                                        <td><pre> </pre></td>
                                        <td></td>  
                                    </tr>
                
                                    <tr>
                                        <td></td>
                                        <td><pre> </pre></td>
                                        <td><pre> </pre></td>
                                        <td><pre> </pre></td>
                                        <td></td>  
                                    </tr>
                
                                    <tr>
                                        <td></td>
                                        <td><pre> </pre></td>
                                        <td><pre> </pre></td>
                                        <td><pre> </pre></td>
                                        <td></td>  
                                    </tr>
                
                                    <tr>
                                        <td></td>
                                        <td><pre> </pre></td>
                                        <td><pre> </pre></td>
                                        <td><pre> </pre></td>
                                        <td></td>  
                                    </tr>
                
                                    <tr>
                                        <td></td>
                                        <td><pre> </pre></td>
                                        <td><pre> </pre></td>
                                        <td><pre> </pre></td>
                                        <td></td>  
                                    </tr>
                
                                    <tr>
                                        <td></td>
                                        <td><pre> </pre></td>
                                        <td><pre> </pre></td>
                                        <td><pre> </pre></td>
                                        <td></td>  
                                    </tr>
                                </table>
                            </tr>
                            
                            <tr></tr>

                            <tr>
                                <td>13.</td>
                                <td> Employment History <i class="input-helper">(Please start from your most recent job and go down in descending order)</i></td>
                            </tr>

                        </table>
                    </div>
                    
                    <hr style="clear:both">

                    <div class="table">
                        <table>
                            <tr>      
                                <table border="1">
                                    <tr>
                                        <th>Name of Organization</th>
                                        <th>Post held with Pay Scale</th>
                                        <th>Job profile</th>
                                        <th>Board/University</th>
                                        <th>Grade/Division</th>  
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td><pre> </pre></td>
                                        <td><pre> </pre></td>
                                        <td><pre> </pre></td>
                                        <td></td>  
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td><pre> </pre></td>
                                        <td><pre> </pre></td>
                                        <td><pre> </pre></td>
                                        <td></td>  
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td><pre> </pre></td>
                                        <td><pre> </pre></td>
                                        <td><pre> </pre></td>
                                        <td></td>  
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td><pre> </pre></td>
                                        <td><pre> </pre></td>
                                        <td><pre> </pre></td>
                                        <td></td>  
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td><pre> </pre></td>
                                        <td><pre> </pre></td>
                                        <td><pre> </pre></td>
                                        <td></td>  
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td><pre> </pre></td>
                                        <td><pre> </pre></td>
                                        <td><pre> </pre></td>
                                        <td></td>  
                                    </tr>

                                    <tr>
                                        <td></td>
                                        <td><pre> </pre></td>
                                        <td><pre> </pre></td>
                                        <td><pre> </pre></td>
                                        <td></td>  
                                    </tr>
                                </table>
                            </tr> 
                        </table>
                    </div>

                    <div class="table">
                        <table>
                            <tr>      
                                <button type="submit" class="button">Submit Form</button>
                            </tr>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>