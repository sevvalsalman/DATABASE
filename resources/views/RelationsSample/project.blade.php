<!DOCTYPE html>
<html>
    <head>
        <title>PROJECTS</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    </head>
    <body>

        <br> <br> <br>
        <h1 style="text-align: center;">PROJECTS</h1> <br>
        <table class="table">
            <thead class="thead-dark">
              <tr style="text-align: center;">
                <th scope="col">#</th>
                <th scope="col">COMPANY NAME</th>
                <th scope="col">NUMBER OF EMPLOYEES</th>
                <th scope="col">ADDRESS</th>

              </tr>
            </thead>
            <tbody>


                @foreach ($company as $i=>$a)

          <tr class="text-center">
            <th scope="row">{{ $a->id }}</th>
            <td scope="row">{{ $a->title }}</td>
            <td scope="row">{{ $a->head_count}}</td>
            <td scope="row">{{ $a->address }}</td>
          </tr>
          @endforeach
            </tbody>
        </table>

    </body>
</html>
