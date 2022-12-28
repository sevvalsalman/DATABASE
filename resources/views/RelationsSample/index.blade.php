<!DOCTYPE html>
<html>
<head>
    <title>RELATİON DATABASE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>



    <br> <br> <br>
    <h1 style="text-align: center;">RELATİONAL DATABASE</h1> <br>
     <a href="{{ 'create' }}"> <button type="button" class="btn btn-info" style="margin-left: 20px;">Add Company</button></a>
     <a href="{{ 'projects' }}"> <button type="button" class="btn btn-info" style="margin-left: 20px;">Projects</button></a>
     <table class="table">
     <table class="table">
        <thead class="thead-dark">
          <tr style="text-align: center;">
            <th scope="col">#</th>
            <th scope="col">COMPANY NAME</th>
            <th scope="col">NUMBER OF EMPLOYEES</th>
            <th scope="col">ADDRESS</th>
            <th scope="col">NUMBER OF PROJECTS</th>
            <th scope="col">ACTION</th>
          </tr>
        </thead>

        <tbody>
            @foreach ($company as $i=>$a)

          <tr class="text-center">
            <th scope="row">{{ $a->id }}</th>
            <td scope="row">{{ $a->title }}</td>
            <td scope="row">{{ $a->head_count}}</td>
            <td scope="row">{{ $a->address }}</td>
            <td  scope="row" class="text-center"><a href="{{ route('numberprojects',$a->id) }}" class="btn btn-success">
                {{ $a->projects->count();}}
              </a></td>
            <td>
                <a href="{{ route('edit',$a->id) }}" class="btn btn-warning">EDİT</a>
                <a href="{{ route('destroy',$a->id) }}" class="btn btn-danger" onclick="return window.confirm('Silmek istediğinize emin misiniz?');" title="Delete" onclick="return confirm("Confirm delete?")">DELETE</a>

            </td>


          </tr>
          @endforeach
        </tbody>
      </table>


</body>
</html>
