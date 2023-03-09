<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style2.css')}}">
    {{-- <title>Hi {{session('emp_fname')}}!</title> --}}
    <title>Emp Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>
<body>
    
        <div class="navigation">
            <ul>
                <li>{{--this is one--}}
                    <a href="#">
                        <span class="icon"><ion-icon name="cloud-outline"></ion-icon>
                        </span>
                        <span class="title">CloudWays</span>
                    </a>
                </li>
                <li>{{--this is one--}}
                    <a href="{{route('emp_home')}}">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Home</span>
                    </a>
                </li>
                
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       Projects
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @if( session('Manager') ) 
          <a class="dropdown-item" href="{{url('/assign_project',session('DeptId'))}}">Assign Project</a>
          <a class="dropdown-item" href="{{url('assigned_byme',session('DeptId'))}}">Projects Assigned by me</a>
          @endif
          <a class="dropdown-item" href="{{url('/myprojects',session('Emp_Id'))}}">Projects Assigned to me</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
                <li>{{--this is one--}}
                    <a href="#">
                        <span class="icon"><ion-icon name="calendar-number-outline"></ion-icon></span>
                        <span class="title">Calendar</span>
                    </a>
                </li>
                <li>{{--this is one--}}
                    <a href="#">
                        <span class="icon"><ion-icon name="help-circle-outline"></ion-icon></span>
                        <span class="title">Help</span>
                    </a>
                </li>
                <li>{{--this is one--}}
                    <a href="#">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Settings</span>
                    </a>
                </li>
                <li>{{--this is one--}}
                    <a href="">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="topbar">
                <!--searchbar-->
                <div class="search">
                    <label>
                    <input type="text" name="search" id="search" placeholder="Search here">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
                </div>
                <!--userimage-->
                <div class="user">
                    {{-- <ion-icon name="person-circle-outline"></ion-icon> --}}
                    <h3>Welcome {{session('Emp_Name')}}</h3>
                </div>
            </div>
            <h1></h1>
        </div>
  

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        //add hovered class in selected div
        let list = document.querySelectorAll('.navigation li');
        function activeLink(){
            list.forEach((item)=>item.classList.remove('hovered'));
            this.classList.add('hovered');
        }
        list.forEach((item)=>item.addEventListener('mouseover',activeLink));
    </script>
</body>
</html>