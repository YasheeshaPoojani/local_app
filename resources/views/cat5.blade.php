<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <style>
        .card-container {
            display: flex;
            overflow-x: auto;
            padding: 1rem;
            scroll-behavior: smooth;
        }
        .card {
            flex: 0 0 auto;
            margin-right: 1rem;
        }
        .scroll-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: rgba(0, 0, 0, 0.5);
            border: none;
            color: white;
            padding: 0.5rem;
            cursor: pointer;
            z-index: 100;
        }
        .scroll-button.left {
            left: 0;
        }
        .scroll-button.right {
            right: 0;
        }
    </style>
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
          <a class="nav-link active" href="#">categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#">Trending</a>
        </li>
      </ul>
      <form class="d-flex">
        <button class="btn btn-success me-4" type="submit">Sign Up</button>
        <button class="btn btn-success" type ="submit">Sign in</button>
      </form>
    </div>
  </div>
</nav>

<div class="album py-5 bg-dark">
  <h5 class=" text-light bg-dark p-2" >Wedding</h5>
    <div class="container position-relative">
       <button class="scroll-button left" onclick="scrollLeft()">&lt;</button>
      <div class="card-container">
        <div class="card" style=" width: 18rem;">
  <img src="/assest/derss.jpg" class="card-img-top" alt="..." height="190 px" width="960 px">
  <div class="card-body">
    <h5 class="card-title">Wedding dresses</h5>
    <p class="card-text">Bride,Groom,Bridemaid,Groomsmen,ect</p>
    <a href="/dresses/1" class="btn btn-success">view</a>
  </div>
</div>
         
        <div class="card" style="width: 18rem;">
  <img src="/assest/in2.jpg" class="card-img-top" alt="..."
   height="190 px" width="960 px">
  <div class="card-body">
    <h5 class="card-title">Card & Cakes</h5>
    <p class="card-text">Wedding cards & cakes,Big cake structures</p>
    <a href="/cards/1" class="btn btn-success">view</a>
  </div>
</div>
        <div class="card" style="width: 18rem;">
  <img src="/assest/poruwa.jpg" class="card-img-top" alt="..." 
  height="210 px" width="960 px">
  <div class="card-body">
    <h5 class="card-title">Poruwa,Mandapa & decorations</h5>
    <p class="card-text">Indoor & Outdoor</p>
    <a href="/poruwas/1" class="btn btn-success">view</a>
  </div>
</div>
 
        <div class="card" style="width: 18rem;">
  <img src="/assest/catering.jpg" class="card-img-top" alt="..." height="190 px" width="960 px">
  <div class="card-body">
    <h5 class="card-title">Catering services</h5>
    <p class="card-text">Easten,Westen,Tamil</p>
    <a href="/caterings/1" class="btn btn-success">view</a>
  </div>
</div>
        <div class="card" style="width: 18rem;">
  <img src="/assest/photo.jpg" class="card-img-top" alt="..." height="190 px" width="960 px">
  <div class="card-body">
    <h5 class="card-title">Photograpy</h5>
    <p class="card-text">Albums,Videos,Thank you cards,ect</p>
    <a href="/photos/1" class="btn btn-success">view</a>
  </div>
</div>
        <div class="card" style="width: 18rem;">
  <img src="/assest/music.jpg" class="card-img-top" alt="..." height="190 px" width="960 px">
  <div class="card-body">
    <h5 class="card-title">Music</h5>
    <p class="card-text">Bands,Dj,Sound systems,ect</p>
    <a href="/musics/1" class="btn btn-success">view</a>
  </div>
</div>
        <div class="card" style="width: 18rem;">
  <img src="/assest/hotels.jpg" class="card-img-top" alt="..." height="170 px" width="960 px">
  <div class="card-body">
    <h5 class="card-title">Hotels</h5>
    <p class="card-text">It can be decided according to the number of partipants.</p>
    <a href="/hotels/1" class="btn btn-success">view</a>
  </div>
       </div>
        
</div>
<button class="scroll-button right" onclick="scrollRight()">&gt;</button>
</div>
    



<nav aria-label="Page navigation example" >
  <ul class="pagination justify-content-center bg-dark p-4">
    <li class="page-item">
      <a class="page-link" href="/craft"><<</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="/">>></a>
    </li>
  </ul>
</nav>
</div>

  <footer class="d-flex flex-wrap justify-content-between align-items-center py-5 my-0  border-top bg-secondary p-5" data-bs-theme="dark">
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
  <script>
        function scrollLeft() {
            document.querySelector('.card-container').scrollBy({
                left: -300,
                behavior: 'smooth'
            });
        }

        function scrollRight() {
            document.querySelector('.card-container').scrollBy({
                left: 300,
                behavior: 'smooth'
            });
        }
    </script>
</body>
</html>
