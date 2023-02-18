<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background: #f7f7ff;
            margin-top:20px;
        }
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid transparent;
            border-radius: .25rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
        }
        .me-2 {
            margin-right: .5rem!important;
        }
    </style>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container mt-4">
    <a href="{{ route('homepage') }}">
        <img height="80" class="logo" src="{{ asset('img/logo.png') }}" alt="Par Pacific" />
    </a>
{{--    <a  style="text-decoration: none; margin-top: 5px;" href="{{ route('homepage') }}"><h1 >Premaxcorp</h1></a>--}}
</div>

<div class="container mt-5">
    <div class="main-body">
       <div class="card">
           <div class="card-body">
               <div class="row">
                   <div class="col-lg-4">
                       <div class="card">
                           <div class="card-body">
                               <div class="d-flex flex-column align-items-center text-center">
                                   <img style="border-radius: 50%" height="200" width="200" src="{{ asset('photo/'.$project->photo ) }}" alt="Admin" class=" p-1 bg-primary" >
                                   {{--                            <img src="{{ $project->photo  }}" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">--}}
                                   <div class="mt-3">
                                       <h4>{{ $project->name }}</h4>
                                   </div>
                               </div>
                               <hr class="my-4">
                           </div>
                       </div>
                   </div>
                   <div class="col-lg-8">
                       <div class="card">
                           <div class="card-body">
                               <h5 class="d-flex align-items-center mb-3 text-primary">Contract Details</h5>
                               <div class="table-responsive">
                                   <table class="table ">
{{--                                       <tr>--}}
{{--                                           <th>Created Date:</th>--}}
{{--                                           <td>{{ date('D m.Y', strtotime($project->created_at)) }}</td>--}}
{{--                                       </tr>--}}
                                       <tr>
                                           <th>Contractor Name:</th>
                                           <td>{{ $project->name }}</td>
                                       </tr>
                                       <tr>
                                           <th>Company Name:</th>
                                           <td>{{ $project->company_name }}</td>
                                       </tr>
                                       <tr>
                                           <th>Website:</th>
                                           <td><a href="{{ $project->website }}">{{ $project->website }}</a></td>
                                       </tr>
                                       <tr>
                                           <th>Phone:</th>
                                           <td>{{ $project->phone }}</td>
                                       </tr>
                                       <tr>
                                           <th>Project Description:</th>
                                           <td>{{ $project->project_desc }}</td>
                                       </tr>

{{--                                       <tr>--}}
{{--                                           <th>Email:</th>--}}
{{--                                           <td>{{ $project->email }}</td>--}}
{{--                                       </tr>--}}
                                       <tr>
                                           <th>Address:</th>
                                           <td>{{ $project->address }}</td>
                                       </tr>
                                       <tr>
                                           <td colspan="2"><span></span></td>
                                       </tr>
                                       <tr>
                                           <th>Contract Location:</th>
                                           <td>{{ $project->contract_location }}</td>
                                       </tr>
                                       <tr>
                                           <th>Amount:</th>
                                           <td>@convert($project->amount) USD</td>
                                       </tr>
                                       <tr>
                                           <th>Date Awarded:</th>
                                           <td>{{ date('d-m-Y', strtotime($project->date_awarded)) }}</td>
                                       </tr>
                                       <tr>
                                           <th>Start Date:</th>
                                           <td>{{ date('d-m-Y', strtotime($project->start_date)) }}</td>
                                       </tr>
                                       <tr>
                                           <th>Duration:</th>
                                           <td>{{ date('d-m-Y', strtotime($project->duration)) }}</td>
                                       </tr>
                                   </table>

                               </div>
                           </div>

                       </div>
                       @if($project->certificate != null)
                           <div class="row">
                               <div class="col-sm-12">
                                   <div class="card">
                                       <div class="card-body">
                                           <h5 class="d-flex align-items-center mb-3 text-primary">Contract Certificate</h5>
                                           <div  >
                                               <img class="img-responsive"  width="700" src="{{ asset('certificate/'.$project->certificate) }}" alt="Contract Certificate">
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       @else
                       @endif

                   </div>
               </div>
           </div>
       </div>
    </div>
</div>
</body>
</html>
