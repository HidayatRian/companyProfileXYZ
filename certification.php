<!DOCTYPE html>
<html lang="en">

    <!-- head -->
    <?php include'layouts/head.php'; ?>

    <!-- TITLE -->
    <title>Certification</title>

<body>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="">

              <!-- NAVBAR -->
                <?php include'layouts/navbar.php' ?>

            </header>

            <div class="content-wrapper">
                
            <!-- CONTENT -->
                <!-- BREADCHUM -->
                <div class="container my-5">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="#"><i class="bi bi-house-door" style="color: #383431;"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Certification</li>
                        </ol>
                    </nav>
                </div>

                <!-- INTRO PRODUCT -->
                <section id="story">
                    <div class="container py-5 d-flex align-middle" style="border-radius: 2.5%; margin-bottom: 10rem; background: rgb(241,216,127); background: linear-gradient(90deg, rgba(241,216,127,1) 0%, rgba(241,216,127,0.777450946198792) 35%, rgba(82,157,203,0.8054621506805848) 100%); ">
                        <div class="row d-flex justify-content-evenly mt-4">
                            <div class="col-md-5 pb-3 pt-5">
                                <h5 class="fw-normal pt-3" style="color: #C04759;">XYZ COMPANY</h5>
                                <h1 class="card-title" style="color: #3B6C73;"><strong>Certification</strong></h1>
                                <p style="color: black;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, commodi voluptate?</p>


                            </div>
                            <div class="col-md-6">
                                <div class="embed-responsive embed-responsive-item embed-responsive-16by9 ">
                                    <img src="unggah/ilustrasi/karakter4.png" class="img-fluid" alt="gambar" width="100%"> 
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>

            <!-- FOOTER -->
           <?php include'layouts/footer.php' ?>

        </div>
    </div>
    
    <!-- JAVASCRIPT -->
    <?php include 'layouts/javascript.php' ?>

</body>

</html>
