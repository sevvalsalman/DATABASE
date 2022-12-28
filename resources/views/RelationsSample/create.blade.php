<!DOCTYPE html>
<html>
    <head>
        <title>Company Create</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


    </head>
<body>

    <div class="card" style="margin: 20px;">
        <div class="card-header"><b>Yeni Şirket Oluşturun</b></div>
        <div class="card-body">
            <form action="{{route('store')}}" method="POST">
                @csrf
            <label>Şirket Adı</label></br>
            <input type="text" name="title" id="name" class="form-control"></br>
            <label>Şirket Çalışan Sayısı</label></br>
            <input type="text" name="head_count" id="head_count" class="form-control"></br>
            <label>Şirket Adresi</label></br>
            <input type="text" name="address" id="address" class="form-control"></br>
            <label>Şirket Proje Sayısı</label></br>
            <input type="text" name="head_count" id="amount" class="form-control"></br>
            <input type="submit" value="Kaydet" class="btn btn-success"></br>

            </form>

        </div>

    </div>



</body>
</html>
