@extends('template')

@section('content')
<link rel="stylesheet" " href=" /css/notes.css">
<section class="content-header">
    <h1>Notes
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
                &nbsp;Notes</span>

        </span>


    </span>
    <br>
    <br>

</section>

<section id="main" class="content">
    <div class="nav-tabs-custom">
        <div class="tab-content margin">
            <div class="row">
                <div style="width: 100%">
                    <table class="table table-hover table-bordered table-striped table-responsive " cellspacing="0" rules="all" border="1" style="border-collapse:collapse;">
                        <tbody>
                            <tr>
                                <td>
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                        <tbody>
                                            <tr>
                                                <td class="error" style="text-align: center;font-size: 18px;">No note(s) in My Notes!
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <div>
                        <a href="/addnote">
                            <input type="submit" name="" value="Add Note" style="width: 80px;" class="btn btn-primary pull-left margin-bottom">
                        </a>
                    </div>

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