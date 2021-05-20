<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="profile.css">

    <!-- Font -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <title>Profile</title>
  </head>
  <body>

  <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #114386;">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand text-light" href="#">JobIT</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <form class="d-flex">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="#">BLOG</a>
                        </li>
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            BAHASA
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Inggris</a></li>
                            <li><a class="dropdown-item" href="#">Indonesia</a></li>
                        </ul>
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            USER
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Bookmark</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </ul>
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success text-light" type="submit">Search</button>
                </form>
                </div>
            </div>
    </nav> <br><br>

    <!-- Profile -->
    <div class="container app-page-container">
    <div class="card">
        <div ng-transclude>
            <div kb-editable-viewing class="profile-edit-panel">
                <div ng-show="visible" ng-transclude>
                    <div class="card-body">
                        <div class="row">
                            <div class="d-flex col-sm-5">
                                <div style="background-image: url(https://front-assets.kalibrr.com/production/jobseeker/kalibrr/assets/shared/img/application/no_image_avatar.png);    height: 100px;    width: 100px;    background-size: contain;  " class="candidate-pic">
                                </div>
                                <div class="d-flex justify-content-center row">
                                    <div class="col-sm-20">
                                        <h4 class="profile-candidate-name">
                                            <span  class="text-muted">Septiana </span>
                                            <span  class="text-muted">Anissa</span>
                                        </h4>
                                    </div>
                                    <div>
                                        <ul class="fa-ul profile-list-item">
                                            <li>
                                                <i class="fa fa-li fa-lg fa-user-md"></i>
                                                <div  class="text-muted">UI/UX Designer
                                                </div>
                                            </li>
                                            <li>
                                                <i class="fa fa-li fa-lg fa-map-marker"></i>
                                                <div  class="text-muted">Location 
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- <button type="button" data-toggel="modal" class="btn-unstyled panel-footer btn-block profile-add-btn">
                            <div class="text-heavy text-fa-wide text-primary">
                                <i class="fa fa-plus-circle"></i><span>Add contact info</span>
                            </div>        
                        </button> -->
                    </div>
                </div>
                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button> -->
            </div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Add Contact Info</button>
                
                <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Biodata</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="recipient-name">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-email" class="col-form-label">Email</label>
                                    <input type="text" class="form-control" id="recipient-email">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-birtday" class="col-form-label">Birthday</label>
                                    <input type="date" class="date" id="recipient-birthday">
                                </div>
                                <div class="mb-3">
                                    <label for="recipient-gender" class="col-form-label">Gender</label>
                                    <input type="text" class="form-control" id="recipient-gender">
                                </div>
                                <div class="mb-3">
                                    <label for="message-text" class="col-form-label">Alamat</label>
                                    <textarea class="form-control" id="message-text"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="gambar" class="col-form-label">Gambar</label>
                                    <input type="file" class="form-control" id="gambar">
                                </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Save</button>
                            </div>
                            </div>
                        </div>
                        </div>
                <!-- End Modal -->
        </div>
    </div> <br>

    <!-- Page 2 -->
    <div class="container  app-page-container">
        <div class="card">
            <div ng-transclude>
                <div ng-show="visible" ngtransclude>
                    <div class="card-body"><!---->
                        <h6 class="profile-title">Education</h6>
                            <p>Your most recent and relevant educational attainment should come first. If you have a post-graduate or master's degree, no need to include where you went to high school. Don't have education yet?</p>
                                <!-- <button type="button" class="btn-unstyled panel-footer btn-block profile-add-btn data-bs-toggle="modal" ">
                                    <div class="text-heavy text-fa-wide text-primary">
                                        <i class="fa fa-plus-circle"></i><span>Add Education</span>
                                    </div>        
                                </button> -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Education" data-bs-whatever="@getbootstrap">Add Education</button>
              
                                <!-- Modal -->
                                <div class="modal fade" id="Education" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Education</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                            <div class="mb-3">
                                                <label for="recipient-sekolah" class="col-form-label">Nama Sekolah/PTN</label>
                                                <input type="text" class="form-control" id="recipient-sekolah">
                                            </div>
                                            <div class="mb-3">
                                                <label for="recipient-tahunpertama" class="col-form-label">Tahun Pertama</label>
                                                <input type="date" class="date" id="recipient-tahunpertama">
                                            </div>
                                            <div class="mb-3">
                                                <label for="recipient-tahunterakhir" class="col-form-label">Tahun Terakhir</label>
                                                <input type="date" class="date" id="recipient-tahunterakhir">
                                            </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary">Save</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!-- End Modal -->
                    </div>
                </div>
            </div>
        </div>
    </div> <br>

    <!-- Page 3 -->
    <div class="container  app-page-container">
        <div class="card">
            <div ng-transclude>
                <div ng-show="visible" ngtransclude>
                    <div class="card-body"><!---->
                        <h6 class="profile-title">Skill</h6>
                            <p>Enumerate your skills, competencies, and talents relevant to the position and industry you are applying to. Indicate proficiency levels (Basic, Novice, Intermediate, Advanced, Expert) for each skill. Learn more.</p><!---->
                                <!-- <button type="button" ng-click="GlobalProfileCtrl.editContactCtrl.startEditing()" ng-if="GlobalProfileCtrl.profilers.PersonalInformationProfiler.group.control.isIncomplete()" class="btn-unstyled panel-footer btn-block profile-add-btn">
                                    <div class="text-heavy text-fa-wide text-primary">
                                        <i class="fa fa-plus-circle"></i><span>Add Skill</span>
                                    </div>        
                                </button> -->

                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Skill" data-bs-whatever="@getbootstrap">Add Skill</button>
              
                                <!-- Modal -->
                                <div class="modal fade" id="Skill" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Skill</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                            <div class="mb-3">
                                                <label for="recipient-skill" class="col-form-label">Kemampuan</label>
                                                <textarea type="text" class="form-control" id="recipient-skill"></textarea>
                                            </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary">Save</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!-- End Modal -->
                    </div>
                </div>
            </div>
        </div>
    </div> <br>

    <!-- Progress -->
    <div class="container  app-page-container">
        <div class="card">
            <div ng-transclude>
                <div ng-show="visible" ngtransclude>
                    <div class="container">   
                        <div class="card-body"><!---->
                            <h6 class="profile-title">Progress</h6>
                                <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div> <br>

    <!-- Footer -->
    <footer class="text-center text-lg-start" style="background-color: #1E385A; color : #FFFFFF">
    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <div class="row">
        <!--Grid column-->
        <div class="col-lg-4 col-md-10 mb-4 mb-md-0">
            <h3 class="text-uppercase">JobIT</h3>
            <h5>Discover Your Dream Job!</h5>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-4 mb-2 mb-md-0">
            <h6 class="text">About</h6>
            <h6 class="text">Career</h6>
            <h6 class="text">Internships</h6>
            <h6 class="text">Blog</h5>
            <h6 class="text">Contact</h6>
            <ul class="list-unstyled mb-0">
            <li>
                <a href="#" class="text-light">
                    <i id="social" class="fa fa-instagram fa-1x"></i>
                </a> &emsp;
                <a href="#" class="text-light">
                    <i id="social" class="fa fa-facebook fa-1x"></i>
                </a> &emsp;
                <a href="#" class="text-light">
                    <i id="social" class="fa fa-twitter fa-1x"></i>
                </a> &emsp;
                <a href="#" class="text-light">
                    <i id="social" class="fa fa-youtube fa-1x"></i>
                </a> &emsp;
                <a href="#" class="text-light">
                    <i id="social" class="fa fa-linkedin fa-1x"></i>
                </a>
            </li>
            </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-5 col-md-8 mb-6 mb-md-0">
            <h5 class="text-uppercase mb-0">Subscribe to our newsletters</h5>
            <div class="mb-3">
                <input for="email" class="col-form-label" placeholder="example@mail.com" aria-label="Search">
                <button type="submit" class="btn btn-outline-success text-light" id="subscribe">Subscribe</button>
            </div>
            <ul class="list-unstyled">
            <li>
                <a href="#!" class="text-light">Term of Use</a> &emsp;
                <a href="#!" class="text-light">Privacy Policy</a> &emsp;
                <a href="#!" class="text-light">Report a Problem</a>
            </li>
            </ul>
        </div>
        <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-light" href="#">JobIT</a>
    </div>
    <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
  </body>
</html>