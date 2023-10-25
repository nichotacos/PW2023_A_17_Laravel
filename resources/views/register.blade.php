@extends('dashboard') @section('content')

<div class="content">
    <div class="container d-flex justify-content-center" style="margin-top: 87px;">
        <div class="container d-flex justify-content-center"
            style="border: solid; border-color: #5EE137; border-radius: 7%; margin-top: 50px; margin-left: 320px; margin-right: 320px; box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);">
            <div class="container py-5 px-5">
                <form class=" row g-3 needs-validation" style="padding-left: 10px; padding-right: 10px;" novalidate>
                    <p style="font-size: 32px; font-weight: bold;">Register New Account</p>
                    <hr>
                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label">First name</label>
                        <input type="text" class="form-control" id="validationCustom01" value="" required>
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom02" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="validationCustom02" value="" required>
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustomUsername" class="form-label">Email</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            <input type="email" class="form-control" id="validationCustomUsername"
                                aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Please input an email.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom05" class="form-label">Username</label>
                        <input type="text" class="form-control" id="validationCustom05" required>
                        <div class="invalid-feedback">
                            Please provide a valid username.
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom03" class="form-label">Telephone</label>
                        <input type="tel" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Please provide a valid phone number.
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom04" class="form-label">Password</label>
                        <input type="password" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Please select a valid Password.
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom04" class="form-label">Password Confirmation</label>
                        <input type="password" class="form-control" id="validationCustom03" required>
                        <div class="invalid-feedback">
                            Password don't match.
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="col-12">
                            <button class="submit-button" type="submit"
                                style="background-color: #5EE137; border: none; padding: 5px; padding-left: 15px; padding-right: 15px;">Sign
                                Up</button>
                            <!-- onclick="if(formIsValid() ($('#triggerModal').click())); -->
                            <!-- <button type="submit" id="triggerModal" hidden value="Submit" class="btn btn-info btn-lg"
                                data-toggle="modal" data-target="#staticBackdrop2"></button> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<script>
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
                $("#staticBackdrop2").modal('show');
            }, false)
        })
    })()
</script>


@endsection