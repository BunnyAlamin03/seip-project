<?php
include_once './lib/applications.php';
$forminfo = "";
if(array_key_exists('allinfo', $_SESSION))
$forminfo = $_SESSION['allinfo'];
?>
<html>
    <head>
        <title>
            <?php echo PAGE_TITLE; ?>
        </title>
    </head>
    <body>
        <section>
            <div align="center">

                <p align="center">
                <h1>Appendix A - Sample US Death Certificate Form</h1>
                <p>The sample death reporting form . .. </p>
                <h2>Death Reporting For Vital Records</h2>
                <h3><a href="form.html"> Click Here To Add More information</a></h3><br/><br/>
                <h3 align="center" color="red;">
                    <?php
                    if (array_key_exists('message', $_SESSION) && !empty($_SESSION['message'])) {
                        echo $_SESSION['message'];
                    }
                    ?>
                </h3>
            </div>
            <fieldset> <!--Decedent's Name( INclude AKA's if any)-->
                <legend><b>Decedent's Name( INclude AKA's if any)</b></legend><br/><br/>
                <table border="1" cellpadding="20" align="center" width="1100px">


                    <tr bgcolor="gainsboro">
                        <th bgcolor="gainsboro" >SL</th>
                        <th> Last Name </th>
                        <th> First Name </th>
                        <th> Middle Name </th>
                        <th> Date of Birth </th>
                        <th> Gender </th>
                        <th> Social Security Number </th>
                        <th> Facility Name </th>
                        <th> Action </th>

                    </tr>
                    <?php
                    $counter = 1;
                    foreach ($forminfo as $value) {
                        ?>
                        <tr>
                            <td> <?php echo $counter++; ?> </td>
                            <td> 
                                <?php
                                if (array_key_exists('lname', $value) && !empty($value['lname'])) {
                                    echo $value['lname'];
                                } else {
                                    echo "Not Provide";
                                }
                                ?> 
                            </td>
                            <td> 
                                <?php
                                if (array_key_exists('fname', $value) && !empty($value['fname'])) {
                                    echo $value['fname'];
                                } else {
                                    echo "Not Provide";
                                }
                                ?> 
                            </td>
                            <td> 
                                <?php
                                if (array_key_exists('mname', $value) && !empty($value['mname'])) {
                                    echo $value['mname'];
                                } else {
                                    echo "Not Provide";
                                }
                                ?> 
                            </td>
                            
                            <td> 
                                <?php
                                if (array_key_exists('date_birth', $value) && !empty($value['date_birth'])) {
                                    echo $value['date_birth'];
                                } else {
                                    echo "Not Provide";
                                }
                                ?> 
                            </td>
                            <td> 
                                <?php
                                if (array_key_exists('gender', $value) && !empty($value['gender'])) {
                                    echo $value['gender'];
                                } else {
                                    echo "Not Provide";
                                }
                                ?> 
                            </td>
                             <td> 
                                <?php
                                if (array_key_exists('social_security', $value) && !empty($value['social_security'])) {
                                    echo $value['social_security'];
                                } else {
                                    echo "Not Provide";
                                }
                                ?> 
                            </td>
                            <td> 
                                <?php
                                if (array_key_exists('facility_name', $value) && !empty($value['facility_name'])) {
                                    echo $value['facility_name'];
                                } else {
                                    echo "Not Provide";
                                }
                                ?> 
                            </td>
                            <td>Edit Delete</td>
                            
                           
                        </tr>
                    <?php } ?>
                </table><br/><br/>
            </fieldset><br/><br/><br/>
            <!--Decedent of Hispanic Origin-->
            <fieldset>
                <legend><b>Decedent of Hispanic Origin</b></legend>
                <p>Check the box that best describes whether the decedent is Spanish / Hispanic / Latino .
                    Check the "No" box if decedent is not Spanish / Hispanic / Latino : <br/>
                </p>
                <table border="1" cellpadding="20" align="center" width="1100px">
                    <tr bgcolor="gainsboro">
                        <th>SL</th>
                        <th>Check the box that best describes whether the decedent is Spanish / Hispanic / Latino .
                            Check the "No" box if decedent is not Spanish / Hispanic / Latino :</th>
                    </tr>
                    <?php
                    $counter = 1;
                    foreach ($forminfo as $myorigin) {
                        ?>
                        <tr>
                            <td><?php echo $counter++; ?></td>
                            <td>
                                <?php
                                if (array_key_exists('origin', $myorigin) && !empty($myorigin['origin'])) {
                                    echo $myorigin['origin'];
                                } else if (array_key_exists('other_origin', $myorigin) && !empty($myorigin['other_origin'])) {
                                    echo "Yes, other spanish / Hispanic / Latino(Specify) : " . $myorigin['other_origin'];
                                } else {
                                    echo "Not Provide";
                                }
                                ?>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </fieldset><br/><br/><br/>
            <!--Decedent's Race-->
            <fieldset>
                <legend><b>Decedent's Race</b> </legend><br/><br/>
                <table border="1" cellpadding="20" align="center" width="1100px">
                    <tr bgcolor="gainsboro">
                        <th>SL</th>
                        <th><p>Check one or more races to indicate what 
                        the Decedent considered himself or herself to be:</p>
                    </th>
                    </tr>
                    <?php
                    $counter = 1;
                    foreach ($forminfo as $races) {
                        ?>
                        <tr>
                            <td><?php echo $counter++; ?></td>
                            <td>
                                <?php
                                if (array_key_exists('race', $races) && !empty($races['race'])) {
                                    echo $races['race'];
                                } else if (array_key_exists('american_race', $races) && !empty($races['american_race'])) {
                                    echo "American Indian or Alaska Native :" . $races['american_race'];
                                } else if (array_key_exists('other_island_race', $races) && !empty($races['other_island_race'])) {
                                    echo " Other specific islander(specify) :" . $races['other_island_race'];
                                } else if (array_key_exists('other_asian_race', $races) && !empty($races['other_asian_race'])) {
                                    echo " Other Asian (Specify) :" . $races['other_asian_race'];
                                } else if (array_key_exists('other_race', $races) && !empty($races['other_race'])) {
                                    echo "Other(Specify) : " . $races['other_race'];
                                } else {
                                    echo "Not Provide";
                                }
                                ?>
                            </td>
                        </tr>
<?php } ?>
                </table><br/>
            </fieldset><br/><br/><br/>
            <!--Item Must be completed by--> 
            <fieldset>
                <legend><b>Item Must be completed by 
                        Person Who pronounces or certifies Death</b> 
                </legend><br/><br/>
                <table border="1" cellpadding="10" align="center" width="1100px">
                    <tr bgcolor="gainsboro">
                        <th>SL</th>
                        <th> Date Pronounced Dead</th>
                        <th> Time Pronounced Dead </th>
                        <th>Signature of Pronounced Dead</th>
                        <th>License Number</th>
                        <th> Date Signed </th>
                        <th> Actual or presumed date of birth</th>
                        <th>Actual or presumed time of Dead</th>
                        <th>Was Medical Examiner or coroner Contracted?</th>
                    </tr>
                    <?php
                    $counter = 1;
                    foreach ($forminfo as $death) {
                        ?>
                        <tr>
                            <td> <?php echo $counter++; ?></td>
                            <td> 
                                <?php
                                if (array_key_exists('pro_date', $death) && !empty($death['pro_date'])) {
                                    echo $death['pro_date']; 
                                }
                                    else {
                                        echo "Not Provide";
                                    }
                                    ?>
                            </td>
                            <td> 
                                <?php
                                if (array_key_exists('pro_time', $death) && !empty($death['pro_time'])) {
                                    echo $death['pro_time']; 
                                }
                                    else {
                                        echo "Not Provide";
                                    }
                                    ?>
                            </td>
                            <td> 
                                <?php
                                if (array_key_exists('pro_sig', $death) && !empty($death['pro_sig'])) {
                                    echo $death['pro_sig']; 
                                }
                                else {
                                        echo "Not Provide";
                                    }
                                    ?>
                            </td>
                            <td> 
                                <?php
                                if (array_key_exists('pro_licns', $death) && !empty($death['pro_licns'])) {
                                    echo $death['pro_licns']; 
                                }
                                else {
                                        echo "Not Provide";
                                    }
                                    ?>
                            </td>
                            <td> 
                                <?php
                                if (array_key_exists('pro_date_sign', $death) && !empty($death['pro_date_sign'])) {
                                    echo $death['pro_date_sign']; 
                                }
                                else {
                                        echo "Not Provide";
                                    }
                                    ?>
                            </td>
                            <td> 
                                <?php
                                if (array_key_exists('pro_act_date', $death) && !empty($death['pro_act_date'])) {
                                    echo $death['pro_act_date']; 
                                }
                                else {
                                        echo "Not Provide";
                                    }
                                    ?>
                            </td>
                            <td> 
                                <?php
                                if (array_key_exists('pro_act_time', $death) && !empty($death['pro_act_time'])) {
                                    echo $death['pro_act_time'];
                                }
                                else {
                                        echo "Not Provide";
                                    }
                                    ?>
                            </td>
                            <td> 
                                <?php
                                if (array_key_exists('pro_act_time', $death) && !empty($death['pro_act_time'])) {
                                    echo $death['pro_act_time'];
                                }
                                else {
                                        echo "Not Provide";
                                    }
                                    ?>
                            </td>
                        </tr>
                    <?php } ?>

                </table><br/><br/>
            </fieldset><br/><br/>
            <!--Cause of Death(See instruction and example)-->
            <fieldset>
                <legend><b>Cause of Death(See instruction and example)</b></legend><br/>
                <h3>PART : 1 </h3>
                <table border="1" cellpadding="5" align="center" width="1100px">
                    <tr bgcolor="gainsboro">
                        <th>SL</th>
                        <th>A. Immediate Cause</th>
                        <th>Due to (or as a consequense of):</th>
                        <th>Onset to Death :</th>
                        
                        <th>B.  Sequentially List conditions</th>
                        <th>Due to (or as a consequense of):</th>
                        <th>Onset to Death :</th>
                        
                         <th>C. Enter the Underlying Cause</th>
                        <th>Due to (or as a consequense of):</th>
                        <th>Onset to Death : </th>
                    </tr>
                    <?php
                    $counter = 1;
                    foreach ($forminfo as $causes) {
                        ?>
                        <tr>
                            <td> <?php echo $counter++; ?></td>
                            <td>
                                <?php
                                    if (array_key_exists('cause_a', $causes) && !empty($causes['cause_a'])) {
                                        echo $causes['cause_a'];
                                    } 
                                    else {
                                        echo "Not Provide";
                                    }
                                    ?>
                            </td>
                            <td>
                                <?php
                                    if (array_key_exists('due_a', $causes) && !empty($causes['due_a'])) {
                                        echo $causes['due_a'];
                                    } 
                                    else {
                                        echo "Not Provide";
                                    }
                                    ?>
                            </td>
                            <td>
                                <?php
                                    if (array_key_exists('onset_a', $causes) && !empty($causes['onset_a'])) {
                                        echo $causes['onset_a'];
                                    } 
                                    else {
                                        echo "Not Provide";
                                    }
                                    ?>
                            </td>
                            <td>
                                <?php
                                    if (array_key_exists('cause_b', $causes) && !empty($causes['cause_b'])) {
                                        echo $causes['cause_b'];
                                    } 
                                    else {
                                        echo "Not Provide";
                                    }
                                    ?>
                            </td>
                            
                            <td>
                                <?php
                                    if (array_key_exists('due_b', $causes) && !empty($causes['due_b'])) {
                                        echo $causes['due_b'];
                                    } 
                                    else {
                                        echo "Not Provide";
                                    }
                                    ?>
                            </td>
                            <td>
                                <?php
                                    if (array_key_exists('onset_b', $causes) && !empty($causes['onset_b'])) {
                                        echo $causes['onset_b'];
                                    } 
                                    else {
                                        echo "Not Provide";
                                    }
                                    ?>
                            </td>
                            <td>
                                <?php
                                    if (array_key_exists('cause_c', $causes) && !empty($causes['cause_c'])) {
                                        echo $causes['cause_c'];
                                    } 
                                    else {
                                        echo "Not Provide";
                                    }
                                    ?>
                            </td>
                            
                            <td>
                                <?php
                                    if (array_key_exists('due_c', $causes) && !empty($causes['due_c'])) {
                                        echo $causes['due_c'];
                                    } 
                                    else {
                                        echo "Not Provide";
                                    }
                                    ?>
                            </td>
                             <td>
                                <?php
                                    if (array_key_exists('onset_c', $causes) && !empty($causes['onset_c'])) {
                                        echo $causes['onset_c'];
                                    } 
                                    else {
                                        echo "Not Provide";
                                    }
                                    ?>
                            </td>
                            
                        </tr>
                    <?php } ?>
                </table>
            </fieldset><br/><Br/>
<!--            <fieldset>
                <legend></legend><br/><br/>
                <table border="1" cellpadding="20" align="center" width="1100px">
                    <tr bgcolor="gainsboro">
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php
                    $counter = 1;
                    foreach ($forminfo as $death) {
                        ?>
                        <tr>
                            <td> <?php echo $counter++; ?></td>

                        </tr>
                    <?php } ?>
                </table><br/><br/>
            </fieldset>-->
        </section>
    </body>
</html>