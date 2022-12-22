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
    <div class="card">
        <div class="card-header text-center bg-dark text-light">
            <h1>Add Data</h1>
        </div>
        <div class="card-body bg-light">
            <form action="{{ route('store') }}" method="POST">
                @csrf
                <label for="Name">Name:</label><br>
                <input class="form-control" type="text" name="Nama" placeholder="Masukan Nama....">
                <label for="">Nis:</label><br>
                <input class="form-control" type="integer" name="Nis" placeholder="1210****" maxlength="8" minlength="8">
                <label for="">Uang :</label>
                <input class="form-control" type="integer" name="Uang">
                <label for="">Rayon :</label>
                <select class="form-control" name="Rayon" id="rayon">
                    @for ($i = 1; $i <= 5; $i++)
                        <option>Ciawi {{ $i }}</option>
                    @endfor
                    @for ($i = 1; $i <= 3; $i++)
                        <option>Cibedug {{ $i }}</option>
                    @endfor
                    @for ($i = 1; $i <= 7; $i++)
                        <option>Cicurug {{ $i }}</option>
                    @endfor
                    @for ($i = 1; $i <= 6; $i++)
                        <option>Cisarua {{ $i }}</option>
                    @endfor
                    @for ($i = 1; $i <= 5; $i++)
                        <option>Tajur {{ $i }}</option>
                    @endfor
                    @for ($i = 1; $i <=2; $i++)
                        <option>Sukasari {{ $i }}</option>
                    @endfor
                    @for ($i = 1; $i <=4; $i++)
                        <option>Wikrama {{ $i }}</option>
                    @endfor
                </select>
                <div class="text-center">
                    <button class="btn btn-outline-success mt-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                    <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
                    </svg> Send</button>
                </div>
            </form>
        </div>
    </div>
</div>