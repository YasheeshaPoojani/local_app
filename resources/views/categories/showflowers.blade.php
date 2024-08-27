<!DOCTYPE html>
<html>
<head>
	<title></title>

  <style type="text/css">
    
  </style>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </head>

<body>
	<nav class="navbar navbar-expand-lg bg-dark sticky-top border-bottom" data-bs-theme="dark">
  <div class="container-fluid">
    <span class="navbar-brand mb-2 h1">BizNest</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/">categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="trend1">Trending</a>
        </li>
        
      </ul>
      <form class="d-flex">
        <button class="btn btn-success me-4" type="submit">Sign Up</button>
        <button class="btn btn-success" type ="submit">Sign in</button>
      </form>
    </div>
  </div>
</nav>



<div class = "bg-dark py-5 ">
  <table class="table table-bordered border-success table-dark container" >
  <thead>
    <tr class="table-secondary container">
      <th scope="col">Id</th>
      <th scope="col">Item Name</th>
      <th scope="col">Description</th>
      <th scope="col">Contact Information</th>
      <th scope="col">chat</th>
      
    </tr>
  </thead>
  <tbody>

  @foreach ( $flowers as $key => $flowers )

                        <tr>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $flowers->Name }}</td>
                            <td scope="col">{{ $flowers->Description }}</td>
                            <td scope="col">{{ $flowers->Phone }}</td>
                            <td><a href="#" class="btn btn-success">chat</a></td>
                            

                          </tr>

                        @endforeach




                    </tbody>
    
      
      
</table>
  </div>
  


<footer class="d-flex flex-wrap justify-content-between  align-items-center py-5 my-0  border-top bg-secondary" data-bs-theme="dark">
    <div class="col-md-4 d-flex align-items-center">
      <div class="copyright p-2">
            © Copyright <strong><span>2024</span></strong> All Rights Reserved-******
      </div>
    </div>
    <a  href="#" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      <img src="/assest/logo.jpg" alt="..." width="100 px" height="32 px">
    </a>
    <div class="credits justify-content-end p-2">Desing &amp; Develop by <a href="#" style="text-decoration: none;">#Biz Team</a>
        </div>
  </footer>
