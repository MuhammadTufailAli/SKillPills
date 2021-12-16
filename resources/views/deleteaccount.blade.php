@extends('template')


@section('content')

<link rel="stylesheet" href="/css/changepassword.css">
<section class="content-header">
    <h1>Delete account
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
                &nbsp;Delete account</span>

        </span>

    </span>
    <br>
    <br>

</section>
<section class="content my-notes change-pass">
    <div class="row1 margin">
        <div class="panel panel-default">
            <form action="/deleteaccount" method="POST">
                @csrf
                <table class="table border table-responsive" style="width: 100%">
                    <tbody>
                        <tr class="bg-gray-light">
                            <td class="text-bold" colspan="3">
                                <span>&nbsp;</span>

                            </td>

                        </tr>
                        <tr>

                            <h4>Deleting account</h4>

                        </tr>
                        <tr>

                            <td style="width: 20%" nowrap="nowrap">
                                <span class="pull-right text-bold">Password</span>
                            </td>
                            <td style="width: 80%" nowrap="nowrap">
                                <input type="password" name="password" placeholder="Enter password to delete account" required maxlength="16" class="form-control" style="height: 45px;">


                            </td>
                        </tr>


                        <td>&nbsp;
                        </td>
                        <td>
                            <input type="submit" name="submit" value="Confirm" class="btn btn-primary" style="width: 70px">
                            <a class="btn btn-primary" style="display: inline-block;width: 70px">
                                Cancel
                            </a>
                            <?php
                            if (empty($error)) {
                            } else {
                                echo $error;
                            }
                            ?>

                        </td>
                        </tr>
                    </tbody>

                </table>
            </form>

        </div>

    </div>
</section>


<h1 style="color: #ecf0f5;">SAMPLE TEXT</h1>
<h1 style="color: #ecf0f5;">SAMPLE TEXT</h1>
<h1 style="color: #ecf0f5;">SAMPLE TEXT</h1>
<h1 style="color: #ecf0f5;">SAMPLE TEXT</h1>




@endsection