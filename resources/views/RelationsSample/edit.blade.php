<!DOCTYPE html>
<html>
    <head>
        <title>Company Update</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    </head>
    <body>
        <div class="card" style="margin: 20px;">
            <div class="card-header">KULLANICI DÜZENLE</div>
            <div class="card-body">
                <form action="{{route('update', $sirket->id)}}" method="POST">
                    @csrf

                    <input type="hidden" name="id" id="id" value="{{$sirket->id}}" id="id" />

                    <label>Şirket Adı</label></br>
                    <input type="text" name="title" id="name" value="{{$sirket->title}}" class="form-control"></br>

                    <label>Şirket Çalışan Sayısı</label></br>
                    <input type="text" name="head_count" id="head_count" value="{{$sirket->head_count}}" class="form-control"></br>

                    <label>Şirket Adresi</label></br>
                    <input type="text" name="address" id="address" value="{{$sirket->address}}" class="form-control"></br>


                    <input type="submit" value="Güncelle" class="btn btn-success" ></br>
                </form>

              </div>
            </div>

    </body>
</html>
