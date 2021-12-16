@extends('template')

@section('content')
<link rel="stylesheet" " href=" /css/Results.css">
<section class="content-header">
    <h1>Results
        <small>&nbsp;</small>
    </h1>
    <span class="breadcrumb">
        <span class="fa fa-home margin1">
            <a href="" style="font-family: 'Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif; font-weight:400">
                &nbsp;Home
            </a>
        </span>
        <span>
            <span class="fas fa-caret-right">

            </span>
        </span>
        <span class="fa fa-book margin">
            <span style="font-family: 'Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif; font-weight:400">
                &nbsp;Results</span>

        </span>


    </span>
    <br>
    <br>

</section>
<section id="main" class="content">
    <!-- Small boxes (Stat box) -->
    <div class="nav-tabs-custom">
        <div class="tab-content margin">
            <div class="row">
                <div class="table-responsive">

                    <div>
                        <table class="table table-hover table-bordered table-striped table-responsive ResultDiv" cellspacing="0" rules="all" border="1" style="border-collapse:collapse;">
                            <tbody>
                                <tr align="center" style="background-color:#EBF0F5;">
                                    <td colspan="4"></td>
                                    <td colspan="4" style="background-color:#B7C9DB;font-weight:bold;font-size: 16px;">PARTICIPATION</td>
                                    <td colspan="4"></td>
                                </tr>
                                <tr align="center" style="background-color:#EBF0F5;">
                                    <th scope="col" style="font-size: 16px;">Sr.No.</th>
                                    <th scope="col" style="font-size: 16px;">Batch</th>
                                    <th scope="col" style="font-size: 16px;">Course</th>
                                    <th scope="col" style="font-size: 16px;">Completion Criteria (%)</th>
                                    <th scope="col" style="font-size: 16px;">Exercises (%)</th>
                                    <th scope="col" style="font-size: 16px;">Quizzes (%)</th>
                                    <th scope="col" style="font-size: 16px;">Videos (%)</th>
                                    <th scope="col" style="font-size: 16px;">Total (%)</th>
                                    <th scope="col" style="font-size: 16px;">Status</th>
                                    <th class="hiddencol" scope="col" style="width:0%;">StudentID</th>
                                    <th class="hiddencol" scope="col" style="width:0%;">CourseCode</th>
                                    <th align="left" scope="col" style="font-size: 16px;">Certificate</th>
                                </tr>
                                <tr>
                                    <td colspan="12">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tbody>
                                                <tr>
                                                    <td class="error" style="text-align: center;font-size: 16px;">No Record Found
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
</section>

<h1 style="color: #ecf0f5;">SAMPLE TEXT</h1>
<h1 style="color: #ecf0f5;">SAMPLE TEXT</h1>
<h1 style="color: #ecf0f5;">SAMPLE TEXT</h1>
<h1 style="color: #ecf0f5;">SAMPLE TEXT</h1>
<h1 style="color: #ecf0f5;">SAMPLE TEXT</h1>
<h1 style="color: #ecf0f5;">SAMPLE TEXT</h1>
<h1 style="color: #ecf0f5;">SAMPLE TEXT</h1>
@endsection