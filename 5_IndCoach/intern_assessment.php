<?php
    include 'session.php';
    include '../conn.php';
?>
<!DOCTYPE html>
<html>
<?php include 'head.php'?>

<?php include 'navbar.php'?>
<style>
        * {
            box-sizing: border-box;
        }
        
        body {
            background-color: #f1f1f1;
        }
        
        #exit_survey {
            background-color: #ffffff;
            margin: 100px auto;
            font-family: Raleway;
            padding: 40px;
            width: 70%;
            min-width: 300px;
        }
        
        h1 {
            text-align: center;
        }
        
        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }
        /* Mark input boxes that gets an error on validation: */
        
        input.invalid {
            background-color: #ffdddd;
        }
        /* Hide all steps by default: */
        
        .tab {
            display: none;
        }
        
        button {
            background-color: #04AA6D;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer;
        }
        
        button:hover {
            opacity: 0.8;
        }
        
        #prevBtn {
            background-color: #bbbbbb;
        }
        /* Make circles that indicate the steps of the form: */
        
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }
        
        .step.active {
            opacity: 1;
        }
        /* Mark the steps that are finished and valid: */
        
        .step.finish {
            background-color: #04AA6D;
        }
</style>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            </div>
            <!-- Basic Example | Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Intern Assessment</h2>
                        </div>
                        <div class="body">


                            <body>
                                <form id="exit_survey" method="POST" action="../intern_assessment_process.php" enctype="multipart/form-data">
                                    <h1>Intern Assessment:</h1>
                                    <!-- One "tab" for each step in the form: -->
                                    <div class="tab">
                                        <h2>Section A:</h2>
                                        <div class="form-group">
                                            <h5>Email Address: </h5><input type="email" name="email" value="" /><br><br>
                                            <label>Industry Name:</label><input type="text" name="company" value="" /><br/>
                                            <label>Industry Coach Name:</label><input type="text" name="ic" value="" /><br/>
                                            <label for="uniCoach">University Coach Name</label>
                                            <input name="uniCoach" class="form-control" list="uniCoachList" id="uniCoach" placeholder="Type to search..."/>
                                            <datalist id="uniCoachList">
                                                <?php
                                                    $query = "SELECT * FROM `user` WHERE `u_role` = 'uc'";
                                                    $results = mysqli_query($conn, $query);
                                                    while($row_users = mysqli_fetch_array($results)){
                                                ?>
                                                <option value=<?php echo $row_users['u_email']?>><?php echo $row_users['u_name']?></option>
                                                <?php
                                                    }
                                                ?>
                                            </datalist>
                                            <br/>
                                            <label for="student">Student Name</label>
                                            <input name="student" class="form-control" list="studentList" id="student" placeholder="Type to search...">
                                            <datalist id="studentList">
                                                <?php
                                                    $query = "SELECT * FROM `student`";
                                                    $results = mysqli_query($conn, $query);
                                                    while($row_users = mysqli_fetch_array($results)){
                                                ?>
                                                <option value=<?php echo $row_users['s_matrics_num']?>><?php echo $row_users['s_name']?></option>
                                                <?php
                                                    }
                                                ?>
                                            </datalist>
                                            <br/>
                                        </div>
                                    </div>
                                    <div class="tab">
                                        <h2>Section B:</h2>
                                        <div class="form-group">
                                            <h4>[SCSP4114-ProfessionalDevelopment]</h4>
                                            <h5>RESPECTING: </h5><br>
                                            <input type="radio" required  id="qb11" value="1" name="qb1">
                                            <label for="qb11" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" required  id="qb12" value="2" name="qb1">
                                            <label for="qb12" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" required  id="qb13" value="3" name="qb1">
                                            <label for="qb13" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" required  id="qb14" value="4" name="qb1">
                                            <label for="qb14" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" required  id="qb15" value="5" name="qb1">
                                            <label for="qb15" class="radio-inline">
                                                5
                                            </label>

                                            <h5>PARTICIPATING: </h5><br>
                                            <input type="radio" required  id="qb21" value="1" name="qb2">
                                            <label for="qb21" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" required  id="qb22" value="2" name="qb2">
                                            <label for="qb22" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" required  id="qb23" value="3" name="qb2">
                                            <label for="qb23" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" required  id="qb24" value="4" name="qb2">
                                            <label for="qb24" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" required  id="qb25" value="5" name="qb2">
                                            <label for="qb25" class="radio-inline">
                                                5
                                            </label>

                                            <h5>SHARING: </h5><br>
                                            <input type="radio" required  id="qb31" value="1" name="qb3">
                                            <label for="qb31" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" required  id="qb32" value="2" name="qb3">
                                            <label for="qb32" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" required  id="qb33" value="3" name="qb3">
                                            <label for="qb33" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" required  id="qb34" value="4" name="qb3">
                                            <label for="qb34" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" required  id="qb35" value="5" name="qb3">
                                            <label for="qb35" class="radio-inline">
                                                5
                                            </label>
                                            <h5>ATTENDANCE: </h5><br>
                                            <input type="radio" required  id="qb41" value="1" name="qb4">
                                            <label for="qb41" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" required  id="qb42" value="2" name="qb4">
                                            <label for="qb42" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" required  id="qb43" value="3" name="qb4">
                                            <label for="qb43" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" required  id="qb44" value="4" name="qb4">
                                            <label for="qb44" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" required  id="qb45" value="5" name="qb4">
                                            <label for="qb45" class="radio-inline">
                                                5
                                            </label>
                                            <h5>COMMITMENT: </h5><br>
                                            <input type="radio" required  id="qb51" value="1" name="qb5">
                                            <label for="qb51" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" required  id="qb52" value="2" name="qb5">
                                            <label for="qb52" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" required  id="qb53" value="3" name="qb5">
                                            <label for="qb53" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" required  id="qb54" value="4" name="qb5">
                                            <label for="qb54" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" required  id="qb55" value="5" name="qb5">
                                            <label for="qb55" class="radio-inline">
                                                5
                                            </label>
                                            <h5>DISCIPLINE: </h5><br>
                                            <input type="radio" required  id="qb61" value="1" name="qb6">
                                            <label for="qb31" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" required  id="qb62" value="2" name="qb6">
                                            <label for="qb62" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" required  id="qb63" value="3" name="qb6">
                                            <label for="qb63" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" required  id="qb64" value="4" name="qb6">
                                            <label for="qb64" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" required  id="qb65" value="5" name="qb6">
                                            <label for="qb65" class="radio-inline">
                                                5
                                            </label>
                                            <h5>SOCIALIZATION: </h5><br>
                                            <input type="radio" required  id="qb71" value="1" name="qb7">
                                            <label for="qb71" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" required  id="qb72" value="2" name="qb7">
                                            <label for="qb72" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" required  id="qb73" value="3" name="qb7">
                                            <label for="qb73" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" required  id="qb74" value="4" name="qb7">
                                            <label for="qb74" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" required  id="qb75" value="5" name="qb7">
                                            <label for="qb75" class="radio-inline">
                                                5
                                            </label>
                                            <h5>MANNER: </h5><br>
                                            <input type="radio" required  id="qb81" value="1" name="qb8">
                                            <label for="qb81" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" required  id="qb82" value="2" name="qb8">
                                            <label for="qb82" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" required  id="qb83" value="3" name="qb8">
                                            <label for="qb83" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" required  id="qb84" value="4" name="qb8">
                                            <label for="qb84" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" required  id="qb85" value="5" name="qb8">
                                            <label for="qb85" class="radio-inline">
                                                5
                                            </label>
                                            <h5>CONFIDENCE: </h5><br>
                                            <input type="radio" required  id="qb91" value="1" name="qb9">
                                            <label for="qb91" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" required  id="qb92" value="2" name="qb9">
                                            <label for="qb92" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" required  id="qb93" value="3" name="qb9">
                                            <label for="qb93" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" required  id="qb94" value="4" name="qb9">
                                            <label for="qb94" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" required  id="qb95" value="5" name="qb9">
                                            <label for="qb95" class="radio-inline">
                                                5
                                            </label>
                                            <br>
                                            <br>
                                            <label for="commentb">Comment</label><br>
                                            <textarea id="commentb" name="commentb" rows="4" cols="50"placeholder="Any comment if necessary.." ></textarea>
                                        </div>
                                    </div>
                                    <div class="tab">
                                        <h2>Section C:</h2>
                                        <div class="form-group">
                                            <h4>[SCSP4124-Professional Practice]</h4>
                                            <h5>Understanding of design problem and boundary: </h5><br>
                                            <input type="radio" required  id="qc11" value="1" name="qc1">
                                            <label for="qc11" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" required  id="qc12" value="2" name="qc1">
                                            <label for="qc12" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" required  id="qc13" value="3" name="qc1">
                                            <label for="qc13" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" required  id="qc14" value="4" name="qc1">
                                            <label for="qc14" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" required  id="qc15" value="5" name="qc1">
                                            <label for="qc15" class="radio-inline">
                                                5
                                            </label>

                                            <h5>Requirement and objectives: </h5><br>
                                            <input type="radio" required  id="qc21" value="1" name="qc2">
                                            <label for="qc21" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" required  id="qc22" value="2" name="qc2">
                                            <label for="qc22" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" required  id="qc23" value="3" name="qc2">
                                            <label for="qc23" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" required  id="qc24" value="4" name="qc2">
                                            <label for="qc24" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" required  id="qc25" value="5" name="qc2">
                                            <label for="qc25" class="radio-inline">
                                                5
                                            </label>

                                            <h5>Supporting materials (i.e., Using technology learned to complete the task): </h5><br>
                                            <input type="radio" required  id="qc31" value="1" name="qc3">
                                            <label for="qc31" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" required  id="qc32" value="2" name="qc3">
                                            <label for="qc32" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" required  id="qc33" value="3" name="qc3">
                                            <label for="qc33" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" required  id="qc34" value="4" name="qc3">
                                            <label for="qc34" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" required  id="qc35" value="5" name="qc3">
                                            <label for="qc35" class="radio-inline">
                                                5
                                            </label>
                                            <h5>Approach / new information for building application or research design: </h5><br>
                                            <input type="radio" required  id="qc41" value="1" name="qc4">
                                            <label for="qc41" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" required  id="qc42" value="2" name="qc4">
                                            <label for="qc42" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" required  id="qc43" value="3" name="qc4">
                                            <label for="qc43" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" required  id="qc44" value="4" name="qc4">
                                            <label for="qc44" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" required  id="qc45" value="5" name="qc4">
                                            <label for="qc45" class="radio-inline">
                                                5
                                            </label>
                                            <h5>Eye Contact: </h5><br>
                                            <input type="radio" required  id="qc51" value="1" name="qc5">
                                            <label for="qc51" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" required  id="qc52" value="2" name="qc5">
                                            <label for="qc52" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" required  id="qc53" value="3" name="qc5">
                                            <label for="qc53" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" required  id="qc54" value="4" name="qc5">
                                            <label for="qc54" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" required  id="qc55" value="5" name="qc5">
                                            <label for="qc55" class="radio-inline">
                                                5
                                            </label>
                                            <h5>Body Language: </h5><br>
                                            <input type="radio" required  id="qc61" value="1" name="qc6">
                                            <label for="qc31" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" required  id="qc62" value="2" name="qc6">
                                            <label for="qc62" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" required  id="qc63" value="3" name="qc6">
                                            <label for="qc63" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" required  id="qc64" value="4" name="qc6">
                                            <label for="qc64" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" required  id="qc65" value="5" name="qc6">
                                            <label for="qc65" class="radio-inline">
                                                5
                                            </label>
                                            <h5>Verbal Skills: </h5><br>
                                            <input type="radio" required  id="qc71" value="1" name="qc7">
                                            <label for="qc71" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" required  id="qc72" value="2" name="qc7">
                                            <label for="qc72" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" required  id="qc73" value="3" name="qc7">
                                            <label for="qc73" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" required  id="qc74" value="4" name="qc7">
                                            <label for="qc74" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" required  id="qc75" value="5" name="qc7">
                                            <label for="qc75" class="radio-inline">
                                                5
                                            </label>
                                            <h5>Organization: </h5><br>
                                            <input type="radio" required  id="qc81" value="1" name="qc8">
                                            <label for="qc81" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" required  id="qc82" value="2" name="qc8">
                                            <label for="qc82" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" required  id="qc83" value="3" name="qc8">
                                            <label for="qc83" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" required  id="qc84" value="4" name="qc8">
                                            <label for="qc84" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" required  id="qc85" value="5" name="qc8">
                                            <label for="qc85" class="radio-inline">
                                                5
                                            </label>
                                            <h5>Creativity: </h5><br>
                                            <input type="radio" required  id="qc91" value="1" name="qc9">
                                            <label for="qc91" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" required  id="qc92" value="2" name="qc9">
                                            <label for="qc92" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" required  id="qc93" value="3" name="qc9">
                                            <label for="qc93" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" required  id="qc94" value="4" name="qc9">
                                            <label for="qc94" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" required  id="qc95" value="5" name="qc9">
                                            <label for="qc95" class="radio-inline">
                                                5
                                            </label>
                                            <br>
                                            <br>
                                            <label for="commentc">Comment</label><br>
                                            <textarea id="commentc" name="commentc" rows="4" cols="50"placeholder="Any comment if necessary.." ></textarea>
                                        </div>

                                    </div>
                                    <div class="tab">
                                        <h2>Section D:</h2>
                                        <div class="form-group">
                                            <h4>[SCSP4134-Professional Development & Practice]</h4>
                                            <h5>Description of Concepts and Technical Details: </h5><br>
                                            <input type="radio" required  id="qd11" value="1" name="qd1">
                                            <label for="qd11" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" required  id="qd12" value="2" name="qd1">
                                            <label for="qd12" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" required  id="qd13" value="3" name="qd1">
                                            <label for="qd13" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" required  id="qd14" value="4" name="qd1">
                                            <label for="qd14" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" required  id="qd15" value="5" name="qd1">
                                            <label for="qd15" class="radio-inline">
                                                5
                                            </label>

                                            <h5>Experience, Skills gained / Enhanced: </h5><br>
                                            <input type="radio" required  id="qd21" value="1" name="qd2">
                                            <label for="qd21" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" required  id="qd22" value="2" name="qd2">
                                            <label for="qd22" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" required  id="qd23" value="3" name="qd2">
                                            <label for="qd23" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" required  id="qd24" value="4" name="qd2">
                                            <label for="qd24" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" required  id="qd25" value="5" name="qd2">
                                            <label for="qd25" class="radio-inline">
                                                5
                                            </label>

                                            <h5>Style & Formatting: </h5><br>
                                            <input type="radio" required  id="qd31" value="1" name="qd3">
                                            <label for="qd31" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" required  id="qd32" value="2" name="qd3">
                                            <label for="qd32" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" required  id="qd33" value="3" name="qd3">
                                            <label for="qd33" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" required  id="qd34" value="4" name="qd3">
                                            <label for="qd34" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" required  id="qd35" value="5" name="qd3">
                                            <label for="qd35" class="radio-inline">
                                                5
                                            </label>
                                            <h5>Daily activities logbook: </h5><br>
                                            <input type="radio" required  id="qd41" value="1" name="qd4">
                                            <label for="qd41" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" required  id="qd42" value="2" name="qd4">
                                            <label for="qd42" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" required  id="qd43" value="3" name="qd4">
                                            <label for="qd43" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" required  id="qd44" value="4" name="qd4">
                                            <label for="qd44" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" required  id="qd45" value="5" name="qd4">
                                            <label for="qd45" class="radio-inline">
                                                5
                                            </label>
                                            <h5>Formatting: </h5><br>
                                            <input type="radio" required  id="qd51" value="1" name="qd5">
                                            <label for="qd51" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" required  id="qd52" value="2" name="qd5">
                                            <label for="qd52" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" required  id="qd53" value="3" name="qd5">
                                            <label for="qd53" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" required  id="qd54" value="4" name="qd5">
                                            <label for="qd54" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" required  id="qd55" value="5" name="qd5">
                                            <label for="qd55" class="radio-inline">
                                                5
                                            </label>
                                            <br>
                                            <br>
                                            <label for="commentd">Comment</label><br>
                                            <textarea id="commentd" name="commentd" rows="4" cols="50"placeholder="Any comment if necessary.." ></textarea>
                                        </div>
                                    </div>
                                    <div style="overflow:auto;">
                                        <div style="float:right;">
                                            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                            <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                        </div>
                                    </div>
                                    <!-- Circles which indicates the steps of the form: -->
                                    <div style="text-align:center;margin-top:40px;">
                                        <span class="step"></span>
                                        <span class="step"></span>
                                        <span class="step"></span>
                                        <span class="step"></span>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Example | Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Exit Survey</h2>
                        </div>
                        <div class="body">
                            <iframe src="https://docs.google.com/forms/d/11Hn71iyGqmwamBqmXzSE_oqwk1lgK49-wfpRIl4rPlU/edit" width="640" height="3070" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="../../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="../../plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="../../plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/forms/form-wizard.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("exit_survey").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>
    </body>

</html>