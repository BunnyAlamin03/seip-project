<?php
session_start();
    $Decedent_Form = $_SESSION['Decedent_Form']
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> <?php echo constant('PAGE_TITLE'); ?> </title>
    </head>
    <body>
        <section>
            <div>
                <p> <a href="decedent.html"> Click Here </a> to fill with Decedent's personal info.</p>
            </div>
           
            <table border="1">
                <tr>
                    <th>Serial No. </th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Social Security Number</th>
                    <th>Facility Name</th>
                    <th>Manage Individual Info</th>
                
                </tr>
                    <?php 
                        $counter=1;
                        foreach($Decedent_Form as $decedent) { 
                    ?>
                <tr>
                    <td> <?php echo $counter++ ?> </td>
                    
                    <td> 
                        <?php 
                           if(array_key_exists('Last',$decedent) && !empty ($decedent['Last']))
                                {
                              echo $decedent['Last'];   
                                }
                                else    {
                                echo " Not Provided Last Name.";}
                        ?> 
                    </td>
                    <td> 
                        <?php 
                           if(array_key_exists('First',$decedent) && !empty ($decedent['First']))
                                {
                              echo $decedent['First'];   
                                }
                                else    {
                                echo " Not Provided First Name.";}
                        ?> 
                    </td>
                    <td> 
                        <?php 
                           if(array_key_exists('Middle',$decedent) && !empty ($decedent['Middle']))
                                {
                              echo $decedent['Middle'];   
                                }
                                else    {
                                echo " Not Provided Middle Name.";}
                        ?> 
                    </td>
                    <td> 
                        <?php 
                           if(array_key_exists('DOB',$decedent) && !empty ($decedent['DOB']))
                                {
                              echo $decedent['DOB'];   
                                }
                                else    {
                                echo " Not Provided Date Of Birth.";}
                        ?> 
                    </td>
                    <td> 
                        <?php 
                           if(array_key_exists('Gender',$decedent) && !empty ($decedent['Gender']))
                                {
                              echo $decedent['Gender'];   
                                }
                                else    {
                                echo " Not Provided Gender.";}
                        ?> 
                    </td>
                    <td> 
                        <?php 
                           if(array_key_exists('SSN',$decedent) && !empty ($decedent['SSN']))
                                {
                              echo $decedent['SSN'];   
                                }
                                else    {
                                echo " Not Provided Social Security Number.";}
                        ?> 
                    </td>
                    <td> 
                        <?php 
                           if(array_key_exists('Facility',$decedent) && !empty ($decedent['Facility']))
                                {
                              echo $decedent['Facility'];   
                                }
                                else    {
                                echo " Not Provided Facility Number.";}
                        ?> 
                    </td>
                    <td>    
                        <a href="#">View</a>
                        <a href="#">Edit</a>
                        <a href="#">Delete</a> 
                    </td>
                </tr>
                <?php } ?>    
                    
            </table>
        </section>
    </body>
</html>
