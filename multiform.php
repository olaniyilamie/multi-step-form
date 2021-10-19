<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" type="text/css" href="bootstrap.css">
			<link rel="stylesheet" type="text/css" href="icons/css/all.min.css">
            <style>
                #msform {
                    text-align: center;
                    position: relative;
                    margin-top: 20px
                }

                #msform fieldset {
                    background: white;
                    border: 0 none;
                    border-radius: 0.5rem;
                    box-sizing: border-box;
                    width: 100%;
                    margin: 0;
                    padding-bottom: 20px;
                    position: relative
                }

                .form-card {
                    text-align: left
                }

                #msform fieldset:not(:first-of-type) {
                    display: none
                }

                #msform input,
                #msform textarea {
                    padding: 8px 15px 8px 15px;
                    border: 1px solid #ccc;
                    border-radius: 0px;
                    margin-bottom: 25px;
                    margin-top: 2px;
                    box-sizing: border-box;
                    font-family: montserrat;
                    color: #2C3E50;
                    background-color: #ECEFF1;
                    font-size: 16px;
                    letter-spacing: 1px
                }

                #msform input:focus,
                #msform textarea:focus {
                    -moz-box-shadow: none !important;
                    -webkit-box-shadow: none !important;
                    box-shadow: none !important;
                    border: 1px solid #673AB7;
                    outline-width: 0
                }

                #msform .action-button {
                    width: 100px;
                    background: #25cd44;
                    font-weight: bold;
                    color: white;
                    border: 0 none;
                    border-radius: 0px;
                    cursor: pointer;
                    padding: 10px 5px;
                    margin: 10px 0px 10px 5px;
                    float: right
                }

                #msform .action-button:hover,
                #msform .action-button:focus {
                    background-color: #435444
                }

                #msform .action-button-previous {
                    width: 100px;
                    background: #616161;
                    font-weight: bold;
                    color: white;
                    border: 0 none;
                    border-radius: 0px;
                    cursor: pointer;
                    padding: 10px 5px;
                    margin: 10px 5px 10px 0px;
                    float: right
                }

                #msform .action-button-previous:hover,
                #msform .action-button-previous:focus {
                    background-color: #000000
                }

                .card {
                    z-index: 0;
                    border: none;
                    position: relative
                }

                .fs-title {
                    font-size: 25px;
                    color: #435444;
                    margin-bottom: 15px;
                    font-weight: bold;
                    text-align: left
                }

                .steps {
                    font-size: 25px;
                    color: gray;
                    margin-bottom: 10px;
                    font-weight: normal;
                    text-align: right
                }

                .fieldlabels {
                    color: gray;
                    text-align: left
                }

                #progressbar {
                    margin-bottom: 30px;
                    overflow: hidden;
                    color: lightgrey
                }

                #progressbar .active {
                    color: #25cd44;
                }

                #progressbar li {
                    list-style-type: none;
                    font-size: 15px;
                    width: 33.3%;
                    float: left;
                    position: relative;
                    font-weight: 400
                }

                #progressbar #account:before {
                    font-family: FontAwesome;
                    content: "\f13e"
                }

                #progressbar #personal:before {
                    font-family: FontAwesome;
                    content: "\f007"
                }

                #progressbar #confirm:before {
                    font-family: FontAwesome;
                    content: "\f00c"
                }

                #progressbar li:before {
                    width: 50px;
                    height: 50px;
                    line-height: 45px;
                    display: block;
                    font-size: 20px;
                    color: #ffffff;
                    background: lightgray;
                    border-radius: 50%;
                    margin: 0 auto 10px auto;
                    padding: 2px
                }

                #progressbar li:after {
                    content: '';
                    width: 100%;
                    height: 2px;
                    background: lightgray;
                    position: absolute;
                    left: 0;
                    top: 25px;
                    z-index: -1
                }

                #progressbar li.active:before,
                #progressbar li.active:after {
                    background: #25cd44
                }

                .progress {
                    height: 20px
                }

                .progress-bar {
                    background-color: #25cd44
                }
                #topBg{
                   background-image: url("NigIctLogo.png");
                   height: 200px;
                   background-position: center;
                   background-repeat: no-repeat;
                   background-size: cover;
                   position: relative;
                }
                .topBgContent{
                    background: -moz-linear-gradient(to bottom right, rgba(65, 178, 102,0.4) 0%, rgba(59, 69, 59, 0.8) 100%); /* FF3.6+ */
                    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(59, 69, 59, 0.8)), color-stop(100%,rgba(0,47,75,0.5))); /* Chrome,Safari4+ */
                    background: -webkit-linear-gradient(top, rgba(65, 178, 102,0.5) 0%,rgba(59, 69, 59, 0.8) 100%); /* Chrome10+,Safari5.1+ */
                    background: -o-linear-gradient(top, rgba(65, 178, 102,0.5) 0%,rgba(59, 69, 59, 0.8) 100%); /* Opera 11.10+ */
                    background: -ms-linear-gradient(top, rgba(65, 178, 102,0.5) 0%,rgba(59, 69, 59, 0.8) 100%); /* IE10+ */
                    background: linear-gradient(to bottom right, rgba(65, 178, 102,0.5) 0%,rgba(59, 69, 59, 0.9) 100%);
                }
                .input-hidden {
                    /* position: absolute;
                    left: -9999px; */
                }

                input[name=ictguest]:checked + label>img {
                    border: 1px solid #fff;
                    box-shadow: 0 0 3px 3px #090;
                }

            </style>
        <body>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="row topBgContent rounded" id="topBgCover">
                            <div class="col-2 mt-5 text-center py-3">
                                <h3 class="font-weight-bolder">6th - 10th</h3>
                                <h5>DECEMBER 2021</h5>
                                <p class="font-weight-bold"> <i class="fas fa-map-marker-alt"></i> VENUE: ONLINE</p>
                            </div>
                            <div class="col-6" id="topBg">
                                
                            </div>
                            <div class="col-4 mt-5 py-3 text-center">
                                <h1 class="font-weight-bolder">ONLINE</h1>
                                <h1 >REGISTRATION</h1>
                            </div>
                        </div>
                        <div class="rowpx-0 pt-4 pb-0 mt-3 mb-3">
                            <div class="col-12 card">
                                <form id="msform">
                                    <!-- progressbar -->

                                    <ul id="progressbar" class="">
                                        <li class="active" id="account"><strong>Account</strong></li>
                                        <li id="personal"><strong>Personal</strong></li>
                                        <li id="confirm"><strong>Finish</strong></li>
                                    </ul>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div> <br> <!-- fieldsets -->
                                    <fieldset>
                                        <div class="form-card">
                                            <div class="row">
                                                <div class="col-7">
                                                    <h2 class="fs-title">Event Information:</h2>
                                                </div>
                                                <div class="col-5">
                                                    <h2 class="steps">Step 1 - 3</h2>
                                                </div>
                                            </div>
                                            <label>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label class="fieldlabels">What will you like to register as: *</label> 
                                                </div>
                                                <div class="col-4">
                                                    <input type="radio" name="ictguest" value="attendee" id="attendee" class="input-hidden" required />
                                                    <label for="attendee">
                                                        <img src="attendee.png" class="img-fluid" alt="attendee" />
                                                    </label>
                                                </div>
                                                <div class="col-4">
                                                    <input type="radio" name="ictguest" value="exhibitor" id="exhibitor" class="input-hidden" />
                                                    <label for="exhibitor">
                                                        <img src="Exhibitors.jpg" class="img-fluid" alt="exhibitor" />
                                                    </label>
                                                </div>
                                                <div class="col-4">
                                                    <input type="radio" name="ictguest" value="sponsor" id="sponsor" class="input-hidden" />
                                                    <label for="sponsor">
                                                        <img src="sponsor.jpg" class="img-fluid" alt="sponsor" />
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 ">
                                                    <label class="fieldlabels">Which of the days are you likely to miss ?</label> <br>
                                                    <input type="checkbox" id="day1" name="day1" value="Day 1">
                                                    <label class="fieldlabels" for="day1">Day 1</label><br>
                                                    <input type="checkbox" id="day2" name="day2" value="Day 2">
                                                    <label class="fieldlabels" for="day2">Day 2</label><br>
                                                    <input type="checkbox" id="day3" name="day3" value="Day 3">
                                                    <label class="fieldlabels" for="day3">Day 3</label><br>
                                                    <input type="checkbox" id="day4" name="day4" value="Day 4">
                                                    <label class="fieldlabels" for="day4">Day 4</label><br>
                                                    <input type="checkbox" id="day5" name="day5" value="Day 5">
                                                    <label class="fieldlabels" for="day5">Day 5</label>
                                                </div>  
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label class="fieldlabels">Will you like to recieve email reminder about the event ?</label> <br>
                                                    <input type="radio" id="yesMail" name="recieveMail" value="Yes" required> 
                                                    <label class="fieldlabels" for="yesMail">Yes</label>
                                                    <input type="radio" id="noMail" name="recieveMail" value="No">
                                                    <label class="fieldlabels" for="noMail">No</label>
                                                </div>  
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label class="fieldlabels">Have you attended ICT week before ?</label> <br>
                                                    <input type="radio" id="firstTime" name="attending" value="Yes" required> 
                                                    <label class="fieldlabels" for="firstTime">Yes</label>
                                                    <input type="radio" id="regural" name="attending" value="No">
                                                    <label class="fieldlabels" for="regural">No</label>
                                                </div>  
                                            </div>
                                        </div> 
                                        <input type="button" name="next" class="next action-button" value="Next" />
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-card">
                                            <div class="row">
                                                <div class="col-7">
                                                    <h2 class="fs-title">Personal Information:</h2>
                                                </div>
                                                <div class="col-5">
                                                    <h2 class="steps">Step 2 - 3</h2>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="fieldlabels">Last Name: *</label> 
                                                    <input type="text" name="lname" placeholder="Last Name" required class="form-control form-control-sm"/> 
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="fieldlabels">First Name: *</label> 
                                                    <input type="text" name="fname" placeholder="First Name" required class="form-control form-control-sm" />
                                                </div> 
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="fieldlabels">Contact No.: *</label> 
                                                    <input type="text" name="phno_2" placeholder="Contact No." required class="form-control form-control-sm"/> 
                                                </div>  
                                                <div class="col-md-6">
                                                    <label class="fieldlabels">Email: *</label> 
                                                    <input type="email" name="email" placeholder="Email Id" required class="form-control form-control-sm"/> 
                                                </div> 
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="fieldlabels">Username: *</label> 
                                                    <input type="text" name="username" placeholder="Username" required class="form-control form-control-sm"/> 
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="fieldlabels">Password: *</label> 
                                                    <input type="Password" name="Password" placeholder="Password" required class="form-control form-control-sm"/> 
                                                </div> 
                                            </div>
                                        </div> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    </fieldset>
                                    <fieldset>
                                        <div class="form-card">
                                            <div class="row">
                                                <div class="col-7">
                                                    <h2 class="fs-title">Finish:</h2>
                                                </div>
                                                <div class="col-5">
                                                    <h2 class="steps">Step 3 - 3</h2>
                                                </div>
                                            </div> <br><br>
                                            <p class="text-center"><strong>SUCCESS !</strong></p> <br>
                                            
                                            <div class="row justify-content-center">
                                                <div class="card text-center">
                                                    <p>Thank you for registering to attend 2021 Nigeria ICT week 
                                                        starting on the 6th of December to 10th of December, 2021 Online. We look forward to welcoming you
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script src="js/jquery-3.5.1.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            
            <script>
                $(document).ready(function(){
                    var current_fs, next_fs, previous_fs; //fieldsets
                    var opacity;
                    var current = 1;
                    var steps = $("fieldset").length;

                    setProgressBar(current);

                    $(".next").click(function(){
                        current_fs = $(this).parent();
                        next_fs = $(this).parent().next();

                        //Add Class Active
                        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                        //show the next fieldset
                        next_fs.show();
                        //hide the current fieldset with style
                        current_fs.animate({opacity: 0}, {
                        step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                        });
                        next_fs.css({'opacity': opacity});
                        },
                        duration: 500
                        });
                        setProgressBar(++current);
                    });

                    $(".previous").click(function(){

                        current_fs = $(this).parent();
                        previous_fs = $(this).parent().prev();

                        //Remove class active
                        $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                        //show the previous fieldset
                        previous_fs.show();

                        //hide the current fieldset with style
                        current_fs.animate({opacity: 0}, {
                        step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                        });
                        previous_fs.css({'opacity': opacity});
                        },
                        duration: 500
                        });
                        setProgressBar(--current);
                    });

                    function setProgressBar(curStep){
                    var percent = parseFloat(100 / steps) * curStep;
                    percent = percent.toFixed();
                    $(".progress-bar")
                    .css("width",percent+"%")
                    }

                    $(".submit").click(function(){
                    return false;
                    })

                })         
            </script>
        </body>
    </html>