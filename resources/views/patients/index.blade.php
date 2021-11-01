<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <meta name="csrf-token" content="{{ csrf_token() }}" /> -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">        
        <title>Ajax Form</title>
    </head>
    <body>
        <div class="container">
            <br>
            <div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                اطلاعات خود را ثبت کنید
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">ثبت اطلاعات</h5>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('patients.store') }}" method="post">
                                    @csrf
                                    <label for="fname">نام :</label>
                                    <input type="text" name="fname" id="fname" class="form-control">
                                    <span id="alert-fname" class="text-danger" style="font-size:12px;"></span>
                                    <br>

                                    <label for="lname">نام خانوادگی :</label>
                                    <input type="lname" name="lname" id="lname" class="form-control">
                                    <span id="alert-lname" class="text-danger" style="font-size:12px;"></span>
                                    <br>

                                    <label for="nationalcode">کد ملی :</label>
                                    <input type="nationalcode" name="nationalcode" id="nationalcode" class="form-control">
                                    <span id="alert-nationalcode" class="text-danger" style="font-size:12px;"></span>
                                    <br>

                                    <label for="sex">جنسیت :</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sex" id="sex" value="0">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            زن
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sex" id="sex" value="1" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            مرد
                                        </label>
                                    </div>
                                    <br>

                                    <label for="age">سن :</label>
                                    <input type="age" name="age" id="age" class="form-control">
                                    <span id="alert-age" class="text-danger" style="font-size:12px;"></span>
                                    <br>

                                    <label for="married">تاهل :</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="married" id="married" value="0">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            مجرد
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="married" id="married" value="1" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            متاهل
                                        </label>
                                    </div>
                                    <br>

                                    <label for="mobile">موبایل :</label>
                                    <input type="mobile" name="mobile" id="mobile" class="form-control">
                                    <span id="alert-mobile" class="text-danger" style="font-size:12px;"></span>
                                    <br>

                                    <label for="users_id">شناسه کاربری :</label>
                                    <input type="users_id" name="users_id" id="users_id" class="form-control">
                                    <span id="alert-users_id" class="text-danger" style="font-size:12px;"></span>
                                    <br>

                                    <label for="mainid">شخص :</label>
                                    <select class="form-select" name="mainid" aria-label="Default select example">
                                        <option value="1" selected>خودم</option>
                                        <option value="2">مادر</option>
                                        <option value="3">پدر</option>
                                        <option value="4">همسر</option>
                                        <option value="5">خواهر</option>
                                        <option value="6">برادر</option>
                                        <option value="7">فرزند</option>
                                        <option value="8">غیره </option>
                                    </select>
                                    <br>
                                    
                                    <input type="button" id="send-request" value="ذخیره" class="btn btn-primary">

                                </form>
                            </div>
                            <!-- <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">بستن</button>
                                <input type="button" id="send-request" value="ذخیره" class="btn btn-primary">
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <script>
            $.ajaxSetup({
                headers: {        
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')        
                }        
            }); 

            $("#send-request").click(function(e){
                
                e.preventDefault();
                var fname = $("input[name=fname]").val(); 
                var lname = $("input[name=lname]").val(); 
                var nationalcode = $("input[name=nationalcode]").val(); 
                var sex = $("input[name=sex]").val(); 
                var age = $("input[name=age]").val(); 
                var married = $("input[name=married]").val(); 
                var users_id = $("input[name=users_id]").val(); 
                var mainid = $("input[name=mainid]").val(); 

                var data = 
                {
                    fname:fname, 
                    lname:lname, 
                    nationalcode:nationalcode, 
                    sex:sex, 
                    age:age, 
                    married:married, 
                    mobile:mobile, 
                    users_id:users_id, 
                    mainid:mainid
                };

                $.ajax({
                    type:'POST',        
                    dataType:'json', 
                    url:"/ajaxRequest",        
                    data:data,        
                    success:function(data){        
                        alert(data.success);
                    }        
                });  


            });

        </script> -->

    </body>

    

</html>
