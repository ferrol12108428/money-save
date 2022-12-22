<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=<h1, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title> Ferrol Dimas Styadijaya</title>
</head>
</body>
<div class="mt-5 container">
  <div class="text-center">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{$message}}</p>
    </div>
    @endif
    @if ($message = Session::get('failed'))
    <div class="alert alert-danger">
      <p>{{$message}}</p>
    </div>
    @endif
    @if ($message = Session::get('edited'))
    <div class="alert alert-warning">
      <p>{{$message}}</p>
    </div>
    @endif
  </div>
  <div class="container">
    <div class="card">
      <div class="card-header text-center bg-dark text-light">
        <h1>Savings</h1>
      </div>
      <div class="mt-3 ms-4 text-start">
        <a href="{{ route('create') }}" class="btn btn-outline-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
          </svg> Add Data</a>
      </div>
      <table class="mt-3 text-center table table-stripped">
        <tr>
          <th style="width: 100px">No</th>
          <th style="width: 100px;">Id</th>
          <th style="width: 100px;">Nama</th>
          <th style="width: 100px;">Nis</th>
          <th style="width: 100px;">Rayon</th>
          <th style="width: 100px;">Uang</th>
          <th style="width: 280px;">Action</th>
        </tr>
        <?php $i = 1; ?>
        @foreach ($data as $datas)
        <div>
          <tr>
            <td>{{$i++}}</td>
            <td>{{$datas->id}}</td>
            <td>{{$datas->Nama}}</td>
            <td>{{$datas->Nis}}</td>
            <td>{{$datas->Rayon}}</td>
            <td>Rp.{{$datas->Uang}}</td>
            <td>
              <form action="{{route('delete',$datas->id)}}" method="POST">
                @csrf
                <a href="{{route('indexEdit',$datas->id)}}" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                  </svg> Edit</a>
                <button class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                  </svg> Delete</button>
              </form>
            </td>
          </tr>
        </div>
        @endforeach
      </table>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>

</html>