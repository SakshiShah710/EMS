<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="form.js" defer></script>
    <script src="transfer.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="icon" href="images/RB_Logo.png" type="image/x-icon">
    <title>Resume</title>
    <script src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.5/dist/html2canvas.min.js"></script>
    <script src="https://superal.github.io/canvas2image/canvas2image.js"></script>
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="./templates/template1.css">
    <link rel="stylesheet" href="./templates/template2.css">
    <link rel="stylesheet" href="./templates/template3.css">

</head>

<body>
    <!-- NavBar -->
    <nav class="navbar navbar-default navbar-static-top fixed-top navbar-expand-lg navbar-light container-fluid NavBar"
        id="nav">
        <div class="container">
            <a class="navbar-brand mx-auto" href="index.html">
                <img src="images/RB.svg" alt="" height="50px">
            </a>
            <div class="collapse navbar-collapse" id="nav-list">
            </div>
        </div>
    </nav>
    <!-- NavBar End -->


    <div class="container-fluid p-0">

        <!-- **********     FORM - 1    ********** -->

        <form id="form1" class="step step-1 active">

            <div class="container mt-5">
                <h1 class="d-flex justify-content-center m-5" style="font-weight: 600;">Personal Details</h1>
            </div>

            <div class="card-container mb-5 shadow p-3 mb-5 bg-white" style="width:850px; margin:auto" id="card">
                <div class="d-flex mt-3 mx-3">
                    <h6>Personal Details</h6>
                </div>
                <hr style="width:95%; margin: 10px;" , size="3" class="bg-secondary">
                <div class="d-flex flex-row">
                    <input type="file" accept="image/*" name="inpImg" id="inpImg">
                    <div class="imgContainer float-left m-4">
                        <img src="" alt="Image Preview" id="image">
                        <span id="previewText"><span id="innerSpan"><i class="fas fa-upload me-2"></i>Upload
                                photo</span></span>
                    </div>
                    <div class="row col-6  m-3 " style="float:left;">
                        <div class="col-12">
                            <label for="fname" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="fname">
                        </div>
                        <div class="col-12">
                            <label for="lname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lname">
                        </div>
                    </div>
                </div>

                <div class="row mx-5 mb-5">
                    <div class="col-md-6 ">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="example@gmail.com" required>
                    </div>

                    <div class="col-md-6">
                        <label for="number" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="number" placeholder="xxxxxxxxxx">
                    </div>

                    <div class="col-12 mt-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="1234 Main St">
                    </div>


                    <div class="col-md-5 mt-3">
                        <label for="country" class="form-label">Country</label>
                        <select class="form-select" id="country" onchange="getStates()">
                            <option selected>Country</option>
                        </select>
                    </div>

                    <div class="col-md-4 mt-3">
                        <label for="state" class="form-label">State</label>
                        <select class="form-select" id="state" onchange="getCities()">
                            <option selected>State</option>
                        </select>
                    </div>

                    <div class="col-md-3 mt-3">
                        <label for="city" class="form-label">City</label>
                        <select class="form-select" id="city">
                            <option selected>City</option>
                        </select>
                    </div>


                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <label for="zip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="zip">
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="gender" class="form-label">Gender</label>
                            <select id="gender" class="form-select">
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <div class="col-md-4 mt-3">
                            <label for="dob" class="form-label">Birth Date</label>
                            <input type="date" class="date" id="dob">
                        </div>
                    </div>

                    <div class="col-6 mt-3">
                        <label for="linkedIn" class="form-label">LinkedIn </label>
                        <input type="text" class="form-control" id="linkedIn">
                    </div>

                    <div class="col-6 mt-3">
                        <label for="website" class="form-label">Website</label>
                        <input type="text" class="form-control" id="website">
                    </div>

                </div>

            </div>

            <div class="btn-box container d-block text-center" style="width:850px;">
                <button type="button" class="next_btn" id="next1">Next Step<i
                        class="bi bi-arrow-right-circle ms-3"></i></button>
            </div>

        </form>

        <!-- **********     FORM - 1 END   ********** -->



        <!-- **********     FORM - 2    ********** -->


        <form id="form2" class="step step-2">

            <div class="container mt-5">
                <h1 class="d-flex justify-content-center m-5" style="font-weight: 600;">My Experiences</h1>
            </div>

            <div class="card-container shadow mb-5 p-3 mb-5 bg-white" style="width:850px; margin:auto" id="card">
                <div class="d-flex mt-3 mx-3">
                    <h6>My Experiences</h6>
                </div>
                <hr style="width:95%; margin: 10px;" , size="3" class="bg-secondary">


                <div class="flip-cards d-flex flex-column m-4">

                    <!-- Flip card 0 -->
                    <div class="fc0">
                        <div class="flip-card card-container p-2 mb-4 bg-white ">

                            <div class="flip0 card-body">
                                <h4 class="mx-4 my-0 p-2">Profile</h4>
                            </div>

                            <div class="panel0 p-1">
                                <hr>

                                <div class="row mx-2 mb-5">
                                    <div class="mt-4">
                                        <label for="profile" class="form-label">Profile</label>
                                        <textarea class="form-control" id="profile" rows=6></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Flip card 0 End -->

                    <!-- Flip card 1 -->
                    <div class="fc1">

                        <div class="flip-card card-container p-2 mb-4 bg-white ">

                            <div class="flip1 card-body">
                                <h4 class="mx-4 my-0 p-2">Education and Qualifications</h5>
                            </div>

                            <div class="panel1 p-1">
                                <hr>

                                <div class="accordion" id="accordionEdu">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="eheading1">
                                            <a class="delete-item" onclick="delEdu2(event)"><i
                                                    class="bi bi-trash"></i></a>

                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#ecollapse1" aria-expanded="true"
                                                aria-controls="ecollapse1" onclick="emakeVisible()">
                                                Educational Qualification
                                            </button>
                                        </h2>
                                        <div id="ecollapse1" class="accordion-collapse collapse show"
                                            aria-labelledby="eheading1" data-bs-parent="#accordionEdu">
                                            <div class="accordion-body">


                                                <div class="row mx-2 mb-5">

                                                    <div class="col-md-6 ">
                                                        <label for="" class="form-label">Degree</label>
                                                        <input type="text" class="form-control degree" id="degree"
                                                            placeholder="e.g. B.Tech ">
                                                    </div>

                                                    <!-- <div class="col-md-6">
                                                        <label for="city" class="form-label"></label>
                                                        <input type="text" class="form-control city" id="city"
                                                            placeholder="e.g. San francico">
                                                    </div> -->

                                                    <div class="col-12 mt-3">
                                                        <label for="" class="form-label">School/University</label>
                                                        <input type="text" class="form-control school" id="school"
                                                            placeholder="e.g. International Academy.">
                                                    </div>
                                                    <div class="col-6 mt-3">
                                                        <div class="d-flex flex-row">
                                                            <div class="me-4 mt-2">
                                                                <label for="" class="form-label">Start Date</label>
                                                                <input class="date edu_start" type="date"
                                                                    id="edu_start">
                                                            </div>

                                                            <div class="ms-4 mt-2">
                                                                <label for="" class="form-label">End Date</label>
                                                                <input class="date end_date" type="date" id="edu_end">
                                                            </div>

                                                            <div class="ms-4 mt-5">
                                                                <div class="form-check">
                                                                    <input class="end_date_toggle form-check-input"
                                                                        type="checkbox" value="" id=""
                                                                        onclick="toggChk(this)">
                                                                    <label class="form-check-label"
                                                                        for="flexCheckChecked">Present</label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!-- <div class="mt-4">
                                                        <label for="edu_description"
                                                            class="form-label">Description</label>
                                                        <textarea class="form-control edu_description"
                                                            id="edu_description" rows="3"></textarea>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="my-5 d-flex justify-content-center"><button type="button"
                                        class="btn btn-outline-secondary" style="width:90%;" id="add_edu"><i
                                            class="bi bi-plus-circle me-3"></i>Add another
                                        education</button>
                                </div>

                            </div>
                        </div>
                        <!-- Flip card 1 End-->


                    </div>

                    <!-- Flip card 2 -->
                    <div class="fc2">
                        <div class="flip-card card-container  p-2 mb-4 bg-white ">

                            <div class="flip2 card-body">
                                <h4 class="mx-4 my-0 p-2">Work Experience</h4>
                            </div>

                            <div class="panel2 p-1">
                                <hr>
                                <div class="list row mx-2 mb-5">

                                    <div class="accordion" id="accordionWork">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="wheading1">
                                                <a class="delete-item" onclick="delWork2(event)"><i
                                                        class="bi bi-trash"></i></a>

                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#wcollapse1" aria-expanded="true"
                                                    aria-controls="wcollapse1" onclick="wmakeVisible()">
                                                    Work Experience
                                                </button>
                                            </h2>
                                            <div id="wcollapse1" class="accordion-collapse collapse show"
                                                aria-labelledby="wheading1" data-bs-parent="#accordionWork">
                                                <div class="accordion-body">

                                                    <div class="row mx-2 mb-5">

                                                        <div class="col-md-6 ">
                                                            <label for="" class="form-label">Job Title</label>
                                                            <input type="text" class="form-control job_title"
                                                                id="job_title" placeholder="e.g. Web Devloper">
                                                        </div>

                                                        <!-- <div class="col-md-6">
                                                            <label for="work_city" class="form-label">City/Town</label>
                                                            <input type="text" class="form-control work_city"
                                                                id="work_city" placeholder="e.g. San francico">
                                                        </div> -->

                                                        <div class="col-12 mt-3">
                                                            <label for="" class="form-label">Company Name</label>
                                                            <input type="text" class="form-control company_name"
                                                                id="company_name" placeholder="e.g. PwC">
                                                        </div>

                                                        <div class="col-6 mt-3">
                                                            <div class="d-flex flex-row">
                                                                <div class="me-4 mt-2">
                                                                    <label for="" class="form-label">Start Date</label>
                                                                    <input class="date work_start" type="date"
                                                                        id="Work1_start">
                                                                </div>

                                                                <div class="ms-4 mt-2">
                                                                    <label for="" class="form-label">End Date</label>
                                                                    <input class="date end_date" type="date"
                                                                        id="Work1_end">
                                                                </div>

                                                                <div class="ms-4 mt-5">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input end_date_toggle"
                                                                            type="checkbox" value="" id=""
                                                                            onclick="toggChk(this)">
                                                                        <label class="form-check-label"
                                                                            for="flexCheckChecked">Present</label>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="mt-4">
                                                            <label for="work_description"
                                                                class="form-label">Description</label>
                                                            <textarea class="form-control work_desc"
                                                                id="work_description" rows="3"></textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- New Work Experience -->

                                </div>
                                <div class="my-5 d-flex justify-content-center"><button type="button"
                                        class="btn btn-outline-secondary" style="width:90%;" id="add_work"><i
                                            class="bi bi-plus-circle me-3"></i>Add another
                                        work experience</button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Flip card 2 End-->


                    <!-- Flip card 3 -->
                    <div class="fc3">
                        <div class="flip-card card-container p-2 mb-4 bg-white">

                            <div class="flip3 card-body">
                                <h4 class="mx-4 my-0 p-2">Skills</h4>
                            </div>

                            <div class="panel3 p-1">
                                <hr>

                                <div class="accordion" id="accordionSkill">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="sheading1">
                                            <a class="delete-item" onclick="delSkill2(event)"><i
                                                    class="bi bi-trash"></i></a>
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#scollapse1" aria-expanded="true"
                                                aria-controls="scollapse1" onclick="smakeVisible()">
                                                Skill
                                            </button>
                                        </h2>
                                        <div id="scollapse1" class="accordion-collapse collapse show"
                                            aria-labelledby="sheading1" data-bs-parent="#accordionSkill">
                                            <div class="accordion-body">

                                                <div class="list row mx-2 mb-5">

                                                    <div class="col-12 mt-3">
                                                        <div class="d-flex flex-row">

                                                            <div class="col-md-6">
                                                                <label for="" class="form-label">Skill</label>
                                                                <input type="text" class="form-control skill" id="skill"
                                                                    placeholder="e.g. photoshop, Python, DBMS"
                                                                    onkeydown="adder(event,'skill')">
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- New Skills -->

                                </div>
                                <div class="my-5 d-flex justify-content-center"><button type="button"
                                        class="btn btn-outline-secondary" style="width:90%;" id="add_skill"><i
                                            class="bi bi-plus-circle me-3"></i>Add
                                        another
                                        skill</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Flip card 3 End-->


                    <!-- Flip card 4 -->
                    <div class="fc4">
                        <div class="flip-card card-container p-2 mb-4 bg-white">

                            <div class="flip4 card-body">
                                <h4 class="mx-4 my-0 p-2">Interests</h4>
                            </div>

                            <div class="panel4 p-1">
                                <hr>

                                <div class="accordion" id="accordionInt">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="iheading1">
                                            <a class="delete-item" onclick="delInt2(event)"><i
                                                    class="bi bi-trash"></i></a>
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#icollapse1" aria-expanded="true"
                                                aria-controls="icollapse1" onclick="imakeVisible()">
                                                Hobby
                                            </button>
                                        </h2>
                                        <div id="icollapse1" class="accordion-collapse collapse show"
                                            aria-labelledby="iheading1" data-bs-parent="#accordionInt">
                                            <div class="accordion-body">

                                                <div class="col-12">
                                                    <!-- <label for="hobby1" class="form-label">Hobby</label> -->
                                                    <input type="text" class="form-control hobby"
                                                        placeholder="e.g. Reading, Writing"
                                                        onkeydown="adder(event,'hobby')">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="list row mx-2 mb-5">

                                </div>
                                <div class="my-5 d-flex justify-content-center"><button type="button"
                                        class="btn btn-outline-secondary" style="width:90%;" id="add_interest"><i
                                            class="bi bi-plus-circle me-3"></i>Add
                                        another
                                        hobby</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Flip card 4 End-->


                    <!-- Flip card 5 -->
                    <div class="fc5">
                        <div class="flip-card card-container p-2 mb-4 bg-white ">

                            <div class="flip5 card-body">
                                <h4 class="mx-4 my-0 p-2">Achievements</h4>
                            </div>

                            <div class="panel5 p-1">
                                <hr>

                                <div class="row mx-2 mb-5">
                                    <div class="mt-4">
                                        <label for="achv_description" class="form-label">Description</label>
                                        <textarea class="form-control" id="achv_description" rows=6></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Flip card 5 End-->



                        <!-- <div class="fc5 my-3">
                            <div class="flip5 card card-body">
                                <select class="form-select mx-4 py-2" style="width:95%;"
                                    aria-label="Default select example">
                                    <option selected><i class="bi bi-plus-circle me-3"></i>Add extra section</option>
                                    <option value="1">Courses</option>
                                    <option value="2">Resume Objective</option>
                                    <option value="3">References</option>
                                </select>
                            </div>
                            <div class="panel5"></div>
                            </div> -->
                    </div>
                    <!-- Flip card 6 -->
                    <div class="fc6">
                        <div class="flip-card card-container p-2 mb-4 bg-white">

                            <div class="flip6 card-body">
                                <h4 class="mx-4 my-0 p-2">Known Languages</h4>
                            </div>

                            <div class="panel3 p-1">
                                <hr>

                                <div class="accordion" id="accordionLang">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="lheading1">
                                            <a class="delete-item" onclick="delLang2(event)"><i
                                                    class="bi bi-trash"></i></a>
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#lcollapse1" aria-expanded="true"
                                                aria-controls="lcollapse1" onclick="lmakeVisible()">
                                                Language
                                            </button>
                                        </h2>
                                        <div id="lcollapse1" class="accordion-collapse collapse show"
                                            aria-labelledby="lheading1" data-bs-parent="#accordionLang">
                                            <div class="accordion-body">

                                                <div class="list row mx-2 mb-5">

                                                    <div class="col-12 mt-3">
                                                        <div class="d-flex flex-row">
                                                            <input type="text" class="form-control lang" id="lang"
                                                                placeholder="e.g. English, French, German"
                                                                onkeydown="adder(event,'lang')">
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Add Languages -->

                                </div>
                                <div class="my-5 d-flex justify-content-center"><button type="button"
                                        class="btn btn-outline-secondary" style="width:90%;" id="add_lang"><i
                                            class="bi bi-plus-circle me-3"></i>Add another language</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Flip card 6 end -->
                </div>
            </div>

            <div class="btn_box container d-block text-center" style="width:850px;">
                <button type="button" class="prev_btn" id="back2"><i class="bi bi-arrow-left-circle me-3"></i>Previous
                    Step</button>
                <button type="button" class="next_btn" id="next2">Next Step<i
                        class="bi bi-arrow-right-circle ms-3"></i></button>
                <!--
                <button type="button" onclick="genrateCV()" class="next_btn" id="generatecv">Genrate CV<i
                        class="bi bi-arrow-right-circle ms-3"></i></button>
                -->
            </div>

        </form>
        <!-- **********     FORM - 2 END    ********** -->


        <!-- **********     FORM - 3    ********** -->

        <form id="form3" class="step step-3">
            <div class="container mt-5">
                <h1 class="d-flex justify-content-center m-5 text-align-center" style="font-weight: 600;">Select
                    Template</h1>
            </div>

            <div class="card-container shadow mb-5 p-3 mb-5 bg-white" style="width:65%; margin:auto" id="card">
                <div class="d-flex mt-3 mx-3">
                    <h6>Select Template</h6>
                </div>
                <hr style="width:95%; margin: 10px;" , size="3" class="bg-secondary">
                <div class="flip-cards d-flex flex-row justify-content-center align-items-center m-4">

                    <div class="container">

                        <div class="row my-5 justify-content-around">
                            <div class="col d-flex justify-content-center align-items-center">
                                <!-- template 1 -->
                                <div class="card p-1" onclick=" templateRadioSelector(this)">
                                    <img src="images/het.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="btn_box container d-block text-center">
                                            <h5 class="card-title">Stanford</h5>
                                            <input class="form-check-input" type="radio" name="selected_template"
                                                id="template_1">
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <!-- template 2 -->
                                <div class="card p-1" onclick=" templateRadioSelector(this)">
                                    <img src="images/het2.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="btn_box container d-block text-center">
                                            <h5 class="card-title">Harvard</h5>
                                            <input class="form-check-input" type="radio" name="selected_template"
                                                id="template_2">
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                        </div>

                        <div class="row my-5">
                            <div class="col d-flex justify-content-center align-items-center">
                                <!-- template 3 -->
                                <div class="card p-1" onclick=" templateRadioSelector(this)">
                                    <img src="images/het3.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="btn_box container d-block text-center">
                                            <h5 class="card-title">Edinburgh</h5>
                                            <input class="form-check-input" type="radio" name="selected_template"
                                                id="template_3">
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- <button type="button" onclick="template_selector()" class="next_btn" id="generatecv">Generate CV<i
                    class="bi bi-arrow-right-circle ms-3"></i></button> -->
            <div class="btn-box container d-block text-center" style="width:850px;">
                <button type="button" class="prev_btn" id="back2"><i class="bi bi-arrow-left-circle me-3"></i>Previous
                    Step</button>
                <button type="button" onclick="template_selector()" class="generateCv_btn" id="generatecv">Generate CV
                    <i class="bi bi-file-earmark-person-fill ms-3"></i></button>
            </div>
        </form>

        <!-- **********     FORM - 3 END    ********** -->

    </div>


    <!-- **********     Templates-1    ********** -->


    <div class="t1 container-fluid template" style="background-color: aliceblue; display: none;" id="Template_1">
        <a onclick="backToForm('t1')">
            <div class="back-to-form"><span><i class="fas fa-angle-double-left fa-3x"></i></span><span
                    style="font-size: 23px; margin-left: 10px; margin-right: 10px;">Back to form</span>
            </div>
        </a>

        <div class="palette">
            <span class="pelement one"></span>
            <span class="pelement two"></span>
            <span class="pelement three"></span>
            <span class="pelement four"></span>
            <span class="pelement five"></span>
        </div>
        <div class="container" id="target">
            <div class="left_side">
                <div class="profileText">
                    <div class="imgBx">
                        <img src="" class="profilepic" alt="Max">
                    </div>
                    <h2 id="t_name">Venkat Rastogi</h2> <br>
                    <span>DOB:&nbsp;<span id="t_dob"></span></span>
                    <span>Gender:&nbsp;<span id="t_gender"></span></span>
                </div>
                <div class="contactInfo">
                    <h3 class="title">Contact Info</h3>
                    <ul>
                        <li>
                            <span class="icon"><i class="fas fa-phone-alt" aria-hidden="true"></i></span>
                            <span class="text" id="t_number">+91 9429142949</span>
                        </li>
                        <li>
                            <span class="icon"><i class="far fa-envelope"></i></span>
                            <span class="text" id="t_email">venkat_ras@email.com</span>
                        </li>
                        <li>
                            <span class="icon"><i class="fas fa-globe"></i></span>
                            <span class="text" id="t_website">www.mywebsite.com</span>
                        </li>
                        <li>
                            <span class="icon"><i class="fab fa-linkedin"></i></span>
                            <span class="text" id="t_linkedIn">linkedin.com/me</span>
                        </li>
                        <li>
                            <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                            <span class="text" id="t_address">Chennai, Tamil Nadu, India</span>
                        </li>
                    </ul>
                </div>

                <div class="contactInfo education">
                    <h3 class="title">Education</h3>
                    <ul>
                        <!-- <li>
                            <h5>2010-2013</h5>
                            <h4>Master's Degree in Computer Science</h4>
                            <h4>University name</h4>
                        </li>
                        <li>
                            <h5>2007-2010</h5>
                            <h4>Bachelor's Degree in Computer Science</h4>
                            <h4>University name</h4>
                        </li>
                        <li>
                            <h5>1997-2007</h5>
                            <h4>Matriculation</h4>
                            <h4>University name</h4>
                        </li> -->
                    </ul>
                </div>

                <div class="contactInfo language">
                    <h3 class="title">Languages</h3>
                    <ul>
                        <!-- <li>
                            <span class="text">English</span>
                        </li>
                        <li>
                            <span class="text">Hindi</span>
                        </li>
                        <li>
                            <span class="text">Gujarati</span>
                        </li> -->
                    </ul>
                </div>
            </div>


            <div class="right_side">
                <div class="about prof">
                    <h2 class="title2">Profile</h2>
                </div>
                <div class="about">
                    <div class="experience">
                        <h2 class="title2">Experience</h2>
                        <!-- <div class="box">
                            <div class="year_company">
                                <h5>2019-present</h5>
                                <h5>Company Name</h5>
                            </div>
                            <div class="text">
                                <h4>Senior UX Designer</h4>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed veniam voluptate non
                                    facere, eveniet beatae unde harum quos earum? Eveniet!</p>
                            </div>
                        </div>

                        <div class="box">
                            <div class="year_company">
                                <h5>2015-2019</h5>
                                <h5>Company Name</h5>
                            </div>
                            <div class="text">
                                <h4>UX/UI Designer</h4>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed veniam voluptate non
                                    facere, eveniet beatae unde harum quos earum? Eveniet!</p>
                            </div>
                        </div>

                        <div class="box">
                            <div class="year_company">
                                <h5>2012-2015</h5>
                                <h5>Company Name</h5>
                            </div>
                            <div class="text">
                                <h4>Junior UX Designer</h4>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed veniam voluptate non
                                    facere, eveniet beatae unde harum quos earum? Eveniet!</p>
                            </div>
                        </div> -->
                    </div>
                </div>

                <div class="about skills">
                    <h2 class="title2">Professional Skills</h2>
                    <div class="box">
                        <!-- <h4>Html</h4>
                        <h4>CSS</h4>
                        <h4>JavaScript</h4>
                        <h4>Photoshop</h4>
                        <h4>Illustrator</h4>
                        <h4>Lightroom</h4> -->
                    </div>
                </div>

                <div class="about interest">
                    <h2 class="title2">Interest</h2>
                    <ul>
                        <!-- <li>Gaming</li>
                        <li>Singing</li>
                        <li>Reading</li>
                        <li>Cooking</li> -->
                    </ul>
                </div>
                <div class="about achievements">
                    <h2 class="title2">Achievements</h2>
                </div>
            </div>
        </div>
        <div>
            <button type="button" class="btn btn-primary btn-lg mt-5 mb-5 mx-4 dwnldimage" id="dwnldimage">Download
                Resume as
                Image</button>
            <button type="button" class="btn btn-primary btn-lg mt-5 mb-5 mx-4 printCv" id="printCv">Download Resume as
                PDF</button>
        </div>
    </div>



    <!-- **********     Template-2      ********** -->

    <div class="t2 container-fluid template" style="display:none; background-color: aliceblue;" id="Template_2">
        <a onclick="backToForm('t2')">
            <div class="back-to-form"><span><i class="fas fa-angle-double-left fa-3x"></i></span><span
                    style="font-size: 23px; margin-left: 10px; margin-right: 10px;">Back to form</span>
            </div>
        </a>
        <div class="palette">
            <span class="pelement one"></span>
            <span class="pelement two"></span>
            <span class="pelement three"></span>
            <span class="pelement four"></span>
            <span class="pelement five"></span>
        </div>
        <div class="containerr" id="target">
            <div class="upper">
                Curriculum Vitae
            </div>
            <div class="lower">
                <div class="lower_left">
                    <img src="./templates/mdp.png" class="profilepic" alt="Max">
                    <div class="header personal">
                        <div class="title">Personal</div>
                        <div class="content">
                            <div class="con">
                                <div class="heading">Name</div>
                                <div class="value" id="t_name">Venkat Rastogi</div>
                            </div>
                            <div class="con">
                                <div class="heading">Gender</div>
                                <div class="value" id="t_gender">Male</div>
                            </div>
                            <div class="con">
                                <div class="heading">DOB</div>
                                <div class="value" id="t_dob">01/03/2009</div>
                            </div>
                            <div class="con">
                                <div class="heading">Address</div>
                                <div class="value" id="t_address">Chennai, Tamil Nadu, India</div>
                            </div>
                            <div class="con">
                                <div class="heading">Phone number</div>
                                <div class="value" id="t_number">+919947382613</div>
                            </div>
                            <div class="con">
                                <div class="heading">Email</div>
                                <div class="value" id="t_email">venkat_ras@email.com</div>
                            </div>
                            <div class="con">
                                <div class="heading">Linked in</div>
                                <div class="value" id="t_linkedIn">linkedin.com/me</div>
                            </div>
                            <div class="con">
                                <div class="heading">Website</div>
                                <div class="value" id="t_website">www.mywebsite.com</div>
                            </div>
                        </div>
                    </div>

                    <div class="header skills">
                        <div class="title">Skills</div>
                        <div class="content">
                            <!-- <div class="skill">HTML</div>
                            <div class="skill">CSS</div>
                            <div class="skill">JavaScript</div>
                            <div class="skill">Photoshop</div>
                            <div class="skill">Illustrator</div>
                            <div class="skill">Lightroom</div> -->
                        </div>
                    </div>

                    <div class="header interests">
                        <div class="title">Interests</div>
                        <div class="content">
                            <!-- <div class="con">Gaming</div>
                            <div class="con">Singing</div>
                            <div class="con">Reading</div>
                            <div class="con">Cooking</div>
                            <div class="con">Exercising</div>
                            <div class="con">Swimming</div> -->
                        </div>
                    </div>

                    <div class="header languages">
                        <div class="title">Languages</div>
                        <div class="content">
                            <div class="con">
                                <!-- <div class="lang">English</div>
                                <div class="lang">Hindi</div>
                                <div class="lang">Gujarati</div>
                                <div class="lang">French</div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lower_right">
                    <div class="header profile">
                        <div class="hr title">Profile</div>
                        <!-- <div class="content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Error ea numquam itaque deserunt,
                            quidem quaerat unde soluta pariatur similique exercitationem molestias nesciunt aut velit,
                            ratione mollitia, quod enim voluptatibus placeat delectus. Eaque assumenda, officia ut
                            obcaecati, voluptates voluptas a laborum minus molestias magnam deserunt impedit sequi
                            dicta? Similique, possimus fuga.
                        </div> -->
                    </div>
                    <div class="education header vrr">
                        <div class="hr title">Educational Qualifications</div>
                        <div class="content">
                            <!-- <div class="con">
                                <h4 class="time">2010-2013</h4>
                                <h4 class="degree">Master's degree in Computer Science</h4>
                                <h4 class="uni">University Name</h4>
                            </div>
                            <div class="con">
                                <h4 class="time">2006-2010</h4>
                                <h4 class="degree">Bachelor's degree in Computer Science</h4>
                                <h4 class="uni">University Name</h4>
                            </div>
                            <div class="con">
                                <h4 class="time">1997-2007</h4>
                                <h4 class="degree">Matriculation</h4>
                                <h4 class="uni">University Name</h4>
                            </div> -->
                        </div>
                    </div>
                    <div class="experience header vrr">
                        <div class="hr title">Experience</div>
                        <div class="content">
                            <!-- <div class="con">
                                <div class="time">
                                    <h4>2019-present</h4>
                                    <h4>Company Name</h4>
                                </div>
                                <div class="exp">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quas est dolorem, eveniet
                                    velit exercitationem repudiandae iste suscipit nihil, eligendi sed nam molestiae
                                    ducimus labore officia expedita. Ullam voluptates officiis debitis consectetur
                                    soluta minus quidem quisquam reprehenderit odio, facilis doloribus excepturi cum
                                    voluptatem explicabo sint incidunt commodi! Beatae nostrum debitis labore.
                                </div>
                            </div>
                            <div class="con">
                                <div class="time">
                                    <h4>2015-2019</h4>
                                    <h4>Company Name</h4>
                                </div>
                                <div class="exp">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem necessitatibus odit
                                    eius nam nisi beatae aut esse omnis nostrum ratione consequuntur, cumque dignissimos
                                    assumenda culpa et illum? Sunt consequuntur, autem doloremque ducimus quo unde
                                    molestias cumque at quaerat maiores consequatur eum reiciendis ut rerum hic tempore
                                    debitis magnam dicta numquam!
                                </div>
                            </div>
                            <div class="con">
                                <div class="time">
                                    <h4>2012-2015</h4>
                                    <h4>Company Name</h4>
                                </div>
                                <div class="exp">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta eaque aperiam
                                    voluptates non magni iusto expedita sapiente error qui, perferendis suscipit. Iste
                                    rerum cupiditate excepturi ea ipsam modi dolorum totam?
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="achievements header vrr">
                        <div class="hr title">Achievements</div>
                        <div class="content">
                            <div class="con">
                                <!-- <div class="val">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mattis tincidunt
                                    nibh sed dapibus. Cras vel arcu eu est maximus luctus sagittis in augue. Vestibulum
                                    molestie non est eu ultricies. Nunc convallis ut eros nec semper. Etiam ut auctor
                                    eros. Praesent lobortis vestibulum lorem at consectetur. Ut malesuada a magna nec
                                    sollicitudin. Nulla a luctus mi. Fusce iaculis hendrerit turpis, nec maximus eros
                                    ullamcorper nec. Quisque id nunc consectetur, facilisis erat non, viverra dolor.
                                    Aenean nisi turpis, dignissim et elit ut, facilisis pellentesque sem. Integer ac mi
                                    accumsan metus semper auctor id eget sapien.
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <button type="button" class="btn btn-primary btn-lg mt-5 mb-5 mx-4 dwnldimage" id="dwnldimage">Download
                Resume as
                Image</button>
            <button type="button" class="btn btn-primary btn-lg mt-5 mb-5 mx-4 printCv" id="printCv">Download Resume as
                PDF</button>
        </div>
    </div>


    <!-- **********     Template-3      ********** -->


    <div class="t3 container-fluid template" style="background-color: aliceblue; display:none;" id="Template_3">
        <a onclick="backToForm('t3')">
            <div class="back-to-form"><span><i class="fas fa-angle-double-left fa-3x"></i></span><span
                    style="font-size: 23px; margin-left: 10px; margin-right: 10px;">Back to form</span>
            </div>
        </a>
        <div class="main">
            <div class="top-section">
                <img src="../images/person.jfif" class="profilepic">
                <p class="fname" id="t_name">Devansh Shah</p>
                <span>DOB:&nbsp;<span id="t_dob"></span></span><br />
                <span>Gender:&nbsp;<span id="t_gender"></span></span>
            </div>

            <div class="clearfix"></div>
            <div class="col-div-4">
                <div class="content-box" style="padding-left: 40px;">
                    <p class="head">Contact</p>
                    <p class="p3"><i class="fa fa-phone"></i>&nbsp;&nbsp;<span id="t_number"></span></p>
                    <p class="p3"><i class="fa fa-envelope"></i>&nbsp;&nbsp;<span id="t_email">xyz@gmail.com</span>
                    </p>
                    <p class="p3"><i class="fa fa-home"></i>&nbsp;&nbsp;<span id="t_address"></span></p>
                    <p class="p3" style="overflow:hidden;"><i class="fab fa-linkedin"></i><span id="t_linkedIn"></span>
                    </p>
                    <p class="p3"><i class="fas fa-globe"></i>&nbsp;&nbsp;<span id="t_website"></span></p>
                    <br />

                    <p class=" head">My Skills</p>
                    <ul class="skills">
                        <!-- <li><span>Web Devloper</span></li>
                        <li><span>Graphic Designer</span></li>
                        <li><span>Adobe Photoshop</span></li>
                        <li><span>Adobe Illustrator</span></li>
                        <li><span>Problem Solving</span></li> -->
                    </ul>
                    <br />

                    <div class="languages">
                        <p class="head">Languages</p>
                        <!-- <p class="p3">Hindi</p>
                        <p class="p3">English</p>
                        <p class="p3">Gujarati</p>
                        <p class="p3">German</p> -->
                    </div>
                    <br />


                    <p class="head">Interest</p>
                    <ul class="interest">
                        <!-- <li><span>A</span></li>
                        <li><span>B</span></li>
                        <li><span>C</span></li>
                        <li><span>D</span></li>
                        <li><span>E</span></li> -->
                    </ul>

                </div>
            </div>
            <div class="line"></div>

            <div class="div col-div-8">
                <div class="content-box">
                    <p class="head">Profile</p>
                    <p class="p3 objective" id="objective" style="font-size: 14px; color:#525252;">Lorem Ipsum is
                        simply
                        dummy
                        text of
                        the printing
                        and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen
                        book.
                        It has survived not only five centuries.</p>
                    <br />

                    <p class="head">Experience</p>
                    <div class="experience">
                        <!-- <p class="job-title">Web Devloper (2018-NOW)</p>
                        <p class="par-4">
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            It has survived not only five centuries.
                        </p>

                        <p class="job-title">Sotware Devloper (2012-2018)</p>
                        <p class="par-4">
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            It has survived not only five centuries.
                        </p>

                        <p class="job-title">Graphic Designer (2010-2012)</p>
                        <p class="par-4">
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                            It has survived not only five centuries.
                        </p> -->
                    </div>
                    <br />

                    <p class="head">Education</p>
                    <div class="education">
                        <!-- <p class="degree">High School (2009-2010)</p>
                        <p class="par-4">
                            School Name
                        </p>

                        <p class="degree">B.TECH (2013-2015)</p>
                        <p class="par-4">
                            College Name
                        </p> -->
                    </div>
                </div>
            </div>
        </div>
        <div style="width: auto; margin: auto; text-align: center;">
            <button type="button" class="btn btn-primary btn-lg mt-5 mb-5 mx-4 dwnldimage" id="dwnldimage">Download
                Resume as
                Image</button>
            <button type="button" class="btn btn-primary btn-lg mt-5 mb-5 mx-4 printCv" id="printCv">Download Resume as
                PDF</button>
        </div>
    </div>





    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./templates/template2.js"></script>
</body>

<script>
    // document.body.style.zoom = "80%";



    $(document).ready(function () {
        function slideTog(el) {
            $(el).next().slideToggle(300);
        }
        $(".flip0, .flip1, .flip2, .flip3, .flip4, .flip5, .flip6, .flip7").click(function () {
            slideTog(this);
        });


        //**************** Form Steps ****************//


        let steps = Array.from(document.querySelectorAll('form.step'));
        let next_btn = document.querySelectorAll('form .next_btn');
        let prev_btn = document.querySelectorAll('form .prev_btn');


        next_btn.forEach(button => {
            button.addEventListener('click', () => {
                if (validate_form1(this))
                    changeStep('next');
            });
        });
        prev_btn.forEach(button => {
            button.addEventListener('click', () => {
                changeStep('prev');
            });
        });

        let index = 0;
        function changeStep(btn) {
            let active = document.querySelector('form.step.active')
            index = steps.indexOf(active);
            steps[index].classList.remove('active');
            if (btn === 'next') {
                if ((index < steps.length - 1))
                    index++;
            }
            else if (btn === 'prev')
                index--;
            steps[index].classList.add('active');
        }


    });

    function backToForm(ele) {
        $(`.${ele}`).css('display', 'none');
        document.getElementById('nav').style.display = 'block';
        document.getElementById('form3').classList.add('active');
        // ***************** Emptying education ******************* 
        $('.t1 .left_side .education ul').html('');
        $('.t2 .lower_right .education .content').html('');
        $('.t3 .education').html('');

        // ***************** Emptying work ******************* 
        $('.t1 .right_side .experience').html('<h2 class="title2">Experience</h2>');
        $('.t2 .lower_right .experience .content').html('');
        $('.t3 .content-box .experience').html('');

        // ***************** Emptying skill ******************* 
        $('.t1 .right_side .skills .box').html('');
        $('.t2 .lower .lower_left .skills .content').html('');
        $('.t3 .skills').html('');

        // ***************** Emptying languages ******************* 
        $('.t1 .left_side .language ul').html('');
        $('.t2 .lower .lower_left .languages .content .con').html('');
        $('.t3 .content-box .languages').html('<p class="head">Languages</p>');

        // ***************** Emptying achievements ******************* 
        $('.t1 .right_side .achievements').html(`<h2 class="title2">Achievements</h2>`);
        $('.t2 .lower_right .achievements .content .con').html('');

        // ***************** Emptying profile ******************* 
        $('.t1 .right_side .prof').html('<h2 class="title2">Profile</h2>')
        $('.t2 .lower_right .profile').html('<div class="hr title">Profile</div>')
        $('.t3 .objective').html('');

        // ***************** Emptying interest ******************* 
        $('.t1 .right_side .interest ul').html('');
        $('.t2 .lower .lower_left .interests .content').html('');
        $('.t3 .interest').html('');

    }

</script>

</html>

<!-- <div class="ms-3 mt-4">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
        <label class="form-check-label" for="flexCheckChecked">Present</label>
    </div>
</div> -->