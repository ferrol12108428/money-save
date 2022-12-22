<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<h1, initial-scale=1.0"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title> Ferrol Dimas Styadijaya</title>
<!-- </head>
</body> -->

@if ($message = Session::get('success'))
    <div>
        <p>{{$message}}</p>
    </div>
    @endif
    <div class="container mt-5 text-center">
        <div class="card">
            <div class="card-header bg-dark text-light">
                <h1>Edit Data</h1>
            </div>
            <div class="card-body">
                <form action="{{route('update', $data->id) }}" method="POST">
                    @csrf
                    <label>Tambahkan Uang:</label><br>
                    <select class="mt-2" name="action">
                        <option value="add">Add Money</option>
                        <option value="take">Take Money</option>
                    </select><br>
                    <input type="integer" name="Uang" placeholder="{{$data->Uang}}" class="mt-2 form"><br>
                    <button type="submit" class="mt-4 btn btn-outline-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                    <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
                    </svg> Send</button>
                </form>
            </div>
        </div>
    </div>