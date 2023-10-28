<html>
    <head>
        <link rel="stylesheet" href="bootstrap.min.css">
        <title>DICT Training : Information</title>
    </head>
    <body>
        <header>
            <img src="img1.png" class="img-dict" width="300" height="125"/>
            <img src="img2.png" class="img-dict" width="300" height="125"/>
        </header>
        <div class="container-fluid">
          
          <div class="row border border-dark text-center mx-auto">
          <div class="d-flex justify-content-end">
              <div class="container margin-top">
                <div id="divResult" class="p-3 mt-2 bg-secondary text-white border border-dark">
                </div>
              </div>
            </div>
                <div class="col-md-6 border border-dark my-3 py-3">
                        <h2>Personal Information</h2>
                            <div class="form-group row">
                                <label for="txtfname" class="col-sm col-form-label">First Name: </label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" id="txtfname" placeholder="First Name">
                              </div>
                            </div>
                            <div class="form-group row">
                                <label for="txtlname" class="col-sm col-form-label">Last Name: </label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" id="txtlname" placeholder="Last Name">
                              </div>
                            </div>
                            <div class="form-group row">
                                <label for="txtage" class="col-sm col-form-label">Age: </label>
                              <div class="col-sm-9">
                                <input type="number" class="form-control" id="txtage" placeholder="Age">
                              </div>
                              </div>
                              <div class="form-group row">
                                <label for="txtgender" class="col-sm col-form-label">Gender:</label>
                              <div class="col-sm-9">
                                <select class="dropdown-toggle form-select" id="txtgender" name="gender" required>
                                    <option selected>Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cstatus" class="col-sm col-form-label">Civil Status:</label>
                                 <div class="col-sm-9">
                                    <select class="dropdown-toggle form-select" id="txtcstatus" aria-label=".form-select-lg example">
                                        <option selected>Select Civil Status</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Divorced">Divorced</option>
                                      </select>
                                    </div>
                                </div>
                </div>
                <div class="col-md-6 border border-dark my-3 py-3">
                    <h2>Educational Background</h2>
                    <div class="form-group row">
                        <label for="primary" class="col-sm col-form-label">Primary</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="txtprimary" placeholder="Primary">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="secondary" class="col-sm col-form-label text-left">Secondary</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control d-none" id="secondary" placeholder="Secondary">
                      </div>
                      </div>
                    <div class="form-group row">
                        <label for="jhs" class="col-sm col-form-label">JHS</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="jhs" placeholder="Junior Highschool">
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="shs" class="col-sm col-form-label">SHS</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="shs" placeholder="Senior Highschool">
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="tertiary" class="col-sm col-form-label">Tertiary</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="txttertiary" placeholder="Tertiary/College">
                      </div>
                    </div>
                </div>
                <div class="py-1">
                    <input type="button" value="Cancel" class="btn btn-secondary" onclick=""></button>
                    <input type="button" value="Submit" class="btn btn-primary" onclick="CollectData()"></button>
                </div>
              </div>
        <script src="jquery.min.js"></script>
        <script src="ajaxcall.js"></script>

    </body>
</html>