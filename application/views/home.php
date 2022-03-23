<style>
.padding {
    padding: 3rem !important
}

.user-card-full {
    overflow: hidden
}

.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
    box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
    border: none;
    margin-bottom: 30px
}

.m-r-0 {
    margin-right: 0px
}

.m-l-0 {
    margin-left: 0px
}

.user-card-full .user-profile {
    border-radius: 5px 0 0 5px
}

.bg-c-lite-green {
    background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
    background: linear-gradient(to right, #ee5a6f, #f29263)
}

.user-profile {
    padding: 20px 0
}

.card-block {
    padding: 1.25rem
}

.m-b-25 {
    margin-bottom: 25px
}

.img-radius {
    border-radius: 5px
}

h6 {
    font-size: 14px
}

.card .card-block p {
    line-height: 25px
}

@media only screen and (min-width: 1400px) {
    p {
        font-size: 14px
    }
}

.card-block {
    padding: 1.25rem
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0
}

.m-b-20 {
    margin-bottom: 20px
}

.p-b-5 {
    padding-bottom: 5px !important
}

.card .card-block p {
    line-height: 25px
}

.m-b-10 {
    margin-bottom: 10px
}

.text-muted {
    color: #919aa3 !important
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0
}

.f-w-600 {
    font-weight: 600
}

.m-b-20 {
    margin-bottom: 20px
}

.m-t-40 {
    margin-top: 20px
}

.p-b-5 {
    padding-bottom: 5px !important
}

.m-b-10 {
    margin-bottom: 10px
}

.m-t-40 {
    margin-top: 20px
}

.user-card-full .social-link li {
    display: inline-block
}

.user-card-full .social-link li a {
    font-size: 20px;
    margin: 0 10px 0 0;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out
}
</style>

<div class="row">
    <div class='col-md-12'>
        <h2>Employees</h2>
        <table class="table" id="employee_table">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Jobtitle</td>
                    <td>Details</td>
                </tr>
            </thead>
            <tbody>
                <?php
foreach ($employees as $employee):
?>
                <tr>
                    <td><?php echo $employee->lastName . ', ' . $employee->firstName ?></td>
                    <td><?php echo $employee->email ?></td>
                    <td><?php echo $employee->jobTitle ?></td>
                    <td><button class="btn btn-primary employee_details"
                            data-id="<?php echo $employee->employeeNumber ?>">details</button></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>


<div class="modal" tabindex="-1" role="dialog" id="employee_details_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Employee information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png"
                                        class="img-radius" alt="User-Profile-Image"> </div>
                                <h6 class="f-w-600 employee_name">Hembo Tingor</h6>
                                <p class="employee_jobTitle">Web Designer</p> <i
                                    class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-400 employee_email">rntng@gmail.com</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Reports to</p>
                                        <h6 class="text-muted f-w-400 employee_reportsTo">Sam Disuja</h6>
                                    </div>
                                </div>
                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title=""
                                            data-original-title="facebook" data-abc="true"><i
                                                class="mdi mdi-facebook feather icon-facebook facebook"
                                                aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title=""
                                            data-original-title="twitter" data-abc="true"><i
                                                class="mdi mdi-twitter feather icon-twitter twitter"
                                                aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title=""
                                            data-original-title="instagram" data-abc="true"><i
                                                class="mdi mdi-instagram feather icon-instagram instagram"
                                                aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {

    $("#employee_table").dataTable();
    $(".employee_details").on('click', function(e) {
        $.ajax({
            type: "get",
            url: site_url + "/ajax/Employee_ajax/get_employee_details/" + $(this).data('id'),
            success: function(response) {

                $(".employee_name").html(response.firstName + ' ' + response.lastName);
                $(".employee_jobTitle").html(response.jobTitle);
                $(".employee_email").html(response.email);
                $(".employee_reportsTo").html(response.sup_firstName + ' ' + response
                    .sup_lastName);
                $("#employee_details_modal").modal('show');
            }
        });
    });
});
</script>