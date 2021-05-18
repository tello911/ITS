<?php include 'session.php' ?>
<!DOCTYPE html>
<html>

<?php include 'head.php' ?>
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

<?php include 'navbar.php' ?>

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
                                            <label>Ind Coach Name:</label><input type="text" name="ic" value="" /><br/>
                                            <label>Uni Coach Name:</label><input type="text" name="uc" value="" /><br/>
                                            <label>Student Name:</label><input type="text" name="student" value="" /><br/>
                                        </div>
                                    </div>
                                    <div class="tab">
                                        <h2>Section B:</h2>
                                        <div class="form-group">
                                            <h4>[SCSP4114-ProfessionalDevelopment]</h4>
                                            <h5>ATTENDANCE: </h5><br>
                                            <input type="radio" id="qb11" value="1" name="qb1">
                                            <label for="qb11" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" id="qb12" value="2" name="qb1">
                                            <label for="qb12" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" id="qb13" value="3" name="qb1">
                                            <label for="qb13" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" id="qb14" value="4" name="qb1">
                                            <label for="qb14" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" id="qb15" value="5" name="qb1">
                                            <label for="qb15" class="radio-inline">
                                                5
                                            </label>

                                            <h5>Commitment: </h5><br>
                                            <input type="radio" id="qb21" value="1" name="qb2">
                                            <label for="qb21" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" id="qb22" value="2" name="qb2">
                                            <label for="qb22" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" id="qb23" value="3" name="qb2">
                                            <label for="qb23" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" id="qb24" value="4" name="qb2">
                                            <label for="qb24" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" id="qb25" value="5" name="qb2">
                                            <label for="qb25" class="radio-inline">
                                                5
                                            </label>

                                            <h5>Discipline: </h5><br>
                                            <input type="radio" id="qb31" value="1" name="qb3">
                                            <label for="qb31" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" id="qb32" value="2" name="qb3">
                                            <label for="qb32" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" id="qb33" value="3" name="qb3">
                                            <label for="qb33" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" id="qb34" value="4" name="qb3">
                                            <label for="qb34" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" id="qb35" value="5" name="qb3">
                                            <label for="qb35" class="radio-inline">
                                                5
                                            </label>
                                            <h5>Rules &Regulations: </h5><br>
                                            <input type="radio" id="qb41" value="1" name="qb4">
                                            <label for="qb41" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" id="qb42" value="2" name="qb4">
                                            <label for="qb42" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" id="qb43" value="3" name="qb4">
                                            <label for="qb43" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" id="qb44" value="4" name="qb4">
                                            <label for="qb44" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" id="qb45" value="5" name="qb4">
                                            <label for="qb45" class="radio-inline">
                                                5
                                            </label>
                                            <h5>Socialization: </h5><br>
                                            <input type="radio" id="qb51" value="1" name="qb5">
                                            <label for="qb51" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" id="qb52" value="2" name="qb5">
                                            <label for="qb52" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" id="qb53" value="3" name="qb5">
                                            <label for="qb53" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" id="qb54" value="4" name="qb5">
                                            <label for="qb54" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" id="qb55" value="5" name="qb5">
                                            <label for="qb55" class="radio-inline">
                                                5
                                            </label>
                                            <h5>Manner: </h5><br>
                                            <input type="radio" id="qb61" value="1" name="qb6">
                                            <label for="qb31" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" id="qb62" value="2" name="qb6">
                                            <label for="qb62" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" id="qb63" value="3" name="qb6">
                                            <label for="qb63" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" id="qb64" value="4" name="qb6">
                                            <label for="qb64" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" id="qb65" value="5" name="qb6">
                                            <label for="qb65" class="radio-inline">
                                                5
                                            </label>
                                            <h5>Non Verbal Communication: </h5><br>
                                            <input type="radio" id="qb71" value="1" name="qb7">
                                            <label for="qb71" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" id="qb72" value="2" name="qb7">
                                            <label for="qb72" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" id="qb73" value="3" name="qb7">
                                            <label for="qb73" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" id="qb74" value="4" name="qb7">
                                            <label for="qb74" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" id="qb75" value="5" name="qb7">
                                            <label for="qb75" class="radio-inline">
                                                5
                                            </label>
                                            <h5>Frequency: </h5><br>
                                            <input type="radio" id="qb81" value="1" name="qb8">
                                            <label for="qb81" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" id="qb82" value="2" name="qb8">
                                            <label for="qb82" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" id="qb83" value="3" name="qb8">
                                            <label for="qb83" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" id="qb84" value="4" name="qb8">
                                            <label for="qb84" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" id="qb85" value="5" name="qb8">
                                            <label for="qb85" class="radio-inline">
                                                5
                                            </label>
                                            <br>
                                            <br>
                                            <label for="commentb">Comment</label><br>
                                            <textarea id="commentb" name="commentb" rows="4" cols="50">Any comment if necessary..</textarea>
                                        </div>
                                    </div>
                                    <div class="tab">
                                        <h2>Section C:</h2>
                                        <div class="form-group">
                                            <h4>[SCSP4124-Professional Practice]</h4>
                                            <h5>Planning of task: </h5><br>
                                            <input type="radio" id="qc11" value="1" name="qc1">
                                            <label for="qc11" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" id="qc12" value="2" name="qc1">
                                            <label for="qc12" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" id="qc13" value="3" name="qc1">
                                            <label for="qc13" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" id="qc14" value="4" name="qc1">
                                            <label for="qc14" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" id="qc15" value="5" name="qc1">
                                            <label for="qc15" class="radio-inline">
                                                5
                                            </label>

                                            <h5>Identification of problem domain and detailed analysis of feasibility: </h5><br>
                                            <input type="radio" id="qc21" value="1" name="qc2">
                                            <label for="qc21" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" id="qc22" value="2" name="qc2">
                                            <label for="qc22" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" id="qc23" value="3" name="qc2">
                                            <label for="qc23" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" id="qc24" value="4" name="qc2">
                                            <label for="qc24" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" id="qc25" value="5" name="qc2">
                                            <label for="qc25" class="radio-inline">
                                                5
                                            </label>

                                            <h5>Identification of objectives and methodology of task: </h5><br>
                                            <input type="radio" id="qc31" value="1" name="qc3">
                                            <label for="qc31" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" id="qc32" value="2" name="qc3">
                                            <label for="qc32" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" id="qc33" value="3" name="qc3">
                                            <label for="qc33" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" id="qc34" value="4" name="qc3">
                                            <label for="qc34" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" id="qc35" value="5" name="qc3">
                                            <label for="qc35" class="radio-inline">
                                                5
                                            </label>
                                            <h5>Technical knowledge and awareness related to the task: </h5><br>
                                            <input type="radio" id="qc41" value="1" name="qc4">
                                            <label for="qc41" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" id="qc42" value="2" name="qc4">
                                            <label for="qc42" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" id="qc43" value="3" name="qc4">
                                            <label for="qc43" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" id="qc44" value="4" name="qc4">
                                            <label for="qc44" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" id="qc45" value="5" name="qc4">
                                            <label for="qc45" class="radio-inline">
                                                5
                                            </label>
                                            <h5>Theory to practice in performing task: </h5><br>
                                            <input type="radio" id="qc51" value="1" name="qc5">
                                            <label for="qc51" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" id="qc52" value="2" name="qc5">
                                            <label for="qc52" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" id="qc53" value="3" name="qc5">
                                            <label for="qc53" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" id="qc54" value="4" name="qc5">
                                            <label for="qc54" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" id="qc55" value="5" name="qc5">
                                            <label for="qc55" class="radio-inline">
                                                5
                                            </label>
                                            <h5>Work engagement: </h5><br>
                                            <input type="radio" id="qc61" value="1" name="qc6">
                                            <label for="qc31" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" id="qc62" value="2" name="qc6">
                                            <label for="qc62" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" id="qc63" value="3" name="qc6">
                                            <label for="qc63" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" id="qc64" value="4" name="qc6">
                                            <label for="qc64" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" id="qc65" value="5" name="qc6">
                                            <label for="qc65" class="radio-inline">
                                                5
                                            </label>
                                            <h5>Eye Contact: </h5><br>
                                            <input type="radio" id="qc71" value="1" name="qc7">
                                            <label for="qc71" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" id="qc72" value="2" name="qc7">
                                            <label for="qc72" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" id="qc73" value="3" name="qc7">
                                            <label for="qc73" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" id="qc74" value="4" name="qc7">
                                            <label for="qc74" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" id="qc75" value="5" name="qc7">
                                            <label for="qc75" class="radio-inline">
                                                5
                                            </label>
                                            <h5>Body Language: </h5><br>
                                            <input type="radio" id="qc81" value="1" name="qc8">
                                            <label for="qc81" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" id="qc82" value="2" name="qc8">
                                            <label for="qc82" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" id="qc83" value="3" name="qc8">
                                            <label for="qc83" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" id="qc84" value="4" name="qc8">
                                            <label for="qc84" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" id="qc85" value="5" name="qc8">
                                            <label for="qc85" class="radio-inline">
                                                5
                                            </label>
                                            <h5>Verbal Skills: </h5><br>
                                            <input type="radio" id="qc91" value="1" name="qc9">
                                            <label for="qc91" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" id="qc92" value="2" name="qc9">
                                            <label for="qc92" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" id="qc93" value="3" name="qc9">
                                            <label for="qc93" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" id="qc94" value="4" name="qc9">
                                            <label for="qc94" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" id="qc95" value="5" name="qc9">
                                            <label for="qc95" class="radio-inline">
                                                5
                                            </label>
                                            <h5>Organization: </h5><br>
                                            <input type="radio" id="qc101" value="1" name="qc10">
                                            <label for="qc101" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" id="qc102" value="2" name="qc10">
                                            <label for="qc102" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" id="qc103" value="3" name="qc10">
                                            <label for="qc103" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" id="qc104" value="4" name="qc10">
                                            <label for="qc104" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" id="qc105" value="5" name="qc10">
                                            <label for="qc105" class="radio-inline">
                                                5
                                            </label>
                                            <h5>Creativity: </h5><br>
                                            <input type="radio" id="qc111" value="1" name="qc11">
                                            <label for="qc111" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" id="qc112" value="2" name="qc11">
                                            <label for="qc112" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" id="qc113" value="3" name="qc11">
                                            <label for="qc113" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" id="qc114" value="4" name="qc11">
                                            <label for="qc114" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" id="qc115" value="5" name="qc11">
                                            <label for="qc115" class="radio-inline">
                                                5
                                            </label>
                                            <br>
                                            <br>
                                            <label for="commentc">Comment</label><br>
                                            <textarea id="commentc" name="commentc" rows="4" cols="50">Any comment if necessary..</textarea>
                                        </div>

                                    </div>
                                    <div class="tab">
                                        <h2>Section D:</h2>
                                        <div class="form-group">
                                            <h4>[SCSP4134-Professional Development & Practice]</h4>
                                            <h5>Organization & Structure: </h5><br>
                                            <input type="radio" id="qd11" value="1" name="qd1">
                                            <label for="qd11" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" id="qd12" value="2" name="qd1">
                                            <label for="qd12" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" id="qd13" value="3" name="qd1">
                                            <label for="qd13" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" id="qd14" value="4" name="qd1">
                                            <label for="qd14" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" id="qd15" value="5" name="qd1">
                                            <label for="qd15" class="radio-inline">
                                                5
                                            </label>

                                            <h5>Critical Thinking: </h5><br>
                                            <input type="radio" id="qd21" value="1" name="qd2">
                                            <label for="qd21" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" id="qd22" value="2" name="qd2">
                                            <label for="qd22" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" id="qd23" value="3" name="qd2">
                                            <label for="qd23" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" id="qd24" value="4" name="qd2">
                                            <label for="qd24" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" id="qd25" value="5" name="qd2">
                                            <label for="qd25" class="radio-inline">
                                                5
                                            </label>

                                            <h5>Language & Vocabulary: </h5><br>
                                            <input type="radio" id="qd31" value="1" name="qd3">
                                            <label for="qd31" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" id="qd32" value="2" name="qd3">
                                            <label for="qd32" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" id="qd33" value="3" name="qd3">
                                            <label for="qd33" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" id="qd34" value="4" name="qd3">
                                            <label for="qd34" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" id="qd35" value="5" name="qd3">
                                            <label for="qd35" class="radio-inline">
                                                5
                                            </label>
                                            <h5>Style & Formatting: </h5><br>
                                            <input type="radio" id="qd41" value="1" name="qd4">
                                            <label for="qd41" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" id="qd42" value="2" name="qd4">
                                            <label for="qd42" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" id="qd43" value="3" name="qd4">
                                            <label for="qd43" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" id="qd44" value="4" name="qd4">
                                            <label for="qd44" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" id="qd45" value="5" name="qd4">
                                            <label for="qd45" class="radio-inline">
                                                5
                                            </label>
                                            <h5>Content Development: </h5><br>
                                            <input type="radio" id="qd51" value="1" name="qd5">
                                            <label for="qd51" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" id="qd52" value="2" name="qd5">
                                            <label for="qd52" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" id="qd53" value="3" name="qd5">
                                            <label for="qd53" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" id="qd54" value="4" name="qd5">
                                            <label for="qd54" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" id="qd55" value="5" name="qd5">
                                            <label for="qd55" class="radio-inline">
                                                5
                                            </label>
                                            <h5>Citation & References: </h5><br>
                                            <input type="radio" id="qd61" value="1" name="qd6">
                                            <label for="qd61" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" id="qd62" value="2" name="qd6">
                                            <label for="qd62" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" id="qd63" value="3" name="qd6">
                                            <label for="qd63" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" id="qd64" value="4" name="qd6">
                                            <label for="qd64" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" id="qd65" value="5" name="qd6">
                                            <label for="qd65" class="radio-inline">
                                                5
                                            </label>
                                            <h5>Plagiarism: </h5><br>
                                            <input type="radio" id="qd71" value="1" name="qd7">
                                            <label for="qd71" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" id="qd72" value="2" name="qd7">
                                            <label for="qd72" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" id="qd73" value="3" name="qd7">
                                            <label for="qd73" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" id="qd74" value="4" name="qd7">
                                            <label for="qd74" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" id="qd75" value="5" name="qd7">
                                            <label for="qd75" class="radio-inline">
                                                5
                                            </label>
                                            <h5>Organization (Professionalism in writing log book): </h5><br>
                                            <input type="radio" id="qd81" value="1" name="qd8">
                                            <label for="qd81" class="radio-inline">
                                                1
                                            </label>
                                            <input type="radio" id="qd82" value="2" name="qd8">
                                            <label for="qd82" class="radio-inline">
                                                2
                                            </label>
                                            <input type="radio" id="qd83" value="3" name="qd8">
                                            <label for="qd83" class="radio-inline">
                                                3
                                            </label>
                                            <input type="radio" id="qd84" value="4" name="qd8">
                                            <label for="qd84" class="radio-inline">
                                                4
                                            </label>
                                            <input type="radio" id="qd85" value="5" name="qd8">
                                            <label for="qd85" class="radio-inline">
                                                5
                                            </label>
                                            <br>
                                            <br>
                                            <label for="commentd">Comment</label><br>
                                            <textarea id="commentd" name="commentd" rows="4" cols="50">Any comment if necessary..</textarea>
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