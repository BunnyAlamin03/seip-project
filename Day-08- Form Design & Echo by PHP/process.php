<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<pre>";
        print_r($_REQUEST);
        echo "</pre>";
        ?>
        <!--Printing all information individually-->
        <h1><u>This is individually print all information</u></h1>
        <h2>1. Death Reporting For Vital Records</h2>
        <?php
        if (array_key_exists('lastname', $_POST) && !empty($_POST['lastname'])) {
            echo "My Last Name is : " . $_POST['lastname'] . "<br/>";
        } else {
            echo "My Last Name " . " Not provided" . "<br/>";
        }
        ?>
        <?php
        if (array_key_exists('firstname', $_POST) && !empty($_POST['firstname'])) {
            echo "First Name is : " . $_POST['firstname'] . "<br/>";
        } else {
            echo "First Name : Not provided" . "<br/>";
        }
        ?>
        <?php
        if (array_key_exists('middlename', $_POST) && !empty($_POST['middlename'])) {
            echo "Middle Name is : " . $_POST['middlename'] . "<br/>";
        } else {
            echo "Middle Name : Not provided" . "<br/>";
        }
        ?>
        <?php
        if (array_key_exists('date_birth', $_POST) && !empty($_POST['date_birth'])) {
            echo "Date of Birth " . $_POST['date_birth'];
        } else {
            echo "Date of Birth : Not Provided";
        }
        ?>
        <section>
            <form method="post" action="process.php">
                <h1>Appendix A - Sample US Death Certificate Form</h1>
                <p>The sample death reporting form . .. </p>
                <h2>Death Reporting For Vital Records</h2>

                <fieldset>
                    <legend><h3>Decedent's Name( INclude AKA's if any)</h3></legend>
                    <ul>
                        <li>
                            <lable for="lastname">Last Name: </lable>
                            <?php
                            if (array_key_exists('lastname', $_POST) && !empty($_POST['lastname'])) {
                                echo $_POST['lastname'];
                            } else {
                                echo " Not provided";
                            }
                            ?>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <lable for="firstname">First Name : </lable>
                            <?php
                            if (array_key_exists('firstname', $_POST) && !empty($_POST['firstname'])) {
                                echo $_POST['firstname'];
                            } else {
                                echo "Not provided";
                            }
                            ?>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <lable for="middle">Middle Name : </lable>
                            <?php
                            if (array_key_exists('middlename', $_POST) && !empty($_POST['middlename'])) {
                                echo $_POST['middlename'];
                            } else {
                                echo "Not provided";
                            }
                            ?>

                        </li>
                    </ul>
                    <ul>
                        <li>
                            <lable for="Date_of_Birth">Date of Birth</lable>
                            <?php
                            if (array_key_exists('date_birth', $_POST) && !empty($_POST['date_birth'])) {
                                echo $_POST['date_birth'];
                            } else {
                                echo "Not Provided";
                            }
                            ?>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <lable for="gender">Gender: </lable>
                            <?php
                            if (array_key_exists('gender', $_POST) && !empty($_POST['gender'])) {
                                echo $_POST['gender'];
                            } else {
                                echo "Not provided";
                            }
                            ?>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <lable for="social">Social Security  Number : </lable>
                            <?php
                            if (array_key_exists('social_security', $_POST) && !empty($_POST['social_security'])) {
                                echo $_POST['social_security'];
                            } else {
                                echo "Not provided";
                            }
                            ?>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <lable for="facility">Facility Name : </lable>
                            <?php
                            if (array_key_exists('facility_name', $_POST) && !empty($_POST['facility_name'])) {
                                echo $_POST['facility_name'];
                            } else {
                                echo "Not provided";
                            }
                            ?>
                        </li>
                    </ul>
                </fieldset>
                <br/><br/><br/>
                <fieldset>
                    <legend><b>Decedent of Hispanic Origin</b></legend>
                    <ul>
                        <li>

                            <lable for="hispanic"> Check the box:  </lable>
                            <b>
                                <?php
                                if (array_key_exists('origin', $_POST) && !empty($_POST['origin'])) {
                                    echo $_POST['origin'];
                                } else if (array_key_exists('other_origin', $_POST) && !empty($_POST['other_origin'])) {
                                    echo $_POST['other_origin'];
                                } else {
                                    echo "Not provided";
                                }
                                ?>
                            </b>

                        </li>
                    </ul>
                </fieldset><br/><br/>
                <fieldset>
                    <legend> <b>Decedent's Race </b></legend>
                    <p>Check one or more races to indicate what
                        the Decedent considered himself or herself to be:
                        <b>
                            <?php
                            if (array_key_exists('race', $_POST) && !empty($_POST['race'])) {
                                echo $_POST['race'];
                            } else if (array_key_exists('american_race', $_POST) && !empty($_POST['american_race'])) {
                                echo "American Indian or Alaska Native :".$_POST['american_race'];
                            } else if (array_key_exists('other_island_race', $_POST) && !empty($_POST['other_island_race'])) {
                                echo " Other specific islander(specify) :". $_POST['other_island_race'];
                            } else if (array_key_exists('other_asian_race', $_POST) && !empty($_POST['other_asian_race'])) {
                                echo " Other Asian (Specify) :". $_POST['other_asian_race'];
                            } else if (array_key_exists('other_race', $_POST) && !empty($_POST['other_race'])) {
                                echo "Other(Specify) : ".$_POST['other_race'];
                            } else {
                                echo "Not Provide";
                            }
                            ?>
                        </b>
                    </p>
                </fieldset>
                <br/><br/>
                <fieldset>
                    <legend> <b>Item Must be completed by Person Who pronounces or certifies Death</b> </legend>
                    <ul>
                        <li>
                            <lable>Date Pronounced Dead: </lable>
                            <b>
                                <?php
                                if (array_key_exists('pro_date', $_POST) && !empty($_POST['pro_date'])) {
                                    echo $_POST['pro_date'];
                                } else {
                                    echo "Not Provide";
                                }
                                ?>
                            </b>
                        </li>
                        <li>

                            <lable>Time Pronounced Dead : </lable>
                            <b>
                                <?php
                                if (array_key_exists('pro_time', $_POST) && !empty($_POST['pro_time'])) {
                                    echo $_POST['pro_time'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>
                        </li>
                        <li>
                            <lable>Signature of Pronounced Dead: </lable>
                            <b>
                                <?php
                                if (array_key_exists('pro_sig', $_POST) && !empty($_POST['pro_sig'])) {
                                    echo $_POST['pro_sig'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>
                        </li>
                        <li>
                            <lable>License Number</lable>
                            <b>
                                <?php
                                if (array_key_exists('pro_licns', $_POST) && !empty($_POST['pro_licns'])) {
                                    echo $_POST['pro_licns'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>

                        </li>
                        <li>
                            <lable>Date Signed : </lable>
                            <b>
                                <?php
                                if (array_key_exists('pro_date_sign', $_POST) && !empty($_POST['pro_date_sign'])) {
                                    echo $_POST['pro_date_sign'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>
                        </li>
                        <li>
                            <lable>Actual or presumed date of birth</lable>
                            <b>
                                <?php
                                if (array_key_exists('pro_act_date', $_POST) && !empty($_POST['pro_act_date'])) {
                                    echo $_POST['pro_act_date'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>
                        </li>
                        <li>
                            <lable>Actual or presumed time of Dead</lable>
                            <b>
                                <?php
                                if (array_key_exists('pro_act_time', $_POST) && !empty($_POST['pro_act_time'])) {
                                    echo $_POST['pro_act_time'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>

                        </li>
                        <li>
                            <lable>Was Medical Examiner or coroner Contracted?</lable>
                            <b>
                                <?php
                                if (array_key_exists('cont', $_POST) && !empty($_POST['cont'])) {
                                    echo $_POST['cont'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>
                        </li>
                    </ul>
                </fieldset>

                <br/><br/><br/>
                <fieldset>
                    <legend> <b>Cause of Death(See instruction and example)</b> </legend>
                    <p>Enter the chain of events -- Diseases, injuries,
                        or complications,- that directly caused the death. Do not 
                        Enter the terminal events such as Approximateinterval: 
                        cardiac arrest, respiratory arrest, or venticular, fibrillation
                        without showing the etiology. DO NOT ABBREVIATE. Enter only on case 
                        on a line. Add additional lines if necessary. </p>
                    <ul>
                        <li>
                            <lable> A. Immediate Cause(Final disease or condition resulting in death) : </lable>
                            <b>
                                <?php
                                if (array_key_exists('cause_a', $_POST) && !empty($_POST['cause_a'])) {
                                    echo $_POST['cause_a'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>
                        </li>
                        <li>
                            <lable> Due to (or as a consequense of):</lable>
                            <b>
                                <?php
                                if (array_key_exists('due_a', $_POST) && !empty($_POST['due_a'])) {
                                    echo $_POST['due_a'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>
                        </li>
                        <li>
                            <lable> Onset to Death :</lable>
                            <b>
                                <?php
                                if (array_key_exists('onset_a', $_POST) && !empty($_POST['onset_a'])) {
                                    echo $_POST['onset_a'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>
                        </li>
                        <br/>
                        <li>
                            <lable>B.  Sequentially List conditions(if any, leading to the cause listed on line a.)</lable>
                            <b>
                                <?php
                                if (array_key_exists('cause_b', $_POST) && !empty($_POST['cause_b'])) {
                                    echo $_POST['cause_b'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>
                        </li>
                        <li>
                            <lable> Due to (or as a consequense of):</lable>
                            <b>
                                <?php
                                if (array_key_exists('due_b', $_POST) && !empty($_POST['due_b'])) {
                                    echo $_POST['due_b'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>
                        </li>
                        <li>
                            <lable> Onset to Death :</lable>
                            <b>
                                <?php
                                if (array_key_exists('onset_b', $_POST) && !empty($_POST['onset_b'])) {
                                    echo $_POST['onset_b'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>
                        </li>
                        <br/>
                        <li>
                            <lable> C. Enter the Underlying Cause,(disease or injury that initiated the events
                                resulting in death)</lable>
                            <b>
                                <?php
                                if (array_key_exists('cause_c', $_POST) && !empty($_POST['cause_c'])) {
                                    echo $_POST['cause_c'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>                        </li>
                        <li>
                            <lable> Due to (or as a consequense of):</lable>
                            <b>
                                <?php
                                if (array_key_exists('due_c', $_POST) && !empty($_POST['due_c'])) {
                                    echo $_POST['due_c'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>
                        </li>
                        <li>
                            <lable> Onset to Death :</lable>
                            <b>
                                <?php
                                if (array_key_exists('onset_c', $_POST) && !empty($_POST['onset_c'])) {
                                    echo $_POST['onset_c'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>
                        </li>
                        <li>
                            <br/>
                            <p><br/><br/><b>PART 2:</b> Enter other significant conditions contributing 
                                to death but not resulting in the underlying cause given in part 1 : <br/>.</p>
                            <b>
                                <?php
                                if (array_key_exists('message', $_POST) && !empty($_POST['message'])) {
                                    echo $_POST['message'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>
                            <br><br><br>
                        </li>
                        <li>
                            <lable>Was an Autopsy performed? : </lable>
                            <b>
                                <?php
                                if (array_key_exists('perform', $_POST) && !empty($_POST['perform'])) {
                                    echo $_POST['perform'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>
                        </li>
                        <li>
                            <lable>Were Autopsy finding Avai To Complete The 
                                Cause of death? : </lable>
                            <b>
                                <?php
                                if (array_key_exists('autopsy', $_POST) && !empty($_POST['autopsy'])) {
                                    echo $_POST['autopsy'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>
                        </li>
                        <li>
                            <lable>Did tobacco Use contribute To Death? : </lable>
                            <b>
                                <?php
                                if (array_key_exists('tobacco', $_POST) && !empty($_POST['tobacco'])) {
                                    echo $_POST['tobacco'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>
                        </li>
                    </ul> 
                </fieldset><br/><br/><br/>
                <fieldset>
                    <legend> <b>If Female</b> </legend>
                    <ul>
                        <li>
                            <b>
                                <?php
                                if (array_key_exists('if_female', $_POST) && !empty($_POST['if_female'])) {
                                    echo $_POST['if_female'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>
                        </li>
                    </ul>
                </fieldset><br/><br/><br/>
                <fieldset>
                    <legend><b> Manner of Death</b> </legend>
                    <ul>
                        <li>
                            <b>
                                <?php
                                if (array_key_exists('manner', $_POST) && !empty($_POST['manner'])) {
                                    echo $_POST['manner'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>
                        </li>
                    </ul>
                </fieldset>
                <legend> <b>Injury</b> </legend>
                <ul>
                    <li>
                        <lable>Date of Injury: </lable>
                        <b>
                            <?php
                            if (array_key_exists('date_of_injury', $_POST) && !empty($_POST['date_of_injury'])) {
                                echo $_POST['date_of_injury'];
                            } else {
                                echo "Not provide";
                            }
                            ?>
                        </b>

                    </li>
                    <li>
                        <lable>Time of Injury: </lable>
                        <b>
                            <?php
                            if (array_key_exists('time_of_injury', $_POST) && !empty($_POST['time_of_injury'])) {
                                echo $_POST['time_of_injury'];
                            } else {
                                echo "Not provide";
                            }
                            ?>
                        </b>

                    </li>
                    <li>
                        <lable>Place of Injury: </lable>
                        <b>
                            <?php
                            if (array_key_exists('place_of_injury', $_POST) && !empty($_POST['place_of_injury'])) {
                                echo $_POST['place_of_injury'];
                            } else {
                                echo "Not provide";
                            }
                            ?>
                        </b>
                    </li>
                    <li>
                        <lable>Injury at work? : </lable>
                        <b>
                            <?php
                            if (array_key_exists('injury_at_work', $_POST) && !empty($_POST['injury_at_work'])) {
                                echo $_POST['injury_at_work'];
                            } else {
                                echo "Not provide";
                            }
                            ?>
                        </b>
                    </li>
                </ul>

                </fieldset><br/><br/><br/>
                <fieldset>
                    <legend> <b>Location of Injury</b> </legend>
                    <ul>
                        <li>
                            <lable>State</lable>
                            <b>
                                <?php
                                if (array_key_exists('injury_state', $_POST) && !empty($_POST['injury_state'])) {
                                    echo $_POST['injury_state'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>
                        </li>
                        <li>
                            <lable>City or Town: </lable>
                            <b>
                                <?php
                                if (array_key_exists('injury_city', $_POST) && !empty($_POST['injury_city'])) {
                                    echo $_POST['injury_city'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>
                        </li>
                        <li>
                            <lable>Street and number: </lable>
                            <b>
                                <?php
                                if (array_key_exists('injury_street', $_POST) && !empty($_POST['injury_street'])) {
                                    echo $_POST['injury_street'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>
                        </li>
                        <li>
                            <lable>Apartment No: </lable>
                            <b>
                                <?php
                                if (array_key_exists('injury_apart', $_POST) && !empty($_POST['injury_apart'])) {
                                    echo $_POST['injury_apart'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>
                        </li>
                        <li>
                            <lable>Zip Code: </lable>
                            <b>
                                <?php
                                if (array_key_exists('injury_zip', $_POST) && !empty($_POST['injury_zip'])) {
                                    echo $_POST['injury_zip'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>
                        </li>
                    </ul>

                </fieldset><br/><br/><br/>
                <fieldset>
                    <legend> <b>Describe How Injury Ocurred</b> </legend>
                    <ul>
                        <li>
                            <b>
                                <?php
                                if (array_key_exists('describe_of_injury', $_POST) && !empty($_POST['describe_of_injury'])) {
                                    echo $_POST['describe_of_injury'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>
                            <br><br><br/><br/>
                        </li>
                    </ul>

                </fieldset><br/><br/><br/>
                <fieldset>
                    <legend>  <b>IT Transportation Injury</b> </legend>
                    <lable> <b>Specify:</b> <br/></lable>
                    <ul>
                        <li>

                            <b>
                                <?php
                                if (array_key_exists('trans_specify', $_POST) && !empty($_POST['trans_specify'])) {
                                    echo $_POST['trans_specify'];
                                } else if (array_key_exists('other_trans', $_POST) && !empty($_POST['other_trans'])) {
                                    echo $_POST['other_trans'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>
                        </li>
                    </ul>

                </fieldset><br/><br/><br/>
                <fieldset>
                    <legend> <b>Certifier</b> </legend>
                    <lable>  Check Only One : </lable>
                    <b>
                        <?php
                        if (array_key_exists('certify', $_POST) && !empty($_POST['certify'])) {
                            echo $_POST['certify'];
                        } else {
                            echo "Not provide";
                        }
                        ?>
                    </b>
                    <li>
                        <lable> Signature of Certifier: </lable>
                        <b>
                            <?php
                            if (array_key_exists('soc', $_POST) && !empty($_POST['soc'])) {
                                echo $_POST['soc'];
                            } else {
                                echo "Not provide";
                            }
                            ?>
                        </b>
                    </li>
                </fieldset>
                <fieldset>
                    <legend> <b>Person Completing Cause of Death</b> </legend>
                    <ul>
                        <li>
                            <lable>Name : </lable>
                            <b>
                                <?php
                                if (array_key_exists('p_name', $_POST) && !empty($_POST['p_name'])) {
                                    echo $_POST['p_name'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>
                        </li>
                        <li>
                            <lable><b>Address</b></lable>
                            <b>
                                <?php
                                if (array_key_exists('p_address', $_POST) && !empty($_POST['p_address'])) {
                                    echo $_POST['p_address'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>
                          
                        </li>
                        <li>
                            <lable><b>Zip Code</b></lable>
                            <b>
                                <?php
                                if (array_key_exists('p_zip', $_POST) && !empty($_POST['p_zip'])) {
                                    echo $_POST['p_zip'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>
                            
                        </li>
                        <li>
                            <lable><b>Title Of Certifier </b></lable>
                            <b>
                                <?php
                                if (array_key_exists('p_title', $_POST) && !empty($_POST['p_title'])) {
                                    echo $_POST['p_title'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>
                        </li>
                        <li>
                            <lable><b>License Number : </b></lable>
                            <b>
                                <?php
                                if (array_key_exists('p_license', $_POST) && !empty($_POST['p_license'])) {
                                    echo $_POST['p_license'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>
                        </li>
                        <li>
                            <lable><b>Date Certifier</b></lable>
                            <b>
                                <?php
                                if (array_key_exists('p_date', $_POST) && !empty($_POST['p_date'])) {
                                    echo $_POST['p_date'];
                                } else {
                                    echo "Not provide";
                                }
                                ?>
                            </b>
                        </li>
                    </ul>

                </fieldset><br/><br/><br/>
                <fieldset>
                    <input type="submit" value="Save">
                </form>
            </section>
        </body>
    </html>
