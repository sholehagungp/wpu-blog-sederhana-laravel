 @extends('layouts.port')
@section('container') 

{{-- <h1>Halaman About</h1>
<h6>My name is {{ $name }}</h6>
<h6>Email:{{ $email }}</h6>  --}}



  <section class="jumbotron text-center">
    
    <img src="img/fotoku.jpeg" alt="Sholeh Agung" width="200" class="rounded-circle img-thumbnail" />
    <h1 class="display-4">{{ $name }}</h1>
    <p class="lead">{{ $job }} <br>{{ $email }} </p>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#ffffff"
        fill-opacity="1"
        d="M0,192L30,186.7C60,181,120,171,180,154.7C240,139,300,117,360,128C420,139,480,181,540,181.3C600,181,660,139,720,128C780,117,840,139,900,170.7C960,203,1020,245,1080,224C1140,203,1200,117,1260,80C1320,43,1380,53,1410,58.7L1440,64L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
      ></path>
    </svg>
  </section>
  <!-- jumbotron -->
  <section id="about">
    <div class="container">
      <div class="row text-center m">
        <div class="col">
          <h2>About Me</h2>
        </div>
      </div>
      <div class="row justify-content-center text-center">
        <div class="col-md-4">
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero nemo laboriosam, et, dolore at incidunt dolor ipsam corporis saepe ea impedit? Vel est officiis veritatis deleniti molestiae ipsam delectus voluptatem.</p>
        </div>
        <div class="col-md-4">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat placeat aliquid veniam id culpa sequi odio repudiandae in enim nisi, autem a aspernatur quia possimus repellat praesentium, tempore animi laudantium.</p>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#e2edff"
        fill-opacity="1"
        d="M0,192L34.3,181.3C68.6,171,137,149,206,133.3C274.3,117,343,107,411,112C480,117,549,139,617,154.7C685.7,171,754,181,823,165.3C891.4,149,960,107,1029,117.3C1097.1,128,1166,192,1234,208C1302.9,224,1371,192,1406,176L1440,160L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
      ></path>
    </svg>
  </section>
  <!-- akhir jumbotron -->
  <!-- project -->
  <section id="projects">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>My Projects</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/project1.jpg" class="card-img-top" alt="Projects 1" />
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/project3.jpg" class="card-img-top" alt="Projects 2" />
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/project2.jpg" class="card-img-top" alt="Projects 3" />
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#ffffff"
        fill-opacity="1"
        d="M0,128L48,149.3C96,171,192,213,288,229.3C384,245,480,235,576,202.7C672,171,768,117,864,117.3C960,117,1056,171,1152,176C1248,181,1344,139,1392,117.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
      ></path>
    </svg>
  </section>
  <!-- akhir project -->
  <!-- contact  -->
  <section id="contact">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2>Contact Me</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6">
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="name" aria-describedby="name" />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" aria-describedby="email" />
            </div>
            <div class="mb-3">
              <label for="pesan" class="form-label">Pesan</label>
              <textarea class="form-control" id="pesan" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
          </form>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path
        fill="#0dcaf0"
        fill-opacity="1"
        d="M0,32L80,53.3C160,75,320,117,480,128C640,139,800,117,960,96C1120,75,1280,53,1360,42.7L1440,32L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"
      ></path>
    </svg>
  </section>
  <!-- akhir contact -->
  <!-- footer -->
  <footer class="bg-info text-white text-center pb-5">
    <p>Created with <i class="bi bi-suit-heart-fill"></i> by <a href="https://www.instagram.com/sholehaap_/" class="text-white fw-bold">Sholeh Agung</a></p>
  </footer>
  @endsection