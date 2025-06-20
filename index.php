<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full stack Foundry</title>
    <!-- Bootstrap css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cerulean/bootstrap.min.css">
    <link rel="stylesheet" href="https:/ /cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"  >
<!-- Bootstrap link icons -->
<style>
    .hero{
        background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('images/hero.jpg')center/cover no-repeat;
        color:white;
        padding:100px 0;
        align-items:center;
    }
        .features-icons{
        font-size: 40px;
        /* color: blue; */
    }
</style>
</head>
<body>
    <?php include  'includes/navbar.php' ?>
    <Section class="hero" >
        <!-- header end -->
        <div class="container ">
            <h1>Welcome to Full stack Foundry</h1>
            <p>kickstart your web development journey with hands-on training in HTML,CSS,Javascript,PHP,and more</p>
        </div>
    </Section>
    <main>
        <div class="container my -5">
            <h2 class="text-center my-5">What You'll Learn</h2>
           <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <div class="features-icons mb-3">
                       <i class="bi bi-code-slash text-primary"></i>
                    </div>
                    <h5 class="mt-3 text-dark">Frontend Development</h5>
                    <p>Learn HTML,CSS,Javascript,Bootstrap icons to build beautiful and responsive interfaces</p>
                      <!-- <ul class="list-group">
                          <li class="list-group-item">Html</li>
                          <li class="list-group-item">Css</li>
                          <li class="list-group-item">Bootsrap</li>
                          <li class="list-group-item">Javascript</li>
                           <li class="list-group-item">Bootstrap icons</li>
                       </ul> -->
               </div>
                <div class="col-md-4">
                    <div class="features-icons mb-3">
                       <i class="bi bi-database text-primary"></i>
                    </div>
                   <h5 class="mt-3 text-dark">Backend Development</h5>
                   <P>Build real-world dynamic systems with CRUD,authentication and database integration.</P>
                       <!-- <ul class="list-group">
                            <li class="list-group-item">PHP</li>
                            <li class="list-group-item">MySQL</li>
                      </ul> -->
                </div>
                <div class="col-md-4">
                    <div class="features-icons mb-3">
                       <i class="bi bi-git text-primary"></i>
                    </div>
                    <h5 class="mt-3 text-dark">Version control</h5>
                    <p>Track changes,collaborate and deploy projects using Git and Github like ProS</p>
                </div>
            </div>
            <div class="container text-center">
                <h3 class="mb-3">Ready to become a fullstack developer</h3>
                <a href="register.php" class="btn btn-outline-primary btn-lg">Register now</a>
            </div>
            <div>
              

    </main>
    <!--include footer-->
    <?php include 'includes/footer.php'?>?
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    
</body>
</html>
