<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl sm:rounded-lg" style="background-color: #eee;">
            <!-- continuew with stuff here  -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <style>
        a:hover{
            color: green;
        }

    </style>


  
    <!-- created a container to hold the messages who i'm talking to.  Created a container to hold everything -->
    <div class="container"> 
        <h1>Chat Window</h1>
        <h3>Member</h3>

        <div class="row pl-4 pb-4" >
            <!-- created a row  -->
            <div class="col-md-6 col-lg-4" style="background-color: #fff; border-radius: 25px 25px 25px 25px;">
            <!-- created a two unequal columns, one for my contacts and one for my messages -->
            <a>
            <div class= "container_one">
                <div class="d-flex flex-row pt-3 pb-3"  style= "border-bottom: 1px solid grey;">
                    <img src="/images/amaris.jpg" alt="amaris moh"
                    class="rounded-circle d-flex align-self-center me-3 shadow-1-strong " width="60" >
                    <div>
                        <p class="fw-bold">Amaris</p>
                        <p class="small text-muted">wassup hoe?</p>
                    </div>
                </div>
            </a>


                <!-- <div class="d-flex flex-row pt-3 pb-3" style= "border-bottom: 1px solid grey;">
                    <img src="/images/andre.jpg" alt="andre gillette"
                    class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                    <div class="pt-1">
                        <p class="fw-bold mb-0">Andre Gillit</p>
                        <p class="small text-muted">Stop touch me</p>
                    </div>
                </div>            
            
                <div class="d-flex flex-row pt-3 pb-3" style= "border-bottom: 1px solid grey;">
                    <img src="/images/darwyn.jpg" alt="darwyn"
                    class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                    <div class="pt-1">
                        <p class="fw-bold mb-0">darwyn Azueta</p>
                        <p class="small text-muted">Gyalis</p>
                    </div>
                </div>            

                <div class="d-flex flex-row pt-3 pb-3" style= "border-bottom: 1px solid grey;">
                    <img src="/images/linbert.jpg" alt="linbert"
                    class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                    <div class="pt-1">
                        <p class="fw-bold mb-0">linbert Seguro</p>
                        <p class="small text-muted">Boobs</p>
                    </div>
                </div>

                <div class="d-flex flex-row pt-3 pb-3" style= "border-bottom: 1px solid grey;">
                    <img src="/images/Maliq.jpg" alt="Maliq gillette"
                    class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                    <div class="pt-1">
                        <p class="fw-bold mb-0">Maliq Gillit</p>
                        <p class="small text-muted">Blacky </p>
                    </div>
                </div>

                <div class="d-flex flex-row pt-3 pb-3" style= "border-bottom: 1px solid grey;">
                    <img src="/images/shalane.jpg" alt="shalane leslie"
                    class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                    <div class="pt-1">
                        <p class="fw-bold mb-0">Andre Gillit</p>
                        <p class="small text-muted">Stop touch me</p>
                    </div>
                </div>

                <div class="d-flex flex-row pt-3 pb-3">
                    <img src="/images/zion.jpg" alt="zion castillo"
                    class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                    <div class="pt-1">
                        <p class="fw-bold mb-0">Andre Gillit</p>
                        <p class="small text-muted">Stop touch me</p>
                    </div>
                </div> -->
            </div> 

           
            </div>

        <div class="col-md-6 col-lg-7 col-xl-8" >
        <ul class="list-unstyled">
          <li class="d-flex justify-content-between mb-4">
            <img src="/images/andre.jpg" alt="avatar"
              class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60">
            <div class="card">
              <div class="card-header d-flex justify-content-between p-3">
                <p class="fw-bold mb-0">Andre Gillet</p>
                <p class="text-muted small mb-0"><i class="far fa-clock"></i> 12 mins ago</p>
              </div>
              <div class="card-body">
                <p class="mb-0">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua.
                </p>
              </div>
            </div>
          </li>
          <li class="d-flex justify-content-between mb-4">
            <div class="card w-100">
              <div class="card-header d-flex justify-content-between p-3">
                <p class="fw-bold mb-0">Darwyn Axueta</p>
                <p class="text-muted small mb-0"><i class="far fa-clock"></i> 13 mins ago</p>
              </div>
              <div class="card-body">
                <p class="mb-0">
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                  laudantium.
                </p>
              </div>
            </div>
            <img src="/images/darwyn.jpg" alt="avatar"
              class="rounded-circle d-flex align-self-start ms-3 shadow-1-strong" width="60">
          </li>
          <li class="d-flex justify-content-between mb-4">
            <img src="/images/shalane.jpg" alt="avatar"
              class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60">
            <div class="card">
              <div class="card-header d-flex justify-content-between p-3">
                <p class="fw-bold mb-0">Shalane Leslie</p>
                <p class="text-muted small mb-0"><i class="far fa-clock"></i> 10 mins ago</p>
              </div>
              <div class="card-body">
                <p class="mb-0">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua.
                </p>
              </div>
            </div>
          </li>
          <li class="bg-white mb-3">
            <div class="form-outline">
              <textarea class="form-control" id="textAreaExample2" rows="4"></textarea>
              <label class="form-label" for="textAreaExample2">Message</label>
            </div>
          </li>
          <button type="button" class="btn btn-info btn-rounded float-end">Send</button>
        </ul>

      </div>

    </div>

  </div>

        
    </div>
<!-- ----------------------------------------- -->

            </div>
        </div>
    </div>
</x-app-layout>
