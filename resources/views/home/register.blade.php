@extends('layouts/app')

@section('content')
<div class="donatecontainer mx-auto">
    <div class="container">
        <div class="row text-center mb-5 mt-5">
            <div class="col">
                <h1 class="serverinformation">Register</h1>
            </div>

        </div>
        <div class="row mt-5">
            <div class="col">
                <form action="" method="">
                    <div class="mb-3">
                        <label for="username" class="form-label customtextforlabel">Username</label>
                        <input type="text" class="form-control" id="username" aria-describedby="emailHelp"
                            name="username">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label customtextforlabel">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email"
                            required>
                        <div id="emailHelp" class="form-text descriptionserver">We'll never share your email with anyone
                            else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="birthdate" class="form-label customtextforlabel">Birthdate</label>
                        <input type="text" class="form-control datetimepicker" id="birthdate" name="birthdate" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label customtextforlabel">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <div class="mb-3">
                        <label for="radio" class="form-label customtextforlabel">Gender</label> <br>
                        <input class="form-check-input" type="radio" name="radio" id="flexRadioDefault1" value="male">
                        <label class="form-check-label descriptionserver" for="flexRadioDefault1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio" id="flexRadioDefault2" value="female">
                        <label class="form-check-label descriptionserver" for="flexRadioDefault2">
                            Female
                        </label>
                    </div>
                 
                    <div class="d-flex justify-content-center mt-5">
                        <button type="submit" class="btn customforbutton">Create My Account</button>
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>
@endsection