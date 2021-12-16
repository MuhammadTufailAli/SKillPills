@extends('template')

@section('content')
<link rel="stylesheet" " href=" /css/addnote.css">
<section class="content-header">
    <h1>Add note
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
            <span style="font-family: 'Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif; font-weight:400;color: #007bff;">
                &nbsp;Notes</span>

        </span>
        <span>
            <span class="fas fa-caret-right">

            </span>
        </span>
        <span class="fa fa-book margin">
            <span style="font-family: 'Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif; font-weight:400">
                &nbsp;Add Note</span>

        </span>

    </span>
    <br>
    <br>

</section>
<section id="main" class="content my-notes">
    <div class="nav-tabs-custom">
        <div class="tab-content margin">
            <div class="row">
                <table class="table table-bordered table-responsive">
                    <tbody>
                        <tr>
                            <td>
                                <span class="pull-right" style="font-size: 18px;">Title</span>
                            </td>
                            <td>
                                <input type="text" maxlength="100" class="form-control">
                                <span style="color:Red;display:none;">Please enter title.</span>
                                <span style="color:Red;visibility:hidden;"></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="txtbold" style="text-align: right; vertical-align: top; width: 10%;font-size: 18px;" nowrap="nowrap">Note
                            </td>
                            <td style="vertical-align: top;" nowrap="nowrap">
                                <textarea rows="2" cols="20" class="form-control" style="height:175px;"></textarea>
                                <span style="color:Red;display:none;">Please enter note.</span>
                                <span style="color:Red;visibility:hidden;"></span>
                            </td>
                        </tr>

                        <tr>
                            <td class="txtbold" style="text-align: right; vertical-align: top; width: 10%;" nowrap="nowrap">

                            </td>
                            <td style="width: 30%; vertical-align: top;" nowrap="nowrap">
                                <div class="g-recaptcha"></div>
                            </td>
                            <td></td>
                        </tr>


                        <tr>
                            <td nowrap="nowrap"></td>
                            <td nowrap="nowrap" colspan="2">
                                <input type="submit" value="Add" class="btn btn-primary" style="width:80px;">
                                <input type="submit" value="Cancel" class="btn btn-primary" style="width:80px;">
                                <span class="error"></span>
                                <input type="hidden">
                                <input type="submit" value="This button is hidden and will actually 'clicked' after reCAPTCHA sets the hidden field." class="hide">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection